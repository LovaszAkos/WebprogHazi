<?php

class campus extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('campus_model');
        $this->load->helper('url');
    }

    public function index($code = NULL){
        
        if($code == NULL){        
            $list = $this->campus_model->get_list();
            $view_params = [
                'records'   =>  $list
            ];
            $this->load->view('campus/list', $view_params);
        }
        else{
            $record = $this->campus_model->get_one($code);
            if($record == NULL || empty($record))
            {
                show_error('Az alábbi épület kód nem létezik: '.$code);
            }
            
            $view_params = [
                'record'    =>  $record
            ];
            
            $this->load->view('campus/show', $view_params);
        }
    }
    
    public function code_check($code){
        if($code == NULL){
            $this->form_validation->set_message('code_check', 'A(z) {field} nem lehet üres!');
            return false;
        }
    }
    
    public function add(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('campus', 'campus', 'required');
        $this->form_validation->set_rules('code', 'Épület Kód', 'callback_code_check');
        $this->form_validation->set_rules('épület', 'Épület', 'required'); 
        $this->form_validation->set_rules('hely', 'Épület Címe', 'required'); 
        
        
        if($this->form_validation->run() == TRUE){
            if($this->campus_model->insert(
                    $this->input->post('campus'),
                    $this->input->post('code'),
                    $this->input->post('épület'),
                    $this->input->post('hely')
            )){
                redirect('campus');
            }
        }
        
        $this->load->helper('form'); 
        $this->load->view('campus/add');
    }
    public function edit($code){ 
    
        if($code == null){
            show_error('A módosításhoz ismerni kell az épület kódját!');
        }
        
        $record = $this->campus_model->get_one($code);
        if($record == null || empty($record)){
            show_error('Nem létezik ilyen Épület!');
        }
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('campus','campus','required');
        if($this->form_validation->run() == TRUE){
            if($this->campus_model->update(
                    $record->id, 
                    $this->input->post('code'), 
                    $this->input->post('épület'),
                    $this->input->post('campus'),
                    $this->input->post('hely')
               )){
                redirect('campus');
            }
        }
                
        $view_params = [
            'record'    =>  $record
        ];
        
        $this->load->helper('form');
        $this->load->view('campus/edit', $view_params);
    }
    public function delete($code){ // törlés
        $record = $this->campus_model->get_one($code);
        
        if($record == NULL || empty($record)){
            show_error('Nem létezik az alábbi épület kód: '.$code);
        }
        
        if($this->campus_model->delete($record->id)){
            redirect('campus');
        }
        else{
            show_error('Hiba a törlés során!');
        }
        
    }       
}
