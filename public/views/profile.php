<html>
    <head>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/profile.css">
        <script type="text/javascript" src="/javascripts/user.js"></script>
    </head>
    <body>

        <nav id="mainMenu">
            <div class="menu">
                <a class="navIcon" href="../index.php"><img title="Index" alt="Index" src="public/images/home.png" width="22" height="22"/></a>
                <div class="navVerticalDivision"></div>
                <div class="navLeftItem">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </div>

                <div class="navRightItem">
                    <a class="navIcon" href="#">Perfil</a>

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

                        <h2><?php echo $data['nombre']; ?>  </h2>				<!-- seek with php-->
                        <br/>
                        <span class="avatarImage" >
                            <img src="public/images/user.png">
                        </span>
                        <br/><br/>
                    </div>


                    <div id="userOptions">

                        <h3>Num. Posts</h3>
                        <p><?php echo $data['numPost']; ?></p>					<!-- seek with php-->
                        <h3>Fecha de Creaci&oacute;n</h3>
                        <p><?php echo $data['fechaCreacion']; ?></p>				<!-- seek with php-->
                        <br/>
                        <div>
                            <input type="submit" value="Editar Perfil" />
                        </div>

                    </div>

                </aside><!-- user info -->



                <article class="posts">

                    <h2>Posts</h2>

                    <nav>
                        <div class="menu">

                            <ul>

                                <li><a href="#">Fecha</a>

                                    <ul>
                                        <li><a href="#">Up-Down</a></li>
                                        <li><a href="#">Down-Up</a></li>
                                    </ul>

                                </li>

                                <li><a href="#">Rating</a></li>

                                <li><a href="#">Visitas</a></li>

                            </ul>

                        </div>
                    </nav>


                    <div id="postList">



                    </div><!-- post list -->


                </article><!-- posts -->



                <aside id="createPost">
                    <div>
                        <form action="index.php?proceso" method="post">
                        <input type="submit" value="Crear Post" />
                        </form>
                    </div>
                </aside><!-- Crear Post -->



                <section><!-- end of main -->
                    </div><!-- end of wrapper -->

                    <footer>
                        <div id="footerContent">
                            <p>Creative Commons 2013, CPQR Univalle</p>
                        </div>
                    </footer>
                    </body>
                    </html>
