@extends('layouts.app')

@section('content')
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
@endsection
