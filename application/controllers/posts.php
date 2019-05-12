
<?php
	class Posts extends CI_Controller{

		public function Index(){
			
            $data['title'] = 'Latest posts';

            $data['posts'] = $this->PostModel->get_posts();
            
			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
        }
        
        public function view($slug = NULL){
            $data['post'] = $this->PostModel->get_posts($slug);

            if (empty($data['post'])) {
                show_404();
            }
            $data['title'] = $data['post']['title'];
            
			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Create Post';

            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('body','Body','required');

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header');
			    $this->load->view('posts/create', $data);
			    $this->load->view('templates/footer');
            }
            else {
                $this->PostModel->create_post();
                
                redirect('posts');
            }	
        }

        public function delete($id){
            $this->PostModel->delete_post($id);
            redirect('posts');
        }

        public function edit($slug){
            $data['post'] = $this->PostModel->get_posts($slug);

            if (empty($data['post'])) {
                show_404();
            }
            $data['title'] = 'Edit Post';
            
			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
        }

        public function update(){
            $this->PostModel->update_post();
            redirect('posts');
        }

	}