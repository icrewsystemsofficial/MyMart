<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'name'=>'Diwali Offer',
            'category'=>'TVs',
            'description'=>' get upto 30% - 40% off ',
            'gallery'=>'https://img.freepik.com/free-vector/website-header-banner-design-with-illuminated-oil-lamps-diya-lighting-garland-decorated-brown-background-happy-diwali-celebration_1302-19553.jpg?size=626&ext=jpg'
        ]);

        DB::table('offers')->insert([
            'name'=>'Diwali Offer',
            'category'=>'Mobiles',
            'description'=>' get upto 20% - 40% off ',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7EOwFCPTnm-UpSMovxgz9ty_kkmG26v7nMQ&usqp=CAU'
        ]);

        DB::table('offers')->insert([
            'name'=>'Diwali Offer',
            'category'=>'Mobiles',
            'description'=>' get upto 20% - 40% off ',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7EOwFCPTnm-UpSMovxgz9ty_kkmG26v7nMQ&usqp=CAU'
        ]);

        DB::table('offers')->insert([
            'name'=>'Diwali Offer',
            'category'=>'Mens Wear',
            'description'=>' get upto 20% - 40% off ',
            'gallery'=>'https://static.hub.91mobiles.com/wp-content/uploads/2019/10/Flipkart-sale.jpg'
        ]);

        
    }
}
