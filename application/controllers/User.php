<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index(){
        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users'] = $users;
        $this->load->view('list',$data);
    }



	public function create(){   
        $this->load->model('User_model');
        $this->form_validation->set_rules('fname','Name','required');
	    $this->form_validation->set_rules('lname','Name','required');
        
        if($this->form_validation->run() == false){
            $this->load->view('create');
        }

        else{
            $formArray = array();
            $formArray['first_name'] = $this->input->post('fname');
            $formArray['last_name'] = $this->input->post('lname');

            $this->User_model->create($formArray);
            redirect(base_url(). 'index.php/user/index');
            
        }
    }
    
    public function edit($userId){

        $this->load->model('User_model');
        $user = $this->User_model->getUser($userId);
        $data = array();
        $data ['user'] = $user;

        $this->form_validation->set_rules('fname','Name','required');
        $this->form_validation->set_rules('lname','Name','required');

        if($this->form_validation->run() == false){
            $this->load->view('edit',$data);
        }

        else{
            $formArray = array();
            $formArray['first_name'] = $this->input->post('fname');
            $formArray['last_name'] = $this->input->post('lname');

            $this->User_model->updateUser($userId,$formArray);
            redirect(base_url(). 'index.php/user/index');
            
        }
    }

    public function delete($userId){
        $this->load->model('User_model');
        $this->User_model->deleteUser($userId);
        redirect(base_url().'index.php/user/index');
    }


}

?>
