<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {
	// tabel t_sale, t_sale_detail, p_item
	public function laporan_3_tabel($tglpenjualanaw, $tglpenjualanak){
		$this->db->select('*');
		$this->db->from('t_sale');
		$this->db->join('t_sale_detail', 't_sale.sale_id = t_sale_detail.sale_id');
		$this->db->join('p_item', 't_sale_detail.item_id = p_item.item_id');
		$this->db->order_by('date', 'ASC');
		$this->db->where('date >=', $tglpenjualanaw);
        $this->db->where('date <=', $tglpenjualanak);		
		$query = $this->db->get();

		return $query->result();
	}

	public function get_sum($tglawal, $tglakhir)
	{
		$sql="SELECT sum(final_price) as grand_total FROM t_sale WHERE date >= '$tglawal' AND date <= '$tglakhir'";
		$result= $this->db->query($sql);
		return $result->row()->grand_total;  
	}

}

/* End of file User_m.php */
