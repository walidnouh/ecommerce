@extends('layouts.app')
@section('content')
@if (session('success'))
   <div class="alert alert-success">
      {{ session('success') }}
   </div>
@endif
       <!-- Breadcrumb Section Begin -->
       <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    @include('products.slide')
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if($id==1)
                            <x-filtre :items="collect($filtre1)"></x-filtre>
                        @elseif ($id==2)
                            <x-filtre :items="collect($filtre2)"></x-filtre>
                        @elseif ($id==3)
                            <x-filtre :items="collect($filtre3)"></x-filtre>
                        @elseif ($id==4)
                            <x-filtre :items="collect($filtre4)"></x-filtre>
                        @elseif ($id==5)
                            <x-filtre :items="collect($filtre5)"></x-filtre>
                        @elseif ($id==6)
                            <x-filtre :items="collect($filtre6)"></x-filtre>
                        @endif   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
  @include('products.fotter');
@endsection