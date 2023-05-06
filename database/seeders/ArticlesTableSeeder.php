<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'New York City',
                'content' => 'The city that never sleeps, famous for its landmarks such as the Statue of Liberty and Central Park.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Paris',
                'content' => 'Known as the City of Love, famous for its art, architecture, and landmarks such as the Eiffel Tower and Louvre Museum.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'London',
                'content' => 'The capital city of England, known for its rich history and landmarks such as Big Ben and the Tower of London.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tokyo',
                'content' => 'The capital city of Japan, known for its vibrant culture, delicious food, and landmarks such as Tokyo Tower and Shibuya Crossing.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Sydney',
                'content' => 'The largest city in Australia, known for its beautiful beaches, stunning harbor, and landmarks such as the Opera House and Harbour Bridge.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Rio de Janeiro',
                'content' => 'A city in Brazil known for its beaches, carnival celebrations, and landmarks such as Christ the Redeemer and Sugarloaf Mountain.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Barcelona',
                'content' => 'A city in Spain known for its art, architecture, and landmarks such as the Sagrada Familia and Park Guell.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Dubai',
                'content' => 'A city in the United Arab Emirates known for its skyscrapers, shopping, and landmarks such as the Burj Khalifa and Dubai Fountain.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Amsterdam',
                'content' => 'A city in the Netherlands known for its canals, museums, and landmarks such as the Anne Frank House and Van Gogh Museum.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Mumbai',
                'content' => 'A city in India known for its bustling markets, delicious street food, and landmarks such as the Gateway of India and Elephanta Caves.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Hong Kong',
                'content' => 'A city in China known for its towering skyscrapers, delicious food, and landmarks such as Victoria Peak and the Big Buddha.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Berlin',
                'content' => 'The capital city of Germany, known for its history, culture, and landmarks such as the Berlin Wall and Brandenburg Gate.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
