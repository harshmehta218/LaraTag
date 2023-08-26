<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run()
    {
        Tag::truncate();

        $tag = [
            [
                'post_id' => '1',
                'tag_name' => 'test tag'
            ],
            [
                'post_id' => '1',
                'tag_name' => 'test one tag'
            ],
            [
                'post_id' => '1',
                'tag_name' => 'test other tag'
            ],
            [
                'post_id' => '2',
                'tag_name' => 'test two tag'
            ],
            [
                'post_id' => '2',
                'tag_name' => 'test post tag'
            ],
            [
                'post_id' => '3',
                'tag_name' => 'test active tag'
            ],
            [
                'post_id' => '3',
                'tag_name' => 'test deactive tag'
            ],
            [
                'post_id' => '4',
                'tag_name' => 'test four tag'
            ],
            [
                'post_id' => '4',
                'tag_name' => 'test new tag'
            ],
            [
                'post_id' => '4',
                'tag_name' => 'test under tag'
            ],
            [
                'post_id' => '5',
                'tag_name' => 'test five tag'
            ],
            [
                'post_id' => '5',
                'tag_name' => 'test post tag'
            ],
            [
                'post_id' => '6',
                'tag_name' => 'test six tag'
            ],
            [
                'post_id' => '7',
                'tag_name' => 'test seven one tag'
            ],
            [
                'post_id' => '7',
                'tag_name' => 'test seven two tag'
            ],
            [
                'post_id' => '7',
                'tag_name' => 'test seven three tag'
            ],
            [
                'post_id' => '8',
                'tag_name' => 'test eight tag'
            ],
            [
                'post_id' => '8',
                'tag_name' => 'test eight wto tag'
            ],
            [
                'post_id' => '9',
                'tag_name' => 'test nine tag'
            ],
            [
                'post_id' => '9',
                'tag_name' => 'test two tag'
            ],
            [
                'post_id' => '9',
                'tag_name' => 'test three tag'
            ],
            [
                'post_id' => '10',
                'tag_name' => 'test ten tag'
            ],
            [
                'post_id' => '10',
                'tag_name' => 'test space tag'
            ],
            [
                'post_id' => '10',
                'tag_name' => 'test ten tag'
            ],
            [
                'post_id' => '10',
                'tag_name' => 'test tom tag'
            ],
            [
                'post_id' => '11',
                'tag_name' => 'test elevan tag'
            ],
            [
                'post_id' => '11',
                'tag_name' => 'test post tag'
            ],
            [
                'post_id' => '11',
                'tag_name' => 'test user tag'
            ],
            [
                'post_id' => '11',
                'tag_name' => 'test active tag'
            ],

            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '13',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '13',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '14',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '15',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '15',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '15',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '15',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '12',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '13',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '13',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '14',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '14',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '15',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '15',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '16',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '16',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '17',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '17',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '18',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '18',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '18',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '19',
                'tag_name' => 'test twel tag'
            ],



            [
                'post_id' => '20',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '20',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '20',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '20',
                'tag_name' => 'test twel tag'
            ],



            [
                'post_id' => '21',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '21',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '21',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '22',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '23',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '23',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '23',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '24',
                'tag_name' => 'test twel tag'
            ],



            [
                'post_id' => '25',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '25',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '26',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '26',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '27',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '27',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '27',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '28',
                'tag_name' => 'test twel tag'
            ],





            [
                'post_id' => '29',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '29',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '30',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '31',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '32',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '32',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '33',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '33',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '34',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '34',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '35',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '35',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '36',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '36',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '36',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '36',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '37',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '37',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '37',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '37',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '38',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '38',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '39',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '39',
                'tag_name' => 'test twel tag'
            ],



            [
                'post_id' => '40',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '41',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '41',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '42',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '43',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '43',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '44',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '45',
                'tag_name' => 'test twel tag'
            ],



            [
                'post_id' => '46',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '47',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '47',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '47',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '48',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '48',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '48',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '49',
                'tag_name' => 'test twel tag'
            ],


            [
                'post_id' => '50',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '50',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '51',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '52',
                'tag_name' => 'test twel tag'
            ],



            [
                'post_id' => '53',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '53',
                'tag_name' => 'test twel tag'
            ],

            [
                'post_id' => '54',
                'tag_name' => 'test twel tag'
            ],
            [
                'post_id' => '54',
                'tag_name' => 'test twel tag'
            ],
        ];

        DB::table('tags')->insert($tag);
    }
}
