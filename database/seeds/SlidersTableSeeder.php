<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\slider::create([
            'image' => '/images/la.jpg',
            'title' => 'Los Angeles',
            'description' => 'We had the best time playing at Venice Beach!',
        ]);
        \App\slider::create([
            'image' => '/images/ny.jpg',
            'title' => 'New York',
            'description' => 'The atmosphere in New York is lorem ipsum.',
        ]);
        \App\slider::create([
            'image' => '/images/chicago.jpg',
            'title' => 'Chicago',
            'description' => "Thank you, Chicago - A night we won\'t forget.",
        ]);
    }
}
