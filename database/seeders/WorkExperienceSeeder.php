<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workExperiences = [
            [
                'start_date' => '2020',
                'end_date' => '2021',
                'logo' => 'images/experience/php.png',
                'designation' => 'Laravel Developer',
                'company_name' => 'Home2Globe',
                'city_name' => 'Khulna',
                'website' => 'https://home2globe.com/',
            ],
            [
                'start_date' => '2021',
                'end_date' => 'Present',
                'logo' => 'images/experience/go-lang.png',
                'designation' => 'Backend Developer',
                'company_name' => 'Codemen',
                'city_name' => 'Khulna',
                'website' => 'https://www.codemen.org/',
            ]
        ];

        foreach ($workExperiences as $workExperience) {
            WorkExperience::create($workExperience);
        }
    }
}
