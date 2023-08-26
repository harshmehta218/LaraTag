<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $post = [
            [
                'user_id' => '1',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '1',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '1',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '1',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '1',
                'post' => 'this is my five post',
            ],

            [
                'user_id' => '2',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '2',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '2',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '2',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '2',
                'post' => 'this is my five post',
            ],


            [
                'user_id' => '3',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '3',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '3',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '3',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '3',
                'post' => 'this is my five post',
            ],


            [
                'user_id' => '4',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '4',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '4',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '4',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '4',
                'post' => 'this is my five post',
            ],


            [
                'user_id' => '5',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '5',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '5',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '5',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '5',
                'post' => 'this is my five post',
            ],

            [
                'user_id' => '6',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '6',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '6',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '6',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '6',
                'post' => 'this is my five post',
            ],


            [
                'user_id' => '7',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '7',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '7',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '7',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '7',
                'post' => 'this is my five post',
            ],

            [
                'user_id' => '8',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '8',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '8',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '8',
                'post' => 'this is my fourth post',
            ],
            [
                'user_id' => '8',
                'post' => 'this is my five post',
            ],

            [
                'user_id' => '9',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '9',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '9',
                'post' => 'this is my third post',
            ],

            [
                'user_id' => '10',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '10',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '10',
                'post' => 'this is my third post',
            ],

            [
                'user_id' => '11',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '11',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '11',
                'post' => 'this is my third post',
            ],
            [
                'user_id' => '11',
                'post' => 'this is my fourth post',
            ],

            [
                'user_id' => '12',
                'post' => 'this is my first post',
            ],

            [
                'user_id' => '13',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '13',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '13',
                'post' => 'this is my third post',
            ],


            [
                'user_id' => '14',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '14',
                'post' => 'this is my second post',
            ],

            [
                'user_id' => '15',
                'post' => 'this is my first post',
            ],
            [
                'user_id' => '15',
                'post' => 'this is my second post',
            ],
            [
                'user_id' => '15',
                'post' => 'this is my third post',
            ],
        ];

        DB::table('posts')->insert($post);
    }
}
