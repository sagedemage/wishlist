@extends('layouts.master')

@section('title', 'Edit Product')

@section('content')
    <h1>Edit Product</h1>

    <form id="edit-product">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="go-back btn btn-secondary">Back</button>
    </form>

    <script src="js/edit_product.js"></script>
@stop
