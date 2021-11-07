<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\League;
use Illuminate\Http\Request;

class ClubController extends Controller
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
            'club.club',
            [
                "doctitle" => "Club",
                "title" => "List of Soccer Clubs",
                "clubs" => Club::all(),
                "leagues" => League::orderBy('name', 'asc')->get()
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
            'club.createclub',
            [
                "doctitle" => "Club",
                "title" => "Create Club Data",
                "leagues" => League::orderBy('name', 'asc')->get()
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
        //

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $img_name = str_replace(' ', '', $request->name) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/club');
            $image->move($destinationPath, $img_name);

            $this->validate($request, [
                'name' => 'required|min:5|max:50',
                'city' => 'required|min:5|max:50',
                'stadium' => 'required|min:5|max:50',
                'apparel' => 'required|min:1|max:50',
                'sponsor' => 'required|min:1|max:50',
                'coach' => 'required|min:5|max:50',
                'captain' => 'required|min:5|max:50',
                'in_league' => 'required|min:5|max:50',
                'description' => 'required',
            ], [], [
                'city' => 'location',
                'stadium' => 'venue',
                'in_league' => 'league'    
            ]);
        } 
        else {
            $this->validate($request, [
                'name' => 'required|min:5|max:50',
                'city' => 'required|min:5|max:50',
                'stadium' => 'required|min:5|max:50',
                'apparel' => 'required|min:1|max:50',
                'sponsor' => 'required|min:1|max:50',
                'coach' => 'required|min:5|max:50',
                'captain' => 'required|min:5|max:50',
                'in_league' => 'required|min:3|max:50',
                'img_name' => 'required',
                'description' => 'required',
            ], [], [
                'city' => 'location',
                'stadium' => 'venue',
                'img_name' => 'logo',
                'in_league' => 'league'    
            ]);
        }
        Club::create(
            [
                'name' => $request->name,
                'city' => $request->city,
                'stadium' => $request->stadium,
                'apparel' => $request->apparel,
                'sponsor' => $request->sponsor,
                'coach' => $request->coach,
                'captain' => $request->captain,
                'in_league' => $request->in_league,
                'img_name' => $img_name,
                'description' =>  $request->description,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );
        return redirect(route('club.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view(
            'club.showclub',
            [
                "doctitle" => "Club",
                "title" => "Club Details",
                "club" => Club::where('id', $id)->get()->first()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view(
            'club.editclub',
            [
                "doctitle" => "Club",
                "title" => "Club Details",
                "club" => Club::findOrFail($id),
                "leagues" => League::orderBy('name', 'asc')->get()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $club = Club::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|min:5|max:50',
            'city' => 'required|min:5|max:50',
            'stadium' => 'required|min:5|max:50',
            'apparel' => 'required|min:1|max:50',
            'sponsor' => 'required|min:1|max:50',
            'coach' => 'required|min:5|max:50',
            'captain' => 'required|min:5|max:50',
            'in_league' => 'required|min:3|max:50',
            'description' => 'required',
        ], [], [
            'city' => 'location',
            'stadium' => 'venue',
            'in_league' => 'league'    
        ]);

        if ($request->hasFile('img')) {
            if (file_exists('\images\club\\'.$club['img_name'])) {
                unlink(public_path().'\images\club\\'.$club['img_name']);
            }
            $image = $request->file('img');
            $img_name = str_replace(' ', '', $request->name) .  '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/club');
            $image->move($destinationPath, $img_name);
        } else {
            $extension = strrchr($club->img_name, '.');
            $img_name = str_replace(' ', '', $request->name) . $extension;
            rename(public_path().'\images\club\\' . $club->img_name, public_path().'\images\club\\' . $img_name);
        }
        $club->update(
            [
                'name' => $request->name,
                'city' => $request->city,
                'stadium' => $request->stadium,
                'apparel' => $request->apparel,
                'sponsor' => $request->sponsor,
                'coach' => $request->coach,
                'captain' => $request->captain,
                'in_league' => $request->in_league,
                'img_name' => $img_name,
                'description' =>  $request->description,
                'updated_at' => \Carbon\Carbon::now(),
            ]
        );
        return redirect(route('club.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $club = Club::findOrFail($id);
        if (file_exists('\images\club\\'.$club['img_name'])) {
            unlink(public_path().'\images\club\\'.$club['img_name']);
        }
        $club->delete();
        return redirect(route('club.index'));
    }
}
