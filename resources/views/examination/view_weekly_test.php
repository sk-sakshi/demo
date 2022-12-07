
<script>
function valid(s_no){
var myval=confirm("Are you sure want to delete this record !!!!");
if(myval==true){
for_delete(s_no);
}
else  {
return false;
}
}

function for_delete(s_no){
$.ajax({
type: "POST",
url: access_link+"examination/weekly_test_delete.php?s_no="+s_no+"",
cache: false,
success: function(detail){
var res=detail.split("|?|");
if(res[1]=='success'){
alert_new('Successfully Deleted','green');
get_content('examination/view_weekly_test');
}else if(res[1]=='session_not_set'){
alert_new('Session Expire !!!','red');
}else{
//alert_new(detail); 
}
}
});
}
</script>

    <section class="content-header">
      <h1>
        Examination Management        <small> Control Panel</small>
      </h1>
      <ol class="breadcrumb">
   <li><a href="javascript:get_content('index_content')"><i class="fa fa-dashboard"></i> Home</a></li>
	 <li><a href="javascript:get_content('examination/examination')"><i class="fa fa-id-card-o"></i> Examination</a></li>
	   <li class="active">View Weekly Test</li>
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
              <h3 class="box-title">View Weekly Test</h3>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
 
            <div class="box-body">
			
				<div class="col-xs-12">
                <!-- /.box -->

                <div class="box box-success" >
                <div class="box-header with-border">
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive" id="my_table">
                <table id="example1" class="table table-bordered table-striped">
                <thead class="my_background_color">
                <tr>
				  <th>S No</th>
				  <th>Test Name</th>
				  <th>Date</th>
				  <th>Class (Sec)</th>
				  <th>Stream (Group)</th>
				  <th>Test Description</th>
				  <th>Update By</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
				
<tbody>


<tr>
<td>1</td>
<td>EVS</td>
<td>01-12-2022-01-12-2022</td>
<td>LKG (A)</td>
<td> ()</td>
<td></td>
<td>rahul@simption.com</td>
<td>01-12-2022 02:47:40</td>
<td><button type="button"  class="btn btn-primary" onclick="post_content('examination/view_weekly_test_detailed','s_no=23');" >Edit</button></td>
<td><button type="button"  class="btn btn-danger" onclick="return valid('23');" >Delete</button></td>
</tr>

<tr>
<td>2</td>
<td>EVS</td>
<td>01-12-2022-01-12-2022</td>
<td>8TH (A)</td>
<td> ()</td>
<td>ityuiop[]</td>
<td>rahul@simption.com</td>
<td>01-12-2022 02:45:55</td>
<td><button type="button"  class="btn btn-primary" onclick="post_content('examination/view_weekly_test_detailed','s_no=22');" >Edit</button></td>
<td><button type="button"  class="btn btn-danger" onclick="return valid('22');" >Delete</button></td>
</tr>

<tr>
<td>3</td>
<td>gk</td>
<td>01-12-2022-20-12-2022</td>
<td>LKG (A)</td>
<td> ()</td>
<td>fghjk</td>
<td>rahul@simption.com</td>
<td>01-12-2022 10:32:08</td>
<td><button type="button"  class="btn btn-primary" onclick="post_content('examination/view_weekly_test_detailed','s_no=21');" >Edit</button></td>
<td><button type="button"  class="btn btn-danger" onclick="return valid('21');" >Delete</button></td>
</tr>
</tbody>
				
                </table>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
			
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

  