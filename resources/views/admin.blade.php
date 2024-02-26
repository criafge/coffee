@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container d-flex justify-content-center">
            <a href="#category" class="btn  btn-sm">Категории</a>
            <a href="#tovars" class="btn  btn-sm">Товары</a>
        </div>

        {{-- категории --}}
        <h3 class="h3" id="category">Категории</h3>
        <div class="container d-flex justify-content-between">

            <div class="container1 d-flex">
                @foreach ($categories as $item)
                    <div class="card" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <form action="{{ route('categories.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-success">
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container2">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title_category" class="form-label">Название категории</label>
                        <input type="text" class="form-control focus-ring focus-ring-success" name="title_category">

                    </div>
                    @error('title_category')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-dark">Создать катeгорию</button>
                </form>
            </div>
        </div>


        {{-- товары --}}
        <h3 class="h3" id="tovars">Товары</h3>

        <button type="button" class="btn btn-dark m-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Создать товар
        </button>

        {{-- <h5 id="coffee" class="pd-3">Кофейные напитки</h5> --}}

        <form action="{{ route('admin') }}" method="get" class="w-25 pd-3 d-flex gap-3">
            @csrf
            <select class="form-select" name="category">
                <option value="">Все</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <input type="submit" class="btn btn-success" value="Поиск">
        </form>
        <div class="container-border1 container d-flex justify-content-around flex-wrap">
            @foreach ($coffees as $item)
                <div class="card" style="width: 18rem;">
                    <div class="container_img">
                        <img src="{{ Storage::url($item->photo) }}" class="card-img-top" alt="{{ $item->photo }}">
                    </div>
                    <div class="card-body">
                        <form action="{{ route('coffees.update', $item->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <h5 class="card-title">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="title" value="{{ $item->title }}">
                                </div>
                                @error('title')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}</div>
                                @enderror
                            </h5>
                            <p class="card-text">
                            <div class="mb-3">
                                <textarea type="text" class="form-control" name="description">{{ $item->description }}</textarea>
                                @error('descriptions')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            </p>
                            <p class="card-text">
                            <div class="mb-3">
                                <textarea type="text" class="form-control" name="recept">{{ $item->recept }}</textarea>
                                @error('recept')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}</div>
                                @enderror
                            </div>
                            </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> Категория
                            <select class="form-select" name="category_id">
                                @foreach ($categories as $category)
                                    @if ($category->id == $item->category_id)
                                        <option selected value="{{ $category->id }}">{{ $category->title }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </li>
                        <li class="list-group-item">
                            <div class="mb-3"> Цена
                                <input type="text" class="form-control" name="cost" value="{{ $item->cost }}">
                            </div>
                            @error('cost')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </li>

                        <li class="list-group-item">
                            <div class="mb-3">
                                <input type="file" class="form-control" name="photo">
                            </div>
                            @error('photo')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </li>

                    </ul>
                    <input class="btn" type="submit" value="Сохранить">
                    </form>

                    <div class="card-body d-flex justify-content-center">
                        <form action="{{ route('coffees.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
        {{ $coffees->withQueryString()->links('pagination::bootstrap-5') }}

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

        input:hover {}
    </style>



    <!-- Modal создание товара -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('coffees.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Создание товара</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title_create" class="form-label ">Название товара</label>
                            <input type="text" class="form-control focus-ring focus-ring-success" name="title_create">
                            @error('title_create')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_create" class="form-label">Описание товара</label>
                            <textarea class="form-control focus-ring focus-ring-success" name="description_create"></textarea>
                            @error('description_create')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="recept_create" class="form-label">Рецепт товара</label>
                            <textarea class="form-control focus-ring focus-ring-success" name="recept_create"></textarea>
                            @error('recept_create')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="photo_create" class="form-label">Добавить фото</label>
                            <input type="file" class="form-control focus-ring focus-ring-success" name="photo_create"
                                id="photo">
                            @error('photo_create')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="cost_create" class="form-label">Цена товара</label>
                            <input type="text" class="form-control focus-ring focus-ring-success" name="cost_create">
                            @error('cost_create')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category_id_create" class="form-label">Категория товара</label>
                            <select name="category_id_create" class="form-select focus-ring focus-ring-success">
                                <option value="" selected>Выберите категорию</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
                            @error('category_id_create')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-success">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
