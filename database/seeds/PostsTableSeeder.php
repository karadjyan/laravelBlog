<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array(
                [
                    'title' => 'never give up',
                    'intro' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body_post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ],
                [
                    'title' => 'laravel',
                    'intro' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body_post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ],
                [
                    'title' => 'php',
                    'intro' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body_post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ],
                [
                    'title' => 'wp',
                    'intro' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                    'body_post' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
                ]
            )
    );
    }
}
