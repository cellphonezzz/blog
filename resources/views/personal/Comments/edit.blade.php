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
                            <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категории</a></li>
                            <li class="breadcrumb-item active">Изменение категории</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div>
                <a href="{{route('personal.comment.index')}}" class="btn btn-primary mb-3">Вернуться назад</a>
            </div>

            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card card-primary w-50">
                        <div class="card-header">
                            <h3 class="card-title">Изменение комментария</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('personal.comment.update', $comment->id)}}">
                            @csrf
                            @method('patch')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title" class="form-label">Комментарий</label>
                                    <input name="message" type="text" class="form-control" id="title" value="{{$comment->message}}">
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
