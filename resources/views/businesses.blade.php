@extends('layouts.default')

@section('sidebar')@endsection

@section('content')
    <h5>Adicionar business (model)</h5>
    @if($errors->any())
        Erros: <br>
        @foreach($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
        <br><br>
    @endif
    <form method="POST" action="{{ route('businesses.store') }}">
        @csrf
        <input
            type="text"
            name="name"
            value="{{ old('name') }}"
        >
        @error('name')
            {{ $message }}
        @enderror
        <br>
        <input
            type="text"
            name="email"
            value="{{ old('email') }}"
        >
        @error('email')
            {{ $message }}
        @enderror
        <br>
        <input
            type="text"
            name="address"
            value="{{ old('address') }}"
        >
        <br>
        <button type="submit">Salvar</button>
    </form>

    <hr>

    @foreach($businesses as $business)
        {{ $business->name }} ({{ $business->email }}) <br>
    @endforeach
@endsection
