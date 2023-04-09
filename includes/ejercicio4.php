<?php 
    if(isset($_GET['ex4note1'])&& isset($_GET['ex4note2'])&& isset($_GET['ex4note3'])){
        $ex4note1=$_GET['ex4note1'];
        $ex4note2=$_GET['ex4note2'];
        $ex4note3=$_GET['ex4note3'];
    }
?>

<div class="container d-flex mt-5">
    <div class="row m-auto border border-warning p-3">
        <h3 class="text-warning ">Execise 4</h3>
        <div class="col">

            <form action="">
                <div class="form-group mt-2">
                    <input type="text" name="ex4note1" placeholder="First Nota">
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="ex4note2" placeholder="Second Nota">
                </div>
                <div class="form-group mt-2">
                    <input type="text" name="ex4note3" placeholder="Third Nota">
                </div>
                <div class="form-group mt-2">
                    <input class="btn btn-warning" type="submit" name="ex4_calculate" value="Calculate">
                </div>
            </form>
        </div>
        <div class="col">
            <h6 class="text-warning">Results</h6>

            <?php 
                if(isset($ex4note1) && isset($ex4note2) && isset($ex4note3)){
                    $averange=($ex4note1+$ex4note2+$ex4note3)/3;
                    echo "<p class='text-warning'>Note 1: <span class='text-white'>".$ex4note1."</span></p>";
                    echo "<p class='text-warning'>Note 2: <span class='text-white'>".$ex4note2."</span></p>";
                    echo "<p class='text-warning'>Note 3: <span class='text-white'>".$ex4note3."</span></p>";
                    echo "<p class='text-white'>Averange: ".$averange."</p>";
                    if ($averange>=13){
                        echo "<p class='text-primary'>¡APPROVED!</p>";
                    }else{
                        echo "<p class='text-danger'>¡REPROBATE! :c</p>";
                    }
                }
            ?>

        </div>
    </div>
</div>