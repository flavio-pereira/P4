<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title',"My Book Recipes")</title>
    <meta charset='utf-8'>
    
    <link rel="icon" type="image/icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    @yield('head')

  </head>
  <body>
    
    @include('layouts/nav')

    <div id="content">
                <br />
                <br />
                <br />
                @if (Session::has('message'))
                <div class="alert">
                    <h4 class="bg-info text-center">{{ Session::get('message') }}</h4>
                </div>
            @endif
            @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            @endif
    </div>

    @yield('body')

    @yield('content')
    
  </body>
  
</html>