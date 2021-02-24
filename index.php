<?php include "users.php";

// if (isset($_POST['send'])) {
//     $backgroundColor = "#000";
//     // var_dump($_POST);
//     $backgroundColor = select_bg($_POST['background']);
// }
$users = get_users();

// 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> learning php</title>
    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid #dddddd;
        }
    </style>
</head>

<body>
    <!-- <form action="" method="post">
        <input type="radio" name="background" value="#add">#add
        <input type="radio" name="background" value="#c00">#c00
        <input type="radio" name="background" value="#0cc">#0cc
        <input type="radio" name="background" value="#aaa">#aaa
        <input type="submit" value="submit" name="send">
    </form> -->
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>actions</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td>
                    <a href="#">delete</a>
                    <a href="#">edit</a>
                    <a href="#">approve</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>