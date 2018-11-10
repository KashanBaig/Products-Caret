@extends('layouts.master')

@section('title')
    Category
@endsection

@section('content')
<table class="table table-hover">
        <thead>
            <tr>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr style="cursor: pointer;">
                    <td>{{ $category->Cat_name }}</td>

                    <td>
                        <a href="/CatForm/{{ $category->id }}">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="/deleteCategory/{{ $category->id }}">
                            <i class="fa fa-minus-circle ml-3"></i>
                        </a>
                    </td>
                </tr>              
            @endforeach
        </tbody>
    </table>
@endsection