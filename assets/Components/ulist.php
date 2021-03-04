<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php
        $List = [
            "React" => "https://reactjs.org/",
            "Redux" => "https://redux.js.org/",
            "Next.js" => "https://nextjs.org/",
            "Express.js" => "https://expressjs.com/",
            "React Native" => "https://reactnative.dev/",
            "Electron" => "https://www.electronjs.org/",
            "MongoDB" => "https://www.mongodb.com/",
            "GraphQL" => "https://graphql.org/"
        ];
    ?>
    <p class="ShadowFont h4" class="ShadowFont h4">Ejemplo 1:</p>
    <p class="ShadowFont text-justify" >While con un iterador para crear una lista desordenada<br><br> <strong>Code:</strong></p>
    <pre> <code>
    &lt;?php
            # Boostrap classes
            $classlist1 = "list-group";
            $classlist2 = "list-group-item list-group-item-dark";
            $obj = new ArrayObject( $List );
            $it = $obj->getIterator();
            echo ' &lt;tul class="' . $classlist1 . '"&gt;';
            while ($it->valid()):
                echo '&lt;li  class="' . $classlist2 . '"&gt;' . 
                    ' &lt;a href="' . $it->current() . '" target="blank_">' 
                    . $it->key() . ' &lt;/a&gt;&lt;/&gt;';
                $it->next();
            endwhile;
            echo ' &lt;/ul&gt;';
    ?&gt;
    </code> </pre>
    <p class="ShadowFont text-justify" ><br> <strong>Output:</strong></p>
    <p class="ShadowFont h4">Javascript Tools: </p>
    <div style="width:25%;" >
        <?php 
            # Boostrap classes
            $classlist1 = "list-group";
            $classlist2 = "list-group-item list-group-item-dark";
            $obj = new ArrayObject($List);
            $it = $obj->getIterator();
            echo '<ul class="' . $classlist1 . '">';
            while ($it->valid()):
                echo '<li  class="' . $classlist2 . '">' . 
                    '<a href="' . $it->current() . '" target="blank_">' 
                    . $it->key() . '</a></li>';
                $it->next();
            endwhile;
            echo '</ul>';
        ?>
    </div>
</body>
</html>