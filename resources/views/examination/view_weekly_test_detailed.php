<script type="text/javascript">

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
var subject=0;
$('.subject11').each(function() {
if($(this).prop('checked')==true){
subject = Number(parseInt(subject)+1);
}
});
if (subject<=0) {
	alert_new("Please Select Atleast One Subject !!!",'red');
	return false;
}
}

 $("#my_form").submit(function(e){
        e.preventDefault();

    var formdata = new FormData(this);
window.scrollTo(0, 0);
    loader();
        $.ajax({
            url: access_link+"examination/update_weekly_test_api.php",
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
				   get_content('examination/view_weekly_test');
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
	   <li class="active">Update Weekly Test</li>
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
              <h3 class="box-title">Update Weekly Test</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
			
            <div class="box-body "  >
		
			<form role="form"  method="post" enctype="multipart/form-data" id="my_form">
			
			    <div class="col-md-3">	
					<div class="form-group" >
					    <label>Test Name</label>
					    <input type="hidden" name="s_no_hidden"  value="23" class="form-control" required />
					    <input type="text" name="test_name" id="test_name" value="EVS" class="form-control" required />
					</div>
				</div>
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>From Date</label>
					    <input type="date" name="from_date" id="from_date" value="2022-12-01" class="form-control" required />
					</div>
				</div>
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>To Date</label>
					    <input type="date" name="to_date" id="to_date" value="2022-12-01" class="form-control" required />
					</div>
				</div>
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>Class</label>
					    <input type="text" name="student_class" id="student_class" value="LKG" class="form-control" required readonly/>
				
					</div>
				</div>
				
				<div class="col-md-3" id="student_class_stream_div" style="display:none;" >				
					<div class="form-group">
					  <label >Stream</label>
					  
					    <input type="text" name="student_class_stream" id="student_class_stream" value="" class="form-control" required readonly/>
					</div>
		        </div>
		        
		        <div class="col-md-2" id="student_class_group_div"  style="display:none;" >				
					<div class="form-group">
					  <label >Group</label>
					  
					    <input type="text" name="student_class_group" id="student_class_group" value="" class="form-control" required readonly/>
					    
					  </select>
					</div>
				</div>
				
				<div class="col-md-2">	
					<div class="form-group" >
					    <label>Section</label>
					    
					    <input type="text" name="student_class_section" id="student_class_section" value="A" class="form-control" required readonly/>
					   
					</div>
				</div>
				
				<div class="col-md-6">	
					<div class="form-group" >
					    <label>Description</label>
					    <input type="text" name="test_description" id="test_description" value="" class="form-control" />
					</div>
				</div>
				
				<div class="col-md-12" id="test_subjects_detail">	
			<table id="example1" class="table table-bordered table-striped">
<thead class="my_background_color">
<tr>
<th>S No</th>
<th><input type="checkbox" name="" id="subject11" onclick="for_check(this.id);" checked /> Subject Name</th>
<th>Date</th>
<th>From Time</th>
<th>To Time</th>
<th>Highest Marks</th>
</tr>
</thead>

<tbody>
<tr>
<td>1</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="0" class="subject11"  /> <b>Elements of Physics</b><input type="hidden" name="test_subjects[]" id="" value="practical10" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>2</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="1" class="subject11"  /> <b>PROJECT WORK (ENGLISH)</b><input type="hidden" name="test_subjects[]" id="" value="practical3" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>3</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="2" class="subject11"  /> <b>Project Work (HINDI)</b><input type="hidden" name="test_subjects[]" id="" value="practical5" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>4</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="3" class="subject11"  /> <b>Chemistry</b><input type="hidden" name="test_subjects[]" id="" value="practical7" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>5</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="4" class="subject11"  /> <b>Animal Husbandry And Poultary Farm</b><input type="hidden" name="test_subjects[]" id="" value="practical9" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>6</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="5" class="subject11"  /> <b>DRAWING</b><input type="hidden" name="test_subjects[]" id="" value="subject16" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>7</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="6" class="subject11"  /> <b>HINDI</b><input type="hidden" name="test_subjects[]" id="" value="subject4" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>8</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="7" class="subject11"  /> <b>SCIENCE</b><input type="hidden" name="test_subjects[]" id="" value="subject1" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>9</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="8" class="subject11"  /> <b>AG BIO</b><input type="hidden" name="test_subjects[]" id="" value="subject3" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>10</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="9" class="subject11"  /> <b>SANSKRIT</b><input type="hidden" name="test_subjects[]" id="" value="subject6" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>11</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="10" class="subject11"  /> <b>Bangali</b><input type="hidden" name="test_subjects[]" id="" value="subject7" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
<tr>
<td>12</td>
<td><input type="checkbox" name="test_indexes[]" id="" value="11" class="subject11"  /> <b>S.S.</b><input type="hidden" name="test_subjects[]" id="" value="subject5" class="form-control" /></td>
<td><input type="date" name="test_dates[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_from_times[]" id="" class="form-control"  value="" /></td>
<td><input type="time" name="test_to_times[]" id="" class="form-control"  value="" /></td>
<td><input type="number" name="hightest_marks[]" id="" class="form-control" value="" /></td>
</tr>
</tbody>
</table>
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