<x-guest-layout>
    <h1 class="text-4xl text-center m-8">Lista de Telemóveis</h1>

    <!-- Filter Form -->
    <form method="GET" action="{{ url('/phones') }}" class="max-w-md mx-auto mb-8 flex">
        <select name="letter" class="flex-1 border rounded-l px-4 py-2" onchange="this.form.submit()">
            <option value="">Todas as letras</option>
            @foreach (range('A', 'Z') as $char)
                <option value="{{ $char }}" {{ request('letter') == $char ? 'selected' : '' }}>
                    {{ $char }}
                </option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r">Filtrar</button>
    </form>

    <div class="grid grid-cols-4 gap-4 max-w-4xl mx-auto my-8">
        @forelse ($phones as $phone)
            <div class="border rounded shadow hover:shadow-lg transition">
                <a href="{{ url('/phones/' . $phone->id) }}">
                    <img 
                        class="h-48 m-auto object-contain" 
                        src="{{ asset('img2/' . ($phone->path ?? 'default.jpg')) }}" 
                        alt="{{ $phone->name }}"
                    />
                    <div class="mt-2">
                        <p class="text-center font-bold">{{ $phone->name }}</p>
                        <p class="text-center text-gray-600">{{ $phone->model }}</p>
                        <p class="text-center text-gray-500">{{ $phone->marca }}</p>
                    </div>
                </a>
            </div>
        @empty
            <p class="col-span-4 text-center text-gray-500">Nenhum telemóvel encontrado.</p>
        @endforelse
    </div>

    <div class="text-center m-8">
        <a href="{{ url('/phones/create') }}" class="bg-red-400 p-4 rounded text-white">Adicionar Telemóvel</a>
    </div>
</x-guest-layout>
