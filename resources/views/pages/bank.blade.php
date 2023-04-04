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
                                                  
                                        <p>Thank you. Your order has been received. Please deposit your money to below bank and send a photo of bank slip to isurangabtk@gmail.com OR Viber 0775001170 <b>with your order number </b>. We will also contact you on phone soon</p>
                                       
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
                                                    Payment method: <strong>Direct bank transfer</strong>
                                            </li>
                                            
                                        </ul>
                                        <!-- .woocommerce-order-overview -->

                                    
                                        <section class="woocommerce-order-details">
                                            <h2 class="woocommerce-order-details__title">Bank details</h2>

                                            <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                                <thead>
                                                    
                                                </thead>

                                                <tbody>
                                                    <tr class="woocommerce-table__line-item order_item">

                                                        <td class="woocommerce-table__product-name product-name">
                                                           Bank Name
                                                        </td>

                                                        <td class="woocommerce-table__product-total product-total">
                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">HNB Bank 
                                                        </td>

                                                    </tr>

                                                    <tr class="woocommerce-table__line-item order_item">

                                                        <td class="woocommerce-table__product-name product-name">
                                                            Branch 
                                                        </td>

                                                        <td class="woocommerce-table__product-total product-total">
                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Galle</span>
                                                        </td>

                                                    </tr>

                                                </tbody>

                                                <tfoot>
                                                    <tr>
                                                        <th scope="row">Account Name</th>
                                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">Lankabuy International</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Account Number</th>
                                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">22066077080</span></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <th scope="row">Total:</th>
                                                        <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{$success['total']}}</span></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <!-- .woocommerce-table -->
                                        </section>
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