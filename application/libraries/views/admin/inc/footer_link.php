<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>assets_admin/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets_admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url() ?>assets_admin/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>assets_admin/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets_admin/js/demo/chart-pie-demo.js"></script>
<script src="<?= base_url() ?>assets_admin/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets_admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<?php
if (!empty($footer_link)) {
    foreach ($footer_link as $link) {
        require_once(APPPATH . 'views/admin/inc/js/'.$link);
    }
}
?>

</body>

</html>