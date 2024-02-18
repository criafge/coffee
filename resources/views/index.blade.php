@extends('layouts.app')

@section('content')
    <div class="container cont-buttons">
        <div class="container d-flex justify-content-center">
            <a href="#coffee" class="btn  btn-sm">Кофейные напитки</a>
            <a href="#cookie" class="btn  btn-sm">Печенья и сладости</a>
            <a href="#pack" class="btn  btn-sm">Молотый и зерновой кофе</a>
        </div>
        @foreach ($data as $category => $item)
            <h1>
                {{ $category }}
            </h1>
            
        @endforeach


        <div class="container-border1 container d-flex justify-content-around flex-wrap">

            {{-- латте на кокосовом --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee1.png" class="card-img-top" alt="coffee1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Латте на кокосовом молоке</h5>
                    <p class="card-text">
                        Приготовленный на основе кокосового молока, этот латте предлагает
                        уникальное сочетание гармонии кофе и нежности кокосового вкуса.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: кофейные напитки</li>
                    <li class="list-group-item">Заказов: 364</li>
                    <li class="list-group-item">Цена: 130 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- турецкий капучино с апельсином --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee2.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Турецкий капучино с апельсином</h5>
                    <p class="card-text">
                        Турецкий капучино с апельсином - это необычное сочетание
                        восточной экзотики и богатства вкусов, создавая удовольствие для всех,
                        кто желает насладиться чем-то утонченным и оригинальным в мире кофейных напитков
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: кофейные напитки</li>
                    <li class="list-group-item">Заказов: 300</li>
                    <li class="list-group-item">Цена: 140 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- холоный раф с корицей --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee3.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Холодный раф с корицей</h5>
                    <p class="card-text">
                        Ледяной раф с корицей - это не только возможность ощутить
                        насыщенность кофейного вкуса, но и насладиться утонченным ароматом пряных специй.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: кофейные напитки</li>
                    <li class="list-group-item">Заказов: 289</li>
                    <li class="list-group-item">Цена: 120 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- латте с клубникой --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee4.png" class="card-img-top" alt="coffee1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Латте с клубникой</h5>
                    <p class="card-text">
                        Этот напиток переносит вас в мир изысканных вкусов,
                        где кисло-сладкая нота ягод великолепно сочетается с глубоким и насыщенным вкусом кофе.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: кофейные напитки</li>
                    <li class="list-group-item">Заказов: 254</li>
                    <li class="list-group-item">Цена: 170 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>


            {{-- капучино с лавандой --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee5.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Капучино с лавандой</h5>
                    <p class="card-text">
                        Этот напиток обещает не только пробудить вас свежим эспрессо,
                        но и погрузить в атмосферу благоухания лавандовых полей, создавая уникальный и расслабляющий
                        кофейный
                        опыт.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: кофейные напитки</li>
                    <li class="list-group-item">Заказов: 230</li>
                    <li class="list-group-item">Цена: 155 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- горячий шоколад --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/coffee6.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Горячий шоколад</h5>
                    <p class="card-text">
                        В каждой чашке горячего шоколада таится насыщенная
                        текстура и насыщенный вкус натертого шоколада,
                        тщательно смешанного с молоком и подслащенного нежным сахаром.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: кофейные напитки</li>
                    <li class="list-group-item">Заказов: 230</li>
                    <li class="list-group-item">Цена: 145 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

        </div>


        <h3 class="h3" id="cookie">Печенья и сладости</h3>
        <div class="container-border2 container d-flex justify-content-around flex-wrap">
            {{-- овсяное печенье --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/cookie1.png" class="card-img-top" alt="cookie1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Овсяное печенье с шоколадом</h5>
                    <p class="card-text">
                        Каждое печенье нежно обсыпано овсяными хлопьями, создавая легкость
                        и хрустящую текстуру. Шоколадные капли, растопленные в процессе выпечки,
                        добавляют этому угощению глубокий и насыщенный вкус.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Печенья и сладости</li>
                    <li class="list-group-item">Заказов: 200</li>
                    <li class="list-group-item">Цена: 130 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- Пряники с малиной и розовым шоколадом --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/cookie2.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Пряники с малиной и розовым шоколадом</h5>
                    <p class="card-text">
                        Изысканный вкус малины добавляет яркости и свежести, создавая
                        удивительное сочетание с тающим розовым шоколадом, который
                        обволакивает пряник своей нежной текстурой
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Печенья и сладости</li>
                    <li class="list-group-item">Заказов: 185</li>
                    <li class="list-group-item">Цена: 90 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- малиновый кекс с изюмом --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/cookie3.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Малиновый кекс с изюмом</h5>
                    <p class="card-text">
                        При каждом кусочке этого кекса вы ощутите взрыв вкусов
                        и насладитесь сочными текстурами фруктов.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Печенья и сладости</li>
                    <li class="list-group-item">Заказов: 156</li>
                    <li class="list-group-item">Цена: 80 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- Мороженое с печеньем и зефиром --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/cookie4.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Мороженое с печеньем и зефиром</h5>
                    <p class="card-text">
                        Мороженое, богатое ванильными нотками,
                        становится основой для этого угощения. В порции
                        вас ждет хрустящее печенье,
                        текстурные акценты, нотки карамели и нежный зефир, который
                        придает мороженому легкость и мягкость.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Печенья и сладости</li>
                    <li class="list-group-item">Заказов: 148</li>
                    <li class="list-group-item">Цена: 200 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>


            {{-- Классический тирамису --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/cookie5.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Классический тирамису</h5>
                    <p class="card-text">
                        Классический тирамису - это итальянский десерт,
                        который завоевал сердца гурманов своей неповторимой
                        комбинацией нежного маскарпоне, ароматного кофе и
                        прослойками мягких савоярди. Этот изысканный десерт
                        покоряет своей нежностью и богатством вкуса.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Печенья и сладости</li>
                    <li class="list-group-item">Заказов: 130</li>
                    <li class="list-group-item">Цена: 100 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- пончики с кофе и миндалем --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/cookie6.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Пончики с кофе и миндалем</h5>
                    <p class="card-text">
                        Пончики с кофе и миндалем - это божественное сочетание
                        воздушных пончиков, насыщенных ароматом кофе и обсыпанных
                        хрустящими миндальными лепестками. Этот десерт обещает невероятное
                        удовольствие, сочетая в себе теплоту кофейного наслаждения
                        с легкостью миндальной текстуры.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Печенья и сладости</li>
                    <li class="list-group-item">Заказов: 100</li>
                    <li class="list-group-item">Цена: 145 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

        </div>


        <h3 class="h3" id="pack">Кофе молотый и в зернах</h3>
        <div class="container-border3 container d-flex justify-content-around flex-wrap">
            {{-- Молотиый кофе с лавандой --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/pack1.png" class="card-img-top" alt="cookie1">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Молотый кофе с лавандой</h5>
                    <p class="card-text">
                        Молотый кофе, тщательно смешанный с высококачественной лавандой,
                        создает удивительное сочетание текстур и вкусов. При заваривании
                        этого кофе вы почувствуете насыщенность и глубину кофеиного вкуса,
                        а аромат лаванды будет раскрываться нежно, придают напитку утонченность.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Молотый и зерновой кофе</li>
                    <li class="list-group-item">Заказов: 200</li>
                    <li class="list-group-item">Цена: 450 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- зерновой кофе с мятой --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/pack2.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Зерновой кофе с мятой</h5>
                    <p class="card-text">
                        В этот букет кофейных нот вплетается мята,
                        придающая напитку легкость и освежающий характер.
                        Это сочетание создает гармоничный баланс, где силу
                        кофе дополняет приятная прохлада мятного оттенка.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Молотый и зерновой кофе</li>
                    <li class="list-group-item">Заказов: 185</li>
                    <li class="list-group-item">Цена: 400 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- американский зерновой кофе с корицей --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/pack3.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Американский зерновой кофе с корицей</h5>
                    <p class="card-text">
                        Американский кофе, характеризующийся более слабой концентрацией
                        и более объемным объемом, предоставляет отличную основу для влияния
                        корицы. Ароматическая корица добавляет кофе глубину и теплоту, придавая
                        ему уникальный вкусовой профиль.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Молотый и зерновой кофе</li>
                    <li class="list-group-item">Заказов: 140</li>
                    <li class="list-group-item">Цена: 460 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- Турецкий кофе с ананасом --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/pack4.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Турецкий кофе с ананасом </h5>
                    <p class="card-text">
                        Турецкий кофе с ананасом может стать приятным открытием для любителей
                        оригинальных вкусов и тех, кто ценит нестандартные сочетания в кофейном искусстве.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Молотый и зерновой кофе</li>
                    <li class="list-group-item">Заказов: 130</li>
                    <li class="list-group-item">Цена: 390 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>


            {{-- Крепкий молотый с апельсиновой цедрой --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/pack5.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Крепкий молотый с апельсиновой цедрой</h5>
                    <p class="card-text">
                        Апельсиновая цедра добавляет ему освежающую кислинку и аромат,
                        придающие кофе невероятную комплексность. Это сочетание создает
                        уникальный профиль вкуса, где кофе и цитрусы взаимодополняют друг друга.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Молотый и зерновой кофе</li>
                    <li class="list-group-item">Заказов: 106</li>
                    <li class="list-group-item">Цена: 450 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
                </div>
            </div>

            {{-- Зерновой кофе с ванилью --}}
            <div class="card" style="width: 18rem;">
                <div class="container_img">
                    <img src="img/pack6.png" class="card-img-top" alt="coffee2">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Зерновой кофе с ванилью</h5>
                    <p class="card-text">
                        Ароматные зерна кофе, тщательно отобранные и обжаренные,
                        обеспечивают напиток насыщенным и глубоким вкусом.
                        Ваниль, добавленная к кофе, придает ему нежную сладость
                        и аромат, создавая гармоничное сочетание.
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Категория: Молотый и зерновой кофе</li>
                    <li class="list-group-item">Заказов: 95</li>
                    <li class="list-group-item">Цена: 470 ₽</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">В корзину</a>
                    <a href="#" class="card-link">Перейти в каталог</a>
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
@endsection
