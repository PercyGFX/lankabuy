@extends('layout')
@section('content')

<?php $shipping_id=Session::get('shipping_id'); ?>

<?php if ($shipping_id == NULL) { ?>

    <h3> There's nothing here. please go and add some products </h3>

<?php }else { ?>

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
        <form method="post" action="/order-payment">
            @csrf
        <div class="woocommerce-checkout-payment" id="payment">
            <ul class="wc_payment_methods payment_methods methods">
                <li class="wc_payment_method payment_method_bacs">
                    <input type="radio" data-order_button_text="" checked="checked" value="bank" name="payment_method" class="input-radio" id="payment_method_bacs">
                    <label for="payment_method_bacs">Direct bank transfer</label>
                    
                </li>
                <li class="wc_payment_method payment_method_cheque">
                    <input type="radio" data-order_button_text="" value="check" name="payment_method" class="input-radio" id="payment_method_cheque">
                    <label for="payment_method_cheque">EZ Cash</label>
                    
                </li>
                <li class="wc_payment_method payment_method_cod">
                    <input type="radio" data-order_button_text="" value="cashondelivery" name="payment_method" class="input-radio" id="payment_method_cod">
                    <label for="payment_method_cod">Cash on delivery </label>
                    
                </li>
            </ul>
            <div class="form-row place-order">
                
                <input type="submit" value="Place Order" class="button wc-forward text-center">
            </div>
        </div>

    </form>
        <!-- /.woocommerce-checkout-payment -->
    </div>
    <!-- /.order-review-wrapper -->
</div>

<?php } ?>

@endsection