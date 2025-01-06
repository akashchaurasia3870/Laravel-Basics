{{-- <h1>Welcome To Third</h1>
<a href="/">Go To Home</a>
<a href="{{route('about')}}">Go To About</a> --}}

@includeIf('pages.header')
    <header>
        <h1>Home Page</h1>
    </header>

@includeIf('pages.home')
@includeIf('pages.footer')