<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 

 class Ajax extends CI_Controller {

 	Public function menu()
 		{
 			$menu = $this->input->post("menu");
 			If($menu == 'menu')
	 			{
	 				$data['menu'] = $this->db->query("SELECT * from " .$menu)->result_array();
	 				echo "<table class='table table-hover'>";
			        echo "<thead>";
			        echo "<tr><th>Asosiy menu nomi</th><th>Название главного меню </th><th>
					Main menu name</th><th>Menu ichidagi menu</th><th>Меню который внутри</th></tr>";
				 	echo "</thead>";
      				echo "<tbody>";
      				echo "<tr><td><input type='text' placeholder='Asosiy menu nomi' name='main_menu_uz'></td><td><input type='text' placeholder='Название главного меню' name='main_menu_ru'></td><td><input type='text' placeholder='Main menu name' name='main_menu_en'></td><td><input type='text' placeholder='Menu ichidagi menu' name='sub_menu_uz'></td><td><input type='text' placeholder='Меню который внутри' name='sub_menu_ru'></td><tr>";
      				echo "</tbody>";
      				echo "</table>";
 			    }
 			else if($menu == 'post_main')
	 			{
	 				$data['post_main'] = $this->db->query("SELECT * FROM " .$menu)->result_array();
	 				$data['kategoriya'] = $this->db->query("SELECT * FROM kategoriya")->result_array();
	 				echo "<div class='container form-group'>";
	 				echo     "<span>Qaysi kategoriyaga kirishini tanlang:</span><select class='form-control'>";
	 				 			foreach($data['kategoriya'] as $k)
	 				 				{
	 				 					echo "<option value='".$k['id']."' id='kat_id'>".$k['kat_name']."</option>";
	 				 				}
	 						 
	 			    echo    "</select><br>";
					echo    "<label style='margin-top:10px'>Asosiy Sarlavha(uz)</label>
							 <br>
							 <input type='text' placeholder='Asosiy sarlavha' id='posts_title_uz' name='posts_title_uz' class='form-control'></br>
							 <label style='margin-top:10px'>Asosiy Sarlavha(ru)</label>
							 <br>
							 <input type='text' placeholder='Asosiy sarlavha' id='posts_title_ru' name='posts_title_ru' class='form-control'></br>
							 <label style='margin-top:10px'>Asosiy Sarlavha(en)</label>
							 <br>
							 <input type='text' placeholder='Asosiy sarlavha' id='posts_title_en' name='posts_title_en' class='form-control'></br>
							 <label>Post haqida qisqacha(uz):</label><br>
							 <input type='text' name='short_text_uz' class='form-control' id='short_text_uz'>
							 <label>Post haqida qisqacha(ru):</label><br>
							 <input type='text' name='short_text_ru' class='form-control' id='short_text_ru'>
							 <label>Post haqida qisqacha(en):</label><br>
							 <input type='text' name='short_text_en' class='form-control' id='short_text_en'>
					 	     <label style=' margin-left:20px'>Media</label><br><input type='file' name='media_input' id='media_input'>
					 	     <br>
					 	     <button class='btn btn-success' id='post_main_save' name='btn_post_main_save' style='margin-top:15px'>Saqlash</button>
						  </div>";
	 			}
	}

	Public function get_post_main()
		{
			$posts_title_uz = $this-> input-> post('posts_title_uz');
			$posts_title_ru = $this-> input-> post('posts_title_ru');
			$posts_title_en = $this-> input-> post('posts_title_en');
			$short_text_uz  = $this-> input-> post('short_text_uz');
			$short_text_ru  = $this-> input-> post('short_text_ru');
			$short_text_en  = $this-> input-> post('short_text_en');
			$img_url        = $this-> input-> post('img_url');
			$kat_id         = $this-> input->post('kat_id');

			if(strlen($posts_title_uz)>7 and strlen($posts_title_ru)>7 and strlen($posts_title_en)>7 and strlen($short_text_uz)>7 and strlen($short_text_ru)>7 and strlen($short_text_en)>7 and strlen($img_url)>3)
			{
				$data_ins = array(
					'post_title_uz'  => $posts_title_uz,
					'post_title_ru'  => $posts_title_ru,
					'post_title_en'  => $posts_title_en,
					'short_theme_uz' => $short_text_uz,
					'short_theme_ru' => $short_text_ru,
					'short_theme_en' => $short_text_en,
					'img_url'        => $img_url,
					'data'           => Date('Y-m-d H:i:s'),
					'kat_id'         => $kat_id,
					
				);
				$error = $this->db->insert('post_main',$data_ins);
					if ($error == 1)
			          {
			            echo "Ma'lumotlar bazaga yozildi";
			          }
			        else
			          {
			            echo "Ma'lumotlarni yozishda xatolik bor";
			          }
			}
		    else
		    {
		        echo "Hamma qatorlarni to`ldirish shart!";
		    }
		}
 }
        							            
                    
                     