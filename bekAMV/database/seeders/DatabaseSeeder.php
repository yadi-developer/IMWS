<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataVideo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DataVideo::create([
            'name' => 'Yadi',
            'title' => 'Nice game!',
            'link_video' => 'https://a.top4top.io/m_2175v2iwa0.mp4',
            'style' => json_encode(['Edgy', 'Jedag jedug']),
            'viewers' => 0,
            'social_media' => json_encode([
                'fb' => 'https://facebook.com',
                'ig' => 'https://instagram.com/triyadimulyana'
            ])
        ]);
    }
}
