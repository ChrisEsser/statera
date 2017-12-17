
</div><!--end container-fluid -->
</div><!--end content -->

<!-- start footer -->
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li><a href="<?=BASE_PATH?>">Home</a></li>
                <li><a href="<?=BASE_PATH?>/about">About</a></li>
                <li><a href="<?=BASE_PATH?>/careers">Careers</a></li>
                <li><a href="<?=BASE_PATH?>/help">Help</a>
                </li>
            </ul>
        </nav>
        <!-- start legal stuff -->
        <p class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a href="#">Statera</a>, some legal bull shit
        </p><!-- end legal stuff -->
    </div>
</footer><!-- end footer -->


</div><!--end main-panel -->
</div><!--end wrapper -->
</body>

<!-- core libraries -->
<script src="<?=BASE_PATH?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=BASE_PATH?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=BASE_PATH?>/js/material.min.js" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="<?=BASE_PATH?>/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<!--<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->


<?php if ($this->_action == 'dashboard') { ?>
    <!-- dashboard javascript methods -->
    <script src="<?=BASE_PATH?>/js/chartist.min.js"></script>
    <script src="<?=BASE_PATH?>/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?=BASE_PATH?>/js/material-dashboard.js?v=1.2.0"></script>
    <script src="<?=BASE_PATH?>/js/demo.js"></script>

    <script src="<?=BASE_PATH?>/js/alert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            demo.initDashboardPageCharts();


            alert('This is a test alert message', 'danger');
//            alert('This is a test warning message', 'warning');
//            alert('This is a test success message', 'success');

        });
    </script>
<?php } ?>


</html>
