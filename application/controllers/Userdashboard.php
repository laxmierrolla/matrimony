 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed');
 /**
  Module: Userdashboard controller
  Author: Laxmi
  Created Date: 29/October/2017
 * */ 
 class userdashboard extends CI_Controller {
      function __construct() {
        parent::__construct();
        $this->load->model('Userdashboard_model','udashboard');
         $this->load->model('Mothertongues_model','mothertongues');
        $this->load->model('Matrimony_model','matrimony');
       
    }
    
    public function index(){
        $profileId = $this->session->userdata['user']['username'];
        $data = $this->udashboard->userdata($profileId);
        if($data){
        $result = array('data'=>$data);
        $this->load->view('userDashboard',$result);
        }
    }
    
    public function viewProfile(){
      $profilecode      = $this->session->userdata['user']['username']; 
      $result           = $this->udashboard->viewProfile($profilecode);
      $mothertongues    = $this->mothertongues->getmothertongues();
      $nationality      = $this->matrimony->getcountries();
      $education        = $this->matrimony->getEducation();
      $occupation       = $this->matrimony->getOccupation();
      $complexion       = $this->matrimony->getComplexion();
      $bloodgroup       = $this->matrimony->getBloodgroup();
      $specilcase       = $this->matrimony->getSpecialcase();
      $rasi             = $this->matrimony->getRasi();
      $employee         = $this->matrimony->getEmployeement();
      $star             = $this->matrimony->getStar(); 
      $country          = $this->matrimony->getcountries();
      $edunames         = $this->matrimony->educationname();
      $occupationname   = $this->matrimony->occupationname();
      $data= array('mothertongues'=>$mothertongues,'nationality'=>$nationality,'result' => $result,'complexion'=>$complexion,'bloodgroup'=>$bloodgroup,'specilcase'=>$specilcase,'education'=>$education,'occupation'=>$occupation,'rasi'=>$rasi,'star'=>$star,'employee'=>$employee,'country'=>$country,'edunames'=>$edunames,'occupationname'=>$occupationname);
      $this->load->view('viewProfile',$data);
    }
    //edit aboutme 
    public function aboutdata(){
        $profileid = $this->input->post('prfid');
        $data = $this->udashboard->aboutmedata($profileid);            
        echo json_encode($data);
        
    }
    
    //update aboutme    
     public function aboutupdate(){  
        $profileid = $this->input->post('profile_id'); 
        $data = array(
           'aboutme' => $this->input->post('aboutme'),
        );
        $update = $this->udashboard->aboutmeupdate($profileid,$data);
        echo"true";
    }
    public function basicdata(){
        $profileid = $this->input->post('prfid');
        $data = $this->udashboard->basicdedata($profileid);
        echo json_encode($data);
    }
    public function basicupdate(){
        $update = $this->udashboard->basicdupdate($_POST);
        echo"true";
    }
  public function physicaldata(){
       $profileid = $this->input->post('prfid');
        $data = $this->udashboard->physicaldata($profileid);
        echo json_encode($data);
  }
  
  public function physicalupdate(){
      $profileid = $this->input->post('profile_id'); 
        $data = array(
           'feet' => $this->input->post('height'),
           'weight'  =>$this->input->post('weight'),
           'cmplxion' =>$this->input->post('complexion'),
           'bldgrp'  =>$this->input->post('bloodgroup'),
           'splcases'=>$this->input->post('splcase'),
           'dite'  =>$this->input->post('dite'),
           'body_type'=>$this->input->post('bodytype'),
           'drink'=>$this->input->post('Drink'),
           'smoke'    =>$this->input->post('Smoke'),
        );
        $update = $this->udashboard->physicalupdate($profileid,$data);
        echo"true";
      
  }
  
  public function horodata(){
       $profileid = $this->input->post('prfid');
        $data = $this->udashboard->horodata($profileid);
        echo json_encode($data);
  }
  
  public function horoupdate(){
        $profileid = $this->input->post('profile_id'); 
        $data = array(
           'birth_place' => $this->input->post('height'),
           'hrs'  =>$this->input->post('weight'),
           'mins' =>$this->input->post('complexion'),
           'secs'  =>$this->input->post('bloodgroup'),
           'period'=>$this->input->post('splcase'),
           'birth_name'  =>$this->input->post('dite'),
           'gowthram'=>$this->input->post('bodytype'),
           'rasi'=>$this->input->post('Drink'),
           'star'    =>$this->input->post('Smoke'),
           'paadam'=>$this->input->post('bodytype'),
           'horoscope'=>$this->input->post('Drink'),
           'manglik'    =>$this->input->post('Smoke'),
        );
        $update = $this->udashboard->horoupdate($profileid,$data);
        echo"true";
  }
  
 public function professionaldata(){
     $profileid = $this->input->post('prfid');
     $data = $this->udashboard->professionaldata($profileid);
     echo json_encode($data);
 }
 
 public function professionalupdate(){
    $profileid = $this->input->post('profile_id');
    $occupation = $this->input->post('occupation');
    if(($occupation == 1)||($occupation == 88)){
       $income = "";
       $empin=4;
       $empdaetails=""; 
    }
    else{
       $income     = $this->input->post('income');
       $empin       = $this->input->post('empin');
       $empdaetails = $this->input->post('empdetails'); 
    }
    
    $data = array(
           'edu'          =>$this->input->post('education'),
           'edu_details'  =>$this->input->post('edudetails'),
           'occu'         =>$occupation,
           'occ_details'  =>$this->input->post('occdetails'),
           'income'       =>$income,
           'empin'        => $empin,
           'employmentdetails'=>$empdaetails,
        );
        $update = $this->udashboard->prfupdate($profileid,$data);
        echo"true"; 
 }
 
 
 public function contactsdata(){
     $profileid = $this->input->post('prfid');
     $data = $this->udashboard->contactsdata($profileid);
     echo json_encode($data);
     
 }
 
 public function contactsupdate(){
     $profileid = $this->input->post('profile_id');
     $data = array(
           'address'          =>$this->input->post('address'),
           'perminantaddress' =>$this->input->post('permanentaddress'),
           'phone'            =>$this->input->post('landline'),
           'fmobile'          =>$this->input->post('mobile'),
           'country'          =>$this->input->post('country'),
           'state'            =>$this->input->post('state'),
           'city'             =>$this->input->post('city'),
           'family_origin'    =>$this->input->post('familyorigin'),
           'res_status'       =>$this->input->post('res_statue'),
           
        );
        $update = $this->udashboard->contactupdate($profileid,$data);
        echo"true"; 
     
 }
 
 public function familydata(){                  
    $profileid = $this->input->post('prfid');
     $data = $this->udashboard->family_data($profileid);
     echo json_encode($data); 
 }
 
 public function familyupdate(){
   $profileid = $this->input->post('profile_id');
     $data = array(
           'father_name'          =>$this->input->post('fathername'),
           'fa_alive'             =>$this->input->post('Mr'),
           'father_occupation'    =>$this->input->post('fatheroccupation'),
           'mother_name'          =>$this->input->post('mothername'),
           'ma_alive'             =>$this->input->post('Mrs'),
           'mother_occupation'    =>$this->input->post('motheroccupatin'),
           'elder_bro'            =>$this->input->post('elderbrother'),
           'young_bro'            =>$this->input->post('youngerbrother'),
           'elder_sis'            =>$this->input->post('eldersister'),
           'young_sis'            =>$this->input->post('youngsister'),
           'desc_family'          =>$this->input->post('abtfamily'),
           
        );
        $update = $this->udashboard->familyupdate($profileid,$data);
        echo"true";   
 }
    
    }
?>