<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
  
class CreatePropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            
                
            [
                'name'=>'Smart Condo',
                'address'=>'Phnom Penh',
                'bedroom'=>1,
                'bathroom'=>1,
                'agent_id'=>'2',
                'size'=>30,
                'price_sale'=>20000,
                'amenity'=>'Parking',
                'price_rent'=>2000,
                'price_rental'=>200,
                'cover'=>'5.jpg',
                'types'=>["Sale"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'New Build',
                'address'=>'Siem Reab',
                'bedroom'=>10,
                'bathroom'=>5,
                'agent_id'=>'2',
                'size'=>60,
                'price_sale'=>100000,
                'amenity'=>'Parking',
                'price_rent'=>10000,
                'price_rental'=>1000,
                'cover'=>'8.jpg',
                'types'=>["Rent"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Batdambang',
                'bedroom'=>12,
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>99999,
                'price_rent'=>10009,
                'amenity'=>'Parking',
                'price_rental'=>1009,
                'agent_id'=>'5',
                'cover'=>'7.jpg',
                'types'=>["Sale","Rent"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Kompongcham',
                'bedroom'=>12,
                'agent_id'=>'2',
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>99999,
                'amenity'=>'Parking',
                'price_rent'=>10009,
                'price_rental'=>1009,
                'cover'=>'8.jpg',
                'types'=>["Rental"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Kompot',
                'bedroom'=>12,
                'amenity'=>'Parking',
                'bathroom'=>6,
                'agent_id'=>'5',
                'size'=>50,
                'price_sale'=>99999,
                'price_rent'=>10009,
                'price_rental'=>1009,
                'cover'=>'9.jpg',
                'types'=>["Sale","Rent","Rental"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Kompot',
                'amenity'=>'Parking',
                'bedroom'=>12,
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>100000,
                'price_rent'=>10000,
                'price_rental'=>1000,
                'cover'=>'2.jpg',
                'agent_id'=>'4',
                'types'=>["Sale","Rent","Rental"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Batdambang',
                'amenity'=>'Parking',
                'bedroom'=>12,
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>100000,
                'price_rent'=>10000,
                'price_rental'=>1000,
                'cover'=>'6.jpg',
                'agent_id'=>'4',
                'types'=>["Sale","Rental"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Khmer House',
                'address'=>'Kompot',
                'amenity'=>'Parking',
                'bedroom'=>12,
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>100000,
                'price_rent'=>10000,
                'price_rental'=>1000,
                'cover'=>'2.jpg',
                'agent_id'=>'4',
                'types'=>["Rent","Rental"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            [
                'name'=>'Korea House',
                'address'=>'Phnom Penh',
                'amenity'=>'Parking',
                'bedroom'=>12,
                'bathroom'=>6,
                'size'=>50,
                'price_sale'=>100000,
                'price_rent'=>10000,
                'price_rental'=>1000,
                'cover'=>'2.jpg',
                'agent_id'=>'5',
                'types'=>["Rental"],
                //'image'=>'1.jpg',
                'description'=>'Search for House Painting Prices info. Research & compare results on Alot Home today. Find all the info you need for House Painting Prices online on Alot Home. Search now! Browse Online Resources. Large Search Network. Comprehensive Information.',           
             ],
            
        ];
    
        foreach ($properties as $key => $property) {
            Property::create($property);
        }
    }
}