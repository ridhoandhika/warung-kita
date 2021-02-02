@extends('layout')

@section('section')
    @include('header')
 
    <!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-8 mx-auto">
        <div class="post-preview">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <img src="img/ats.jpeg" class="card-img-top" alt="...">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <img src="img/ats4.jpeg" class="card-img-top" alt="...">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                <div class="card-body">
                    <img src="img/ats1.jpeg" class="card-img-top" alt="...">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
        </div>   
        <hr>
        <!-- Pager -->
      </div>
    </div>
  </div>
@endsection