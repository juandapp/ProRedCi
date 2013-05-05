<html>
    <head>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/createPost.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="public/javascripts/proceso.js"></script>
        <script type="text/javascript" src="public/javascripts/jquery.sheepItPlugin-1.1.1.js"></script>


    </head>
    <body>

        <nav id="mainMenu">
            <div class="menu">
                <a class="navIcon" href="index.php"><img title="Index" alt="Index" src="public/images/home.png" width="22" height="22"/></a>
                <!-- div class="navVerticalDivision"></div>
                <div class="navLeftItem">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </div -->

                <div class="navRightItem">
                    <a class="navIcon" href="index.php?profile">Perfil</a>

                    <div class="navVerticalDivision"></div>

                    <a class="navIcon" href="#">
                        <img title="Configuracion" alt="Configuracion" src="public/images/settings.png" width="22" height="22" /></a>

                    <div class="navVerticalDivision"></div>

                    <a class="navIcon" href="index.php?profile&logout"><img title="Salir" alt="Salir" src="public/images/logout.png" width="22" height="22" /></a>

                </div>

            </div>
        </nav>

        <div id="wrapper">
            <section id="main">

                <aside id="userInfo">

                    <div id="avatar">

                        <h2><?php echo $data['nombre']; ?>  </h2>
                        <br/>
                        <span class="avatarImage" >
                            <img src="public/images/user.png">
                        </span>
                        <br/><br/>
                    </div>
                </aside><!-- user info -->


                <article id="crearPost">

                    <div class="separator">
                        <h4 id="h4Titulo">C&oacute;mo</h4>
                        <input id="tituloproceso" placeholder="verbo + predicado" type="text" class="input" size="60" title="Título" dir="ltr"/>
                    </div>

                    <div class="separator">
                        <textarea class="textArea" id="descripcion" placeholder="Descripcion..."></textarea>
                    </div>

                    <div id="actividades" class="separator">
                        <div class="separatorIn">
                            <h3>1 -</h3> 
                            <input class="input" id="actividad1" placeholder="Paso 1"/>
                        </div>
                    </div>

                    <div class="separator">
                        <button id="btAgregar" >+</button>
                        <button id="btEliminar" >-</button>
                    </div>

                    <div class="separator">
                        <h4>Etiquetas</h4>
                        <input type="text" class="test" id="etiqueta" placeholder=""/>
                        <p>separe las etiquetas con comas</p>
                    </div>

                    <button id="hecho">Hecho</button>
                </article><!-- close Crear Post -->

            </section><!-- end of main -->
        </div><!-- end of wrapper -->

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>
