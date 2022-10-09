<?php

include 'navigatie.php';
include 'database.php';




$sql = "SELECT name, cost_price, category, id FROM product";

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
                        <th>quantity</th>


                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($melding as $mel) : ?>

                    <tr>
                        <form class="py-5 px-5 " method="POST" action="order.php">
                            <td><?php echo $mel["name"] ?></td>
                            <td><?php echo $mel["cost_price"] ?></td>
                            <td><?php echo $mel["category"] ?></td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $mel["id"] ?>">
                            </td>


                            <td>
                                <select name="quantity" id="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                </select>
                            </td>

                            <td><button class="btn btn-success" type="submit" name="submit">bestel</button>
                            </td>
                        </form>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>