@extends('adminlte::page')

@section('title', 'Admin | Orders')

@section('content_header')
    <h1>Orders</h1>
@stop

@section('content')
  <div class="m-3">
    <p class="text-right">
        <button class="btn btn-success"><a class="text-white" href="/orders/export">Export Data</a></button>
    </p>
  </div>
  @include('adminlte::data')
@stop

@section('css')
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vendor/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vendor/adminlte/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@stop

@section('js')

    <!-- DataTables -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    
    <!-- page script -->
    <script>
$(document).ready(function () {
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });

      $('#exampleModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
  })
});
    </script>
@stop