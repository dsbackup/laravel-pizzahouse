@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1>

    @foreach($pizzas as $pizza)
    <a href="{{ route('pizzas.show', $pizza->id ) }}">
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="pizza icon">
            <h4>
                {{ $pizza->name }}
            </h4>
        </div>
    </a>
    @endforeach

</div>
    
@endsection