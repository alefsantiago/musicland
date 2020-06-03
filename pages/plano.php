<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
  <title>Music Land - Planos</title>
  <link rel="stylesheet" href="../css/plano.css">
    <link rel="stylesheet" href="../node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="../node_modules/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-color: #8b92a3">
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#">Music Land</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" href="index.html">Início <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/quemsomos.html">Quem Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/plano.html">Planos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/contato.html">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Divulgue</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Navegar
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Gêneros do momentos</a>
            <a class="dropdown-item" href="#">Lançamentos</a>
            <a class="dropdown-item" href="#">Descobrir</a>
            <a class="dropdown-item" href="#">Show</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Gênero
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Rock</a>
            <a class="dropdown-item" href="#">Funk</a>
            <a class="dropdown-item" href="#">Pop</a>
            <a class="dropdown-item" href="#">Hip-hop/Rap</a>
            <a class="dropdown-item" href="#">Sertanejo</a>
            <a class="dropdown-item" href="#">Pagode</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Escolhe todos</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Pesquise" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquise</button>
      </form>
    </div>
  </nav>

<h1 class="titu"> Conheça nossos Planos </h1>
<div class="cards-list">
  
<div class="card 1" data-toggle="modal" data-target="#plano1">
  <div class="card_image"> <img src="../img/back.jpg" /> </div>
  <div class="card_title title-black">
    <p>Indie Rockers</p>
  </div>
</div>

  <div class="card 2" data-toggle="modal" data-target="#plano2">
  <div class="card_image">
    <img src="../img/back.jpg" />
    </div>
  <div class="card_title title-black">
    <p>Indie Stage</p>
  </div>
</div>

  <div class="card 3" data-toggle="modal" data-target="#plano3">
  <div class="card_image">
    <img src="../img/back.jpg"/>
  </div>
  <div class="card_title title-black">
    <p>Free</p>
  </div>
</div>

</div>

<div class="modal fade" id="plano1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Indie Rockers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
       <div class="modal-footer">
        <div name="paypal" id="paypal-button-container"></div>

				<!-- Include the PayPal JavaScript SDK -->
				<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=BRL"></script>

				<script>
						// Render the PayPal button into #paypal-button-container
						paypal.Buttons({

								// Set up the transaction
								createOrder: function(data, actions) {
										return actions.order.create({
												purchase_units: [{
														amount: {
																value: '24.99'
														}
												}]
										});
								},

								// Finalize the transaction
								onApprove: function(data, actions) {
										return actions.order.capture().then(function(details) {
												// Show a success message to the buyer
												alert('Compra Concluida ' + details.payer.name.given_name + '!');
										});
								}


						}).render('#paypal-button-container');
				</script>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="plano2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Indie Stage</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
      <div class="modal-footer">
        <div name="paypal" id="paypal-button-container"></div>

				<!-- Include the PayPal JavaScript SDK -->
				<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=BRL"></script>

				<script>
						// Render the PayPal button into #paypal-button-container
						paypal.Buttons({

								// Set up the transaction
								createOrder: function(data, actions) {
										return actions.order.create({
												purchase_units: [{
														amount: {
																value: '24.99'
														}
												}]
										});
								},

								// Finalize the transaction
								onApprove: function(data, actions) {
										return actions.order.capture().then(function(details) {
												// Show a success message to the buyer
												alert('Compra Concluida ' + details.payer.name.given_name + '!');
										});
								}


						}).render('#paypal-button-container');
				</script>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="plano3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Indie Free</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
 <footer class="footer-distributed">

        <div class="footer-left">
            <img src="../img/Logotipo Oficial.png">
            <h3>Music<span>Land</span></h3>

            <p class="footer-links">
                <a href="../index.html">Início</a>
                |
                <a href="../pages/quemsomos.html">Quem Somos</a>
                |
                <a href="#">Planos</a>
                |
                <a href="../pages/contato.html">Contato</a>
            </p>

            <p class="footer-company-name">© Musicland.com | Designed by Alef Santiago</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>866 - R. Cámbara Orli,
                        Jardim Miray, Itaquaquecetuba-sp</span>
                    08574-150</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+55 11-947889435</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="projetoindie2019@gmail.com">projetoindie2019@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Sobre a empresa</span>
                O Music Land é uma plataforma web de divulgação de artistas independente.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </footer>

<script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/ladda.min.js"></script>
<script type="text/javascript" src="../node_modules/ladda/dist/spin.min.js"></script>
<script type="text/javascript" src="../js/contato.js"></script>

</body>
</html>
