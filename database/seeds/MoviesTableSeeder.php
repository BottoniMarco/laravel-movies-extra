<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $movies = config('movies_db');

       foreach($movies as $movie){
           $newMovie = new Movie();

           $newMovie->fill($movie)->save();
       }
    }
}
