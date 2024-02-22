@extends('layouts.app')

@section('content')
    <div class="container cont-buttons">
        <div class="container d-flex justify-content-center">
            <a href="#coffee" class="btn  btn-sm">Кофейные напитки</a>
            <a href="#cookie" class="btn  btn-sm">Печенья и сладости</a>
            <a href="#pack" class="btn  btn-sm">Молотый и зерновой кофе</a>
        </div>




        @foreach ($data as $category => $coffees)
            <h2>{{ $category }}</h2>
            <div class="container-border1 container d-flex justify-content-around flex-wrap">
                @foreach ($coffees as $coffee)
                    <div class="card" style="width: 18rem;">
                        <div class="container_img">
                            <img src="{{ Storage::url($coffee->photo) }}" class="card-img-top" alt="coffee1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $coffee->title }}</h5>
                            <p class="card-text">
                                {{ $coffee->description }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Категория: {{ $category }}</li>
                            <li class="list-group-item">Цена: {{ $coffee->cost }}</li>
                        </ul>
                        <div class="card-body d-flex gap-3 align-items-center">
                            <a href="{{route('coffee-page', $coffee->id)}}" class="btn btn-success">Подробнее</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
        <footer>
            <ul>
                <li>
                    <a href="#">Главная</a>
                </li>
                <li>
                    <a href="#">Каталог</a>
                </li>

                <li>
                    <a href="{{ route('kabinet') }}">Личный кабинет</a>
                </li>

                <li>
                    <a href="{{ route('admin') }}">Админ панель</a>
                </li>
            </ul>
        </footer>

    </div>

    <style>
        footer {
            margin-top: 50px;
            padding: 30px;
            border-top: 2px solid #dedede;
        }

        footer li,
        footer a {
            list-style-type: none;
            text-decoration: none;
            color: rgb(58, 58, 58);
        }


        .container_img {
            width: auto;
            height: auto;
            overflow: hidden;

        }

        .container-border1 {
            border-left: 3px solid #4E57AA;
        }

        .container-border2 {
            border-left: 3px solid rgb(65, 157, 255);
        }

        .container-border3 {
            border-left: 3px solid #4eaa88;
        }

        .container_img img {
            width: 100%;
            height: auto;
        }

        .card {
            margin-bottom: 30px;
        }

        .h3 {
            padding: 30px;
        }

        .cont-buttons>a {
            margin-left: 30px;
        }

        li {
            list-style-type: none;
        }
    </style>
@endsection
