<?php 
/**
* 
*/
include_once 'Model.php';
class buku extends Model
{
	
	public function selectbuku()
	{
		$query = $this->db->prepare("SELECT * FROM buku");
    	$query->execute();
    	$data = $query->fetchAll();
    	return $data;
	}
}
 ?>