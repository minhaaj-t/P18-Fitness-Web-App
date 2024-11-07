<?php

// app/Http/Controllers/VideoController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\UserVideo;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        $completedVideos = UserVideo::where('user_id', Auth::id())->where('completed', true)->count();

        return view('dashboard', compact('videos', 'completedVideos'));
    }

    public function complete(Video $video)
    {
        UserVideo::updateOrCreate(
            ['user_id' => Auth::id(), 'video_id' => $video->id],
            ['completed' => true]
        );

        return redirect()->route('dashboard');
    }
}
