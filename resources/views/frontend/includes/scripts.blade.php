<!-- Javascript Files
================================================== -->
<script src="{{ asset('/frontend/js/plugins.js') }}"></script>
<script src="{{ asset('/frontend/js/designesia.js') }}"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>
