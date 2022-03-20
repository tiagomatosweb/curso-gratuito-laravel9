@extends('layouts.default')
@section('content')
    <section>
        <div class="container px-5 mx-auto">
            <form
                method="get"
                action="/"
                class="flex items-center space-x-5"
            >
                <div>
                    <input
                        type="text" id="search" name="search"
                        value="{{ request()->search }}"
                        class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                </div>

                <div class="flex items-center space-x-2">
                    <button type="submit" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Pesquisar</button>
                    <a href="/">Limpar</a>
                </div>
            </form>
        </div>
    </section>
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                @foreach($products as $product)
                <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{ \Illuminate\Support\Facades\Storage::url($product->cover) }}">
                    </a>
                    <div class="mt-4">
                        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                        <p class="mt-1">${{ $product->price }}</p>
                    </div>
                    <a href="{{ route('product', $product->slug) }}" class="mt-3 text-indigo-500 inline-flex items-center">Ver mais
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
