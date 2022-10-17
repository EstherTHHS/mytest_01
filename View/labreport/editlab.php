<?php
// echo "ok";
session_start();
$labinfo =  $_SESSION["pLabInfo"];
echo "<pre>";
print_r($labinfo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lab </title>
</head>

<body>
    <div class="container-fluid">
        <form action="../../Controller/labreport/updateController.php" method="post">
            <div class="row justify-content-center ">
                <div class="col col-lg-auto ">
                    <h3 class="m-5">Edit Lab Info</h3>
                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">PatientID</label>

                    <input type="text" name="pid" class="form-control" id="exampleFormControlInput1" placeholder="" required value="<?php echo $labinfo[0]["patient_id"] ?>">

                </div>
            </div>


            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Ref Doc</label>
                    <input type="text" name="refdoc" class="form-control" value="<?php echo $labinfo[0]["ref_doc"] ?>" id="exampleFormControlInput1" placeholder="SAMA">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">ResultDate</label>
                    <input type="date" name="bachelar" class="form-control" value="<?php echo $labinfo[0]["result_date"] ?>" id="exampleFormControlInput1" placeholder="Bachelar">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Test</label>
                    <input type="text" name="test" class="form-control" value="<?php echo $labinfo[0]["test"] ?>" id="exampleFormControlInput1" placeholder="Center">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Result</label>
                    <input type="text" name="res" class="form-control" value="<?php echo $labinfo[0]["result"] ?>" id="exampleFormControlInput1" placeholder="Phone number">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" value="<?php echo $labinfo[0]["unit"] ?>" id="exampleFormControlInput1" placeholder="unit">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Remark</label>
                    <input type="text" name="rem" class="form-control" value="<?php echo $labinfo[0]["remark"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">ReportedBy</label>
                    <input type="text" name="repo" class="form-control" value="<?php echo $labinfo[0]["reported_by"] ?>" id="exampleFormControlInput1" placeholder="unit">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Authorised By</label>
                    <input type="text" name="autho" class="form-control" value="<?php echo $labinfo[0]["authorised_by"] ?>" id="exampleFormControlInput1" placeholder="Phone number">
                </div>
            </div>

            <div class="row justify-content-center ">
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">Ref Rate</label>
                    <input disabled type="text" name="rate" class="form-control" value="<?php echo $labinfo[0]["ref_rate"] ?>" id="exampleFormControlInput1" placeholder="">
                </div>
                <div class="mb-3 col col-lg-3">
                    <label for="exampleFormControlInput1" class="form-label">ID</label>
                    <input type="text" name="upid" class="form-control" value="<?php echo $labinfo[0]["id"] ?>" id="exampleFormControlInput1" placeholder="Phone number">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="mb-3 col col-lg-2">
                    <button type="button submit" name="updateDoctor" class="btn submit-button  ">UPDATE Doctor Info</button>
                </div>
            </div>
        </form>
    </div>


</body>

</html>