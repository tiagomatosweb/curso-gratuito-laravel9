@extends('layouts.default')

@section('title', 'User title')

@push('styles')
    <link
        rel="stylesheet"
        href="{{ asset('css/user.css') }}"
    >
@endpush

@push('scripts')
    <script>
        var user = 'Tiago';
    </script>
@endpush

@prepend('scripts')
    <script src="{{ asset('js/user.js') }}"></script>
@endprepend

@section('sidebar')
    <div>
        <nav>
            Sidebar de user
        </nav>
    </div>
@endsection

@section('content')
<h1>User</h1>
{{ $user->name }} <br>
{{ $user->email }} <br>
@endsection




