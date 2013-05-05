<html>

    <head>
        <title> The Process Network </title>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/login.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <script src="http://malsup.github.com/jquery.form.js"></script> 
        <script src="public/javascripts/login.js"></script>

        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

        <script>
            $(function() {
                $("#dialog").dialog();
            });
        </script>
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

                
            </div>
        </nav>


        <header id="indexHeader">
            <div id="banner">
                <h1>tram&iacute;telo</h1>
            </div>
        </header>

        <div id="wrapper">
            <section id="main">

                <aside id="login" class="login">
                    <form id="loginform" action="index.php?login&singin" method="post">
                        <h3>Login</h3>
                        <div>
                            <input type="text" placeholder="Usuario" required="" name="username" id="username" />
                        </div>
                        <div>
                            <input type="password" placeholder="Password" required="" name="password" id="password" />
                        </div>
                        <div>
                            <input type="submit" value="Login" name="login" />
                        </div>
                    </form>
                    <a href="index.php?registro">si no tienes cuenta, registrate \(^.^)/</a>
                </aside><!-- close login -->

                <article>

                    <h2>Informate</h2>
                    <div class="listInformacion">
                        <a href="#"><h5>abuso familiar por parte del esposo</h5></a>
                        <p>pequenia descripcion acerca del problema</p>
                    </div>
                    <div class="listInformacion">
                        <a href="#"><h5>abuso familiar por parte del esposo</h5></a>
                        <p>pequenia descripcion acerca del problema</p>
                    </div>
                    <div class="listInformacion">
                        <a href="#"><h5>abuso familiar por parte del esposo</h5></a>
                        <p>pequenia descripcion acerca del problema</p>
                    </div>
                    <div class="listInformacion">
                        <a href="#"><h5>abuso familiar por parte del esposo</h5></a>
                        <p>pequenia descripcion acerca del problema</p>
                    </div>
                    <div class="listInformacion">
                        <a href="#"><h5>abuso familiar por parte del esposo</h5></a>
                        <p>pequenia descripcion acerca del problema</p>
                    </div>
                </article>

            </section><!-- close main -->
        </div><!-- close Wrapper -->

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>
