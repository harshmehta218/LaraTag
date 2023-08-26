<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::truncate();

        $comment = [
            [
                'post_id' => '1',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '1',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '1',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '1',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '1',
                'comment' => 'this is my five comment',
            ],

            [
                'post_id' => '2',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '2',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '2',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '2',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '2',
                'comment' => 'this is my five comment',
            ],


            [
                'post_id' => '3',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '3',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '3',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '3',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '3',
                'comment' => 'this is my five comment',
            ],


            [
                'post_id' => '4',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '4',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '4',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '4',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '4',
                'comment' => 'this is my five comment',
            ],


            [
                'post_id' => '5',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '5',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '5',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '5',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '5',
                'comment' => 'this is my five comment',
            ],

            [
                'post_id' => '6',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '6',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '6',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '6',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '6',
                'comment' => 'this is my five comment',
            ],


            [
                'post_id' => '7',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '7',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '7',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '7',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '7',
                'comment' => 'this is my five comment',
            ],

            [
                'post_id' => '8',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '8',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '8',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '8',
                'comment' => 'this is my fourth comment',
            ],
            [
                'post_id' => '8',
                'comment' => 'this is my five comment',
            ],

            [
                'post_id' => '9',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '9',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '9',
                'comment' => 'this is my third comment',
            ],

            [
                'post_id' => '10',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '10',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '10',
                'comment' => 'this is my third comment',
            ],

            [
                'post_id' => '11',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '11',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '11',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '11',
                'comment' => 'this is my fourth comment',
            ],

            [
                'post_id' => '12',
                'comment' => 'this is my first comment',
            ],

            [
                'post_id' => '13',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '13',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '13',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '14',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '14',
                'comment' => 'this is my second comment',
            ],

            [
                'post_id' => '15',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '15',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '15',
                'comment' => 'this is my third comment',
            ],

            [
                'post_id' => '16',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '16',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '16',
                'comment' => 'this is my second comment',
            ],

            [
                'post_id' => '17',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '17',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '18',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '18',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '19',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '19',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '19',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '21',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '21',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '21',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '22',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '22',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '22',
                'comment' => 'this is my third comment',
            ],



            [
                'post_id' => '23',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '23',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '23',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '24',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '24',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '24',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '25',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '25',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '25',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '26',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '26',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '26',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '27',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '27',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '27',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '28',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '28',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '28',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '29',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '29',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '29',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '30',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '30',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '30',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '31',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '31',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '31',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '32',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '32',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '32',
                'comment' => 'this is my third comment',
            ],
                        [
                'post_id' => '33',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '33',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '33',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '34',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '34',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '34',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '34',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '34',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '34',
                'comment' => 'this is my third comment',
            ],
                        [
                'post_id' => '35',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '35',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '35',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '36',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '36',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '36',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '37',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '37',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '37',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '38',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '38',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '38',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '39',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '39',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '39',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '40',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '40',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '40',
                'comment' => 'this is my third comment',
            ],
            [
                'post_id' => '41',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '41',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '41',
                'comment' => 'this is my third comment',
            ],




            [
                'post_id' => '42',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '42',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '42',
                'comment' => 'this is my third comment',
            ],

            [
                'post_id' => '43',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '43',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '43',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '44',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '44',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '44',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '45',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '45',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '45',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '46',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '46',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '46',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '47',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '47',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '47',
                'comment' => 'this is my third comment',
            ],

            [
                'post_id' => '48',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '48',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '48',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '49',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '49',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '49',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '50',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '50',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '50',
                'comment' => 'this is my third comment',
            ],



            [
                'post_id' => '51',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '51',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '51',
                'comment' => 'this is my third comment',
            ],



            [
                'post_id' => '52',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '52',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '52',
                'comment' => 'this is my third comment',
            ],



            [
                'post_id' => '53',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '53',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '53',
                'comment' => 'this is my third comment',
            ],



            [
                'post_id' => '54',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '54',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '54',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '55',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '55',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '55',
                'comment' => 'this is my third comment',
            ],


            [
                'post_id' => '56',
                'comment' => 'this is my first comment',
            ],
            [
                'post_id' => '56',
                'comment' => 'this is my second comment',
            ],
            [
                'post_id' => '56',
                'comment' => 'this is my third comment',
            ],
        ];

        DB::table('comments')->insert($comment);
    }
}
