<?php
/**
* 
*/
class Books
{
	public function __construct()
	{
		return '';
	}
	
	public function show()
	{
		echo 'display all books';
	}

	public function showbookid($id=array())
	{
		echo 'bookid = '.$id;
	}

	public function hello($id)
	{
		echo 'hello';
	}
}