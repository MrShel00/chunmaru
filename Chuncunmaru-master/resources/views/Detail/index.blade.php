@extends('layouts.main')

@section('container')
<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
              <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
            </a>
          </div>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
              Quality Men's Hoodie for Winter, Men's Fashion <br />
              Casual Hoodie
            </h4>
            <p>Detail : </p>
            <p>
              Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for
              men.
            </p>

            <div class="row mt-4">
              <dt class="col-3">Type:</dt>
              <dd class="col-9">Regular</dd>

              <dt class="col-3">Color</dt>
              <dd class="col-9">Brown</dd>

              <dt class="col-3">Material</dt>
              <dd class="col-9">Cotton, Jeans</dd>

              <dt class="col-3">Brand</dt>
              <dd class="col-9">Reebook</dd>
            </div>

            <hr />

            <div class="row mb-4 mt-5">
              <div class="col-md-4 col-6">
                <label class="mb-2">Size</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div>
            </div>

          </div>
        </main>
      </div>
    </div>
  </section>
@endsection
