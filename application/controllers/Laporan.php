<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
         $this->load->library('pdf');
         $this->load->model("laporan_m");
        check_not_login();
        
    }

    public function index()
    {
        
   
            $this->template->load('template', 'laporan/laporan_data');
           
        
    }
    public function process()
    {
        
        $tglpenjualanaw = $_POST['tgl_awal'];
        $tglpenjualanak = $_POST['tgl_akhir'];
        $awal = $this->tgl_indo($tglpenjualanaw);
        $akhir = $this->tgl_indo($tglpenjualanak);
        
        
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);

        // mencetak string 
        $pdf->Cell(190,7,'LAPORAN PENJUALAN',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Toko. Silalahi',0,1,'C');
        $pdf->Image('assets/dist/img/avatar5.png',10,10,-300);

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(190,7,"Periode ($awal S/D $akhir)",0,1,'C');
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(33,6,'Tanggal Transaksi',1,0);
        $pdf->Cell(30,6,'Invoice',1,0);
        $pdf->Cell(27,6,'Nama barang',1,0);
        $pdf->Cell(27,6,'Harga Satuan',1,0);
        $pdf->Cell(10,6,'Qty',1,0);
        $pdf->Cell(20,6,'Discount',1,0);
        $pdf->Cell(30,6,'Total',1,1);
        
        

        
        $pdf->SetFont('Arial','',7.5);
        
        $cs = $this->laporan_m->laporan_3_tabel($tglpenjualanaw, $tglpenjualanak);
        
                
        foreach ($cs as $row){
            $pdf->Cell(33,6,$row->date ,1,0);
            $pdf->Cell(30,6,$row->invoice,1,0);
            $pdf->Cell(27,6,$row->name,1,0);
            $def = $row->price;
            $abc = "Rp " . number_format($def,2,',','.');
            $pdf->Cell(27,6,"$abc",1,0);
            $pdf->Cell(10,6,$row->qty,1,0);
            $pdf->Cell(20,6,$row->discount,1,0);
            $ghi = $row->final_price;
            $df = "Rp " . number_format($ghi,2,',','.');
            $pdf->Cell(30,6,"$df",1,1);
            
       
        }
         $tglawal = $_POST['tgl_awal'];
        $tglakhir = $_POST['tgl_akhir'];
        $a = $this->tgl_indo($tglawal);
        $i = $this->tgl_indo($tglakhir);
        $pdf->Cell(147,6,'Grand Total',1,0);
        $bcb = $this->laporan_m->get_sum($tglawal, $tglakhir);
        $hasil_rupiah = "Rp " . number_format($bcb,2,',','.');
        $pdf->Cell(30,6,"$hasil_rupiah",1,1);
        
        $pdf->Output();
       

    }

    private function tgl_indo($tgl){
            $tanggal = substr($tgl,8,2);
            $bulan = $this->getBulan(substr($tgl,5,2));
            $tahun = substr($tgl,0,4);
            return $tanggal.' '.$bulan.' '.$tahun;       
    }   

    private function getBulan($bln){
                switch ($bln){
                    case 1: 
                        return "Januari";
                        break;
                    case 2:
                        return "Februari";
                        break;
                    case 3:
                        return "Maret";
                        break;
                    case 4:
                        return "April";
                        break;
                    case 5:
                        return "Mei";
                        break;
                    case 6:
                        return "Juni";
                        break;
                    case 7:
                        return "Juli";
                        break;
                    case 8:
                        return "Agustus";
                        break;
                    case 9:
                        return "September";
                        break;
                    case 10:
                        return "Oktober";
                        break;
                    case 11:
                        return "November";
                        break;
                    case 12:
                        return "Desember";
                        break;
                }
            } 

}

/* End of file Laporan.php */
