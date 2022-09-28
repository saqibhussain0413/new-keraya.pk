<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('users')->insert([
            [
                'role_id'       => 1,
                'name'          => 'Admin',
                'username'      => 'stizn@admin',
                'email'         => 'keraya.pk@gmail.com',
                'image'         => 'default.jpg',
                'about'         => 'Bio of admin',
                'password'      => bcrypt('lemme2login@stizn'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'role_id'       => 2,
                'name'          => 'Agent',
                'username'      => 'agent',
                'email'         => 'agent@agent.com',
                'image'         => 'default.jpg',
                'about'         => '',
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'role_id'       => 3,
                'name'          => 'User',
                'username'      => 'user',
                'email'         => 'user@user.com',
                'image'         => 'default.jpg',
                'about'         => null,
                'password'      => bcrypt('123456'),
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);


        DB::table('roles')->    insert([
            [
                'name'          => 'Admin',
                'slug'          => 'admin',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'Agent',
                'slug'          => 'agent',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'name'          => 'User',
                'slug'          => 'user',
                'created_at'    => date("Y-m-d H:i:s")
            ]
        ]);

        DB::table('property_types')->    insert([
            [
                'property_type_ID'          => '1',
                'property_type'          => 'House',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'property_type_ID'          => '2',
                'property_type'          => 'Building',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'property_type_ID'          => '3',
                'property_type'          => 'Office',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'property_type_ID'          => '4',
                'property_type'          => 'Land',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'property_type_ID'          => '5',
                'property_type'          => 'Vehicle',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'property_type_ID'          => '6',
                'property_type'          => 'Room',
                'created_at'    => date("Y-m-d H:i:s")
            ],
            [
                'property_type_ID'          => '7',
                'property_type'          => 'Flat',
                'created_at'    => date("Y-m-d H:i:s")
            ],
        ]);

    }   
}   
