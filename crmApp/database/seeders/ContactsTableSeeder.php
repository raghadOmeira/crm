<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\contacts;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->delete();
        DB::table('contacts')->insert(array(
          'email'=>'satya@microsoft.com',
          'title'=>'CEO',
          'first_name'=>'Satya',
          'last_name'=>'Nadella',
          'department'=>'Upper Management',
          'description'=>'',
          'phone_number'=>'1-111-222-2222',
          'call_num'=>'1',
          'email_num'=>'1',
          'leads_id'=>'1',
          'account_id'=>'2',
          
));
    
        DB::table('contacts')->insert(array(
          'email'=>'dougm@walmart.com',
          'title'=>'President & CEO',
          'first_name'=>'Doub',
          'last_name'=>'McMillon',
          'department'=>'Upper Management',
          'description'=>'',
          'phone_number'=>'1-888-444-4444',
          'call_num'=>'1',
          'email_num'=>'1',
          'leads_id'=>'1',
          'account_id'=>'3',
          ));
    
        DB::table('contacts')->insert(array(
          'email'=>'lkh@samsung.com',
          'title'=>'President & CEO',
          'first_name'=>'Lee',
          'last_name'=>'Kun-hee',
          'department'=>'Upper Management',
          'description'=>'',
          'phone_number'=>'1-999-777-7777',
          'call_num'=>'1',
          'email_num'=>'3',
          'leads_id'=>'1',
          'account_id'=>'1',
)); 

         }
}
