<!-- Home -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/contact.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/cart.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/checkout.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/checkout_responsive.css') ?>">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url('public/styles/js/checkout.js') ?>"></script>

<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url('public/images/cart.jpg') ?>)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo base_url('home') ?>">Home</a></li>
                                    <li><a href="<?php echo base_url('cart') ?>">Shopping Cart</a></li>
                                    <li>Checkout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Checkout -->

<div class="checkout">
    <div class="container">
        <div class="row">

            <!-- Billing Info -->
            <div class="col-lg-6">
                <div class="billing checkout_section">
                    <div class="section_title">Billing Address</div>
                    <div class="section_subtitle">Enter your address info</div>
                    <div class="checkout_form_container">
                        <form action="<?php echo base_url('cart/placeorder'); ?>" id="checkout_form" class="checkout_form" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <!-- Name -->
                                    <label for="checkout_name">First Name*</label>
                                    <input type="text" name="checkout_name" class="checkout_input" required="required">
                                </div>
                                <div class="col-xl-6 last_name_col">
                                    <!-- Last Name -->
                                    <label for="checkout_last_name">Last Name*</label>
                                    <input type="text" name="checkout_last_name" class="checkout_input" required="required">
                                </div>
                            </div>
                            
                            <div>
                                <!-- Address -->
                                <label for="checkout_address">Address*</label>
                                <input type="text" name="checkout_address" class="checkout_input" required="required">
                            </div>
                            <div>
                                <!-- Country -->
                                <label for="checkout_country">Country*</label>
                                <input type="text" name="checkout_country" class="checkout_input" required="required">
                            </div>
                            <div>
                                <!-- Zipcode -->
                                <label for="checkout_zipcode">Zipcode*</label>
                                <input type="text" name="checkout_zipcode" class="checkout_input" required="required">
                            </div>
                            
                            <div>
                                <!-- Phone no -->
                                <label for="checkout_phone">Phone no*</label>
                                <input type="phone" name="checkout_phone" class="checkout_input" required="required">
                            </div>
                            
                            <!-- <div class="checkout_extra">
                                <div>
                                    <input type="checkbox" id="checkbox_terms" name="regular_checkbox" class="regular_checkbox" checked="checked">
                                    <label for="checkbox_terms"><img src="images/check.png" alt=""></label>
                                    <span class="checkbox_title">Terms and conditions</span>
                                </div>
                                <div>
                                    <input type="checkbox" id="checkbox_account" name="regular_checkbox" class="regular_checkbox">
                                    <label for="checkbox_account"><img src="images/check.png" alt=""></label>
                                    <span class="checkbox_title">Create an account</span>
                                </div>
                                <div>
                                    <input type="checkbox" id="checkbox_newsletter" name="regular_checkbox" class="regular_checkbox">
                                    <label for="checkbox_newsletter"><img src="images/check.png" alt=""></label>
                                    <span class="checkbox_title">Subscribe to our newsletter</span>
                                </div>
                            </div> -->
                            
                        </form>
                    </div>
                </div>
            </div>

            <!-- Order Info -->

            <div class="col-lg-6">
                <div class="order checkout_section">
                    <div class="section_title">Your order</div>
                    <div class="section_subtitle">Order details</div>

                    <?php $shipPrice = 0; ?>
                    <!-- Order details -->
                    <div class="order_list_container">
                        <div class="order_list_bar d-flex flex-row align-items-center justify-content-start">
                            <div class="order_list_title">Product</div>
                            <div class="order_list_value ml-auto">Total</div>
                        </div>
                        <ul class="order_list">
                            <?php $subtotal = 0 ?>
                            <?php foreach ($cart as $row) { ?>
                                <?php for ($x = 0; $x < $row['quantity']; $x++) { ?>
                                    <li class="d-flex flex-row align-items-center justify-content-start">
                                        <div class="order_list_title"> <?php echo getProductNameFromId($row['product_id']); ?></div>
                                        <div class="order_list_value ml-auto">$ <?php echo getProductPriceFromId($row['product_id']) ?></div>
                                    </li>
                                <?php } ?>
                                <?php $subtotal += getProductPriceFromId($row['product_id']) * ($row['quantity']) ?>
                            <?php } ?>
                            <li class="d-flex flex-row align-items-center justify-content-start">
                                <div class="order_list_title">Total</div>
                                <div class="order_list_value ml-auto">$ <?php echo number_format($subtotal) ?></div>
                            </li>
                           
                        </ul>
                    </div>

                    <!-- Payment Options -->
                    <div class="payment">
                        <div class="payment_options">
                            <label class="payment_option clearfix">Paypal
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="payment_option clearfix">Credit card
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="payment_option clearfix">Direct bank transfer
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <!-- Order Text -->
                    <div class="order_text"> </div>
                    <button  type="submit" class="button contact_button buttons" form="checkout_form"><span> <strong>place order </strong></span></button>
                    <!-- <div type="submit" class="button order_button" form="checkout_form">Place Order</a></div> -->
                    <!-- <a href="#"> -->
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .buttons {
    width: 441px;
    height: 60px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b;
    overflow: hidden;
    cursor: pointer;
}
</style>