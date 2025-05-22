<x-guestlayout>
    <div class="max-w-xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-8">
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Add New Phone</h1>

        <form method="POST" action="/phones/store" enctype="multipart/form-data" class="space-y-6">
            @csrf

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
                <x-label for="brand" class="font-semibold">Brand</x-label>
                <x-input type="text" name="brand" id="brand" value="{{ old('brand') }}" class="w-full"/>
                @error('brand')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="model" class="font-semibold">Model</x-label>
                <x-input type="text" name="model" id="model" value="{{ old('model') }}" class="w-full"/>
                @error('model')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="price" class="font-semibold">Price</x-label>
                <x-input type="number" name="price" id="price" step="0.01" value="{{ old('price') }}" class="w-full"/>
                @error('price')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="features" class="font-semibold">Features</x-label>
                <x-input type="text" name="features" id="features" value="{{ old('features') }}" class="w-full"/>
                @error('features')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-label for="image" class="font-semibold">Image</x-label>
                <x-input type="file" name="image" id="image" class="w-full"/>
                @error('image')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between mt-8">
                <x-button class="bg-blue-600 hover:bg-blue-700">Submit</x-button>
                <a href="/phones" class="bg-red-400 hover:bg-red-500 text-white px-4 py-2 rounded transition">Back</a>
            </div>
        </form>
    </div>
</x-guestlayout>
