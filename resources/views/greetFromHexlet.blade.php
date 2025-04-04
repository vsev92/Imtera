@extends('layouts.home')
@section('content')
@can('store', App\Models\Task::class)
<div class="ml-auto">
    <a href="{{route('tasks.create')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">
        Создать задачу </a>
</div>
@endcan
@endsection