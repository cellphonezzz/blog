@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактирование поста</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Редактирование поста</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div>
                <a href="{{route('admin.post.show', $post->id)}}" class="btn btn-primary mb-3">Вернуться назад</a>
            </div>

            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card card-primary w-50">
                        <div class="card-header">
                            <h3 class="card-title">Изменение поста</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('admin.post.update', $post->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="card-body">

                                <div class="form-group">

                                    <label for="title" class="form-label">Название поста</label>
                                    <input name="title" type="text" class="form-control" id="title"
                                           value="{{$post->title}}" placeholder="Название">

                                </div>
                                @error('title')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror

                                <div class="form-group mt-1">
                                    <textarea id="summernote" name="content">{{$post->content}}</textarea>
                                </div>

                                @error('content')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror

                                <div class="form-group">
                                    <label>Загрузить изображение</label>
                                    <div class="w-50">
                                        <img src="{{ url('storage/' . $post->image) }}" alt="image">
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image"
                                                   value="{{ url('storage/' . $post->image) }}">
                                            <label class="custom-file-label">Выберите изображение</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Загрузка</span>
                                        </div>
                                    </div>
                                </div>


                                @error('image')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="form-group w-75 ml-4">
                                <label>Выбор категории</label>
                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)

                                        <option value="{{$category->id}}"
                                            {{ $category->id == $post->category_id ? ' selected' : '' }}
                                        >{{$category->title}}</option>

                                    @endforeach


                                </select>

                                @error('category_id')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-75 ml-4">
                                <label>Тэги</label>
                                <select name="tag_ids[]" class="select2" multiple="multiple"
                                        data-placeholder="Выберите тэги" style="width: 100%;">

                                    @foreach($tags as $tag)
                                        <option
                                            {{ is_array( $post->tags->pluck('id')->toArray() ) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ?  ' selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                    @endforeach


                                </select>

                                @error('tag_ids')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror
                            </div>
                            <!-- /.card-body -->
                            <div align="center" class="card-footer">
                                <button type="submit" class="btn btn-primary">Редактировать пост</button>
                            </div>
                        </form>
                    </div>

                    <!-- ./col -->
                </div>

            </div>
            <!-- /.card -->


        </section>
    </div>

@endsection
