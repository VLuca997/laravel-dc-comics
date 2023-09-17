<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


//model
use App\Models\Comic;
class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic');
        // dd($comics);//funge

        foreach($comics as $singleComic){
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            $comic->price = $singleComic['price'];
            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->artists = join(', ', $singleComic['artists']);
            $comic->writers = join(', ', $singleComic['writers']);

            $comic->save();

        }
    }
}
