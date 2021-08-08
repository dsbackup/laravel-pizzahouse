@extends('layouts.app')

@section('content')
    <div class='wrapper pizza-details'>
        Order Details
        <br />
        <h1>Order for {{ $pizza->name }}</h1>
        <p>{{ $pizza->type }}</p>
        <p>{{ $pizza->base }}</p>
        <p>Extra toppings: </p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
            @endforeach
        </ul>
        <form action="{{ route('pizzas.destroy', $pizza->id ) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
        <a href="{{ route('pizzas.index') }}" class="back"><- Back to all Pizzas</a>
    </div>
@endsection