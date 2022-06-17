<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\opportunities;
class OpportunitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opportunities')->delete();

        DB::table('opportunities')->insert(array(
          'op_name'=>'7" Amoled Screen',
          'amount'=>'250000',
          'close_date'=>'2020-06-01',
          'expected_revenue'=>'2000000',
          'probability'=>'75',
          'competitors'=>'Sharp, Philips',
          'description'=>'7" HD screens',
          'contacts_id'=>'1',));
        DB::table('opportunities')->insert(array(
          'op_name'=>'55" LED TV',
          'amount'=>'10000',
          'close_date'=>'2024-10-12',
          'expected_revenue'=>'3000000',
          'probability'=>'75',
          'competitors'=>'LG, Vizio',
          'description'=>'',
          'contacts_id'=>'2',));
    
        DB::table('opportunities')->insert(array(
          'op_name'=>'12" Touchscreen Display',
          'amount'=>'25000',
          'close_date'=>'2022-10-12',
          'expected_revenue'=>'5000000',
          'probability'=>'90',
          'competitors'=>'Toshiba, Nec',
          'description'=>'12" HD touchscreen',
          'contacts_id'=>'3',));
    
    }
}
