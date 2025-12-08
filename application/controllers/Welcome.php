<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	private const HEADER_VIEW = 'templates/public-layout/header';
	private const FOOTER_VIEW = 'templates/public-layout/footer';
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view(self::HEADER_VIEW);
		$this->load->view('pages/index');
		$this->load->view(self::FOOTER_VIEW);
	}

	public function checkout()
	{
		$this->load->view(self::HEADER_VIEW);
		$this->load->view('pages/checkout');
		$this->load->view(self::FOOTER_VIEW);
	}

	public function login()
	{
		$this->load->view('pages/login');
	}
}
