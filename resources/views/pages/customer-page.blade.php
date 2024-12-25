@extends('layout.layout')


@section('content')

@include('customer.cus-list')
@include('customer.cus-create')
@include('customer.cus-edit')
@include('customer.cus-delete')
@include('customer.cus-view')

@endsection
