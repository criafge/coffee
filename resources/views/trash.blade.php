@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-between">
        <div class="container1">
            <h3 class="h3">Ваш заказ</h3>
            <p>
                <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                    Показать корзину
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                    <div class="card card-body" style="width: 400px;">
                        <ul>
                            <li>
                                <div class="container d-flex justify-content-between">
                                    <div>
                                        <p> Латте на кокосовом - 130 ₽</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-success btn-sm">+</button>
                                        <button type="button" class="btn btn-success btn-sm">-</button>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="container d-flex justify-content-between">
                                    <div>
                                        <p> Классический тирамису - 100 ₽</p>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-success btn-sm">+</button>
                                        <button type="button" class="btn btn-success btn-sm">-</button>
                                    </div>

                                </div>
                            </li>
                            <br>
                            <li>
                            <p>  Общая сумма заказа - 230 ₽</p>
                            </li>

                            <li>
                            <p>
                                Внимание! Оплата производится
                                наличными или по карте в кофейне по адресу Степана Кувыкина 130
                            </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <h3 class="h3">Активные заказы</h3>
            <p>
                <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseWidth" aria-expanded="false" aria-controls="collapseWidth">
                    Показать активные заказы
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="collapseWidth">
                    <div class="card card-body" style="width: 400px;">
                        <ul>
                            <li>
                                <p>Номер вашего заказа - 1</p>
                            </li>
                            <li>
                                <p> Латте на кокосовом - 130 ₽</p>
                            </li>
                            <li>
                                <p> Классический тирамису - 100 ₽</p>
                            </li>
                            <br>
                            <li>
                               <p> Общая сумма заказа - 230 ₽</p>
                            </li>

                            <li>
                                <p> Внимание! Оплата производится
                                наличными или по карте в кофейне по адресу Степана Кувыкина 130
                            </p>
                            </li>
                            <li>
                                <button type="submit" class="btn btn-outline-dark">Отменить заказ</button>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container2">
            <h3 class="h3">Уточним детали</h3>
            <form>
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Укажите, к какому времени приготовить заказ</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Комментарий к заказу</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                
                <button type="submit" class="btn btn-outline-dark">Заказать</button>
            </form>
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

        .container2 {
            width: 50%;
        }

        li {
            list-style-type: none;
        }
    </style>
@endsection
