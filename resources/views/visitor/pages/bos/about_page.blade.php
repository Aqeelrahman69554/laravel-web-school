@extends('visitor.layouts.main') {{-- Si Bos narik bingkai --}}

@section('content')
    {{-- Si Bos cuma manggil satu anak saja --}}
    @include('visitor.pages.about') 
    {{-- @include('visitor.pages.about3') --}}
@endsection