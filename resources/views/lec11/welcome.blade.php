@extends('layout.masterlayout')

@section('content')
@includeIf('lec11.navbar',['route'=>'l11'])
    <h1>Home Page</h1>
@endsection


@push('scripts')
    <script src="example.js"></script>
@endpush
