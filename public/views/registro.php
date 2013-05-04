

<html>
    <head>
        <title> The Process Network </title>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/login.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
        <script src="public/javascripts/registro.js"></script>

    </head>
    <body>

        <nav id="mainMenu">
            <div class="menu">

                <a class="navIcon" href="../index.php"><img title="Index" alt="Index" src="images/home.png" width="22" height="22"/></a>

                <div class="navVerticalDivision"></div>

                <div class="navLeftItem">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </div>

                <ul class="navRightItem">

                    <li class="navIcon"> <a href="about.html">About</a></li>
                    <li class="navIcon"> <a href="#">Contact</a> </li>

                </ul>
            </div>
        </nav>
        <div id="wrapper">
            <section id="main">

                <article id="register" class="login">
                    <form action=../../includes/controller/user.controller.php method="post">
                        <h3>Registro</h3>
                        <div>
                            <p id="labelNombre">Nombres</p>
                            <input type="text" required="" name="name" id="name" />
                        </div>

                        <div>
                            <p>Apellidos</p>
                            <input type="text" required="" name="lastname" id="lastname" />
                        </div>
                        <div>
                            <p>e-mail</p>
                            <input type="text" placeholder="example@example.com" required="" name="email" id="email" />
                        </div>
                        <div id="divUsername">
                            <p>Nick de usuario</p>
                            <input type="text" required="" name="username" id="username" />
                        </div>
                        <div>
                            <p>Contrase&ntilde;a</p>
                            <input type="password" placeholder="Password" required="" name="password" id="password" />
                        </div>
                        <div>
                            <input type="submit" value="Registrarse" name="register" />
                        </div>
                    </form>
                </article>
            </section>
        </div>

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>



