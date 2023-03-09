<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CUNMERX</title>

    <!-- FUENTE GOOGLE FONTS : Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ICONS: Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- ICONS: Line Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Animaciones AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    <!-- Mis Estilos -->
    <!-- <link rel="stylesheet" href="/css/estilopantallapri.css"> -->
    <link rel="stylesheet" href="css/estilosubir.css">
    
</head>
<script type="text/jacasript">
    function Mostrar(){
        document.getElementById("caja").style.display="block";
    }
    function ocultar(){
        document.getElementById("caja").style.display="none";
    }
    </script>
<body>

    <div class="hm-wrapper">

<!--imagen Panel menu-->
        <div class="hm-header">

            <div class="container">
                <div class="header-menu">

                    <div class="hm-logo">
                        <a href="index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
<!--Menu navegacion-->
                    <nav class="hm-menu">
                        <ul>
                            <li><a href="">MI CUENTA</a></li>
                            <li><a href="http://">PRODUCTOS</a></li>
                            <li><a href="http://">PUBLICAR</a></li>
                            <li><a href="./index.php">INGRESAR</a></li>
                        </ul>

<!--Carrito de compras-->
                        <div class="hm-icon-cart">
                            <a href="#">
                                <i class="las la-shopping-cart"></i>
                                <span>0</span>
                            </a>
                        </div>
<!--Icono menu-->
                        <div class="icon-menu">
                            <button type="button"><i class="fas fa-bars"></i></button>
                        </div>

                    </nav>

                </div>
            </div>

        </div>

        <!-- =================================
           HEADER MENU Movil-->
           <div class="header-menu-movil">
            <button class="cerrar-menu"><i class="fas fa-times"></i></button>
            <ul>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Campañas</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
       
         <!--seccion productos destacados -->
        <div class="hm-page-block bg-fondo">

            <div class="container">

                <div class="header-title" data-aos="fade-up">
                    <h1>NUEVO PRODUCTO!!!! </h1>
                </div>

                <!-- menu de la seccion de productos populares -->
                <ul class="hm-tabs" data-aos="fade-up">
                    <li class="hm-tab-link">
                        Venta
                    </li>

                    <li class="hm-tab-link ">
                        Alquilar
                    </li>

                    <!-- <li class="hm-tab-link ative">
                        En oferta
                    </li> -->

                </ul>

                <!-- contenido de la seccion de productos populares -->
                <!-- vendta -->
                
               <div class="tabs-content" data-aos="fade-up">

<div class="grid-product">
<div class="p-portada">
            <a href="">
                <img src="img/phimetro.jpg" alt="">
            </a>           
        </div>
        <div class= "botonsubirf">
        <button> Subir imagen2 </button>
</div>
    <div class="product-item">
        

                            <div class="p-info">
                            <input type="text" placeholder="Nombre del producto" name="nombrepro" required="required">
                        <input type="number" placeholder="Cantidad del producto(unidades)" name="cantidadu" required="required">
                        <input type="number"placeholder="precio del producto" min="50" step="50"name="precio" required="required" />
                        <div className="App">
                        <input type="text" placeholder="decripcion del objeto" name="descrip" required="required">
                        <h2>cuadro de Filtros<h2>
                                 <p>acontinuacion elije las etiquetas que llevara tu producto</p>       
                    </div>
                     <input type ="submit" value="casilla de filtros" onclick="mostrar()"/> 
                     
                         <div className = "cajafiltro" id="caja">         
                        <label>ingenieria sistemas</label><br>
                         <label>computacion<input type="checkbox" id="cbox25" value="first_checkbox"> </label><br>
                         <label>circuitos<input type="checkbox" id="cbox25" value="first_checkbox"> </label><br>
                         <label>sensores<input type="checkbox" id="cbox25" value="first_checkbox"> </label><br>
                         <label>actuadores<input type="checkbox" id="cbox25" value="first_checkbox"> </label><br>
                        </div>
                        
                            <div class="p-info2">
                            <a href="#" class="hm-btn btn-primary uppercase">Subir</a>
                            </div>
                        </div>
                    </div>
               </div>          
</div>
                <!-- Alquilar -->
                <div class="tabs-content" data-aos="fade-up">

                    <div class="grid-product">

                        <div class="product-item">
                            <div class="p-portada">
                                <a href="">
                                    <img src="img/humedad.jpg" alt="">
                                </a>
                                <span class="stin stin-new">Nuevo</span>
                            </div>

                            <div class="p-info">
                               <a href=""> <h3>SEnsor Humedad</h3></a>
                                <div class="precio">
                                    <span>$ 25.000</span>
                                </div>
                                <a href="#" class="hm-btn btn-primary uppercase">ALQUILAR</a>
                            </div>

                        </div>

                    </div>

                </div>

            
                

<!--pie de pagina-->
        <div class="foo-copy">
            <div class="container">
                <p>CUNMERX © 2022 Todos los derechos reservados.| Codificado por ...</p>
                
            </div>
        </div>

    </div>
    
    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="./js/scriptpantallapri.js"></script>
    <script src="./js/scriptagrego.js"></script>

    <script>
    
        AOS.init({
            duration: 1200,
        })


    </script>

</body>
</html>