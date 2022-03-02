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
    <form
        enctype="multipart/form-data"
        method="POST"
        action="{{ route('businesses.store') }}"
    >
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
        <input
            type="file"
            name="logo"
        >
        <br>
        <button type="submit">Salvar</button>
    </form>

    <hr>

    @foreach($businesses as $business)
        @if($business->logo)
            <img
                src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($business->logo) }}"
                alt=""
                width="100"
            >
        @endif
        <br>
        {{ $business->name }} ({{ $business->email }}) <br><br>
    @endforeach
@endsection
