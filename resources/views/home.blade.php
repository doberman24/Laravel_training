@extends('layouts.app')

@section('title')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita repudiandae, dolore aperiam corrupti veniam earum, harum, aliquam exercitationem quo quia ad eius ipsam. Nihil, maiores ratione possimus officiis quos beatae.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection