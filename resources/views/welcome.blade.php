<x-guestLayout>
    <div class="lg:flex">
        <div class="bg-[#A0C1B9] lg:w-1/4">


<label>Cor:
    <select id="cor">
      <option value="">Qualquer</option>
      <option value="preto">Preto</option>
      <option value="branco">Branco</option>
      <option value="azul">Azul</option>
      <option value="Vermelho">Vermelho</option>
    </select>
  </label>
  <br>

<label>Ano:
    <select id="ano">
      <option value="">Qualquer</option>
      <option value="2025">2025</option>
      <option value="2024">2024</option>
      <option value="2023">2023</option>
      <option value="2022">2022</option>
      <option value="2021">2021</option>
      <option value="2020">2020</option>
    </select>
  </label>
  <br>



  <label>Preço:
<input type="number" id="preco" placeholder="Ex: 950€" max="1200">
</label>
<br>

<label>RAM:
    <select id="ram">
        <option value="">Qualquer</option>
        <option value="4">4 GB</option>
        <option value="6">6 GB</option>
        <option value="8">8 GB</option>
        <option value="12">12 GB</option>
        <option value="16">16 GB</option>
    </select>
  </label>
  <br>

            <label>Memória Interna:
    <select id="memoria">
      <option value="">Qualquer</option>
      <option value="64">64 GB</option>
      <option value="128">128 GB</option>
      <option value="256">256 GB</option>
      <option value="512">512 GB</option>
      <option value="1">1 TB</option>
    </select>
  </label>
  <br>

        </li>
        <label>Características:
    <select id="caracteristicas">
      <option value="">Qualquer</option>
      <option value="agua">Resistente à Água</option>
      <option value="carregamento">Carregamento Rápido</option>
      <option value="nfc">NFC</option>
      <option value="usb">USB Tipo C</option>
      <option value="usb-lightning">USB tipo lightning</option>
    </select>
  </label>
  <br>



            <label>Conectividade:
    <select id="conectividade">
      <option value="">Qualquer</option>
      <option value="2g">2G</option>
      <option value="3g">3G</option>
      <option value="4g">4G</option>
      <option value="5g">5G</option>

    </select>
  </label>
  <br>

        <button onclick="filtrar()">Filtrar</button>
    <br>

  <script>
    function filtrar() {
      const cor = document.getElementById("cor").value;
      const ano = document.getElementById("ano").value;
      const precoMax = parseFloat(document.getElementById("preco").value);
      const ram = document.getElementById("ram").value;
      const memoria = document.getElementById("memoria").value;
      const caracteristicas = document.getElementById("caracteristicas").value;
      const conectividade = document.getElementById("conectividade").value;

      const itens = document.querySelectorAll("#lista li");

      itens.forEach(function(item) {
        const corItem = item.getAttribute("data-cor");
        const anoItem = item.getAttribute("data-ano");
        const precoItem = parseFloat(item.getAttribute("data-preco"));
        const ramItem = item.getAttribute("data-ram");
        const memoriaItem = item.getAttribute("data-memoria");
        const caracteristicasItem = item.getAttribute("data-caracteristicas");
        const conectividadeItem = item.getAttribute("data-conectividade");

        const corOk = !cor || corItem === cor;
        const anoOk = !ano || anoItem === ano;
        const precoOk = isNaN(precoMax) || precoItem <= precoMax;
        const ramOk = !ram || ramItem === ram;
        const memoriaOk = !memoria || memoriaItem === memoria;
        const caracteristicasOk = !caracteristicas || caracteristicasItem === caracteristicas;
        const conectividadeOk = !conectividade || conectividadeItem === conectividade;

        if (corOk && anoOk && precoOk && ramOk && memoriaOk && caracteristicasOk && conectividadeOk) {
          item.style.display = "";
        } else {
          item.style.display = "none";
        }
      });
    }
  </script>



</x-guestLayout>
