@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($videos as $video)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $video->title }}</h5>
                        @php
                            $userVideo = $userVideos->get($video->id);
                            $completed = $userVideo ? $userVideo->completed : false;
                        @endphp
                        @if ($completed)
                            <button class="btn btn-success" disabled>Completed</button>
                        @else
                            <form action="{{ route('videos.complete', $video) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-primary">Mark as Completed</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
