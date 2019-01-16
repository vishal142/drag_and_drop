<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	
	function getAllmenu(){
		$this->db->select('*');
		$this->db->order_by('position_order','ASC');
		$res = $this->db->get('sorting_items')->result_array();
		return $res;
	}

	/*function UpdateMenu($data = array()){

		$val = array('position_order'=>$data['key']);
		$this->db->where('id',$data['id']);
		$this->db->update('sorting_items',$val);
		return true;

	}*/

  function UpdateMenu($data = array()){


  	    $i=1;
  		foreach ($data as $key => $value) {
  			     $sql = "Update sorting_items SET position_order=".$i." WHERE id=".$value;
  			     //echo $sql.'<br>';
    				$query = $this->db->query($sql);
		

			$i++;
		}
	}
}
