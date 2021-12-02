<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 100; $i++){
            $judul = 'Book '.$i;
            book::create([
                'judul' => $judul,
                'cover' => Str::cover($judul),
                'tahun' => 2021
            ]);
        }
    }
}
