<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="<?= BASEURL; ?>/assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="<?= BASEURL; ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="<?= BASEURL; ?>/assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="<?= BASEURL; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="<?= BASEURL; ?>/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="<?= BASEURL; ?>/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="<?= BASEURL; ?>/assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="<?= BASEURL; ?>/assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="<?= BASEURL; ?>/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="<?= BASEURL; ?>/assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="<?= BASEURL; ?>/assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="<?= BASEURL; ?>/assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="<?= BASEURL; ?>/assets/js/main.min.js"></script>
   <script type="text/javascript" src="<?= BASEURL; ?>/assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="<?= BASEURL; ?>/assets/pages/elements.js"></script>
   <script src="<?= BASEURL; ?>/assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>

<script src="<?= BASEURL; ?>/js/bootstrap.js">
</script>
</body>

</html>
