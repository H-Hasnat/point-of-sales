@extends('layout.layout')


@section('content')
@include('product.product-list')
@include('product.product-details')
@include('product.product-edit')
@include('product.product-create')
@include('product.product-delete')
@endsection
