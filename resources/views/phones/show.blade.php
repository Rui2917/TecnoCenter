<x-guest-layout>
    <img src="/img2/{{ $phone->image ?? 'default.png' }}" alt="{{ $phone->model ?? 'Sem modelo' }}" />
    <a href="/phones/{{ $phone->slug ?? '' }}" class="block hover:shadow-lg transition-shadow duration-300">
        <h1 class="text-center">Modelo: {{ $phone->model ?? 'Sem modelo' }}</h1>
        <h1 class="text-center">Marca: {{ $phone->brand ?? 'Sem marca' }}</h1>
        <h1 class="text-center">Preço: {{ $phone->price ?? 'Sem preço' }}</h1>
        <h1 class="text-center">Especificações: {{ $phone->features ?? 'Sem especificações' }}</h1>
    </a>
    <a href="/phones" class="bg-red-400 p-4 rounded">Voltar</a>
</x-guest-layout>
<form action="{{ route('phones.destroy', $phone->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este telefone?');" class="mt-4">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 transition-colors">
        Excluir
    </button>
</form>