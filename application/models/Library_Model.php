<?php
	class Library_Model extends CI_Model {
		public function __construct() {
			parent::__construct();
		}

		public function save($array = array()) {
			return $this->db->insert("books",$array);
		}

		public function getBooks() {
			return $this->db->query("select * from books");
		}

		public function getTypes() {
			return $this->db->query("select * from types");
		}
		public function save_type($array = array()) {
			return $this->db->insert("types",$array);
		}
		public function list_books($array = array()) {
			return $this->db->query("select * from books where type=?",$array);
		}
	}
?>