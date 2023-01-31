
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<!-- JQuery min js -->
<script src="{{URL::asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Bundle js -->
<script src="{{URL::asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('admin/assets/plugins/ionicons/ionicons.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('admin/assets/plugins/moment/moment.js')}}"></script>

<!-- Rating js-->
<script src="{{URL::asset('admin/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('admin/assets/plugins/rating/jquery.barrating.js')}}"></script>

<!--Internal  Perfect-scrollbar js -->
<script src="{{URL::asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{URL::asset('admin/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
<!--Internal Sparkline js -->
<script src="{{URL::asset('admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!-- Custom Scroll bar Js-->
<script src="{{URL::asset('admin/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- right-sidebar js -->
<script src="{{URL::asset('admin/assets/plugins/sidebar/sidebar-rtl.js')}}"></script>
<script src="{{URL::asset('admin/assets/plugins/sidebar/sidebar-custom.js')}}"></script>
<!-- Eva-icons js -->
<script src="{{URL::asset('admin/assets/js/eva-icons.min.js')}}"></script>
<!-- Sticky js -->
<script src="{{URL::asset('admin/assets/js/sticky.js')}}"></script>
<!-- custom js -->
<script src="{{URL::asset('admin/assets/js/custom.js')}}"></script><!-- Left-menu js-->
<script src="{{URL::asset('admin/assets/plugins/side-menu/sidemenu.js')}}"></script>





<!--Internal  Select2 js -->
<script src="{{asset('admin/assets/plugins/select2/js/select2.min.js')}}"></script>



<!-- Internal Jquery.steps js -->
<script src="{{asset('admin/assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/parsleyjs/parsley.min.js')}}"></script>




<script src="{{asset('admin/assets/js/modal-popup.js')}}"></script>

<!--Internal  Form-wizard js -->
<script src="{{asset('admin/assets/js/form-wizard.js')}}"></script>










<!-- Internal Data tables -->
<script src="{{asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{asset('admin/assets/js/table-data.js')}}"></script>


<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });


    $(document).ready(function () {
        $('#summernote2').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });

    $(document).ready(function () {
        $('#summernote3').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });
    $(document).ready(function () {
        $('#summernote4').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });

    $(document).ready(function () {
        $('#summernote5').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });

    $(document).ready(function () {
        $('#summernote6').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });

    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>

<script>
    var app_url = "{{ url('/') }}";
</script>

<script src="{{URL::asset('js/status.js')}}"></script>
@toastr_js
@toastr_render

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>--}}
{{--<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />--}}
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>





<script src="{{asset('admin/vendor/boorstarp-fileUpdload/js/plugins/piexif.min.js')}}"></script>
<script src="{{asset('admin/vendor/boorstarp-fileUpdload/js/plugins/sortable.min.js')}}"></script>
<script src="{{asset('admin/vendor/boorstarp-fileUpdload/js/fileinput.min.js')}}"></script>
<script src="{{asset('admin/vendor/boorstarp-fileUpdload/themes/fa5/theme.min.js')}}"></script>

<script src="{{asset('admin/select/js/select2.full.min.js')}}"></script>


@yield('js')

<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });


    $(document).ready(function () {
        $('#summernote2').summernote({
            placeholder: 'Text Notes',
            tabsize: 2,
            height: 100,
            rows: 20
        });
    });

    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script src="{{asset('admin/textarea/summernote-bs4.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

