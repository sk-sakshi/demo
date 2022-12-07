<script type="text/javascript">
      function for_list(){ 
			var student_class= document.getElementById('student_class').value;
			var student_class_section= document.getElementById('student_class_section').value;
			var subject_name= document.getElementById('subject_name').value;
			var exam_type= document.getElementById('exam_type').value;
			var student_class_stream= document.getElementById('student_class_stream').value;
			var student_class_group= document.getElementById('student_class_group').value;
			var select_month= document.getElementById('select_month').value;
			var order_by= document.getElementById('order_by').value;
			if(student_class_section!='' && student_class!='' && exam_type!='' && subject_name!='' ){
			 $('#example2').html(loader_div);
             $.ajax({
			  type: "POST",
             url:  access_link+"examination/ajax_fill_marksheet.php?id="+student_class+"&student_section="+student_class_section+"&subject_name="+subject_name+"&student_exam_type="+exam_type+"&student_class_stream="+student_class_stream+"&student_class_group="+student_class_group+"&select_month="+select_month+"&order_by="+order_by+"",
              cache: false,
              success: function(detail){
              $('#example2').html(detail);
			  var str =detail;
		      var res = str.split("||");
		      $("#student_maximum_marks").val(res[1]);
			  $("#student_minimum_marks").val(res[2]);
			  $("#student_mark_add").val(res[3]);
			 
			//$("#click").click();
              }
           });
            }
}
			function for_subject(selected){
			       $('#subject_name').html("<option value='' >Loading....</option>");
			var student_class_stream= document.getElementById('student_class_stream').value;
			var student_class_group= document.getElementById('student_class_group').value;
			var student_class= document.getElementById('student_class').value;
	         var student_class_stream= document.getElementById('student_class_stream').value;
			var student_class_group= document.getElementById('student_class_group').value;
			$.ajax({
			address: "POST",
			url: access_link+"examination/ajax_get_subject.php?value="+student_class+"&student_class_stream="+student_class_stream+"&student_class_group="+student_class_group+"&student_class_stream="+student_class_stream+"&student_class_group="+student_class_group+"",
			cache: false,
			success: function(detail){
			$("#subject_name").html(detail);
			if(selected!=''){
			$('#subject_name').val(selected).change();
			}
			for_list();
			}
			});
			}
</script>
  <script type="text/javascript">
   function for_section(value,selected,selected1){
 $('#student_class_section').html("<option value='' >Loading....</option>");
       $.ajax({
			  type: "POST",
             url:  access_link+"examination/ajax_class_section_code.php?class_name="+value+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                 
                  $("#student_class_section").html("<option value='All'>All</option>"+str);
                  if(selected!=''){
                  $('#student_class_section').val(selected);
                  }
				  for_exam(selected1);
				  for_list();
				  
              }
           });

    }
	   function for_exam(selected){
	        $('#exam_type').html("<option value='' >Loading....</option>");
         	var student_class= document.getElementById('student_class').value;
       $.ajax({
			  type: "POST",
             url:  access_link+"examination/ajax_get_exam_type.php?class_name="+student_class+"",
              cache: false,
              success: function($detail){
                   var str =$detail;                
                  $("#exam_type").html(str);
                  $('#exam_type').val(selected);
              }
           });

    }
	function for_stream(value2,selected){
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
if(selected!=''){
$('#student_class_stream').val(selected).change();
}
}

function for_validation(id,value){
    var maximum_marks=document.getElementById('student_maximum_marks').value;
    if(maximum_marks>0){
        var maximum_marks1=maximum_marks;
    }else{
        var maximum_marks1='0';
    }
    if(parseFloat(value)>parseFloat(maximum_marks1)){
        alert_new("Please Fill Marks Less or Equals to Maximum Marks !!!",'red');
        $('#'+id).val('');
        $('#'+id).focus();
    }
}

   function get_group(value1,selected){
 $('#student_class_group').html("<option value='' >Loading....</option>");
       $.ajax({
			  type: "POST",
             url:  access_link+"examination/ajax_stream_group.php?stream_name="+value1+"",
              cache: false,
              success: function(detail1){			   
                  $("#student_class_group").html(detail1);
                  if(selected!=''){
                  $('#student_class_group').val(selected).change();
                  }
              }
           });
for_list();
    }

function for_same(value){
	if($('#check_for_same').prop("checked") == true){
		$(".check_for_same").each(function(){
		$(this).val(value);
		});
	}
}

		$("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"examination/marksheet_fill_api.php",
            type: "POST",
            data: formdata,
            mimeTypes:"multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(detail){
			
               var res=detail.split("|?|");
			   if(res[1]=='success'){
				   alert_new('Successfully Complete','green');
				   //get_content('examination/marksheet_fill_hit');
				   post_content('examination/marksheet_fill',res[2]);
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
	   <li class="active"> Exam Marks Fill</li>
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
              <h3 class="box-title">Exam Marks Fill</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body">
		
			<form role="form" id="my_form" method="post" enctype="multipart/form-data">
			
			    <div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Class<font style="color:red"><b>*</b></font></label>
					    <select name="student_class" onchange="for_section(this.value,'','');for_subject('');for_stream(this.value,'');" id="student_class" class="form-control" required>
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
					<div class="col-md-3 " id="student_class_stream_div" style="display:none;">				
					<div class="form-group">
					  <label >Stream<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_stream" id="student_class_stream" onchange="get_group(this.value,'');for_subject('');" >
					           <option  value="">Select Stream</option>
						       						       <option value="SCIENCE">SCIENCE</option>
					           						       <option value="ARTS">ARTS</option>
					           						       <option value="Commerce ">Commerce </option>
					           					    </select>
					
					</div>
		</div>
		<div class="col-md-3" id="student_class_group_div" style="display:none;">				
					<div class="form-group">
					  <label >Group<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_group" id="student_class_group" onchange="for_subject('');" >
					           <option value="">Select Group</option>
					    </select>
					  </select>
					</div>
				</div>
				<div class="col-md-3 ">	
					<div class="form-group" >
					    <label>Section<font style="color:red"><b>*</b></font></label>
					    <select class="form-control" name="student_class_section" id="student_class_section" onchange='for_list();' required>
					     <option value="All">All</option>
					    </select>
					</div>
				</div>
				
				<div class="col-md-3 ">				
			    <div class="form-group" >
				 <label >Subject Name<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="subject_name" id="subject_name" onchange='for_list();' required>
				 <option value="">Select Subject</option>
				 </select>
				 </div>
				 </div>
	

			  <div class="col-md-3 ">				
			  <div class="form-group" >
				 <label >Exam Type<font style="color:red"><b>*</b></font></label>
				 <select class="form-control" name="exam_type" id="exam_type" onchange='for_list();' required>
				               <option value="">Select Exam Type</option>
					          
				 </select>
				 </div>
				</div>
				 <div class="col-md-3 ">				
			     <div class="form-group" >
				 <label>Maximum Mark<font style="color:red"><b>*</b></font></label>
				 <input type="text" placeholder="Maximum Mark" name="student_maximum_marks" id="student_maximum_marks" class="form-control" required>
				 </div>
				 </div>
				 <div class="col-md-3 ">				
			     <div class="form-group" >
				 <label>Minimum Mark<font style="color:red"><b>*</b></font></label>
				 <input type="text" placeholder="Minimum Mark" name="student_minimum_marks" id="student_minimum_marks" class="form-control" required>
				 </div>
				 </div>
				 <div class="col-md-3 ">				
			     <div class="form-group" >
				 <label>Marks Add In Total Marks<font style="color:red"><b>*</b></font></label>
				<select class="form-control" name="student_mark_add" id="student_mark_add" required>
				               <option value="Yes">Yes</option>
				               <option value="No">No</option>
				
				 </select>
				 </div>
				 </div>
				 
				 <div class="col-md-3 ">				
			     <div class="form-group" >
				 <label>Till Month <small>( For Attendance Calculation )</small></label>
				<select class="form-control" name="select_month" id="select_month" onchange="for_list();" >
				            <option value="">Select</option>
                            <option value="|?|04">April </option>
                            <option value="|?|04|?|05">May </option>
                            <option value="|?|04|?|05|?|06">June </option>
                            <option value="|?|04|?|05|?|06|?|07">July </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08">August </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09">September </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10">October </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11">November </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12">December </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01">Jaunary </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01|?|02">February </option>
                            <option value="|?|04|?|05|?|06|?|07|?|08|?|09|?|10|?|11|?|12|?|01|?|02|?|03">March </option>
				 </select>
				 </div>
				 </div>
				 
				 <div class="col-md-3 ">				
			     <div class="form-group" >
				 <label>Order By</label>
				 <select class="form-control" name="order_by" id="order_by" onchange="for_list();" >
				    <option value="">Select</option>
				    <option value=" ORDER BY student_name ASC">Student Name</option>
				    <option value=" ORDER BY student_father_name ASC">Father Name</option>
				    <option value=" ORDER BY CAST(school_roll_no AS SIGNED) ASC">Roll No</option>
				 </select>
				 </div>
				 </div>
				
				<div class="col-md-12">
                <!-- /.box -->

                <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                <table id="" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
				  <th>S.no.</th>
                  <th>student Name</th>
                  <th>Father's Name</th>
                  <th>Roll.No.</th>
				  <th>Fill Mark<br/><span style="color:red;"><input type="checkbox" name="" id="check_for_same" value="" /> <b>For Same</b></span></th>
				  
				  <th>Total Days</th>
                  <th>Total Present</th>
                  <th>Remark</th>
				  
				  <th>Update By</th>
                  <th>Date</th>
				  
                </tr>
                </thead>
				
				<tbody id="example2">
				
		        </tbody>
				
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
				
		  <div class="col-md-12">
		        <center><input type="submit" name="finish" value="Submit" class="btn  btn-success" /></center>
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
 