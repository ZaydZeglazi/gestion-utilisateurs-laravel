@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-4">Liste des utilisateurs</h2>
    <a href="{{ route('users.create') }}" class="bg-green-600 text-white px-4 py-2 mb-4 inline-block">+ Ajouter</a>

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
