<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder{

   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run(){

      DB::table('users')->insert([
         "name" => "Fahibran Carcamo",
         "username" => "fahico98",
         "email" => "fahico98@gmail.com",
         "email_verified_at" => now(),
         "password" => Hash::make("mecatronica1992"),
         "api_token" => Str::random(80)
      ]);

      factory(User::class, 19)->create();
   }
}
