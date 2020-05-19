<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/contact.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/cart.css') ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</br></br></br></br>

<!-- Cart Info -->
<div class="container">
<div class="cart_info">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Column Titles -->
                <div class="cart_info_columns clearfix">
                    <div class="cart_info_col cart_info_col_product">Product</div>
                    <div class="cart_info_col cart_info_col_price">Price</div>
                    <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                    <div class="cart_info_col cart_info_col_total">Total</div>
                </div>
            </div>
        </div>
        <div class="row cart_items_row">
            <div class="col">

                Cart Item
                <?php $total = 0; ?>
                <?php if (sizeof($cart) > 0) {
                    foreach ($cart as $row) { ?>
                        <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                            <!-- Name -->
                            <?php $url = $row['product_id'] ?>
                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                <div class="cart_item_image">
                                    <div><img src="<?php echo getProductPictureFromId($row['product_id']) ?>" alt=""></div>
                                </div>
                                <div class="cart_item_name_container">
                                    <div class="cart_item_name"><a href="<?php echo base_url('Productdetail/' . $url) ?>"><?php echo getProductNameFromId($row['product_id']) ?></a></div>
                                    <div class="cart_item_edit"><a href="<?php echo base_url('Cart/clearsome/' . $row['product_id']) ?>">Delete Product &nbsp;&nbsp; <i class="fas fa-trash-alt btn btn-danger"></i></a></div>
                                </div>
                            </div>
                            <!-- Price -->
                            <?php $x = getProductPriceFromId($row['product_id']) ?>
                            <div class="cart_item_price">$ <?php echo number_format($x) ?></div>
                            <?php $priceEach = getProductPriceFromId($row['product_id']); ?>
                            <!-- Quantity -->
                            <div class="cart_item_quantity">
                                <div class="product_quantity_container">
                                    <div class="product_quantity clearfix">
                                        <span>Qty</span>
                                        <input name="quantity_input" type="text" pattern="[0-9]*" value="<?php echo $row['quantity'] ?>">
                                        <div class="quantity_buttons">
                                            <div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                            <div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Total -->
                            <div class="cart_item_total">$ <?php echo number_format($row['quantity'] * $priceEach) ?></div>
                            <?php $total += $row['quantity'] * $priceEach; ?>
                        </div>
                <?php }
                } ?>

            </div>
        </div>
        <div class="row row_cart_buttons">
            <div class="col">
                <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                    <div class="cart_buttons_right ml-lg-auto">
                        <div class="button continue_shopping_button"><a href="<?php echo base_url('Search/') ?>">Continue shopping</a></div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br>
        <hr>
        <div class="row row_extra">
            <div class="col-lg-4">

                <!-- Coupon Code -->
                <div class="coupon">
                    <div class="section_title"></div>
                    <div class="section_subtitle"></div>
                    <div class="coupon_form_container">
                        <form action="#" id="coupon_form" class="coupon_form">
                            <input type="text" class="coupon_input" required="required" style="display:none;">
                            <button class="button coupon_button" style="display:none;"></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 offset-lg-2">
                <div class="cart_total">
                    <div class="section_title">Cart total</div>
                    <div class="section_subtitle">Final total info</div>
                    <?php $shipPrice = 0; ?>
                    <form action="<?php echo base_url('Cart/checkout/') ?>" method="post">
                        <div class="cart_total_container">
                            <ul>
                                <li class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                                    <div class="cart_total_title">Total</div>
                                    <div class="cart_total_value ml-auto">$ <?php echo number_format($total) ?></div>
                                </li>
                            </ul>
                        </div>
                        <!-- <div><button class="button checkout_button" type="submit"><i class="fas fa-search"></i> SEARCH</span>Proceed to checkout</button></div> -->
                       



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        var radioValue = $("input[name='radioName']:checked").val();
        $('#display').text(radioValue);
        $('#display1').val(radioValue);
        var shipping = parseInt(radioValue);
        var subtotal = parseInt(<?php echo ($total) ?>);
        var total = subtotal + shipping;
        $('#total').text(total);
        $('#total1').val(total);

        $("input[type='radio']").click(function() {
            var radioValue = $("input[name='radioName']:checked").val();

            $('#display').text(radioValue);
            $('#display1').val(radioValue);
            var shipping = parseInt(radioValue);
            var subtotal = parseInt(<?php echo ($total) ?>);
            var total = subtotal + shipping;
            $('#total').text(total);
            $('#total1').val(total);

        });
    });

    // $("#myForm").load(function() {
    //     // Handler for .load() called.
    //     alert("dfsdfs");
    // });
    // // var radioValue = $("input[name='radioName']:checked").val();
    // var radioValue = 0;

    // $('#display').text(radioValue);
    // var shipping = parseInt(radioValue);
    // var subtotal = parseInt(<php echo ($total) ?>);
    // var total = subtotal + shipping;
    // $('#total').text(total);
</script>
<style>
    .buttons {
        width: 555px;
        height: 65px;
        background: none;
        text-align: center;
        border: solid 2px #1b1b1b;
        overflow: hidden;
        cursor: pointer;
    }
</style>