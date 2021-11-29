<?php
if (isset($_GET['edit'])) {
    $the_sno = $_GET['edit'];

    $query = "SELECT * FROM `routine` WHERE `sno`={$the_sno}";
    $select_sno = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($select_sno)) {
        $title = $row['title'];
        $description = $row['description'];

?>
        <label for="title" class="form-label">Routine title</label>
        <input value="<?php if (isset($title)) {
                            echo $title;
                        } ?>" type="text" class="form-control" name="title">
        <label for="title" class="form-label">Routine Description</label>
        <input value="<?php if (isset($description)) {
                            echo $description;
                        } ?>" class="form-control" name="description">
<?php
    }
}
?>
<input type="submit" class="btn btn-dark my-3" name="update" value="Edit Routine">

<?php

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "UPDATE `routine` SET `title`='{$title}',`description`='{$description}' WHERE `routine`.`sno` = {$the_sno};";
    $update_query = mysqli_query($connection, $query);
    header("Location: index.php");
}

?>