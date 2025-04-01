<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document- @yield('title' ,'website')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
</head>
<body>
    <div id="wrapper">
        <header>
            <h1>Coder</h1>
        </header>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/post">Post</a>
        </nav>
        <main>
            <article>
                @hasSection('content')
                @yield('content','<h2>No Content</h2>')
 @else
 <h2>No Content</h2>    
                @endif


            </article>
            <aside>
                @section('sidebar');
                <ul>
                    <li >Home</li>
                    <li>About</li>
                    <li>Post</li>
                </ul>
                @show
                
            </aside>
        </main>
        <footer>saurabh@larvel.com</footer>
        </div>
        @stack('script')
        </body>
        </html>
         
