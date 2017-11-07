 <?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 /**
  Module: Matrimony Model
  Author: Laxmi
  Created Date: 29/October/2017
 * */
class Userdashboard_model extends CI_Model
{
  private $tablename = "";
 
  public function __construct(){
    parent::__construct();
    
  }
  
  public function userdata($profileid){ 
      $result = $this->db->select('a.*,b.*,')->from('tbl_personel as a')->join('tbl_money as b','a.profile_code = b.profile_code')->where(array('a.profile_code' =>$profileid))->get()->row();
       if($result){
           return $result;
           
       }
  }
  
   public function viewProfile($profilecode){
       $result = $this->db->select('p.*,f.*,e.education,o.occupation,c.name as county,s.name as stat,ci.name as cit,l.Language_Name as language,cu.name as living,em.employee,b.bldgroup,ts.spacial,st.star as stars,r.rasi as rasis,ct.name as countryresidant_from ')
                ->from('tbl_personel as p')
                ->join('tbl_family as f','f.profile_code = p.profile_code')
                ->join('tbl_education as e','e.edu_id = f.edu')
                ->join('tbl_occupation as o','o.Occ_Id = f.occu')
                ->join('countries as c','c.id = f.country')
                ->join('countries as cu','cu.id = p.living_in')
                ->join('countries as ct','ct.id = f.countryresidant_from ')
                ->join('states as s','s.id = f.state')
                ->join('cities as ci','ci.id = f.city')
                ->join('language_tbl as l','l.L_ID = f.mothertounge')
                ->join('tbl_emplin as em','em.emp_id = f.empin')
                ->join('tbl_bldgrp as b','b.bld_id = f.bldgrp')
                ->join('tbl_spacial as ts','ts.spl_id = f.splcases')
                ->join('tbl_star as st','st.star_id = f.star') 
                ->join('tbl_rasi as r','r.rasi_id = f.rasi')
                ->where(array('p.profile_code' => $profilecode))
                ->get()->row();
                /*echo $this->db->last_query();
                exit; */
    if($result){
        return $result;
     }
    }                                                                                
  
  public function aboutmedata($profileid){
      $res = $this->db->select('aboutme')->from('tbl_family')->where(array('profile_code'=>$profileid))->get()->row();
      return $res;
  }
 public function aboutmeupdate($profileid,$data){
        $this->db->where(array('profile_code'=>$profileid));
        $this->db->update('tbl_family', $data);
        return $this->db->affected_rows();
 }                                                                                       
 public function basicdedata($profilecode){
     $res = $this->db->select('a.profile_by,a.ref_by,a.sname,a.fname,a.lname,a.gender,a.marital_status,a.dob,b.mothertounge,a.living_in,a.mobile,a.email')
                        ->from('tbl_personel as a')
                        ->join('tbl_family as b','a.profile_code = b.profile_code')
                        ->where(array('a.profile_code'=>$profilecode))
                        ->get()->row();
                        return $res;
 }
 
 public function basicdupdate(){
     $profilecode = $this->input->post('profile_id');
       $data = array(
                      'profile_by'     =>  $this->input->post('profile_by'),
                      'ref_by'         =>  $this->input->post('reference') ,
                      'sname'          =>  $this->input->post('surname'),
                      'fname'          =>  $this->input->post('firstname'),
                      'lname'          =>  $this->input->post('lastname'),
                      'gender'         =>  $this->input->post('gender'),
                      'marital_status' =>  $this->input->post('maritalstatus'),
                      'dob'            =>  $this->input->post('dob'),
                      'living_in'      =>  $this->input->post('nationality'),
                       'mobile'        =>  $this->input->post('mobile'),
                       'email'         =>  $this->input->post('email'),
                    );
        $this->db->where(array('profile_code'=>$profilecode));
        $this->db->update('tbl_personel', $data);
        $data1 = array('mothertounge'=>$this->input->post('mothertongue'));
        
      
        $data1 = array('mothertounge'=>$this->input->post('mothertongue'));
        $this->db->where(array('profile_code'=>$profilecode));
        $this->db->update('tbl_family', $data1);
        
        return $this->db->affected_rows();
       
 }
 
 public function physicaldata($profileid){
         $res = $this->db->select('feet,weight,cmplxion,bldgrp,splcases,dite,body_type,smoke,drink')
                        ->from('tbl_family')
                        ->where(array('profile_code'=>$profileid))
                        ->get()->row();
                        return $res;
 }
 
 public function  physicalupdate($pfid,$data){
       
       $this->db->where(array('profile_code'=>$pfid));
        $this->db->update('tbl_family', $data);
        return $this->db->affected_rows();
 }
 
 public function horodata($profileid){
       $res = $this->db->select('birth_place,hrs,mins,secs,period,birth_name,gowthram,rasi,star,paadam,horoscope,manglik')
                        ->from('tbl_family')
                        ->where(array('profile_code'=>$profileid))
                        ->get()->row();
                        return $res;
     
 }
 
 public function horoupdate($pfid,$data){
     $this->db->where(array('profile_code'=>$pfid));
        $this->db->update('tbl_family', $data);
        return $this->db->affected_rows();
 }
 
 
public function professionaldata($profileid){
    $res = $this->db->select('edu,edu_details,occu,occ_details,income,empin,employmentdetails')
                        ->from('tbl_family')
                        ->where(array('profile_code'=>$profileid))
                        ->get()->row();
                        return $res;
    
}

public function prfupdate($pfid,$data){
     $this->db->where(array('profile_code'=>$pfid));
     $this->db->update('tbl_family', $data);
     return $this->db->affected_rows();
    
}

public function contactsdata($profileid){
    $res = $this->db->select('address,phone,fmobile,res_status,country,state,city,perminantaddress,family_origin')
                        ->from('tbl_family')
                        ->where(array('profile_code'=>$profileid))
                        ->get()->row();
                        return $res;
    
}

public function contactupdate($prfid,$data){
     $this->db->where(array('profile_code'=>$prfid));
     $this->db->update('tbl_family', $data);
     return $this->db->affected_rows();
}

public function family_data($prfid){
    $res = $this->db->select('father_name,fa_alive,father_occupation,mother_name,ma_alive,mother_occupation,elder_bro,young_bro,elder_sis,young_sis,elder_bro1,young_bro1,elder_sis1,young_sis1,desc_family')
                        ->from('tbl_family')
                        ->where(array('profile_code'=>$prfid))
                        ->get()->row();
                        return $res;
    
}

public function familyupdate($prfid,$data){
     $this->db->where(array('profile_code'=>$prfid));
     $this->db->update('tbl_family', $data);
     return $this->db->affected_rows();
    
}
 
  
}