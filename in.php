<?php
    include "db_conn.php";
    
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
   <div class="container">
        <div class="text-center mb-4">
            <h3>co.up</h3>
        </div>
        <div class="row mb-3">
                <div class="col">
                    <label class="form-label">username</label>
                    <input type="text" class="form-control" placeholder="Enter username" id="username">
                </div>
                <div class="col">
                    <label class="form-label">password</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pass">
                </div>
        </div>
        <button onclick="submit()">login</button>
    </div>
    <script>
        function submit(){
            let a = document.getElementById('username').value
            let b = document.getElementById('pass').value
            if(a == "" || b == ""){
                alert("please fll up the given datas")
            }
            else if (a == 'buddhashrestha' && b == "123") {
                window.location.href = ('index.php')
            } 
            else {
                alert("Try again")
            }
        }
    </script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
