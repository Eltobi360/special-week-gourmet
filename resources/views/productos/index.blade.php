<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    
    .glass-container {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 2rem;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        padding: 2rem;
        width: 100%;
        max-width: 90rem;
        color: #f8f8f8;
    }

    .glass-table {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .glass-th {
        background: rgba(255, 255, 255, 0.15);
    }

    .glass-td {
        border-color: rgba(255, 255, 255, 0.2);
    }

    .button-shadow {
      box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-4xl text-white">
            Productos
        </h2>
    </x-slot>

    <div class="glass-container mt-6 mx-auto">
        <!-- Contenedor del contenido principal con el efecto de vidrio -->
        <div class="p-6">
            <a href="{{ route('productos.create') }}"
               class="px-6 py-3 bg-white text-blue-600 font-semibold rounded-full hover:bg-gray-100 transition-colors button-shadow flex items-center gap-2 w-max">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Nuevo Producto
            </a>

            @if(session('success'))
                <div class="mt-4 p-4 bg-green-500 bg-opacity-30 text-white rounded-lg border border-green-400">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto mt-8">
                <table class="w-full glass-table rounded-2xl overflow-hidden">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left glass-th font-semibold rounded-tl-xl">ID</th>
                            <th class="px-4 py-3 text-left glass-th font-semibold">Nombre</th>
                            <th class="px-4 py-3 text-left glass-th font-semibold">Descripción</th>
                            <th class="px-4 py-3 text-left glass-th font-semibold">Unidad</th>
                            <th class="px-4 py-3 text-left glass-th font-semibold">Stock</th>
                            <th class="px-4 py-3 text-center glass-th font-semibold rounded-tr-xl">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                            <tr class="hover:bg-white hover:bg-opacity-20 transition-colors">
                                <td class="px-4 py-3 glass-td">{{ $producto->id }}</td>
                                <td class="px-4 py-3 glass-td">{{ $producto->nombre }}</td>
                                <td class="px-4 py-3 glass-td">{{ $producto->descripcion }}</td>
                                <td class="px-4 py-3 glass-td">
                                    {{ $producto->medida?->nombre }} ({{ $producto->medida?->abreviatura }})
                                </td>
                                <td class="px-4 py-3 glass-td">{{ $producto->stock_actual }}</td>
                                <td class="px-4 py-3 glass-td flex justify-center gap-2">
                                    <a href="{{ route('productos.edit', $producto) }}" class="px-4 py-2 bg-yellow-400 text-white rounded-lg hover:bg-yellow-500 transition-colors button-shadow flex items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                          <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                          <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                        </svg>
                                        Editar
                                    </a>
                                    <form action="{{ route('productos.destroy', $producto) }}" method="POST" onsubmit="return confirm('¿Eliminar producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors button-shadow flex items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                            </svg>
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-6 flex justify-center">
                {{ $productos->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
