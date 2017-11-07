 <?php $this->load->view('template/head'); ?> 
<body class="rg-body">
<div class="overlay">
    <div id="sticky-anchor"></div>
    <!-- ============================  Navigation Start =========================== -->
    <div id="tf-menu" class="navbar">
        <div class="container">
           <div class="col-md-2 col-sm-2">
           <a class="brand" href="index.html"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a>
           </div> <!-- end pull-right -->
            <div class="col-md-10 no-padding">
            <div class="col-md-10 no-padding nav-hdng">
                  <p>Welcome to Padmashali India Matrymony!</p>                                
            </div>                                            
           </div>
          <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inverse-blue -->
    
    <div class="container">
        <div class="col-md-8 col-md-offset-2 add-photo">
        <div class="row register-form">
            <form id="requiredform" name="requiredform" method="post" action="<?php echo base_url('matrimony/addPartner');?>">
            <div class="row">
                <div class="col-md-12 col-sm-12 no-padding">
                    <div class="col-md-12">
                        <div class="formh3">
                            <h2>Required Match </h2>
                        </div>                        
                    </div>
                    <div class="form-top col-md-10 no-padding">
                        <ul>
                            <li><a><span>*</span>All Felds are Mandatory</a></li>
                        </ul>
                    </div>                    
                    <div class="form-group col-md-12 no-padding">
                        <div class="col-md-12 rg-headng">
                            <h4> Patner Details </h4>
                        </div>  
                        <?php $profilecode = $this->session->userdata('profilecode'); ?>
                        <input type="hidden" class="form-control input-sm"  name="profilecode" id="profilecode" value="<?php echo $profilecode;?>">  
                        <div class="col-md-4">
                         <label> Looking for <span>*</span></label>
                        </div>
                        <div class="col-md-8">
                            <input type="radio" name="looking" id="NeverMarried" value="NeverMarried"><label> Never Married</label>&nbsp                
                            <input type="radio" name="looking" value="Separated" id="Separated"> <label>Separated </label>&nbsp                
                            <input type="radio" name="looking" value="Divorced" id="Divorced"> <label>Divorced</label>&nbsp <br/>            
                            <input type="radio" name="looking" value="Widow/Widower" id="Widow"> <label>Widow/Widower </label>&nbsp                                        
                        
                        </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                    <label>Country Resident In <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                    <select name="countryfor" id="countryfor" class="form-control input-sm">
                       <option value="">--Select Country--</option>  
                            <?php if(isset($data1['country'])){
                            foreach($data1['country'] as $coun){?>
                            <option value="<?php echo $coun->id;?>"><?php echo $coun->name ;?></option>   
                            <?php }
                            }?>     
                    </select>                    
                    </div>
                    </div>   
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label class="col-md-12 no-padding">From Age <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-1 no-padding mrg-r pdt-4"> From</label>
                        <select name="agefrom" id="agefrom" class="col-md-4 select-opt no-padding form-control input-sm">
                        <option value="">-- Age from--</option> 
                            <?php for($i=18;$i<=100;$i++)
                            {?>
                             <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                             <?php }  ?>   
                        </select>        
                        <label class="col-md-1 no-padding center pdt-4"> to</label>
                        <select name="ageto" id="ageto" class="col-md-5 select-opt no-padding form-control input-sm">
                        <option value="">-- Age To-</option>
                            <?php for($i=18;$i<=100;$i++)
                {?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php  } ?>    
                            
                        </select>
                    </div>
                    </div> 
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label class="col-md-12 no-padding">Height <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-1 no-padding mrg-r pdt-4"> From</label>
                        <select name="feetfor" class="col-md-4 form-control select-opt input-sm">
                        <option value="">--Height From--</option>
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
                        <label class="col-md-1 no-padding center pdt-4"> to</label>
                        <select name="feetto" class="col-md-5 select-opt no-padding form-control input-sm">
                        <option value="">--Height To--</option>  
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
                        <label>Complexion<span>*</span></label> 
                    </div>
                    <div class="col-md-6">
                        <select name="cmplxionfor" id="cmplxionfor" class="form-control input-sm">
                            <option value="">--select--</option> 
                                 <?php if(isset($data1['complexion'])){
                                        foreach($data1['complexion'] as $comp){?>
                                         <option value="<?php echo $comp->cmplex;?>"><?php echo $comp->cmplex ;?></option>   
                                        <?php }
                                    }?>                                                               
                        </select>
                    </div>
                    </div>                 
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label> Education <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="education" value="DoesNotMatter"> <label>Doesn't Matter</label>&nbsp                
                        <input type="radio" name="education" value="Educated"> <label>Education </label>&nbsp
                    </div>
                    <div class="col-md-6" style="display:none" id="chooseeducation">
                        <select name="educations[]" id="educations" tabindex="1" class="form-control input-sm" multiple > 
                                <option value="">-- Choose Education--</option>
                                 <?php if(isset($data1['education'])){
                                        foreach($data1['education'] as $edu){?>
                                         <option value="<?php echo $edu->edu_id;?>"><?php echo $edu->education ;?></option>   
                                        <?php }
                                    }?>
                            </select>
                    </div>
                    </div>

                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label>Occupation <span>*</span></label>
                    </div>
                    <div class="col-md-7">
                        <input type="radio" name="occupation" value="DoesNotMatter"> <label> Doesn't Matter</label>&nbsp                
                        <input type="radio" name="occupation" value="Working"> <label>Working </label>&nbsp                
                        <input type="radio" name="occupation" value="NotWorking"> <label>Not Working</label>&nbsp                            
                    </div>
                    <div class="col-md-6" style="display:none" id="chooseoccupation">
                       <select name="occupations[]" id="occupations" tabindex="1" class="form-control input-sm" multiple> 
                                <option value="">-- Choose Occupation--</option>
                                 <?php if(isset($data1['occupation'])){
                                        foreach($data1['occupation'] as $ocu){?>
                                         <option value="<?php echo $ocu->Occ_Id;?>"><?php echo $ocu->occupation ;?></option>   
                                        <?php }
                                    }?>
                            </select>
                    </div>
                    </div>
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label>Annual Income <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <select name="anualincome" id="anualincome" class="form-control input-sm">
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
                                        
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                        <label>Captcha <span>*</span></label>
                    </div>
                    <div class="col-md-6">
                        <div class='image'><?php echo $data['image'];?></div>
                        <img id ='ref_symbol' src ="<?php echo base_url();?>assets/images/refresh.png"><br><br>
                        <input type="text" name="captcha" id="captcha" class="form-control input-sm" placeholder="">
                    </div>
                    
                    </div>
                    
                    <div class="form-group col-md-12 no-padding">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-6">
                    <button class="btn btn-danger pull-right"  name="submit" type="submit">Submit</button>
                    </div>
                    </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
       
        <div class="clearfix"> </div>
    
<?php $this->load->view('template/footer.php')?>
    <!-- Javascripts
    ================================================== -->
   <script type="text/javascript">
   $(document).ready(function(){
      $('input[name="education"]').click(function(){
          var inputvalue =$(this).attr("value");
          if(inputvalue =="Educated"){
              $('#chooseeducation').show();
              
          }
          else{
              $('#chooseeducation').hide();
          }
          
      }); 
      
      $('input[name="occupation"]').click(function(){
          var inputvalue =$(this).attr("value");
          if(inputvalue =="Working"){
              $('#chooseoccupation').show();
              
          }
          else{
              $('#chooseoccupation').hide();
          }
          
      }); 
      
      $('#educations').multiselect({
          nonSelectedText: 'Select Education'
      });
      $('#occupations').multiselect({
          nonSelectedText: 'Select occupation'
          
      });
       $("#requiredform").validate({
        // Specify the validation rules
        rules: {
            looking: 
            {
                required: true,
            },
            countryfor:{
                 required: true, 
            },
            agefrom:{
               required: true,
               
            },
            ageto:{
              required: true,
              
            },
            feetfor:{
                required:true,
            },
            feetto:{
               required:true,
            },
            cmplxionfor:{
               required:true, 
            },
            education:{
               required:true, 
            } ,
             occupation:{
               required:true,
            },
            anualincome:{
                required:true,
            },
           
        },
        
        // Specify the validation error messages
        messages: {
            looking: {
                required: "Please select whom you are looking for",
            },
            countryfor:{
                 required: "Please select country",
            },
            agefrom:{
               required: "Please select from age",
               
            },
            ageto:{
               required: "Please select ageto",
               
            },
            feetfor:{
                required:"Please select height for",
            },
            feetto:{
               required:"Please select height to ",
            },
            cmplxionfor:{
               required:"Please select complexion", 
            },
            education:{
               required:"Please select education", 
            },
            occupation:{
                 required:"Please select ocupation",
                 
            },
            anualincome:{
                required:"Please select annualincome",
            },
            
                          
           
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
    $("#ref_symbol").click(function() {
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "matrimony/captcha_refresh",
                        success: function(res) {
                            if (res)
                            {
                                  jQuery("div.image").html(res);
                            }
                        }
                    });
                });
      
   });
   
   
    

   </script>
</body></html>
