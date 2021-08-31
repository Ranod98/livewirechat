<?php

namespace Database\Seeders;

use App\Models\Conversation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'rawa',
            'email' => 'rawa@gmail.com',
            'email_verified_at' =>Carbon::now() ,
            'password' => bcrypt('123123123'),

        ]);

        User::create([
            'name' => 'rawezh',
            'email' => 'rawezh@gmail.com',
            'email_verified_at' =>Carbon::now() ,
            'password' => bcrypt('123123123'),

        ]);

        User::create([
            'name' => 'sedra',
            'email' => 'sedra@gmail.com',
            'email_verified_at' =>Carbon::now() ,
            'password' => bcrypt('123123123'),

        ]);

        Conversation::create([
            'name' => 'familyG',
            'uuid' => Str::uuid(),
            'user_id' => 1,
        ]);

        Conversation::create([
            'name' => 'work',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);

        Conversation::create([
            'name' => 'friends',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);


        Conversation::create([
            'name' => 'Xosha',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);


        Conversation::create([
            'name' => 'nazanm baxwa',
            'uuid' => Str::uuid(),
            'user_id' => rand(1,4),
        ]);
    }
}
