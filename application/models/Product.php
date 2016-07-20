<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function add_product($data)
	{
		$query="INSERT INTO products
						(name,
						description,
						price)
						VALUES(?,?,?)";
						
		$this->db->query($query,array(
					$data['name'],
					$data['description'],
					$data['price']
					));


	
	}

	public function get_all()
	{
		$query="SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}


	public function show_product($id)
	{
		$query="SELECT * FROM products WHERE id=?";
		return $this->db->query($query,$id)->row_array();

	}

	public function update($data)
	{
		$query="UPDATE products SET name=?, description=?, price=? WHERE id=?";
		$values=array(
				$data['name'],
				$data['description'],
				$data['price'],
				$data['id']);

		return $this->db->query($query,$values);

						

	}

	public function destroy($id)
	{
		$query="DELETE FROM products WHERE id=?";

		$this->db->query($query,$id);
	}

}