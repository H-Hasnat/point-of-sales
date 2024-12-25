@extends('layout.layout')


@section('content')

@include('category.category-list')
@include('category.category-create')
@include('category.category-details')
@include('category.category-delete')
@include('category.category-edit')

@endsection
