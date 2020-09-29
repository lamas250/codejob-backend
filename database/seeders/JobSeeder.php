<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\JobDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->delete();

        Job::factory(300)
            ->hasDetails(JobDetail::factory())
            ->create();
    }
}
