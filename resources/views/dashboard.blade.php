<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @auth
                        <p>{{ __("You're logged in, ") . Auth::user()->name . '!' }}</p>
                    @else
                        <p>{{ __("You're not logged in!") }}</p>
                    @endauth

                    <!-- Video Cards -->
                    @foreach ($videos as $index => $video)
                        <div class="mt-6">
                            <div class="bg-white dark:bg-gray-700 p-4 rounded-lg shadow-md">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Video {{ $index + 1 }}</h3>
                                <div class="mb-4">
                                    @php
                                        // Extract the YouTube video ID and convert to embed URL
                                        $videoId = null;
                                        if (strpos($video->url, 'youtu.be') !== false) {
                                            $videoId = substr(parse_url($video->url, PHP_URL_PATH), 1);
                                        } elseif (strpos($video->url, 'youtube.com') !== false) {
                                            parse_str(parse_url($video->url, PHP_URL_QUERY), $queryParams);
                                            $videoId = $queryParams['v'] ?? null;
                                        }
                                        $embedUrl = $videoId ? 'https://www.youtube.com/embed/' . $videoId : null;
                                    @endphp
                                    @if ($embedUrl)
                                        <iframe class="w-full h-60 md:h-96 lg:h-[500px]" src="{{ $embedUrl }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    @else
                                        <p class="text-red-500">Invalid YouTube URL: {{ $video->url }}</p>
                                    @endif
                                </div>
                                <form action="{{ route('videos.complete', $video) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Watch Completed</button>
                                </form>
                            </div>
                        </div>
                    @endforeach

                    <!-- Progress Bar -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Progress Tracker</h3>
                        <div class="w-full bg-gray-300 rounded-full h-4 overflow-hidden">
                            <div class="bg-green-500 h-4" style="width: {{ ($completedVideos / 15) * 100 }}%;"></div>
                        </div>
                        <div class="mt-2 text-right">
                            <p>{{ $completedVideos }} / 15 Videos Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
