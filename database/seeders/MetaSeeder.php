<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Meta;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = json_decode(file_get_contents('database/seeders/meta.json'), true);
        $meta = new Meta($data);

        try{
            $meta->save();
        }catch (\Illuminate\Database\QueryException $e){

        }
    }
}
