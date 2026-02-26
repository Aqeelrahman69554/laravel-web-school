@extends('visitor.layouts.main')

@section('content')
    {{-- INCLUDE HEADER --}}
    @include('visitor.components.header')

    {{-- INCLUDE ABOUT --}}
    @include('visitor.pages.about')
    {{-- INCLUDE CLASS1 --}}
    @include('visitor.pages.class1')
    {{-- INCLUDE class2 --}}
    @include('visitor.pages.class2')
    {{-- INCLUDE TEACHER --}}
    @include('visitor.pages.teacher')
    {{-- INCLUDE TEACHER2 --}}
    @include('visitor.pages.teacher2')
    {{-- INCLUDE BLOGGRID --}}
    @include('visitor.pages.blog_grid')
    {{-- INCLUDE GALLERY --}}
    @include('visitor.pages.gallery')
    {{-- INCLUDE CONTACT --}}
    @include('visitor.pages.contact')
@endsection
