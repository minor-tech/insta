<!-- resources/views/messages.blade.php -->
@extends('layouts.app')

@section('title', 'Messages')

@auth
    @section('content')
        <div class="text-center messages-container">
            <h1 class="mt-4">Messages</h1>

            <!-- List of messages -->
            <div class="list-group mt-3">
                @foreach ($messages as $message)
                    <a href="#"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-1">{{ $message['user'] }}</h5>
                            <p class="mb-1 text-muted">{{ $message['lastMessage'] }}</p>
                        </div>
                        <small class="text-muted">{{ $message['time'] }}</small>
                    </a>
                @endforeach
            </div>
        </div>
    @endsection

    @section('scripts')
        <script>
            // Optional JavaScript for the messages page, if needed
            console.log('Messages page loaded.');
        </script>
    @endsection
@endauth
