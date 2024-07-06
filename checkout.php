<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="mirrorfashion/css/checkout.css">
    <link rel="stylesheet" href="mirrorfashion/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Checkout Mirror Fashion</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" fixed-top>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html">Mirror Fashion</a>

        <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="sobre.html"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ajuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perguntas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Entre em contato</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Otima Escolha</h1>
            <p class="lead">Obrigado por comprar na Mirror Fashion
                Preencha seus dados para efetivar a compra.
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">
                        <h2>Sua compra</h2>
                    </div>

                    <div class="card-body">
                        <img src="mirrorfashion/img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
                            class="img-thumbnail mb-3">
                        <dl>
                            <dt>Produto</dt>
                            <dd>Fuzzy Cardigã</dd>
                            <dt>Cor</dt>
                            <dd>Verde</dd>
                            <dt>Tamanho</dt>
                            <dd>40</dd>
                            <dt>Preco</dt>
                            <dd>RS 129,99</dd>
                        </dl>
                    </div>
                </div>
                <form class="col-md-8">
                    <fieldset class="col-lg-6">
                        <legend>Dados Pessoais</legend>
                        <div class="form group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="email@exemplo.com" required>
                        </div>

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00"
                                required data-mask="999.999.999-99">
                        </div>

                        <div class="form-group custom-control custom checkbox">
                            <input type="checkbox" class="custom-control-input" id="newsletter" value="sim" checked>
                            <label class="custom-control-label" for="newsletter">
                                Quero receber Newsletter da Mirror Fashion
                            </label>
                        </div>
                    </fieldset>
                    <fieldset class="col-lg-6">
                        <legend>Cartao de Credito</legend>
                        <div class="form-group">
                            <label for="numero-cartao">Numero - CVV</label>
                            <input type="text" class="form-control" name="numero-cartao" id="numero-cartao">
                        </div>

                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select class="custom-select" id="bandeira-cartao">
                                <option disabled selected>Selecione uma opcao</option>
                                <option value="master">MasterCard</option>
                                <option value="visa">VISA</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">
                        <span class="oi oi-thumb-up"></span>
                        Confirmar Pedido
                    </button>
                </form>
                <div class="card mb-3">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="qtd">Quantidade:</label>
                            <input type="number" id="qtd" min="1" max="99" value="1" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="total">Total:</label>
                            <output id="total" class="form-control">RS 129,90</output>
                        </div>
                    </div>
                    <dd id="preco">RS 129,90</dd>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="inputmask-plugin.js"></script>
    <script type="text/javascript" src="jquerry.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
    <script type="text/javascript" src="total.js"></script>
</body>

</html>