@extends('layout')
@section('content')


                              
 
                      
                                <div class="shop-control-bar">
                                    
                                    <!-- .handheld-sidebar-toggle -->
                                    <?php
                                            foreach($category->slice(0, 1) as $category_title) 
                                            {?>
                                    <h1 class="woocommerce-products-header__title page-title">Products From {{$category_title->category_name}}</h1>

                                            <?php } ?>
                                    
                                    <!-- .shop-view-switcher -->
                                   
                                  
                                    <!-- .woocommerce-ordering -->
                                    <nav class="techmarket-advanced-pagination">
                                        <form class="form-adv-pagination" method="post">
                                            <input type="number" value="1" class="form-control" step="1" max="5" min="1" size="2" id="goto-page">
                                        </form> of 5<a href="#" class="next page-numbers">→</a>
                                    </nav>
                                    <!-- .techmarket-advanced-pagination -->
                                </div>
                                <!-- .shop-control-bar -->
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane active" role="tabpanel">
                                        <div class="woocommerce columns-7">
                                            <div class="products">

                                            <?php
                                            foreach($category->slice(0, 20) as $product_by_category) 
                                            {?>


											<!-- PRODUCT START -->
                                            <div class="product list-view-large ">
                                                    <div class="media">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="../{{$product_by_category->product_image}}">
                                                        <div class="media-body">
                                                            <div class="product-info">
                                                                
                                                                <!-- .yith-wcwl-add-to-wishlist -->
                                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="/view_product/{{$product_by_category->product_id}}">
                                                                    <h2 class="woocommerce-loop-product__title">{{$product_by_category->product_name}}</h2>
                                                                    
                                                                </a>
                                                                <!-- .woocommerce-LoopProduct-link -->
                                                             
                                                             
                                                                <div class="woocommerce-product-details__short-description">
                                                                    <ul>
                                                                        <li>{{$product_by_category->product_short_description}}</li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                <!-- .woocommerce-product-details__short-description -->
                                                                <span class="sku_wrapper">SKU:
                                                                    <span class="sku">{{$product_by_category->product_id}}</span>
                                                                </span>
                                                            </div>
                                                            <!-- .product-info -->
                                                            <div class="product-actions">
                                                                <div class="availability">
                                                                    Availability:
                                                                    <p class="stock in-stock">in stock</p>
                                                                </div>
                                                                <span class="price">
                                                                    <span class="woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$product_by_category->product_price}}</span>
                                                                </span>
                                                                <!-- .price -->
                                                                <a class="button add_to_cart_button" href="/view_product/{{$product_by_category->product_id}}">Add to Cart</a>
                                                                
                                                            </div>
                                                            <!-- .product-actions -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                                <?php }?>

                                                				<!-- PRODUCT END -->
                                            </div>
                                            <!-- .products -->
                                        </div>
                                        <!-- .woocommerce -->
                                    </div>
                                    <!-- .tab-pane -->
                                   
                                    <!-- .tab-pane -->
                                </div>
                                <!-- .tab-content -->
                                <div class="shop-control-bar-bottom">
                                   
                                    
                                   <!-- PAGE PAGINATION

                                    <nav class="woocommerce-pagination">
                                        <ul class="page-numbers">
                                            <li>
                                                <span class="page-numbers current">1</span>
                                            </li>
                                            <li><a href="#" class="page-numbers">2</a></li>
                                            <li><a href="#" class="page-numbers">3</a></li>
                                            <li><a href="#" class="page-numbers">4</a></li>
                                            <li><a href="#" class="page-numbers">5</a></li>
                                            <li><a href="#" class="next page-numbers">→</a></li>
                                        </ul>
                                        .page-numbers -->
                                    </nav>
                                    <!-- .woocommerce-pagination -->
                                </div>
                                <!-- .shop-control-bar-bottom -->
                            
                        
										 

@endsection