<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class JelliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        if (\App::environment('local', 'staging')) {
            // Clear existing data
            $this->clearData();
        }

        //$this->call('ThingsSeeder');

        Model::reguard();
    }

    private function clearData()
    {

        // Clear images
        // $files = glob('public/images/*'); // get all file names
        // foreach($files as $file){ // iterate files
        //     if(is_file($file))
        //         unlink($file); // delete file
        // }

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        //DB::table('stuff')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
