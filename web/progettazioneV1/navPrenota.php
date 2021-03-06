<html dir="ltr" lang="en-US"><!--<![endif]--><!-- BEGIN head --><head>

    <!--Meta Tags-->
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!--Title-->
    <title>B&B La Vecchia Posta | Navigazione</title>

    <!--Stylesheets-->
    <link rel="stylesheet" href="style.css" type="text/css" media="all">


    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<!-- BEGIN body -->
<body>

<!-- BEGIN .background-wrapper -->
<div class="background-wrapper">

    <!-- BEGIN .content-wrapper -->
    <div class="content-wrapper" id="wrapper-content">

        <!-- BEGIN .content-body -->
        <div class="content-body">

            <!-- BEGIN #header-google-map -->
            <!-- BEGIN #header-google-map -->
            <div id="socialBar">

                <div id="left-social-bar"><span class="logo-social">a</span>
                    <span class="logo-social">b</span>
                    <span class="logo-social">c</span>
                    <span class="logo-social">d</span>
                    <span class="logo-social">e</span>
                </div>
                <span id="marker-map">marker</span>
                <div id="right-social-bar">
                    <span id="btn-prenota">prenota</span>
                    <span id="upperText">A</span>
                    <span id="normaleText">Aa</span>
                    <span id="lowerText">a</span>
                </div>
            </div>

            <!-- END .top-bar -->
        </div>

        <div id="header">
            <div id="logo"><a href="index.html">LOGO</a></div>
            <div id="offerta">
            <span id="titolo-offerta">
                Titolo offerta
            </span>
            <span id="testo-offerta">
                testo dell'offerta caratteri limitati
            </span>
            </div>
        </div>
        <nav>
            <div id="menuBar">
                <div>
                    <ul id="main">
                        <li><a href="index.html">home</a></li>
                        <li><a href="navCamere.html">camere</a></li>
                        <li><a href="navAttivita.html">attività</a></li>
                        <li><a href="navEventi.html">eventi</a></li>
                        <li><a href="navDintorni.html">dintorni</a></li>
                        <li><a href="navDoveSiamo.html">dove siamo</a></li>
                    </ul>
                    <ul id="contact">
                        <li>0862/xxxxx</li>
                        <li>info@xxxx</li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- END #navigation -->

        <!-- BEGIN .page-header -->
        <div class="page-header">
            <img src="images/page-head.png" alt="">
            <!-- END .page-header -->
        </div>

        <!-- BEGIN .section -->
        <div class="section page-full">

        <div class="main-content">
            <div class="section page-full clearfix">

                <h2 class="page-title" style="margin-bottom: 20px;">Prenotazione</h2>

                <!-- BEGIN .page-content -->
                <div class="page-content page-content-full" style="width: 600px;">

                    <div class="even-cols clearfix">
                        <div class="one-half">

                            <div class="booknow-accompage full-booking-form">
                                <form action="#" class="booking-form booking-form-accompage" name="bookroom" method="post">
                                    <table>
                                        <tr>
                                            <td>
                                                Nome:
                                            </td>
                                            <td>
                                                <input name="user-name" type="text" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cognome:</td>
                                            <td>
                                                <input name="user-surname" type="text" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><input type="email" /></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Camera:
                                            </td>
                                            <td>
                                                <select name="room">
                                                    <option value="<?php echo $_POST['room']?>"> <?php echo $_POST['room']?> </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Arrivo::</td>
                                            <td><input type="date" name="from" value="<?php echo $_POST['from']?>" /></td>
                                        </tr>
                                        <tr>
                                            <td>Notti:</td>
                                            <td><input type="text" name="for-night" value="<?php echo $_POST['for-night']?>"/></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><textarea class="text-input" rows="6">Richieste particolari</textarea></td>
                                        </tr>
                                        <tr><td><input class="bookbutton" type="submit" value="Prenota" /></td></tr>
                                    </table>
                                </form>

                            </div>

                        </div>

                    </div>

                    <!-- END .page-content -->
                </div>

                <!-- END .section -->
            </div>

                <!-- END .page-content -->
            </div>

                <div class="clearfix">&nbsp;</div>

                <!-- END .main-content -->
            </div>

            <div class="clearfix">&nbsp;</div>

        <div class="clearfix">&nbsp;</div>
        <!-- BEGIN #footer -->
        <div id="footer">
            <div id="main-footer">
                <div id="first-footer-column">
                    banner dei portali amici
                </div>
                <div id="second-footer-column">
                    Sitemap
                    <nav>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li><a href="navCamere.html">camere</a></li>
                            <li><a href="navAttivita.html">attività</a></li>
                            <li><a href="navEventi.html">eventi</a></li>
                            <li><a href="navDintorni.html">dintorni</a></li>
                            <li><a href="navDoveSiamo.html">dove siamo</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="third-footer-column" style="border: none">
                    Si pensa di inserire un collegamento ad un servizio esterno
                    per la gestione delle immagini
                </div>
            </div>
            <div id="second-footer">&copy; Copyright 2013 |<br /> webmaster: Daniele Di Pompeo</div>
        </div>

        <!-- END .content-body -->
    </div>

    <!-- END .content-wrapper -->
</div>

<!-- END .background-wrapper -->
</div>

<!-- END body -->

</body></html>
