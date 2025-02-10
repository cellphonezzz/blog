@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Админ панель</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                            <li class="breadcrumb-item active">Изменение поста</li>
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
                            <h3 class="card-title">Изменение категории</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('admin.category.update', $post->id)}}">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title" class="form-label">Название поста</label>
                                    <input name="title" type="text" class="form-control" id="title"  value="{{$post->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="content" class="form-label">Контент</label>
                                    <input name="content" type="text" class="form-control" id="content" value="{{$post->content}}">
                                </div>

                                <div class="form-group">
                                    <label for="image" class="form-label">Фотография</label>
                                    <input name="image" type="text" class="form-control" id="image" value="{{$post->image}}">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div align="center" class="card-footer">
                                <button type="submit" class="btn btn-primary">Изменить</button>
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
