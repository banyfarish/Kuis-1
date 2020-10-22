@extends('layout.master')  
@section('content')
<div class="container">
  <br><br><br>
  <div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
            <h3>List Of All Articles</h3>
            </div>
            </br></br>
            <form action="/articles/create" method="post">
            @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" required="required" name="title"></br>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text" class="form-control" required="required" name="content"></br>
                </div>
                <div class="form-group">
                    <label for="image">Featured Image</label>
                    <input type="text" class="form-control" required="required" name="image"></br>
                </div>
                <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
            </form>     
        </div>
    </div>


<!-- Sidebar Widgets Column -->
<div class="col-md-4">

<!-- Search Widget -->
<div class="card my-4">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-append">
        <button class="btn btn-secondary" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>

<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Categories</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">Kainan</a>
          </li>
          <li>
            <a href="#">Shoyo</a>
          </li>
          <li>
            <a href="#">Meihou</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-6">
        <ul class="list-unstyled mb-0">
          <li>
            <a href="#">Ryounan</a>
          </li>
          <li>
            <a href="#">Sannoh</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Side Widget -->
<div class="card my-4">
  <h5 class="card-header">Slam Dunk</h5>
  <div class="card-body">
  The manga and anime series Slam Dunk features a cast of 
  fictional characters created by Takehiko Inoue. The series 
  takes place in Japan, with the main characters being high school 
  basketball players from Kanagawa Prefecture.
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- /.container -->
@endsection