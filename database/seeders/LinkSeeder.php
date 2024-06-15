<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Link;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->save("StackOverflow", "https://stackoverflow.com/users/7029593/joey-dalu?tab=profile", "ic_stackoverflow.svg");
        $this->save("Github", "https://github.com/josephdalughut", "ic_github.svg");
        $this->save("LinkedIn", "https://www.linkedin.com/in/josephdalughut", "ic_linkedin.svg");
        $this->save("Twitter", "https://twitter.com/antecoder", "ic_twitter.svg");
    }

    private function save($title, $url, $res, $enabled = true, $sort_order = 0){
        $link = new Link(['title'=>$title, 'url'=>$url, 'res'=>$res, 'enabled'=>$enabled, 'sort_order'=>$sort_order]);
        try{
            $link->save();
        }catch (\Illuminate\Database\QueryException $exception){

        }
    }
}
