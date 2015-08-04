<?php


use App\User;
use App\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder{
    /**
    * "$2y$10$IbIE3j4nKDaW5JzRYVkPL.R8nbJ9Ef.aY2yh2UQrQTbH83RuaBqra"  is  bcrypt('secret')
    *
    */
    private $users = [
        ['name' =>  'lem','email' => 'lem@gmail.com', 'password' => '$2y$10$IbIE3j4nKDaW5JzRYVkPL.R8nbJ9Ef.aY2yh2UQrQTbH83RuaBqra'],
        ['name' =>  'ben','email' => 'ben@gmail.com', 'password' => '$2y$10$IbIE3j4nKDaW5JzRYVkPL.R8nbJ9Ef.aY2yh2UQrQTbH83RuaBqra'],
        ['name' =>  'joe','email' => 'joe@gmail.com', 'password' => '$2y$10$IbIE3j4nKDaW5JzRYVkPL.R8nbJ9Ef.aY2yh2UQrQTbH83RuaBqra'],
     ];

   public function run()
   {
        DB::table('users')->delete();

        foreach ($this->users as $user) {
            $u = User::create($user);
            Profile::create(['user_id' => $u->id]);
        }
   }
}
