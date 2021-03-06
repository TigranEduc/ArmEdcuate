<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>Կապ</title>
    <?php include("main.php") ?>
</head>
<body class="home">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class="lgx-container ">
    <!-- ***  ADD YOUR SITE CONTENT HERE *** -->
    <!--HEADER-->
    <?php include("navbar.php") ?>
    <!--HEADER END-->
    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">Հետադարձ Կապ</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Գլխավոր</a></li>
                                    <li class="active">Կապ</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->
    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-md-offset-3">
                            <form method="POST" class="lgx-contactform" action="php/form-handler.php">
                                <div class="form-group">
                                    <input type="text" name="lgxname" class="form-control lgxname" id="lgxname"
                                           placeholder="Enter Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="lgxemail" class="form-control lgxemail" id="lgxemail"
                                           placeholder="Enter email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lgxsubject" class="form-control lgxsubject" id="lgxsubject"
                                           placeholder="Subject" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control lgxmessage" name="lgxmessage" id="lgxmessage" rows="5"
                                              placeholder="We expect drop some line from you..." required></textarea>
                                </div>
                                <button type="submit" name="submit" value="contact-form"
                                        class="lgx-btn hvr-glow hvr-radial-out lgxsend lgx-send">
                                    <span>Send Massage</span></button>
                            </form>
                            <!-- MODAL SECTION -->
                            <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content lgx-modal-content">
                                        <div class="modal-header lgx-modal-header">
                                            <button type="button" class="close brand-color-hover" data-dismiss="modal"
                                                    aria-label="Close">
                                                <i class="fa fa-power-off"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="alert lgx-form-msg" role="alert"></div>
                                        </div> <!--//MODAL BODY-->

                                    </div>
                                </div>
                            </div> <!-- //MODAL -->

                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>
    <!--FOOTER-->
    <?php include("footer.php") ?>
    <!--FOOTER END-->
</div>
</body>
</html>
