<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="widget">
                        <h5 class="widgetheading">Job Seeker</h5>
                        <address>
                            <strong>Job Seeker Pvt. Ltd.</strong><br>
                            Haltu, Kalikapur<br>
                            Pin-700099 Kalikapur India.
                        </address>
                        <p>
                            <i class="icon-phone"></i> (+91) 99887-76655 <br>
                            <i class="icon-envelope-alt"></i> info@jobseeker.com
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h5 class="widgetheading">Quick Links</h5>
                        <ul class="link-list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php?q=company">Company</a></li>
                            <li><a href="index.php?q=hiring">Hiring</a></li>
                            <li><a href="index.php?q=About">About us</a></li>
                            <li><a href="index.php?q=Contact">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                <span>&copy; Job Seeker 2022 All Rights Reserved.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="plugins/home-plugins/js/jquery.js"></script>
    <script src="plugins/home-plugins/js/jquery.easing.1.3.js"></script>
    <script src="plugins/home-plugins/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="plugins/dataTables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>

    <script type="text/javascript" src="plugins/datepicker/bootstrap-datepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

    <script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.js"></script>
    <script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script type="text/javascript" language="javascript" src="plugins/input-mask/jquery.inputmask.extensions.js"></script>

    <script src="plugins/home-plugins/js/jquery.fancybox.pack.js"></script>
    <script src="plugins/home-plugins/js/jquery.fancybox-media.js"></script>
    <script src="plugins/home-plugins/js/jquery.flexslider.js"></script>
    <script src="plugins/home-plugins/js/animate.js"></script>


    <!-- Vendor Scripts -->
    <script src="plugins/home-plugins/js/modernizr.custom.js"></script>
    <script src="plugins/home-plugins/js/jquery.isotope.min.js"></script>
    <script src="plugins/home-plugins/js/jquery.magnific-popup.min.js"></script>
    <script src="plugins/home-plugins/js/animate.js"></script>
    <script src="plugins/home-plugins/js/custom.js"></script>
    <!-- <script src="plugins/paralax/paralax.js"></script>  -->

    <script type="text/javascript">
        $(function() {
            $("#dash-table").DataTable();
            $('#dash-table2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });


        $("#btnlogin").click(function() {
            var username = document.getElementById("user_email");
            var pass = document.getElementById("user_pass");

            // alert(username.value)
            // alert(pass.value)
            if (username.value == "" && pass.value == "") {
                $('#loginerrormessage').fadeOut();
                $('#loginerrormessage').fadeIn();
                $('#loginerrormessage').css({
                    "background": "red",
                    "color": "#fff",
                    "padding": "5px;"
                });
                $("#loginerrormessage").html("Invalid Username and Password!");
                //  $("#loginerrormessage").css(function(){ 
                //   "background-color" : "red";
                // });
            } else {

                $.ajax({ //create an ajax request to load_page.php
                    type: "POST",
                    url: "process.php?action=login",
                    dataType: "text", //expect html to be returned  
                    data: {
                        USERNAME: username.value,
                        PASS: pass.value
                    },
                    success: function(data) {
                        // alert(data);
                        $('#loginerrormessage').fadeOut();
                        $('#loginerrormessage').fadeIn();
                        $('#loginerrormessage').css({
                            "background": "red",
                            "color": "#fff",
                            "padding": "5px;"
                        });
                        $('#loginerrormessage').html(data);
                    }
                });
            }
        });


        $('input[data-mask]').each(function() {
            var input = $(this);
            input.setMask(input.data('mask'));
        });


        $('#BIRTHDATE').inputmask({
            mask: "2/1/y",
            placeholder: "mm/dd/yyyy",
            alias: "date",
            hourFormat: "24"
        });
        $('#HIREDDATE').inputmask({
            mask: "2/1/y",
            placeholder: "mm/dd/yyyy",
            alias: "date",
            hourFormat: "24"
        });

        $('.date_picker').datetimepicker({
            format: 'mm/dd/yyyy',
            startDate: '01/01/1950',
            language: 'en',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0

        });
    </script>

</body>

</html>