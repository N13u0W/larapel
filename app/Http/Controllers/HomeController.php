<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $activity = new Activity;
        $list = $activity->all();
        return view('home', compact('data'));
    }
    public function add()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required|min:4|max:20|alpha:ascii'
        ],[
            'activity_name.required' => 'pake mikir',
            'activity_name.min' => 'activity name min 4 char!',
            'activity_name.max' => 'activity name max 20 char!',
            // 'activity_name.alpha' => 'kudu string!',
        ]);

        $activity = new Activity;
        $activity->activity_name = $request->activity_name;
        $activity->save();

        // $activity->create([
        //     'activity_name' => $request->activity_name
        // ]);

       return redirect('home')->with('success', 'Activity has added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $activity = new Activity;
        $activity= $activity_name = $request->activity_name;
        $activity->save();
            return abort(404, 'Activity not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $activity = new Activity;
        $data = $activity->find($id);
        $data->delete();
        return redirect('/')->with('success', 'activity has been deleted!');
    }
}

