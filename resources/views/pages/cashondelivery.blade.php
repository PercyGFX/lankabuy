@extends('layout')
@section('content')


                     



<div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="home-v1.html">Home</a>
                    <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
                    <a href="checkout.html">Checkout</a>
                    <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Order received. 
                </nav>
                <!-- .woocommerce-breadcrumb -->

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="page hentry">

                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-order">
                                            <div class="alert alert-primary" role="alert">
                                                  
                                        <p>Thank you. Your order has been received. We will contact you soon</p>
                                       
                                    </div>
                                        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                                            <li class="woocommerce-order-overview__order order">
                                                Order number:<strong>{{$success['order_id']}}</strong>
                                            </li>

                                            <li class="woocommerce-order-overview__date date">
                                                Date:<strong><?php $now = new DateTime();
                                                    echo $now->format('Y-m-d');?></strong>
                                            </li>

                                            
                                            <li class="woocommerce-order-overview__total total">
                                                Total:<strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$success['total']}}</span></strong>
                                            </li>

                                            <li class="woocommerce-order-overview__payment-method method">
                                                    Payment method: <strong>Cash On Delivery</strong>
                                            </li>
                                            
                                        </ul>
                                        <!-- .woocommerce-order-overview -->

                                    
                              
                                        <!-- .woocommerce-order-details -->

                                
                                    </div>
                                    <!-- .woocommerce-order -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>
   



@endsection