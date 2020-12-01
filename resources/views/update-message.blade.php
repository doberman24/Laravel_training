@extends('layouts.app')

@section('title')Внесение изменений@endsection

@section('content')
    <h1>Внесение изменений:</h1>



    <form action="{{ route('contact-update-submit', $data->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Введите ваше имя: </label>
            <input type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email">Введите ваш email: </label>
            <input type="text" name="email" value="{{ $data->email }}" placeholder="Введите email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения: </label>
            <input type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-group">
            <label for="message">Сообщение: </label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите текст">{{ $data->message }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Обновить</button>
    </form>
    <br>
    <a href="{{ route('contact-data-one', $data->id) }}"><button class="btn btn-info">Назад</button></a>
@endsection
