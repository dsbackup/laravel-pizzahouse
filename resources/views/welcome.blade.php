@extends('layouts.layout')

@section('content')
<div class="relative flex content">
    <div class='title'>
        The North's Best Pizzas
    </div>
    <img src='/img/pizza-house.png' alt="Pizzahouse logo" class="logo">
    <a href="{{ route('pizzas.create') }}">Order a pizza</a>
    <br />
    <div class="message">{{ session('message') }}</div>
</div>
@endsection
