<html>

    <head>
        <title> The Process Network </title>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/login.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>  
        <script src="public/javascripts/login.js"></script>



        <script>
            $(function() {
                $("#dialog").dialog();
            });

        </script>
    </head>
    <body>
        <nav id="mainMenu">
            <div class="menu">

                <a class="navIcon" href="index.php"><img title="Index" alt="Index" src="public/images/home.png" width="22" height="22"/></a>

                

                <!-- div class="navLeftItem"><!-- el buscador, mover>
                    
                </div -->


                <form id="loginform" class="navRightItem" action="index.php?login&singin" method="post">
                    <div class="navLeftItem">
                        <input class="upInputs" type="text" placeholder="Usuario" required="" name="username" id="username" />
                    </div>
                    <div class="navLeftItem">
                        <input class="upInputs" type="password" placeholder="Password" required="" name="password" id="password" />
                    </div>
                    <div class="navLeftItem">
                        <input id="bttnLogin" type="submit" value="Login" name="login" />
                        <a href="index.php?registro">registrate</a>
                    </div>
                </form>

            </div>
        </nav>


        <header id="indexHeader">
            <div id="banner">
                <h1>tram&iacute;telo</h1>
                <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas venenatis dignissim lacus, et vehicula mauris sodales at. 
                                Nam sed nibh eu nulla dignissim auctor vitae eu massa. Aenean in rutrum ante. 
                                Mauris porttitor nibh id elit commodo et scelerisque eros convallis. 
                                Aliquam id magna sed urna scelerisque fringilla id non nibh.</p>
                        
            </div>
        </header>

        
        <div id="wrapper">
            <section id="main">

                <!-- aside id="login" class="login">
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
                    <a href="index.php?registro">registrate \(^.^)/</a>
                </aside><!-- close login -->

                <article id="cajaBusqueda">
                    <h2>Realiza tu busqueda</h2>
                    <form method="get" action="/search" id="loginSearch">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </article>
                
                <article><!-- Tops -->
                    <h2>Top 5</h2>
                    <div id="accordion">
                        <h3><?php echo $data['PostName1']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost1']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost1']; ?></p>
                        </h3>
                        <div><?php echo $data['Description1']; ?></div>

                        <h3><?php echo $data['PostName2']; ?><samp class="likes">

                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost2']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost2']; ?></p>
                        </h3>
                        <div><?php echo $data['Description2']; ?></div>

                        <h3><?php echo $data['PostName3']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost3']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost3']; ?></p>
                        </h3>
                        <div><?php echo $data['Description3']; ?></div>

                        <h3><?php echo $data['PostName4']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost4']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost4']; ?></p>
                        </h3>
                        <div><?php echo $data['Description4']; ?></div>

                        <h3><?php echo $data['PostName5']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost5']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost5']; ?></p>
                        </h3>
                        <div><?php echo $data['Description5']; ?></div>

                    </div>
                </article><!-- Cierre Tops -->
                
                

            </section><!-- close main -->
        </div><!-- close Wrapper -->

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>
