
@section('global.resources.head')
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/compiled/css/auth.css" />
    <script src="{{ asset('assets') }}/static/js/initTheme.js"></script>
@endsection

@section('global.resources.footer')
    {{-- <script src="{{ asset('assets') }}/static/js/components/dark.js"></script> --}}
@endsection

@section('private.css.code')
    <style>
        #auth #auth-right {
            height: 100%;
            background: url({{ asset('assets') }}/static/images/bg/4853433.png), linear-gradient(90deg, #2d499d, #3f5491)
        }
    </style>
@endsection
