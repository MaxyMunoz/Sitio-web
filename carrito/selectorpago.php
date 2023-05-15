<?php
    $total = $_GET['total'];
    echo $total;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <title>Selector de pago</title>
    <link rel="stylesheet" href="../css/pago.css">
    <!--script src = "../carrito/mp.js"></script-->
    <script src="https://www.paypal.com/sdk/js?client-id=AYU1VOZ4hQLVLde_24cXQ4q4ssKqIP49MIAb5lpJUS56RjKB1qAktvUK7Jf8uCJQYJ1MKLsTiKQz2QVd&currency=BRL"></script>
</head>
<body>
    <div id="steam-login" class="loginsteam">
        <h1>Inicie Sesion en steam</h1>
        <img src="../web3/loginsteam.png" alt="Iniciar sesión con Steam" id="steam-login-btn">
        <form action="https://steamcommunity.com/openid/login" method="post" id="steam-login-form">
            <input type="hidden" name="openid.mode" value="checkid_setup">
            <input type="hidden" name="openid.ns" value="http://specs.openid.net/auth/2.0">
            <input type="hidden" name="openid.return_to" value="http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=C7E1E53A35FB6F631476984F81CCAEEC&steamids=76561197960435530">
            <input type="hidden" name="openid.realm" value="http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=C7E1E53A35FB6F631476984F81CCAEEC&steamids=76561197960435530">
            <input type="hidden" name="openid.identity" value="http://specs.openid.net/auth/2.0/identifier_select">
            <input type="hidden" name="openid.claimed_id" value="http://specs.openid.net/auth/2.0/identifier_select">
        </form>
        
    </div>

    <div class="metodoPago">
        <ul>
            <li><img src="../web3/paypal-logo.png" alt="paypal"></li>
            <li><img src="../web3/mercadopago-logo.png" alt="MercadoPago"></li>
            <li> <img src="../web3/logo-mach.jpg" alt="Mach"></li>
        </ul>
        <form action="#" method="post">
            <h1>Selecione seu metodo de pagamento</h1>
            <label for="opciones-pago">Opciones de Pago:</label>
            <select name="opciones-pago" id="opciones-pago">
                <option value="">Loucos Br</option>
                <option value="paypal">Paypal</option>
                <option value="MercadoPago">MercadoPago</option>
                <option value="Mach">Mach</option>
            </select>
            <!--configuracion de botones de paypal-->
            <div id="paypal" style="display:none" class="pago">
                <div id="paypal-button-container"></div>
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
                                    value: <?php echo $total ?>,
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
                    </script> 
            </div>
            <div id="MercadoPago" style="display:none">
            </div>
            <div id="Mach" style="display:none">
                <!-- Código de integración de transferencia bancaria aquí -->
            </div>
            <!--input type="submit" value="Pagar"-->
        </form>
        <script>
            // Obtener el elemento select y los elementos div de pago
            const opcionesPago = document.getElementById('opciones-pago');
            const paypalDiv = document.getElementById('paypal');
            const MercadopagoDiv = document.getElementById('MercadoPago');
            const MachDiv = document.getElementById('Mach');
    
            // Función para mostrar el div correspondiente cuando se selecciona una opción de pago
            function mostrarDivPago() {
                // Obtener el valor seleccionado en el select
                const valor = opcionesPago.value;
                // Ocultar todos los div de pago
                paypalDiv.style.display = 'none';
                MercadopagoDiv.style.display = 'none';
                MachDiv.style.display = 'none';
                // Mostrar el div correspondiente al valor seleccionado en el select
                if (valor === 'paypal') {
                    paypalDiv.style.display = 'block';
                } else if (valor === 'MercadoPago') {
                    MercadoPagoDiv.style.display = 'block';
                } else if (valor === 'Mach') {
                    MachDiv.style.display = 'block';
                }
            }
    
            // Agregar un evento de cambio al select para mostrar el div correspondiente
            opcionesPago.addEventListener('change', mostrarDivPago);
        </script>
    </div>
    <br>

    <!--script>
        const steamLoginBtn = document.getElementById('steam-login-btn');
        const steamLoginForm = document.getElementById('steam-login-form');
        
        steamLoginBtn.addEventListener('click', function() {
            steamLoginForm.submit();
        });
    </script-->
</body>