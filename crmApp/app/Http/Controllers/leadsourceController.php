<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\leadsources;
class leadsourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leadsources =leadsources::all();
        return view('leadsource.index', ["leadsources" => $leadsources]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("leadsource.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leadsources = leadsources::create([
            'source_name' => $request->source_name,
             'leads_id' => $request->leads_id,  
             
        ]);    
        return redirect ('/leadsource');      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('leadsource.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leadsources = leadsources::find($id);
      
        return view('leadsource.edit' , ['leadsources'=>$leadsources]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $leadsources = leadsources::find($id);
        $leadsources->source_name = $request->source_name;
        $leadsources->leads_id = $request->leads_id;
       $leadsources->save();
               return redirect ("/leadsource");    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        leadsources::find($id)->delete();
        return redirect ('/leadsource'); 
    }
}
