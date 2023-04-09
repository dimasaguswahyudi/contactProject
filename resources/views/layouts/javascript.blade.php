<script src="{{ asset('assets') }}/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets') }}/js/icons/feather-icon/feather.min.js"></script>
<script src="{{ asset('assets') }}/js/icons/feather-icon/feather-icon.js"></script>
<script src="{{ asset('assets') }}/js/scrollbar/simplebar.js"></script>
<script src="{{ asset('assets') }}/js/scrollbar/custom.js"></script>
<script src="{{ asset('assets') }}/js/config.js"></script>
<script src="{{ asset('assets') }}/js/sidebar-menu.js"></script>
<script src="{{ asset('assets') }}/js/prism/prism.min.js"></script>
<script src="{{ asset('assets') }}/js/clipboard/clipboard.min.js"></script>
<script src="{{ asset('assets') }}/js/custom-card/custom-card.js"></script>
<script src="{{ asset('assets') }}/js/dashboard/default.js"></script>
<script src="{{ asset('assets') }}/js/slick-slider/slick.min.js"></script>
<script src="{{ asset('assets') }}/js/slick-slider/slick-theme.js"></script>
<script src="{{ asset('assets') }}/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/js/datatable/datatables/datatable.custom.js"></script>
<script src="{{ asset('assets') }}/js/script.js"></script>
<script src="{{ asset('assets') }}/js/select2/select2.full.min.js"></script>
<script src="{{ asset('assets') }}/js/select2/select2-custom.js"></script>
<script src="{{ asset('assets') }}/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>
<script src="{{ asset('assets') }}/js/notify/bootstrap-notify.min.js"></script>
<script src="{{ asset('assets') }}/js/notify/index.js"></script>
<script>
    @if (session()->has('success'))
        $.notify({
            message: '{{ session()->get('success') }}'
        }, {
            type: 'success',
            allow_dismiss: false,
            newest_on_top: false,
            mouse_over: false,
            showProgressbar: false,
            spacing: 10,
            timer: 2000,
            placement: {
                from: 'bottom',
                align: 'right'
            },
            offset: {
                x: 30,
                y: 30
            },
            delay: 1000,
            z_index: 10000,
            animate: {
                enter: 'animated bounce',
                exit: 'animated bounce'
            }
        });
    @endif

    @if (session()->has('danger'))
        $.notify({
            message: '{{ session()->get('danger') }}'
        }, {
            type: 'danger',
            allow_dismiss: false,
            newest_on_top: false,
            mouse_over: false,
            showProgressbar: false,
            spacing: 10,
            timer: 2000,
            placement: {
                from: 'bottom',
                align: 'right'
            },
            offset: {
                x: 30,
                y: 30
            },
            delay: 1000,
            z_index: 10000,
            animate: {
                enter: 'animated bounce',
                exit: 'animated bounce'
            }
        });
    @endif
</script>
@stack('js')
