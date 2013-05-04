<html>

    <head>
        <title> The Process Network </title>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/login.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <script src="http://malsup.github.com/jquery.form.js"></script> 
        <script src="public/javascripts/login.js"></script> 
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


        <header>
            <div id="banner">
                <h1>The Process Network</h1>
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
                    <p id="errorlogin"></p>
                    <a href="index.php?registro">si no tienes cuenta, registrate :D</a>
                </aside>
            </section>
        </div>

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>
