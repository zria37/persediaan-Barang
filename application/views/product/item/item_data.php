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
            <h3 class="box-title">Data product Item</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('item/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus"></i>Create Product Item
                </a>
            </div>
        </div>
        <div class ="box-body  table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Barcode</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Unit</th>
                        <th>Price</th>
                        <!-- <th>harga beli</th>
                        <th>profit</th> -->
                        <th>Stock</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no =1;
                foreach($row->result() as $key =>$data) { ?>
                     <tr>
                        <td style="width : 5%;"><?=$no++?>.</td>
                        <td>
                            <?php echo $data->barcode?><br>
                            <a href="<?php echo site_url('item/barcode_qrcode/'.$data->item_id)?>"  class="btn btn-default btn-xs">
                                    Generate  <i class="fa fa-barcode"></i>
                                </a>
                        </td>
                        <td><?php echo $data->name?></td>
                        <td><?php echo $data->category_name?></td>
                        <td><?php echo $data->unit_name?></td>
                        <td><?php echo $data->price?></td>
                        <!-- <td><?php echo $data->purchase_price?></td>
                        <td><?php echo $data->profit?></td> -->
                        <td><?php echo $data->stock?></td>
                        <td>
                            <?php if($data->image != null) { ?>
                           <img src="<?php echo base_url('uploads/product/'.$data->image)?>"style="width : 100px">
                            <?php } ?>
                        </td>
                        <td class="text-center" width ="160px">
                            
                                <a href="<?php echo site_url('item/edit/'.$data->item_id)?>"  class="btn btn-primary btn-xs">
                                    <i class="fa fa-pencil"></i>Update
                                </a>
                                <a href="<?php echo site_url('item/del/'.$data->item_id)?>" onclick="return confirm('Apakah Anda Yakin hapus data?')" class="btn btn-danger btn-xs">
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

<script>
  $(document).ready(function(){
      $('#table1').dataTable({
        "processing": true,
        "serverSide": true,
        "ajax" : {
            "url": "<?=site_url('item/get_ajax')?>",
            "type": "POST"
        },
        "columnDefs": [
            {
                "targets": [5,6],
                "className": 'text-right'
            },
            {
                "targets": [7,-1],
                "className": 'text-center'
            },
            {
                "targets": [0, 7, -1],
                "orderable": false
            }
            ],
            "order" : []
      })
  })
</script>