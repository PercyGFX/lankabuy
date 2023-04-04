@extends('layout')
@section('content')


<div class="type-page hentry">
        <div class="entry-content">
            <div class="woocommerce">
                
               
                
                <!-- .collapse -->
                
                <?php $customer_id=Session::get('cus_id'); ?>
               
                <?php if (Cart::count()<1 OR $customer_id == NULL) { ?>

                        <div class="alert alert-warning" role="alert">
                             There's Nothing here!. Please login or add products to cart and come back
                              </div>

                <?php }else { ?>


                <form action="/add-shipping" class="checkout woocommerce-checkout" method="post" name="checkout">
                    @csrf
                    <div id="customer_details" class="col2-set">
                        <div class="col-1">
                            <div class="woocommerce-billing-fields">
                                <h3>Billing Details</h3>
                                <div class="woocommerce-billing-fields__field-wrapper-outer">
                                    <div class="woocommerce-billing-fields__field-wrapper">
                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                    <label class="" for="billing_address_1">Email
                                                        <abbr title="required" class="required">*</abbr>
                                                    </label>
                                                    <input type="text" value="" placeholder="Email" id="billing_address_1" name="shipping_email" class="input-text ">
                                                </p>
                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                            <label class="" for="billing_first_name">First Name
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_first_name" name="shipping_fname" class="input-text ">
                                        </p>
                                        <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                            <label class="" for="billing_last_name">Last Name
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_last_name" name="shipping_lname" class="input-text ">
                                        </p>
                                        <div class="clear"></div>
                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Address
                                                    <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="shipping_address" class="input-text ">
                                            </p>
                                        <div class="clear"></div>
                                        <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                            <label class="" for="billing_address_1">City
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="Street address" id="billing_address_1" name="shipping_city" class="input-text ">
                                        </p>
                                        
                                       
                                       
                                        <p id="billing_postcode_field" class="form-row form-row-wide address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                            <label class="" for="billing_postcode">Postcode / ZIP
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="text" value="" placeholder="" id="billing_postcode" name="shipping_zipcode" class="input-text ">
                                        </p>
                                        <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                                            <label class="" for="billing_phone">Phone
                                                <abbr title="required" class="required">*</abbr>
                                            </label>
                                            <input type="tel" value="" placeholder="" id="billing_phone" name="shipping_phone" class="input-text ">
                                        </p>
                                       
                                    </div>
                                </div>
                                <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                            </div>
                            <!-- .woocommerce-billing-fields -->
                            <div class="woocommerce-account-fields">
                                
                               
                            </div>
                            <!-- .woocommerce-account-fields -->
                        </div>
                        <!-- .col-1 -->
                        <div class="col-2">
                           
                        </div>
                        <!-- .col-2 -->
                    </div>
                    <!-- .col2-set -->
                    <h3 id="order_review_heading">Your order</h3>
                    <div class="woocommerce-checkout-review-order" id="order_review">
                        <div class="order-review-wrapper">
                            <h3 class="order_review_heading">Your Order</h3>
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                    <tr>
                                        <th class="product-name">Product</th>
                                        <th class="product-total">Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                        <?php

                                        $datacart=Cart::content();
                    
                                        ?>

                                    <?php foreach($datacart as $datacart) { ?>
   

                                    <tr class="cart_item">
                                        <td class="product-name">
                                            <strong class="product-quantity">{{$datacart->qty}} ×</strong> {{$datacart->name}}&nbsp;
                                        </td>
                                        <td class="product-total">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$datacart->price}}</span>
                                        </td>
                                    </tr>

                                <?php } ?>
                                    
                                   
                                
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{Cart::subtotal()}}</span>
                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td>
                                            <strong>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{Cart::total()}}</span>
                                            </strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- /.woocommerce-checkout-review-order-table -->
                            <div class="woocommerce-checkout-payment" id="payment">
                              <!--  <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_bacs">
                                        <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">
                                        <label for="payment_method_bacs">Direct bank transfer</label>
                                        
                                    </li>
                                    <li class="wc_payment_method payment_method_cheque">
                                        <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">
                                        <label for="payment_method_cheque">Check payments </label>
                                        
                                    </li>
                                    <li class="wc_payment_method payment_method_cod">
                                        <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">
                                        <label for="payment_method_cod">Cash on delivery </label>
                                        
                                    </li>
                                </ul> -->
                                <div class="form-row place-order">
                                    
                                   
                                    <input type="submit" class="button wc-forward text-center" value="Save Shipping">
                                </div>
                            </div>
                            <!-- /.woocommerce-checkout-payment -->
                        </div>
                        <!-- /.order-review-wrapper -->
                    </div>
                    <!-- .woocommerce-checkout-review-order -->
                </form>

          

            <?php } ?>
                <!-- .woocommerce-checkout -->
            </div>
            <!-- .woocommerce -->
        </div>
        <!-- .entry-content -->
    </div>
    <!-- #post-## -->



@endsection