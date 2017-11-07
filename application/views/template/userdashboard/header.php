
<div id="navbar">
  <nav class="navbar navbar-default navbar-static-top main-menu" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-1">
      <div class="container">
        <div class="col-md-12">
        <div class="col-md-2 pull-left">
          <a href="#"><img src="<?php echo base_url();?>assets/userdashboard/images/logo.png" class="logo" alt="Padmashali Matrimony Logo" /> </a>
        </div>
        <div class="account-menu col-md-2 pull-right col-md-pull-1">
         <ul class="nav navbar-nav pull-right account-menu">
         <?php if(isset($this->session->userdata['user']['thumbimage'])&& !empty($this->session->userdata['user']['thumbimage'])){
           $img = $this->session->userdata['user']['thumbimage'];
           if (strpos($img, '/') !== false) {?>
            <li class="dropdown"> <a href="#" class="dropdown-toggle user-name no-pad" data-toggle="dropdown"><img src="<?php echo base_url().$img;?>" alt="" />  <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></a>
            <?php } 
            else{ ?>
               <li class="dropdown"> <a href="#" class="dropdown-toggle user-name no-pad" data-toggle="dropdown"><img src="<?php echo base_url().'/uploads/profilepics/thumbs/'.$img;?>" alt="" />  <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></a>
            <?php }} else{ ?>
                  <li class="dropdown"> <a href="#" class="dropdown-toggle user-name no-pad" data-toggle="dropdown"><img src="<?php echo base_url()?>assets/images/female.png" alt="" />  <i class="fa fa-angle-down pull-right" aria-hidden="true"></i></a>
           <?php }?>
              <ul class="dropdown-menu">
                <li>
                  <div class="col-md-12 myprofile">
                    <h4><a href=""><?php if(isset($this->session->userdata['user']['name'])){ $name = $this->session->userdata['user']['name'];  echo strtoupper($name);}?></a>&nbsp;<small>(Pro.Id&nbsp;:&nbsp;<?php if(isset($this->session->userdata['user']['username'])){echo $this->session->userdata['user']['username']; }?>)</small></h4>
                    <h5>Account Created by&nbsp;:&nbsp;<?php if(isset($this->session->userdata['user']['profile_by'])){ echo $this->session->userdata['user']['profile_by']; ;}?>, Account Type&nbsp;:&nbsp;<?php if(isset($this->session->userdata['user']['paidstatus'])){if($this->session->userdata['user']['paidstatus'] == 0){echo "Free";}else{ echo"Paid";}}?></h5>
                    <div class="divider"></div>
                      <ul class="list-inline">
                        <li class="col-md-2 no-pad no-brd1"><div class="c100 p12 small">
                    <span>12%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div></li>
                <li class="col-md-10 no-pad no-brd1" style="margin-top:10px;"><h5>Profile Completeness | <a href="#"> Complete Your Profile</a></h5></li>
                      </ul>
                      <div class="clearfix"></div>
                    <div class="divider"></div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 myprofile-list">
                      <ul class="list-inline">
                        <li class="col-md-6 no-pad">
                          <a href="<?php echo base_url('userdashboard/viewProfile');?>"><i class="fa fa-street-view" aria-hidden="true"></i> View my profile</a>
                          <div class="clearfix"></div>
                          <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit my profile</a>
                          <div class="clearfix"></div>
                          <a href="#"><i class="fa fa-camera-retro" aria-hidden="true"></i> Upload photos</a>
                        </li>
                        <li class="col-md-6">
                          <a href="#"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Password</a>
                          <div class="clearfix"></div>
                          <a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Delete Account</a>
                          <div class="clearfix"></div>
                          <a href="<?php echo base_url('matrimony/logout');?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out </a>
                        </li>
                      </ul>
                    <div class="clearfix"></div>
                  </div>
                   
              <div class="clearfix"></div>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="col-md-8 pull-right">
        <ul class="nav navbar-nav">
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wpexplorer" aria-hidden="true"></i> My Home <b class="caret"></b></a>
                <ul class="dropdown-menu main">
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Who viewed my profile</a></li>
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Who shortlisted Me</a></li>
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Who viewed my mobile No</a></li>
                </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i> Search <b class="caret"></b></a>
            <ul class="dropdown-menu main">
              <li><a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i> Advance Search</a></li>
            </ul>
          </li>
            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wpexplorer" aria-hidden="true"></i> Matches <b class="caret"></b></a>
                <ul class="dropdown-menu main">
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> New Matches</a></li>
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Viewed & Not contacted ()</a></li>
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Shortlisted Profiles</a></li>
                  <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i> Mobiles No.s viewed by Me </a></li>
                </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-comments-o" aria-hidden="true"></i> Messages <b class="caret"></b></a>
            <ul class="dropdown-menu main">
              <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Inbox</a></li>
              <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> Pending</a></li>
              <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i> Accepted</a></li>
              <li><a href="#"><i class="fa fa-commenting-o" aria-hidden="true"></i> Sent</a></li>
            </ul>
          </li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i> Upgrade <b class="caret"></b></a>
            <ul class="dropdown-menu main">
              <li><a href="#"><i class="fa fa-search-plus" aria-hidden="true"></i>  Membership Details</a></li>
            </ul>
          </li>
          </ul>
        </div>
        </div>
      </div>
    </div>
    <!-- /.navbar-collapse --> 
  </nav>
</div>
<div class="clearfix"></div>
<div class="gap"></div>
<div class="clearfix"></div>