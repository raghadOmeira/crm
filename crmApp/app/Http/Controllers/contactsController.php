<?php

namespace App\Http\Controllers;
use App\Models\contacts;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts =contacts::all();
        return view('contacts.index', ["contacts" => $contacts]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contacts.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacts = contacts::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'description' => $request->description  ,
             'phone_number' => $request->phone_number,  
             'account_id' => $request->account_id  ,
             'leads_id' => $request->leads_id,
             'email' => $request->email  ,
             'title' => $request->title,  
             'department' => $request->department  ,
             'call_num' => $request->call_num,  
            'email_num' => $request->email_num,
             
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
        return redirect ('/contact');    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('contacts.show', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = contacts::find($id);
      
        return view('contacts.edit' , ['contacts'=>$contacts]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacts = contacts::find($id);
        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->last_name;
        $contacts->description = $request->description;
        $contacts->phone_number = $request->phone_number;
        $contacts->email = $request->email;
        $contacts->title = $request->title;
        $contacts->department = $request->department;
        $contacts->call_num = $request->call_num;
        $contacts->email_num = $request->email_num;
       $contacts->save();
               return redirect ("contact");    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        contacts::find($id)->delete();
        return redirect ('/contact'); 
    }
}
