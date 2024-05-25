<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo'
    <script>
    alert("Debes iniciar sesion");
    window.location = "Pagina.php"
    </script>
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KeysGaming</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./imagenes/Navegacion/logo_steam-limpio.png">
    <script src="carro.js"></script>
</head>

<header>
    <!-- logo -->
    <a href="/index.php">
        <img class="logo-nav" src="./imagenes/Navegacion/logo_steam-limpio.png" alt="">
    </a>
    <!-- Barra de navegacion -->
    <nav>
        <ul>
            <div class="elemtosI">
                <li><a href="htmls/perfil.html"><img src="./imagenes/Navegacion/perfil-unscreen.gif" alt="" width="35"
                            height="35">Perfil</a></li>
                <li class="carrito-wrapper">
                    <a href="htmls/Carro.html" id="carrito-link"><img
                            src="./imagenes/Navegacion/carro-de-la-compra-unscreen.gif" alt="" width="35" height="35">
                        <samp id="carrito-count">0</samp></a>
                </li>
                <!-- <li><a href="htmls/ayuda.html"> <img src="./imagenes/Navegacion/notificacion-unscreen.gif" alt=""
                            width="35" height="35">Ayuda</a></li> -->

                <li><a href="crud.php">Cuenta</a></li>
                <li><a href="php/cerrar_sesion.php"><img src="gif/icons8-bloquear-64.png" alt="" width="35" height="35">Cerrar sesion</a></li>
                <li>
    <a href="tus_compras.php">Compras
    </a>
</li>
            </div>
        </ul>
    </nav>
</header>

<body>
    <div class="tops">
        <h4></h4>
        <br>
        <div class="Juegos-G">

                <figure>
                    <img src="./imagenes/juegos/dark.jpg" alt="">
                    <div class="card">
                        <h3>Dark Souls</h3>
                        <p>$ 11 . 2</p>
                    </div>
                    <!-- Llama a la función addToCart() cuando se hace clic en el botón -->
                    <button onclick="addToCart(1)" data-id="1" data-nombre="Dark Souls" data-imagen="/imagenes/juegos/dark.jpg" data-precio="11.2">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/mortal.jpg" alt="">
                    <div class="card">
                        <h3>Mortal Kombat</h3>
                        <p>$ 7 . 65</p>
                    </div>
                    <button onclick="addToCart(2)" data-id="2" data-nombre="Mortal Kombat" data-imagen="/imagenes/juegos/mortal.jpg" data-precio="7.65"">Añadir al carrito 🛒</button>


                </figure>
                <figure>
                    <img src="./imagenes/juegos/payday.jpeg" alt="">
                    <div class="card">
                        <h3>PAY DAY</h3>
                        <p>$ 8 . 10</p>
                    </div>
                    <button onclick="addToCart(3)" data-id="3" data-nombre="PAY DAY" data-imagen="/imagenes/juegos/payday.jpeg" data-precio="8.10"">Añadir al carrito 🛒</button>



                </figure>
                <figure>
                    <img src="./imagenes/juegos/Battlefield-V-PC.jpg" alt="">
                    <div class="card">
                        <h3>Battlefield V</h3>
                        <p>$ 13 . 10</p>
                    </div>
                <button onclick="addToCart(4)" data-id="4"  data-nombre="Battlefield V" data-imagen="/imagenes/juegos/Battlefield-V-PC.jpg" data-precio="13 . 10"">Añadir al carrito 🛒</button>
                </figure>
        </div>
        <br>

        <br>
        <div class="Juegos-G">
            <div>
                <figure>
                    <img src="./imagenes/juegos/minecraft.jpg" alt="">
                    <div class="card">
                        <h3>Minecraft Java/Bedrock</h3>
                        <p>$ 5 . 33 </p>
                    </div>
                    <button onclick="addToCart(5)" data-id="5"  data-nombre="minecraft" data-imagen="/imagenes/juegos/minecraft.jpg" data-precio="5 . 33"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/most.jpg" alt="">
                    <div class="card">
                        <h3>Need For Speed </h3>
                        <p>$ 4 . 12</p>
                    </div>
                    <button onclick="addToCart(6)" data-id="6"  data-nombre="Need For Speed" data-imagen="/imagenes/juegos/most.jpg" data-precio="4 . 12"">Añadir al carrito 🛒</button>


                </figure>

                <figure>
                    <img src="./imagenes/juegos/gta.jpg" alt="">
                    <div class="card">
                        <h3>Grand theft auto</h3>
                        <p>$ 12 . 11</p>
                    </div>
                    <button onclick="addToCart(7)" data-id="7"  data-nombre="Grand theft auto" data-imagen="/imagenes/juegos/gta.jpg" data-precio="12 . 11"">Añadir al carrito 🛒</button>


                </figure>
                <figure>
                    <img src="./imagenes/juegos/uncharted_4.jpg" alt="">
                    <div class="card">
                        <h3>uncharted 4</h3>
                        <p>$ 20 . 11</p>
                    </div>
                    <button onclick="addToCart(8)" data-id="8"  data-nombre="uncharted 4" data-imagen="/imagenes/juegos/uncharted_4.jpg" data-precio="20 . 11"">Añadir al carrito 🛒</button>

        <br>

        <br>
        <div class="Juegos-G">
                </figure>
                <figure>
                    <img src="./imagenes/juegos/Lego.jpeg" alt="">
                    <div class="card">
                        <h3>Lego</h3>
                        <p>$ 10 . 24</p>
                    </div>
                <button onclick="addToCart(9)" data-id="9"  data-nombre="Lego" data-imagen="/imagenes/juegos/Lego.jpeg" data-precio="10 . 24"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/Resident Evil 4.jpeg" alt="">
                    <div class="card">
                        <h3>Resident Evil 4</h3>
                        <p>$ 21 . 66</p>
                    </div>
                <button onclick="addToCart(10)" data-id="10"  data-nombre="Resident Evil 4" data-imagen="/imagenes/juegos/Resident Evil 4.jpeg" data-precio="21 . 66"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/Assassin's Creed IV.jpg" alt="">
                    <div class="card">
                        <h3>Assassin's Creed IV</h3>
                        <p>$ 29 . 1</p>
                    </div>
                <button onclick="addToCart(11)" data-id="11"  data-nombre="Assassin's Creed IV" data-imagen="/imagenes/juegos/Assassin's Creed IV.jpg" data-precio="29 . 1"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/The Sims 3.jpg" alt="">
                    <div class="card">
                        <h3>The Sims 3</h3>
                        <p>$ 22 . 12 </p>
                    </div>
                <button onclick="addToCart(12)" data-id="12"  data-nombre="The Sims 3" data-imagen="/imagenes/juegos/The Sims 3.jpg" data-precio="22 . 13"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/Destiny 2.jpg" alt="">
                    <div class="card">
                        <h3>Destiny 2</h3>
                        <p>$ 30 . 00  </p>
                    </div>
                <button onclick="addToCart(13)" data-id="13"  data-nombre="Destiny 2" data-imagen="/imagenes/juegos/Destiny 2.jpg" data-precio="30 . 00"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/Fallout.jpg" alt="">
                    <div class="card">
                        <h3>Fallout</h3>
                        <p>$ 32 . 20  </p>
                    </div>
                <button onclick="addToCart(14)" data-id="14"  data-nombre="Fallout" data-imagen="/imagenes/juegos/Fallout.jpg" data-precio="32 . 20"">Añadir al carrito 🛒</button>
                </figure>
                    <figure>
                    <img src="./imagenes/juegos/Far Cry 4.jpg" alt="">
                    <div class="card">
                        <h3>Far Cry 4</h3>
                        <p>$ 12 . 44  </p>
                    </div>
                <button onclick="addToCart(15)" data-id="15"  data-nombre="Far Cry 4" data-imagen="/imagenes/juegos/Far Cry 4.jpg" data-precio="12 . 44"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/juegos/FIFA 20.jpeg" alt="">
                    <div class="card">
                        <h3>FIFA 20</h3>
                        <p>$ 28 . 99  </p>
                    </div>
                <button onclick="addToCart(16)" data-id="16"  data-nombre="FIFA 20" data-imagen="/imagenes/juegos/FIFA 20.jpeg" data-precio="28 . 99"">Añadir al carrito 🛒</button>
                </figure>
            </div>
        </div>
        <br>
        <h4> Tarjetas de regalo</h4>
        <br>
        <div class="Juegos-G">
            <div>
                <figure>
                    <img src="./imagenes/tarjetasRegalo/Gamepas.jpg" alt="">
                    <div class="card">
                        <p>$ 5 . 00</p>
                    </div>
                <button onclick="addToCart(17)" data-id="17"  data-nombre="Gamepass" data-imagen="/imagenes/tarjetasRegalo/Gamepas.jpg" data-precio="5 . 00"">Añadir al carrito 🛒</button>


                </figure>
                <figure>
                    <img src="./imagenes/tarjetasRegalo/play.jpg" alt="">
                    <div class="card">
                        <h3>PlayStore</h3>
                        <p>$ 9 . 99</p>
                    </div>
                <button onclick="addToCart(18)" data-id="18"  data-nombre="PlayStore" data-imagen="/imagenes/tarjetasRegalo/play.jpg" data-precio="9 . 99"">Añadir al carrito 🛒</button>


                </figure>

                <figure>
                    <img src="./imagenes/tarjetasRegalo/steam.jpeg" alt="">
                    <div class="card">
                        <h3>Key Steam</h3>
                        <p>$ 6 . 55</p>
                    </div>
                <button onclick="addToCart(19)" data-id="19"  data-nombre="Key Steam" data-imagen="/imagenes/tarjetasRegalo/steam.jpeg" data-precio="6 . 55"">Añadir al carrito 🛒</button>


                </figure>
                <figure>
                    <img src="./imagenes/tarjetasRegalo/Amazon" alt="">
                    <div class="card">
                        <h3>Amazon</h3>
                        <p>$ 13 . 10</p>
                    </div>
                <button onclick="addToCart(20)" data-id="20"  data-nombre="Amazon" data-imagen="/imagenes/tarjetasRegalo/Amazon" data-precio="13 . 10"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/tarjetasRegalo/Uber.jpg" alt="">
                    <div class="card">
                        <h3>Uber</h3>
                        <p>$ 4 . 32</p>
                    </div>
                <button onclick="addToCart(21)" data-id="21"  data-nombre="Uber" data-imagen="/imagenes/tarjetasRegalo/Uber.jpg" data-precio="4 . 32"">Añadir al carrito 🛒</button>
                </figure>
                <figure>
                    <img src="./imagenes/tarjetasRegalo/Uber Rides.jpg" alt="">
                    <div class="card">
                        <h3>Uber Rides</h3>
                        <p>$ 7 . 00</p>
                    </div>
                <button onclick="addToCart(22)" data-id="22"  data-nombre="Uber Rides" data-imagen="/imagenes/tarjetasRegalo/Uber Rides.jpg" data-precio="7 . 00"">Añadir al carrito 🛒</button>
                </figure>
            </div>
        </div>



    <div>
            <footer>
                <p>©Alan Gabriel Sastre Briceño & Brayan Steven Garzon Montenegro</p>

            </footer>
        </div>
<div id="particles-js"></div>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
        <script src="scritps.js"></script>
</body>

</html>