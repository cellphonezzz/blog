@extends('layouts.main')
@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <div class="container">
                <section class="featured-posts-section">
                    <div class="row mb-4">
                        @foreach($posts as $post_new)
                            <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ url('storage/' . $post_new->image) }}" alt="blog post">
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="blog-post-category">{{$post_new->category->title}}</p>
                                    @auth()
                                        <form action="{{route('main.like.store', $post_new->id)}}" method="post">
                                            @csrf
                                            <span>{{$post_new->liked_users_count}}</span>
                                            <button type="submit" class="border-0 bg-transparent">
                                                @if(auth()->user()->likedPosts->contains($post_new->id))
                                                    <i class="fa-solid fa-heart"></i>
                                                @else
                                                    <i class="fa-regular fa-heart"></i>
                                                @endif
                                            </button>
                                        </form>
                                    @endauth
                                    @guest()
                                        <div>
                                        <span>{{$post_new->liked_users_count}} </span>

                                            <i class="fa-regular fa-heart"></i>
                                        </div>


                                    @endguest

                                </div>
                                <a href="{{ route('main.show' , $post_new->id) }}" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{$post_new->title}}</h6>
                                </a>
                            </div>
                        @endforeach

                    </div>

                    <div class="row mb-4">
                        {{--                    pagination--}}
                        <div class="mx-auto" style="margin-top: -80px; ">
                            {{$posts->links()}}
                        </div>
                        {{--                    end-pagination--}}
                    </div>
                </section>

                <div class="row">
                    <div class="col-md-8">
                        <section>
                            <div class="row blog-post-row">
                                @foreach($randomPosts as $post)

                                    <div class="col-md-6 blog-post" data-aos="fade-up">
                                        <div class="blog-post-thumbnail-wrapper">
                                            <img src="{{ url('storage/' . $post->image) }}" alt="blog post">
                                        </div>
                                        <p class="blog-post-category">{{$post->category->title}}</p>
                                        <a href="{{ route('main.show' , $post->id) }}" class="blog-post-permalink">
                                            <h6 class="blog-post-title">{{$post->title}}</h6>
                                        </a>
                                    </div>

                                @endforeach
                            </div>

                        </section>
                    </div>
                    <div class="col-md-4 sidebar" data-aos="fade-left">


                        <div class="widget widget-post-list">
                            <h5 class="widget-title">Популярные посты</h5>
                            <ul class="post-list">

                                @foreach($likedPosts as $postTop)

                                    <li class="post">
                                        <a href="{{ route('main.show' , $postTop->id) }}" class="post-permalink media">
                                            <img src="{{ url('storage/' . $postTop->image) }}" alt="image">
                                            <div class="media-body">
                                                <h6 class="post-title">{{$postTop->title}}</h6>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

    </main>

@endsection
