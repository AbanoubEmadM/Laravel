@props(['title' => ''])
<x-base-layout :$title bodyClass='bg-dark'>
    {{-- @section('title', 'Homes') --}}
        @include('layouts.partials.header')
        {{$slot}}
            <footer class= {{$footerLinks}}>

                <a href="">Link1</a>
                <a href="">Link2</a>
            </footer>
</x-base-layout>
