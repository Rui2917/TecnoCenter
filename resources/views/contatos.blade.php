<x-guestLayout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100 font-sans">
        <div class="bg-white shadow-md rounded-lg p-8 max-w-md w-full">
            <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">Contactar-nos</h1>
            <p class="text-gray-600 text-center">
                Email:
                <a href="mailto:Tecnocenterlojaa@gmail.com?subject=Hello%20Tecnocenter&body=I%20would%20like%20to%20contact%20you." class="text-blue-500 hover:underline">
                    Tecnocenterlojaa@gmail.com
</a>
                    <br> Number:
                    <a href="tel:+351 934946303" class="text-blue-500 hover:underline">
                        +351 934946303
                </a>
            </p>
            Siga-nos no instagram:
                <a href="https://www.instagram.com/tecnocenterlojaa/" class="text-blue-500 hover:underline">
                Tecnocenterlojaa
</a>
</p>
 <p class="text-gray-600 text-center mt-4">
               <a href="{{ url('/phones') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                    Voltar à lista de telemóveis
</a>
</p>
        </div>
    </div>
</x-guestLayout>
