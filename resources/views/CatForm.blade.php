@extends('layouts.master')

@section('title')
    Add Category
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-5">

            @if ($category == null)
                <!-- add new -->
                <form action="/addCategory" method="post">
                    <div class="form-group">
                        <label>Category Name:</label>
                        <input type="text" name="Cat_name" class="form-control">
                    </div>
            
                    <div class="form-group">
                        <input type="submit" class="btn btn-success float-right" vlaue="submit">
                    </div>
    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            @else

                <!-- update -->
                <form action="/editCategory/{{ $category->id }}" method="post">
                    <div class="form-group">
                        <label>Category Name:</label>
                        <input type="text" name="Cat_name" value={{ $category->Cat_name }} class="form-control">
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