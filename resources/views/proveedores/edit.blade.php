<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Editar Proveedor</h2>
    </x-slot>

    <div class="p-6">
        <form method="POST" action="{{ route('proveedores.update', $proveedore) }}" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label>RUC</label>
                <input type="text" name="ruc" value="{{ old('ruc', $proveedore->ruc) }}" class="w-full border rounded p-2" required maxlength="11">
            </div>

            <div>
                <label>Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre', $proveedore->nombre) }}" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label>Contacto</label>
                <input type="text" name="contacto" value="{{ old('contacto', $proveedore->contacto) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Teléfono</label>
                <input type="text" name="telefono" value="{{ old('telefono', $proveedore->telefono) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email', $proveedore->email) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Dirección</label>
                <input type="text" name="direccion" value="{{ old('direccion', $proveedore->direccion) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Página Web</label>
                <input type="url" name="pagina_web" value="{{ old('pagina_web', $proveedore->pagina_web) }}" class="w-full border rounded p-2">
            </div>

            <div>
                <label>Activo</label>
                <input type="checkbox" name="activo" value="1" {{ old('activo', $proveedore->activo) ? 'checked' : '' }}>
            </div>

            <div class="flex gap-2">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Guardar</button>
                <a href="{{ route('proveedores.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
