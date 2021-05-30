<?php

include 'conn.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $book = $_POST['book'];
    $q = "INSERT INTO `customer`(`name`, `email`,`phno`,`book` ) VALUES ('$name','$email','$phno','$book')";

    $query = mysqli_query($conn,$q);
}


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Insert Data</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body>
            <div class="col-lg-6 m-auto">
                <form method="post">
                        <br><div class="card">
                                <div class="card-header bg-dark">
                                        <h1 class="text-white text-center">Insert Data</h1>
                                </div><br>

                                <label>Name: </label>
                                <input type="text" name="name" class="form-control"><br>

                                <label>Email: </label>
                                <input type="text" name="email" class="form-control"><br>

                                <label>Phone Number: </label>
                                <input type="text" name="phno" class="form-control"><br>

                                <label>Favourite Book: </label>
                                <input type="text" name="book" class="form-control"><br>

                                <button class="btn btn-success" type="submit" name="submit">Submit</button>
                                
                                <div id="newRow"></div>
                                <div class="input-group-append"></div>
                                <br>
                                    <button id="addMore" type="button" class="btn btn-info">Add More</button>
                                   
                                
                        </div>
                </form>
        </div> 
    </body>
</html>

<script type="text/javascript">
    $("#addMore").click(function(){
        var html = '';
        html += '<div class="card">';
        html += '<div class="input-group-append">';
        html += '<button id="addMore" type="button" class="btn btn-info">Add More</button>';
        html += '<input type="text" name="Name" class="form-control">';
        html += '<input type="text" name="Email" class="form-control">';
        html += '<input type="text" name="Phone Number" class="form-control">';
        html += '<input type="text" name="Favourite Book" class="form-control">';
        html += '</div>';
        html += '</div>';

        $('#newRow').append(html);
    
    });

   

</script>