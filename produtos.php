<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="mirrorfashion/css/reset.css" />
  <link rel="stylesheet" href="mirrorfashion/css/style2.css" />
  <link rel="stylesheet" href="mirrorfashion/css/produto.css">
  <link rel="stylesheet" href="mirrorfashion/css/bootstrap.css">
  <meta name="viewport" content="width=device-width">
  <title>Document</title>
</head>

<body>
 <?php
 $conexao = mysqli_connect("127.0.0.1", "root", "", "wd43");
 $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
 $produto = mysqli_fetch_array($dados);
 ?>
 <img src="img/produtos/foto<?= $produto['id'] ?>-verde.png">
  <?php include("cabecalho.php"); ?>
  <div class="produto-back">
    <div class="container">
      <div class="produto">
        <h1><?= $produto['nome'] ?></h1>
        <p>por apenas <?= $produto['preco'] ?></p>
        <p><?= $produto['descricao'] ?></p>
        <form action="checkout.php" method="POST">
          <input type="hidden" name="nome" value="Fuzzy Cardigan">
          <input type="hidden" name="preco" value="129,00">
          <fieldset class="cores">
            <legend>Escolha a cor</legend>
            <input type="radio" name="cor" id="verde" checked>
            <label for="verde">
              <img src="mirrorfashion/img/produtos/foto1-verde.png" alt="Produto na cor verde">
            </label>
            <input type="radio" name="cor" id="vermelho">
            <label for="vermelho">
              <img src="mirrorfashion/img/produtos/foto1-rosa.png" alt="Produto na cor vermelho">
            </label>
            <input type="radio" name="cor" id="roxo">
            <label for="roxo">
              <img src="mirrorfashion/img/produtos/foto1-azul.png" alt="Produto na cor roxo">
            </label>
          </fieldset>
          <button class="comprar">Comprar</button>
        </form>
        <fieldset class="tamanhos">
          <legend>Escolha um tamanho: </legend>
          <input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
          <output for="tamanho" name="valortamanho">42</output>
        </fieldset>
        <div class="detalhes">
          <h2>Detalhes do produto</h2>
          <p>Esse é o melhor casaco Cardigã que voce ja viu.
            Excelente material italiano com estampa desenhada pelos artesoes da comunidade de Krotor nas ilhas gregas.
            Compre ja e receba hoje mesmo pela nossa entrega a jato.</p>
          <table>
            <thead>
              <tr>
                <th>Caracteristica</th>
                <th>Detalhe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Modelo</td>
                <td>Cardigã 7845</td>
              </tr>
              <tr>
                <td>Material</td>
                <td>Algodao</td>
              </tr>
              <tr>
                <td>Cores</td>
                <td>Verde, Vermelho e Roxo</td>
              </tr>
              <tr>
                <td>Lavagem</td>
                <td>Lavar a mao</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="fb-like" data-href="http://www.mirrorfashion.net" 
  data-send="false" data-layout="box_count" data-width="58" data-show-faces="false"></div>
  <div id="fb-root"></div>
  <script>(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if(d.getElementsById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "http://connect.facebook.net/pt_BR/all.js#xfbm=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
 <?php include("rodape.php"); ?>
  <script type="text/javascript" src="produto.js"></script>
</body>

</html>
      