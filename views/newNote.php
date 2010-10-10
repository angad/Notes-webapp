<html>
<head>
	<style type='text/css' media='all'>@import url('http://angad.sg/ci/notes.css');</style> 
	<link rel='stylesheet' type='text/css' media='all' href='http://angad.sg/ci/notes.css' />
</head>

<body>
	<div id = "content">
	<h1>linuxNUS CodeIgniter Workshop Notes application</h1>
	<p>Enter a note and it will be saved</p>
	<p>angad(dot)singh(at)linuxnus(dot)org</p>
	<p>Source Code available <a href = "http://angad.sg/ci/notes.zip">here</a> </p>

	<?php

	echo form_open("notes/newNote");
	echo form_input("content", "");
	echo form_submit("submit", "Submit");
	echo form_close();
	?>
