<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; 2016-2017 <a href="#">Scombi</a>.</strong> All rights
  reserved.
</footer>
<!-- jQuery 2.2.0 -->
<!-- <script src="{{ URL::asset('plugins/jQuery/jQuery-2.2.0.min.js') }}"></script> -->
<script src="{{ URL::asset('js/jquery-1.11.1.min.js') }}"></script>
<link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<!-- jQuery UI 1.11.4 -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<script href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

@include('sweet::alert')

<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('js/app.min.js') }}"></script>

<script>
  $(function() {
    // More code using $ as alias to jQuery
  });
</script>
</body>
</html>