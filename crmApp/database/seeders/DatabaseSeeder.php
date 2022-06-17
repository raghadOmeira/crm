<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
define('NOW', date('Y-m-d H:i:s'));


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

      //  $this->call('ActivityTableSeeder');
        $this->call('AccountsTableSeeder');
       // $this->call('ContactsTableSeeder');
     //   $this->call('OpportunitiesTableSeeder');
     //   $this->call('LeadsTableSeeder');
    
     //   $this->call('LeadSourceTableSeeder');
     //   $this->call('OpportunityContactsTableSeeder');
     //   $this->call('OpportunityProductTableSeeder');


    }
}

class AccountsTableSeeder extends Seeder
{

  public function run()
  {
   //
    }
}
