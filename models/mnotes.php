<?php

class Mnotes extends Model{

function Mnotes()
{
	parent::Model();
}

function load_db()
{
	$this->load->database();
}

function get_all()
{
	$query = $this->db->query('SELECT * from notes ORDER by notes.ID DESC');
	return $query->result_array();
}

function submit($content)
{
	$sql = "INSERT INTO notes (content) 
        VALUES (".$this->db->escape($content).")";
	$this->db->query($sql);
}

}

?>
