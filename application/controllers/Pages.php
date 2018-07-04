<?php
		class Pages extends CI_Controller{
			public function view($page = 'login'){
        	 if ( ! file_exists(APPPATH.'views/users/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('users/login', $data);
        #$this->load->view('users/'.$page, $data);
        $this->load->view('templates/footer', $data);
        }
	}