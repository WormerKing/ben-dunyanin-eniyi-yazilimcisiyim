<?php
	class Library extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model("Library_Model");
			$this->load->helper("url");
		}

		public function index() {
			$books = $this->Library_Model->getBooks();
			$types = $this->Library_Model->getTypes();

			$array = array(
				"books" => $books,
				"types" => $types
			);

			$this->load->view("library_view",$array);
		}

		public function types() {
			$types = $this->Library_Model->getTypes();

			$array = array(
				"types" => $types
			);

			$this->load->view("type_view",$array);
		}

		public function list_books() {
			$category = $this->input->get("category");
			$books = $this->Library_Model->list_books($category);

			$array = array(
				"books" => $books
			);

			$this->load->view("list_books",$array);
		}

		public function type_save() {
			$name = $this->input->post("name");
			$status = $this->input->post("status");

			$array = array(
				"name" => $name,
				"status" => $status
			);

			$insert = $this->Library_Model->save_type($array);

			if ($insert) {
				echo "Başarılı";
			} else {
				echo "Hata meydana geldi";
			}
		}

		public function save() {
			$name = $this->input->post("name");
			$author = $this->input->post("author");
			$type = $this->input->post("type");
			$publish_date = $this->input->post("publish_date");
			$status = $this->input->post("status");

			$array = array(
				"name" => $name,
				"author" => $author,
				"type" => $type,
				"publish_date" => $publish_date,
				"status" => $status
			);

			$insert = $this->Library_Model->save($array);

			if ($insert) {
				echo "başarılı";
			} else {
				echo "hata meydana geldi";
			}
		}
	}
?>