@extends('layout')
@section('content')


<div class="type-page hentry">
    <div class="entry-content">
        <div class="woocommerce">
            <div class="customer-login-form">
                <span class="or-text">or</span>
                <div id="customer_login" class="u-columns col2-set">
                    <div class="u-column1 col-1">
                        <h2>Login</h2>
                        <form method="post" action="/customer-login" class="woocomerce-form woocommerce-form-login login">
                            @csrf
                            <p class="before-login-text">
                              Login here, if you already have an account.
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="username">Username or email address
                                    <span class="required">*</span>
                                </label>
                                <input type="text" class="input-text" name="cus_email" id="username" value="" />
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="password">Password
                                    <span class="required">*</span>
                                </label>
                                <input class="input-text" type="password" name="cus_password" id="password" />
                            </p>
                            <p class="form-row">
                                <input class="woocommerce-Button button" type="submit" value="Login" name="login">
                                
                            </p>
                            <p class="woocommerce-LostPassword lost_password">
                                <a href="#">Lost your password?</a>
                            </p>
                        </form>
                        <!-- .woocommerce-form-login -->
                    </div>
                    <!-- .col-1 -->
                    <div class="u-column2 col-2">
                        <h2>Register</h2>
                        <form class="register" action="/customer-register" method="post">
                            @csrf
                            <p class="before-register-text">
                             Create an new account and receive all benefits.
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_email">Email address
                                    <span class="required">*</span>
                                </label>
                                <input type="email" value="" id="reg_email" name="cus_email" class="woocommerce-Input woocommerce-Input--text input-text">
                            </p>
                           
                            <p class="form-row form-row-wide">
                                <label for="reg_password">Password
                                    <span class="required">*</span>
                                </label>
                                <input type="password" id="reg_password" name="cus_password" class="woocommerce-Input woocommerce-Input--text input-text">
                            </p>

                            <p class="form-row form-row-wide">
                                <label for="reg_email">Full Name
                                    <span class="required">*</span>
                                </label>
                                <input type="text" value="" id="reg_email" name="cus_fullname" class="woocommerce-Input woocommerce-Input--text input-text">
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="reg_email">Phone Number
                                    <span class="required">*</span>
                                </label>
                                <input type="number" value="" id="reg_email" name="cus_phone" class="woocommerce-Input woocommerce-Input--text input-text">
                            </p>


                            <p class="form-row">
                                <input type="submit" class="woocommerce-Button button" name="register" value="Register" />
                            </p>
                            <div class="register-benefits">
                                <h3>Sign up today and you will be able to :</h3>
                                <ul>
                                    <li>Speed your way through checkout</li>
                                    <li>Track your orders easily</li>
                                    <li>Keep a record of all your purchases</li>
                                </ul>
                            </div>
                        </form>
                        <!-- .register -->
                    </div>
                    <!-- .col-2 -->
                </div>
                <!-- .col2-set -->
            </div>
            <!-- .customer-login-form -->
        </div>
        <!-- .woocommerce -->
    </div>
    <!-- .entry-content -->
</div>
<!-- .hentry -->



@endsection