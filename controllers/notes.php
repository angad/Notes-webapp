<?php

class Notes extends Controller {

	function Notes()
	{
		parent::Controller();
	}

function index()
{
	$this->load->helper('form');
	$this->load->model('mnotes');
	$this->mnotes->load_db();
	$this->loadPage();
}

function loadNotes()
{
	$all = $this->mnotes->get_all();
	return $all;
}

function loadPage()
{
	
	$this->load->view('newNote');

	$all = $this->loadNotes();

	foreach($all as $data)
	{
		$this->load->view('allNotes', $data);
	}
}

function newNote()
{
	$content = $this->input->post("content");
	
	$this->load->model('mnotes');
	$this->mnotes->load_db();

	$this->mnotes->submit($content);

	$this->loadPage();
}
}


/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */
