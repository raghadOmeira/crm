<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\leads;

class LeadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leads')->delete();

        DB::table('leads')->insert(array(
          'id'=>'1',
          'email'=>'bill@microsoft.com',
          'title'=>'Retired',
          'first_name'=>'Bill',
          'last_name'=>'Gates',
          'description'=>'Used to be CEO now doing charity work',
          'company'=>'Microsoft',
          'website'=>'www.microsoft.com',
          'annual_revenue'=>'6000000000',
          'phone_number'=>'357-634-0488',
          'email_num'=>'1',
          ));
        DB::table('leads')->insert(array(
          'id'=>'2',
          'email'=>'larry@oraacle.com',
          'title'=>'CEO',
          'first_name'=>'Larry',
          'last_name'=>'Ellison',
          'description'=>'Loves Pharraree',
          'company'=>'Oracle',
          'website'=>'www.oracle.com',
          'annual_revenue'=>'200000000',
          'phone_number'=>'564-634-0488',
          'email_num'=>'1',
    ));    }
}
