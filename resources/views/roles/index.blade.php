@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">Gestión de Roles</h1>

    <a href="{{ route('roles.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded">
        + Nuevo Rol
    </a>

    @if(session('success'))
        <div class="mt-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full mt-4 border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $role->id }}</td>
                <td class="px-4 py-2">{{ $role->name }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('roles.edit', $role) }}" class="px-2 py-1 bg-blue-500 text-white rounded">Editar</a>
                    <form action="{{ route('roles.destroy', $role) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded"
                            onclick="return confirm('¿Seguro que deseas eliminar este rol?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $roles->links() }}
    </div>
</div>
@endsection
