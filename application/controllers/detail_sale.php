<?php defined('BASEPATH') OR exit('No direct script access allowed');

class detail_sale extends CI_Controller {
	 
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('detail_sale_model');

    }
    public function detail_sale_in_data(){
        $data['row'] = $this->detail_sale_model->get_data_detail();
        $this->template->load('template', 'transaction/sale/detail_sale', $data);
    }
    // public function detail_sale_in_data_del()
    // {
    //     $detail_id =$this->uri->segment(4);
    //     $item_id =$this->uri->segment(5);
    //     $qty = $this->detail_sale_model->get($detail_id)->row()->qty;
    //     $data = ['qty' => $qty, 'detail_id' => $item_id];
    //     $this->stock_m->del($stock_id);
    //     if ($this->db->affected_rows() > 0) {
    //         $this->session->set_flashdata('success', 'Data  Stock-in berhasil di hapus');
    //     } 
    //     redirect('detail_sale/in');
    // }
}