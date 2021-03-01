<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Controller {

  public function __construct(){
    parent::__construct();
  }
  public function index()
  {
    $this->load->library('email');
  }
  public function sendEmail() 
  {
    // $from_email = "your@example.com"; 
    // $to_email = $this->input->post('email'); 

    //Load email library 
    $this->load->library('email'); 

    $this->email->from('your@example.com', 'Your Name'); 
    $this->email->to('yaroslav0333@outlook.com');
    $this->email->subject('Email Test'); 
    $this->email->message('Testing the email class.'); 

    //Send mail 
    if($this->email->send()) 
    return "Email sent successfully.";
    else 
    return "Error in sending Email.";
  }
}