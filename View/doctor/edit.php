<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</head>
<body>

<div class="container-fluid">
        
        <div class="row justify-content-md-center">
        <div class="col col-md-5  col-lg-6  col-sm-auto">
        <form action="../../Controller/doctor/addController.php" method="post">
            <h3 class="mb-5">Edit Doctor Info</h3>
         
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Doctor Name</label>
                <input type="text" name="docName" class="form-control" id="exampleFormControlInput1" placeholder="Doctor Name" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Gender</label>
                <input type="radio" name="gender"  value="0" >Male
                <input type="radio" name="gender"  value="1" >Female
                <!-- <input type="radio" name="gender" id="">Other -->
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">SAMA</label>
                <input type="text" name="sama" class="form-control" id="exampleFormControlInput1" placeholder="SAMA">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Bachelar</label>
                <input type="text" name="bachelar" class="form-control" id="exampleFormControlInput1" placeholder="Bachelar">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Center</label>
                <input type="text" name="center" class="form-control" id="exampleFormControlInput1" placeholder="Center">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Phone No.</label>
                <input type="text" name="phNum" class="form-control" id="exampleFormControlInput1" placeholder="Phone number">
            </div>

            <div class="mb-3">
            <button type="button submit" name="addDoctor" class="btn btn-secondary float-lg-end float-sm-end float-md-end">ADD</button>
            </div>

            
        </form>
    </div>
        </div>
       
    </div>



    
</body>
</html>
