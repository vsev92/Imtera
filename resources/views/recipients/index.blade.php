@extends('layouts.home')
@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="csrf-param" content="_token">

<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        @include('flash::message')
        <div class="grid col-span-full">
            <h1 class="mb-5">Список получателей</h1>

            @can('store', App\Models\Task::class)
            <div class="ml-auto">
                <a href="{{route('recipients.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
                    Добавить получателя</a>
            </div>
            @endcan


            <table class="mt-4">
                <thead class="border-b-2 border-solid border-black text-left">
                    <th>Имя</th>
                    <th>Телефон</th>
                    <th>email</th>
                    <th>День рождения</th>
                </thead>

                @foreach($recipients as $recipient)
                <tr class="border-b border-dashed text-left">
                    <td>{{$recipient->fullName}}</td>
                    <td>{{$recipient->phone}}</td>
                    <td>{{$recipient->email}}</td>
                    <td>{{$recipient->birthday}}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="mt-4">
            {{ $recipients->links() }}
        </div>
    </div>
</section>
@endsection