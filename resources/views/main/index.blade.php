@extends('layouts.main')
@section('content')

    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
            <section class="featured-posts-section">
                <div class="row">

                </div>


            </section>
            <div class="row">
                <div class="col-md-8">
                    <section>



                            <div class="row blog-post-row">
                                @foreach($posts as $post)

                                <div class="col-md-6 blog-post" data-aos="fade-up">

                                    <div class="blog-post-thumbnail-wrapper">
                                        <a href="{{route('main.show', $post->id)}}" class="blog-post-permalink">
                                        <img src="{{asset('assets/images/blog_4.jpg')}}" alt="blog post">
                                        </a>
                                    </div>
                                    <p class="blog-post-category">{{$post->title}}</p>
                                    <a href="{{route('main.show', $post->id)}}" class="blog-post-permalink">
                                        <h6 class="blog-post-title">{{$post->content}}</h6>
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

                            @foreach($posts as $postTop)

                                <li class="post">
                                    <a href="#!" class="post-permalink media">
                                        <img src="{{asset('assets/images/blog_widget_1.jpg')}}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{$postTop->content}}</h6>
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
