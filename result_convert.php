<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table {
            border: 1px solid black;
            padding: 0 50px 50px;
        }
    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] = "POST"){
    $usd = $_POST["usd"];
    $vnd = $usd * 23000;
}
?>
<div>
    <form method="post" action="result_convert.php">
        <table>
            <tr>
                <td><h2>Convert Currency</h2></td>
                <td></td>
            </tr>
            <tr>
                <td>USD:</td>
                <td><?php echo "$" . $usd ?></td>
            </tr>
            <tr>
                <td>Viet Nam Dong Amount:</td>
                <td><?php echo $vnd . "VND" ?></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>