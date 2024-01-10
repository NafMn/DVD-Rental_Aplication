@extends('frondend.layout.app')


@section('title', 'CineMas')

@section('content')
<section class="search">
@include('frondend.include.search-home')
</section>
<section class="rekomen">
@include('frondend.include.rekomen')
</section>
    

@endsection