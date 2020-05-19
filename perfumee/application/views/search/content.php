<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/styles/cart.css') ?>">
<div class="home">
    <div class="home_container">
        <div class="home_background" style="background-image:url(<?php echo base_url('public/images/contact.jpg')?>)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo base_url('home')?>">Home</a></li>
                                    <li>Search</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/>
<br/>
<br/>
<div class="products">
    <div class="container">
            <form action="get">
                <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" name="product_name" class="form-control contact_input" placeholder="Search by Product name" value="<?php echo $product_name;?>">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <select class=" contact_input" name="categories_id">
                                    <option value="">Choose Categories</option>
                                    <?php foreach ($categories as $key => $row) {?>
                                        <option value="<?php echo $row['categories_id'] ?>" <?php echo ($categories_id==$row['categories_id'])?'selected':''; ?>><?php echo $row['categories_name']?></option>
                                    <?php }?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                        <button  type="submit" class="button contact_button"name="search"  value="search"><span><i class="fas fa-search"></i> SEARCH</span></button>
                            <!-- <button type="submit" name="search" class="btn btn-primary btn-block" value="search"><i class="fas fa-search"></i> ค้นหา</button> -->
                        </div>
                </div>
            </form>    
            <div class="row">
                <div class="col">
                    <!-- Product Sorting -->
                    <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
                        <div class="results">Showing <span><?php echo sizeof($products); ?></span> results</div>
                        <div class="sorting_container ml-md-auto">
                            <div class="sorting">
                                <ul class="item_sorting">
                                    <li>
                                        <span class="sorting_text">Sort by</span>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <ul>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                                            <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                            <!-- <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li> -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_grid">
                        <!-- Product -->
                        <?php foreach ($products as $row) { ?>
                            <?php $url=$row['product_id']?>
                            <div class="product">
                                <a href="<?php echo base_url('Productdetail/'.$url)?>">
                                <div class="product_image img-resize"><img src="<?php echo $row['picture'] ?>" alt=""></div>
                                <div class="product_extra product_sale"><a href="categories.php">Sale</a></div>
                                <div class="product_content">
                                    <div class="product_title"><a href="<?php echo base_url('Productdetail/'.$url)?>"><?php echo $row['product_name'] ?></div>
                                    <div class="product_price">$<?php echo $row['buyPrice'] ?></div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <div class="product_pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>
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