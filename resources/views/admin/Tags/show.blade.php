@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Просмотр тэга </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.tag.index')}}">Тэги</a></li>
                            <li class="breadcrumb-item active">Тэг {{$tag->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div>
                <a href="{{route('admin.tag.index')}}" class="btn btn-primary mb-3">Вернуться назад</a>
            </div>

            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card w-25">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" >
                            <table class="table table-head-fixed text-nowrap">


                                <thead align="center">
                                <tr>
                                    <th>ID</th>
                                    <th>{{$tag->id}}</th>


                                </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td>Название</td>
                                        <td>{{$tag->title}}</td>
                                    </tr>


                                    <td><a href="{{route('admin.tag.edit', $tag->id)}}"><i class="fa-solid fa-pen"></i></a> </td>
                                    <td>

                                        <form action="{{ route('admin.tag.delete', $tag->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" value="Delete" class="btn-outline-primary border-0 bg-transparent text-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>

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
