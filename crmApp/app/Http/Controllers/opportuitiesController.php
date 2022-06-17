<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\opportunities;
class opportuitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opportunities =opportunities::all();
        return view('opportunities.index', ["opportunities" => $opportunities]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("opportunities.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $opportunities = opportunities::create([
            'op_name' => $request->op_name,
            'amount' => $request->amount,
            'close_date' => $request->close_date  ,
             'expected_revenue' => $request->expected_revenue,  
            'probability' => $request->probability,
            'competitors' => $request->competitors  ,
             'description' => $request->description,  
             'contacts_id' => $request->contacts_id  ,
           
        ]);   
        return redirect ('/opportunities');    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('opportunities.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opportunities = opportunities::find($id);
      
        return view('opportunities.edit' , ['opportunities'=>$opportunities]);     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $opportunities = opportunities::find($id);
        $opportunities->op_name = $request->op_name;
        $opportunities->amount = $request->amount;
        $opportunities->expected_revenue = $request->expected_revenue;
        $opportunities->probability = $request->probability;        
        $opportunities->competitors = $request->competitors;
        $opportunities->description = $request->description;
        $opportunities->contacts_id = $request->contacts_id;
        $opportunities->save();
               return redirect ("opportunities");  
    
            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        opportunities::find($id)->delete();
        return redirect ('/opportunities'); 
    }
}
