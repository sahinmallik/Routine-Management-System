<div class="container my-5">
    <table class="table table-hover">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM `routine`";
            $show_routine = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($show_routine)) {
                $sno = $row['sno'];
                $title = $row['title'];
                $description = $row['description'];
                echo "
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>$title</td>
                <td>$description</td>
                <td><a class='btn btn-link' href='index.php?edit={$sno}'>Edit</a> <a class='btn btn-link' href='index.php?delete={$sno}'>Delete</a></td>
            </tr>";
            }

            ?>
            <?php
            if (isset($_GET['delete'])) {
                $this_sno = $_GET['delete'];
                $query = "DELETE FROM `routine` WHERE `routine`.`sno` = {$this_sno}";
                $delete_query = mysqli_query($connection, $query);
                header("Location: index.php");
            }
            ?>

        </tbody>
    </table>
</div>

<?php



?>