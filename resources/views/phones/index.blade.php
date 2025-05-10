<x-guestLayout>
    <h1 class="text-4xl">Lista de Telefones</h1>

    <div class="grid grid-cols-4 gap-4 max-w-4xl m-auto my-8">
        @foreach ($phones as $phone)
            <div class="border">
                <a href="/phones/{{ $phone->id }}">
                    <img class="h-48 m-auto" src="/phone_images/{{ $phone->path ?? 'default.jpg' }}" />
                    <p class="text-center">{{ $phone->name }}</p>
                </a>
            </div>
        @endforeach
    </div>
    <a href="/phones/create" class="bg-red-400 p-4 rounded">Adicionar Telefone</a>
</x-guestLayout>
