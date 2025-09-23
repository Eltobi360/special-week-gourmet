<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Compras</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('compras.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded">Nueva Compra</a>

        <table class="w-full mt-4 border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Proveedor</th>
                    <th class="border px-4 py-2">Factura</th>
                    <th class="border px-4 py-2">Fecha</th>
                    <th class="border px-4 py-2">Monto</th>
                    <th class="border px-4 py-2">Estado</th>
                    <th class="border px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($compras as $compra)
                    <tr>
                        <td class="border px-4 py-2">{{ $compra->id }}</td>
                        <td class="border px-4 py-2">{{ $compra->proveedor->nombre ?? 'Sin proveedor' }}</td>
                        <td class="border px-4 py-2">{{ $compra->numero_factura }}</td>
                        <td class="border px-4 py-2">{{ $compra->fecha_compra }}</td>
                        <td class="border px-4 py-2">{{ $compra->monto_total }}</td>
                        <td class="border px-4 py-2">{{ ucfirst($compra->estado) }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('compras.edit', $compra) }}" class="px-2 py-1 bg-yellow-500 text-white rounded">Editar</a>
                            <form action="{{ route('compras.destroy', $compra) }}" method="POST" onsubmit="return confirm('¿Eliminar esta compra?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 bg-red-600 text-white rounded">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">
            {{ $compras->links() }}
        </div>
    </div>
</x-app-layout>
