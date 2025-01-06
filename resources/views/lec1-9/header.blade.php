{{-- <h1>Header Page</h1> --}}

{{-- @foreach ($fruits as $fruit)
    <b>{{$fruit}}</b><br>
@endforeach --}}

{{-- @foreach ($fruits as $key =>$value)
    <h2>{{$key}} - {{$value}}</h2>
@endforeach --}}

{{-- @forelse ($fruits as $key =>$value)
    <h2>{{$key}} - {{$value}}</h2>
@empty
    <h2>No Value Found.</h2> 
@endforelse --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic HTML Template</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <!-- Navbar -->
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/services">Services</a>
        <a href="/contact">Contact</a>
    </nav>
