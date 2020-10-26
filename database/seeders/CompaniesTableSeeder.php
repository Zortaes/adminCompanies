<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'company1',
            'email' => 'company1@company.com',
            'website' => 'https://company1.com'
        ]);
        DB::table('companies')->insert([
            'name' => 'company2',
            'email' => 'company2@company.com',
            'website' => 'https://company2.com'
        ]);
        DB::table('companies')->insert([
            'name' => 'company3',
            'email' => 'company3@company.com',
            'website' => 'https://company3.com'
        ]);
    }
}