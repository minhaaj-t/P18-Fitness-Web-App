<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserVideo;
use App\Models\Video;

class UserVideoController extends Controller
{
    public function complete(Video $video)
    {
        UserVideo::updateOrCreate(
            ['user_id' => auth()->id(), 'video_id' => $video->id],
            ['completed' => true]
        );

        return redirect()->route('videos.index');
    }
}
