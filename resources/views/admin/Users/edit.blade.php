@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Изменение пользователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div>
                <a href="{{route('admin.user.show', $user->id)}}" class="btn btn-primary mb-3">Вернуться назад</a>
            </div>

            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card card-primary w-50">
                        <div class="card-header">
                            <h3 class="card-title">Редактирование пользователя</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('admin.user.update', $user->id)}}">
                            @csrf
                            @method('patch')

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name" class="form-label">Имя</label>
                                    <input name="name" type="text" class="form-control" id="name" value="{{$user->name}}">
                                </div>
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email" class="form-label">Адрес электронной почты</label>
                                    <input name="email" type="text" class="form-control" id="email" value="{{$user->email}}">
                                </div>
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-75 ml-4">
                                <label>Выберите роль пользователя</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)

                                        <option value="{{$id}}"
                                            {{ $id == $user->role ? ' selected' : '' }}
                                        >{{$role}}</option>

                                    @endforeach


                                </select>

                                @error('role')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-75 ml-4">
                                <input type="hidden" name="user_id" value="{{$user->id}}">
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
