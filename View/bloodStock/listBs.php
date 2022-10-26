<?php
// echo "OK";
include "../../Controller/bloodStock/listBsController.php";
// echo "<pre>";
// print_r($instockLists);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood stock lists</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/dm.css">
</head>

<body class="container-fluid">

    <div class="row justify-content-center align-items-center m-5">


        <?php foreach ($instockLists as $key => $instock) { ?>
            <div class="col-lg-1 col-sm-1 m-3 ">

                <button type="button" class="btn btn-primary position-relative">
                    <?= $instock["blood_type"] ?>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        <?= $instock["totalblood"] ?>
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </button>
            </div>
        <?php } ?>




        <table class="table mt-5 text-center align-middle table-bordered  justify-content-center">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">blood date</th>
                    <th scope="col">instock now</th>
                    <th scope="col">blood type</th>
                    <th scope="col">previous stock</th>
                    <th scope="col">used quantity</th>
                    <th scope="col">average range</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($bloodLists as $key => $blood) { ?>
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $blood["blood_date"] ?></td>
                        <td><?= $blood["instock_now"] ?></td>
                        <td><?= $blood["blood_type"] ?></td>
                        <td><?= $blood["previous_stock"] ?></td>
                        <td><?= $blood["used_quantity"] ?></td>
                        <td><?= $blood["average_range"] ?></td>

                        <td><a href=" ../../Controller/bloodStock/editBsController.php?id=<?= $blood["id"] ?>">Edit</a>
                            <a href=" ../../Controller/bloodStock/deleteBsController.php?id=<?= $blood["id"] ?>">DELETE</a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>

        <a href="./addBs.php">
            <button type="button" class="btn btn-outline-success  m-5 float-lg-end float-sm-end float-md-end" data-mdb-ripple-color="dark">Add Blood stocks</button>
        </a>


    </div>
</body>

</html>