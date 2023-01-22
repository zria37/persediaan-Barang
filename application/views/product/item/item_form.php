<section class="content-header">
      <h1> Item
        <small>Data Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Items</li>
      </ol>
</section>
<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>
    <div class="box">
        <div class ="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Item</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('item')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class ="box-body">
         <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <?php echo form_open_multipart('item/process') ?>
                  <div class="form-group">
                    <label> ID Barcode *</label>
                    <input type="hidden" name="id" value="<?=$row->item_id?>">
                    <input type="text" name="barcode" value="<?= $row->barcode?>" class="form-control"required>  
                  </div>
                  <div class="form-group">
                    <label for="product_name"> Product Name *</label>
                    <input type="text" name="product_name" id="product_name" value="<?= $row->name?>" class="form-control"required>  
                  </div>
                  <div class="form-group">
                    <label> Category *</label>
                    <select name="category" class="form-control" required>
                        <option value="">-pilih-</option>
                        <?php foreach($category->result() as $key =>$data){ ?>
                        <option value="<?=$data->category_id?>"<?=$data->category_id== $row->category_id ?"selected" : null ?>><?=$data->name?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label> Unit *</label>
                    <?php echo form_dropdown('unit', $unit, $selectedunit,
                        ['class'=> 'form-control','required'=> 'required']) ?>
                  </div>
                  <div class="form-group">
                    <label> Price *</label>
                    <input type="number" name="price" value="<?= $row->price?>" class="form-control"required>  
                  </div>
                  <!-- <div class="form-group">
                    <label> Harga Beli *</label>
                    <input type="number" name="purchase_price" value="<?= $row->purchase_price?>" class="form-control"required>  
                  </div>
                  <div class="form-group">
                    <label> profit *</label>
                    <input type="number" name="profit" value="<?= $row->profit?>" class="form-control"required>  
                  </div> -->
                  <div class="form-group">
                    <label> Image</label>
                    <?php if($page == 'edit') {
                        if($row->image !=null) { ?>
                          <div style="margin-bottom:4px">
                             <img src="<?php echo base_url('uploads/product/'.$row->image)?>" style= "width : 80%">
                          </div>
                        <?php
                        }
                    } ?>
                    <input type="file" name="image"  class="form-control">  
                    <small>(Biarkan kosong jika tidak <?= $page == 'edit' ? 'diganti' : 'ada'?>)</small>
                  </div>
                    <div class="from-group">
                        <button type="submit"  name="<?=$page?>"class="btn btn-success btn-flat">
                        <i class="fa fa-save"></i> Save
                        </button>
                        <button type="Reset" class="btn  btn-flat">Reset</button>
                    </div>
                <?php echo form_close() ?>
            </div>
         </div>
        </div>
    </div>

</section>