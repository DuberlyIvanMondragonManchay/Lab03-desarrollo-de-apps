<?php
    if (isset($_GET['ex2number1']) && isset($_GET['ex2number2']) && isset($_GET['ex2number3']) && isset($_GET['ex2number4'])){
        $num1 = intval($_GET['ex2number1']);
        $num2 = intval($_GET['ex2number2']);
        $num3 = intval($_GET['ex2number3']);
        $num4 = intval($_GET['ex2number4']);
    }
?>

<div class="container d-flex mt-5">
    <div class="row border border-warning p-3 m-auto">
        <h3 class="text-warning">Exercice 2</h3>
        <div class="col">
            <form method="GET">

                <div class="form-group mt-2">
                    <input type="number" name="ex2number1" placeholder="First number" required>
                </div>
                <div class="form-group mt-2">
                    <input type="number" name="ex2number2" placeholder="Second number" required>
                </div>
                <div class="form-group mt-2">
                    <input type="number" name="ex2number3" placeholder="Third number" required>
                </div>
                <div class="form-group mt-2">
                    <input type="number" name="ex2number4" placeholder="Fourd number" required>
                </div>
                <div class="form-group">
                    <input class="btn btn-warning mt-2" name="ex2_calculate" type="submit" value="Calculate">
                </div>
            </form>
        </div>

        <div class="col">
            <h6 class="text-warning">Results</h6>
            <?php 
                if(isset($num1)){
                    echo "<p class='text-warning'>Suma: <span class='text-white'>".($num1+$num2)."</span></p>";
                    echo "<p class='text-warning'>Suma: <span class='text-white'>".($num4*$num4)."</span></p>";
                }else{
                    echo "<p class='text-white'>No results</p>";
                }
            
            ?>
            
        </div>
    </div>
    
</div>