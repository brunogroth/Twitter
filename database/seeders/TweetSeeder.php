<?php

namespace Database\Seeders;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'John Galt',
            'email' => 'johngalt@gmail.com'

        ]);
        Tweet::factory()->count(400)->create([
            'created_by' => User::first()
        ]);
    }
}
