<?php
session_start();

if (@$_GET['acaopg'] == 5) {
    unset($_SESSION['usuario']);
    session_destroy();
}

if (isset($_SESSION['usuario'])) {
    header('Location: telainicial.php');
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>CardioPulmonar</title>
        
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <!-- Jquery MASK-->        
        <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="assets/js/jquery.mask.js" type="text/javascript"></script>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>

        <script>
            $(document).ready(function (){ 
                var rtn = $('#status').text();                
                if (rtn === '2'){                   
                   $('#msg_status').modal("show");
               }
            });
        </script>


    </head>
    <body style="background-color: #E2E2E2;">
        <div class="container">        
            <div class="row text-center " style="padding-top:100px;">
                <div class="col-md-12">
                    <img src="recursos/imgs/Sistematizar.png" />
                </div>
            </div>
            <div class="row ">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                    <div class="panel-body">
                        <form role="form" method="POST" action="acoesbdsmart.php"
                              <hr />
                            <h5>Entre com seu usuário e Senha. <br></h5>
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" name="login" class="form-control" placeholder="Login" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" name="dt_nasc" class="form-control"  placeholder="Senha"/>                                            
                            </div>
                            <input type="hidden" name="acaobd" value="2">
                            <div class="form-group">


                            </div>

                            <input type="submit" value="Logar" class="btn btn-primary ">
                            <hr />
                            <!--Not register ? <a href="index.html" >click here </a> or go to <a href="index.php">Home</a>--> 
                        </form>
                    </div>

                </div>


            </div>
        </div>
        <span id="status" style="display:none" ><?php echo $_GET['acaopg'];?></span>
        <!-- Modal -->
        <div class="modal fade" id="msg_status" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Alerta</h4>
                    </div>
                    <div class="modal-body">                        
                        <p style="font-weight: bolder">Usuario ou Senha Incorretos.</p>
                        <p style="font-weight: bolder">Tente Novamente</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div> 
        
    </body>
</html>
