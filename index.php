<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="WannaBeDigital è una Digital Agency focalizzata nella relizzazione di progetti Web per i Brand, con particolare attenzione su attività di Design e Sviluppo.">
        <meta name="keywords" content="digital agency milano, web agency milano, siti web milano, e-commerce, portali, intranet, gestionali, contest, concorsi" />
        <meta name="og:title" content="Wanna Be Digital"/>
        <meta name="og:type" content="website"/>
        <meta name="og:url" content="http://www.wannabedigital.com"/>
        <meta name="og:image" content="http://www.wannabedigital.com/assets/images/logo-wannabedigital.png"/>
        <meta name="og:site_name" content="WannaBeDigital"/>
        <meta name="og:description" content="WannaBeDigital è una Digital Agency focalizzata nella relizzazione di progetti Web per i Brand, con particolare attenzione su attività di Design e Sviluppo."/>
        <link rel="canonical" href="http://www.wannabedigital.com" />
        <title>Web Agency Milano | Wanna Be Digital</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="/assets/css/animate.css" rel="stylesheet" />
        <link href="/assets/css/style.css?v=<?php echo mt_rand(1,1000); ?>" rel="stylesheet" />
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109787451-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-109787451-1');
        </script>
    </head>
    <body>
        <div class="header">
            <div class="opacity-layer"></div>
            <div class="logo animated fadeInDown"><img src="/assets/images/logo-wannabedigital.png" /></div>
            <h1 class="animated fadeInUp">Wanna Be Digital</h1>
            <h2 class="animated fadeInUp">Trasformiamo le tue idee in progetti digitali vincenti</h2>
            <div class="btn-contact">Parlaci del tuo progetto</div>
        </div>

        <div class="countdown">
            <div class="inner-container">
                <div class="block-left">
                    <p>Saremo presto online</p>
                </div>
                <div class="block-right">
                    <div class="count-elm">
                        <div class="inner-elm">
                            <p class="c-days">0</p>
                            <span>giorni</span>
                        </div>
                    </div>
                    <div class="count-elm">
                        <div class="inner-elm">
                            <p class="c-hours">0</p>
                            <span>ore</span>
                        </div>
                    </div>
                    <div class="count-elm">
                        <div class="inner-elm">
                            <p class="c-minutes">0</p>
                            <span>minuti</span>
                        </div>
                    </div>
                    <div class="count-elm">
                        <div class="inner-elm no-border">
                            <p class="c-seconds">0</p>
                            <span>secondi</span>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

        </div>
        <div class="footer">
            2017 &copy; Microtech - P.IVA: 01446230193
        </div>


        <script src="/assets/js/jquery-3.2.1.min.js"></script>
        <script src="/assets/js/countdown.min.js"></script>
        <script>
            setInterval(function() {
                var date = countdown(new Date(2018, 0, 1));
                $('.c-months').html(date.months);
                $('.c-days').html(date.days);
                $('.c-hours').html(date.hours);
                $('.c-minutes').html(date.minutes);
                $('.c-seconds').html(date.seconds);
            }, 1000);
            $('.btn-contact').on('click', function(){
                window.location = 'mailto:hello@wannabedigital.com';
                return false;
            });
        </script>
    </body>
</html>
