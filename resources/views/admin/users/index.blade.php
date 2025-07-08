@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Liste des utilisateurs</h2>
    <a href="{{ route('users.create') }}" class="bg-green-600 text-white px-4 py-2 mb-4 inline-block">+ Ajouter</a>
    <form action="{{ route('users.index') }}" method="GET" class="mb-4 flex justify-between items-center">
    <input type="text" name="search" placeholder="Rechercher par nom ou email"
        value="{{ request('search') }}"
        class="border border-gray-300 rounded px-4 py-2 w-full max-w-md focus:outline-none focus:ring">

    <button type="submit"
        class="ml-3 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Chercher
    </button>
</form>


    <table class="w-full table-auto border">
        <thead class="bg-gray-100">
            <tr>
                <th class="border px-4 py-2">ID</th>
                <th class="border px-4 py-2">Nom</th>
                <th class="border px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="border px-4 py-2">{{ $user->id }}</td>
                <td class="border px-4 py-2">{{ $user->name }}</td>
                <td class="border px-4 py-2">{{ $user->email }}</td>

                <td class="border px-4 py-2">
    <a href="{{ route('users.edit', $user->id) }}" class="text-blue-600">Modifier</a>

    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Supprimer cet utilisateur ?')" class="text-red-600 ml-2">Supprimer</button>
    </form>
</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
