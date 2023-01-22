


<style>
    @media print{
        input.noPrint{
            dsiplay: name;
        }
    }
</style>
<body>
<html>
<table border="1" width="100%"  id="table1" style="border-collapse: collapse;">

    <a href="cetak" target="_blank">Print</a>
    <caption><center>laporan Barang</center></caption>
    <thead>
        <tr>
            <tr>
                  <th>No</th>
                  <th>kode barkode</th>
                  <th>nama barang</th>
                  <th>satuam</th>
                  <th>stok</th>
                  <th>Harga beli</th>
                  <th>Harga jual</th>
                  <th>profit</th>
            </tr>
        </tr>
    </thead>
    <tbody>
    <!-- <?php $no =1;
                foreach($row->result() as $key =>$data) { ?>
                     <tr>
                        <td style="width : 5%;"><?=$no++?>.</td>
                        <td><?php echo $data->name?></td>
                        <td><?php echo $data->gender?></td>
                        <td><?php echo $data->phone?></td>
                        <td><?php echo $data->address?></td>
                        <td class="text-center" width ="160px">
                            
                    </tr>
                <?php } ?> -->
    </tbody>
</table>

<br>
<input type="button" class="noPrint" value="Cetak" onclick="window.print()">
</body>
</html>