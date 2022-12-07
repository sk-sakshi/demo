
    <script>
    
    loader_div="<div style='width:100%;' ><center><div class='lds-roller' style='margin-top:200px'><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></center></div>";
function link_verification(cname){
    if(cname=='index_content' || cname=='smartclass/smartclass' || cname=='attendance/attendance' || cname=='enquiry/enquiry' || cname=='staff/staff' || cname=='student/students' || cname=='account/account' || cname=='dues/dues' || cname=='fees/fees' || cname=='fees_monthly/fees' || cname=='fees_yearly/fees' || cname=='fees_installmentwise/fees' || cname=='penalty/penalty' || cname=='certificate/certificate' || cname=='examination/examination' || cname=='homework/homework' || cname=='exam_paper_setter/exam_paper_setter' || cname=='complaint/complaint' || cname=='sms/sms_panel' || cname=='time_table/time_table' || cname=='event_management/event_management' || cname=='holiday/holiday' || cname=='leave/leave' || cname=='sports/sports' || cname=='important/important' || cname=='downloads/downloads' || cname=='recycle_bin/recycle_bin' || cname=='session/session' || cname=='govt_requirement/govt_requirement' || cname=='reminder/reminder' || cname=='school_info/school_info' || cname=='bus/bus' || cname=='hostel/hostel' || cname=='library/library' || cname=='stock/stock' || cname=='android_app/android_app' || cname=='user_right/user_right' || cname=='website_management/Notification' || cname=='gate_pass/gate_pass' || cname=='stock_management/stock_management' || cname=='stock_management_new/stock_management' || cname=='website_management_new/website_management'){	
        return true;
    }else{
         return false;
    }
}
        function alert_new(content,color){
       var x = document.getElementById("snackbar");
	             x.innerHTML=content;
	             x.style.background = color;
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
	function loader(){
	    $("#get_content").html(loader_div);
	}function loader_with_id(id){
	    $("#"+id).html(loader_div);
	}function loader_with_id_remove(id){
	    $("#"+id).html("");
	}
	
	function setCookie(cname, cvalue, session_id231) {
      
    cname.replace("/", "_");
    cname=session_id231+cname;
  sessionStorage.setItem(cname, cvalue);
  }

function getCookie(cname,session_id231) {
     
    cname.replace("/", "_");
    cname=session_id231+cname;
   var data=sessionStorage.getItem(cname);
   if(data!=null){
     return  data;
   }else{
  return "";
   }
      
}
	
    </script>
	
 
 <style>
     .load-bar {
  position: relative;
  margin-top: 0px;
  width: 100%;
  height: 3px;
  background-color: #34fa2c;
}
.bar {
  content: "";
  display: inline;
  position: absolute;
  width: 0;
  height: 100%;
  left: 50%;
  text-align: center;
}
.bar:nth-child(1) {
  background-color: #fa4733;
  animation: loading 1s linear infinite;
}
.bar:nth-child(2) {
  background-color: #3078f7;
  animation: loading 1s linear 300ms infinite;
}
.bar:nth-child(3) {
  background-color: #45fa2c;
  animation: loading 1s linear 500ms infinite;
}
@keyframes loading {
    from {left: 50%; width: 0;z-index:100;}
    33.3333% {left: 0; width: 100%;z-index: 10;}
    to {left: 0; width: 100%;}
}
 </style>
  
<input type='hidden' value='English' id="language_change_37" >
<input type='hidden' value='school_software_v1_old' id="school_software_version_id" >
<input type='hidden' value='638b2c609b12a' id="session_id23" >
 <input type="hidden" value="" id="hidden_value1"/>
<input type="hidden" value="" id="hidden_value2"/>
<script>
function WhichButton(event) {
  
    var url11=window.location.href;
var url111=url11.split('#');
if(event.button==2){
  
 var length1 = document.getElementsByTagName("a").length;
 
 for(var v=0;v<length1;v++){
        
  var link1 = document.getElementsByTagName("a")[v].href;
  var link11=link1.split("'");
  if(link11.length>1){
   var final_url=url111[0]+"#"+link11[1];
   document.getElementsByTagName("a")[v].href=final_url;
  }
 }

}
}


var session_id231=document.getElementById('session_id23').value;
var school_software_version=document.getElementById('school_software_version_id').value;
var access_link='../'+school_software_version+'/admin/';
var css_js_path='../../'+school_software_version;
	var langue345=document.getElementById('language_change_37').value;
   var loader_div="<div class='load-bar'><div class='bar'></div><div class='bar'></div><div class='bar'></div></div>";
function get_content(link){


    //  $("#get_content").html(loader_div);
       var hidden_value22= $('#hidden_value2').val();
   if(hidden_value22==0){
      $('#hidden_value1').val('0');
   }else{
       $('#hidden_value2').val('0');
   }
        var data_get="";
  if(link_verification(link)){      
 data_get=getCookie(link,session_id231);
  }
if(data_get!=''){
  $("#get_content").html(data_get);
  	window.location.hash = "#"+link+"?session_id="+session_id231;
}else{
   
	var url2="../../"+school_software_version+"/admin/"+link+".php?session_id="+session_id231;
    $.get(url2, function(data, status){
        $("#get_content").html(data);
    if(link_verification(link)){             
setCookie(link,data,session_id231);
}
		window.location.hash = "#"+link+"?session_id="+session_id231;
		
    });
 
}
}
function post_content(link,content){

var url21=content.split('=');
if(url21[0]=='session_id'){
    var session_add="";
}else
{
     var session_add="session_id="+session_id231+"&"; 
}

     $("#get_content").html(loader_div);
          var hidden_value22= $('#hidden_value2').val();
   if(hidden_value22==0){
      $('#hidden_value1').val('0');
   }else{
       $('#hidden_value2').val('0');
   }
	$.ajax({
type: "POST",
url: "../../"+school_software_version+"/admin/"+link+".php?"+session_add+content,
cache: false,
success: function(data){
 $("#get_content").html(data);
		window.location.hash = "#"+link+"?"+session_add+content;
}
});

}
</script>

<body onmousedown="WhichButton(event)" class="hold-transition skin-blue fixed sidebar-mini">
 <script>
if(!!window.performance && window.performance.navigation.type===2){
window.location.reload();
}



	   function for_change_header(set_value,set_param){

       $.ajax({
			  type: "POST",
              url: access_link+"attachment/set_header_details.php?set_param="+set_param+"&set_value="+set_value+"",
              cache: false,
              success: function($detail){
                  if(set_param=='lang'){
                window.location.reload();
                  }else if(set_param=='hindi_typing'){
                   var    langue345=set_value;
                    $("#hindi_typing").val(langue345);
                            	
                       	if(langue345=='Hindi'){
                      		
                            	

			pramukhIME.setLanguage('hindi', 'pramukhindic');
				    var kb = new PramukhIndic('hindi');
var settings = [{language:'all', kb: 'pramukhindic', digitInEnglish: true}];
pramukhIME.setSettings(settings);
	}else if(langue345=='Gujarati'){
                      		
                            	

			pramukhIME.setLanguage('gujarati', 'pramukhindic');
				    var kb = new PramukhIndic('gujarati');
var settings = [{language:'all', kb: 'pramukhindic', digitInEnglish: true}];
pramukhIME.setSettings(settings);
	}else{
	    	pramukhIME.addKeyboard(PramukhIndic);
            pramukhIME.enable();
            pramukhIME.setLanguage('english', 'pramukhime');
	}
                      
                  }else{
                      url_control();
                  }
              }
           });
}
</script>
<style>
@media screen and (min-width: 1193px) {
#school_name{
display:block;
}

}
@media screen and (max-width: 1192px) {
#school_name{
display:none;
}

}
@media screen and (max-width: 768px) {
#school_name234{
display:none;
}
#school_name2341{
display:block;
}
}

</style>


<header class="main-header" >

    <!-- Logo -->
    <a href="index.php" class="logo" style="background-image:linear-gradient(to bottom right, #b92b27 , #1565C0);">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" id="school_name234" >SIMPTION</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" id="school_name234" >SIMPTION</span>
      <span class="logo-lg" id="school_name2341" >SIMPTION TECH PVT LTD</span>
	  
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-image:linear-gradient(to bottom right, #b92b27 , #1565C0);">
      <!-- Sidebar toggle button-->

<h6 id="school_name2341" style="color:black;  font-size:15px; margin-top:22px; margin-bottom:-55px; padding-left:30px; padding-right:50px; margin-left:15px;">Annual Maintenance Free Service Date:  To </h6>

<h4 id="school_name" style="color:white; margin-top:23px; margin-bottom:-45px; padding-left:30px; padding-right:50px;"><b>SIMPTION TECH PVT LTD</b></h4> </br>
<h5 id="school_name" style="color:white; font-size:15px; margin-top:6px; margin-bottom:-69px; padding-left:459px; padding-right:212px;">
 Support Contacts - 8989456770,8120998373,8357860328 
</h5> <br/>

<h6 id="school_name" style="color:white; font-size:15px; margin-top:57px; margin-bottom:-69px; padding-left:459px; padding-right:212px;">
            
            <marquee onmouseover="this.stop();" onmouseout="this.start();">
         
            </marquee>
        </h6> <br/>
    

      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" height="15" width="15" class="img-circle">
              <span class="hidden-xs">rahul@simption.com</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="" height="70" width="70" class="img-circle">
                <p>
                  <small>rahul@simption.com</small>
				  <small>9074822542</small>
				  
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="javascript:get_content('school_info/school_info_general')" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="javascript:get_content('attachment/logout')" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
         
            <a href="#" data-toggle="control-sidebar"><img src="../school_software_v1_old/images/change_skin.png" height="20" width="20" class="img-circle"></a>
          </li>
        </ul>
      </div>
    </nav>
	<nav class="navbar" style="background-color:#FFFFFF;">
     <div class="navbar-custom-menu ">
        <ul class="nav navbar-nav">
       <li class="dropdown col-md-12">
		      			
		     <form  method="post" enctype="multipart/form-data" >
		         
		         			  		<label >SMS Balance:&nbsp&nbsp<font style="color:red" size="3">0&nbsp&nbsp&nbsp</font></label>		
				<label><a href="../../school_software_v1_old/images/font_help.jpeg" target="_blank">Font Help</a></label>
				<label><font style="color:black" size="3">Font</font></label>
		 		    <select  name="language_change" id="language_change" onchange="for_change_header(this.value,'lang');" style="width:100px; margin-top:10px;">
					         
					           <option selected value="English">English</option>
							 
					           <option   value="Hindi">Hindi</option> 
							     
					    </select>
						
                                <label><font style="color:black"  size="3">Typing</font></label>								   
						 <select  name="hindi_typing" id="hindi_typing" onchange="for_change_header(this.value,'hindi_typing');" style="width:100px; margin-top:10px;">
					         
					           <option selected value="English">English</option>
							
					           <option   value="Hindi">Hindi</option> 
							    <option   value="Gujarati">Gujarati</option> 
							   
					    </select>
															
													
						
						
						<input type="submit" name="finish2" id="finish2" value="Submit" class="btn  my_background_color" style="display:none"/>
						
					<label><font style="color:black"  size="3">Session</font></label>
							    <select  name="session_change" id="session_change" onchange="for_change_header(this.value,'session37');" style="width:100px; margin-top:10px;">
														
					           <option  selected value="2022_23"> 2022-23</option>
					        	 							
					           <option   value="2023_24"> 2023-24</option>
					        	 							
					           <option   value="2024_25"> 2024-25</option>
					        	 					    
					    </select>
					
						</form>
          </li>
        </ul>
      </div>
      
		         	<label style="display:none"><marquee width="95%" style="color:blue" direction="left"><font style="color:red" size="3">Refer & Earn</font> ( स्कूल सॉफ्टवेयर को रेफेर करें और उनके खरीदने पर पाएं 10% कैशबैक । )</marquee></label>
    </nav>
  </header>
<div id="school_name2341"> 
<br><br><br>
</div>
<input type="hidden" value="demo" id="a9876">
<input type="hidden" value="https://simptionerp.com/demo" id="a19876">
<script>
   var x675= window.location.href; 
   var y657=x675.split('.in');
   var z435=y657[1].split('/');
   var b24356=document.getElementById('a9876').value;
   var b124356=document.getElementById('a19876').value;
   var p1544=b24356+'1';
   if(( z435[1]==b24356 || z435[1]==p1544 ) && z435[1]!='school_software' ){
   }else{
  window.open(b124356,'_self');
   }
</script> <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #555; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
</style>
 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" >
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
           <img src="" height="25" width="25" class="img-circle">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" style="height:500px;overflow: scroll !important;" >
        <li class="header">MAIN NAVIGATION</li>
        <li ><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
	 	 				
	<li ><a href="javascript:get_content('attendance/attendance')"><i class="fa fa-address-card-o"></i> <span>Attendance</span></a></li>
					
	
 	<li ><a href="javascript:get_content('enquiry/enquiry')"><i class="fa fa-phone"></i> <span>Enquiry</span></a></li>

 		<li ><a href="javascript:get_content('staff/staff')"><i class="fa fa-users"></i> <span>Staff</span></a></li>

		
	 	<li ><a href="javascript:get_content('student/students')"><i class="fa fa-user"></i> <span>Student</span></a></li>

		
	 	<li ><a href="javascript:get_content('account/account')"><i class="fa fa-money"></i> <span>Account</span></a></li>

		
			 	<li><a href="javascript:get_content('dues/dues')"><i class="fa fa-rupee"></i> <span>Dues</span></a></li>
      
		 		<li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-rupee"></i> <span>Fees</span></a></li>
      
			 	<li><a href="javascript:get_content('penalty/penalty')"><i class="fa fa-rupee"></i> <span>Penalty</span></a></li>
      
		 	<li><a href="javascript:get_content('certificate/certificate')"><i class="fa fa-certificate"></i> <span>Certificate</span></a></li>
      
		 	<li><a href="javascript:get_content('examination/examination')"><i class="fa fa-edit"></i> <span>Examination</span></a></li>
      
	  	 <li><a href="javascript:get_content('homework/homework')"><i class="fa fa-book"></i> <span>Homework</span></a></li>
      
	  	 <li><a href="javascript:get_content('exam_paper_setter/exam_paper_setter')"><i class="fa fa-paper-plane-o"></i> <span>Set Paper</span></a></li>
      
	  	 <li><a href="javascript:get_content('complaint/complaint')"><i class="fa fa-minus-square"></i> <span>Complaints</span></a></li>
      
	 
		 	<li><a href="javascript:get_content('gallery/gallery')"><i class="fa fa-picture-o"></i> <span>Gallery</span></a></li>

		 	<li><a href="javascript:get_content('sms/sms_panel')"><i class="fa fa-envelope"></i> <span>SMS Services</span></a></li>
		
		 	<li><a href="javascript:get_content('time_table/time_table')"><i class="fa fa-table"></i> <span>Time Table</span></a></li>
		
		
		 	<li><a href="javascript:get_content('event_management/event_management')"><i class="fa fa-calendar"></i> <span>Event</span></a></li>
		
		 	<li><a href="javascript:get_content('holiday/holiday')"><i class="fa fa-external-link"></i> <span>Holiday</span></a></li>
		
		
		 	<li><a href="javascript:get_content('leave/leave')"><i class="fa fa-pagelines"></i> <span>Leave</span></a></li>
		
		 	<li><a href="javascript:get_content('sports/sports')"><i class="fa fa-futbol-o"></i> <span>Sports </span></a></li>
		
		 	<li><a href="javascript:get_content('downloads/downloads')"><i class="fa fa-download"></i> <span>Downloads</span></a></li>
		
		 	<li><a href="javascript:get_content('recycle_bin/recycle_bin')"><i class="fa fa-bell-o"></i> <span>Recycle bin</span></a></li>
		
			
		 	<li><a href="javascript:get_content('session/session')"><i class="fa fa-building-o"></i> <span>Session</span></a></li>
			
		 	<li><a href="javascript:get_content('reminder/reminder')"><i class="fa fa-bell-o"></i> <span>Reminder</span></a></li>
		
			
		 	<li><a href="javascript:get_content('govt_requirement/govt_requirement')"><i class="fa fa-circle-o"></i> <span>Govt. Requir.</span></a></li>
			
		
		 	<li><a href="javascript:get_content('school_info/school_info')"><i class="fa fa-user"></i> <span>School Info</span></a></li>
			
		 	<li><a href="javascript:get_content('utility/utilities')"><i class="fa fa-bell-o"></i> <span>Typing Tool</span></a></li>
			
		 	<li><a href="javascript:get_content('bus/bus')"><i class="fa fa-bus"></i> <span>Bus</span></a></li>
			
		 	<li><a href="javascript:get_content('hostel/hostel')"><i class="fa fa-hotel"></i> <span>Hostel</span></a></li>
			
	 		<li><a href="javascript:get_content('library/library')"><i class="fa fa-book"></i> <span>Library</span></a></li>
			
	 		<li><a href="javascript:get_content('stock/stock')"><i class="fa fa-area-chart"></i> <span>Stocks</span></a></li>
			
		  
	 		  <li><a href="javascript:get_content('live_bus/bus_tracking')"><i class="fa fa-bus"></i> <span>Live Bus</span></a></li>
			
	 		<li><a href="javascript:get_content('android_app/android_app')"><i class="fa fa-hotel"></i> <span>Android App</span></a></li>
			
	 		<li><a href="javascript:get_content('user_right/user_right')"><i class="fa fa-book"></i> <span>User Rights</span></a></li>
			
	      
	   <li><a href="javascript:get_content('school_info/change_password')"><i class="fa fa-unlock-alt"></i> <span>Change Password</span></a></li>
		<li><a href="javascript:get_content('attachment/logout')"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>
      <li><a href="javascript:get_content('gps_tracker/gps_tracker')"><i class="fa fa-sign-out"></i> <span>gps_tracker</span></a></li>
      
	
        
      </ul>
     
    </section>
    <!-- /.sidebar -->
  </aside>
 <div class="content-wrapper" id="get_content">
 



  