<x-header></x-header>

@extends('design.template')

@section('title', 'Halaman Utama')

@section('content')

<h1>Selamat datang di halaman utama!</h1>
<p>Ini adalah konten halaman utama.</p>
<x-dropdown>
    <option value="1">Pilihan 1</option>
    <option value="2">Pilihan 2</option>
    <option value="3">Pilihan 3</option>
</x-dropdown>
<p id="selectedOption">Teks yang dipilih akan muncul di sini</p>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdown = document.querySelector('select');
        const selectedOption = document.getElementById('selectedOption');

        dropdown.addEventListener('change', function() {
            selectedOption.textContent = 'Anda memilih ' + dropdown.options[dropdown.selectedIndex].text;
        });
    });
</script>

@endsection