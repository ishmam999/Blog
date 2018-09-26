@extends('main')

@section('title', '| Homepage')
      
@section('content')      
      <div class="row">
          <div class="col-md-12">
              <div class="jumbotron">
                <h1 class="display-4">Welcome to My Blog!</h1>
                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular blog.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
              </div>
          </div>
      </div> <!-- End of header row -->

      <div class="row">
          <div class="col-md-8">
              <div class="post">
                  <h3>Post Title</h3>
                  <p>Lorem ipsum sit amet, consectetur adipisicing elit. Perferendis amet bhugi chugi. Alu khaite khaite mota hobo.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>

              <hr>

              <div class="post">
                  <h3>Post Title</h3>
                  <p>Lorem ipsum sit amet, consectetur adipisicing elit. Perferendis amet bhugi chugi. Alu khaite khaite mota hobo.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>

              <hr>

              <div class="post">
                  <h3>Post Title</h3>
                  <p>Lorem ipsum sit amet, consectetur adipisicing elit. Perferendis amet bhugi chugi. Alu khaite khaite mota hobo.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>

              <hr>

              <div class="post">
                  <h3>Post Title</h3>
                  <p>Lorem ipsum sit amet, consectetur adipisicing elit. Perferendis amet bhugi chugi. Alu khaite khaite mota hobo.</p>
                  <a href="#" class="btn btn-primary">Read More</a>
              </div>
          </div>

          <div class="col-md-3 col-md-offset-1">
              <h2>Sidebar</h2>
          </div>
      </div>
@endsection