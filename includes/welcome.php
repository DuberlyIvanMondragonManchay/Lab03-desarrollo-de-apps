<?php include 'header.php'?>; 
<?php 
    if(isset($_POST['save_user'])){
        $user = $_POST['username'];
        $email = $_POST['useremail'];
    }
?>

<div class="container">

    <h1 class="text-warning">Welcome <?php echo $user?></h1>
    <p class="text-warning">User Name: <span class="text-white"><?php echo $user?></span></p>
    <p class="text-warning">User Email: <span class="text-white"><?php echo $email?></span></p>
    <a class="btn btn-warning" href="/LAB03/index.php">Go to start</a>
    
</div>

<?php include 'footer.php'?>;