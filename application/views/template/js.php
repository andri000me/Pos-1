</div><!-- /.content-wrapper -->



<footer class="main-footer">

    <div class="pull-right hidden-xs">

        <b>Version</b> 2.0

    </div>

    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="http://almsaeedstudio.com">Ataba</a>.</strong> All rights reserved.

</footer>

</div><!-- ./wrapper -->

<!-- datatable -->


<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
        responsive: true
    });
</script>

<!-- Bootstrap 3.3.2 JS -->

<script src="<?php echo base_url('assets/AdminLTE-2.0.5/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript"></script>

<!-- SlimScroll -->

<!-- FastClick -->

<script src='<?php echo base_url('assets/AdminLTE-2.0.5/plugins/fastclick/fastclick.min.js') ?>'></script>

<!-- AdminLTE App -->

<script src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/js/app.min.js') ?>" type="text/javascript"></script>