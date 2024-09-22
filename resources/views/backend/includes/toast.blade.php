<script>
      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "1000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
      @if(Session::has('success'))
          toastr.success("{{ session('success') }}");
      @elseif(Session::has('info'))
        toastr.info("{{ session('info') }}");
      @elseif(Session::has('error'))
        toastr.error("{{ session('error') }}");
      @elseif(Session::has('warning'))
        toastr.warning("{{ session('warning') }}");
      @endif
    </script>
