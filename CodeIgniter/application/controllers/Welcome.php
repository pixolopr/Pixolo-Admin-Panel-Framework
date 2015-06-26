<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Pixolo_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->model('Events_model','',TRUE);
        $message['events'] = $this->Events_model->getby(array("name" => 'Event 1'));
        print_r(json_encode($message));
		//$this->load->view('json', $message);
	}
    public function create()
	{
        $this->load->model('Events_model','',TRUE);
        $data = array(
            'showimage' => 1
        );
        
        $message['events'] = $this->Events_model->save($data, 3);
        print_r($message);
		//$this->load->view('json', $message);
	}
    public function delete()
	{
        $this->load->model('Events_model','',TRUE);
        $data = array(
            'showimage' => 1
        );
        
        $message['events'] = $this->Events_model->delete(3);
        print_r($message);
		//$this->load->view('json', $message);
	}
    public function tables()
	{
        $message['title']='Events';
        $this->load->model('Events_model','',TRUE);
        $message['events'] = $this->Events_model->get();
        //print_r(json_encode($message));
		$this->load->view('tables', $message);
	}
    public function createform()
    {
        $message['title']='Create';
        $this->load->model('Events_model','',TRUE);
        $this->load->view('createform', $message);
        
        /*$this->Events_model->save($data);*/
    }
    public function createinsert()
    {
        
        if ($this->Events_model->save($data) > 0)
        {
            redirect('
            welcome/tables');
        }
     
    }
    public function insertevent()
    {
        $insertdata['name'] = $this->input->post('name');
        $insertdata['logo'] = $this->input->post('logo');
        $insertdata['comppanyname'] = $this->input->post('comppanyname');
        $insertdata['companylogo'] = $this->input->post('companylogo');
        $insertdata['timestamp'] = $this->input->post('timestamp');
        $insertdata['description'] = $this->input->post('description');
        $insertdata['showcase'] = $this->input->post('showcase');
        $insertdata['upcoming'] = $this->input->post('upcoming');
        


        $this->load->model('Events_model','',TRUE);
        $this->Events_model->save($insertdata);
        
        $message['title']='Events';
        $message['events'] = $this->Events_model->get();
        
        
        $this->load->view('tables', $message);



    }
    
    public function store()
    {
        $name=form1.name.value;
        $logo=form1.logo.value;
        console.log($name);
        console.log($logo);
    }
    
   
}
