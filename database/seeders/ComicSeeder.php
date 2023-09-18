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
        // dd($comics);//funge
        Comic::truncate();// svuotiamo la tabella ad ogni riavvio per modificarla e no navere doppioni
        $comics = config('comic');
        foreach($comics as $singleComic){
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            $comic->price = $singleComic['price'];
            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->artists = implode('| ', $singleComic['artists']);
            $comic->writers = implode('| ', $singleComic['writers']);

            $comic->save();

        }
    }
}
