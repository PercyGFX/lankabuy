@extends('layout')
@section('content')


                          
<div class="type-page hentry">
    <div class="entry-content">
        <div class="woocommerce">
            <div class="cart-wrapper">

                    <?php if (Cart::count()>0) { ?>

                <form method="post" action="/update-cart" class="woocommerce-cart-form">
                    @csrf
                    <?php

                    $datacart=Cart::content();

                   

                    ?>
              
                   
               

                    <table class="shop_table shop_table_responsive cart">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Cart Foreach -->
                           <?php foreach($datacart as $datacart) { ?>
                            <tr>
                                <td class="product-remove">
                                <a class="remove" href="">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#">
                                        <img width="180" height="180" alt="" class="wp-post-image" src="#">
                                    </a>
                                </td>
                                <td data-title="Product" class="product-name">
                                    <div class="media cart-item-product-detail">
                                        <a href="/view_product/{{$datacart->id}}">
                                            <img width="180" height="180" alt="" class="wp-post-image" src="{{$datacart->options->image}}">
                                        </a>
                                        <div class="media-body align-self-center">
                                            <a href="/view_product/{{$datacart->id}}">{{$datacart->name}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td data-title="Price" class="product-price">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$datacart->price}}
                                    </span>
                                </td>
                                <td class="product-quantity" data-title="Quantity">
                                    <div class="quantity">
                                        <label for="quantity-input-1">Quantity</label>
                                    <input type="hidden" name="rowid[]" value="{{$datacart->rowId}}">
                                        <input id="quantity-input-1" type="number" name="quantity[]" value="{{$datacart->qty}}" title="Qty" class="input-text qty text" size="4">
                                    </div>
                                </td>
                                <td data-title="Total" class="product-subtotal">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$datacart->total}}
                                    </span>
                                    <a title="Remove this item" class="remove" href="{{URL::to('/remove-from-cart/'.$datacart->rowId)}}">×</a>
                                </td>
                            </tr>
                           
                               
                        <?php } ?>

                                <td class="actions" colspan="6">
                                    
                                    <input type="submit" value="Update cart" name="update_cart" class="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- .shop_table shop_table_responsive -->
                </form>
                <!-- .woocommerce-cart-form -->
                <div class="cart-collaterals">
                    <div class="cart_totals">
                        <h2>Cart totals</h2>
                        <table class="shop_table shop_table_responsive">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>Subtotal</th>
                                    <td data-title="Subtotal">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">$</span>{{Cart::subtotal()}}</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Tax</th>
                                    <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{Cart::tax()}}</span>
                                        </td>
                                    
                                </tr>
                                <tr class="order-total">
                                    <th>Total</th>
                                    <td data-title="Total">
                                        <strong>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{Cart::total()}}</span>
                                        </strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- .shop_table shop_table_responsive -->
                        <div class="wc-proceed-to-checkout">
                            <p>Free Shipping </p>
                           
                            <!-- .wc-proceed-to-checkout -->
                            <?php $customer_id=Session::get('cus_id'); ?>
                            <?php if($customer_id != NULL) { ?>
                            <a class="checkout-button button alt wc-forward" href="/checkout">Proceed to checkout</a>
                            <?php } else{ ?>

                                <a class="checkout-button button alt wc-forward" href="/login-check">Proceed to checkout</a>

                                <?php } ?>


                           
                            <a class="back-to-shopping" href="/">Back to Shopping</a>
                        </div>

                        <?php } else{ ?>

                          <p>There's nothing here. First go and add some products to cart</p>
                        <?php } ?>
                        <!-- .wc-proceed-to-checkout -->
                    </div>
                    <!-- .cart_totals -->
                </div>
                <!-- .cart-collaterals -->
            </div>
            <!-- .cart-wrapper -->
        </div>
        <!-- .woocommerce -->
    </div>
    <!-- .entry-content -->
</div>
<!-- .hentry -->


@endsection