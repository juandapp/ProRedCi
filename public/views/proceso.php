<html>
    <head>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/createPost.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="public/javascripts/proceso.js"></script>


    </head>
    <body>

        <nav id="mainMenu">
            <div class="menu">
                <a class="navIcon" href="index.php"><img title="Index" alt="Index" src="../images/home.png" width="22" height="22"/></a>
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
                        <img title="Configuracion" alt="Configuracion" src="../images/settings.png" width="22" height="22" /></a>

                    <div class="navVerticalDivision"></div>

                    <a class="navIcon" href="logout.php"><img title="Salir" alt="Salir" src="../images/logout.png" width="22" height="22" /></a>

                </div>

            </div>
        </nav>

        <div id="wrapper">
            <section id="main">

                <aside id="userInfo">

                    <div id="avatar">

                        <h2><?php echo $data['nombre']; ?> </h2>				<!-- seek with php-->
                        <br/>
                        <span class="avatarImage" >
                            <img src="../images/user.png">
                        </span>
                        <br/><br/>
                    </div>


                    <div id="userOptions">

                        <h3>Num. Posts</h3>
                        <p>xxxxxxx</p>					<!-- seek with php-->
                        <h3>Fecha de Creaci&oacute;n</h3>
                        <p>xx-xx-xxxx</p>				<!-- seek with php-->
                        <br/>
                        <div>
                            <input type="submit" value="Editar Perfil" />
                        </div>

                    </div>

                </aside><!-- user info -->



                <div class="postTitle">
                    <div id = "titleSection">

                        <h4>Etiquetas</h4>
                        <input type="text" class="input" id="name" placeholder="">

                        <h4>Titulo del post</h4>
                        <input type="text" class="input" size="60" title="Título" dir="ltr">
                        <br></br>
                    </div>

                    <div class="titleSeparator"></div>

                </div>


                <article class="postContent">
                    <h4>Descripcion</h4>
                    <textarea class="textArea" id="message" placeholder="..."></textarea>

                </article>

                <article class="actividadMain">
                    <textarea class="textActividad test" id="actividad1" placeholder="Actividad 1"></textarea>
                </article>


                <section><!-- end of main -->
                    </div><!-- end of wrapper -->
                    <div id = "userInformation">
                        <button class="" tabindex="0">Publicar</button>
                    </div>

                    <footer>
                        <div id="footerContent">
                            <p>Creative Commons 2013, CPQR Univalle</p>
                        </div>
                    </footer>
                    </body>
                    </html>