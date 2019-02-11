@if(Session::has('flash_massage'))
    <script>
        {{--  swal({
            title: "Good job!",
            text: "{{ Session::get('flash_massage') }}",
            icon: "success",
            showConfirmButton:false,
            timer: 2000,
           // button: "Aww yiss!",
            });  --}}
            //swal("title!", "Your content ",  "success", showConfirmButton: );
    </script>
@endif