@extends('layouts.app')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a new Pizza</h1>
        <br />
        <form action="{{ route('pizzas.index') }}" method="POST">
            @csrf
            <label for="name">Your name</label>
            <input type="text" id="name" name="name">
            <br />
            <br />
            <label for="type">Choose Pizza Type</label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <br />
            <br />
            <label for="base">Choose Base Type</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin and crispy">Thin and crispy</option>
                <option value="thick">Thick</option>
            </select>
            <br /><br />
            <fieldset>
                <label>Extra toppings</label>
                <br />
                <input type='checkbox' name='toppings[]' value="mushrooms">Mushrooms<br />
                <input type='checkbox' name='toppings[]' value="peppers">Peppers<br />
                <input type='checkbox' name='toppings[]' value="garlic">Garlic<br />
                <input type='checkbox' name='toppings[]' value="olives">Olives<br />
            </fieldset>
            <br />
            <input type="submit" value="Order Pizza" />
        </form>
    </div>
@endsection