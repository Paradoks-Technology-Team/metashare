<?php

class Dashboard extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['content'] = 'admin/contents/dashboard/v_dashboard';
		$this->load->view('admin/layouts/wrapper', $data, FALSE);
	}

}

?>