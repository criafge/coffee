@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-between">

        @if ($exist === true)
            <div class="container1">
                <h3 class="h3">Ваш заказ</h3>
                <p>
                    <button class="btn btn-outline-dark" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                        Показать корзину
                    </button>
                <form action="{{ route('baskets.destroy', 1) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" style="height: 30px">Очистить корзину</button>
                </form>

                </p>
                <div style="min-height: 120px;">
                    <div class="collapse collapse-horizontal" id="collapseWidthExample">
                        <div class="card card-body" style="width: 400px;">
                            <ul>
                                @foreach ($coffees as $item)
                                    <li>
                                        <div class="container coffee">
                                            <div>
                                                <p>{{ $item['coffee']->title }}</p>
                                                <p class="cost">{{ $item['coffee']->cost }}</p>
                                            </div>
                                            <div class="d-flex justify-content-left gap-3">
                                                <button type="button" class="btn btn-success btn-sm decrement"
                                                    style="height: 30px" data-id="{{ $item['coffee']->id }}">-</button>
                                                <p class="count">{{ $item['count'] }}</p>
                                                <button type="button" class="btn btn-success btn-sm increment"
                                                    style="height: 30px" data-id="{{ $item['coffee']->id }}">+</button>
                                                <a type="button" style="height: 30px"><img src="../img/fi-rr-trash.png"
                                                        alt="Logo" width="24" height="24"
                                                        class="d-inline-block align-text-top"></a>
                                            </div>

                                        </div>
                                    </li>
                                @endforeach
                                <br>
                                <li>
                                    <p class="total"></p>
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
            </div>

            <div class="container2">
                <h3 class="h3">Уточним детали</h3>
                <form action="{{ route('applications.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="cost" value="" id="inputCost">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Укажите, к какому времени приготовить
                            заказ - ваш заказ будет приготовлен не раньше, чем через 30 минут</label>
                        <input type="time" class="form-control" name="date_time" id="time_input">
                        @error('date_time')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Комментарий к заказу</label>
                        <textarea class="form-control" rows="3" name="comment"></textarea>
                        @error('comment')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-dark">Заказать</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        @else
            <div>
                Корзина пуста...
            </div>
        @endif

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
                <a href="{{ route('home') }}">Личный кабинет</a>
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

        .coffee {
            border-bottom: 1px solid #6ba569;
            margin-bottom: 30px;
        }
    </style>

    <script>
        $(document).ready(function() {

            // подсчет итоговой суммы заказа
            let totalCost = 0;
            const totalElement = $('.total');

            $('.coffee').each(function() {
                const count = parseInt($(this).find('.count').text());
                const cost = parseFloat($(this).find('.cost').text());
                totalCost += count * cost;
            });

            totalElement.text(`Общая сумма заказа - ${totalCost} ₽`);
            $('#inputCost').val(totalCost);


            // ограничение по времени на заказ

            $('#time_input').on('change', function() {
                var enteredTime = new Date($(this).val());
                var thirtyMinutesLater = new Date();
                thirtyMinutesLater.setMinutes(thirtyMinutesLater.getMinutes() + 30);

                if (enteredTime < thirtyMinutesLater) {
                    $(this).get(0).setCustomValidity(
                        'Минимальное допустимое время — 30 минут позднее текущего.');
                } else {
                    $(this).get(0).setCustomValidity('');
                }
            });



            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Устанавливаем заголовок X-CSRF-TOKEN для каждого AJAX-запроса
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });
            $(document).on('click', '.increment', function() {
                const id = $(this).data('id');
                const currentCount = parseInt($(this).siblings('p').text());

                $.ajax({
                    url: '/update/basket',
                    method: 'post',
                    data: {
                        coffee_id: id,
                        count: currentCount + 1
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status === 'success') {
                            $(`#${id}`).text(currentCount + 1);
                        } else {
                            console.log(response.message);
                        }
                    }
                });
            });

            $(document).on('click', '.decrement', function() {
                const id = $(this).data('id');
                const currentCount = parseInt($(this).siblings('p').text());

                if (currentCount > 0) {
                    $.ajax({
                        url: '/update/basket',
                        method: 'POST',
                        data: {
                            coffee_id: id,
                            count: currentCount - 1
                        },
                        dataType: "json",
                        success: function(response) {
                            if (response.status === 'success') {
                                $(`#${id}`).text(currentCount - 1);
                            } else {
                                console.log(response.message);
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection
