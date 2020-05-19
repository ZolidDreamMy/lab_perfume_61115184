<div class="avds">
	<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
		<div class="avds_small">
			<div class="avds_background" style="background-image:url(<?php echo base_url('public/images/avds_small.jpg') ?>)"></div>
			<div class="avds_small_inner">
				<div class="avds_discount_container">
					<img src="images/discount.png" alt="">
					<div>
						<div class="avds_discount">
							<div>20<span>%</span></div>
							<div>Discount</div>
						</div>
					</div>
				</div>
				<div class="avds_small_content">
					<div class="avds_title">Smart Phones</div>
					<div class="avds_link"><a href="categories.html">See More</a></div>
				</div>
			</div>
		</div>
		<div class="avds_large">
			<div class="avds_background" style="background-image:url(<?php echo base_url('public/images/avds_large.jpg') ?>)"></div>
			<div class="avds_large_container">
				<div class="avds_large_content">
					<div class="avds_title">Professional Cameras</div>
					<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
					<div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">
				<h3 id="rec"> Recommend</h3>
				<h4 id="rec1"> _________________________________________________________</h4>
				<style>
					#rec {
						font-family: 'Poppins', sans-serif;
						text-align: center;
					}

					#rec1 {
						text-align: center;
					}
				</style>
			</div>
		</div>
	</div>
</div>
<div class="products">
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="product_grid">

					<!-- Product -->
					<div class="product">
						<div class="product_image"><img src="<?php echo base_url('public/images/product_1.jpg') ?>" alt=""></div>
						<div class="product_extra product_new"><a href="<?php echo base_url('categories/1') ?>">New</a></div>
						<div class="product_content">
							<div class="product_title"><a href="<?php echo base_url('product/') ?>">Smart Phone</a></div>
							<div class="product_price">$670</div>
						</div>
					</div>

					<!-- Product -->
					<div class="product">
						<div class="product_image"><img src="<?php echo base_url('public/images/product_2.jpg') ?>" alt=""></div>
						<div class="product_extra product_sale"><a href="<?php echo base_url('categories/1') ?>">Sale</a></div>
						<div class="product_content">
							<div class="product_title"><a href="<?php echo base_url('product/') ?>">Loudspeaker</a></div>
							<div class="product_price">$670</div>
						</div>
					</div>

					<!-- Product -->
					<div class="product">
						<div class="product_image"><img src="<?php echo base_url('public/images/product_3.jpg') ?> " alt=""></div>
						<div class="product_content">
							<div class="product_title"><a href="<?php echo base_url('product/') ?>">Charging Cable</a></div>
							<div class="product_price">$670</div>
						</div>
					</div>

					<div class="product">
						<div class="product_image"><img src="<?php echo base_url('public/images/product_4.jpg') ?>" alt=""></div>
						<div class="product_content">
							<div class="product_title"><a href="<?php echo base_url('product/') ?>">Laptop</a></div>
							<div class="product_price">$670</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Icon Boxes -->

<div class="icon_boxes">
	<div class="container">
		<div class="row icon_box_row">

			<!-- Icon Box -->
			<div class="col-lg-4 icon_box_col">
				<div class="icon_box">
					<div class="icon_box_image"><img src="(<?php echo base_url('public/images/icon_1.svg') ?>)" alt=""></div>
					<div class="icon_box_title">Free Shipping Worldwide</div>
					<div class="icon_box_text">
						<p>ทำการจัดส่งฟรีทั่วประเทศ เมื่อครบกำหนดตามยอดเป้าหมาย</p>
					</div>
				</div>
			</div>

			<!-- Icon Box -->
			<div class="col-lg-4 icon_box_col">
				<div class="icon_box">
					<div class="icon_box_image"><img src="(<?php echo base_url('public/images/icon_2.svg') ?>)" alt=""></div>
					<div class="icon_box_title">Free Returns</div>
					<div class="icon_box_text">
						<p>สามารถคืนสินค้าได้ในระยะเวลา 7 วัน หากสินค้าชำรุดหรือมีปัญหา</p>
					</div>
				</div>
			</div>

			<!-- Icon Box -->
			<div class="col-lg-4 icon_box_col">
				<div class="icon_box">
					<div class="icon_box_image"><img src="(<?php echo base_url('public/images/icon_3.svg') ?>)" alt=""></div>
					<div class="icon_box_title">24h Fast Support</div>
					<div class="icon_box_text">
						<p>สามารถพูดคุยสอบถามปัญหากับเจ้าหน้าที่ได้ตลอด 24 ชั่วโมง</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<!-- Newsletter -->

<div class="newsletter">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="newsletter_border"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="newsletter_content text-center">
					<div class="newsletter_title">Subscribe to our newsletter</div>
					<div class="newsletter_text">
						<p>กดติดตามเพื่อรับข่าวสารเพิ่มเติม เพื่อที่ท่านจะได้ไม่พลาดข่าวสารใหม่จากทางเรา</p>
					</div>
					<div class="newsletter_form_container">
						<form action="#" id="newsletter_form" class="newsletter_form">
							<input type="email" class="newsletter_input" required="required">
							<button class="newsletter_button trans_200"><span>Subscribe</span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>