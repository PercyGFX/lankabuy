@extends('layout')
@section('content')

<div class="woocommerce-active single-product full-width normal">

<div id="content" class="site-content" tabindex="-1">
                <div class="col-full">
                    <div class="row">
                        <nav class="woocommerce-breadcrumb">
                            <a href="../">Home</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><a href="{{URL::to('/category/'.$products_view_page->category_id)}}">{{$products_view_page->category_name}}</a>
                            <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$products_view_page->product_name}}
                        </nav>
                        <!-- .woocommerce-breadcrumb -->
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="product product-type-simple">
                                    <div class="single-product-wrapper">
                                        <div class="product-images-wrapper thumb-count-4">
                                           
                                            <!-- .onsale -->
                                            <div id="techmarket-single-product-gallery" class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images" data-columns="4">
                                                <div class="techmarket-single-product-gallery-images" data-ride="tm-slick-carousel" data-wrap=".woocommerce-product-gallery__wrapper" data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4">
                                                        <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                        <figure class="woocommerce-product-gallery__wrapper ">
                                                           
                                                            <div data-thumb="{{URL::to($products_view_page->product_image)}}" class="woocommerce-product-gallery__image">
                                                                <!-- remove   <a href="{{URL::to($products_view_page->product_image)}}" tabindex="-1">  --> 
                                                                    <img width="600" height="600" src="{{URL::to($products_view_page->product_image)}}" class="attachment-shop_single size-shop_single" alt="">
                                                              <!-- remove  </a> --> 
                                                            </div>
                                                        </figure>
                                                    </div>
                                                    <!-- .woocommerce-product-gallery -->
                                                </div>
                                                
                                             


                                                <!-- .techmarket-single-product-gallery-images -->
                                              
                                                <!-- .techmarket-single-product-gallery-thumbnails -->
                                            </div>
                                            <!-- .techmarket-single-product-gallery -->
                                        </div>
                                        <!-- .product-images-wrapper -->
                                        <div class="summary entry-summary">
                                            <div class="single-product-header">
                                                <h1 class="product_title entry-title">{{$products_view_page->product_name}}</h1>
                                                
                                            </div>
                                            <!-- .single-product-header -->
                                           
                                           
                                            <!-- .rating-and-sharing-wrapper -->
                                            <div class="woocommerce-product-details__short-description">
                                                <p>
                                                {{$products_view_page->product_short_description}}
                                                </p>
                                            </div>
                                            <!-- .woocommerce-product-details__short-description -->
                                            <div class="product-actions-wrapper">
                                                <div class="product-actions">
                                                    <p class="price">
                                                       
                                                        <ins>
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$products_view_page->product_price}}</span>
                                                        </ins>
                                                    </p>
                                                    <!-- .single-product-header -->

                                                    <!-- ADD TO CART FORM -->
                                                    <form enctype="multipart/form-data" method="post" class="cart" action="/add-item-to-cart">
                                                    {{ csrf_field() }}
                                                        <div class="quantity">
                                                            <label for="quantity-input">Quantity</label>
                                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" id="quantity-input">
                                                            <input type="hidden" name="product_id" value="{{$products_view_page->product_id}}">
                                                        </div>
                                                        <!-- .quantity -->
                                                        <button class="single_add_to_cart_button button alt" value="185" name="add-to-cart" type="submit">Add to cart</button>
                                                    </form>
                                                    <!-- .cart -->
                                                  
                                                </div>
                                                <!-- .product-actions -->
                                            </div>
                                            <!-- .product-actions-wrapper -->
                                        </div>
                                        <!-- .entry-summary -->
                                    </div>
                                    <!-- .single-product-wrapper -->
                         
                                    <!--  TABS START -->
                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul role="tablist" class="nav tabs wc-tabs">
                                            
                                            <li class="nav-item description_tab">
                                                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-description" href="#tab-description">Description</a>
                                            </li>
                                            <li class="nav-item specification_tab">
                                                <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-specification" href="#tab-specification">Specification</a>
                                            </li>
                                            
                                        </ul>
                                        <!-- /.ec-tabs -->
                                        <div class="tab-content">
                                            
                                            <div class="tab-pane active" id="tab-description" role="tabpanel">
                                                <h2>Description</h2>
                                                

                                                {{$products_view_page->product_long_description}}

                                            </div>

                                        <!-- Product Specifications -->

                                            <div class="tab-pane" id="tab-specification" role="tabpanel">
                                                <div class="tm-shop-attributes-detail like-column columns-3">
                                                   
                                                    
                                                    <!-- /.shop_attributes -->
                                                    <h3 class="tm-attributes-title">Product Specs</h3>
                                                    <table class="shop_attributes">
                                                        <tbody>
                                                            <tr>
                                                                <th>Product Weight</th>
                                                                <td>   {{$products_view_page->product_weight}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Product Brand</th>
                                                                <td>   {{$products_view_page->product_brand}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Product Price</th>
                                                                <td>  $ {{$products_view_page->product_price}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Product Category</th>
                                                                <td> {{$products_view_page->category_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Product Name</th>
                                                                <td>{{$products_view_page->product_name}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Product Availability</th>
                                                                <td>Available</td>
                                                            </tr>
                                                           
                                                        </tbody>
                                                    </table>
                                                    <!-- /.shop_attributes -->
                                                   
                                                    <!-- /.shop_attributes -->
                                                </div>
                                                <!-- /.tm-shop-attributes-detail -->
                                            </div>
                                          
                                    
                                    <!-- .section-landscape-products-carousel -->
                                    
                                    <!-- .brands-carousel -->
                                </div>
                                <!-- .product -->
                            </main>
                            <!-- #main -->
                        </div>
                        <!-- #primary -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .col-full -->
            </div>
            <!-- #content -->

            </div>
@endsection