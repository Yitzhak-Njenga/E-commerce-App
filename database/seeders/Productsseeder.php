<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
//            'name' => 'LG Mobile',
//            'price' => "KSh 20,000",
//            'Description' => '4 Gb Ram,128 GB 6.5"',
//            'category' => "Smart Phone",
//            'gallery' => 'https://api.priceinkenya.com/media/101789/lg-v50-thinq-5g-VjkCbqf3Wg.jpg'
//        ],
//            [
//                'name' => 'Opp Reno',
//                'price' => "KSh 25,000",
//                'Description' => '4 Gb Ram,128 GB 6.5""',
//                'category' => "Smart Phone",
//                'gallery' => 'https://www.phoneplacekenya.com/wp-content/uploads/2021/11/Oppo-Reno-7-5G.jpg'
//            ]]

            [
                'name' => 'Hisense 55 Smart Uhd 4K',
                'price' => "KSh 55,000",
                'Description' => 'Netflix VoiceControl 128 GB 6.5""',
                'category' => "Tv",
                'gallery' => 'https://smartphoneskenya.co.ke/wp-content/uploads/2022/01/2-1-400x400.jpg'
            ]]



        );
    }
}
