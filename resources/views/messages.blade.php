@extends('layouts.app')

@section('title')Сообщения@endsection

@section('content')
    <h1>Сообщения</h1>
    @foreach ($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->email }}</p>
            <p><small>{{ $item->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $item->id) }}"><button class="btn btn-info">Подробно</button></a>
        </div>
    @endforeach
{{--    <div class="alert alert-info">
        <h3>{{ $data->name }}</h3>
        <p>{{ $data->email }}</p>
        <p><small>{{ $data->created_at }}</small></p>
        <a href="#"><button class="btn btn-info">Подробно</button></a>
    </div>
--}}@endsection
