<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 

 class Ajax extends CI_Controller {

 	Public function menu()
 		{
 			$menu = $this->input->post("menu");
 			If($menu == 'menu')
	 			{
	 				$data['menu'] = $this->db->query("SELECT * from" .$menu)->result_array();
	 				echo "<table class='table table-hover'>";
			        echo "<thead>";
			        echo "<tr><th>Asosiy menu nomi</th><th>Название главного меню </th><th>
					Main menu name</th><th>Menu ichidagi menu</th><th>Меню который внутри</th></tr>";
				 	   }
				 	echo "</thead>";
      				echo "<tbody>";
 		}
 }