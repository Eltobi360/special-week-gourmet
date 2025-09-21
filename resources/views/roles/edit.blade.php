@extends('layouts.app')

@section('content')
<div class="max-w-md mx-auto mt-6">
    <h1 class="text-xl font-bold mb-4">Editar Rol</h1>

    <form action="{{ route('roles.update', $role) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Nombre</label>
            <input type="text" name="name" value="{{ $role->name }}" class="w-full border rounded p-2" required>
            @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Actualizar</button>
        <a href="{{ route('roles.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded">Cancelar</a>
    </form>
</div>
@endsection
