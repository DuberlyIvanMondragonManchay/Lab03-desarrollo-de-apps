<?php 
    if(isset($_GET['ex5num1'])&& isset($_GET['ex5num2'])&& isset($_GET['ex5num3'])){
        $ex5num1=$_GET['ex5num1'];
        $ex5num2=$_GET['ex5num2'];
        $ex5num3=$_GET['ex5num3'];
    }
?>

<div id="exercise5" class="container d-flex mt-5">
    <div class="row m-auto border border-warning p-3">
        <h3 class="text-warning ">Execise 5</h3>
        <div class="col">

            <form method="GET">
                <div class="form-group mt-2">
                    <input type="text" name="ex5num1" placeholder="First number" required>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="ex5num2" placeholder="Second number" required>
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="ex5num3" placeholder="Third number" required>
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-warning" type="submit" name="ex5_calculate" value="Calculate">
                </div>
            </form>
        </div>
        
        <div class="col">
            <h6 class="text-warning">Results</h6>

            <?php 
                if(isset($ex5num1) && isset($ex5num2) && isset($ex5num3)){
                    echo "<p class='text-warning'>Num 1: <span class='text-white'>".$ex5num1."</span></p>";
                    echo "<p class='text-warning'>Num 2: <span class='text-white'>".$ex5num2."</span></p>";
                    echo "<p class='text-warning'>Num 3: <span class='text-white'>".$ex5num3."</span></p>";
                    echo "<p class='text-warning'>Num Large: <span class='text-white'>".max(array($ex5num1,$ex5num2,$ex5num3))."</span></p>";
                }
            ?>
        </div>
    </div>
</div>