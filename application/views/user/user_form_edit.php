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
            <h3 class="box-title">Edit User</h3>
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
                  <div class="from-group <?php echo form_error('fullname')? 'has-error' : null?>">
                    <label>Name *</label>
                    <input type="hidden" name="user_id" value="<?php echo $row->user_id?>">
                    <input type="text" name="fullname" value="<?php echo $this->input->post('fullname')?? $row->name?>" class="form-control"> 
                     <?php echo form_error('fullname')?>
                  </div>
                  <div class="from-group <?php echo form_error('username')? 'has-error' : null?>">
                    <label>Username*</label>
                    <input type="text" name="username" value="<?php echo $this->input->post('username')?? $row->username?>" class="form-control"> 
                    <?php echo form_error('username')?>
                  </div> <br>
                  <div class="from-group <?php echo form_error('password')? 'has-error' : null?>">
                    <label>Password</label><small>(Biarkan Kosong jika tidak di ganti)</small>
                    <input type="password" name="password"  value="<?php echo $this->input->post('password')?>" class="form-control"> 
                    <?php echo form_error('password')?>
                  </div><br>
                  <div class="from-group <?php echo form_error('passconf')? 'has-error' : null?>">
                    <label>Password Confirmation</label>
                    <input type="password" name="passconf" value="<?php echo $this->input->post('passconf')?>" class="form-control"> 
                    <?php echo form_error('passconf')?>
                  </div>
                  <div class="from-group">
                    <label>Address </label>
                    <textarea name="address" class="form-control"><?php echo $this->input->post('address')?? $row->address?></textarea>
                    <?php echo form_error('address')?>
                  </div>
                  <div class="from-group <?php echo form_error('level')? 'has-error' : null?>">
                    <label>Level*</label>
                    <select name="level" class="form-control"> 
                    <?php $level= $this->input->post('level') ?  $this->input->post('level') : $row->level?>
                        <option value="1" >Admin</option>
                        <option value="2"<?=$level == 2 ?'selected' : null ?>>gudang</option>
                    </select>
                    <?php echo form_error('level')?>
                  </div><br>
                    <div class="from-group">
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