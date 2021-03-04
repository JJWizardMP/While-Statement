<!DOCTYPE html>
<html lang="en">
    <head>
        <title>While Statement</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/styles/styles.css">
    </head>
    <body>
        <?php
            $Sesion = [
                "title" => "Uso de la sentencia While & Do-While",
                "user" => "Admin",
                "date" => date("M d, Y")
            ]; 
        ?>
        <div id="Main" class="container-fluid">
            <div id="Page" class="row">
                <div id="sidebar" class="col-sm-2 idenav">
                    <p class="h4"><small>PHP LOOPS</small></p>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a id="Init" 
                            href="#section1">While - Do-While</a></li>
                        <li><a id="Ex1" href="#section2">Example 1</a></li>
                        <li><a id="Ex2" href="#section3">Example 2</a></li>
                        <li><a id="Ex3" href="#section3">Example 3</a></li>
                    </ul><br>
                </div>
                <div id="DC" class="col-sm-10 Content">
                    <p class="ShadowFont h4"><small>While Statement PHP</small></p>
                    <hr>
                    <p class="ShadowFont h2"> <?php echo $Sesion['title'] ?> </p>
                    <p class="ShadowFont h5"><span class="glyphicon glyphicon-time"></span> 
                        Hoy es <?php echo $Sesion['date'];?></p>
                    <br>
                    <!-- Dinamic DIV -->
                    <div id="Dinamic-Content">
                        <?php require("./assets/Components/while.php"); ?>
                    </div>
                </div>
            </div>
    <!-- Footer -->
        <footer id="Foot" class="bg-dark text-center text-white">
            <div class="container-fluid">
                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © <?php echo date("Y"); ?> copyright:
                    <a class="text-white" href="https://www.unicaribe.mx/" target="blank_">
                        Universidad del Caribe</a>
                </div>
                <!-- Copyright -->
            </div>
        </footer>
    <!-- Footer -->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./assets/Scripts/actions.js"> </script>
    </body>
</html>