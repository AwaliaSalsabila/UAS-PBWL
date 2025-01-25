<?php

namespace Database\Seeders;
use App\Models\Food;

use Illuminate\Database\Seeder;

class FoodMenuSeeder extends Seeder
{
    private $fooddata = [
        ["id"=> 1, "name" => "Mexican Eggrolls", "img" => "assets/images/food1.jpg", 
        "price" => 14.50, "desc" => "Perpaduan rasa autentik Meksiko dengan kelezatan yang tak terlupakan. Nikmati sensasi rasa gurih dan renyah dalam setiap gigitan."],
        ["id"=> 2, "name" => "chicken burger", "img" => "assets/images/food2.jpg", 
        "price" => 9.10, "desc" => "Burger ayam yang lezat dengan daging ayam empuk, saus spesial, dan roti lembut. Sempurna untuk mengisi hari Anda."],
        ["id"=> 3, "name" => "topu lasange", "img" => "assets/images/food3.jpg", 
        "price" => 12.09, "desc" => "Lasagna lezat dengan lapisan tahu gurih dan saus creamy. Kombinasi unik yang memanjakan lidah."],
        ["id"=> 4, "name" => "pepper potatoas", "img" => "assets/images/food4.jpg", 
        "price" => 13.20, "desc" => "Kentang panggang dengan taburan lada hitam dan rempah pilihan. Rasakan perpaduan rasa pedas dan gurih yang menggoda."],
        ["id"=> 5, "name" => "bean salad", "img" => "assets/images/food5.jpg", 
        "price" => 8.55, "desc" => "Salad kacang sehat dengan campuran sayuran segar dan dressing spesial. Pilihan sempurna untuk santapan ringan."],
        ["id"=> 6, "name" => "beatball hoagie", "img" => "assets/images/food6.jpg", 
        "price" => 11.80, "desc" => "Bakso spesial dengan roti panggang lembut dan saus kaya rasa. Hidangan sederhana yang penuh kelezatan."],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::whereNotNull('id')->delete();
        foreach ($this->fooddata as $data) {
            Food::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'img' => $data["img"],
                'price' => $data["price"],
                'desc' => $data["desc"],
            ]);
        }
    }
}
