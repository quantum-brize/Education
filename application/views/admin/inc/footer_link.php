
    <script src="<?=base_url()?>assets/js/jquery-3.6.0.min.js" type=""></script>

<script src="<?=base_url()?>assets/js/bootstrap.bundle.min.js" type=""></script>

<script src="<?=base_url()?>assets/js/jquery.waypoints.js" type=""></script>
<script src="<?=base_url()?>assets/js/jquery.counterup.min.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/select2/js/select2.min.js" type=""></script>

<script src="<?=base_url()?>assets/js/owl.carousel.min.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/slick/slick.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/aos/aos.js" type=""></script>

<script src="<?=base_url()?>assets/js/ckeditor.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"
    type=""></script>

<script src="<?=base_url()?>assets/plugins/swiper/js/swiper.min.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/feather/feather.min.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/theia-sticky-sidebar/ResizeSensor.js"
    type=""></script>
<script src="<?=base_url()?>assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"
    type=""></script>

<script src="<?=base_url()?>assets/plugins/apexchart/apexcharts.min.js" type=""></script>
<script src="<?=base_url()?>assets/plugins/apexchart/chart-data.js" type=""></script>

<script src="<?=base_url()?>assets/js/circle-progress.min.js" type=""></script>

<script src="<?=base_url()?>assets/plugins/dropzone/dropzone.min.js" type=""></script>

<script src="<?=base_url()?>assets/js/validation.js" type=""></script>
<script data-navigate-once="true"
    type="">window.livewireScriptConfig = {"csrf":"zys1Tptzq1HI08KoIbQVmNfiSHcbaFnOtaw18XRv","uri":"\/livewire\/update","progressBar":""};</script>

<script src="<?=base_url()?>assets/js/script.js" type=""></script>
<!-- <script src="../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="07ba63059fb555adc69bd99b-|49" defer=""></script> -->

<?php
if (!empty($footer_link)) {
    foreach ($footer_link as $link) {
        require_once(APPPATH . 'views/admin/inc/js/'.$link);
        
    }
}
?>
</body>

</html>