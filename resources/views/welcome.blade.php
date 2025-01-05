<h1>Home Page</h1>
<br>
<a href="/about">Go To About</a>
<br>
<a href="/contact">Go To Contact</a>
<br>
<a href="/">Go To Home</a>
<br>

<br>
{{4+7}}
<br>
{{"Hello World"}}
<br>
{{"<H1>Hello World</H1>"}}
{{-- this used to save from xss --}}
<br>
{!!"<H1>Hello World</H1>"!!}
<br>
{{-- {!!"<script>alert('laravel is great')</script>"!!} --}}

{{-- veriables --}}
@php 
    $user = "Jhon Doe";
@endphp

{{$user}}

<br>

@php 
    $names = ["Jhon Doe","Jhon Smith","Jhon Roger"];
@endphp

<br>


@foreach ($names as $item)
 @if($loop->first)
    {{"First Start"}}<br>
 @elseif($loop->last)
    {{"Count"}} - {{$loop->count}}<br>
    {{"Last Start"}}<br>
 @endif

@if($loop->even)
    {{"Even Start"}}<br>
 @elseif($loop->odd)
    {{"Odd Start"}}<br>
 @endif
 
   {{"Name"}} - {{$item}}<br>
   {{"Index"}} - {{$loop->index}}<br>
   {{"Iteration"}} - {{$loop->iteration}}<br><br>
@endforeach
<br>
{{-- @{{@names}} --}}