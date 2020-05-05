<?php
    if(isset($_POST['submit'])){
        echo $_POST['email'];
        echo $_POST['title'];
        echo $_POST['ingredients'];
    }

?>

<html lang="en">
    <!-- HEADER  -->
    <?php include 'templates/header.php'; ?>
    
    <section class="container grey-text">
        <h4 class="center">Add Pizza</h4>
        <form action="add.php" method="post" class="white">
            <label for="email">Email :</label>
            <input type="text" name="email">
            <label for="title">Pizza Title :</label>
            <input type="text" name="title">
            <label for="ingredients">Ingredients (coma separated) :</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" class="btn brand z-depth-0" value="submit" name="submit">
            </div>

        </form>
    </section>

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
</html>
