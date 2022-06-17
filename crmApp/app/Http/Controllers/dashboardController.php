<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accounts;
use App\Models\contacts;
use App\Models\activities;
use App\Models\leads;
use App\Models\opportunities;
 

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $accounts = accounts::all();
       $contacts =contacts::all();
        $opportunities =opportunities::all();
        $activities = activities::all();
        $leads =leads::all();
         $arr = array("accounts" => $accounts, "cantacts" => $contacts) ;
       //  dd($accounts);
        // return view('dashboard', ["arr" => $arr]);

        //return view::make('/dashboard')->with(compact('arr'));
       // return view('dashboard',['accounts' => $accounts,'type' =>$type]);
        // $arr = array("accounts" => $accounts, "cantacts" => $contacts) ;
       // dd(compact(['accounts','contacts']));
        return view('dashboard', compact(['accounts','contacts','opportunities','activities','leads']));

//return View::make('frontend.services', compact('newArray'));


  //      return view('dashboard',compact([ "accounts" => $accounts], ["contacts" => $contacts]) ); 
//        return view('dashboard', ["leads" => $leads , "accounts" => $accounts ,"contacts" => $contacts , "opportunities" => $opportunities , "activities" => $activities ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
