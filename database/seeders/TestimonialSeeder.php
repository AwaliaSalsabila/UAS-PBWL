<?php

namespace Database\Seeders;
use App\Models\Testimonial;

use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    private $testimonialdata = [
        ["id"=> 1, "name" => "Roy", "bio" => "Loyal Customer", "img" => "assets/images/customer1.png", "review" => "Makan Enak adalah tempat di mana makanan lezat bertemu dengan suasana nyaman. Saya percaya bahwa setiap hidangan adalah cerita, dan makan enak menjadi bagian dari hari saya.", "rating" => "4.5"],
        ["id"=> 2, "name" => "Rey", "bio" => "Tiktoker", "img" => "assets/images/customer1.png", "review" => "Dijamin nagih!", "rating" => "4"],
        ["id"=> 3, "name" => "Ray", "bio" => "Food Reviewer", "img" => "assets/images/customer2.png", "review" => "Enak, bersih, nyaman, kinda pricy.", "rating" => "3.5"],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */  
    public function run()
    {
        Testimonial::whereNotNull('id')->delete();
        foreach ($this->testimonialdata as $data) {
            Testimonial::create([
                'id' => $data["id"],
                'name' => $data["name"],
                'bio' => $data["bio"],
                'review' => $data["review"],
                'rating' => $data["rating"],
                'img' => $data["img"],
            ]);
        }
    }
}
