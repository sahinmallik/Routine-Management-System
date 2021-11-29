<div class="row">


    <?php

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "INSERT INTO `routine`(`title`, `description`) VALUES ('{$title}','{$description}')";
        $insert_data = mysqli_query($connection, $query);
        if (!$insert_data) {
            die("Error" . mysqli_error($connection));
        }
    }

    ?>
    <div class="col-6">
        <div class="container my-3">
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Routine title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="desc">Routine description</label>
                    <input class="form-control" name="description" type="text">
                </div>
                <button type="submit" class="btn btn-dark my-3" name="submit">Add routine</button>
            </form>
        </div>
    </div>
    <div class="col-6">
        <div class="container my-3">
            <form action="" method="post">

                <div class="mb-3">
                    <?php
                    if (isset($_GET['edit'])) {
                        $the_sno = $_GET['edit'];
                        include "edit_routine.php";
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>