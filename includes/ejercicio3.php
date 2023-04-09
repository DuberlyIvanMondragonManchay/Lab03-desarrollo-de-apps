<?php 
	if(isset($_GET['ex3number1'])&& isset($_GET['ex3number2'])){
		$ex3num1=$_GET['ex3number1'];
		$ex3num2=$_GET['ex3number2'];
	}
?>

<div class="container d-flex mt-5">
	<div class="row m-auto border border-warning p-3">
		<h3 class="text-warning">Exercice 3</h3>
		<div class="col">
			<form method="GET">
				<div class="form-group mt-2">
					<input type="number" name="ex3number1" placeholder="First Number" required>
				</div>
				<div class="form-group mt-2">
					<input type="number" name="ex3number2" placeholder="second Number" required>
				</div>
				<div class="form-group mt-2">
					<input class="btn btn-warning" type="submit" name="ex3calculate" value="Calculate">
				</div>
			</form>
		</div>
		<div class="col">
			<h6 class="text-warning">Results</h6>
			
			<?php
				if(isset($ex3num1) && isset($ex3num2)){

					if ($ex3num2==0){
						echo "<p class='text-danger'> El segundo numero no debe ser 0!!</p>";
					}else{
						if ($ex3num1 > $ex3num2){
							echo "<p class='text-warning'>sum: <span class='text-white'>".($ex3num1+$ex3num2)."</span></p>";
							echo "<p class='text-warning'>Diference: <span class='text-white'>".($ex3num1-$ex3num2)."</span></p>";
						}else{	
							echo "<p class='text-warning'>Product: <span class='text-white'>".($ex3num1*$ex3num2)."</span></p>";
							echo "<p class='text-warning'>Product: <span class='text-white'>".($ex3num2/$ex3num1)."</span></p>";
						}
					}
				}else{
					echo "<p class='text-white'>No results</p>";
				}
			?>

		</div>

	</div>
</div>