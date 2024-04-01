<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('votes')->delete();

        DB::table('votes')->insert([
            'id' => 1,
            'joke' => 'A child asked his father, "How were people born?" So his father said, "Adam and Eve made babies, then their babies became adults and made babies, and so on."

                The child then went to his mother, asked her the same question and she told him, "We were monkeys then we evolved to become like we are now."

                The child ran back to his father and said, "You lied to me!" His father replied, "No, your mom was talking about her side of the family."',
            'total_vote' => 0,
            'like' => 0,
            'dislike' => 0,
        ]);
        DB::table('votes')->insert([
            'id' => 2,
            'joke' => 'Teacher: "Kids,what does the chicken give you?" Student: "Meat!" Teacher: "Very good! Now what does the pig give you?" Student: "Bacon!" Teacher: "Great! And what does the fat cow give you?" Student: "Homework!"',
            'total_vote' => 0,
            'like' => 0,
            'dislike' => 0,
        ]);
        DB::table('votes')->insert([
            'id' => 3,
            'joke' => 'The teacher asked Jimmy, "Why is your cat at school today Jimmy?" Jimmy replied crying, "Because I heard my daddy tell my mommy, \'I am going to eat that pussy once Jimmy leaves for school today!\'"',
            'total_vote' => 0,
            'like' => 0,
            'dislike' => 0,
        ]);
        DB::table('votes')->insert([
            'id' => 4,
            'joke' => 'A housewife, an accountant and a lawyer were asked "How much is 2+2?" The housewife replies: "Four!". The accountant says: "I think it\'s either 3 or 4. Let me run those figures through my spreadsheet one more time." The lawyer pulls the drapes, dims the lights and asks in a hushed voice, "How much do you want it to be?"',
            'total_vote' => 0,
            'like' => 0,
            'dislike' => 0,
        ]);
    }
}
