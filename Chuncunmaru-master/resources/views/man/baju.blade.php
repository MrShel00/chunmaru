
@extends('layouts.main')

@section('container')
<h1>Halaman Baju</h1>
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
                <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
