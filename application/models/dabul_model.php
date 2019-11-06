<?php 

class Dabul_model extends CI_Model{
	function select($param){
		return $this->db->get_where($param[0],array($param[0].'eng'=>$param));
	}

	function irregular($param){
		return $this->db->get_where("irregular",array('v1'=>$param));
	}
	
	function insert($data){
		$this->db->insert('data',$data);
	}

	function delete($kodemk){
  		$this ->db->where('kodemk', $kodemk);
  		$this ->db->delete('data');
	}
	function reset(){
		$this->db->query("TRUNCATE data");
	}
	
}
?>