<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        menu::factory()->create([
            'root' => '0',
            'title' => 'Dashboard',
            'link' => '/dashboard',
            'icon' => 'motherboard',
            'description' => "Visual display of all of your data"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'User Management',
            'link' => '/user',
            'icon' => 'person-badge',
            'description' => "User management add and edit permission"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'Branch',
            'link' => '/branch',
            'icon' => 'inboxes',
            'description' => "Creating new branches"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'Location',
            'link' => '/location',
            'icon' => 'geo-alt',
            'description' => "Creating new locations"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'Medical Clinic',
            'link' => '/medical',
            'icon' => 'hospital',
            'description' => "Creating new medical clinic"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'Principals',
            'link' => '/principal',
            'icon' => 'building',
            'description' => "Creating new principals"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'Jobsites',
            'link' => '/jobsite',
            'icon' => 'airplane-engines',
            'description' => "Creating new jobsites"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'User type',
            'icon' => 'people',
            'link' => '/usertype',
            'description' => "Creating new usertype"
        ]);

        menu::factory()->create([
            'root' => '0',
            'title' => 'Applicant List',
            'link' => '/applicant',
            'icon' => 'person-rolodex',
            'description' => "Creating new applicant and modification"
        ]);

    }
}
