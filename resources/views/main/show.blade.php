@extends('layouts.main')
@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">
                • {{ $date->translatedFormat('F') }} {{ $date->day }}, {{ $date->year }} • {{$date->format('H:i')}}
                • {{$post->comments->count() }} {{ ($post->comments->count() > 4 || $post->comments->count() == 0) ? 'комментариев' : 'комментария' }}
                • </p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ url('storage/' . $post->image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <p>{!! $post->content !!}</p>
                    </div>
                </div>


                @auth()
                    <div class="ml-2 mb-4">
                        <form action="{{route('main.like.store', $post->id)}}" method="post">
                            @csrf
                            <span>{{$post->liked_users_count}}</span>
                            <button type="submit" class=" border-0 bg-transparent">
                                @if(auth()->user()->likedPosts->contains($post->id))
                                    <i class="fa-solid fa-heart"></i>
                                @else
                                    <i class="fa-regular fa-heart"></i>
                                @endif
                            </button>
                        </form>
                    </div>
                @endauth

                @guest()

                    <small>{{$post->liked_users_count}}</small>
                    <i class="fa-regular fa-heart"></i>
                @endguest

                <section class="comment-list mb-5">
                    <h2 class="section-title mb-5"> Комментарии ({{$post->comments->count()}})</h2>
                    @foreach($post->comments as $comment)
                        <div class="comment-text mb-3">
                                <span class="username">
                                    <div>
                                       <b>
                                        {{$comment->user->name}}
                                       </b>
                                    </div>
                                    <span
                                        class="text-muted float-right">{{$comment->dateAsCarbon->diffForHumans()}}</span>
                                </span><!-- /.username -->
                            {{$comment->message}}
                        </div>
                    @endforeach
                </section>

                @auth()
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Написать комментарий</h2>
                        <form action="{{ route('main.comment.store', $post->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" class="form-control" placeholder="Комментарий"
                                              rows="10"></textarea>
                                </div>
                            </div>
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="row">
                                <div class="col-12" data-aos="fade-up">
                                    <input type="submit" value="Отправить" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </section>
                @endauth

                @if($anotherPosts->count() > 0)
            </section>
            <div class="row mb-5">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                        <div class="row">

                            @foreach($anotherPosts as $anotherPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">

                                    <img src="{{ url('storage/' . $anotherPost->image) }}" alt="related post"
                                         class="post-thumbnail">

                                    <p class="post-category">{{$anotherPost->category->title}}</p>
                                    <a href="{{ route('main.show', $anotherPost->id) }}">
                                        <h5 class="post-title">{{$anotherPost->title}}</h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </section>
                    @endif

                </div>
            </div>
        </div>
    </main>

@endsection
