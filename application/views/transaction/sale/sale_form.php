<section class="content-header">
    <h1>Sales
        <small>Penjualan</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li >Transaction</li>
        <li class="active">Sales</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                <table width ="100%">
                    <tr>
                        <td style="vertical-align:top"> 
                            <label for="date">Date</label>
                        </td>
                        <td>
                            <div class="form_group">
                                <input type="date" id="date" value="<?=date('Y-m-d')?>" readonly class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top; width:30%"> 
                            <label for="date">Admin</label>
                        </td>
                        <td>
                            <div class="form_group">
                                <input type="text" id="user" value="<?=$this->fungsi->user_login()->name?>" class="form-control" readonly>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top"> 
                            <label for="customer">Sales</label>
                        </td>
                        <td>
                            <div>
                                <select  id="customer" class="form-control">
                                    <option value="">Umum</option>
                                    <?php foreach($customer as $cust => $value) {
                                        echo '<option value="'.$value->customer_id.'">'.$value->name.'</option>';
                                    } ?>    
                                </select>
                            </div>
                        </td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                <table width ="100%">
                    <tr>
                        <td style="vertical-align:top; width:30%"> 
                            <label for="barcode">ID Barcode</label>
                        </td>
                        <td>
                            <div class="form_group input-group">
                                <input type="hidden" id="item_id">
                                <input type="hidden" id="price">
                                <input type="hidden" id="stock">
                                <input type="text" id="barcode" class="form-control" autofocus>
                                <span class ="input-group-btn">
                                    <button type="buttton" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top"> 
                            <label for="qty">Qty</label>
                        </td>
                        <td>
                            <div class="form-group">
                                <input  type=" number" id="qty" value="1" min="1" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td > </td>
                        <td>
                            <div>
                               <button type="button" id="add_cart" class="btn btn-primary">
                                    <i class ="fa fa-cart-plus"></i> Add
                               </button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
            <div class="box box-widget">
                <div class="box-body">
                    <div align="right">
                            <h4>Invoice <b><span id="invoice"><?= $invoice ?></span></b></h4>
                            <h1><b><span id="grand_total2" style="font-size:50pt">0</span></b></h1>
                    </div> 
                </div> 
            </div> 
     </div> 
</div> 

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-widget">
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Barcode</th>
                            <th>product Item</th>
                            <th>price</th>
                            <th>Qty</th>
                            <th width="10%">Discount Item</th>
                            <th width="15%">Total</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    <tbody id ="cart_table">
                        <?php $this->view('transaction/sale/cart_data') ?>
                    </tbody>
                </table>
            </div> 
          </div> 
        </div> 
     </div> 
     <div class="row">
        <div class="col-lg-3">
            <div class="box box-widget">
                <div class="box-body">
                <table width ="100%">
                    <tr>
                        <td style="vertical-align:top; width:30%"> 
                            <label for="sub_total">Sub total</label>
                        </td>
                        <td>
                            <div class="form_group">
                                <input type="number" id="sub_total" value="" class="form-control" readonly>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top"> 
                            <label for="discount">Discount</label>
                        </td>
                        <td>
                            <div class="form_group">
                                <input type="number" id="discount" value="0" min="0" class="form-control">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align:top"> 
                            <label for="grand_total">Grand Total</label>
                        </td>
                        <td>
                            <div class="form_group">
                                <input type="number" id="grand_total" class="form-control" readonly>
                            </div>
                        </td>
                            </tr>
                    </table>
                </div> 
            </div> 
        </div> 

    <div class="col-lg-3">
        <div class="box box-widget">
            <div class="box-body">
            <table width ="100%">
                <tr>
                    <td style="vertical-align:top; width:30%"> 
                        <label for="cash">Cash</label>
                    </td>
                    <td>
                        <div class="form_group">
                            <input type="number" id="cash"  value="0" min="0" class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:top"> 
                        <label for="change">Change</label>
                    </td>
                    <td>
                        <div>
                            <input type="number" id="change"  class="form-control" readonly>
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
    </div>
 </div>
 <div class="col-lg-3">
        <div class="box box-widget">
            <div class="box-body">
            <table width ="100%">
                <tr>
                    <td style="vertical-align:top"> 
                        <label for="note">Note</label>
                    </td>
                    <td>
                        <div>
                            <textarea id="note"  rows="3" class="form-control"></textarea>
                        </div>
                    </td>
                </tr>
            </table> 
        </div>
    </div>
</div>
<div class="col-lg-3">
        <div>
        <button id="cancel_payment" class="btn btn-flat btn-warning">
            <i class ="fa fa-refresh"></i> Cancel
        </button><br><br>
        <button id="process_payment" class="btn btn-flat btn-lg btn-success"> 
            <i class="fa fa-paper-pane-0"></i> Prosess Payment
        </button>
</div>
</div>
</div>
</section>
<!-- Modal ADD-->
<div class="modal fade" id="modal-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="submit" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> Add Product Item</h4>
            </div>
            <div class="modal-body table-responsive">
                <table class="table table-bordered table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-center">Barcode</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Unit</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                        <?php foreach ($item as $i => $data) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data->barcode ?></td>
                                <td><?= $data->name?></td>
                                <td class="text-center"><?= $data->unit_name ?></td>
                                <td class="text-right"><?= indo_currency($data->price); ?></td>
                                <td class="text-center"><?= $data->stock ?></td>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-info" id="select" 
                                    data-id="<?= $data->item_id ?>"
                                     data-barcode="<?= $data->barcode ?>" 
                                    data-price="<?= $data->price ?>" 
                                    data-stock="<?= $data->stock ?>">
                                    <i class="fa fa-check"></i> Select
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal edit cart item-->

<div class="modal fade" id="modal-item-edit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"> Update Product Item</h4>
            </div>
            <div class="modal-body">
              <input type="hidden" id="cartid_item">
                <div class="form-group">
                     <label for="product_item"> Product Item</label>
                        <div class="row">
                  <div class ="col-md-5">
                        <input type="text" id="barcode_item" class="form-control" readonly>
                    </div>
                 <div class ="col-md-7">
                     <input type="text" id="product_item" class="form-control" readonly>
                 </div>
                </div>
            </div>
    <div class="form-group">
            <label for="price_item"> Price</label>
            <input type="number" id="price_item" min="0"class="form-control" >
     </div>   
    <div class="form-group">
            <label for="qty_item"> Qty</label>
            <input type="number" id="qty_item" min="1"class="form-control" >
     </div>   
    <div class="form-group">
            <label for="total_before"> Total Before Discount</label>
            <input type="number" id="total_before" min="1"class="form-control" readonly >
     </div>   
    <div class="form-group">
            <label for="discount_item">Discount per Item</label>
            <input type="number" id="discount_item" min="0"class="form-control" >
     </div>   
    <div class="form-group">
            <label for="total_item">Total after Discount</label>
            <input type="number" id="total_item" min="0"class="form-control" readonly>
     </div>   
   </div>                 
    <div class="modal-footer">
            <div class="pull-right">
                <button type="button" id="edit_cart" class="btn btn-flat btn-success">
                <i class="fa fa-paper-plane"> </i>Save 
                </button>
            </div>
        </div> 
    </div> 
</div> 
</div> 
                  


<script>

    $(document).on('click', '#select', function() {
            $('#item_id').val($(this).data('id'))
            $('#barcode').val($(this).data('barcode'))
            $('#price').val($(this).data('price'))
            $('#stock').val($(this).data('stock'))
            $('#modal-item').modal('hide')
        })
        $(document).on('click', '#add_cart', function() {
            var item_id = $('#item_id').val()
            var price = $('#price').val()
            var stock = $('#stock').val()
            var qty = $('#qty').val()
            if(item_id == '') {
                alert('product belum dipilih')
                $('#barcode').focus()
            } else if(stock < 1) {
                alert('Stock tidak mencukupi')
                $('#item_id').val('')
                $('#barcode').val('')
                $('#barcode').focus()
            }else {
                $.ajax({
                    type: 'POST',
                    url: '<?=site_url('sale/process')?>',
                    data : {'add_cart' : true, 'item_id' : item_id, 'price' : price, 'qty' : qty}, 
                    dataType: 'json',
                    success: function(result) {
                        if(result.success == true){
                            $('#cart_table').load('<?=site_url('sale/cart_data')?>', function(){
                                calculate()
                            })
                            $('#item_id').val('')
                            $('#barcode').val('')
                            $('#qty').val(1)
                            $('#baroce').focus()
                        } else  {
                            alert('Gagal tambah item cart')
                        }
                    }
                })
            }
    })

    $(document).on('click','#del_cart' , function () {
        if(confirm('Apakah Anda Yakin?')){
            var cart_id = $(this).data('cartid')
            $.ajax({
                type: 'POST',
                url: '<?=site_url('sale/cart_del')?>',
                dataType: 'json',
                data:{'cart_id': cart_id},
                success : function (result) {
                    if (result.success == true){
                    $('#cart_table').load('<?=site_url('sale/cart_data')?>', function(){
                        calculate()
                })
                } else {
                    alert('Gagal Hapus Item Cart');
                 }
                }
            })
        }
        
    })

    $(document).on('click', '#update_cart', function() {
            $('#cartid_item').val($(this).data('cartid'))
            $('#barcode_item').val($(this).data('barcode'))
            $('#product_item').val($(this).data('product'))
            $('#price_item').val($(this).data('price'))
            $('#qty_item').val($(this).data('qty'))
            $('#total_before').val($(this).data('price') * $(this).data('qty') )
            $('#discount_item').val($(this).data('discount'))
            $('#total_item').val($(this).data('total'))
})

function count_edit_modal(){
    var price = $('#price_item').val()            
    var qty = $('#qty_item').val()            
    var discount = $('#discount_item').val()       

        total_before = price * qty
        $('#total_before').val(total_before)

        total = (price  - discount) * qty
        $('#total_item').val(total)

        if(discount == ''){
                $('#discount_item').val(0)
        }
}
 $(document).on('keyup mouseup','#price_item, #qty_item, #discount_item', function(){
    count_edit_modal()
 }) 
  $(document).on('click', '#edit_cart', function() {
            var cart_id = $('#cartid_item').val()
            var price = $('#price_item').val()
            var qty = $('#qty_item').val()
            var discount= $('#discount_item').val()
            var total= $('#total_item').val()

            if(price == '') {
                alert('harga tidak boleh kosong')
                $('#price_item').focus()
            } else if(qty == ''|| qty < 1) {
                alert('Qty tidak boleh kosong')
                $('#qty_item').focus()
            }else {
                $.ajax({
                    type: 'POST',
                    url: '<?=site_url('sale/process')?>',
                    data : {'edit_cart' : true, 'cart_id' : cart_id, 'price' : price, 
                    'qty' : qty, 'discount' : discount, 'total' : total}, 
                    dataType: 'json',
                    success: function(result) {
                        if(result.success == true){
                            $('#cart_table').load('<?=site_url('sale/cart_data')?>', function(){
                                calculate()
                            })
                            alert('Item cart berhasil terupdate')
                            $('#modal-item-edit').modal('hide');
                        } else  {
                            alert('Data item cart tidak terupdate')
                        }
                    }
                })
            }
    })   
    function calculate(){
        var subtotal = 0;
        $('#cart_table tr').each(function () {
            subtotal += parseInt($(this).find('#total').text())
        })
        isNaN(subtotal) ? $('#sub_total').val(0) : $('#sub_total').val(subtotal)

        var discount = $('#discount').val()
        var grand_total = subtotal - discount
        if(isNaN(grand_total)){
            $('#grand_total').val(0)
            $('#grand_total2').text(0)
        }else{
            $('#grand_total').val(grand_total)
            $('#grand_total2').text(grand_total)
        }
        var cash = $('#cash').val();
        cash != 0 ? $('#change').val(cash - grand_total) : $('#change').val(0)

        if(discount == ''){
                $('#discount').val(0)
        }
    }   

    $(document).on('keyup mouseup','#discount, #cash', function(){
    calculate()
 }) 

    $(document).ready(function(){
        calculate()
    })
    //process payment
    $(document).on('click','#process_payment', function(){
             var customer_id = $('#customer').val()
            var subtotal = $('#sub_total').val()
            var discount= $('#discount').val()
            var grandtotal= $('#grand_total').val()
            var  cash = $('#cash').val()
            var  change = $('#change').val()
            var  note = $('#note').val()
            var  date = $('#date').val()
            if(subtotal < 1) {
                alert ('Belum ada product item yang di pilih')
                $('#barcode').focus()
            } else if (cash < 1){
                alert('Jumlah uang cash belum diinput')
                $('#cash').focus()
            }else{
                if(confirm('Yakin proses transaksi ini?')){
            $.ajax({
                type: 'POST',
                url: '<?=site_url('sale/process')?>',
                data : {'process_payment': true, 'customer_id' : customer_id, 'subtotal': subtotal,
                'discount': discount, 'grandtotal': grandtotal, 'cash': cash, 'change': change,
                'note': note, 'date': date},
                dataType: 'json',
                success: function (result){
                    if(result.success){
                        alert('Transaksi berhasil');
                        window.open('<?=site_url('sale/cetak/')?>' + result.sale_id, '_blank')
                    }else{
                        alert('Transaksi gagal');
                    }
                    location.href='<?=site_url('sale')?>'
                }
            })
        }
    }
})
</script>

