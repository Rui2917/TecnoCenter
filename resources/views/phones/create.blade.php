<x-guestlayout>
    <h1 class="text-4xl">Telemovel</h1>

    <form method="POST" action="/phones/store" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            @if ($errors->any())
                <div class="mb-4">
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <x-label for="brand">Brand</x-label>
                <x-input type="text" name="brand" id="brand" value=""/>
                @error('brand')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="model">Model</x-label>
                <x-input type="text" name="model" id="model" value=""/>
                @error('model')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="price">Price</x-label>
                <x-input type="number" name="price" id="price" step="0.01" value=""/>
                @error('price')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <x-label for="features">Features</x-label>
                <x-input type="text" name="features" id="features" value=""/>
                @error('features')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="image">Image</x-label>
                <x-input type="file" name="image" id="image"/>
                @error('image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
                    <x-button>Submit</x-button>
                    <a href="/phones" class="bg-red-400 p-2 rounded">Back</a>
                </div>
            </form>
        </x-guestlayout>
