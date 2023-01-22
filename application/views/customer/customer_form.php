<section class="content-header">
      <h1> Sales
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Sales</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class ="box-header">
            <h3 class="box-title"><?=ucfirst($page)?> Sales</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('customer')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class ="box-body">
         <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
                <form action="<?=site_url('customer/process')?>" method="post">
                  <div class="from-group">
                    <label> Sales Name *</label>
                    <input type="hidden" name="id" value="<?=$row->customer_id?>">
                    <input type="text" name="customer_name" value="<?= $row->name?>" class="form-control"required>  
                  </div>
                  <div class="from-group">
                    <label> Gender *</label>
                    <select name="gender" class="form-control" required>
                    <option value="">-pilih-</option>
                    <option value="L"<?=$row->gender == 'L' ? 'selected' : '' ?>>Laki-Laki</option>
                    <option value="P"<?=$row->gender == 'P' ? 'selected' : '' ?>>perempuan</option>
                    </select>
                  </div>
                  <div class="from-group">
                    <label> Phone *</label>
                    <input type="number" name="phone" value="<?= $row->phone?>" class="form-control"required>  
                  </div>
                  <div class="from-group">
                    <label> Address *</label>
                    <textarea name="addr" class="form-control"required> <?= $row->address?></textarea>
                  </div><br>
                    <div class="from-group">
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