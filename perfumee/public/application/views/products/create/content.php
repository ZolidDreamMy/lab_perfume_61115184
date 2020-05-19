<div class="products">
    <div class="container">
        <h2>สร้างสินค้า</h2>
        <hr>
        <form method="post" action="<?php echo base_url('products/save');?>">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>ชื่อสินค้า</label><span class="text-danger">*</span>
                        <input type="text" name="product_name" class="form-control" placeholder="ชื่อสินค้า" required>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>ราคาต่อชิ้น</label><span class="text-danger">*</span>
                        <input type="number" name="buyPrice" class="form-control" placeholder="ราคาต่อชิ้น" min="0" required>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>หมวดหมู่</label><span class="text-danger">*</span>
                        <select class="form-control" name="categories_id">
                            <option value="">เลือกหมวดหมู่</option>
                            <?php foreach ($categories as $key => $row) {?>
                                        <option value="<?php echo $row['categories_id'] ?>"><?php echo $row['categories_name']?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>รหัสสินค้า</label><span class="text-danger">*</span>
                        <input type="text"  name="product_id" class="form-control" placeholder="รหัสสินค้า" required>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>ร้านที่ขาย</label><span class="text-danger">*</span>
                        <input type="text" name="product_vendor" class="form-control" placeholder="ร้านที่ขาย" required>
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>จำนวน</label><span class="text-danger">*</span>
                        <input type="number" name="quantityInStock"  class="form-control" placeholder="จำนวน" min="0" required>
                    </div> 
                </div>
            </div>
            <p class="text-center"><button type="submit" class="btn btn-success"><i class="far fa-save"></i>  บันทึก</button></p>
        </form>
    </div>
</div>