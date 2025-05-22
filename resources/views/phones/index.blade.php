<x-guest-layout>
    <h1 class="text-4xl">Lista de Telemóveis</h1>

    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto my-8">
        @if(isset($phones) && count($phones))
            @foreach ($phones as $phone)
                <div class="border">
                    <a href="/phones/{{ $phone->id }}">
                        <img class="h-48 m-auto" src="/img2/{{ $phone->path ?? 'default.jpg' }}" />
                        <p class="text-center">{{ $phone->name }}</p>
                    </a>
                </div>
            @endforeach
        @else
            <p class="col-span-4 text-center text-gray-500">Nenhum telemóvel encontrado.</p>
        @endif
    </div>
    <a href="/phones/create" class="bg-red-400 p-4 rounded">Adicionar Telemóvel</a>
</x-guest-layout>
