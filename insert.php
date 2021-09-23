<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1 class="test-center"> Insert data using Ajax and jquary</h1>
        <br>
        <div class="col-lg-8 m-auto">
            <form id="myform" action="insertdata.php" method="POST">
                <div class="form-group">
                    <label>Username :</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password :</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <input type="submit" name="submit" value="submit" id="submit" class="btn btn-success">
            </form>
        </div>
    </div>
    <script src="script.js">
        $(document).ready(function() {

            var form = $('#myform');

            $('#submit').click(function() {

                $.ajax({
                    url: form.attr("action"),
                    type: 'POST',
                    data: $("#myform input").serialize(),

                    success: function(data) {
                        console.log(data);
                    }

                });
            });

        });
    </script>
</body>

</html>
