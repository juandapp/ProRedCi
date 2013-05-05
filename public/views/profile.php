<html>
    <head>
        <link rel='stylesheet' href="public/stylesheets/style.css">
        <link rel='stylesheet' href="public/stylesheets/profile.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script type="text/javascript" src="public/javascripts/profile.js"></script>



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

                <div class="navRightItem">
                    <a class="navIcon" href="index?profile">Perfil</a>

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
                        <h3>Usuario Desde</h3>
                        <p><?php echo $data['fechaCreacion']; ?></p>				<!-- seek with php-->
                        <br/>
                        <div>
                            <input type="submit" value="Editar Perfil" />
                        </div>

                    </div>

                </aside><!-- user info -->

                <article>
                    <h2>Top 5</h2>
                    <div id="accordion">
                        <?php
                        $nProcesos = $data["nProcesos"];
                        for ($i = 1; $i <= $nProcesos; $i++) {
                            ?> 
                            <h3><?php echo $data['PostName' . $i]; ?><samp class="likes">
                                    <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost' . $i]; ?></p>
                                    <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost'.$i]; ?></p></samp>
                            </h3>
                            <div><?php echo $data['Description' . $i]; ?></div>

                        <?php } ?> <!--  end for-->







    <!--                        <h3><?php echo $data['PostName2']; ?><samp class="likes">
                                    <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost2']; ?></p>
                                    <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost2']; ?></p></samp>
                            </h3>
                            <div><?php echo $data['Description2']; ?></div>

                            <h3><?php echo $data['PostName3']; ?><samp class="likes">
                                    <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost3']; ?></p>
                                    <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost3']; ?></p></samp>
                            </h3>
                            <div><?php echo $data['Description3']; ?></div>

                            <h3><?php echo $data['PostName4']; ?><samp class="likes">
                                    <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost4']; ?></p>
                                    <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost4']; ?></p></samp>
                            </h3>
                            <div><?php echo $data['Description4']; ?></div>

                            <h3><?php echo $data['PostName5']; ?><samp class="likes">
                                    <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost5']; ?></p>
                                    <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost5']; ?></p></samp>
                            </h3>
                            <div><?php echo $data['Description5']; ?></div>-->

                    </div>
                </article>

                <aside id="createPost">
                    <div>
                        <form action="index.php?proceso" method="post">
                            <input type="submit" value="Crear Proc" />
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
