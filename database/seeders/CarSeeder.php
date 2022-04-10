<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car = new Car;

        $car->name = 'Audi';
        $car->model = 'A4';
        $car->price = 10000;

        $car->save();

        $car = new Car;

        $car->name = 'BMW';
        $car->model = 'X5';
        $car->price = 20000;

        $car->save();

        $car = new Car;

        $car->name = 'Mercedes';
        $car->model = 'C300';
        $car->price = 50000;
        $car->is_sold = true;

        $car->save();
    }
}
