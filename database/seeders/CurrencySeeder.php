<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $request = Http::get('https://openexchangerates.org/api/currencies.json');
        $data = json_decode($request, true);

        foreach ($data as $key => $val) {
            DB::table('currencies')->insert([
                'short_name' => $key,
                'country' => $val,
            ]);
        }
    }
}
