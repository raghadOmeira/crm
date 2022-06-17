<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\accounts;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->delete();
        DB::table('accounts')->insert(array(
          'ac_name'=>'Samsung Electronics Co., Ltd.',
          'ac_type'=>'EL-SMSG',
          'phone_number'=>'+1 425-614-1047',
          'annual_revenue'=>'20000000000',
          'num_of_employees'=>'12000',
          'website'=>'www.samsung.com',
          'email'=>'samsung@gmail.com',
          'description'=>' South Korean multinational electronics company headquartered in Suwon, South Korea',
    
        ));
        DB::table('accounts')->insert(array(
          'ac_name'=>'Microsoft Corporation',
          'ac_type'=>'IT-MSOF',
          'phone_number'=>'+1 425-614-7109',
          'annual_revenue'=>'20000000000',
          'num_of_employees'=>'15000',
          'website'=>'www.microsoft.com',
          'email'=>'microsoft@gmail.com',
          'description'=>'American multinational corporation headquartered in Redmond, Washington, that develops, manufactures, licenses, supports and sells computer software, consumer electronics and personal computers and services.',
        ));
        DB::table('accounts')->insert(array(
          'ac_name'=>'Walmart',
          'ac_type'=>'RET-WLMR',
          'phone_number'=>'+1 425-614-8703',
          'annual_revenue'=>'2000000000',
          'num_of_employees'=>'25000',
          'website'=>'www.walmart.com',
          'email'=>'walmart@gmail.com',
          'description'=>' American multinational retail corporation that operates a chain of discount department stores and warehouse stores. Headquartered in Bentonville, Arkansas, the company was founded by Sam Walton in 1962 and incorporated on October 31, 1969. It has over 11,000 stores in 27 countries, under a total 71 banners',
        ));    }
}
