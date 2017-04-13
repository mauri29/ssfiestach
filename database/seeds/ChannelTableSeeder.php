<?php

use Illuminate\Database\Seeder;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = new \App\Models\Channel([
            'user_id' => '1',
            'name' => 'Mauri',
            'slug' => '158e849fa647f5',
            'description' => 'Me gusta su pagina',
            'address' => 'Roggenweg',
            'number' => '4',
            'post' => '5034',
            'city' => 'Suhr',
            'image_filename' => '158eab76fc24dc.png',
            'created_at' => '2017-04-08 04:24:58',
            'updated_at' => '2017-04-10 05:26:32',
        ]);
        $channels->save();   
        $channels = new \App\Models\Channel([
            'user_id' => '2',
            'name' => 'Maria',
            'slug' => '158ee9a274a6e9',
            'description' => 'Schnelle und sichere Lieferung! XD',
            'address' => 'Metzgergasse',
            'number' => '6b',
            'post' => '5034',
            'city' => 'Suhr',
            'image_filename' => '',
            'created_at' => '2017-04-12 23:20:39',
            'updated_at' => '2017-04-12 23:23:51',
        ]);
        $channels->save();   
    }
}