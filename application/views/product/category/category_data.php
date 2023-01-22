<section class="content-header">
      <h1> categories
        <small>kategori Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">categories</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>

    <div class="box">
        <div class ="box-header">
            <h3 class="box-title">Data Categories</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('category/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i>Create
                </a>
            </div>
        </div>
        <div class ="box-body  table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1;
                foreach($row->result() as $key =>$data) { ?>
                     <tr>
                        <td style="width : 5%;"><?=$no++?>.</td>
                        <td><?php echo $data->name?></td>
                        <td class="text-center" width ="160px">
                            
                                <a href="<?php echo site_url('category/edit/'.$data->category_id)?>"  class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Update
                                </a>
                                <a href="<?php echo site_url('category/del/'.$data->category_id)?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>Delete
                                </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>