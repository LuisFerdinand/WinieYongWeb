<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'title' => 'Software Engineer',
            'description' => 'Looking for a motivated software engineer with 3+ years of experience in backend development.',
            'position' => 'Software Engineer',
            'work_type' => 'remote', // Options: remote, on-site
            'total_positions' => 3,
            'requirements' => 'Experience in PHP, Laravel, MySQL, and API integration. Strong debugging skills and problem-solving abilities.',
            'status' => 'open'
        ]);

        Job::create([
            'title' => 'Product Manager',
            'description' => 'Join our team as a Product Manager to lead the development and strategy of our products.',
            'position' => 'Product Manager',
            'work_type' => 'on-site',
            'total_positions' => 1,
            'requirements' => 'Experience in managing tech products, excellent communication, leadership skills, and knowledge of agile methodologies.',
            'status' => 'open'
        ]);

        Job::create([
            'title' => 'UX Researcher',
            'description' => 'We are looking for a talented UX Researcher to analyze and optimize user experience across our platforms.',
            'position' => 'UX Researcher',
            'work_type' => 'remote',
            'total_positions' => 2,
            'requirements' => 'Experience in qualitative and quantitative research methodologies, wireframing, and prototyping.',
            'status' => 'closed'
        ]);

        Job::create([
            'title' => 'Data Analyst',
            'description' => 'Data-driven analysts needed to help make informed business decisions.',
            'position' => 'Data Analyst',
            'work_type' => 'on-site',
            'total_positions' => 4,
            'requirements' => 'Strong knowledge of SQL, Python, and experience with large datasets. Ability to present data-driven recommendations.',
            'status' => 'open'
        ]);
    }
}
