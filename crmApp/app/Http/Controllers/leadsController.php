<?php

namespace App\Http\Controllers;
use App\Models\leads;
use Illuminate\Http\Request;

class leadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leads =leads::all();
        return view('leads.index', ["leads" => $leads]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("leads.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leads = leads::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'description' => $request->description  ,
             'phone_number' => $request->phone_number,  
            'email' => $request->email,
            'title' => $request->title  ,
             'company' => $request->company,  
            'website' => $request->website,
            'annual_revenue' => $request->annual_revenue  ,
             'email_num' => $request->email_num,  
        ]);    
        return redirect ('/lead');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('leads.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $leads = leads::find($id);
      
        return view('leads.edit' , ['leads'=>$leads]);      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $leads = leads::find($id);
        $leads->first_name = $request->first_name;
        $leads->last_name = $request->last_name;
        $leads->description = $request->description  ;
        $leads->phone_number = $request->phone_nimber;  
        $leads->email = $request->email;
        $leads->title = $request->title  ;
        $leads->company = $request->company;  
        $leads->website = $request->website;
        $leads->annual_revenue = $request->annual_revenue  ;
        $leads->email_num = $request->email_num;  
       $leads->save();
               return redirect ("/lead");    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        leads::find($id)->delete();
        return redirect ('/lead'); 
    }
}
