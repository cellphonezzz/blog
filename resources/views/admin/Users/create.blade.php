@extends('layouts.admin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление нового пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                            <li class="breadcrumb-item active">Добавление нового пользователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">


            <div>
                <a href="{{route('admin.user.index')}}" class="btn btn-primary mb-3">Вернуться назад</a>
            </div>

            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">

                    <div class="card card-primary w-50">
                        <div class="card-header">
                            <h3 class="card-title">Добавление пользователя</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="{{route('admin.user.store')}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name" class="form-label">Имя</label>
                                    <input name="name" type="text" class="form-control" id="name" value="{{old('name')}}" placeholder="Имя пользователя">
                                </div>
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="text" class="form-control" id="email" value="{{old('email')}}" placeholder="Адрес электронной почты">
                                </div>
                                @error('email')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="password" class="form-label">Пароль пользователя</label>
                                    <input name="password" type="password" class="form-control" id="password" value="{{old('name')}}" placeholder="Пароль">
                                </div>
                                @error('password')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group w-75 ml-4">
                                <label>Выберите роль пользователя</label>
                                <select name="role" class="form-control">
                                    @foreach($roles as $id => $role)

                                        <option value="{{$id}}"
                                            {{ $id == old('role') ? ' selected' : '' }}
                                        >{{$role}}</option>

                                    @endforeach


                                </select>

                                @error('role')
                                <div class="text-danger ">{{$message}}</div>
                                @enderror
                            </div>


                            <!-- /.card-body -->
                            <div align="center" class="card-footer">
                                <button type="submit" class="btn btn-primary">Создать</button>
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
