@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-center">
            <a href="#category" class="btn  btn-sm">Категории</a>
            <a href="#tovars" class="btn  btn-sm">Товары</a>
            <a href="#barista" class="btn  btn-sm">Панель баристы</a>

        </div>

        {{-- категории --}}
        <h3 class="h3" id="category">Категории</h3>
        <div class="container d-flex justify-content-between">

            <div class="container1 d-flex">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Кофейные напитки</h5>
                        <a href="#" class="card-link">Удалить</a>
                    </div>
                </div>

                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Печенья и сладости</h5>
                        <a href="#" class="card-link">Удалить</a>
                    </div>
                </div>

                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">Молотый и зерновой кофе</h5>
                        <a href="#" class="card-link">Удалить</a>
                    </div>
                </div>
            </div>
            <div class="container2">
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Название категории</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-dark">Создать катeгорию</button>
                </form>
            </div>
        </div>


        {{-- товары --}}
        <h3 class="h3" id="tovars">Товары</h3>
        <button type="submit" class="btn btn-dark pd-3">Создать товар</button>
        <h5 id="coffee" class="pd-3">Кофейные напитки</h5>

        <div class="container-border1 container d-flex justify-content-around flex-wrap">
            {{-- латте на кокосовом --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee1.png" class="card-img-top" alt="coffee1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="Латте на кокосовом молоке">
                        </div>
                    </h5>
                    <p class="card-text">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="Приготовленный на основе кокосового молока, этот латте предлагает
                                уникальное сочетание гармонии кофе и нежности кокосового вкуса.">
                    </div>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Категория
                        <select class="form-select" aria-label="Пример выбора по умолчанию">
                            <option selected>Кофейные напитки</option>
                            <option value="1">Печенье и сладости</option>
                            <option value="2">Молотый и зерновой кофе</option>
                        </select>
                    </li>
                    <li class="list-group-item">Заказов: 364</li>
                    <li class="list-group-item">
                        <div class="mb-3"> Цена
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                value="130">
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </li>

                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Удалить</a>
                    <a href="#" class="card-link">Сохранить изменения</a>
                </div>
            </div>

            {{-- турецкий капучино с апельсином --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee2.png" class="card-img-top" alt="coffee1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="Турецкий капучино с апельсином">
                        </div>
                    </h5>
                    <p class="card-text">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="Турецкий капучино с апельсином - это необычное сочетание
                            восточной экзотики и богатства вкусов, создавая удовольствие для всех,
                            кто желает насладиться чем-то утонченным и оригинальным в мире кофейных напитков">
                    </div>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Категория
                        <select class="form-select" aria-label="Пример выбора по умолчанию">
                            <option selected>Кофейные напитки</option>
                            <option value="1">Печенье и сладости</option>
                            <option value="2">Молотый и зерновой кофе</option>
                        </select>
                    </li>
                    <li class="list-group-item">Заказов: 364</li>
                    <li class="list-group-item">
                        <div class="mb-3"> Цена
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="130">
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </li>

                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Удалить</a>
                    <a href="#" class="card-link">Сохранить изменения</a>
                </div>
            </div>

            {{-- холоный раф с корицей --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee3.png" class="card-img-top" alt="coffee1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="Холодный раф с корицей">
                        </div>
                    </h5>
                    <p class="card-text">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="Ледяной раф с корицей - это не только возможность ощутить
                            насыщенность кофейного вкуса, но и насладиться утонченным ароматом пряных специй.">
                    </div>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Категория
                        <select class="form-select" aria-label="Пример выбора по умолчанию">
                            <option selected>Кофейные напитки</option>
                            <option value="1">Печенье и сладости</option>
                            <option value="2">Молотый и зерновой кофе</option>
                        </select>
                    </li>
                    <li class="list-group-item">Заказов: 364</li>
                    <li class="list-group-item">
                        <div class="mb-3"> Цена
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="130">
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </li>

                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Удалить</a>
                    <a href="#" class="card-link">Сохранить изменения</a>
                </div>
            </div>

            {{-- латте с клубникой --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee4.png" class="card-img-top" alt="coffee1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="Латте с клубникой">
                        </div>
                    </h5>
                    <p class="card-text">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            value="Этот напиток переносит вас в мир изысканных вкусов,
                            где кисло-сладкая нота ягод великолепно сочетается с глубоким и насыщенным вкусом кофе.">
                    </div>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Категория
                        <select class="form-select" aria-label="Пример выбора по умолчанию">
                            <option selected>Кофейные напитки</option>
                            <option value="1">Печенье и сладости</option>
                            <option value="2">Молотый и зерновой кофе</option>
                        </select>
                    </li>
                    <li class="list-group-item">Заказов: 364</li>
                    <li class="list-group-item">
                        <div class="mb-3"> Цена
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="130">
                        </div>
                    </li>

                    <li class="list-group-item">
                        <div class="mb-3">
                            <input type="file" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </li>

                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Удалить</a>
                    <a href="#" class="card-link">Сохранить изменения</a>
                </div>
            </div>
        </div>





        {{-- панель баристы --}}
        <h3 class="h3" id="barista">Панель баристы</h3>
        <h5 id="coffee" class="pd-3">Активные заказы</h5>
        <div class="container d-flex justify-content-between">

            <div class="container1 d-flex">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">

                        <ul>
                            <li>
                                <p>
                                <h5 class="card-title">Заказ № 1</h5>
                                </p>
                            </li>
                            <li>
                                <p> Латте на кокосовом - 130 ₽</p>
                            </li>
                            <li>
                                <p> Классический тирамису - 100 ₽</p>
                            </li>
                            <li>
                                <p> Общая сумма: 230 ₽</p>
                            </li>
                            <li>
                                <p> Имя заказчика: Илюшенька</p>
                            </li>

                            <a href="#" class="card-link">Открыть рецепт</a>

                            {{-- модалка, предлагаю просто подряд все рецепты кофе выводить, похуй --}}

                    </div>
                </div>
            </div>

        </div>




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
        li {
            list-style-type: none;
        }

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


        .container1 {
            width: 60%;
            flex-wrap: wrap;

        }

        .container1 .card {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .h3 {
            padding: 30px;
        }

        .container2 {
            width: 40%;
        }

        .card {
            margin-bottom: 30px;
        }

        .pd-3 {
            padding: 30px;
        }
    </style>
@endsection
