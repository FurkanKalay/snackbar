<?php

include 'navigatie.php';
include 'database.php';




$sql = "SELECT name, cost_price, category   FROM product";

if ($result = mysqli_query($conn, $sql)) {
    $melding = mysqli_fetch_all($result, MYSQLI_ASSOC);
}


?>

<div class="container py-5 px-5">

    <div class="row py-5 px-5">

        <div class="col py-5 px-5">

            <table class="table ">
                <thead>
                    <tr>
                        <th>naam</th>
                        <th>cost_price</th>
                        <th>category</th>
                      

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($melding as $mel) : ?>
                        <tr>
                            <td><?php echo $mel["name"] ?></td>
                            <td><?php echo $mel["cost_price"] ?></td>
                            <td><?php echo $mel["category"] ?></td>
                    

                            <td><a href="meldingen-delete.php?id=<?php echo $mel["id"] ?>" class="btn btn-danger">Bestel</a></td>
                        
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>