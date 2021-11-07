<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view(
            'league.league',
            [
                "doctitle" => "League",
                "title" => "List of Soccer Leagues",
                "leagues" => League::orderBy('created_at', 'asc')->orderBy('name', 'asc')->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view(
            'league.createleague',
            [
                "doctitle" => "League",
                "title" => "Create League Data",
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $invalidateDuplication = League::where(['code' => $request->code])->first();
        // if ($invalidateDuplication) {
        //     return redirect()->back()->withErrors('Data with '.$request->code.' code already in the database.');
        // }

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $img_name = $request->code . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/league');
            $image->move($destinationPath, $img_name);

            $this->validate($request, [
                'code' => 'required|unique:leagues,code|min:5|max:50',
                'name' => 'required|min:5|max:50',
                'original_name' => 'required|min:5|max:50',
                'nation' => 'required|min:3|max:50',
                'pyramid_level' => 'required',
                'season' => 'required|min:4|max:9',
                'description' => 'required',
            ], [], [
                'pyramid_level' => 'level on pyramid'
            ]);
        } else {
            $this->validate($request, [
                'code' => 'required|unique:leagues,code|min:5|max:50',
                'name' => 'required|min:5|max:50',
                'original_name' => 'required|min:5|max:50',
                'nation' => 'required|min:3|max:50',
                'pyramid_level' => 'required',
                'season' => 'required|min:4|max:9',
                'img_name' => 'required',
                'description' => 'required',
            ], [], [
                'pyramid_level' => 'level on pyramid'
            ]);
        }
        League::create(
            [
                'code' => $request->code,
                'name' => $request->name,
                'original_name' => $request->original_name,
                'nation' => $request->nation,
                'pyramid_level' => $request->pyramid_level,
                'season' => $request->season,
                'img_name' => $img_name,
                'description' =>  $request->description,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );
        return redirect(route('league.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        //
        return view(
            'league.showleague',
            [
                "doctitle" => "League",
                "title" => "League Details",
                "league" => League::where('code', $code)->get()->first()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        //
        return view(
            'league.editleague',
            [
                "doctitle" => "League",
                "title" => "Edit League Data",
                "league" => League::findOrFail($code)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        //
        $league = League::findOrFail($code);
        if ($league->code != $request->code) {
            $this->validate($request, [
                'code' => 'required|unique:leagues,code|min:5|max:50',
                'name' => 'required|min:5|max:50',
                'original_name' => 'required|min:5|max:50',
                'nation' => 'required|min:3|max:50',
                'pyramid_level' => 'required',
                'season' => 'required|min:4|max:9',
                'description' => 'required',
            ], [], [
                'pyramid_level' => 'level on pyramid'
            ]);
        } else {
            $this->validate($request, [
                'code' => 'required|min:5|max:50',
                'name' => 'required|min:5|max:50',
                'original_name' => 'required|min:5|max:50',
                'nation' => 'required|min:3|max:50',
                'pyramid_level' => 'required',
                'season' => 'required|min:4|max:9',
                'description' => 'required',
            ], [], [
                'pyramid_level' => 'level on pyramid'
            ]);
        }

        if ($request->hasFile('img')) {
            unlink(public_path().'\images\league\\'.$league->img_name);
            $image = $request->file('img');
            $img_name = $request->code . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/league');
            $image->move($destinationPath, $img_name);
        } else {
            if ($league->code == $request->code) {
                $img_name = $league->img_name;
            } else {
                $extension = strrchr($league->img_name, '.');
                rename(public_path().'\images\league\\' . $league->code . $extension, public_path().'\images\league\\' . $request->code . $extension);
                $img_name = $request->code . $extension;
            }
        }
        $league->update(
            [
                'code' => $request->code,
                'name' => $request->name,
                'original_name' => $request->original_name,
                'nation' => $request->nation,
                'pyramid_level' => $request->pyramid_level,
                'season' => $request->season,
                'img_name' => $img_name,
                'description' =>  $request->description,
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );
        return redirect(route('league.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\League  $league
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        //
        $league = League::findOrFail($code);
        unlink(public_path().'\images\league\\'.$league['img_name']);
        $league->delete();
        return redirect(route('league.index'));
    }
}
