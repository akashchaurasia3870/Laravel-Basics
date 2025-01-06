@extends('layout.masterlayout')
@section('content')
<section id="about">
    <h2>About Section</h2>
    <p>This is the home section of the website.</p>
</section>
@endsection


@section('title')
    About
@endsection


@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@endsection