<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="mirrorfashion/css/reset.css" />
  <link rel="stylesheet" href="mirrorfashion/css/style2.css" />
  <meta name="viewport" content="width=device-width">
  <title>Document</title>
</head>

<body>
  <header class="container">
    <h1><img src="mirrorfashion/img/logo.png" alt="Mirror Fashion" /></h1>

    <p class="sacola">Nenhum item na sacola de compras</p>
    <nav class="menuOpcoes">
      <ul>
        <li><a href="">Sua Conta</a></li>
        <li><a href="">Listas de Desejos</a></li>
        <li><a href="">Cartão Fidelidade</a></li>
        <li><a href="sobre.html">Sobre</a></li>
        <li><a href=""></a>Ajuda</li>
      </ul>
    </nav>
  </header>
  <div class="container destaque">
    <section class="busca">
      <h2>Busca</h2>
      <form>
        <input type="search" />
        <button>Buscar</button>
      </form>
    </section>

    <section class="menu-departamentos">
      <h2>Departamentos</h2>
      <nav>
        <ul>
          <li><a href="#">Blusas e Camisas</a>
            <ul>
              <li><a href="#">Manga Curta</a></li>
              <li><a href="#">Manga Comprida</a></li>
              <li><a href="#">Camisa Social</a></li>
              <li><a href="#">Camisa Casual</a></li>
            </ul>
          </li>
          <li><a href="#">Calças</a></li>
          <li><a href="#">Saias</a></li>
          <li><a href="#">Vestidos</a></li>
          <li><a href="#">Sapatos</a></li>
          <li><a href="#">Bolsas e Carteiras</a></li>
          <li><a href="#">Acessórios</a></li>
        </ul>
      </nav>
    </section>
    <section class="banner-destaque">
      <figure>
        <img src="mirrorfashion/img/destaque-home.png" alt="Promoção: Big City Night" />
      </figure>
    </section>
  </div>
  <div class="container paineis">
    <section class="painel novidades">
      <h2>Novidades</h2>
      <ol></ol>
      <li>
        <a href="produto.html">
          <figure>
            <img src="mirrorfashion/img/produtos/miniatura1.png" alt="miniatura1" />
            <figcaption>Fuzz Cardigan por RS 129,90</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.html">
          <figure>
            <img src="mirrorfashion/img/produtos/miniatura10.png" alt="miniatura10" />
            <figcaption>Camisa Rosa por RS 69,99</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.html">
          <figure>
            <img src="mirrorfashion/img/produtos/miniatura2.png" alt="miniatura2" />
            <figcaption>Camisa roxa caveira por RS 49,99</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produtos.html">
          <figure>
            <img src="mirrorfashion/img/produtos/miniatura3.png" alt="miniatura3" />
            <figcaption>Camisa verde por RS 79,99</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.html">
          <figure>
            <img src="mirrorfashion/img/produtos/miniatura4.png" alt="miniatura4" />
            <figcaption>Jaqueta bordo por RS 279,99</figcaption>
          </figure>
        </a>
      </li>
      <li>
        <a href="produto.html">
          <figure>
            <img src="mirrorfashion/img/produtos/miniatura5.png" alt="miniatura5" />
            <figcaption>Camisa regata academia azul por RS 79,99</figcaption>
          </figure>
        </a>
      </li>
      <button type="button" id="mostrarNovidades">Mostrar mais</button>
    </section>
    <section class="painel mais-vendidos">
      <h2>Mais Vendidos</h2>
      <ol></ol>
        <li>
          <a href="produto.html">
            <figure>
              <img src="mirrorfashion/img/produtos/miniatura4.png" alt="miniatura4" />
              <figcaption>Jaqueta bordo por RS 279,99</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
              <img src="mirrorfashion/img/produtos/miniatura9.png" alt="miniatura9" />
              <figcaption>
                Camisa xadrez rosa com azul por RS 169,99
              </figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
              <img src="mirrorfashion/img/produtos/miniatura8.png" alt="miniatura8" />
              <figcaption>Camisa verde por RS 79,99</figcaption>
            </figure>
          </a>
        </li>
        <li>
          <a href="produto.html">
            <figure>
              <img src="mirrorfashion/img/produtos/miniatura10.png" alt="miniatura10" />
              <figcaption>Camisa Rosa por RS 69,99</figcaption>
            </figure>
          </a>
        </li>
        <button type="button" id="maisVendidos">Mostrar mais</button>   
    </section>
  </div>
  <div id="main"></div>
  <div id="destaques"></div>
  <footer>
    <div class="container">
      <img src="mirrorfashion/img/logo-rodape.png" alt="logorodape" />
      <ul class="social">
        <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
        <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
        <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
      </ul>
    </div>
  </footer>
  <script type="text/javascript" src="mirrorfashion/js/jquery.js"></script>
  <script type="text/javascript" src="mirrorfashion/js/home.js"></script>
  <script type="text/javascript" src="mirrorfashion/js/banner.js"></script>
</body>

</html>