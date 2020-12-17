<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>VOLUME</title>
</head>

<body>
    <br>
    <div class="container">
        <a href="/PHP/converter/index.php" class="btn btn-success">GO BACK</a>
        <hr>
        <h1 class="text-center">------*Volume Converter*------</h1>
        <form action="" method="post" class="jumbotron">

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>FROM:</label>&nbsp;
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control mb-2" type="text" name="from_value" placeholder="Value-1">
                </div>
                <div class="col-auto">
                    <select name="from_unit">
                        <option>From_unit</option>
                    </select>
                </div>
            </div>

            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label>___TO:</label>
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control mb-2" type="text" name="to_value" placeholder="Value-2">
                </div>
                <div class="col-auto">
                    <select name="To_unit">
                        <option>To_unit</option>
                    </select>
                </div>
            </div>
            <hr>
            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
</body>

</html>