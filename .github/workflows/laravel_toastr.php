
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>

$notification = array(
            'message' => 'Category Added Successfully',
            'alert' => 'success'
        );



<script>
@if (Session()->has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch (type) {
        case'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
    </script>
