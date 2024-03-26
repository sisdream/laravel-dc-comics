<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach ($comics as $comicData) {
            $new_comic = new Comic();
            $new_comic->title = $comicData['title'];
            $new_comic->description = $comicData['description'];
            $new_comic->thumb = $comicData['thumb'];
            $new_comic->price = $comicData['price'];
            $new_comic->series = $comicData['series'];
            $new_comic->sale_date = $comicData['sale_date'];
            $new_comic->type = $comicData['type'];
            $new_comic->save();
        }
    }
}

