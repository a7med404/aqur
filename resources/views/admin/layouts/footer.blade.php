    </div>
    <!-- /#wrapper -->

    

    <!-- jQuery Version 1.11.0 -->
    {!! Html::script(asset('admin/js/jquery-1.11.0.js')) !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script(asset('admin/js/bootstrap.min.js')) !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script(asset('admin/js/metisMenu/metisMenu.min.js')) !!}

    <!-- DataTables JavaScript -->
    {!! Html::script(asset('admin/js/jquery/jquery.dataTables.min.js')) !!}
    {!! Html::script(asset('admin/js/bootstrap/dataTables.bootstrap.min.js')) !!}


    <!-- Custom Theme JavaScript -->
    {!! Html::script(asset('admin/js/scripts.en.js')) !!}

    <!-- Toaster JavaScript -->
    {!! Html::script(asset('admin/js/toastr.min.js')) !!}

    <!-- Sweet Alert JavaScript -->
    {!! Html::script(asset('admin/js/sweetalert.min.js')) !!}

    @yield('footer')
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function() {
          $('#dataTables-example').dataTable();
        });
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-left",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "slideDown",
            "hideMethod": "slideUp"
        }
    </script>


    <script>
        @if(Session::has('flash_massage'))
            toastr.success("{{ Session::get('flash_massage') }}","Sccess")
        @endif
    </script>
    @include('admin.layouts.massage-sweetAlert')
</body>

</html>
