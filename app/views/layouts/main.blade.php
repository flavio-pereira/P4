<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title',"Claudia Recipes")</title>
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
                <div class="flash alert">
                    <p class="bg-info">{{ Session::get('message') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
            @endif
    </div>

    @yield('body')
    
  </body>
  
</html>