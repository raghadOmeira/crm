<?php

namespace App\Http\Controllers;
use App\Models\activities;
use Illuminate\Http\Request;

class activitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = activities::all();
        return view('activities.index', ["activities" => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("activities.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activities = activities::create([
            'act_name' => $request->act_name,
            'act_type' => $request->act_type,
            'description' => $request->description  ,
            'status' => $request->status  ,
            'priority' => $request->priority  ,
             'account_id' => $request->account_id,
            'contacts_id' => $request->contacts_id,
            'leads_id' => $request->leads_id  ,
        ]);
        return redirect ('/activities');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('activities.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activities = activities::find($id);
      
        return view('activities.edit' , ['activities'=>$activities]);     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $activities = activities::find($id);
        $activities->act_name = $request->act_name;
        $activities->act_type = $request->act_type;
        $activities->description = $request->description;
        $activities->status = $request->status;
        $activities->priority = $request->priority;
        $activities->account_id = $request->account_id;
        $activities->contacts_id = $request->contacts_id;
        $activities->leads_id = $request->leads_id;
       $activities->save();
               return redirect ("activities");    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        activities::find($id)->delete();
        return redirect ('/activities'); 
    }
}
