<section class="content-header">
    <h1>Stock In
        <small>Barang Masuk / Pembelian</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Transaction</li>
        <li class="active">Stock In</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
<?php $this->view('messages') ?>
        <div class ="box-body  table-responsive">
            <table class="table table-bordered table-striped" id="table1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>ID Sale</th>
                        <th>Product Item</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Discount</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1 ; 
                foreach($row as $key =>$data) { ?>
                     <tr>
                        <td style="width : 5%;"><?=$no++?>.</td>
                        <td><?php echo $data->sale_id?></td>
                        <td><?php echo $data->name?></td>
                        <td class="text-center"><?php echo $data->price?></td>
                        <td class="text-center"><?php echo $data->qty?></td>
                        <td class="text-center"><?php echo $data->discount_item?></td>
                        <td class="text-center"><?php echo $data->total?></td>
                        <td class="text-center" width ="160px">
                             <a id="set_dtl" class="btn btn-default btn-xs" 
                             data-toggle="modal" data-target="#modal-detail"
                                data-barcode="<?= $data->sale_id ?>" 
                                data-itemname="<?= $data->name ?>"
                                data-detail="<?= $data->price ?>"
                                data-suppliername="<?= $data->qty ?>"
                                data-qty="<?= $data->discount_item?>"
                                data-qty="<?= $data->total?>">
                                    <i class="fa fa-eye"></i>Detail
                                </a>
                                                       </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</section>

<div class="modal fade" id="modal-detail">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
            <div class="modal-header">
                <button type="submit" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> Stock In Detail</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style=""> ID Sale</th>
                            <td><span id="sale_id"></span></td>
                        </tr>
                        <tr>
                            <th> Product Item</th>
                            <td><span id="item_name"></span></td>
                        </tr>
                        <tr>
                            <th> Price</th>
                            <td><span id="price"></span></td>
                        </tr>
                        <tr>
                            <th> qty</th>
                            <td><span id="supplier_name"></span></td>
                        </tr>
                        <tr>
                            <th> Discount</th>
                            <td><span id="discount_item"></span></td>
                        </tr>
                        <tr>
                            <th> Total </th>
                            <td><span id="total"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>  
<script>
    $(document).ready(function() {
        $(document).on('click', '#set_dtl', function() {
            var sale_id = $(this).data('sale_id');
            var itemname = $(this).data('itemname');
            var detail = $(this).data('detail');
            var suppliername = $(this).data('suppliername');
            var qty = $(this).data('qty');
            var date = $(this).data('date');

  
            $('#sale_id').text(sale_id);
            $('#item_name').text(itemname);
            $('#detail').text(detail);
            $('#supplier_name').text(suppliername);
            $('#qty').text(qty);
            $('#date').text(date);
            $('#detail').text(detail);
        })
    });
</script>