<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::statement("DELETE FROM districts");
        DB::table("districts")->insert([
            [
              "id" => 1,
              "name" => "Dhaka",
              "bn_name" => "ঢাকা",
            ],
            [
              "id" => 2,
              "name" => "Faridpur",
              "bn_name" => "ফরিদপুর",
            ],
            [
              "id" => 3,
              "name" => "Gazipur",
              "bn_name" => "গাজীপুর",
            ],
            [
              "id" => 4,
              "name" => "Gopalganj",
              "bn_name" => "গোপালগঞ্জ",
            ],
            [
              "id" => 5,
              "name" => "Jamalpur",
              "bn_name" => "জামালপুর",
            ],
            [
              "id" => 6,
              "name" => "Kishoreganj",
              "bn_name" => "কিশোরগঞ্জ",
            ],
            [
              "id" => 7,
              "name" => "Madaripur",
              "bn_name" => "মাদারীপুর",
            ],
            [
              "id" => 8,
              "name" => "Manikganj",
              "bn_name" => "মানিকগঞ্জ",
            ],
            [
              "id" => 9,
              "name" => "Munshiganj",
              "bn_name" => "মুন্সিগঞ্জ",
            ],
            [
              "id" => 10,
              "name" => "Mymensingh",
              "bn_name" => "ময়মনসিংহ",
            ],
            [
              "id" => 11,
              "name" => "Narayanganj",
              "bn_name" => "নারায়াণগঞ্জ",
            ],
            [
              "id" => 12,
              "name" => "Narsingdi",
              "bn_name" => "নরসিংদী",
            ],
            [
              "id" => 13,
              "name" => "Netrokona",
              "bn_name" => "নেত্রকোণা",
            ],
            [
              "id" => 14,
              "name" => "Rajbari",
              "bn_name" => "রাজবাড়ি",
            ],
            [
              "id" => 15,
              "name" => "Shariatpur",
              "bn_name" => "শরীয়তপুর",
            ],
            [
              "id" => 16,
              "name" => "Sherpur",
              "bn_name" => "শেরপুর",
            ],
            [
              "id" => 17,
              "name" => "Tangail",
              "bn_name" => "টাঙ্গাইল",
            ],
            [
              "id" => 18,
              "name" => "Bogura",
              "bn_name" => "বগুড়া",
            ],
            [
              "id" => 19,
              "name" => "Joypurhat",
              "bn_name" => "জয়পুরহাট",
            ],
            [
              "id" => 20,
              "name" => "Naogaon",
              "bn_name" => "নওগাঁ",
            ],
            [
              "id" => 21,
              "name" => "Natore",
              "bn_name" => "নাটোর",
            ],
            [
              "id" => 22,
              "name" => "Nawabganj",
              "bn_name" => "নবাবগঞ্জ",
            ],
            [
              "id" => 23,
              "name" => "Pabna",
              "bn_name" => "পাবনা",
            ],
            [
              "id" => 24,
              "name" => "Rajshahi",
              "bn_name" => "রাজশাহী",
            ],
            [
              "id" => 25,
              "name" => "Sirajgonj",
              "bn_name" => "সিরাজগঞ্জ",
            ],
            [
              "id" => 26,
              "name" => "Dinajpur",
              "bn_name" => "দিনাজপুর",
            ],
            [
              "id" => 27,
              "name" => "Gaibandha",
              "bn_name" => "গাইবান্ধা",
            ],
            [
              "id" => 28,
              "name" => "Kurigram",
              "bn_name" => "কুড়িগ্রাম",
            ],
            [
              "id" => 29,
              "name" => "Lalmonirhat",
              "bn_name" => "লালমনিরহাট",
            ],
            [
              "id" => 30,
              "name" => "Nilphamari",
              "bn_name" => "নীলফামারী",
            ],
            [
              "id" => 31,
              "name" => "Panchagarh",
              "bn_name" => "পঞ্চগড়",
            ],
            [
              "id" => 32,
              "name" => "Rangpur",
              "bn_name" => "রংপুর",
            ],
            [
              "id" => 33,
              "name" => "Thakurgaon",
              "bn_name" => "ঠাকুরগাঁও",
            ],
            [
              "id" => 34,
              "name" => "Barguna",
              "bn_name" => "বরগুনা",
            ],
            [
              "id" => 35,
              "name" => "Barishal",
              "bn_name" => "বরিশাল",
            ],
            [
              "id" => 36,
              "name" => "Bhola",
              "bn_name" => "ভোলা",
            ],
            [
              "id" => 37,
              "name" => "Jhalokati",
              "bn_name" => "ঝালকাঠি",
            ],
            [
              "id" => 38,
              "name" => "Patuakhali",
              "bn_name" => "পটুয়াখালী",
            ],
            [
              "id" => 39,
              "name" => "Pirojpur",
              "bn_name" => "পিরোজপুর",
            ],
            [
              "id" => 40,
              "name" => "Bandarban",
              "bn_name" => "বান্দরবান",
            ],
            [
              "id" => 41,
              "name" => "Brahmanbaria",
              "bn_name" => "ব্রাহ্মণবাড়িয়া",
            ],
            [
              "id" => 42,
              "name" => "Chandpur",
              "bn_name" => "চাঁদপুর",
            ],
            [
              "id" => 43,
              "name" => "Chattogram",
              "bn_name" => "চট্টগ্রাম",
            ],
            [
              "id" => 44,
              "name" => "Cumilla",
              "bn_name" => "কুমিল্লা",
            ],
            
            [
              "id" => 45,
              "name" => "Cox's Bazar",
              "bn_name" => "কক্স বাজার",
            ],
            
            [
              "id" => 46,
              "name" => "Feni",
              "bn_name" => "ফেনী",
            ],
            
            [
              "id" => 47,
              "name" => "Khagrachari",
              "bn_name" => "খাগড়াছড়ি",
            ],
            
            [
              "id" => 48,
              "name" => "Lakshmipur",
              "bn_name" => "লক্ষ্মীপুর",
            ],
            
            [
              "id" => 49,
              "name" => "Noakhali",
              "bn_name" => "নোয়াখালী",
            ],
            
            [
              "id" => 50,
              "name" => "Rangamati",
              "bn_name" => "রাঙ্গামাটি",
            ],
            
            [
              "id" => 51,
              "name" => "Habiganj",
              "bn_name" => "হবিগঞ্জ",
            ],
            
            [
              "id" => 52,
              "name" => "Maulvibazar",
              "bn_name" => "মৌলভীবাজার",
            ],
            
            [
              "id" => 53,
              "name" => "Sunamganj",
              "bn_name" => "সুনামগঞ্জ",
            ],
            
            [
              "id" => 54,
              "name" => "Sylhet",
              "bn_name" => "সিলেট",
            ],
            
            [
              "id" => 55,
              "name" => "Bagerhat",
              "bn_name" => "বাগেরহাট",
            ],
            
            [
              "id" => 56,
              "name" => "Chuadanga",
              "bn_name" => "চুয়াডাঙ্গা",
            ],
            
            [
              "id" => 57,
              "name" => "Jashore",
              "bn_name" => "যশোর",
            ],
            [
              "id" => 58,
              "name" => "Jhenaidah",
              "bn_name" => "ঝিনাইদহ",
            ],
            [
              "id" => 59,
              "name" => "Khulna",
              "bn_name" => "খুলনা",
            ],
            [
              "id" => 60,
              "name" => "Kushtia",
              "bn_name" => "কুষ্টিয়া",
            ],
            [
              "id" => 61,
              "name" => "Magura",
              "bn_name" => "মাগুরা",
            ],
            [
              "id" => 62,
              "name" => "Meherpur",
              "bn_name" => "মেহেরপুর",
            ],
            [
              "id" => 63,
              "name" => "Narail",
              "bn_name" => "নড়াইল",
            ],
            [
              "id" => 64,
              "name" => "Satkhira",
              "bn_name" => "সাতক্ষীরা",
            ],
            
        ]);
    }
}
