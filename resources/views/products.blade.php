@extends('layouts.master')


@section('title')
Products
@endsection


@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->Prod_name }}</td>
                    <td>{{ $product->Prod_price }}</td>
                    <td>{{ $product->Cat_id }}</td>
                </tr>              
            @endforeach
        </tbody>
    </table>
    
@endsection