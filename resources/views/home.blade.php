<!-- resources/views/profile/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <!-- Sidebar with navigation buttons -->
            <div class="list-group">
                <button class="list-group-item list-group-item-action">Home</button>
                <button class="list-group-item list-group-item-action">Search</button>
                <button class="list-group-item list-group-item-action">Explore</button>
                <button class="list-group-item list-group-item-action">Reels</button>
                <button class="list-group-item list-group-item-action">Messages</button>
                <button class="list-group-item list-group-item-action">Notifications</button>
                <button class="list-group-item list-group-item-action">Create</button>
                <button class="list-group-item list-group-item-action">Profile</button>
                <button class="list-group-item list-group-item-action">More</button>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Main Content: Posts -->
            <div class="container mt-4">
                <!-- Post 1 -->
                <div class="card mb-3">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Post Image">
                    <div class="card-body">
                        <h5 class="card-title">User Name</h5>
                        <p class="card-text">Caption for the post...</p>
                    </div>
                </div>
                <!-- More Posts... -->
            </div>
        </div>

        <div class="col-md-3">
            <!-- Suggested Users -->
            <div class="container mt-4">
                <h5>Suggested For You</h5>
                <ul class="list-group">
                    <li class="list-group-item">User 1</li>
                    <li class="list-group-item">User 2</li>
                    <li class="list-group-item">User 3</li>
                    <li class="list-group-item">User 4</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
