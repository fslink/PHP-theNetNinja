<?php
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['title']);
        // echo htmlspecialchars($_POST['ingredients']);

        if(empty($_POST['email'])){
            echo 'You have to give an email !';
        } else {
            echo htmlspecialchars($_POST['email'] . ' Valided !');
        }

        if(empty($_POST['title'])){
            echo 'You have to give a title !';
        } else {
            echo htmlspecialchars($_POST['title'] . ' Valided !');
        }

        if(empty($_POST['ingredients'])){
            echo 'You have to give ingredients !';
        } else {
            echo htmlspecialchars($_POST['ingredients'] . ' Valided !');
        }
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
