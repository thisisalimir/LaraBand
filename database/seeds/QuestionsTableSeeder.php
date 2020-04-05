<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        \App\Question::create([
            'user_id' => 1,
            'question_body' => 'Who inspired you to make music?',
            'answer_body' => 'Nirvana',
        ]);
        \App\Question::create([
            'user_id' => 2,
            'question_body' => 'Who would you most like to collaborate with?',
            'answer_body' => 'Slipknot',
        ]);
        \App\Question::create([
            'user_id' => 1,
            'question_body' => 'What is one message you would give to your fans?',
            'answer_body' => null,
        ]);
    }
}
