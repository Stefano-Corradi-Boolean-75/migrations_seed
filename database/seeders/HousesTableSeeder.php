<?php

namespace Database\Seeders;


use Faker\Generator as Faker;

use App\Models\House;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 100; $i++){
            $new_house = new House();
            $new_house->reference = $faker->bothify('??-#########');
            $new_house->address = $faker->address();
            $new_house->postal_code = $faker->postcode();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->square_meters = $faker->numberBetween(15, 10000);
            $new_house->rooms = $faker->numberBetween(1, 20);
            $new_house->bathrooms = $faker->numberBetween(1, 10);
            $new_house->type = $faker->randomElement(['monolocale','bilocale','appartamento','villetta','loft']);
            $new_house->description = $faker->paragraph(1,5);
            $new_house->price = $faker->randomFloat(2, 10000, 9000000);
            $new_house->energy_rating = $faker->randomElement(['a','aa','b','c','d']);
            $new_house->save();
        }

        // $new_house = new House();
        // $new_house->reference = "kdsjfhue33";
        // $new_house->address = "Via dei Platani";
        // $new_house->postal_code = "20100";
        // $new_house->city = "Milano";
        // $new_house->state = "Italy";
        // $new_house->square_meters = "70";
        // $new_house->rooms = "3";
        // $new_house->bathrooms = "2";
        // $new_house->type = "Appartamento";
        // $new_house->description = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati, quis. Inventore molestiae veritatis ut pariatur maiores cumque? Aliquid nobis numquam, labore eligendi expedita rem quae corrupti deserunt, quasi culpa molestiae?";
        // $new_house->price = 250000.00;
        // $new_house->energy_rating = 'AA';
        // $new_house->save();
    }
}
