@extends('layouts/main')

@section('body')
    
  <div class="container">
    <h1>Welcome to Recipe Book</h1>

    <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="images/dulce-de-leche.jpg" alt="">
            </div>
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <p> Welcome to your Virtual Recipe Books! Here you can register all your recipes and easily access them when you need.  
                You can divide your recipes in books and then put create all your recipes under your favorite book.  
                Go ahead and register your account <a href='/signup'>here</a> and start creating your recipes!</p>
            </div>
            <!-- /.col-md-4 -->
        </div>
    </div>
        <!-- /.row -->
@stop