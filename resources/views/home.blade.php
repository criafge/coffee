@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-between">
        <div class="container1">
            <h3 class="h3">Активные заказы</h3>
            <p>
                <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidth"
                    aria-expanded="false" aria-controls="collapseWidth">
                    Показать активные заказы
                </button>
            </p>
            <div style="min-height: 120px;">
                <div class="collapse collapse-horizontal" id="collapseWidth">
                    <div class="card card-body" style="width: 400px;">
                        <ul>
                            <li>
                                <p>
                                    Номер вашего заказа: 1
                                </p>
                            </li>
                            <li>
                                <p> Латте на кокосовом - 130 ₽</p>
                            </li>
                            <li>
                                <p> Классический тирамису - 100 ₽</p>
                            </li>
                            <br>
                            <li>
                                <p>
                                    Общая сумма заказа - 230 ₽
                                </p>
                            </li>
                            <li>
                                <p>Заказ будет готов 31.01.2024 15:00</p>
                            </li>
                            <li>
                                <p>
                                    Внимание! Оплата производится
                                    наличными или по карте в кофейне по адресу Степана Кувыкина 130
                                </p>
                            </li>
                            <br>
                            <li>
                                <button type="button" class="btn btn-success btn-sm">Отменить заказ</button>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>


        </div>

        <div class="container2">
            <h3 class="h3">Редактирование профиля</h3>
            <form action="{{ route('update-data') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Имя</label>
                    <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                    <div id="emailHelp" class="form-text">Это имя напишут на пакете, в котором выдадут заказ</div>
                    @error('name')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="login" class="form-label">Логин</label>
                    <input type="text" class="form-control" name="login" value="{{ auth()->user()->login }}">
                    @error('login')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Номер телефона</label>
                    <input type="text" class="form-control phone" name="phone" value="{{ auth()->user()->phone }}">
                    @error('phone')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                </div>

                <button class="btn btn-outline-dark">Сменить пароль</button>
                {{-- модалка --}}

                <button type="submit" class="btn btn-outline-dark">Сохранить изменения</button>
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

    <script>
        $(".phone").mask("+7(999)999-99-99");
    </script>

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


        li {
            list-style-type: none;
        }

        .container2 {
            width: 50%;
        }
    </style>
@endsection
