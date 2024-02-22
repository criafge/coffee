@extends('layouts.app')

@section('content')
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ Storage::url($coffee->photo) }}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $coffee->title }}</h5>
                    <p class="card-text">{{ $coffee->description }}</p>
                    <p class="card-text">{{ $coffee->cost }}</p>
                    <p class="card-text">{{ $coffee->category_id }}</p>
                    @if ($response === false)
                        <a href="" class="btn btn-success get-form-count">Добавить в корзину</a>
                    @else
                        <div>Товар уже добавлен в корзину</div>
                    @endif
                    <form id="count-form" action="{{ route('baskets.store') }}" method="post" style="display: none">
                        @csrf
                        <input type="number" name="count" min="1">
                    </form>
                    <div class="alert alert-success" id="message" role="alert" style="display: none"></div>
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
    <script>
        $(document).ready(function() {


            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Устанавливаем заголовок X-CSRF-TOKEN для каждого AJAX-запроса
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            });


            $('.get-form-count').click(function(e) {
                e.preventDefault();
                $('#count-form').show();
                $(this).hide();
            });

            $('#count-form input').keypress(function(e) {
                if (e.which == 13) {
                    e.preventDefault();

                    const form = $('#count-form');
                    const count = form.find('[name=count]');
                    const coffee_id = <?php echo json_encode($coffee->id); ?>;

                    $.ajax({
                        url: '/baskets',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            count: parseInt(count.val()),
                            coffee_id: coffee_id
                        },
                        success: function(response) {
                            console.log('Success! Response: ', response);
                            $('#message').show();
                            $('#message').text(response.message);
                            $('#count-form').hide();

                        },
                        error: function(error) {
                            console.error('Error: ', error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
