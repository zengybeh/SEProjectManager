<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team')->insert([
            'Name' => 'School System',
            'MembersId' => '1,2,3,4',
            'LeaderId' => '3',
            'CourseId' => '1'
        ]);
    }
}
