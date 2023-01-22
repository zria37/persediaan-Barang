<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_sale_model extends CI_Model {

public function get($id)
    {
        $this->db->where('detail_id', $id);
        $this->db->delete('t_sale_detail');
    }

    public function get_data_detail()
    {
        $this->db->order_by('sale_id', 'desc');
        return $this->db->from('t_sale_detail')
        ->join('p_item', 't_sale_detail.item_id = p_item.item_id')
        ->get()
        ->result();
        // $this->db->select('*');
        // $this->db->from('t_sale_detail');
        // $this->db->join('p_item', 't_sale_detail.item_id = p_item.item_id');
        // $this->db->where('detail_id');
        // $this->db->order_by('sale_id', 'desc');
        // $query = $this->db->get();
        // return $query;
          
    }

}