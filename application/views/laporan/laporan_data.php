<section class="content-header">
      <h1>Laporan 
        <small>penjualanan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
        <li class="active">Laporan</li>
      </ol>
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">pilih tanggal</h3>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                laporan
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">pilih tanggal</h4>
              </div>
              <div class="modal-body">
                <form action="<?=site_url('laporan/process')?>" method="post" >
                <label for="">Tanggal awal</label>
                <div class="form-group">
                    <div class ="from-line">
                      <input type="date" name="tgl_awal" class="form-control">
                    </div>
                </div>
                <label for="">Tanggal akhir</label>
                <div class="form-group">
                    <div class ="from-line">
                      <input type="date" name="tgl_akhir" class="form-control">
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Cetak</button>
              </div>

              </form>
</section>
