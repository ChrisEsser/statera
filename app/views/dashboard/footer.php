
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
            <a href="<?=BASE_PATH?>">Statera</a>, some legal bull shit
        </p><!-- end legal stuff -->
    </div>
</footer><!-- end footer -->


</div><!--end main-panel -->
</div><!--end wrapper -->

<!-- core js libraries -->
<script src="<?=BASE_PATH?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=BASE_PATH?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=BASE_PATH?>/js/material.min.js" type="text/javascript"></script>

<?php if ($this->_action == 'dashboard') { ?>
    <!-- dashboard javascript methods -->
    <script src="<?=BASE_PATH?>/js/chartist.min.js"></script><!-- chart library (possibly switch this out) -->
    <script src="<?=BASE_PATH?>/js/demo.js"></script><!-- this gets loads the charts (switch this out for for ajax calls) -->

    <script type="text/javascript">
        $(document).ready(function() {
            demo.initDashboardPageCharts();
        });
    </script>
<?php } ?>

<script src="<?=BASE_PATH?>/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?=BASE_PATH?>/js/material-dashboard.js?v=1.2.0"></script>

<?=Notifications::displayErrors()?>

</body>


</html>
