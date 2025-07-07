@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Modifier utilisateur</h2>

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Nom:</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full border p-2">
        </div>

        <div class="mb-4">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full border p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2">Modifier</button>
    </form>
</div>
@endsection
