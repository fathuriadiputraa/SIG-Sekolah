@extends('layouts.app')
@section('title', 'Ubah Kata Sandi')
@section('content')
<div class="max-w-md mx-auto bg-white rounded shadow p-6">
    <h1 class="text-2xl font-bold mb-4 text-blue-800">Ubah Kata Sandi</h1>
    <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label class="block font-medium">Kata Sandi Saat Ini</label>
            <input type="password" name="current_password" required class="w-full border rounded px-3 py-2">
            @error('current_password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block font-medium">Kata Sandi Baru</label>
            <input type="password" name="password" required class="w-full border rounded px-3 py-2">
            @error('password') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div>
            <label class="block font-medium">Ulangi Kata Sandi Baru</label>
            <input type="password" name="password_confirmation" required class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex gap-3 pt-2">
            <button class="px-5 py-2 bg-blue-700 text-white rounded">Simpan</button>
            <a href="{{ route('dashboard') }}" class="px-5 py-2 bg-gray-300 rounded">Batal</a>
        </div>
    </form>
</div>
@endsection