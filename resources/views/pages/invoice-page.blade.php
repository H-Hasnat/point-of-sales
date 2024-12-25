@extends('layout.layout')


@section('content')

@include('invoice.invoice-list')
@include('invoice.invoice-create')
@include('invoice.invoice-edit')
@include('invoice.invoice-delete')
@include('invoice.invoice-details')


@endsection
