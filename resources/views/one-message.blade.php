@extends('layouts.app')

@section('title'){{ $data->name }}@endsection

@section('content')
    <h1>{{ $data->name }}</h1>
    <h4>{{ $data->subject }}:</h4>
    <div class="alert alert-info">
        <p>{{ $data->message }}</p>
    </div>
    <p>Email: {{ $data->email }}</p>
    <p><small>Создано: {{ $data->created_at }}</small></p>
    <a href="{{ route('contact-update-data', $data->id) }}"><button class="btn btn-info">Редактировать</button></a>
    <a href="{{ route('contact-message') }}"><button class="btn btn-info">Назад</button></a>
    <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
    @endsection
