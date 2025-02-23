@extends('layouts.personal')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Комментарии</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('personal.index')}}">Личный кабинет</a></li>
                            <li class="breadcrumb-item active">Комментарии</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">


            <div class="container-fluid ">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card w-50 ">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-head-fixed text-nowrap">
                                <thead align="center">
                                <tr>
                                    <th>Название поста</th>
                                    <th>Ваш комментарий</th>
                                    <th colspan="3">Действия</th>
                                </tr>
                                </thead>
                                <tbody align="center">
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$comment->post->title}}</td>
                                        <td>{{$comment->message}}</td>
                                        <td><a href="{{route('main.show', $comment->post->id)}}"><i class="fa-solid fa-eye"></i></a> </td>
                                        <td><a href="{{route('personal.comment.edit', $comment->id)}}"><i class="fa-solid fa-pen"></i></a> </td>
                                        <td>

                                            <form action="{{ route('personal.comment.delete', $comment->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" value="Delete" class="btn-outline-primary text-danger bg-transparent border-0"><i class="fa-solid fa-trash"></i></button>
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
