<?php

namespace App\Http\Controllers;
use App\Models\accounts;
use Illuminate\Http\Request;

class accountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = accounts::all();
        return view('accounts.index', ["accounts" => $accounts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view("accounts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accounts = accounts::create([
            'ac_name' => $request->ac_name,
            'ac_type' => $request->ac_type,
            'description' => $request->description  ,
             'phone_number' => $request->phone_number,
            'website' => $request->website,
            'email' => $request->email,
            'annual_revenue'=>$request->annual_revenue,
            'num_of_employees'=>$request->num_of_employees,
            ]);

      /*  if (!empty($account)){
         foreach ($request->all() as $key => $value){
             if ($value=="on"){
                 $book = books::find($key);
                 $book->order_id = $order->id;
                 $book->save();
             }
         }

        }*/
        return redirect ('/account');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('accounts.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $accounts = accounts::find($id);
      
        return view('accounts.edit' , ['accounts'=>$accounts]); 
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
    $accounts = accounts::find($id);
    $accounts->ac_name = $request->ac_name;
    $accounts->ac_type = $request->ac_type;
    $accounts->description = $request->description;
    $accounts->phone_number = $request->phone_number;
    $accounts->website = $request->website;
    $accounts->email = $request->email;
    $accounts->annual_revenue = $request->annual_revenue;
    $accounts->num_of_employees = $request->num_of_employees;    
    $accounts->save();
           return redirect ("account");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        accounts::find($id)->delete();
        return redirect ('/account'); 
    }
}
