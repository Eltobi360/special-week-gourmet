<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Proveedores
        </h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('proveedores.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Nuevo Proveedor</a>

        @if(session('success'))
            <div class="mt-4 p-2 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="mt-6 w-full border-collapse border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">RUC</th>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Teléfono</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td class="border px-4 py-2">{{ $proveedor->ruc }}</td>
                        <td class="border px-4 py-2">{{ $proveedor->nombre }}</td>
                        <td class="border px-4 py-2">{{ $proveedor->telefono }}</td>
                        <td class="border px-4 py-2">{{ $proveedor->email }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('proveedores.edit', $proveedor) }}" class="px-2 py-1 bg-yellow-500 text-white rounded">Editar</a>
                            <form action="{{ route('proveedores.destroy', $proveedor) }}" method="POST" onsubmit="return confirm('¿Eliminar proveedor?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-2 py-1 bg-red-600 text-white rounded">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $proveedores->links() }}
        </div>
    </div>
</x-app-layout>
