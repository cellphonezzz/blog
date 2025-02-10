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
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Посты</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div >
                <a href="{{route('admin.post.create')}}" class="btn btn-primary mb-3">Добавить пост</a>
            </div>

            <div class="container-fluid ">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card w-50 ">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead align="center">
                                <tr>
                                    <th>ID</th>
                                    <th>Название</th>
                                    <th>Описание</th>
                                    <th></th>
                                    <th>Действие</th>
                                    <th></th>


                                </tr>
                                </thead>
                                <tbody align="center">
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->content}}</td>
                                        <td><a href="{{route('admin.post.show', $post->id)}}"><i class="fa-solid fa-eye"></i></a> </td>
                                        <td><a href="{{route('admin.post.edit', $post->id)}}"><i class="fa-solid fa-pen"></i></a> </td>
                                        <td>

                                        <form action="{{ route('admin.post.delete', $post->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" value="Delete" class="btn-outline-primary border-0"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                        </td>


                                    </tr>
                                @endforeach



                                </tbody>
                            </table>
                        </div>


                        <!-- /.card-body -->
                    </div>


                    <!-- ./col -->
                </div>


            </div>

            <!-- /.card -->
        </section>
    </div>


@endsection
