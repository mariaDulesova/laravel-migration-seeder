<?php

use Illuminate\Database\Seeder;
use App\Tour;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTours = config('tour');
        
        foreach ($arrayTours as $item) {
            //1. Creo un nuovo oggetto, istanza classe Tour
            $tour = new Tour();
            //2. Valorizzo proprieta' dell'oggetto
            $tour->location = $item['location'];
            $tour->hotel_name = $item['hotel_name'];
            $tour->hotel_adress = $item['hotel_adress'];
            $tour->hotel_stars = $item['hotel_stars'];
            $tour->{'room-type'} = $item['room-type'];
            $tour->nights = $item['nights'];
            $tour->all_inclusive = $item['all_inclusive'];
            $tour->price_per_night_euro = $item['price_per_night_euro'];
            //3. Salvo l'oggetto
            $tour->save();
        }
    }
}
