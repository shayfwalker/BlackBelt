<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Product');
	}


	//index method - to display all product info [this would need a view file]
	public function index()
	{
		$products=$this->Product->get_all();
		$this->load->view('home', array(
							'products'=>$products));
	}



	//to display a form that allows the user to create a new product [this would need a view file]
	public function new()
	{
		$this->load->view('new');

	
	}


	//to process the form submitted from /products/new [have this method process the POST data and redirect to '/products'
	public function create()
	{

		$post=$this->input->post();
		$this->Product->add_product(array(
							'name'=>$post['name'],
							'description'=>$post['description'],
							'price'=>$post['price']
							));
		redirect('/');

	}



	//to display a particular product info [this would need a view file]
	public function show($id)
	{
		$product=$this->Product->show_product($id);
		$this->load->view('show', array(
							'product'=> $product));
	
	}


	//to display a form that allows the user to update a product info [this would need a view file]
	public function edit($id)
	{
		$product=$this->Product->show_product($id);
		$this->load->view('edit', array(
							'product'=> $product));
		
	}


	//update method - to process the form submitted from /products/edit/[id] to update that particular product name.
	public function update($id)
	{
		$post=$this->input->post();
		$data = array(
			'id' => $id,
			'name' => $post['name'],
			'description'=>$post['description'],
			'price'=>$post['price']

			);
		$this->Product->update($data);
		redirect('/');	
	}


	//destroy method - to process the form submitted from index method to remove a particular product [have this method process the POST data and redirect back to '/products']
	public function destroy($id)
	{
		$this->Product->destroy($id);
		redirect('/');


	}

}
