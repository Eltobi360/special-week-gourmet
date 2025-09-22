<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Productos
        </h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('productos.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
           Nuevo Producto
        </a>

        @if(session('success'))
            <div class="mt-4 p-2 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <table class="mt-6 w-full border-collapse border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Nombre</th>
                    <th class="border px-4 py-2">Unidad</th>
                    <th class="border px-4 py-2">Stock</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{ $producto->id }}</td>
                        <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                        <td class="border px-4 py-2">{{ $producto->unidad_medida }}</td>
                        <td class="border px-4 py-2">{{ $producto->stock_actual }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('productos.edit', $producto) }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Editar</a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" onsubmit="return confirm('¿Eliminar producto?')">
                                @csrf
                                @method('DELETE')
                                <button class="px-2 py-1 bg-red-600 text-white rounded hover:bg-red-700">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $productos->links() }}
        </div>
    </div>
</x-app-layout>
