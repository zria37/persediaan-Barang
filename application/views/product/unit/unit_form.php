<section class="content-header">
      <h1> Unit
        <small>Satuan Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Units</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class ="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Unit</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('unit')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class ="box-body">
         <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <form action="<?=site_url('unit/process')?>" method="post">
                  <div class="form-group">
                    <label> Unit Name *</label>
                    <input type="hidden" name="id" value="<?=$row->unit_id?>">
                    <input type="text" name="unit_name" value="<?= $row->name?>" class="form-control"required>  
                  </div><br>
                    <div class="form-group">
                        <button type="submit"  name="<?=$page?>"class="btn btn-success btn-flat">
                        <i class="fa fa-save"></i> Save
                        </button>
                        <button type="Reset" class="btn  btn-flat">Reset</button>
                    </div>
                </form>
            </div>
         </div>
        </div>
    </div>

</section>