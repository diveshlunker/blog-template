<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        
        DB::table('users')->insert([
            [
                'name' => "Divesh",
                'email' => "divesh@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Diiivesh",
                'email' => "diiivesh@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Diivesh",
                'email' => "diivesh@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Diivesh",
                'email' => "diivesh@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Diivesh",
                'email' => "diivesh@gmail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Diivesh",
                'email' => "diivesh@gmail.com",
                'password' => bcrypt('secret')
            ]
        ]);
    }
}
