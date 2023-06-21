{{-- File Resources --}}
@section('global.resources.head')
    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/choices.js/public/assets/styles/choices.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/sweetalert2/sweetalert2.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app-dark.css" />

    <script src="{{ asset('assets') }}/static/js/initTheme.js"></script>

    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/extensions/DataTables/datatables.min.css">

@endsection

@section('global.resources.footer')
    <script src="{{ asset('assets') }}/static/js/components/dark.js"></script>
    <script src="{{ asset('assets') }}/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('assets') }}/compiled/js/app.js"></script>
    <script src="{{ asset('assets') }}/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{ asset('assets') }}/extensions/DataTables/datatables.min.js"></script>
    <script src="{{ asset('assets') }}/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('assets') }}/static/js/pages/parsley.js"></script>

@endsection

{{-- Code Resources --}}
@section('global.javascript.footer')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const Swal2 = Swal.mixin({
            customClass: {
                input: 'form-control'
            }
        });

        let choices = document.querySelectorAll(".choices")
        let initChoice
        for (let i = 0; i < choices.length; i++) {
            if (choices[i].classList.contains("multiple-remove")) {
                initChoice = new Choices(choices[i], {
                    delimiter: ",",
                    editItems: true,
                    maxItemCount: -1,
                    removeItemButton: true,
                })
            } else {
                initChoice = new Choices(choices[i])
            }
        }
    </script>
@endsection
