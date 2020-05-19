<div class="products">
    <div class="container">
            <?php if($this->session->flashdata('success-msg')){?>
            <div class="alert alert-success" role="alert">
                บันทึกสำเร็จ
            </div>
            <?php } ?>
            <form action="get">
                <div class="row">
                        <div class="col-md-2">
                            <a href="<?php echo base_url('products/create')?>" class="btn btn-info btn-block" ><i class="fas fa-plus-circle"></i> สร้างสินค้า</a>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" name="product_name" class="form-control" placeholder="ค้นหาด้วยชื่อสินค้า" value="<?php echo $product_name;?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <select class="form-control" name="categories_id">
                                    <option value="">เลือกหมวดหมู่</option>
                                    <?php foreach ($categories as $key => $row) {?>
                                        <option value="<?php echo $row['categories_id'] ?>" <?php echo ($categories_id==$row['categories_id'])?'selected':''; ?>><?php echo $row['categories_name']?></option>
                                    <?php }?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="search" class="btn btn-primary btn-block" value="search"><i class="fas fa-search"></i> ค้นหา</button>
                        </div>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อสินค้า</th>
                        <th scope="col">ราคา</th>
                        <th scope="col">หมวดหมู่</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $key => $row) {?>
                        <tr>
                            <th scope="row"><?php echo ($key+1)?></th>
                            <td><?php echo $row['product_name']?></td>
                            <td><?php echo $row['buyPrice']?></td>
                            <td><?php echo getCategoriesNameFromId($row['categories_id'])?></td>
                        </tr>
                    <?php }?>    
                    </tbody>
                    </table>
                </div>

            </div>
    </div>
</div>