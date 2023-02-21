<?php
    include "db_conn.php";
    $id = $_GET['id'];
    if(isset($_POST['update'])){
        $F_name = $_POST['F_name'];
        $L_name = $_POST['L_name'];
        $area = $_POST['area'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $sql = "UPDATE `CURD` SET `F_name`='$F_name',`L_name`='$L_name',`area`='$area',`email`='$email',`contact`='$contact',`gender`='$gender' WHERE ID=$id";
        $res = mysqli_query($conn,$sql);
        if($res){
            header("Location: index.php?msg=Updated successfully");
        }

        else{
            echo "Failed: " .mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTER CSS SETUP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP CURD APPLICATION</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP complete CURD Application
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit User Information</h3>
            <p class="text-muted">Click update after Changing any information</p>
        </div>
        <?php
            
            $stmt = "SELECT * FROM `CURD` WHERE ID= $id LIMIT 1";
            $res = mysqli_query($conn, $stmt);
            $row = mysqli_fetch_assoc($res);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vm; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">F_name</label>
                        <input type="text" class="form-control" name="F_name" value="<?php echo $row['F_name'] ?>">
                    </div>

                    <div class="col">
                        <label class="form-label">L_name</label>
                        <input type="text" class="form-control" name="L_name" value="<?php echo $row['L_name'] ?>">
                    </div>
                </div>

                <div class="mb-3">                
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="area" value="<?php echo $row['area'] ?>">
                </div>

                <div class="mb-3">
                <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label>Gender:</label>&nbsp &nbsp &nbsp &nbsp
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male"  <?php echo ($row['gender']=='male')?"checked":""; ?>>
                    <label for="male" class="form-input-label"> Male </label>
                    &nbsp &nbsp &nbsp &nbsp
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php echo ($row['gender']=='female')?"checked":""; ?>>
                    <label for="female" class="form-input-label"> Female </label>
                    &nbsp &nbsp &nbsp &nbsp
                    <input type="radio" class="form-check-input" name="gender" id="other" value="other"  <?php echo ($row['gender']=='other')?"checked":""; ?>>
                    <label for="other" class="form-input-label"> Other </label>
                </div>
                <div>
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>