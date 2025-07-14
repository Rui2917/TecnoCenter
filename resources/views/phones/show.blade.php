<x-guest-layout>
    <div class="flex flex-col items-center">
        <a href="/phones/{{ $phone->id }}">
            <img 
                class="w-64 h-64 object-cover mb-4 border rounded shadow"
                src="/img2/{{ $phone->path ?? 'default.jpg' }}"
                alt="{{ $phone->model ?? 'Sem modelo' }}"
            />
        </a>
        <a href="/phones/{{ $phone->slug ?? '' }}" class="block hover:shadow-lg transition-shadow duration-300 w-full">
            <h1 class="text-center">Modelo: {{ $phone->model ?? 'Sem modelo' }}</h1>
            <h1 class="text-center">Marca: {{ $phone->brand ?? 'Sem marca' }}</h1>
            <h1 class="text-center">Preço: {{ $phone->price ?? 'Sem preço' }}</h1>
            <h1 class="text-center">Especificações: {{ $phone->features ?? 'Sem especificações' }}</h1>
        </a>
        <div class="flex flex-row space-x-4 mt-4">
            <form action="#" method="POST">
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition-colors">
                    comprar
                </button>
            </form>
            <a href="/phones" class="bg-red-400 text-white px-4 py-2 rounded hover:bg-red-500 transition-colors flex items-center">
                Voltar
            </a>
            <form action="{{ route('phones.destroy', $phone->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este telefone?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
                    Excluir
                </button>
            </form>
        </div>
        </form>
    </div>
</x-guest-layout>