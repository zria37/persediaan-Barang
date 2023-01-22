<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_m extends CI_Model {

    public function get($id = null)
    {
       $this->db->from('supplier');
       if($id !=null){
        $this->db->where('supplier_id',$id);
       }
       $query =$this->db->get();
       return $query;
    }

    public function add($post)
    {
        $params = [
            'name'=>$post['supplier_name'],
            'phone'=>$post['phone'],
            'address'=>$post['addr'],
            'description'=>empty($post['dsc']) ? null : $post['dsc'],
        ];
        $this->db->insert('supplier', $params);
    }
    public function edit($post)
    {
        $params = [
            'name'=>$post['supplier_name'],
            'phone'=>$post['phone'],
            'address'=>$post['addr'],
            'description'=>empty($post['dsc']) ? null : $post['dsc'],
            'updated' => date('Y-m-d H:i:s')
        ];
        $this->db->where('supplier_id', $post['id']);
        $this->db->update('supplier', $params);
    }


    public function del($id)
	{
        $this->db->where('supplier_id', $id);
        $this->db->delete('supplier');
        
    }

}

/* End of file Supplier_M.php */
