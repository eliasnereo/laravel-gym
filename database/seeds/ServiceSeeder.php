<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'name' => 'Personal Trainer',
            'description' => 'Maximize your workout with the help of our personal trainers.'
        ]);

        Service::create([
            'name' => '24/7 Acceso',
            'description' => 'Acceso al gym 24/7'
        ]);

        Service::create([
            'name' => '5 dias a la semana',
            'description' => 'Acceso al gym 5 dias a la semana'
        ]);
    }
}
