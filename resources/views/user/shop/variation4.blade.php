

@extends('layouts.shop')

@section('variation4')

<main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gap pb--20 pb_sm--0 bg-vista-white">
                <div class="container">
                    <div class="row row--50">
                        <div class="col-lg-6 mb--40">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="product-large-thumbnail-2 single-product-thumbnail axil-product slick-layout-wrapper--15 axil-slick-arrow arrow-both-side-3">
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-10.png" alt="Product Images">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-11.png" alt="Product Images">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-12.png" alt="Product Images">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-13.png" alt="Product Images">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-14.png" alt="Product Images">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-15.png" alt="Product Images">
                                        </div>
                                        <div class="thumbnail">
                                            <img src="/asset/images/product/product-big-12.png" alt="Product Images">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="small-thumb-wrapper product-small-thumb-2 small-thumb-style-two small-thumb-style-three">
                                        <div class="small-thumb-img ">
                                            <img src="/asset/images/product/product-thumb/thumb-10.png" alt="samll-thumb">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="/asset/images/product/product-thumb/thumb-11.png" alt="samll-thumb">
                                        </div>
                                        <div class="small-thumb-img active">
                                            <img src="/asset/images/product/product-thumb/thumb-12.png" alt="samll-thumb">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="/asset/images/product/product-thumb/thumb-13.png" alt="samll-thumb">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="/asset/images/product/product-thumb/thumb-14.png" alt="samll-thumb">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="/asset/images/product/product-thumb/thumb-15.png" alt="samll-thumb">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="/asset/images/product/product-thumb/thumb-12.png" alt="samll-thumb">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h2 class="product-title">Miles Weekender Bag</h2>
                                    <span class="price-amount">$155.00 - $255.00</span>
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>2</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <ul class="product-meta">
                                        <li><i class="fal fa-check"></i>In stock</li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        <li><i class="fal fa-check"></i>Sales 30% Off Use Code: MOTIVE30</li>
                                    </ul>
                                    <p class="description">In ornare lorem ut est dapibus, ut tincidunt nisi pretium. Integer ante est, hendrerit in rutrum quis, elementum eget magna. Pellentesque sagittis dictum libero, eu dignissim tellus.</p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation product-size-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty mr--20"><input type="text" value="1"></div>
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                            <li class="wishlist"><a href="{{route('addlike.to.wishlist' , $sub -> id)}}" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->

                                    <div class="product-desc-wrapper pt--80 pt_sm--60">
                                        <h4 class="primary-color mb--40 desc-heading">Description</h4>
                                        <div class="single-desc mb--30">
                                            <h5 class="title">Specifications:</h5>
                                            <p>We’ve created a full-stack structure for our working workflow processes, were from the funny the century initial all the made, have spare to negatives. But the structure was from the funny the century rather,
                                                initial all the made, have spare to negatives.</p>
                                        </div>
                                        <div class="single-desc mb--5">
                                            <h5 class="title">Care & Maintenance:</h5>
                                            <p>Use warm water to describe us as a product team that creates amazing UI/UX experiences, by crafting top-notch user experience.</p>
                                        </div>
                                        <ul class="pro-des-features pro-desc-style-two pt-10">
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="/asset/images/product/product-thumb/icon-3.png" alt="icon">
                                                </div>
                                                Easy Returns
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="/asset/images/product/product-thumb/icon-2.png" alt="icon">
                                                </div>
                                                Quality Service
                                            </li>
                                            <li class="single-features">
                                                <div class="icon">
                                                    <img src="/asset/images/product/product-thumb/icon-1.png" alt="icon">
                                                </div>
                                                Original Product
                                            </li>
                                        </ul>
                                        <!-- End .pro-des-features -->
                                    </div>
                                    <!-- End .product-desc-wrapper -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Your Recently</span>
                    <h2 class="title">Viewed Items</h2>
                    <a class="btn-btn-outline-dark" href="{{route('user.cart')}}">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart <span class="badge bg-danger">{{count((array) session('carts'))}}</span>
                </a>
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
                </div>
             
                <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                @foreach($hhs as $sub)

               
                    <div class="slick-single-layout">
                    
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="{{route('user.cart')}}">
                                <img  style="width: 240px; height: 220px;" src="{{asset('images/offers/'.$sub -> photo)}}">                                           
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>
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
                                    <h5 class="title"><a href="{{route('user.cart')}}">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30</span>
                                        <span class="price current-price">$30</span>
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
                    <!-- End .slick-single-layout -->
                 

                </div>
            </div>
        </div>
        <!-- End Recently Viewed Product Area  -->
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