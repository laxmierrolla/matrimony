<?php
  defined('BASEPATH') OR exit('No direct script access allowed'); 
  class Matrimony extends CI_Controller {
  
      function __construct() {
        parent::__construct();
        $this->load->model('Mothertongues_model','mothertongues');
        $this->load->model('Matrimony_model','matrimony');
        $this->load->helper('captcha');
    }
      
      
    public function index()
    {
        $mothertongues = $this->mothertongues->getmothertongues();
        $nationality =   $this->matrimony->getcountries();
        $data= array('mothertongues'=>$mothertongues,'nationality'=>$nationality);
        $this->load->view('home',$data);
    }
    
      //email duplicate check in database
    
    public function check_email(){
        $email = $this->input->post('email');
        $result = $this->matrimony->checkemail($email);
        echo $result;
    }
    
    //mobile number duplicate check in database
    
     public function check_mobile(){
        $mobile = $this->input->post('mobile');
        $result = $this->matrimony->checkmobile($mobile);
        echo $result;
    }
    
    
    //get states based on country
    
     public function getStates(){
        $country = $this->input->post('contry_id');
        $result = $this->matrimony->get_states($country);
        echo json_encode($result);
    }
    
    
    //get state based on state
    
     public function getCities(){
        $state= $this->input->post('state_id');
        $result = $this->matrimony->get_cities($state);
        echo json_encode($result);
    }
    
    
    // This function generates CAPTCHA image and store in "image folder".
        public function captcha_setting(){
            $values = array(
            'word' => '',
            'word_length' => 4,
            'img_path' => './images/',
            'img_url' => base_url() .'images/',
            'font_path' => base_url() . 'system/fonts/texb.ttf',
            'img_width' => '150',
            'img_height' => 50,
            'expiration' => 3600,
            
            );
        $data = create_captcha($values);
        $_SESSION['captchaWord'] = $data['word'];
        // image will store in "$data['image']" index and its send on view page
          $education = $this->matrimony->getEducation();
         $occupation = $this->matrimony->getOccupation();
         $country =   $this->matrimony->getcountries();
         $complexion = $this->matrimony->getComplexion();
         $data1= array('education'=>$education,'occupation'=>$occupation,'country'=>$country,'complexion'=>$complexion);
        $this->load->view('required_match', array("data" => $data,"data1" => $data1));
   }

 // For new image on click refresh button.
    public function captcha_refresh(){
                $values = array(
                'word' => '',
                'word_length' => 4,
                'img_path' => './images/',
                'img_url' =>  base_url() .'images/',
                'font_path'  => base_url() . 'system/fonts/texb.ttf',
                'img_width' => '150',
                'img_height' => 50,
                'expiration' => 3600,
                 'font_size' => 30
               );
            $data = create_captcha($values);
            $_SESSION['captchaWord'] = $data['word'];
           echo $data['image'];
        
       }
    
    //adding registration form values into database
   public function add(){

        $this->form_validation->set_rules('profile','Profile','required');
        $this->form_validation->set_rules('reference','Reference','required');
        $this->form_validation->set_rules('surname','Surname','required');
        $this->form_validation->set_rules('firstname','Firstname','required');
        $this->form_validation->set_rules('gender','Gender','required');
        $this->form_validation->set_rules('dob','Date Of Birth','required');
        $this->form_validation->set_rules('mothertongue','MotherTongue','required');
        $this->form_validation->set_rules('nationality','Nationality','required');
        $this->form_validation->set_rules('mobile','Mobile','required');
        $this->form_validation->set_rules('email','Email','required');
        if ($this->form_validation->run() == FALSE) 
        {
                   
          $mothertongues = $this->mothertongues->getmothertongues();
          $nationality =   $this->matrimony->getcountries();
          $data= array('mothertongues'=>$mothertongues,'nationality'=>$nationality);
          $this->load->view('home',$data);  
        }
        else{

            $password = "PDML" . rand(0000, 999999);
            $cpassword = md5($password);
            $addedby = 'self';
            $phonecode = $this->input->post('phcode');
            $pcode = explode('_',$phonecode);
            $phncode = $pcode[1]."-";
            $gender  = $this->input->post('gender');
            
            $nochild = $this->input->post('nofchild');
            if($nochild ==""){
                $nochilds ="None";
            }
            else{
               $nochilds = $nochild;
            }
            
            if($this->input->post('Living')==""){
                $living_status = "None";
            }
            else{
                $living_status = $this->input->post('Living');
            }
            $data = array(
            'profile_by'    =>$this->input->post('profile'),
            'ref_by'        =>$this->input->post('reference'),
            'sname'         =>$this->input->post('surname'),
            'fname'         =>$this->input->post('firstname'),
            'lname'         =>$this->input->post('lastname'),
            'gender'        =>$gender,
            'dob'           =>$this->input->post('dob'),
            'marital_status'=>$this->input->post('maritalstatus'),
            'nochild '      =>$nochilds,
            'livig_status'  =>$living_status,
            'living_in'     =>$this->input->post('nationality'), 
            'mobile'        =>$phncode.$this->input->post('mobile'),
            'email'         =>$this->input->post('email'),
            'password'      =>$cpassword,
            'opwd'          =>$password,
            'addedby'       =>$addedby,
            'Addedon'       =>date('Y-m-d H:i:s') 
            );
           $user_id = $this->matrimony->add_user($data);
           $length = strlen($user_id);
           if($gender == 'Male'){
               if ($length == 1) {
                    $profile_code = "PDM0000" . $user_id;
                } else if ($length == 2) {
                    $profile_code = "PDM000" . $user_id;
                } elseif ($length == 3) {
                    $profile_code = "PDM00" . $user_id;
                } elseif ($length == 4) {
                    $profile_code = "PDM0" . $user_id;
                } elseif ($length == 5) {
                    $profile_code = "PDM" . $user_id;
                }
               
           }
           if($gender == 'Female'){
               if ($length == 1) {
                    $profile_code = "PDF0000" . $user_id;
                } else if ($length == 2) {
                    $profile_code = "PDF000" . $user_id;
                } elseif ($length == 3) {
                    $profile_code = "PDF00" . $user_id;
                } elseif ($length == 4) {
                    $profile_code = "PDF0" . $user_id;
                } elseif ($length == 5) {
                    $profile_code = "PDF" . $user_id;
                }
           }
           $data1 = array(
            'profile_code'    =>$profile_code,
            'mothertounge'    =>$this->input->post('mothertongue'), 
            );
            $data2 = array(
            'profile_code'    =>$profile_code,
            );
            $msg=urlencode("Welcome to Padmashali.Your registration completed successfully.Your login details are : User Id: ".$profile_code." Password: ".$password." Thank You For Registering");
            $phon = substr($data['mobile'], strpos($data['mobile'], "-") + 1);
            $sms = array('mobile' =>$phon,'otp' => $msg);
            $result = $this->matrimony->add_user1($data1);
            $result1 = $this->matrimony->updateProfileCode($user_id,$data2);
            $this->session->set_userdata('profilecode', $profile_code);
            $this->sms($sms);
            if($result!=false && $result1!=false){
                redirect(base_url('matrimony/regpersonal'));
            }
        }
    }
    
    //rendom string generation for otp
    public function generateRandomString($length) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
        }
  //otp generation
    public function otpGenaration(){
        $mobile = $this->input->post('mobile');
        if($mobile){
            $otp =  $this->generateRandomString(6); 
            $msg = urlencode("Your Padmashali one time password is $otp . Enetre in this form to confirm"); 
            $data = array('mobile' => $mobile,'otp' => $msg,'verify' => 0);
            $insert =  $this->matrimony->addOtp($data);
            if($insert){
                $this->sms($data);
                echo $otp;
            }
            else{echo "fail";}
        }
    }
    //sending sms function
    public function sms($data){
        $to = $data['mobile'];
        $from = "PSHALI";
        $username = urlencode("pshali");
        $password = urlencode("Ku51RjiV");
        $msg = urlencode($data['otp']);
        $params = "username=$username&password=$password&from=$from&to=$to&msg=$msg&type=1&dnd_check=0";
        $fp = fopen("http://pointsms.in/API/sms.php?$params","r");
        $response = stream_get_contents($fp);
        fpassthru($fp);
        fclose($fp);
    
    }
       
    public function regpersonal(){
        $education = $this->matrimony->getEducation();
        $occupation = $this->matrimony->getOccupation();
        $employee = $this->matrimony->getEmployeement();
        $complexion = $this->matrimony->getComplexion();
        $bloodgroup = $this->matrimony->getBloodgroup();
        $specilcase = $this->matrimony->getSpecialcase();
        $rasi       = $this->matrimony->getRasi();
        $star       =$this->matrimony->getStar();
        $country =   $this->matrimony->getcountries();
        $data= array('education'=>$education,'occupation'=>$occupation,'employee'=>$employee,'complexion'=>$complexion,'bloodgroup'=>$bloodgroup,'specilcase'=>$specilcase,'rasi'=>$rasi,'star'=>$star,'country'=>$country);
        $this->load->view('register',$data);  
    }
    
    public function registrtaionAdd(){

        $profilecode = $this->input->post('profilecode');

        $data = array(
            'edu' =>$this->input->post('education'),
            'edu_details'=>$this->input->post('edudetails'),
            'occu'=>$this->input->post('occupation'),
            'occ_details'=>$this->input->post('occdetails'),
            'income'=>$this->input->post('income'),
            'empin'=>$this->input->post('empin'),
            'employmentdetails'=>$this->input->post('empdetails'),
            'feet'=>$this->input->post('feet'),
            'weight'=>$this->input->post('weight'),
            'cmplxion'=>$this->input->post('complexion'),
            'bldgrp'=>$this->input->post('bloodgroup'),
            'splcases'=>$this->input->post('specilcase'),
            'dite'=>$this->input->post('dite'),
            'body_type'=>$this->input->post('bodytype'),
            'smoke'=>$this->input->post('Smoke'),
            'drink'=>$this->input->post('Drink'),
            'birth_place'=>$this->input->post('birthplace'),
            'hrs'=>$this->input->post('hrs'),
            'mins'=>$this->input->post('minutes'),
            'secs'=> $this->input->post('secs'),
            'period'=> $this->input->post('period'),
            'birth_name '=>$this->input->post('birthname'),
            'gowthram'=>$this->input->post('gowthram'),
            'rasi'=>$this->input->post('rasi'),
            'paadam '=>$this->input->post('paadam'),
            'star'=>$this->input->post('star'),
            'horoscope'=>$this->input->post('horoscope'),
            'manglik'=>$this->input->post('manglik'),
            'address'=>$this->input->post('address'),
            'perminantaddress'=>$this->input->post('paddress'),
            'country'=>$this->input->post('country'),
            'state'=>$this->input->post('state'),
            'city'=>$this->input->post('city'),
            'fmobile'=>$this->input->post('AlternateMobile'),
            'phone'=>$this->input->post('LandLine'),
            'res_status'=>$this->input->post('res_status'),
            'family_origin'=>$this->input->post('family_origin'),
             'aboutme'=>$this->input->post('Aboutme'),
             'father_name'=>$this->input->post('fathername'),
             'fa_alive'=>$this->input->post('Mr'),
             'father_occupation'=>$this->input->post('father_occupation'),
             'mother_name'=>$this->input->post('mothername'),
             'ma_alive'=>$this->input->post('Mrs'),
             'mother_occupation'=>$this->input->post('mother_occupation'),
             'elder_bro'=>$this->input->post('elderbro'),
             'young_bro'=>$this->input->post('youngerbro'),
             'elder_sis'=>$this->input->post('eldersis'),
             'young_sis'=>$this->input->post('youngersis'),
             'elder_bro1'=>$this->input->post('elmarried'),
             'young_bro1'=> $this->input->post('yumaried'),
             'elder_sis1'=> $this->input->post('elsismarried'),
             'young_sis1'=>$this->input->post('ysmarried'),
             'desc_family'=>$this->input->post('aboutfamily'),
        );

        $insert = $this->matrimony->personalAdd($profilecode,$data);
        if($insert!=false){
            redirect(base_url('matrimony/photoUpload'));
        }
        
    }
    
   public function  photoUpload(){
       $this->load->view('addphoto');
   }
   
    public function doUpload($filename,$file){
        $config['upload_path'] = 'uploads/profilepics/';
        $config['allowed_types'] = 'jpg|png|jpeg';   
        $this->load->library('upload', $config);  
        $config['file_name'] = $filename;
        $this->upload->initialize($config);
        if(!$this->upload->do_upload($file)){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('addPhoto', $error);
            }
   }
   
   public function photoAdd(){
        $profilecode = $this->input->post('profilecode');
       
         //set preferences
            if($_FILES['image']['name']!='') 
               {
                    $unique_id=$profilecode."".rand(00,999);
                    $imgfile = $_FILES['image']['tmp_name'];
                    $ext=explode(".",$_FILES['image']['name']);
                    $fimage= $unique_id.".".$ext[1];
                    $this->doUpload($fimage,'image');
                    $images['image'] = $fimage;
               }    
               if($_FILES['image1']['name']!='') 
               {
                    $unique_id=$profilecode."".rand(00,999).date('s'). 'a';
                    $imgfile = $_FILES['image1']['tmp_name'];
                    $ext=explode(".",$_FILES['image1']['name']);
                    $secondimage= $unique_id.".".$ext[1];
                    $this->doUpload($secondimage,'image1');
                    $images['image1'] = $secondimage;
               }   
               if($_FILES['image2']['name']!='') 
               {
                    $unique_id=$profilecode."".rand(00,999).date('s'). 'b';
                    $imgfile = $_FILES['image2']['tmp_name'];
                    $ext=explode(".",$_FILES['image2']['name']);
                    $threeimage= $unique_id.".".$ext[1];
                    $this->doUpload($threeimage,'image2');
                    $images['image2'] = $threeimage;
                    
               }     
              if($images){
               $count = $this->matrimony->profilepics($profilecode,$images); 
               if($count > 0){
                   redirect(base_url('matrimony/requiredMatch'));
               }
             
            }
              
   }
  
    public function  requiredMatch(){
         $this->captcha_setting();
       
         //$this->load->view('required_match',$data1);
   }
   
   public function addPartner(){
   if(empty($_POST)){
           $this->captcha_setting();
        }
    else{    
       if (strcasecmp($_SESSION['captchaWord'], $_POST['captcha']) !== 0) {
            echo "<script type='text/javascript'> alert('Captcha is incorrect'); </script>";
                    $this->captcha_setting();
       }
    else {
       $education = $this->input->post('education');
       $edu_for = $this->input->post('educations');
       $occupation = $this->input->post('occupation');
       $occuaption_for = $this->input->post('occupations');
       if($education == 'DoesNotMatter'){
           $partnereducation = '0';
           $partnereducationtype = 'DoesNotMatter';
       }
       else{
         $partnereducationtype = 'Educated';
         $partnereducation = implode(',',$edu_for );  
       }
       
       if($occupation == 'DoesNotMatter'){
            $partneroccuaptiontype = 'DoesNotMatter';
            $partneroccuaption = '0';
       }else
       if($occupation == 'NotWorking'){
            $partneroccuaptiontype = 'NotWorking';
            $partneroccuaption = '0';
       }else
        if($occupation == 'Working'){
            $partneroccuaptiontype = 'Working';
            $partneroccuaption = implode(',',$occuaption_for); 
        }
       $profilecode = $this->input->post('profilecode');
       $heightfrom=str_replace(' ','',$this->input->post('feetfor'));//here removing the space of height From
       $heightto=str_replace(' ','',$this->input->post('feetto'));
       $looking = $this-> input->post('looking');
       $data = array(
           'look_for'=>implode(",", $looking),
           'age_from '=>$this->input->post('agefrom'),
           'age_to'=>$this->input->post('ageto'),
           'feet_from'=>$heightfrom,
           'inch_from'=>$heightto,
           'Complexion_from'=>$this->input->post('cmplxionfor'),
           'Education_from'=>$partnereducation,
           'Occuaption_From'=>$partneroccuaption,
           'AnnualIncome_from'=>$this->input->post('anualincome'),
           'Education_fromType'=>$partnereducationtype,
           'Occuaption_FromType'=>$partneroccuaptiontype,
       );
       $update = $this->matrimony->addRequiredMatch($profilecode,$data);
      if($update!=false){
           
          redirect(base_url('thankyou'));
      }
              
      $this->captcha_setting();
            }
    }
   }
    public function thankyou(){
         $this->load->view('thankyou');
    }
    
    //login method
    public function login(){
        if($this->input->post('go')){
            $username = $this->input->post('userid');
            $password = $this->input->post('password');
            if($this->matrimony->login($username,$password))
            {
               redirect('matrimony/dashboard');
            }
            else{
              $message = "Please enter valid username/password";
              $this->session->set_flashdata('loginfail',$message);
              redirect('matrimony');
            }
        }
    }
    public function dashboard(){
        if($this->session->userdata('username')){
            $education = $this->matrimony->getEducation();
            $occupaton = $this->matrimony->getOccupation();
                    $this->load->view('dashboard',array('education' => $education,'occupation' => $occupaton));
                }
                else{
                    $message = "You are not authorized";
                    $this->session->set_flashdata('fail',$message);
                    redirect('matrimony');
                   
                }
    }
    public function searchResult(){
        if($this->input->post('submit')){
            $data = array('from' => $this->input->post('fromage'),
                          'to' => $this->input->post('toage'),
                          'education' => $this->input->post('education'),
                          'occupation' => $this->input->post('occupation'));
            $result = $this->matrimony->search($data);
            if($result){
                $this->load->view('search_result',array('result' => $result));
            }
        }
    }
    
    public function viewProfile(){
       $profilecode = $this->session->userdata('username'); 
      $result = $this->matrimony->viewProfile($profilecode);
      $this->load->view('view_profile',array('result' => $result));
    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect('matrimony');
    }

       
} 
?>
