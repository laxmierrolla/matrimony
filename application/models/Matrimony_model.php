 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  Module: Matrimony Model
  Author: Laxmi
  Created Date: 7/July/2017
 * */
class Matrimony_model extends CI_Model
{
  private $tablename = "";
 
  public function __construct(){
    parent::__construct();
    
  }
 
    
    public function getcountries(){
       return  $this->db->select('id,name,phonecode')->from('countries')->get()->result();
        
    }
    
     public function getEducation(){
       return $this->db->select('edu_id,education,edu_status,TrashStatus')->from('tbl_education')->where(array('edu_status'=>'1','TrashStatus'=>'0'))->order_by("education","ASC")->get()->result();
      
    }
    
     public function getOccupation(){
       return $this->db->select('*')->from('tbl_occupation')->where(array('Occ_status'=>'1','TrashStatus'=>'0'))->order_by("occupation","ASC")->get()->result();
      
    }
    
    public function getEmployeement(){
       return $this->db->select('*')->from('tbl_emplin')->where(array('emp_status'=>'1','TrashStatus'=>'0'))->get()->result();
      
    }
    
    public function getComplexion(){
       return $this->db->select('*')->from('tbl_complexion')->where(array('cmplex_status'=>'1'))->get()->result();
      
    }
    
    public function getBloodgroup(){
       return $this->db->select('*')->from('tbl_bldgrp')->where(array('bld_status'=>'1','TrashStatus'=>'0'))->get()->result();
      
    }
    public function getSpecialcase(){
       return $this->db->select('*')->from('tbl_spacial')->where(array('spl_status'=>'1','TrashStatus'=>'0'))->get()->result();
      
    }
    
    
    public function getRasi(){
       return $this->db->select('*')->from('tbl_rasi')->where(array('rasi_status'=>'1','TrashStatus'=>'0'))->get()->result();
      
    }
    
      public function getStar(){
       return $this->db->select('*')->from('tbl_star')->where(array('star_status'=>'1','TrashStatus'=>'0'))->get()->result();
      
    }


 //check email   
    public function checkemail($email){  
        $query = $this->db->select('email')->from('tbl_personel')->where(array('email'=>$email))->get();   
        if($query->num_rows() > 0) {
          return 'success';
        }else{
           return 'fail';
        }
    }

 //check mobile number   
    
    public function checkmobile($mobile){  
        $query = $this->db->select('mobile')->from('tbl_personel')->where(array('mobile'=>$mobile))->get();   
        if($query->num_rows() > 0) {
          return 'success';
        }else{
           return 'fail';
        }
    }
    
     public function add_user($data){
          $this->db->insert('tbl_personel',$data);
          return $this->db->insert_id();
      }
      
     public function add_user1($data){
          return $this->db->insert('tbl_family',$data);
          
      }
      public function add_user2($data){
          return $this->db->insert('tbl_money',$data);
          
      }
      
      public function updateProfileCode($id, $data)
    {   
        $this->db->where(array('id'=>$id));
        $this->db->update('tbl_personel', $data);
        return $this->db->affected_rows();
    
    }
    
   //get states based on countries
     public function get_states($country){
        $this->db->select('*');
        $this->db->from('states');
        $this->db->where('country_id',$country);
        $query = $this->db->get();
        /*echo $this->db->last_query();
        exit;*/
        return $query->result();
    }
    
    
    //get cities based on state
     public function get_cities($state){
        $this->db->select('*');
        $this->db->from('cities');
        $this->db->where('state_id',$state);
        $query = $this->db->get();
        return $query->result();
    }
    
    //insert personal details into family table
    
    public function personalAdd($profilecode,$data){
       $this->db->where(array('profile_code'=>$profilecode));
       $this->db->update('tbl_family', $data);
       echo $this->db->last_query();
        return $this->db->affected_rows();
        
    }
    //profile pics update
    public function profilepics($profilecode,$image){
        $this->db->set('a.thumbimage',$image['thumbimage']);
        $this->db->where(array('a.profile_code'=>$profilecode));
        $this->db->update('tbl_personel as a');
        
        $this->db->set('b.image',$image['orgimage']);
        $this->db->where(array('b.profile_code'=>$profilecode));
        $this->db->update('tbl_family as b');
        return $this->db->affected_rows();
    }
 //add otp method
    public function addOtp($data){
        return $this->db->insert('otp',$data);
    }
    
//update required match
    public function addRequiredMatch($profilecode,$data){
       $this->db->where(array('profile_code'=>$profilecode));
       $this->db->update('tbl_family',$data);
       return $this->db->affected_rows(); 
        
    }
    
     //login function 
    public function login($username,$password){
       $count = $this->db->select('a.*,b.paidstatus')
               ->from('tbl_personel as a')
               ->join('tbl_money as b','a.profile_code = b.profile_code')
               ->where("(a.profile_code='$username' OR  a.mobile='$username' OR a.email='$username')")
               ->where('a.opwd',$password)
               ->get();
       if($count->num_rows()==1){
        $row = $count->row();   
           $user = array('username' => $username,'gender' => $row->gender,'profile_by'=>$row->profile_by,'paidstatus'=>$row->paidstatus,'name'=>$row->sname." ".$row->fname." ".$row->lname,'thumbimage'=>$row->thumbimage);
           $this->session->set_userdata('user',$user);
                   $data = array(
                    'last_login' => date('Y-m-d H:i:s'),
                     );
           $this->db->where('profile_code',$username);
           $this->db->update('tbl_personel', $data);
           return true;
       }
       else{
           return false;
       }
                                                    
    }
    //profile search
    public function search($data){
        $gender =  'Male';
        if($this->session->userdata('gender') == 'Male'){
            $gender = 'Female';
        }
        $result = $this->db->select('p.*,f.*,e.education,o.occupation')
                ->from('tbl_personel as p')
                ->join('tbl_family as f','f.profile_code = p.profile_code')
                ->join('tbl_education as e','e.edu_id = f.edu')
                ->join('tbl_occupation as o','o.Occ_Id = f.occu')
                ->where(array('p.gender' => $gender,'f.edu' => $data['education'],'f.occu' => $data['occupation'],'p.age >=' =>$data['from'],'p.age<=' =>$data['to'] ))
                ->get()->result();
    if($result){
        return $result;
     }
    }
    
    public function educationname(){
        $result = $this->db->select('*')->from('tbl_education')->get()->result();
        if($result){
            return $result;
        }
    }  
    
     public function occupationname(){
        $result = $this->db->select('*')->from('tbl_occupation')->get()->result();
        if($result){
            return $result;
        }
    }  
   
    
    

}

