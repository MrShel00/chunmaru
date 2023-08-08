@extends('layouts.main')

@section('container')
<section class="">
    <div class="container">
      <div class="row">
        <!-- sidebar -->
        <div class="col-lg-3 mt-5">
          <!-- Toggle button -->
          <button
                  class="btn btn-outline-secondary mb-3 w-100 d-lg-none"
                  type="button"
                  data-mdb-toggle="collapse"
                  data-mdb-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
            <span>Show filter</span>
          </button>
          <!-- Collapsible wrapper -->
          <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button
                          class="accordion-button text-dark bg-light"
                          type="button"
                          data-mdb-toggle="collapse"
                          data-mdb-target="#panelsStayOpen-collapseOne"
                          aria-expanded="true"
                          aria-controls="panelsStayOpen-collapseOne"
                          >
                    Related items
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                  <div class="accordion-body">
                    <ul class="list-unstyled">
                      <li><a href="#" class="text-dark">Electronics </a></li>
                      <li><a href="#" class="text-dark">Home items </a></li>
                      <li><a href="#" class="text-dark">Books, Magazines </a></li>
                      <li><a href="#" class="text-dark">Men's clothing </a></li>
                      <li><a href="#" class="text-dark">Interiors items </a></li>
                      <li><a href="#" class="text-dark">Underwears </a></li>
                      <li><a href="#" class="text-dark">Shoes for men </a></li>
                      <li><a href="#" class="text-dark">Accessories </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <!-- content -->
        <div class="col-lg-9 mt-3">
          <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
            <div class="ms-auto">
              <select class="form-select d-inline-block w-auto border pt-1">
                <option value="0">Best match</option>
                <option value="1">Recommended</option>
                <option value="2">High rated</option>
                <option value="3">Randomly</option>
              </select>
              <div class="btn-group shadow-0 border">
                <a href="#" class="btn btn-light" title="List view">
                  <i class="fa fa-bars fa-lg"></i>
                </a>
                <a href="#" class="btn btn-light active" title="Grid view">
                  <i class="fa fa-th fa-lg"></i>
                </a>
              </div>
            </div>
          </header>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
              <div class="card w-100 my-2 shadow-2-strong">
                <img src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/10.webp" class="card-img-top" />
                <div class="card-body d-flex flex-column">
                  <p class="card-text">T-shirts with multiple colors, for men and lady</p>
                  <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto ">
                    <a href="#!" class="btn btn-primary shadow-0 me-1">Detail</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr />

          <!-- Pagination -->
          <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-3">
            <ul class="pagination">
              <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- Pagination -->
        </div>
      </div>
    </div>
  </section>
@endsection
