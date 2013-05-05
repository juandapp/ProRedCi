<html>
    <head>
        <title>Tramitalo - Post</title>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/verPost.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="public/javascripts/proceso.js"></script>
        <script type="text/javascript" src="public/javascripts/jquery.sheepItPlugin-1.1.1.js"></script>


    </head>

    <body>

        <nav id="mainMenu">
            <div class="menu">
                <a class="navIcon" href="index.php"><img title="Index" alt="Index" src="public/images/home.png" width="22" height="22"/></a>
                <div class="navVerticalDivision"></div>
                < div class="navLeftItem">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </div>

                <div class="navRightItem">
                    <a class="navIcon" href="index.php?profile">Perfil</a>

                    <div class="navVerticalDivision"></div>

                    <a class="navIcon" href="#">
                        <img title="Configuracion" alt="Configuracion" src="public/images/settings.png" width="22" height="22" /></a>

                    <div class="navVerticalDivision"></div>

                    <a class="navIcon" href="logout.php"><img title="Salir" alt="Salir" src="public/images/logout.png" width="22" height="22" /></a>

                </div>

            </div>
        </nav>

        <div id="wrapper">
            <section id="main">

                <aside id="mostrarComentarios">

                    <div class="comentario">
                        <div class="avatarComentario">
                            <img src="public/images/user.png" width="48" height="48">
                        </div>

                        <div class="contComentario">
                            <div class="nickNameComentario">
                                <h5>Nick Name</h5> <!-- <?php ?> -->
                            </div>
                            <div class="centerComentario">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Maecenas venenatis dignissim lacus, et vehicula mauris sodales at. </p>
                            </div>
                            <div class="footerComentario">
                                <button id="like">Y</button>
                                <button id="dislike">N</button>
                                <p><strong>fecha</strong></p>
                            </div>
                        </div>

                    </div><!-- cierre comentario -->

                    <div class="divDivision"></div>

                    <div id="comentar">
                        <div class="avatarComentario">
                            <img src="public/images/user.png" width="48" height="48">
                        </div>

                        <div class="escribirComentario">
                            <div class="nickNameComentario">
                                <h5>Nick Name</h5> <!-- <?php ?> -->
                            </div>
                            <div class="centerComentario">
                                <textarea class="txaComment" id="comment"></textarea>
                            </div>
                        </div>

                    </div><!-- cierre comentar -->

                </aside><!-- user info -->


                <article id="mostrarPost">
                    <div id="headTitulo">
                        <h2>C&oacute;mo ganar WWW</h2>
                        <p><strong>Etiquetas: </strong> <a href="#">www</a>, <a href="#">estudio</a>, <a href="#">cali</a> </p>
                    </div>

                    <div id="contenidoPost" align="center">
                        <div id="descripcion">
                            <h4>Descripci&oacute;n</h4>
                            <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis dignissim lacus, et vehicula mauris sodales at. 
                                Nam sed nibh eu nulla dignissim auctor vitae eu massa. Aenean in rutrum ante. 
                                Mauris porttitor nibh id elit commodo et scelerisque eros convallis. 
                                Aliquam id magna sed urna scelerisque fringilla id non nibh.</p>
                        </div>
                    </div>


                </article><!-- close mostrar Post -->


            </section><!-- end of main -->
        </div><!-- end of wrapper -->

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>
