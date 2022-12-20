<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//import databasew
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('company')
        ->insert(
            [
                'name'=>Str::random(10),
                'email'=>Str::random(10).'@gmail.com'
            ]
            );
    }
}