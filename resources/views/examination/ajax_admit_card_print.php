<table id="example1" class="table table-bordered table-striped">
<thead class="my_background_color">
<tr>
<th>No.</th>
<th>Student Name</th>
<th>Father Name</th>
<th>Class Roll No</th>
<th>Select &nbsp;<input type="checkbox" id="checked1" checked value="" name="" onclick="for_check(this.id);"></th>

<th>Update By</th>
<th>Date</th>

</tr>
</thead>

<tbody>

</tbody>
</table>
<script>
  $(function () {
    $('#example1').DataTable()
  })
</script>