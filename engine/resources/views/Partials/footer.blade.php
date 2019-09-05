<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="{{asset('engine/node_modules/mdbootstrap/js/mdb.min.js')}}"></script>
<script type="text/javascript" src="{{asset('engine/node_modules/mdbootstrap/js/modules/forms-free.js')}}"></script>
<script type="text/javascript" src="js/agile-min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery-confirm.min.js"></script>
<script type="text/javascript">
	
$(document).ready(function() {
    $('input.form-control').on('focus', function() {
      $(this).toggleClass('active');
  });
});
</script>

