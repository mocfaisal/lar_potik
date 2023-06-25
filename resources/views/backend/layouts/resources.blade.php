{{-- File Resources --}}
@section('global.resources.head')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/extensions/choices.js/public/assets/styles/choices.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/extensions/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/extensions/sweetalert2/sweetalert2.min.css">

    <link rel="stylesheet" href="{{ asset('assets/backend') }}/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/compiled/css/app-dark.css" />

    <script src="{{ asset('assets/backend') }}/static/js/initTheme.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/backend') }}/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/extensions/DataTables/datatables.min.css">

@endsection

@section('global.resources.footer')
    <script src="{{ asset('assets/backend') }}/static/js/components/dark.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('assets/backend') }}/compiled/js/app.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/parsleyjs/parsley.min.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/DataTables/datatables.min.js"></script>
    <script src="{{ asset('assets/backend') }}/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{ asset('assets/backend') }}/static/js/pages/parsley.js"></script>

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
