<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name'=>'Diwali Offer',
            'price'=>'15000',
            'category'=>'Offers',
            'description'=>' get upto 30% - 40% off ',
            'gallery'=>'https://img.freepik.com/free-vector/website-header-banner-design-with-illuminated-oil-lamps-diya-lighting-garland-decorated-brown-background-happy-diwali-celebration_1302-19553.jpg?size=626&ext=jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Diwali Offer',
            'price'=>'15000',
            'category'=>'Offers',
            'description'=>' get upto 30% - 40% off ',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR7EOwFCPTnm-UpSMovxgz9ty_kkmG26v7nMQ&usqp=CAU'
        ]);

        DB::table('products')->insert([
            'name'=>'Diwali Offer',
            'price'=>'15000',
            'category'=>'Offers',
            'description'=>' get upto 30% - 40% off ',
            'gallery'=>'https://st.depositphotos.com/1169502/3349/v/950/depositphotos_33499061-stock-illustration-abstract-diwali-background.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Diwali Offer',
            'price'=>'15000',
            'category'=>'Offers',
            'description'=>' get upto 30% - 40% off ',
            'gallery'=>'https://static.hub.91mobiles.com/wp-content/uploads/2019/10/Flipkart-sale.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Diwali Offer',
            'price'=>'15000',
            'category'=>'Offers',
            'description'=>' get upto 30% - 40% off ',
            'gallery'=>'https://png.pngtree.com/thumb_back/fw800/background/20190827/pngtree-creative-happy-diwali-with-sale-label-web-banner-background-image_307048.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>' OPPO A52 6 GB 128 GB Twilight Black',
            'price'=>'16,990',
            'category'=>'MOBILE',
            'description'=>'Get extra 15% discount on OPPO A52 6 GB 128 GB Twilight Black.Buy OPPO A52 6 GB 128 GB Twilight Black mobiles online at best price and great offers.',
            'gallery'=>'https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png'
        ]);

        DB::table('products')->insert([
            'name'=>'OPPO F11',
            'price'=>'20000',
            'category'=>'MOBILE',
            'description'=>' 48MP+5MP dual rear camera with normal, video, expert, time-lapse, panorama, portrait, slow-motion | 16MP front camera
            16.58 centimeters',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/71qP%2BfMtbDL._SX679_.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Realme X50 5G',
            'price'=>'20000',
            'category'=>'MOBILE',
            'description'=>' Expected price of Realme X50 5G in India is Rs. 25,790. Find out Realme X50 5G full Specifications and expected launch date. Compare Realme X50 5G ',
            'gallery'=>'https://www.91-img.com/pictures/137134-v2-realme-x50-5g-mobile-phone-large-1.jpg?tr=q-60'
        ]);


        DB::table('products')->insert([
            'name'=>'Nokia 8.3 5G',
            'price'=>'42450',
            'category'=>'MOBILE',
            'description'=>'Nokia 8.3 5G is a compact high-end device from the brand. Its stunning camera setup on the front and rear side is a real delight for the photo-holics out there. Further, the 6GB RAM of the device facilitates high quality gaming experience.',
            'gallery'=>'https://www.91-img.com/pictures/138179-v1-nokia-8.3-5g-mobile-phone-large-1.jpg?tr=q-60'
        ]);

        DB::table('products')->insert([
            'name'=>'boAt Bassheads 225 in Ear Wired Earphones with Mic(Black)',
            'price'=>'499',
            'category'=>'EARPHONE',
            'description'=>'Connect the Redmi SonicBass Wireless Earphones to a micro-USB charger. While charging the indicator turns red & the earphones are automatically switched off. Once the earphones are fully charged the indicator turns white.',
            'gallery'=>'https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1601900762.13889418.png'
        ]);

        DB::table('products')->insert([
            'name'=>'Redmi SonicBass Wireless Earphones Black',
            'price'=>'999',
            'category'=>'EARPHONE',
            'description'=>'Connect the Redmi SonicBass Wireless Earphones to a micro-USB charger. While charging the indicator turns red & the earphones are automatically switched off. Once the earphones are fully charged the indicator turns white.',
            'gallery'=>'https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1601900762.13889418.png'
        ]);

        DB::table('products')->insert([
            'name'=>'Sony WI-C600N Wireless Noise-Canceling In-Ear Earphones',
            'price'=>'3999',
            'category'=>'EARPHONE',
            'description'=>'Wireless Noise-Canceling In-Ear Earphones from Sony feature active Artificial Intelligence Noise-Canceling (AINC) technology. AINC is designed to filter out unwanted sounds and adapt to a changing environment.',
            'gallery'=>'https://www.bhphotovideo.com/images/images2500x2500/sony_wic600n_b_c600_wireless_in_ear_noise_1432362.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Mivi Collar Wireless Bluetooth 5.0 Neckband',
            'price'=>'1999',
            'category'=>'EARPHONE',
            'description'=>'Easy to use button control: Wireless bluetooth earphones which features 3 control buttons, lets you take calls, adjust volume, manage music or activate google/siri voice assistants all hands-free.',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/61gmUIuS01L._SL1500_.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Samsung smart TV',
            'price'=>'15999',
            'category'=>'TV',
            'description'=>'viewing experience with the NU6900 4K UHD smart television from Samsung. Beyond its mesmerizing 4K UHD screen',
            'gallery'=>'https://cdn.shopify.com/s/files/1/2660/5202/products/am1b6aqoaovlr9feumj5_1400x.jpg?v=1571710395'
        ]);

        DB::table('products')->insert([
            'name'=>'MI TV',
            'price'=>'15499',
            'category'=>'TV',
            'description'=>'stream online content on TV',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81t2A6uhm4L._SX466_.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'FALCON TV',
            'price'=>'19499',
            'category'=>'TV',
            'description'=>'his FFALCON 40-inch SF1 FHD SMART LED TV 40SF1 has a bright LED LCD display and a 1,920 x 1,080 screen resolution so you can discover true 1080p Full',
            'gallery'=>'https://thegoodguys.sirv.com/products/50070860/50070860_712772.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90'
        ]);

        DB::table('products')->insert([
            'name'=>'Amazon TV',
            'price'=>'25499',
            'category'=>'TV',
            'description'=>'Amozon SMART LED TV 40SF1 has a bright LED LCD display and a 1,920 x 1,080 screen resolution so you can discover true 1080p Full',
            'gallery'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSk5a4B0L7-99MdOuxD4QzgwwQqRlUTJes_xw&usqp=CAU'
        ]);

        DB::table('products')->insert([
            'name'=>'OnePlus TV Q1 and Q1 Pro',
            'price'=>'35499',
            'category'=>'TV',
            'description'=>'For a TV to be competitive it really needs to sport a 4K HDR panel and both the Q1 and Q1 Pro have exactly that, with no less than Dolby Vision and HDR10+ support to boot.',
            'gallery'=>'https://cdn.pocket-lint.com/r/s/1200x630/assets/images/145765-tv-feature-oneplus-tv-whats-the-story-so-far-image1-icnzm9xens.jpg'
        ]);

        DB::table('products')->insert([
            'name'=>'Roku TV',
            'price'=>'15499',
            'category'=>'TV',
            'description'=>'stream online content on TV',
            'gallery'=>'https://cigars.roku.com/v1/http%3A%2F%2Fimage.roku.com%2Fw%2Frapid%2Fimages%2Frtv-hero%2Fde396dfe-5281-426b-bd28-55332d8c062a.jpg'
        ]);
        
    }
}
