

@extends('layouts.shop')

@section('nosid')
<main class="main-wrapper">
        <!-- Start Breadcrumb Area  -->
        <div class="axil-breadcrumb-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="inner">
                            <ul class="axil-breadcrumb">
                                <li class="axil-breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="separator"></li>
                                <li class="axil-breadcrumb-item active" aria-current="page">My Account</li>
                            </ul>
                            <h1 class="title">Explore All Products</h1>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <div class="inner">
                            <div class="bradcrumb-thumb">
                                <img src="/asset/images/product/product-45.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Area  -->
        <!-- Start Shop Area  -->
        <div class="axil-shop-area axil-section-gap bg-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="axil-shop-top">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="category-select">

                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Categories</option>
                                            <option>Fashion</option>
                                            <option>Electronics</option>
                                            <option>Furniture</option>
                                            <option>Beauty</option>
                                        </select>
                                        <!-- End Single Select  -->

                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Color</option>
                                            <option>Red</option>
                                            <option>Blue</option>
                                            <option>Green</option>
                                            <option>Pink</option>
                                        </select>
                                        <!-- End Single Select  -->

                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Price Range</option>
                                            <option>0 - 100</option>
                                            <option>100 - 500</option>
                                            <option>500 - 1000</option>
                                            <option>1000 - 1500</option>
                                        </select>
                                        <!-- End Single Select  -->

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                                        <!-- Start Single Select  -->
                                        <select class="single-select">
                                            <option>Sort by Latest</option>
                                            <option>Sort by Name</option>
                                            <option>Sort by Price</option>
                                            <option>Sort by Viewed</option>
                                        </select>
                                        <!-- End Single Select  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                @foreach($hhs as $sub)
                    <!-- End Single Product  -->
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="axil-product product-style-one has-color-pick mt--40">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                <img  style="width: 240px; height: 240px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                    </a>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="{{route('addlike.to.wishlist' , $sub -> id)}}"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="{{route('addproduct.to.cart' , $sub -> id)}}">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">{{$sub -> name}}</a></h5>
                                    <div class="product-price-variant">
                                    <span class="price current-price">${{$sub ->category }}</span>
                                        <span class="price old-price">${{$sub -> old}}</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <div class="text-center pt--30">
                    <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Load more</a>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Shop Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .container -->
        </div>
        <!-- End Axil Newsletter Area  -->
    </main>
    
    <div class="cart-dropdown" id="cart-dropdown">
        <div class="cart-content-wrap">
            <div class="cart-header">
                <h2 class="header-title">Cart review</h2>
                <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
            </div>
            @php $total = 0 @endphp 
            @if(session('carts'))
                        @foreach(session('carts') as $id => $details  )
              @php $total += $details ['category'] * $details ['quantity'] @endphp
            <div class="cart-body">
                <ul class="cart-item-list">
                 
                    <li class="cart-item">
                        <div class="item-img">
                            <a href="{{route('user.variation1')}}"><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$details ['photo'])}}"></a>
                            <button class="close-btn"><i class="fas fa-times"></i></button>
                        </div>
                        <div class="item-content">
                            <div class="product-rating">
                                <span class="icon">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							</span>
                                <span class="rating-number">(64)</span>
                            </div>
                            <h3 class="item-title"><a href="{{route('user.variation1')}}-3">{{$details ['name']}}</a></h3>
                            <div class="item-price"><span class="currency-symbol">$</span>{{$details ['category']}}</div>
                            <div class="pro-qty item-quantity">
                                <input type="number" value="{{$details ['quantity']}}" class="quantity-input" value="15">
                            </div>
                        </div>
                    </li>









                   
                </ul>
              
            </div>
            @endforeach
                       @endif
            <div class="cart-footer">
                <h3 class="cart-subtotal">
                    <span class="subtotal-title">Subtotal:</span>
                    <span class="subtotal-amount">${{$total}}</span>
                </h3>
                <div class="group-btn">
                    <a href="{{route('user.cart')}}" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                    <a href="{{route('user.checkout')}}" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    @stop