<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../css/carrito.css" />
    <script src="../carrito/app.js" async></script>
    <title>Tienda de kit Locus Br |</title>
    <!--<script src="https://www.paypal.com/sdk/js?client-id=AYU1VOZ4hQLVLde_24cXQ4q4ssKqIP49MIAb5lpJUS56RjKB1qAktvUK7Jf8uCJQYJ1MKLsTiKQz2QVd&currency=BRL"></script>-->
  </head>
  <body>
    <header>
      <a href="https://store.steampowered.com/app/251570/7_Days_to_Die/"
        ><img
          src="https://cdn.discordapp.com/attachments/976592330872193035/1091422905713315962/dion.jpg"
          alt="loco 7 days"
          width="100%"
          height="200"
          object-fit:
          cover;
      /></a>
      <h1 style="color: red; font-size: italica">VENDA KIT LOUCOS BR</h1>
    </header>
    <hr />
    <section class="contenedor">
      <!-- Contenedor de elementos -->
      <div class="contenedor-items">
        <div class="item">
          <span class="titulo-item">Kit bronze</span>
          <img src="../web3/bronce.png" alt="" class="img-item" />
          <span class="precio-item">BRL$20,00</span>
          <button class="boton-item">Adicionar ao carrinho</button>
        </div>
        <div class="item">
          <span class="titulo-item">Kit Prata</span>
          <img src="../web3/PLATA.png" alt="" class="img-item" />
          <span class="precio-item">BRL$30,00</span>
          <button class="boton-item">Adicionar ao carrinho</button>
        </div>
        <div class="item">
          <span class="titulo-item">kit ouro</span>
          <img src="../web3/ORO.png" alt="" class="img-item" />
          <span class="precio-item">BRL$50,00</span>
          <button class="boton-item">Adicionar ao Carrinho</button>
        </div>
        <div class="item">
          <span class="titulo-item">KIT DIAMANTE</span>
          <img src="../web3/diamante.png" alt="" class="img-item" />
          <span class="precio-item">BRL$70,00</span>
          <button class="boton-item">Adicionar ao Carrinho</button>
        </div>
      </div>
      <!-- Carrito de Compras -->
      <div class="carrito" id="carrito">
        <div class="header-carrito">
          <h2>Tu Carrito</h2>
        </div>

        <div class="carrito-items"></div>
        <div class="carrito-total">
          <div class="fila">
            <strong>Tu Total</strong>
            <span class="carrito-precio-total"> $120.000,00 </span>
          </div>
          <button id="btnpagar"  class="btn-pagar" >Pagar <i class="fa-solid fa-bag-shopping"></i></a>
          <!--button class="btn-pagar">
            Pagar</a> <i class="fa-solid fa-bag-shopping"></i>
          </button-->
          <!--configuracion de botones de paypal-->
          <!--div id="paypal-button-container"></div>
          <script>
            paypal
              .Buttons({
                style: {
                  color: "blue",
                  shape: "pill",
                  label: "pay",
                },
                createOrder: function (data, actions) {
                  return actions.order.create({
                    purchase_units: [
                      {
                        amount: {
                          value: actualizarTotalCarrito() ,
                        },
                      },
                    ],
                  });
                },
                onApprove: function (data, actions) {
                  actions.order.capture().then(function (detalles) {
                    window.location.href = "completado.html";
                  });
                },
                onCancel: function (data) {
                  alert("Pago cancelado");
                  console.log(data);
                },
              })
              .render("#paypal-button-container");
          </script-->
        </div>
      </div>
    </section>
    <hr />
    <h2>
      <a class="button" href="../index.php"><b>Inicio</b></a>
    </h2>
  </body>
</html>
