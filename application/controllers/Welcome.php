<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
		{
			
			if (!$this->ion_auth->logged_in() )		
				    {
				      redirect('auth/login');
				    }
			else
					{	
						$this->load->model("ekologiya_model");
						$data['users'] = $this->ekologiya_model->get_users();
						$this->load->view('welcome_message',$data);
					}
		}
	Public function Admin()
		{
			if (!$this->ion_auth->logged_in())		
				    {
				      redirect('auth/login');
				    }
			else
					{					
						$this->load->view('admin/admin');					
					}
		}

	public function create_account()
		{
			$data['click'] = $this->input->post('check_inputs');
			if ($this->input->post('check_inputs') == 'Register Account')
			{
				$firts_name       = $this->input->post('first_name');
				$last_name        = $this->input->post('last_name');
				$email            = $this->input->post('email');
				$password         = $this->input->post('password');
				$password_confirm = $this->input->post('password_confirm');
				$group = array('2'); // Sets user to admin.
				if ( (strlen($firts_name) > 3) && (strlen($last_name) > 3) )
				{
					$username = $firts_name.' '.$last_name;

					if ($password === $password_confirm)
					{
						$data = array(
								"first_name" => $firts_name,
								"last_name"  => $last_name,							
							);
						$this->ion_auth->register($username,$password,$email, $data, $group);
						redirect('auth/login');
					}
					else
						{
							$data['error_password'] = "This password and password_confirm not equil";
						}
				}
				else
				{
					$data['error_username'] = "This first_name or last_name required";
				}
			}
			else
			{
				$data['error'] = "opened";
				$this->load->view("auth/create_user",$data);
			}
		}
	public function forgot_password()
		{
			$data = "не возможно пройти в страницу";
			$this -> load ->view("auth/forgot_password",$data);
		}
}
