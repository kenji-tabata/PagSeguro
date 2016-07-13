<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>DOM - Veja o seu perfil completo</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link type="text/css" rel="stylesheet" href="css/ie10-viewport-bug-workaround.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link type="text/css" rel="stylesheet" href="views/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#" title="Dom Brasil">
                    <img alt="Brand" src="views/imagens/logo.png">
                </a>
                <p class="navbar-text navbar-right">
                    <a href="#" title="Voltar">
                        <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar
                    </a>
                </p>
            </div>
        </nav>
                    
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header"><h3>Veja o seu perfil completo!</h3></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="views/imagens/landing.jpg" class="img-responsive" alt="perfil completo"/>
                </div>
                <div class="col-md-7">
                    <p class="text-justify">
                        Diferentemente do perfil comportamental on-line que contém apenas 4 características do seu perfil, 
                        o <strong>Perfil completo</strong> contém texto mais abrangente e mais explicativo que é comumente 
                        utilizado como documentação de processos. 
                    </p>
                    <p class="text-justify">
                        O <strong>Perfil completo</strong>, também denominado como laudo Plus, oferecem 15 características comportamentais, um 
                        dicionário especificando cada uma dessas características e estilo dos profissionais e ainda, 
                        informa o grau de cada nível.
                    </p>
                    <p class="text-justify">
                        Aproveite essa chance única de obter uma análise do seu perfil completo pelo valor fixo de R$ 43,00.
                    </p>
                    <p class="text-justify">
                        Veja o que está incluso no perfil completo:
                    </p>
                    <ul>
                        <li>15 caracteríscas (tendências) comportamentais;</li>
                        <li>Gráfico linear;</li>
                        <li>Nível de grau de cada característica;</li>
                        <li>Arquivo em formato PDF e pronto para imprimir;</li>
                    </ul>
                    <p>Todo o conteúdo por apenas: R$ 43,00</p><br/>
                </div>
                <div class="col-md-12">
                    <div class="page-header">
                        <h3>Resumo do pedido!</h3>
                    </div>
                    <div class="col-md-offset-2 col-md-8">
                        <div class="table-responsive">
                            <table class="table table-striped table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th></th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Laudo Plus - Georgi Facello</td>
                                        <td></td>
                                        <td>R$ 43,00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Laudo Plus - Marcel Facello</td>
                                        <td></td>
                                        <td>R$ 43,00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Laudo Plus - Mara Facello</td>
                                        <td></td>
                                        <td>R$ 43,00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2"></td>
                                        <td><strong>Total:</strong></td>
                                        <td>R$ 129,00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-offset-4 col-md-4 text-center">
                        <form id="form-comprar-laudo" method="POST" action="action.php">
                            <input type="hidden" id="hidden-nome" value="Georgi Facello" name="hidden-nome">
                            <input type="hidden" id="hidden-codigo-produto" value="laudo-plus" name="hidden-codigo-produto">
                            <!--<input type="hidden" id="hidden-email" value="c06458599158349541735@sandbox.pagseguro.com.br" name="txt-email">-->
                            <input type="hidden" id="hidden-email" value="leandro@sandbox.pagseguro.com.br" name="txt-email">
                            <button id="comprar-plus" class="btn btn-primary btn-lg">Comprar com PagSeguro</button>
                            <div class="mensagem hidden col-md-12" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
            <footer>
                <p>&copy; 2016 Dom Brasil.</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>