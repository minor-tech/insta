@extends('blade.main')

@section('title', 'Explore')


@auth
    @section('content')
        <div class="container-fluid mt-4">
            <h2 class="fw-bold text-center mb-4">Explore</h2>

            <!-- Explore Grid -->
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-3" id="exploreGrid">
                <!-- Sample Post Card (Repeat for each post) -->
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card border-0">
                            <!-- Post Image -->
                            <img src="{{ $post->image_url }}" class="card-img-top" alt="Post Image"
                                style="object-fit: cover; height: 100%;">

                            <!-- Overlay on hover -->
                            <div class="overlay d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 text-white p-2"
                                style="background: rgba(0, 0, 0, 0.4); opacity: 0; transition: opacity 0.3s;">
                                <div class="d-flex">
                                    <div class="me-3 d-flex align-items-center">
                                        <i class="bi bi-heart-fill me-1"></i>
                                        <span>{{ $post->likes_count }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-chat-fill me-1"></i>
                                        <span>{{ $post->comments_count }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

    @section('scripts')
        <script>
            // jQuery for hover effect (Optional)
            $(document).ready(function() {
                $('.card').hover(
                    function() {
                        $(this).find('.overlay').css('opacity', 1);
                    },
                    function() {
                        $(this).find('.overlay').css('opacity', 0);
                    }
                );
            });
        </script>
    @endsection

@endauth
