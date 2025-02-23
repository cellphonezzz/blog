<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Блог</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">

</head>
<body>



<div class="mt-3 mb-5 container text-center">
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{route('main.index')}}">Главная страница блога</a>
        </div>
        <div class="col">
            <a href="{{route('admin.index')}}" class="btn btn-primary">Админ панель</a>
        </div>
        <div class="col">
            <a class="btn btn-primary" href="{{route('home')}}">Авторизация</a>
        </div>


    </div>
</div>

<div class="mt-3 container text-center">
    <div class="row">
        <div class="col">
            <p>Представляю вашему вниманию мой первый проект выполненный на Laravel. Изучаю laravel я в течении месяца. В рамках проекта было выполененно следующее:</p>
            <p>- реализована админ панель с CRUD системой (добавление, просмотр, обновление и удаление постов, категорий, тэгов;</p>
            <p>- реализована связь один ко многим (пост - категория);</p>
            <p>- реализована связь многие ко многим (посты - тэги);</p>
            <p>- система авторизации с помощью средств laravel;</p>
            <p>- клиентовская часть ввиде блога и личный кабинет пользователя;</p>
            <p>- функция лайка, комментарии, загрузка фотографий;</p>
            <p>- отображение времени с помощью класса Carbon;</p>
            <p>- отображение постов в зависимости от их лайков;</p>
            <p>- и многое другое;</p>
        </div>





</div>

    <a class="btn btn-primary" target="_blank" href="https://github.com/cellphonezzz/blog">Ссылка на мой гитхаб</a>

</body>
</html>
