<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("DELETE FROM users");
        DB::table("users")->insert([
            [
                "id"  => 1,
                "name"  => "Demo User",
                "district_id"  => 1,
                "email"  => "user@gmail.com",
                "phone"  => 1915985336,
                "image"  => "user.png",
                "password"  => Hash::make('123456789'),
                "company_name"  => "itconcern",
                "language"  => "English",
                "address"  => "Khilgaoan",
                "city"  => "Dhaka",
                "post_code"  => "1200",
                "twitter"  => "https://twitter.com/",
                "facebook"  => "https://facebook.com/",
                "google_plus"  => "https://googleplus.com/",
                "linkedin"  => "https://linkedin.com/",
                "instagram"  => "https://instagram.com/",
                "security"  => 1,
                "is_active"  => true,

            ]
        ]);
    }
}
         