<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class CreateImagesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        
        $images = [
            
                'image'=>['1.jpg','2.jpg'],
                 'property_id'=>1,
                
            ];

             foreach ($images as $key => $image) {
                Image::create($image);
             }
    }
}
