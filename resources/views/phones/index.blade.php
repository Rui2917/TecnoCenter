<x-guest-layout>
    <h1 class="text-4xl text-center m-8">Lista de Telemóveis</h1>

    <!-- Filter Form -->
    <form method="GET" action="{{ url('/phones') }}" class="max-w-md mx-auto mb-8 flex">
        <select name="letter" class="flex-1 border rounded-l px-4 py-2" onchange="this.form.submit()">
            <option value="">Todas as marcas</option>
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Huawei">Huawei</option>
            <option value="Ulefone">Ulefone</option>
            <option value="Oppo">Oppo</option>
            <option value="Realme">Realme</option>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-r">Filtrar</button>
    </form>

    <div class="grid grid-cols-4 gap-4 max-w-4xl mx-auto my-8">
        @foreach ($phones as $phone)
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
        @endforeach
    </div>
    
</x-guest-layout>
