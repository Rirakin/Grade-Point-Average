<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Grade Point Average</title>
</head>
<body>
    <div class="container mt-5 mx-auto" style="width: 500px;">
        
        <h3>Grade Point Average</h3>

        <form action="index.php" method="get">
            <div class="form-group">
              <input type="text" class="form-control" name="num" id="" aria-describedby="helpId">
            </div>
            <button type="submit" class="btn btn-primary mt-2">OK</button>
        </form>

        <?php 
            if(isset($_GET['num']) && !empty($_GET['num']))
            {
                $a = $_GET['num'];
                $tab = explode(",", $a);
                $sum = 0;
                $i = 0;

                if(is_array($tab))
                {
                    foreach($tab as $item)
                    {
                        if(is_numeric($item) && $item >= 1 && $item <= 6)
                        {
                            $sum += $item;
                            $i++;
                        }
                    }
                }
                if($i > 0)
                {
                    echo "<br>The grade point average is: " . round($sum / $i, 2);  
                }
                else 
                {
                    echo "<br><div class='alert alert-primary' role='alert'>
                    <strong>No grades were given!</strong>
                </div>";                
                }
                
            }
            else 
            {
                //
            }
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>