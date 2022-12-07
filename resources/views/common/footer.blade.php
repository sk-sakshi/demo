</div>

  <script src="{{url('assests/js/jquery.min.js')}}"></script>
<script src="{{url('assests/js/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{url('assests/js/bootstrap.min.js')}}"></script>
<script src="{{url('assests/js/raphael.min.js')}}"></script>
<script src="{{url('assests/js/morris.min.js')}}"></script>
<script src="{{url('assests/js/jquery.sparkline.min.js')}}"></script>
<script src="{{url('assests/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->


<!-- DataTables -->
<script src="{{url('assests/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assests/js/dataTables.bootstrap.min.js')}}"></script>
<!-- datepicker -->
<script src="{{url('assests/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{url('assests/js/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('assests/js/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('assests/jsadminlte.min.js')}}"></script>

<script src="{{url('assests/js/demo.js')}}"></script>
<script src="{{url('assests/js/select2.full.min.js')}}"></script>

<script>
$.extend( true, $.fn.dataTable.defaults, {
  'scrollY':'60vh',
    "pageLength": 50,
     "scrollX": true,
     "autoWidth": false
} );
</script>
<script type="text/javascript">
var timeSinceLastMove = 0;
$(document).mousemove(function() {
timeSinceLastMove = 0;
});
$(document).keyup(function() {
timeSinceLastMove = 0;
});
checkTime();
function checkTime() {
timeSinceLastMove++;
if (timeSinceLastMove > 1 * 60) {
get_content('attachment/logout');
session_destroy();
}
setTimeout(checkTime, 10000);
}
</script>
<style>
#snackbar_new {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #33dd32;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar_new.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
 </style>
 <script>
function alert_new(content,color){
       var x = document.getElementById("snackbar_new");
	             x.innerHTML=content;
	             x.style.background = color;
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}

 </script>

 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
     
    
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      
        
        <!-- /.control-sidebar-menu -->

      
       
        <!-- /.control-sidebar-menu -->

      </div>
     
     
      <!-- /.tab-pane -->
    </div>
  </aside>
   <div class="control-sidebar-bg"></div>

  <!-- /.control-sidebar -->
 
  <div id="snackbar"></div>
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>Copyright &copy; 2022-2023 <a href="http://simption.com/" target="_blank">Simption Tech Pvt. Ltd.</a>.</strong> All rights
    reserved.
  </footer>

  <style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #33dd32;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
 </style>
 <script>
     function alert_new(content,color){
       var x = document.getElementById("snackbar");
	             x.innerHTML=content;
	             x.style.background = color;
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
 </script>
		
<script type="text/javascript">
	
		$(document).ready(function () {

	

			
		});

</script>

 

</body>
</html>
 	<script type="text/javascript" src="{{url('assests/js/pramukhime.js')}}"></script>
	<script type="text/javascript" src="{{url('assests/js/pramukhindic.js')}}"></script>

	<script>
function url_control(){
var url=window.location.href;
var url1=url.split('#');
var hash_tag=url1.length;
if(hash_tag<2)
{
get_content('index_content');
}else{
var url2=url1[1].split('?');
var question_tag=url2.length;
if(question_tag<2){
get_content(url1[1]);
}else{
post_content(url2[0],url2[1]);	
}	
}
}
$(window).on('popstate', function (e) {
    var hidden_value11= $('#hidden_value1').val();
   if(hidden_value11==0){
       $('#hidden_value1').val('1');
       $('#hidden_value2').val('0');
   }else{
      $('#hidden_value2').val('1');
 url_control();
   }
});
$( document ).ready(function() {
    url_control();
});
	if(langue345=='Hindi'){
                      		
                       pramukhIME.addKeyboard(PramukhIndic);
            pramukhIME.enable();     	

			pramukhIME.setLanguage('hindi', 'pramukhindic');
				    var kb = new PramukhIndic('hindi');
var settings = [{language:'all', kb: 'pramukhindic', digitInEnglish: true}];
pramukhIME.setSettings(settings);
	}else{
	    	pramukhIME.addKeyboard(PramukhIndic);
            pramukhIME.enable();
            pramukhIME.setLanguage('english', 'pramukhime');
	}
</script>
	<script src="{{url('assests/js/attachment/file_check.js')}}"></script>