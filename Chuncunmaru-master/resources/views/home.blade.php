@extends('layouts.main')

@section('container')

<h1>HOME</h1>
<div class=" text-white py-5" align="center">
    <!-- <img src="./asset/slider2.jpg" alt="" width="1930" > -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="asset/img1.jpg" class="d-block img-fluid" alt="gambar 1">
        </div>
        <div class="carousel-item">
          <img src="asset/img2.jpg" class="d-block img-fluid" alt="gambar 2">
        </div>
        <div class="carousel-item">
          <img src="asset/img3.jpg" class="d-block img-fluid" alt="gambar 3">
        </div>
        <div class="carousel-item">
          <img src="asset/img4.jpg" class="d-block img-fluid" alt="gambar 4">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <section>
    <div class="container my-5">
      <header class="mb-4">
        <h3>New products</h3>
      </header>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
          <div class="card w-100 my-2 shadow-2-strong">
            <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/1.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
              <!-- <p class="card-text">$790.50</p> -->
              <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                <a href="#!" class="btn btn-primary shadow-0 me-1">Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
