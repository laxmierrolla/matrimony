<?php $this->load->view('template/userdashboard/head');?>
<body>
<?php $this->load->view('template/userdashboard/header');
/*print_r($this->session->all_userdata());*/
?>

 <div class="main-container no-mar">
  <div class="container">
    <div class="col-md-3 col-xs-12">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Name : <?php if(isset($data->sname)&&(isset($data->fname))&&(isset($data->lname))){ $name = $data->sname.' '.$data->fname.' '.$data->lname; echo strtoupper($name);}?> </a> </h5>
          </div>
          <div id="collapseOne" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block">
              <div class="row">
              <?php if(isset($data->thumbimage)){ $img = $data->thumbimage;  if (strpos($img, '/') !== false) {?>
                <div class="col-md-6"> <img src="<?php echo base_url().$img;?>" class="img-responsive img-circle" alt="User profile photo here" /> </div>
                <?php } else{ ?>
                 <div class="col-md-6"> <img src="<?php echo base_url().'/uploads/profilepics/thumbs/'.$img;?>" class="img-responsive img-circle" alt="User profile photo here" /> </div>
            <?php }} ?> 
                <div class="col-md-6 no-pad">
                <?php if(isset($data->age)){?>
                  <p> Age : <?php echo $data->age."  Years";}?> <br />
                    Prof : Doctor <br />
                    Status : Single </p>
                  <a href="#" class="btn btn-warning btn-xs">View Profile</a> </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0"> <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> <i class="fa fa-search" aria-hidden="true"></i> Quick Search </a> </h5>
          </div>
          <div id="collapseTwo" class="collapse in" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block">
              <form>
                <!-- Form start -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Profession</label>
                      <select class="form-control input-md">
                        <option>Select</option>
                        <option>Doctor</option>
                        <option>Engineer</option>
                        <option>Lawyer</option>
                      </select>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="control-label">Qualification</label>
                      <select class="form-control input-md">
                        <option>Select</option>
                        <option>Graduate</option>
                        <option>Under Graduate</option>
                        <option>Masters</option>
                      </select>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="date">From</label>
                      <select id="time" name="time" class="form-control">
                        <option value="0">23</option>
                        <option value="1">24</option>
                        <option value="2">25</option>
                      </select>
                    </div>
                  </div>
                  <!-- Select Basic -->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label" for="time">To</label>
                      <select id="time" name="time" class="form-control">
                        <option value="0">35</option>
                        <option value="1">36</option>
                        <option value="2">37</option>
                      </select>
                    </div>
                  </div>
                  <!-- Button -->
                  <div class="col-md-12">
                    <div class="form-group">
                      <button name="singlebutton" class="btn btn-default">Search</button>
                      <button name="singlebutton" class="btn btn-default">Clear</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 no-pad">
      <div class="col-md-12 midd-ribb">
        <div id="ribbon-container" class="text-center">
        <a href="http://youtu.be/zJahlKPCL9g" id="ribbon" target="_blank">Why should you wait when you can Contact <br>
              your matches directly ? <button class="btn btn-warning btn-xs text-uppercase">Update Now </button></a>
              <div class="clearfix"></div>
        </div>
        <div class="clearfix">&nbsp;</div>
     <div class="clearfix">&nbsp;</div>
     <div class="clearfix">&nbsp;</div>
     <div class="clearfix">&nbsp;</div>
      <div class="row">
        <div class="col-md-12 some-profiles">
          <h5><span>Preferred Matches</span></h5>
          <div class="owl-carousel owl-theme">
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="<?php echo base_url();?>assets/userdashboard/images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="<?php echo base_url();?>assets/userdashboard/images/photos/23.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="<?php echo base_url();?>assets/userdashboard/images/photos/24.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/23.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/24.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
          </div>
          <div class="row text-center viewall">
            <div class="col-md-6 col-md-push-3">
           <a href="#" class="btn btn-default btn-xs text-center">View All Profiles&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
         </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 some-profiles">
          <h5><span>People Joined Recently</span></h5>
          <div class="owl-carousel owl-theme">
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/23.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/24.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/23.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/24.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
          </div>
          <div class="row text-center viewall">
            <div class="col-md-6 col-md-push-3">
           <a href="#" class="btn btn-default btn-xs text-center">View All Profiles&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
         </div>
          </div>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12 some-profiles">
          <h5><span>Who viewed your profile</span></h5>
           <div class="owl-carousel owl-theme">
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/23.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/24.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/23.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/24.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
            <div class="col-sm-12 item">
              <div class="card"> <img class="card-img-top" src="images/photos/20.jpg" alt="">
                <div class="card-body">
                  <p>ID: 35469647<br />
                    25 Years</p>
                </div>
                <div class="card-footer"> <a href="view-profile.html" class="btn btn-danger btn-xs">Full Profile</a> </div>
              </div>
            </div>
          </div>
          <div class="row text-center viewall">
            <div class="col-md-6 col-md-push-3">
           <a href="#" class="btn btn-default btn-xs text-center">View All Profiles&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
         </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
       </div>
       <div class="clearfix"></div>
    </div>
    <div class="col-md-3">
      <div class="col-md-12 no-pad">
        <div class="panel-group" id="accordion1">
                    <div class="panel panel-default no-brd">
                        <div class="panel-heading no-brd1 no-brd no-bag">
                            <h4 class="panel-title panel-title-adjust col-md-12 no-pad">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" class="col-md-12 no-pad hd">
                                    <span class="fa fa-map-marker" aria-hidden="true"></span> &nbsp;Preferred Location&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus text-right pull-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </h4>
                            <div class="clearfix"></div>
                        </div>
                        <div id="collapseOne1" class="panel-collapse collapse in">
                            <div class="panel-body" style="padding:8px;">
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/20.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/20.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/23.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/24.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                            </div>
                            <div class="panel-footer text-center">
                              <a href="#">View All Profile&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default no-brd">
                        <div class="panel-heading no-brd1 no-brd no-bag">
                            <h4 class="panel-title panel-title-adjust col-md-12 no-pad">
                                <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" class="col-md-12 no-pad hd">
                                    <span class="fa fa-graduation-cap" aria-hidden="true"></span> &nbsp; Preferred Education<i class="fa fa-plus text-right pull-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </h4>
                            <div class="clearfix"></div>
                        </div>
                        <div id="collapseOne2" class="panel-collapse collapse">
                           <div class="panel-body" style="padding:8px;">
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/20.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/20.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/23.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/24.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                            </div>
                            <div class="panel-footer text-center">
                              <a href="#">View All Profile&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default no-brd">
                        <div class="panel-heading no-brd1 no-brd no-bag">
                            <h4 class="panel-title panel-title-adjust col-md-12 no-pad">
                                <a data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" class="col-md-12 no-pad hd">
                                    <span class="fa fa-briefcase" aria-hidden="true"></span> &nbsp; Preferred Profession<i class="fa fa-plus text-right pull-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </h4>
                            <div class="clearfix"></div>
                        </div>
                        <div id="collapseOne3" class="panel-collapse collapse">
                           <div class="panel-body" style="padding:8px;">
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/20.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/20.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/23.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                               <div class="col-md-12 side-right">
                                 <div class="col-md-5 no-pad"> <img src="images/photos/24.jpg" class="img-responsive" alt="User profile photo here" /> </div>
                <div class="col-md-7 no-pad">
                  <h3> Rajya Lakshmi Anaga</h3>
                  <h4>Age : 28 Years</h4>
                  <h5>Hyderabad</h5>
                  <a href="#" class="btn btn-danger btn-xs">Full Profile</a> 
                </div>
                               </div>
                            </div>
                            <div class="panel-footer text-center">
                              <a href="#">View All Profile&nbsp;<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default no-brd">
                        <div class="panel-heading no-brd1 no-brd no-bag">
                            <h4 class="panel-title panel-title-adjust col-md-12 no-pad">
                                <a data-toggle="collapse" data-parent="#accordion4" href="#collapseOne4" class="col-md-12 no-pad hd">
                                   <span class="fa fa-ticket" aria-hidden="true"></span> &nbsp; Membership Details<i class="fa fa-plus text-right pull-right"></i>
                                </a>
                                <div class="clearfix"></div>
                            </h4>
                            <div class="clearfix"></div>
                        </div>
                        <div id="collapseOne4" class="panel-collapse collapse in">
                           <div class="panel-body no-pad">
                            <div class="membership">
                               <p style="color:#fff;font-size:16px;font-family: 'BrandonGrotesque-Bold'"> Membership Type :&nbsp;<button class="btn btn-warning btn-xs"> Golden</button><br />
                    Valid upto 20/12/2018 <br />
                    Profiles Viewed : 250<br />
                    Remaining Profiles : 50 </p>
                            </div>
                          </div>
                            <div class="panel-footer text-center">
                              <a href="#">Upgrade Now</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
  
    </div>
  </div>
</div>
 <?php $this->load->view('template/userdashboard/footer')?>

<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 10
                  }
                }
              })
            })
          </script>
</body>
</html>

