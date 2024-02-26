@extends('layouts.app')

@section('content')
    {{-- панель баристы --}}
    <h3 class="h3" id="barista">Панель баристы</h3>
    <h5 id="coffee" class="pd-3">Активные заказы</h5>
    <div class="container d-flex justify-content-between">



        @if (count($applications) > 0)
            <div class="container1 d-flex">
                @foreach ($applications as $application)
                    <ul>
                        @foreach (json_decode($application['order'], true) as $item)
                            <div class="card" style="width: 20rem;">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            <p> {{ $item['title'] }} - {{ $item['cost'] }}₽ - {{ $item['count'] }}шт.</p>
                                        </li>

                                        <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#{{ $item['id'] }}">Открыть рецепт</button>
                                        {{-- модалка, предлагаю просто подряд все рецепты кофе выводить, похуй --}}
                                        <div class="modal fade" id="{{ $item['id'] }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            {{ $item['title'] }}</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $item['recept'] }}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Закрыть</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        @endforeach

                        <br>
                        <li>
                            <p>
                                Общая сумма заказа - {{ $application['cost'] }} ₽
                            </p>
                        </li>
                        <li>
                            <p>{{ $application['status'] }}</p>
                        </li>
                        <li>
                            <p>Время сдачи {{ $application['date_time'] }}</p>
                        </li>

                        <br>

                        @if ($application->status_id != 2)
                            <li>
                                <form action="{{ route('change-status', $application['id']) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-sm">Готов</button>
                                </form>
                            </li>
                        @endif

                    </ul>
            </div>
        @endforeach

    </div>

    </div>
    </div>
@else
    <div>Активных заказов нет</div>
    @endif
    </div>
    </div>
@endsection
