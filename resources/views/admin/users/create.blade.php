@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow mt-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b pb-2">Ajouter un utilisateur</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 mb-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <x-label for="name">Nom</x-label>
            <x-input type="text" name="name" id="name" value="{{ old('name') }}" required />
        </div>

        <div class="mb-4">
            <x-label for="email">Email</x-label>
            <x-input type="email" name="email" id="email" value="{{ old('email') }}" required />
        </div>

        <div class="mb-4">
            <x-label for="password">Mot de passe</x-label>
            <x-input type="password" name="password" id="password" required />
        </div>

        <div class="flex justify-end mt-6">
            <a href="{{ route('users.index') }}"
               class="mr-4 inline-block text-gray-600 hover:text-gray-800">Annuler</a>
            <x-button>Ajouter</x-button>
        </div>
    </form>
</div>
@endsection
