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
            <h3 class="box-title">Barcode Generator</h3>
            <div class="pull-right">
                <a href="<?php echo site_url('item')?>" class="btn btn-warning btn-flat btn-sm">
                    <i class="fa fa-undo"></i>Back
                </a>
            </div>
        </div>
        <div class ="box-body">
        <?php 
            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode($row->barcode, $generator::TYPE_CODE_128)) . '">';
        ?>
        <br>
        <?=$row->barcode?>
        <br><br>
        <div id="qr-code"></div>
        <a href="<?php echo site_url('item/barcode_print/'.$row->item_id)?>" target="_blank" class="btn btn-default btn-sm">
            <i class="fa fa-print"></i>Print
        </a>
        </div>
    </div>

    <script src="<?php echo base_url('assets/davidshimjs-qrcodejs-04f46c6/qrcode.min.js')?>"></script>
    <script type="text/javascript">
        $(function () {
            var qrCode = new QRCode(document.getElementById('qr-code') '<?php echo $row->item_id . ':' . $row->name; ?>');
        });
    </script>

</section>