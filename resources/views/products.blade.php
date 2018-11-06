@extends('layouts.master')


@section('title')
Products
@endsection


@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Test</td>
                <td>1000</td>
                <td>Pajamas</td>
            </tr>
            <tr>
                <td>Test</td>
                <td>1000</td>
                <td>Pajamas</td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
    
@endsection