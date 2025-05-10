<x-guest-layout>
    <img src="/phone_images/{{ e($phone->path) }}" class="mx-auto rounded-full" width="200" height="100" />
    <h1 class="text-center">Modelo: {{ $phone->model }}</h1>
    <h1 class="text-center">Marca: {{ $phone->brand }}</h1>
    <h1 class="text-center">Preço: {{ $phone->price }}</h1>
    <h1 class="text-center">Especificações: {{ $phone->features }}</h1>
    <a href="/phones" class="bg-red-400 p-4 rounded">Voltar</a>
</x-guest-layout>
