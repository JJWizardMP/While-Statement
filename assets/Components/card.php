<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/styles/modal.css">
</head>
<body>
    <?php
        $List = [
            "Gantz" => "./assets/Images/Gantz.jpg", 
            "One Punch Man" => "./assets/Images/one.jpg", 
            "Death Note" => "./assets/Images/death.jpg",
        ];
    ?>
    <h4 class="ShadowFont">Ejemplo 3:</h4>
    <p class="ShadowFont text-justify">Do While con un iterador para crear una
         lista de cartas de Bootstrap.<br><br>
     <strong>Code:</strong></p>
    <pre width="65%"> <code>
    &lt;?php
             $classimg = "IMG card-img-top img-responsive";
            $obj = new ArrayObject( $List );
            $it = $obj->getIterator();
            $count = 1;
            do {
                echo '&lt;div class="col-sm-3"&gt;';
                echo '&lt;div class="card" &gt;';
                echo '&lt;img id="myImg' . $count . '" class="' . $classing . '"';
                echo 'src="' . $it->current() . '" alt="' . $it->key() . '"&gt;';
                echo '&lt;div class="card-body"&gt;';
                echo '&lt;p class="card-title text-dark"&gt;' . $it->key() . '&lt;/p&gt;';
                echo '&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;';
                $it->next();
                $count++;
            } while ($it->valid());
    ?&gt;
    </code> </pre>
    <p class="ShadowFont text-justify"><br> <strong>Output:</strong></p>
    <p class="ShadowFont h4">Paneles: </p>
        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- The Close Button -->
            <span id="mclose" class="close">&times;</span>
            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">
            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>
    <div class="row">
        <?php 
            $classimg = "IMG card-img-top img-responsive";
            $obj = new ArrayObject( $List );
            $it = $obj->getIterator();
            $count = 1;
            do {
                echo '<div class="col-sm-3">';
                echo '<div class="card" >';
                echo '<img id="myImg' . $count . '" class="' . $classimg . '"';
                echo 'src="' . $it->current() . '" alt="' . $it->key() . '">';
                echo '<div class="card-body">';
                echo '<p class="card-title text-dark">' . $it->key() . '</p>';
                echo '</div></div></div>';
                $it->next();
                $count++;
            } while ($it->valid());
        ?>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="./assets/Scripts/modal.js"> </script>
    </body>
</html>