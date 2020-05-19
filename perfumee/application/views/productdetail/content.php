<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/product.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/product_responsive.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/cart.css') ?>">
<div class="home">
	<div class="home_container">
		<div class="home_background" style="background-image:url(<?php echo base_url('public/images/contact.jpg') ?>)"></div>
		<div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="breadcrumbs">
								<ul>
									
									<li><?php echo ($products[0]['product_name']) ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Product Details -->

<div class="product_details">
	<div class="container">
		<div class="row details_row">

			<!-- Product Image -->
			<div class="col-lg-6">
				<div class="details_image">
				
					<div class="details_image_large"><img src="<?php echo ($products[0]['picture']) ?>" alt="">
						<div class="product_extra product_new"><a href="categories.html">New</a></div>
					</div>
					<!-- <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
							<div class="details_image_thumbnail active" data-image="<php echo base_url('public/images/cam1.jpg')?>"><img src="<?php echo base_url('public/images/cam1.jpg') ?>" alt=""></div>
							<div class="details_image_thumbnail " data-image="<php echo base_url('public/images/cam2.jpg')?>"><img src="<?php echo base_url('public/images/cam2.jpg') ?>" alt=""></div>
							<div class="details_image_thumbnail " data-image="<php echo base_url('public/images/cam3.jpg')?>"><img src="<?php echo base_url('public/images/cam3.jpg') ?>" alt=""></div>
							<div class="details_image_thumbnail " data-image="<php echo base_url('public/images/cam4.jpg')?>"><img src="<?php echo base_url('public/images/cam4.jpg') ?>" alt=""></div>
						
						</div> -->
				</div>
			</div>

			<!-- Product Content -->
			<div class="col-lg-6">
				<div class="details_content">
					<div class="details_name"><?php echo ($products[0]['product_name']) ?></div>
					<!-- <div class="details_discount">$75000</div> -->
					<div class="details_price">$ <?php echo number_format($products[0]['buyPrice']) ?></div>

					<!-- In Stock -->

					<div class="details_text">
						
							<form method="post" action="<?php echo base_url('products/addToCart'); ?>">
								<input type="hidden" name="product_id" class="form-control" value="<?php echo ($products[0]['product_id']) ?>">
								<input type="hidden" name="buyPrice" class="form-control" value="<?php echo ($products[0]['buyPrice']) ?>">
		
					</div>
				
					<div class="product_quantity_container">
						<div class="product_quantity clearfix">
							<span>Qty</span>
							<input name="quantity" id="quantity_input" type="text" pattern="[0-9]*" value="1">
							<div class="quantity_buttons">
								<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
								<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
							</div>
						</div>
						<!-- <div class="button cart_button"><a href="<php echo base_url('cart')?>">Add to cart</a></div> -->
						<button type="submit" class="button contact_button"><span><strong>Add to cart</strong> </span></button>
						</form>

					</div>

				</div>
			</div>
		</div>

		
	</div>
</div>

<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/product.js"></script>
<style type="text/css">
	.img-resize img {
		width: 170px;
		height: auto;
	}

	.img-resize {
		width: 170px;
		height: 170px;
		overflow: hidden;
		text-align: center;
	}
</style>