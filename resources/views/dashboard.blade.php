@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <h1>Wishlist</h1>

    <button id="add-product-link" type="button" class="btn btn-primary">Add</button>
    <br></br>

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scole="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>${{ $product->price }}</td>
                    <td>
                        <button type="button" class="edit-product-link edit-product btn btn-secondary" value="{{ $product->id }}">Edit</button>
                        <button type="button" class="delete-product btn btn-danger" value="{{ $product->id }}">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="js/dashboard.js"></script>
@stop
