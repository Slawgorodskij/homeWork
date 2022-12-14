@extends('layouts.app')

@section('content')

    <main class="main">

        <div class="performance">
            <h1 class="performance__title">{{$title}}</h1>
        </div>

        <div class="container">
            <h2>Вывод ключ: значение</h2>
            @foreach($cacheValues as $key=>$value)
                <div>
                    <span> {{$key}}:</span> <span>{{$value}}</span>
                </div>
            @endforeach
        </div>
        <div class="container">
            <h2>Отображение содержимого JSON</h2>
            <p>{{$cacheValuesJSON}}</p>
        </div>
    </main>
    <p>
        Есть "колун" и  "топор" каждый используется для заготовки доров, но есть нюанс.
        Топор - рубит, колун - колет (разные технологии).
        Так и здесь, они(фреймворки, языки программирования) для своего. И в зависимости от проекта надо выбирать необходимый, исходя из того что планируется сделать.
        Что-то сложное, которое будет дальше расширяться, значит simfony, проще есть laravel или Yii.
        А когда открываешь проект, а он написан на Yii с элементами Symfony (часть Symfony в ядре есть у обоих, я о том, что разработчик напишет), то хочется найти этого "писарчука" и оторвать руки.
        Это как на уроках в по физике говорил преподаватель "Ненадо забивать гвозди калькулятором".
        В ларавеле тоже многое пишет помощник - artisan.
        Так к примеру команда
        php artisan make:model Имя -mfcs
        создаст в migrations файл для создания таблицы (с базовым наполнением останется только дополнить нужными строками);
        классы: Seeder, Factory, Model, Controller (также с базовым наполнением).
    </p>
@endsection
