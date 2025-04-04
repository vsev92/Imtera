<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">
    <!-- CSRF Token -->

    <title>Сервис email рассылок</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>

<body>
    <div id="app">
        <header class="fixed w-full">
            <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900 shadow-md">
                <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                    <a href="{{route('home')}}" class="flex items-center">
                        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Сервис email рассылок</span>
                    </a>

                    <div class="flex items-center lg:order-2">
                        @auth
                        <a
                            data-method="post"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            rel="nofollow"
                            href="{{route('logout')}}">
                            Выход
                        </a>
                        @endauth
                        @guest
                        <a href="{{route('login')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Вход
                        </a>
                        <a href="{{route('register')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                            Регистрация
                        </a>
                        @endguest
                    </div>

                    <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1">
                        <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                            <li>
                                <a href="{{route('recipients.index')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                    Получатели</a>
                            </li>
                            <li>
                                <a href="{{route('recipients.store')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                    отправить </a>
                            </li>
                            <li>
                                <a href="{{route('excel.showForm')}}" class="block py-2 pl-3 pr-4 text-gray-700 hover:text-blue-700 lg:p-0">
                                    Добавить получателей</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>



            <form action="{{ route('recipients.store') }}" method="POST">
                @csrf


                <label for="message">Ваше сообщение:</label>
                <textarea name="message" id="message" required>{{ old('message') }}</textarea>


                <button type="submit">Отправить</button>
            </form>



        </header>
        <!-- Форма с методом POST -->

        @yield('content')
    </div>
</body>

</html>