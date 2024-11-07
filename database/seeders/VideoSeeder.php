<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideoSeeder extends Seeder
{
    public function run()
    {
        $videos = [
            'https://youtu.be/DfY7rRQXf3M?si=qUiXY1SyEu38F6KT',
            'https://youtu.be/n0-oAxKkg4M?si=aphYQgQzwZsgH488',
            'https://youtu.be/IKHQbu_0lGc?si=xj2ZQ47k7CSyNhVR',
            'https://youtu.be/n0-oAxKkg4M?si=aphYQgQzwZsgH488',
            'https://www.youtube.com/live/mAz6_5WJ4nI?si=H9hNoJ8Oq4bAi_am',
            'https://youtu.be/n0-oAxKkg4M?si=aphYQgQzwZsgH488',
            'https://youtu.be/w1mOArZeHO0?si=GVUy1kR5bSTJPKPN',
            'https://youtu.be/UmH6hIB6XV8?si=OdCf0snPlFRjNngF',
            'https://youtu.be/n0-oAxKkg4M?si=aphYQgQzwZsgH488',
            'https://youtu.be/UmH6hIB6XV8?si=OdCf0snPlFRjNngF',
            'https://youtu.be/n0-oAxKkg4M?si=aphYQgQzwZsgH488',
            'https://youtu.be/UmH6hIB6XV8?si=OdCf0snPlFRjNngF',
            'https://youtu.be/n0-oAxKkg4M?si=aphYQgQzwZsgH488',
            'https://youtu.be/5i0Z0E5yaYI?si=IAuFB2CagJPYJp39',
            'https://youtu.be/UmH6hIB6XV8?si=OdCf0snPlFRjNngF'
        ];

        foreach ($videos as $url) {
            Video::create(['url' => $url]);
        }
    }
}
