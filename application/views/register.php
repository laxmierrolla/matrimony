 <?php $this->load->view('template/head'); ?>
 <style type="text/css">
     .error{color:#f30;font-size:13px;font-style:italic;}
 </style> 
  <body class="rg-body">

<div class="overlay">
    <div id="sticky-anchor"></div>
    <!-- ============================  Navigation Start =========================== -->
    <div id="tf-menu" class="navbar">
        <div class="container">
           <div class="col-md-2 col-sm-2 col-xs-12">
           <a class="brand" href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a>
           </div> <!-- end pull-right -->
            <div class="col-md-10 col-sm-12 col-xs-12 no-padding nav-hdng">
                  <p>Welcome to Padmashali India Matrymony!</p>                                
            </div>
          <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inverse-blue -->
    <div class="register-banner">
        <img src="<?php echo base_url();?>assets/images/register-banner.jpg" alt="register-banner" width="100%">
    </div>
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
        <div class="row register-form">
            <form name="pregform" id="pregform" method="post" action="<?php echo base_url('matrimony/registrtaionAdd');?>">
            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                    <div class="col-md-12">
                        <div class="rg-qts">
                        <h2>Thanks for Registering. Now let's build your profile</h2>
                        <p>Photo-Matches via Email. Join Free! <strong>Padmashaliindia.com</strong></p>
                        <hr/>
                        </div>
                        <div class="formh3">
                        <h2>Personal Information </h2>
                        </div>
                        <!--<div class="rbox-hr">
                        <hr>
                        <hr>
                        </div>-->
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-top col-md-10 no-padding">
                        <!--<ul>
                            <li><a><span>*</span>All Felds are Mandatory</a></li>
                        </ul>-->
                        <?php $profilecode = $this->session->userdata('profilecode'); ?>
                        <input type="hidden" class="form-control input-sm"  name="profilecode" id="profilecode" value="<?php echo $profilecode;?>">
                        </div>
                    </div>
                
                    <div class="form-group col-md-12 no-padding">
                        <div class="col-md-12 rg-headng">
                            <h4> Educational Details </h4>
                        </div>
                        <div class="col-md-4">
                            <label for="name">Education <span>*</span></label>
                        </div>
                        <div class="col-md-6">
                            <select name="education" id="education" tabindex="1" class="form-control input-sm"> 
                                <option value="">-- Choose Education--</option>
                                 <?php if(isset($education)){
                                        foreach($education as $edu){?>
                                         <option value="<?php echo $edu->edu_id;?>"><?php echo $edu->education ;?></option>   
                                        <?php }
                                    }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Education Details</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm"  name="edudetails" id="edudetails" placeholder="(ex:Electronics,computers,Management,etc..)">
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Occupation<span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="occupation" id="occupation" tabindex="1" class="form-control input-sm"> 
                                <option value="">-- Choose Occupation--</option>
                                 <?php if(isset($occupation)){
                                        foreach($occupation as $ocu){?>
                                         <option value="<?php echo $ocu->Occ_Id;?>"><?php echo $ocu->occupation ;?></option>   
                                        <?php }
                                    }?>
                            </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Occupation Details</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm" name="occdetails" id="occdetails" placeholder="(ex:S/W,H/W,Marketing,CEO,Military etc..)">
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding ocbox">
                    <div class="col-md-4">
                        <label for="name">Annual Income <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="income" class="form-control input-sm">
                            <option value="">--Choose Income--</option>
                            <option value="Upto INR 1 Lakh" label="Upto INR 1 Lakh">Upto INR 1 Lakh</option>
                            <option value="INR 1 Lakh to 2 Lakh" label="INR 1 Lakh to 2 Lakh">INR 1 Lakh to 2 Lakh</option>
                            <option value="INR 2 Lakh to 4 Lakh" label="INR 2 Lakh to 4 Lakh">INR 2 Lakh to 4 Lakh</option>
                            <option value="INR 4 Lakh to 7 Lakh" label="INR 4 Lakh to 7 Lakh">INR 4 Lakh to 7 Lakh</option>
                            <option value="INR 7 Lakh to 10 Lakh" label="INR 7 Lakh to 10 Lakh">INR 7 Lakh to 10 Lakh</option>
                            <option value="INR 10 Lakh to 15 Lakh" label="INR 10 Lakh to 15 Lakh">INR 10 Lakh to 15 Lakh</option>
                            <option value="INR 15 Lakh to 20 Lakh" label="INR 15 Lakh to 20 Lakh">INR 15 Lakh to 20 Lakh</option>
                            <option value="INR 20 Lakh to 30 Lakh" label="INR 20 Lakh to 30 Lakh">INR 20 Lakh to 30 Lakh</option>
                            <option value="INR 30 Lakh to 50 Lakh" label="INR 30 Lakh to 50 Lakh">INR 30 Lakh to 50 Lakh</option>
                            <option value="INR 50 Lakh to 75 Lakh" label="INR 50 Lakh to 75 Lakh">INR 50 Lakh to 75 Lakh</option>
                            <option value="INR 75 Lakh to 1 Crore" label="INR 75 Lakh to 1 Crore">INR 75 Lakh to 1 Crore</option>
                            <option value="INR 1 Crore &amp; above" label="INR 1 Crore &amp; above">INR 1 Crore &amp; above</option>
                            <option value="Not applicable" label="Not applicable">Not applicable</option>
                            <option value="Dont want to specify" label="Dont want to specify">Dont want to specify</option>                                            
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding ocbox">
                    <div class="col-md-4">
                        <label for="name">Employed in<span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="empin" id="empin" tabindex="1" class="form-control input-sm"> 
                                <option value="">-- Choose Employeed In--</option>
                                 <?php if(isset($employee)){
                                        foreach($employee as $emp){?>
                                         <option value="<?php echo $emp->emp_id;?>"><?php echo $emp->employee ;?></option>   
                                        <?php }
                                    }?>
                            </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding ocbox">
                    <div class="col-md-4">
                        <label for="name">Employeement Details</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm"  name="empdetails" id="empdetails" placeholder="Enter Employement Details">
                    </div>
                    </div>
                    
                    <div class="col-md-12 rg-headng">
                        <h4> Physical Attributes </h4>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Height <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="feet" name="feet" class="form-control input-sm" >
                            <option value="NONE">Choose Feet</option> 
                            <option value="4ft 1in( 121cm )">4ft 1in( 121cm )</option>
                            <option value="4ft 2in( 124cm )">4ft 2in( 124cm )</option>
                            <option value="4ft 3in( 127cm )">4ft 3in( 127cm )</option>
                            <option value="4ft 4in( 129cm )">4ft 4in( 129cm )</option>
                            <option value="4ft 5in( 132cm )">4ft 5in( 132cm )</option>
                            <option value="4ft 6in( 134cm )">4ft 6in( 134cm )</option>
                            <option value="4ft 7in( 137cm )">4ft 7in( 137cm )</option>
                            <option value="4ft 8in( 139cm )">4ft 8in( 139cm )</option>
                            <option value="4ft 9in( 142cm )">4ft 9in( 142cm )</option>
                            <option value="4ft 10in( 144cm )">4ft 10in( 144cm )</option>
                            <option value="4ft 11in( 147cm )">4ft 11in( 147cm )</option>
                            <option value="5ft( 149cm )">5ft( 149cm )</option>
                            <option value="5ft 1in( 152cm )">5ft 1in( 152cm )</option>
                            <option value="5ft 2in( 154cm )">5ft 2in( 154cm )</option>
                            <option value="5ft 3in( 157cm )">5ft 3in( 157cm )</option>
                            <option value="5ft 4in( 160cm )">5ft 4in( 160cm )</option>
                            <option value="5ft 5in( 162cm )">5ft 5in( 162cm )</option>
                            <option value="5ft 6in( 165cm )">5ft 6in( 165cm )</option>
                            <option value="5ft 7in( 167cm )">5ft 7in( 167cm )</option>
                            <option value="5ft 8in( 170cm )">5ft 8in( 170cm )</option>
                            <option value="5ft 9in( 172cm )">5ft 9in( 172cm )</option>
                            <option value="5ft 10in( 175cm )">5ft 10in( 175cm )</option>
                            <option value="5ft 11in( 177cm )">5ft 11in( 177cm )</option>
                            <option value="6ft ( 180cm )">6ft ( 180cm )</option>
                            <option value="6ft 1in( 182cm )">6ft 1in( 182cm )</option>
                            <option value="6ft 2in( 185cm )">6ft 2in( 185cm )</option>
                            <option value="6ft 3in( 187cm )">6ft 3in( 187cm )</option>
                            <option value="6ft 4in( 190cm )">6ft 4in( 190cm )</option>
                            <option value="6ft 5in( 193cm )">6ft 5in( 193cm )</option>
                            <option value="6ft 6in( 195cm )">6ft 6in( 195cm )</option>
                            <option value="6ft 7in( 198cm )">6ft 7in( 198cm )</option>
                            <option value="6ft 8in( 200cm )">6ft 8in( 200cm )</option>
                            <option value="6ft 9in( 203cm )">6ft 9in( 203cm )</option>
                            <option value="6ft 10in( 205cm )">6ft 10in( 205cm )</option>
                            <option value="6ft 11in( 208cm )">6ft 11in( 208cm )</option>
                            <option value="7ft ( 210cm )">7ft ( 210cm )</option>
                        </select>                                            
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                        
                        <div class="col-md-4">
                            <label for="name">Weight ( In Kgs ) <span>*</span></label>
                        </div>
                        <div class="col-md-6">
                            <select name="weight" id="weight" class="form-control input-sm">
                                 <option value="NONE">--select--</option> 
                                 <option value="Dont Know">Don't Know</option>
                                 <?Php  for ($we = 30; $we <= 300; $we++) {  ?>
                                 <option value="<?php echo $we; ?>"><?php echo $we; ?> Kgs</option> 
                                 <?php } ?>                                 
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Complexion <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="complexion" id="complexion" class="form-control input-sm" >
                            <option value="">--select--</option> 
                                 <?php if(isset($complexion)){
                                        foreach($complexion as $comp){?>
                                         <option value="<?php echo $comp->cmplex;?>"><?php echo $comp->cmplex ;?></option>   
                                        <?php }
                                    }?>                               
                        </select>                            
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Blood group <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="bloodgroup" id="bloodgroup" class="form-control input-sm">
                           <option value="">--select--</option>
                                 <?php if(isset($bloodgroup)){
                                        foreach($bloodgroup as $blood){?>
                                         <option value="<?php echo $blood->bld_id;?>"><?php echo $blood->bldgroup ;?></option>   
                                        <?php }
                                    }?> 
                                    <option value="Don'tKnow">Dontknow</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Special Cases <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="specilcase" id="specilcase" class="form-control input-sm">
                            <option value="">--select--</option>
                            <?php if(isset($specilcase)){
                                        foreach($specilcase as $spl){?>
                                         <option value="<?php echo $spl->spl_id;?>"><?php echo $spl->spacial  ;?></option>   
                                        <?php }
                                    }?> 
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name"> Dite <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="dite" id="dite" tabindex="15" class="form-control input-sm">
                             <option value="">--select--</option>
                             <option value="Veg">Veg</option>
                             <option value="Non-Veg">Non-Veg</option>
                             <option value="Both">Both</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="BodyType">Body Type</label>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12 no-padding sky-form">
                        <label class="radio">
                            <input type="radio" value="Slim" name="bodytype"><i></i>Slim
                            </label>
                            <label class="radio">
                            <input type="radio" value="Average" name="bodytype"><i></i>Average
                            </label>
                            <label class="radio">
                            <input type="radio" value="Athletic" name="bodytype"><i></i>Athletic    
                            </label>
                            <label class="radio">
                            <input type="radio" value="Heavy" name="bodytype"><i></i>Heavy    
                            </label>
                    </div>
                    </div>
                    </div>
                    <div class="col-md-12 rg-headng">
                        <h4> Habits </h4>
                    </div>
                    <div class="form-group col-md-12 no-padding sky-form">
                    <div class="col-md-4 no-pad">
                        <label for="Smoke">Smoke <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                         <label class="radio">
                            <input type="radio" value="Yes" name="Smoke"><i></i>Yes    
                            </label>
                            <label class="radio">
                            <input type="radio" value="No" name="Smoke"> <i></i>No    
                            </label>
                            <label class="radio">
                            <input type="radio" value="Occasionally" name="Smoke"><i></i>Occasionally    
                            </label>                                            
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding sky-form">                       
                        <div class="col-md-4 no-pad">
                            <label for="drink">Drink <span>*</span></label>
                        </div>
                        <div class="col-md-6">
                            <label class="radio">
                            <input type="radio" value="Yes" name="Drink"><i></i>Yes    
                            </label>
                            <label class="radio">
                            <input type="radio" value="No" name="Drink"> <i></i>No    
                            </label>
                            <label class="radio">
                            <input type="radio" value="Occasionally" name="Drink"><i></i>Occasionally    
                            </label>
                        </div>
                    </div>
                    <div class="col-md-12 rg-headng">
                        <h4>Horoscope Information</h4>
                    </div>
                    
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Birth Place <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm"  name="birthplace" id="birthplace" placeholder="Enter Birth place(ex:HYD,USA etc)">
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name" class="col-md-12 no-padding">Birth Time <span>*</span></label>
                    </div>
                    <div class="col-md-6 no-pad">
                        <div class="col-md-12 no-pad">
                            <div class="col-md-3">
                          <select name="hrs" id="hrs" tabindex="28" class="form-control input-sm">>
                            <option value="">Hrs</option>
                             <option value="Dont Know">Dont Know</option>
                             <?php for($i=1;$i<=12;$i++){
                                 if($i<=9){ ?>
                                     <option value="<?php echo "0".$i;?>"><?php echo "0".$i;?></option>
                                 <?php }else{?>
                                   <option value="<?php echo $i;?>"><?php echo $i;?></option>
                             <?php }}?>
                        </select> 
                    </div>
                    <div class="col-md-3">
                          <select name="minutes" id="minutes" tabindex="28" class="form-control input-sm">>
                            <option value="">Minutes</option>
                             <option value="Dont Know">Dont Know</option>
                             <?php for($i=1;$i<=59;$i++){
                                 if($i<=9){ ?>
                                     <option value="<?php echo "0".$i;?>"><?php echo "0".$i;?></option>
                                 <?php }else{?>
                                   <option value="<?php echo $i;?>"><?php echo $i;?></option>
                             <?php }}?>
                        </select>  
                    </div>
                     <div class="col-md-3">
                          <select name="secs" id="secs" tabindex="28" class="form-control input-sm">>
                            <option value="">seconds</option>
                             <option value="Dont Know">Dont Know</option>
                             <?php for($i=1;$i<=59;$i++){
                                 if($i<=9){ ?>
                                     <option value="<?php echo "0".$i;?>"><?php echo "0".$i;?></option>
                                 <?php }else{?>
                                   <option value="<?php echo $i;?>"><?php echo $i;?></option>
                             <?php }}?>
                        </select>  
                    </div>
                    <div class="col-md-3">
                          <select name="period" id="period" tabindex="28" class="form-control input-sm">>
                            <option value="">at</option>
                             <option value="Dont Know">Dont Know</option>
                             <option value="AM">AM</option>
                             <option value="PM">PM</option>
                        </select>   
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Birth Name \ Janma Nammamu</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm" name="birthname" id="birthname" placeholder="Ex:Venkaswara,Eswar etc">                        
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Gowthram <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control input-sm"   name="gowthram" id="gowthram"   placeholder="(ex:AGASTHYASA,ATHREYASA,ACHAYANASA,UGRASENASA etc..! )">
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name"> Zodiac or Rasi <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="rasi" id="rasi" class="form-control input-sm">>
                           <option value="">--select--</option>
                            <?php if(isset($rasi)){
                                        foreach($rasi as $rasi){?>
                                         <option value="<?php echo $rasi-> rasi_id;?>"><?php echo $rasi->rasi;?></option>   
                                        <?php }
                                    }?> 
                        </select>
                    </div>
                    </div>
                    
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">  Paadam <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="paadam" id="paadam" tabindex="28" class="form-control input-sm">>
                            <option value="">--Choose paadam--</option>
                             <option value="Dont Know">Dont Know</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                        </select>
                    </div>
                    </div>
                    
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="name">Nakshatram<span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="star" id="star" class="form-control input-sm">>
                           <option value="">--select--</option>
                            <?php if(isset($star)){
                                        foreach($star as $star){?>
                                         <option value="<?php echo $star-> star_id;?>"><?php echo $star->star ;?></option>   
                                        <?php }
                                    }?> 
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="Horoscope">Horoscope Match <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                         <div class="col-md-12 no-pad sky-form">
                        <label class="radio">
                        <input type="radio" value="Yes" name="horoscope"><i></i>Yes    
                        </label>
                        <label class="radio">
                        <input type="radio" value="No" name="horoscope"><i></i>No
                        </label>
                        <label class="radio">
                        <input type="radio" value="Doesn't Matter" name="horoscope"><i></i>Don'tKnow
                        </label>    
                        </div>                        
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="Manglik">Manglik Status <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                         <div class="col-md-12 no-pad sky-form">
                        <label class="radio">
                        <input type="radio" value="Yes" name="manglik"><i></i>Yes    
                        </label>
                        <label class="radio">
                        <input type="radio" value="No" name="manglik"><i></i>No
                        </label>
                        <label class="radio">
                        <input type="radio" value="Doesn't Matter" name="manglik"><i></i>Don'tKnow
                        </label>    
                        </div>                    
                    </div>
                    </div>
                    <div class="col-md-12 rg-headng">
                        <h4>Contact Details</h4>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label for="address"> Address <span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <textarea name="address" id="address" class="form-control input-sm" rows="1" placeholder="Address"></textarea>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Permanent Address <span>*</span></label>     
                    </div>
                    <div class="col-md-6">
                        <textarea name="paddress" id="paddress" class="form-control input-sm" rows="1" placeholder="Permanent Address"></textarea>    
                        <input type="checkbox" value="sameadd" name="sameadadd" id="sameadadd" tabindex="36"> <label> Same As Address </label>    
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Country <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="country" id="country" class="form-control input-sm">
                            <option value="">--Select Country--</option>  
                            <?php if(isset($country)){
                            foreach($country as $coun){?>
                            <option value="<?php echo $coun->id;?>"><?php echo $coun->name ;?></option>   
                            <?php }
                            }?>                                           
                        </select>                        
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label class="form-group"> State <span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <select name="state"  id="state" class="form-control input-sm" >
                            <option value="">--Select State--</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> City <span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <select name="city" id="city" class="form-control input-sm" >
                            <option value="">--Select City--</option>
                        </select>
                    </div>
                    </div>
                    
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Alternate Mobile</label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="AlternateMobile" class="form-control input-sm"  placeholder="Alternate Mobile"/>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Land Line</label> 
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="LandLine" class="form-control input-sm"  placeholder="Land Line"/>                            
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label>Residence Status <span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <select name="res_status" class="form-control input-sm">
                            <option value="">--select--</option>
                            <option value="Dont Want be Specific">Don't Want to be Specific</option>
                            <option value="Rental">Rental</option>
                            <option value="Own">Own</option>
                        </select>            
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Family Origin <span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="family_origin" class="form-control input-sm"  placeholder="Family Origin"/>                        
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label class="form-group">About me<span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <textarea name="Aboutme" class="form-control input-sm" rows="1" placeholder="Describe About you"></textarea>    
                        <label>Up to 300 words</label>
                    </div>
                    </div>
                    <div class="col-md-12 rg-headng">
                        <h4>Family Details</h4>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Father Name <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="fathername" class="form-control input-sm"  placeholder="Enter Father Name"/> 
                         <div class="col-md-12 sky-form"><!--change done here-->
                         <label class="radio">       
                        <input type="radio" name="Mr" value="Mr"> <i></i>Mr </label>                
                        <label class="radio"> 
                        <input type="radio" name="Mr" value="Late"> <i></i>Late </label>    
                    </div>
                    </div>
                    
                    <div class="form-group col-md-12 no-padding" id="father_occupations">
                    <div class="col-md-4">
                        <label> Occupation <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="father_occupation" id="father_occupation" class="form-control input-sm"  placeholder="Occupation"/>    
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Mother Name <span>*</span></label>  
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="mothername"  id="mothername" class="form-control input-sm"  placeholder="Enter Mother Name"/> 
                        <div class="col-md-12 sky-form">
                        <label class="radio">       
                        <input type="radio" name="Mrs" value="Mrs"> <i></i>Mrs </label>
                        <label class="radio">                 
                        <input type="radio" name="Mrs" value="Late"><i></i></i> Late </label>
                        </div>                           
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding" id="mother_occupations">
                    <div class="col-md-4">
                        <label> Occupation <span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="mother_occupation" id="mother_occupation" class="form-control input-sm"  placeholder="Occupation"/>            
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding" id="bbro">
                    <div class="col-md-4">
                        <label class="form-group">Elder Brother's<span>*</span></label> 
                    </div>
                    <div class="col-md-6" id="elder">
                        <select name="elderbro" id="elderbro" class="form-control input-sm">
                            <option value="">select</option>
                            <option value="None">None</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>                                               
                        </select>                            
                    </div>
                    <div class="bros" style="display:none;">
                     <div class="col-md-2">
                        <label class="form-group">married</label> 
                    </div>
                    <div class="col-md-2">
                        <select name="elmaried" id="elmaried" class="form-control input-sm">
                            <option value="">select</option>
                        </select>                            
                    </div>
                    </div> 
                    </div>
                    <div class="form-group col-md-12 no-padding" id="ybro">
                    <div class="col-md-4">
                        <label class="form-group">Younger Brother's<span>*</span></label> 
                    </div>
                    <div class="col-md-6" id="younger">
                        <select name="youngerbro" id="youngerbro" class="form-control input-sm">
                            <option value="">select</option> 
                             <option value="None">None</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                                       
                        </select>
                    </div>
                    <div class="bross" style="display:none;">
                    <div class="col-md-2">
                        <label class="form-group">married</label> 
                    </div>
                    <div class="col-md-2">
                        <select name="yumaried" id="yumaried" class="form-control input-sm">
                            <option value="">select</option>
                        </select>                            
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding" id="esis">
                    <div class="col-md-4">
                        <label class="form-group">Elder Sister's<span>*</span></label> 
                    </div>
                    <div class="col-md-6" id="elsis">
                        <select name="eldersis" id="eldersis" class="form-control input-sm">
                            <option value="">select</option> 
                             <option value="None">None</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                                       
                        </select>
                    </div>
                    <div class="sis" style="display:none">
                    <div class="col-md-2">
                        <label class="form-group">married</label> 
                    </div>
                    <div class="col-md-2">
                        <select name="elsismarried" id="elsismarried" class="form-control input-sm">
                            <option value="">select</option>
                        </select>                            
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding" id="ysis">
                    <div class="col-md-4">
                        <label class="form-group">Younger Sister's<span>*</span></label> 
                    </div>
                    <div class="col-md-6" id="yusis">
                        <select name="youngersis" id="youngersis" class="form-control input-sm">
                            <option value="">select</option> 
                             <option value="None">None</option>
                             <option value="1">1</option>
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="4">4</option>
                             <option value="5">5</option>                                       
                        </select>
                    </div>
                    <div class="siss" style="display:none;">
                    <div class="col-md-2">
                        <label class="form-group">married</label> 
                    </div>
                    <div class="col-md-2">
                        <select name="ysmarried" id="ysmarried" class="form-control input-sm">
                            <option value="">select</option>
                        </select>                            
                    </div>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label class="form-group"> Description About Family<span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <textarea name="aboutfamily" id="aboutfamily" class="form-control input-sm" rows="1" placeholder="Description About Family"></textarea>    
                        <label>Up to 300 words</label>
                    </div>
                    </div>
                </div>
                    
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-5 col-md-push-3"> 
                    <button class="btn btn-danger pull-right" type="submit" name="submit" id="submit">Complete Registation</button>
                    </div>
                    </div>
                    </form></div>
                </div>
            </div>
        </div>
     </div>
        </div>
       
        <div class="clearfix"> </div>
    
    <?php $this->load->view('template/footer.php')?>
    <!-- Javascripts
    ================================================== -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    
    <!-- slider Javascripts -->
    <script type="text/javascript">
         $(window).load(function() {
            $("#flexiselDemo3").flexisel({
                visibleItems: 6,
                animationSpeed: 1000,
                autoPlay:false,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>
   

    <!-- register  radio jQuery -->
<script type="text/javascript" src="<?php echo base_url();?>assets/jqueryvalidations/jquery.validate.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
   //select state  based on country             
    $('#country').on('change', function() {     
    var contry_id = $("#country").val();
    var jqxhr = $.ajax({
        type: "POST",
        url: "<?php echo base_url('matrimony/getStates')?>",
        data: {contry_id:contry_id},
        beforeSend : function(){
        }
        }).done(function(data){
           // alert(data);
            var jsonStatesData = JSON.parse(data);
            if (jsonStatesData == '') 
        {
            $('#state').html('<option value="">State Not Found</option>');
        }
        else{
            var i = 1;
            $('#state').children('option').remove()
            $('#state'+i).html('<option value="">Select State</option>');
            $.each(jsonStatesData, function (key, value){
            $('[name="state"]').append('<option value="'+value.id+'">' +value.name+ '</option>');
                i++;
                });
        }
          }); 
    });
            
   //select city based on state   
    $('#state').on('change', function() {     
    var state_id = $("#state").val();
    var jqxhr = $.ajax({
        type: "POST",
        url: "<?php echo base_url('matrimony/getCities')?>",
        data: {state_id:state_id},
        beforeSend : function(){
        }
        }).done(function(data){
            var jsonCityData = JSON.parse(data);
            if (jsonCityData == '') 
        {
            $('#city').html('<option value="">City Not Found</option>');
        }
        else{
            var i = 1;
            $('#city').children('option').remove()
            $('#city'+i).html('<option value="">Select City</option>');
            $.each(jsonCityData, function (key, value){
            $('[name="city"]').append('<option value="'+value.id+'">' +value.name + '</option>');
                i++;
                });
        }
          }); 
    }); 
    
    // jquery for permanent and current address
    $('#sameadadd').click(function() {
        var address=$('#address').val();
        if (this.checked==true){
          $("#paddress").val(address);  
        }
        else{
          $("#paddress").val("");    
        }
        });
        
    //Jquery validations

  $("#pregform").validate({
        // Specify the validation rules
        rules: {
            education: 
            {
                required: true,
            },
            occupation:{
                 required: true, 
            },
            feet:{
               required: true,
               
            },
            weight:{
              required: true,
            },
            complexion:{
                required:true,
            },
            bloodgroup:{
               required:true,
            },
            specilcase:{
               required:true, 
            },
            dite:{
               required:true, 
            } ,
            bodytype:{
               required:true,
            },
            Smoke:{
                required:true,
            },
            Drink:{
                required:true,
            },
            birthplace:{
               required:true, 
            },
            gowthram:{
                required:true,
            },
            paadam:{
                required:true,
            },
            star:{
                required:true,
            } ,
            horoscope:{
               required:true, 
            },
            manglik:{
                required:true
            },
            address:{
                 required:true,
             } ,
             country:{
                  required:true, 
             },
             state:{
                 required:true,  
             } ,
             city:{
                  required:true, 
             },
             res_status:{
                  required:true, 
             } ,
             family_origin:{
                  required:true, 
             },
             Aboutme:{
                 required:true, 
                 minlength:25,
                 maxlength :300,
             },
             fathername:{
                 required:true,
             },
             mothername:{
                 required:true,
             },
             elderbro:{
                 required:true,
             },
             youngerbro:{
                 required:true,
             },
             eldersis:{
                 required:true,
             },
             youngersis:{
                 required:true,
             },
        },
        
        // Specify the validation error messages
        messages: {
            education: {
                required: "Please select education",
            },
            occupation:{
                 required: "Please select occupation",
            },
            feet:{
               required: "Please select height",
              
            },
            weight:{
               required: "Please select weight",
                
            },
            complexion:{
                required:"Please select complexion ",
            },
            bloodgroup:{
               required:"Please select bloodgroup",
            },
            specilcase:{
               required:"Please select specilcase", 
            },
            dite:{
               required:"Please select dite", 
            },
            bodytype:{
                 required:"Please select bodytype",
            },
            Smoke:{
                required:"Please select smoke",
            },
            Drink:{
                required:"Please select drink",
            },
            birthplace:{
                required:"Please enter birthplace",
            },
            gowthram:{
                required:"Please enter gowthram",
            },
            paadam:{
                required:"Please select padam",
            } ,
            star:{
                required:"Please select star" ,
            },
            horoscope:{
                required:"Please select horoscope" ,
            },
            manglik:{
                required: "Please select manglik" ,
            },
             address:{
                 required:"Please enter address",
                 
             } ,
             country:{
                 required:"Please select country",
             },
             state:{
                required:"Please select state", 
             } ,
             city:{
                 required:"Please select city",
             },
             res_status:{
                 required:"Please enter family origin",
             } ,
             family_origin:{
                 required:"please select familyorigin" ,
             },
             Aboutme:{
                 required:"Please enter aboutme",
                 minlength:"Please enter minimum 25 characters",
                 maxlength :"Please enter maximum 300 characters only",
             },
             fathername:{
                 required:"Please enter father name",
             },
             mothername:{
                 required:"PLease enter mothername",
             },
              elderbro:{
                 required:"please slect brothers",
             },
             youngerbro:{
                 required:"please slect brothers",
             },
             eldersis:{
                 required:"please slect sisters",
             },
             youngersis:{
                 required:"please slect sisters",
             },
             aboutfamily:{
                 required:"Please describe about family",
                 minlenght:"please enter minimum 25 charactres",
                 maxlenght:"please enter maximu 300 charactres"
                 
             }
                          
        },
        errorElement: "div",
                    wrapper: "div",
                    errorPlacement: function(error, element) {
                        offset = element.offset();
                        error.insertAfter(element)
                        error.css('color','red');
                    },
        submitHandler: function(form) {
           
            form.submit();
        }
    });
   
   //script for grayout the fields
   $('#occupation').change(function(){
       var value = $(this).val();
       if((value ==1) ||(value==88)){
           $('.ocbox').hide();
       }
       else{
           $('.ocbox').show();
       }
       
   }); 
   
  $('input[name="Mr"]').click(function(){
      var inpval = $(this).attr("value");
      if(inpval == "Late"){
          $('#father_occupations').hide();
      }
      else{
          $('#father_occupations').show(); 
      }
  }); 
  
    $('input[name="Mrs"]').click(function(){
      var inpval = $(this).attr("value");
      if(inpval == "Late"){
          $('#mother_occupations').hide();
      }
      else{
          $('#mother_occupations').show(); 
      }
  });  
  
  $('#elderbro').change(function(){
        var broval = $(this).val();
        if(broval!='None'){
          $("#elder").addClass("col-md-2").removeClass("col-md-6"); 
          $('.bros').show();
          $('#elmaried').children('option').remove()
          for (i = 0; i <=broval; i++)
          { 
          $('#elmaried').append($('<option>',
          {
            value: i,
            text : i, 
          }));
          }
        }
        else{
          $("#elder").addClass("col-md-6").removeClass("col-md-2"); 
          $('.bros').hide();   
        }
  })
  $('#youngerbro').change(function(){
        var brovals = $(this).val();
        if(brovals!='None'){
          $("#younger").addClass("col-md-2").removeClass("col-md-6"); 
          $('.bross').show();
          $('#yumaried').children('option').remove()
          for (i = 0; i <=brovals; i++)
          { 
          $('#yumaried').append($('<option>',
          {
            value: i,
            text : i, 
          }));
          }
        }
        else{
          $("#younger").addClass("col-md-6").removeClass("col-md-2"); 
          $('.bross').hide();   
        }
  })                                                                                    
  $('#eldersis').change(function(){
        var sisvals = $(this).val();
        if(sisvals!='None'){
          $("#elsis").addClass("col-md-2").removeClass("col-md-6"); 
          $('.sis').show();
          $('#elsismarried').children('option').remove()
          for (i = 0; i <=sisvals; i++)
          { 
          $('#elsismarried').append($('<option>',
          {
            value: i,
            text : i, 
          }));
          }
        }
        else{
          $("#elsis").addClass("col-md-6").removeClass("col-md-2"); 
          $('.sis').hide();   
        }
  })
  $('#youngersis').change(function(){
        var sisval = $(this).val();
        if(sisval!='None'){
          $("#yusis").addClass("col-md-2").removeClass("col-md-6"); 
          $('.siss').show();
          $('#ysmarried').children('option').remove()
          for (i = 0; i<=sisval; i++)
          { 
          $('#ysmarried').append($('<option>',
          {
            value: i,
            text : i, 
          }));
          }
        }
        else{
          $("#yusis").addClass("col-md-6").removeClass("col-md-2"); 
          $('.siss').hide();   
        }
  })
  });
        

        
        
</script>
    <!-- Include jQuery -->
</body></html>