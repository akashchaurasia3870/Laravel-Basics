{{-- @php
    // $fruits = ['one'=>'Apple','two'=>'Banana','three'=>'Orange']
    $fruits  =[];
@endphp --}}

{{-- @include('pages.header',["fruits"=>$fruits]) --}}

{{-- @includeWhen(false, 'pages.header', ['some' => 'data']) --}}

{{-- @includeUnless(true, 'pages.header', ['some' => 'data'])

<h1>Home Page</h1>

@include('pages.footer')

@includeIf('pages.content') --}}


    <!-- Main Content Area with Sidebar -->
    <div class="container">
        <!-- Main Content -->
        <div class="main-content">
            <h2>Main Content</h2>
            <p>Welcome to the main content area. Here you can display your main information.</p>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Sidebar</h3>
            <p>This is the sidebar area, where you can add links or additional content.</p>
        </div>
    </div>
