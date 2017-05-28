@extends('layouts.app')

@section('main')

    {{-- Fixed header with navbar --}}
    @include('partials.header')

    {{-- It's all about me ^.^ --}}
    @include('partials.introduction')

    {{-- Project cards --}}
    @include('partials.projects')

@endsection