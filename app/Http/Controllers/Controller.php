<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Club;
use App\Models\League;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
        $leagues = League::orderBy('created_at', 'asc')->orderBy('name', 'asc')->get();
        $clubs = array();
        foreach ($leagues as $league) {
            array_push($clubs, Club::where('in_league', $league['code'])->inRandomOrder()->limit(4)->get());
        }
        return view(
            'main.home',
            [
                "doctitle" => "Home",
                "title" => "Soccer Leagues Around The World",
                "clubs" => $clubs,
                "leagues" => $leagues
            ]
        );
    }
}
