@extends('layouts.master')

@section('title')
    Add Product   
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-5">

            @if ($product == null)
                <!-- add new -->
                <form action="/addProduct" method="post">
                    <div class="form-group">
                        <label>Product Name:</label>
                        <input type="text" name="Prod_name" class="form-control">
                    </div>
                    <div class="form-group">
                            <label>Product Price:</label>
                            <input type="text" name="Prod_price" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label>Select Category:</label>
                        <select name="category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->Cat_name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="form-group">
                        <input type="submit" class="btn btn-success float-right" vlaue="submit">
                    </div>
    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            @else

                <!-- update -->
                <form action="/editProduct/{{ $product->id }}" method="post">
                    <div class="form-group">
                        <label>Product Name:</label>
                        <input type="text" name="Prod_name" value={{ $product->Prod_name }} class="form-control">
                    </div>
                    <div class="form-group">
                            <label>Product Price:</label>
                            <input type="text" name="Prod_price" value={{ $product->Prod_price }} class="form-control">
                    </div>
            
                    <div class="form-group">
                        <label>Select Category:</label>
                        <select name="category" class="form-control">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->Cat_name }}</option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="form-group">
                        <input type="submit" class="btn btn-success float-right" vlaue="submit">
                    </div>

                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
                
            @endif


            
        </div>
    </div>

    


@endsection