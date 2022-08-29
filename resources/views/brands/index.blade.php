@extends('layouts.app')
@section('content')
      <!-- Hero Section Begin -->
      <section class="hero">
         <div class="hero__slider owl-carousel">
             <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-5 col-lg-7 col-md-8">
                             <div class="hero__text">
                                 <h6>Summer Collection</h6>
                                 <h2>Fall - Winter Collections 2030</h2>
                                 <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                 commitment to exceptional quality.</p>
                                 <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                 <div class="hero__social">
                                     <a href="#"><i class="fa fa-facebook"></i></a>
                                     <a href="#"><i class="fa fa-twitter"></i></a>
                                     <a href="#"><i class="fa fa-pinterest"></i></a>
                                     <a href="#"><i class="fa fa-instagram"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-5 col-lg-7 col-md-8">
                             <div class="hero__text">
                                 <h6>Summer Collection</h6>
                                 <h2>Fall - Winter Collections 2030</h2>
                                 <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                 commitment to exceptional quality.</p>
                                 <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                 <div class="hero__social">
                                     <a href="#"><i class="fa fa-facebook"></i></a>
                                     <a href="#"><i class="fa fa-twitter"></i></a>
                                     <a href="#"><i class="fa fa-pinterest"></i></a>
                                     <a href="#"><i class="fa fa-instagram"></i></a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Hero Section End -->
   
     <!-- Banner Section Begin -->
     <section class="banner spad">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7 offset-lg-4">
                     <div class="banner__item">
                         <div class="banner__item__pic">
                             <img src="img/banner/banner-1.jpg" alt="">
                         </div>
                         <div class="banner__item__text">
                             <h2>Clothing Collections 2030</h2>
                             <a href="#">Shop now</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-5">
                     <div class="banner__item banner__item--middle">
                         <div class="banner__item__pic">
                             <img src="img/banner/banner-2.jpg" alt="">
                         </div>
                         <div class="banner__item__text">
                             <h2>Accessories</h2>
                             <a href="#">Shop now</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-7">
                     <div class="banner__item banner__item--last">
                         <div class="banner__item__pic">
                             <img src="img/banner/banner-3.jpg" alt="">
                         </div>
                         <div class="banner__item__text">
                             <h2>Shoes Spring 2030</h2>
                             <a href="#">Shop now</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Banner Section End -->
   
     <!-- Product Section Begin -->
     <section class="product spad">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <ul class="filter__controls">
                         <li class="active" data-filter="*">Best Sellers</li>
                         <li data-filter=".new-arrivals">New Arrivals</li>
                         <li data-filter=".hot-sales">Hot Sales</li>
                     </ul>
                 </div>
             </div>
             <div class="row product__filter">
               @foreach ($brands as $brand)                        
                 <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                     <div class="product__item">
                         <div class="product__item__pic set-bg" data-setbg="">
                           <img src="{{ $brand->logo }}" alt="" srcset="" class="product__item__pic set-bg">
                             <span class="label">New</span>
                             <ul class="product__hover">
                                 <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                 <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                 <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                             </ul>
                         </div>
                         <div class="product__item__text">
                             <h6>{{ $brand->name }}</h6>
                             <a href="{{ route('brands.show',['brand'=>$brand->id]) }}" class="add-cart">View</a>
                             <div class="rating">
                                 <i class="fa fa-star-o"></i>
                                 <i class="fa fa-star-o"></i>
                                 <i class="fa fa-star-o"></i>
                                 <i class="fa fa-star-o"></i>
                                 <i class="fa fa-star-o"></i>
                             </div>
                             <h5>Opned At :{{ $brand->open_time }}</h5>
                             <h5>Closed At :{{ $brand->close_time }}</h5>
                             <div class="product__color__select">
                                 <label for="pc-1">
                                     <input type="radio" id="pc-1">
                                 </label>
                                 <label class="active black" for="pc-2">
                                     <input type="radio" id="pc-2">
                                 </label>
                                 <label class="grey" for="pc-3">
                                     <input type="radio" id="pc-3">
                                 </label>
                             </div>
                         </div>
                     </div>
                 </div>
               @endforeach
                 {{-- end --}}
                 
   
             </div>
         </div>
     </section>
     <!-- Categories Section End -->
   
     <!-- Instagram Section Begin -->
     <section class="instagram spad">
         <div class="container">
             <div class="row">
                 <div class="col-lg-8">
                     <div class="instagram__pic">
                         <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.jpg"></div>
                         <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.jpg"></div>
                         <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.jpg"></div>
                         <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.jpg"></div>
                         <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.jpg"></div>
                         <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.jpg"></div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="instagram__text">
                         <h2>Instagram</h2>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                         labore et dolore magna aliqua.</p>
                         <h3>#Male_Fashion</h3>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Instagram Section End -->
   
     <!-- Latest Blog Section Begin -->
     <section class="latest spad">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-title">
                         <span>Latest News</span>
                         <h2>Fashion New Trends</h2>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="blog__item">
                         <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                         <div class="blog__item__text">
                             <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                             <h5>What Curling Irons Are The Best Ones</h5>
                             <a href="#">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="blog__item">
                         <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                         <div class="blog__item__text">
                             <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                             <h5>Eternity Bands Do Last Forever</h5>
                             <a href="#">Read More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-6 col-sm-6">
                     <div class="blog__item">
                         <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                         <div class="blog__item__text">
                             <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                             <h5>The Health Benefits Of Sunglasses</h5>
                             <a href="#">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Latest Blog Section End -->
     @include('products.fotter');
@endsection