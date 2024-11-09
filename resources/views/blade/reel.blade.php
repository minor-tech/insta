<!-- resources/views/reel.blade.php -->
@extends('layouts.app')

@section('title', 'Reel Page')

@section('content')
    <div class="text-center reel-container">
        <h1 class="mt-4">Reel</h1>

        <!-- Loop through videos and display each -->
        @foreach ($videos as $video)
            <div class="video-wrapper mt-3">
                <video class="reel-video" src="{{ asset($video) }}" autoplay muted loop></video>
            </div>

            <!-- Controls for each video -->
            <div class="controls">
                <button class="btn btn-light"><i class="bi bi-heart"></i> Like</button>
                <button class="btn btn-light"><i class="bi bi-chat"></i> Comment</button>
                <button class="btn btn-light"><i class="bi bi-share"></i> Share</button>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelectorAll('.reel-video').forEach(video => {
            video.addEventListener('play', function() {
                fetch('/increment-view-count', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                });
            });
        });
    </script>
@endsection
