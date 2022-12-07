<script type="text/javascript">
function for_stream_get(){
var class_name=document.getElementById('student_class').value;
  $('#student_class_stream').html("<option value='' >Loading....</option>"); 
$.ajax({
type: "POST",
url:access_link+"examination/ajax_get_stream_name.php?class_name="+class_name+"",
cache: false,
success: function(detail){
$("#student_class_stream").html(detail);
}
});
}

function for_section(value){
$('#student_class_section').html("<option value='' >Loading....</option>");
$.ajax({
  type: "POST",
  url: access_link+"examination/ajax_class_section.php?class_name="+value+"",
  cache: false,
  success: function($detail){
       var str =$detail;
      $("#student_class_section").html(str);
      for_test();
  }
});
}

function for_stream(value2){
//for_stream_get();
if(value2=="11TH" || value2=="12TH"){
$("#student_class_stream_div").show();
$("#student_class_group_div").show();
$("#student_class_stream").attr('required',true);
$("#student_class_group").attr('required',true);
}else{
$("#student_class_stream_div").hide();
$("#student_class_group_div").hide();
$("#student_class_stream").attr('required',false);
$("#student_class_group").attr('required',false);
}
}

function get_group(value1){
$('#student_class_group').html("<option value='' >Loading....</option>");
$.ajax({
	  type: "POST",
      url: access_link+"examination/ajax_stream_group.php?stream_name="+value1+"",
      cache: false,
      success: function(detail1){			   
          $("#student_class_group").html(detail1);
          for_test();
      }
   });
}

function for_test(){
var student_class= document.getElementById('student_class').value;
var student_class_section= document.getElementById('student_class_section').value;
var student_class_stream= document.getElementById('student_class_stream').value;
var student_class_group= document.getElementById('student_class_group').value;
$.ajax({
address: "POST",
url: access_link+"examination/ajax_get_weekly_test.php?student_class="+student_class+"&student_class_section="+student_class_section+"&student_class_stream="+student_class_stream+"&student_class_group="+student_class_group+"",
cache: false,
success: function(detail){
$("#test_name").html(detail);
for_student();
}
});
}

function for_student(){
var student_class= document.getElementById('student_class').value;
var student_class_section= document.getElementById('student_class_section').value;
var student_class_stream= document.getElementById('student_class_stream').value;
var student_class_group= document.getElementById('student_class_group').value;
var test_name= document.getElementById('test_name').value;
var student_limit= document.getElementById('student_limit').value;
if(student_class!='' && test_name!=''){
$.ajax({
address: "POST",
url: access_link+"examination/ajax_weekly_test_student_list.php?student_class="+student_class+"&student_class_section="+student_class_section+"&student_class_stream="+student_class_stream+"&student_class_group="+student_class_group+"&test_name="+test_name+"&student_limit="+student_limit+"",
cache: false,
success: function(detail){
$("#test_students_detail").html(detail);
}
});
}else{
$("#test_students_detail").html('');
}
}

function for_check(id){
if($('#'+id).prop("checked") == true){
	$("."+id).each(function() {
	$(this).prop('checked',true);
	});
}else{
	$("."+id).each(function() {
	$(this).prop('checked',false);
	});
}
}

function validate(){
var student=0;
$('.students11').each(function() {
if($(this).prop('checked')==true){
student = Number(parseInt(student)+1);
}
});
if (student<=0) {
	alert_new("Please Select Atleast One Student !!!",'red');
	return false;
}
}

 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"examination/add_weekly_test_marks_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			////alert_new(detail);
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				//   get_content('examination/add_weekly_test_marks');
            }
			}
         });
      });
</script>

    <section class="content-header">
      <h1>
       Examination Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('examination/examination')"><i class="fa fa-id-card-o"></i> Examination</a></li>
	   <li class="active">Add Weekly Test Marks</li>
      </ol>
    </section>

	
	
	<!---*****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************-->
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <h3 class="box-title">Add Weekly Test Marks</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
		
			<form role="form"  method="post" enctype="multipart/form-data" id="my_form">
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>Class</label>
					    <select name="student_class" onchange="for_stream(this.value);for_section(this.value);" id="student_class" class="form-control" required >
						<option value="">Select Class</option>
						       						       <option value="NURSERY">NURSERY</option>
					           						       <option value="LKG">LKG</option>
					           						       <option value="UKG">UKG</option>
					           						       <option value="1ST">1ST</option>
					           						       <option value="2ND">2ND</option>
					           						       <option value="3RD">3RD</option>
					           						       <option value="4TH">4TH</option>
					           						       <option value="5TH">5TH</option>
					           						       <option value="6TH">6TH</option>
					           						       <option value="7TH">7TH</option>
					           						       <option value="8TH">8TH</option>
					           						       <option value="9TH">9TH</option>
					           						       <option value="10TH">10TH</option>
					           						       <option value="11TH">11TH</option>
					           						       <option value="12TH">12TH</option>
					           					    </select>
					</div>
				</div>
				
				<div class="col-md-3" id="student_class_stream_div" style="display:none;">				
					<div class="form-group">
					  <label >Stream</label>
					    <select class="form-control" name="student_class_stream" id="student_class_stream" onchange="get_group(this.value);" >
					           <option value="">Select Stream</option>
						       						       <option value="SCIENCE">SCIENCE</option>
					           						       <option value="ARTS">ARTS</option>
					           						       <option value="Commerce ">Commerce </option>
					           					    </select>
					</div>
		        </div>
		        
		        <div class="col-md-2" id="student_class_group_div" style="display:none;">				
					<div class="form-group">
					  <label >Group</label>
					    <select name="student_class_group" id="student_class_group" onchange="for_test();" class="form-control" >
					    <option  value="">Select Group</option>
					    </select>
					  </select>
					</div>
				</div>
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>Section</label>
					    <select name="student_class_section" id="student_class_section" onchange="for_test();" class="form-control">
					     <option value="">Select</option>
					    </select>
					</div>
				</div>
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>Test Name</label>
					    <select name="test_name" id="test_name" onchange="for_student();" class="form-control" required >
					     <option value="">Select</option>
                        					     <option value="21">gk</option>
					    					     <option value="22">EVS</option>
					    					     <option value="23">EVS</option>
					    					    </select>
					</div>
				</div>
				
				<div class="col-md-2">
				<label>Limit</label>
				<select name="student_limit" id="student_limit" class="form-control" onchange="for_student();">
				<option value="0">0-30</option>
				<option value="30">30-60</option>
				<option value="60">60-90</option>
				<option value="90">90-120</option>
				<option value="120">120-150</option>
				<option value="150">150-180</option>
				<option value="180">180-210</option>
				<option value="210">210-240</option>
				<option value="240">240-270</option>
				<option value="270">270-300</option>
				</select>
				</div>
				
				<div class="col-md-12" id="test_students_detail">	
					
				</div>
				

		  <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" onclick="return validate();" class="btn  btn-success" /></center>
		  </div>
		  </form>
	      </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>
<script>
$(function () {
$('#example1').DataTable()
})
</script>