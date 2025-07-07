@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Ajouter un utilisateur</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label>Nom:</label>
            <input type="text" name="name" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label>Email:</label>
            <input type="email" name="email" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label>Mot de passe:</label>
            <input type="password" name="password" class="w-full border p-2" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2">Ajouter</button>
    </form>
</div>
@endsection
