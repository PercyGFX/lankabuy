@extends('layout')
@section('content')


                              
 
                      
                                <div class="shop-control-bar">
                                    
                                    <!-- .handheld-sidebar-toggle -->
                                    <h1 class="woocommerce-products-header__title page-title">Latest Products</h1>
                                    
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

											<!-- PRODUCT START -->
                                            <?php
                                            foreach($view_product_active->slice(0, 20) as $active_product) 
                                            {?>


                                                <div class="product">
                                                    
                                                    
                                                    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="/view_product/{{$active_product->product_id}}">
                                                        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image" src="{{$active_product->product_image}}">
                                                        <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$active_product->product_price}}</span>
                                                        </span>
                                                        <h2 class="woocommerce-loop-product__title">{{$active_product->product_name}}</h2>
                                                    </a>
                                                    

                                                    <div class="hover-area">
                                                        <a class="button" href="/view_product/{{$active_product->product_id}}">Add to cart</a>
                                                       
                                                    </div>
                                                   
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