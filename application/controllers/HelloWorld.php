<?php
/**
 * Hello World demo for ci
 * author: Bill Quan
 */
class HelloWorld extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
		echo "initializing...";
    }

	public function index()
	{
		echo "HelloWorld";
	}

}