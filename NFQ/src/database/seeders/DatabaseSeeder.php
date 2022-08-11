<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Project::factory(1)->create();
        Group::factory(1)->create();
        Student::factory(10)->create();


    }
}
