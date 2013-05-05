<html>
    <head>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/createPost.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="public/javascripts/jquery.sheepItPlugin-1.1.1.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="http://malsup.github.com/jquery.form.js"></script>  
        <script type="text/javascript" src="public/javascripts/proceso.js"></script>
        
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
                <!-- div class="navVerticalDivision"></div>
                <div class="navLeftItem">
                    <form method="get" action="/search" id="search">
                        <input name="q" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </div -->

                <div class="navRightItem">
                    
                </div>

            </div>
        </nav>

        <div id="wrapper">
            <section id="main">




                <article id="crearPost">
                    <h2>Resultado de B&uacute;squeda Tag : <?php echo $_POST['busqueda'] ?></h2>
                    <div id="accordion">
                        <?php
                        $nProcesos = $data["nProcesos"];
                        for ($i = 1; $i <= $nProcesos; $i++) {
                            ?> 
                            <h3><?php echo $data['PostName' . $i]; ?><samp class="likes">
                                    <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost' . $i]; ?></p>
                                    <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost' . $i]; ?></p></samp>
                            </h3>
                            <div><?php echo $data['Description' . $i]; ?></div>

                        <?php } ?> <!--  end for-->

                    </div>

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
