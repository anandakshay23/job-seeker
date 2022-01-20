<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2022 Job Seeker.</strong> All Rights
    Reserved.
</footer>



</body>
<script type="text/javascript" src="../plugins/jQuery/jQuery-2.1.4.min.js"> </script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../dist/js/app.min.js"></script>

<script type="text/javascript" src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../plugins/datepicker/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="../plugins/datepicker/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

<script type="text/javascript" src="../plugins/dataTables/dataTables.bootstrap.min.js"></script>
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>

<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script type="text/javascript" language="javascript" src="../plugins/input-mask/jquery.inputmask.js"></script>
<script type="text/javascript" language="javascript" src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script type="text/javascript" language="javascript" src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script>
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

</html>