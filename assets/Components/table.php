<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/styles/table.css">
</head>
<body>
    <?php
        $Array = [
            "Diluc" => "Pyro", "Childe" => "Hydro", "Zholing" => "Geo",
            "Xiao" => "Ameno", "Venti" => "Ameno"
        ];
    ?>
    <h4 class="ShadowFont">Example 2:</h4>
    <p class="ShadowFont text-justify">While con un iterador para crear una tabla en HTML<br><br>
     <strong>Code:</strong></p>
    <pre width="65%"> <code>
    &lt;?php
        $Array = [
            "Diluc" => "Pyro", "Childe" => "Hydro", "Zholing" => "Geo",
            "Xiao" => "Ameno", "Venti" => "Ameno"
        ];

        $obj = new ArrayObject( $Array );
                $it = $obj->getIterator();
                $count = 1;
                while ($it->valid()){
                    echo '&lt;thead&gt;&gt;tr&gt;';
                    echo '&lt;th scope="col"&gt;' . $count . '&lt;/th&gt;';
                    echo '&lt;td&gt;' . $it->key() . '&lt;/td&gt;';
                    echo '&lt;td&gt;' . $it->current() . '&lt;/td&gt;';
                    echo '&lt;/tr&gt;&lt;/thead&gt;';
                    $count++;
                    $it->next();
                }
    ?&gt;
    </code> </pre>
    <p class="ShadowFont text-justify"><strong>Output:</strong></p>
    <p class="ShadowFont h4">Personajes: </p>
    <div>
        <table class="table table-dark" width=100%>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th>Character</th>
                    <th>Element</th>
                </tr>
            </thead>
            <?php 
                $obj = new ArrayObject( $Array );
                $it = $obj->getIterator();
                $count = 1;
                while ($it->valid()){
                    echo '<thead><tr>';
                    echo '<th scope="col">' . $count . '</th>';
                    echo '<td>' . $it->key() . '</td>';
                    echo '<td>' . $it->current() . '</td>';
                    echo '</tr></thead>';
                    $count++;
                    $it->next();
                }
            ?>
        </table>
    </div>
</body>
</html>