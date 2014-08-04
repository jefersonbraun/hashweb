<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Hashweb | Web Competitiva</title>
        
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.0.min.js"></script>
        
        <link href="../fonts/kirvy-bold-webfont.woff" rel="stylesheet" type="text/css">
        <link href="../fonts/kirvy-thin-webfont.woff" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=280817618656457&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        
        <div class="fixed">
            <nav class="top-bar" data-topbar>
                <div class="row">
                    <div class="large-1 show-for-large-up columns"></div>
                    <div class="large-11 columns">
                        <a data-scroll-nav="0" class="menu-logo"><img src="img/logo_32.png" /></a>
                        <a data-scroll-nav="1" class="menu-item" href="#">Contato</a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="texture" data-scroll-index="0">
            <div class="row">
                <div class="large-3 medium-4 small-6 columns">
                    <h2 class="slogan">
                        WEB<br />COM<br />PETI<br />TIVA
                    </h2>
                    <p class="description show-for-large-up">
                        Dedicada para o desenvolvimento de<br />
                        soluções web, a Hashweb é campeã em<br />
                        competitividade e entrega de projetos<br />
                        CRM, redes sociais e sistemas próprios.
                    </p>
                </div>
                <div class="large-6 medium-6 small-6 columns">
                    <img class="logo-centro" src="img/logo-centro.png" />
                </div>
                <div class="large-3 medium-2 show-for-medium-up columns"></div>
            </div>
        </div>
        
        <div class="texture-2" data-scroll-index="1">
            <div class="row">
                <div class="large-3 show-for-large-up columns">  
                </div>
                <div class="large-6 medium-12 small-12 columns contact">
                    <h2 class="contact">
                        FALE<br />COM<br />A<br />HASH<br />WEB
                    </h2>
                    
                    <?php
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $mensagem = $_POST['mensagem'];
                        $from = 'From: TangledDemo'; 
                        $to = 'jefersonbbraun@gmail.com'; 
                        $subject = 'Mensagem enviada através de hashweb.com.br';

                        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
                    ?>

                    <?php
                        if ($_POST['submit']) {
                        /* Anything that goes in here is only performed if the form is submitted */
                            if (mail ($to, $subject, $body, $from)) { 
                            echo '<p>Your message has been sent!</p>';
                            } else { 
                            echo '<p>Something went wrong, go back and try again!</p>';
                            }
                        }
                    ?>
                    
                    <form name="htmlform" method="post" action="index.php">
                        <div class="row">
                            <div class="medium-6 medium-centered large-12 columns">
                                <input type="text" name="name" id="name" placeholder="nome" />
                            </div>
                            <div class="medium-6 medium-centered large-12 columns">
                                <input type="text" name="email" id="email" placeholder="e-mail" />
                            </div>
                            <div class="medium-6 medium-centered large-12 columns">
                                <input type="text" name="telefone" id="telefone" placeholder="telefone" />
                            </div>
                            <div class="medium-6 medium-centered large-12 columns">
                                <textarea name="mensagem" id="mensagem" placeholder="mensagem"></textarea>
                            </div>

                            <input type="submit" class="button" value="Enviar">
                            
                        </div>
                    </form>
                </div>
                <div class="large-3 show-for-large-up columns">
                    <address>
                        <img src="img/logo_32.png" /><br /><br />
                        <small>51</small> 9415.0924<br /><br />
                        contato@hashweb.com.br<br /><br />
                        <div class="fb-like" data-href="https://www.facebook.com/hashwebsolutions" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                    </address>
                </div>
            </div>
        </div>
        
        <script src="js/foundation/foundation.js"></script>
        <script src="js/foundation/foundation.reveal.js"></script>
        <script type="text/javascript" src="js/scrollIt.min.js"></script>

        <script>
            $(document).foundation();
        </script>
        
        <script>
            $(function(){
            $.scrollIt({
                topOffset: -69
            });
            });
        </script>
        
    </body>
</html>