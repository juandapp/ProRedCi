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

                <article id="cajaBusqueda" class="loginArticle">
                    <h2>Realiza tu busqueda</h2>
                    <form method="post" action="index.php?busqueda" id="Busquedas">
                        <input name="busqueda" type="text" size="40" placeholder="Buscar..." />
                    </form>
                </article>
                
                <article class="loginArticle"><!-- Tops -->
                    <h2>Top 5</h2>
                    <div id="accordion">
                        <h4><?php echo $data['PostName1']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost1']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost1']; ?></p>
                        </h4>
                        <div><?php echo $data['Description1']; ?></div>

                        <h4><?php echo $data['PostName2']; ?><samp class="likes">

                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost2']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost2']; ?></p>
                        </h4>
                        <div><?php echo $data['Description2']; ?></div>

                        <h4><?php echo $data['PostName3']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost3']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost3']; ?></p>
                        </h4>
                        <div><?php echo $data['Description3']; ?></div>

                        <h4><?php echo $data['PostName4']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost4']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost4']; ?></p>
                        </h4>
                        <div><?php echo $data['Description4']; ?></div>

                        <h4><?php echo $data['PostName5']; ?><samp class="likes">
                                <img class="likes" src="public/images/dislike.png"><p class="likes"><?php echo $data['DislikesPost5']; ?></p></samp>
                            <img class="likes" src="public/images/like.png"><p class="likes"><?php echo $data['likesPost5']; ?></p>
                        </h4>
                        <div><?php echo $data['Description5']; ?></div>

                    </div>
                </article><!-- Cierre Tops -->
                
                
                <aside class="loginAside">
                    <script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//docs.google.com/spreadsheet/tq?key=0AqvBSxHJKkTzdFpvcE13bWZhbGROaEFSYlhkYWtERGc&transpose=0&headers=0&range=A1%3AB15&gid=2&pub=1","options":{"titleTextStyle":{"bold":true,"color":"#000","fontSize":"14"},"animation":{"duration":500},"colors":["#3366CC","#DC3912","#FF9900","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395","#994499","#22AA99","#AAAA11","#6633CC","#E67300","#8B0707","#651067","#329262","#5574A6","#3B3EAC","#B77322","#16D620","#B91383","#F4359E","#9C5935","#A9C413","#2A778D","#668D1C","#BEA413","#0C5922","#743411"],"width":310,"is3D":true,"pieSliceText":"percentage","hAxis":{"useFormatFromData":true,"minValue":null,"viewWindow":{"min":null,"max":null},"maxValue":null},"vAxes":[{"useFormatFromData":true,"minValue":null,"viewWindow":{"min":null,"max":null},"maxValue":null},{"useFormatFromData":true,"minValue":null,"viewWindow":{"min":null,"max":null},"maxValue":null}],"pieHole":0,"title":"\u00bfEn que entidad ha encontrado m\u00e1s dificultad a la hora de realizar un tr\u00e1mite?","booleanRole":"certainty","height":320,"legend":"right","tooltip":{}},"state":{},"view":{},"isDefaultVisualization":true,"chartType":"PieChart","chartName":"Chart 1"} </script>
                </aside>
                <aside class="loginAside">
                    <script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//docs.google.com/spreadsheet/tq?key=0AqvBSxHJKkTzdFpvcE13bWZhbGROaEFSYlhkYWtERGc&transpose=0&headers=0&range=A1%3AB6&gid=4&pub=1","options":{"vAxes":[{"useFormatFromData":true,"title":null,"minValue":null,"viewWindow":{"min":null,"max":null},"maxValue":null},{"useFormatFromData":true,"minValue":null,"viewWindow":{"min":null,"max":null},"maxValue":null}],"titleTextStyle":{"bold":true,"color":"#000","fontSize":16},"pieHole":0,"booleanRole":"certainty","title":"Estrato Social","height":280,"animation":{"duration":0},"colors":["#3366CC","#DC3912","#FF9900","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395","#994499","#22AA99","#AAAA11","#6633CC","#E67300","#8B0707","#651067","#329262","#5574A6","#3B3EAC","#B77322","#16D620","#B91383","#F4359E","#9C5935","#A9C413","#2A778D","#668D1C","#BEA413","#0C5922","#743411"],"width":310,"is3D":true,"hAxis":{"useFormatFromData":true,"minValue":null,"viewWindow":{"min":null,"max":null},"maxValue":null},"tooltip":{}},"state":{},"view":{"columns":[{"calc":"stringify","type":"string","sourceColumn":0},1]},"isDefaultVisualization":true,"chartType":"PieChart","chartName":"Chart 2"} </script>
                </aside>
                

            </section><!-- close main -->
        </div><!-- close Wrapper -->

        <footer>
            <div id="footerContent">
                <p>Creative Commons 2013, CPQR Univalle</p>
            </div>
        </footer>
    </body>
</html>
