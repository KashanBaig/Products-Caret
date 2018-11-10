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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr style="cursor: pointer;">
                    <td>{{ $product->Prod_name }}</td>
                    <td>{{ $product->Prod_price }}</td>

                    @foreach($categories as $category)
                        @if($product->Cat_id == $category->id)
                            <td>{{ $category->Cat_name }}</td>
                        @endif
                    @endforeach  

                    <td>
                        <a href="/ProdForm/{{ $product->id }}">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="/deleteProduct/{{ $product->id }}">
                            <i class="fa fa-minus-circle ml-3"></i>
                        </a>
                    </td>
                </tr>              
            @endforeach
        </tbody>
    </table>
    
@endsection