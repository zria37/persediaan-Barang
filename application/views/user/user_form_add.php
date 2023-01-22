<section class="content-header">
      <h1> Users
        <small>Pengguna</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Users</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="box">
        <div class ="box-header">
            <h3 class="box-title">Add Users</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('user')?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class ="box-body">
         <div class="row">
            <div class="col-md-4 col-md-offset-4"> 
            <?php //echo validation_errors() ?>
                <form action="" method="post">
                  <div class="form-group <?php echo form_error('fullname')? 'has-error' : null?>">
                    <label>Name *</label>
                    <input type="text" name="fullname" value="<?php echo set_value('fullname')?>" class="form-control"> 
                     <?php echo form_error('fullname')?>
                  </div>
                  <div class="form-group <?php echo form_error('username')? 'has-error' : null?>">
                    <label>Username*</label>
                    <input type="text" name="username" value="<?php echo set_value('username')?>" class="form-control"> 
                    <?php echo form_error('username')?>
                  </div>
                  <div class="form-group <?php echo form_error('password')? 'has-error' : null?>">
                    <label>Password*</label>
                    <input type="password" name="password"  value="<?php echo set_value('password')?>" class="form-control"> 
                    <?php echo form_error('password')?>
                  </div>
                  <div class="form-group <?php echo form_error('passconf')? 'has-error' : null?>">
                    <label>Password Confirmation*</label>
                    <input type="password" name="passconf" value="<?php echo set_value('passconf')?>" class="form-control"> 
                    <?php echo form_error('passconf')?>
                  </div>
                  <div class="form-group">
                    <label>Address </label>
                    <textarea name="address" class="form-control"><?php echo set_value('address')?></textarea>
                    <?php echo form_error('address')?>
                  </div>
                  <div class="form-group <?php echo form_error('level')? 'has-error' : null?>">
                    <label>Level*</label>
                    <select name="level" class="form-control"> 
                        <option value="">- Pilih -</option>
                        <option value="1"<?php echo set_value('level') == 1 ? "selected": null ?>>Admin</option>
                        <option value="2"<?php echo set_value('level') == 2 ? "selected": null ?>>gudang</option>
                    </select>
                    <?php echo form_error('level')?>
                  </div><br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-flat">
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