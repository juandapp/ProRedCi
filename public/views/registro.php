

<html>
    <head>
        <title>Tramitalo - Registro</title>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/login.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script src="public/javascripts/registro.js"></script>

    </head>
    <body>

        <nav id="mainMenu">
            <div class="menu">
                <a class="navIcon" href="index.php"><img title="Index" alt="Index" src="public/images/home.png" width="22" height="22"/></a>
                <div class="navVerticalDivision"></div>
                <div class="navLeftItem">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </div>
                
            </div>
        </nav>


        <div id="wrapper">
            <section id="main">

                <article id="register" class="login">
                    <h3>Registro</h3>

                    <form id="registerForm" action="index.php?registro&registrar" method="post">

                        <div class="registerDiv" >
                            <h5 id="labelNombre">Nombres</h5>
                            <input type="text" required="" name="name" id="name" />
                        </div>

                        <div class="registerDiv" >
                            <h5>Apellidos</h5>
                            <input type="text" required="" name="lastname" id="lastname" />
                        </div>

                        <div class="registerDiv" >
                            <h5>e-mail</h5>
                            <input type="text" placeholder="example@example.com" required="" name="email" id="email" />
                        </div>

                        <div class="registerDiv" id="divUsername">
                            <h5>Nick de usuario</h5>
                            <input type="text" required="" name="username" id="username" />
                        </div>

                        <div class="registerDiv">
                            <h5>Contrase&ntilde;a</h5>
                            <input type="password" placeholder="Password" required="" name="password" id="password" />
                        </div>
                        
                        <div id="errorData">
                            
                        </div>

                        <input type="submit" value="Registrarse" name="register" />

                    </form>

                </article><!-- close register -->
            </section><!-- close main -->
        </div><!-- close wrapper -->

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>



