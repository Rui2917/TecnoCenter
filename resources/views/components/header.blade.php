<header id="main-menu" class="transition-transform duration-300">
  <nav class="border-gray-200 bg-gray-400">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <img src="/image/logo.png" class="h-20" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">TecnoCenter</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:border-gray-700">
          <li>
            <a href="/" class="block py-2 px-3 bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-blue-700 " aria-current="page">Home</a>
          </li>
          <li>
            <a href="/sobre" class="block py-2 px-3 text-blue-700 rounded-sm hover:bg-blue-700 md:hover:bg-blue-500 md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sobre nós</a>
          </li>
          <li>
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Marcas</button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="hidden z-10 divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Samsung</a></li>
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Iphone</a></li>
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Huawei</a></li>
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Xiaomi</a></li>
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Oppo</a></li>
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Ulefone</a></li>
                <li><a href="#" class="block px-4 py-2 dark:hover:bg-gray-600 dark:hover:text-white">Realme</a></li>
              </ul>
            </div>
            <script>
              document.getElementById('dropdownDefaultButton').addEventListener('click', function () {
                  const dropdown = document.getElementById('dropdown');
                  dropdown.classList.toggle('hidden');
              });
            </script>
          </li>
          <li>
            <a href="/contatos" class="block py-2 px-3 rounded-sm md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-700 md:dark:hover:bg-transparent">Contatos</a>
          </li>
          <li>
            <a href="/carrinho" class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-700 md:dark:hover:bg-transparent">Carrinho</a>
          </li>
          <li>
            <div class="rounded-full bg-gray-200 dark:bg-gray-500 p-2 px-4 py-1">
              @guest
                <div class="flex flex-col md:flex-row md:space-x-2">
                  <a href="{{ route('login') }}" class="block py-2 px-3 rounded-full hover:bg-gray-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-600 dark:hover:text-blue-700 md:dark:hover:bg-transparent">Entrar</a>
                  <a href="{{ route('register') }}" class="block py-2 px-3 rounded-full hover:bg-gray-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-600 dark:hover:text-blue-700 md:dark:hover:bg-transparent">Registrar</a>
                </div>
              @else
                <div class="relative group">
                  <button class="flex items-center py-2 px-3 rounded-full hover:bg-gray-300 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-600 dark:hover:text-blue-700 md:dark:hover:bg-transparent focus:outline-none">
                    {{ Auth::user()->name }}
                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                    </svg>
                  </button>
                  <div class="absolute right-0 mt-2 w-40 bg-white dark:bg-gray-700 rounded-md shadow-lg opacity-0 group-hover:opacity-100 group-hover:pointer-events-auto pointer-events-none transition-opacity duration-200 z-20">
                    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">Perfil</a>
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-600">
                        Sair
                      </button>
                    </form>
                  </div>
                </div>
              @endguest
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<script>
    let lastScroll = 0;
    const menu = document.getElementById('main-menu');
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > lastScroll && currentScroll > 50) {
            // Scroll down
            menu.style.transform = 'translateY(-100%)';
        } else {
            // Scroll up
            menu.style.transform = 'translateY(0)';
        }
        lastScroll = currentScroll;
    });
</script>
