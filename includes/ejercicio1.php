<div class="container d-flex mt-5">
    <div class="row border border-warning p-3 m-auto">
        <h3 class="text-warning">Exercice 1</h3>
        <div class="col">
            <form action="includes/welcome.php" method="POST">
            <div class="form-group mt-2">
                <input type="text" name="username" placeholder="User Name" required>
            </div>
            <div class="form-group mt-2">
                <input type="email" name="useremail" placeholder="User Email" required>
            </div>
            <div class="form-group mt-2">
                <input class="btn btn-warning" name="save_user" type="submit" value="Send">
            </div>
        </form>
        </div>
    </div>

</div>