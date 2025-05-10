<x-guestLayout>
<h1 class="text-4xl">Upload Phone Details</h1>
<form method="POST" action="/phones" enctype="multipart/form-data">
    @csrf
    <div class="space-y-4">
        <div>
            <x-label>Image</x-label>
            <x-input type="file" name="image" id="image"/>
            @error('image')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>Brand</x-label>
            <x-input type="text" name="brand" id="brand"/>
            @error('brand')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <x-label>features</x-label>
            <x-input type="text" name="features" id="features"/>
            @error('features')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        <div>
            <x-label>Price</x-label>
            <x-input type="number" name="price" id="price" step="0.01"/>
            @error('price')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>


        <x-button>Upload</x-button>

    </div>

</form>
</x-guestLayout>
