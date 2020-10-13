<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];
    $result = $amount*$to/$from;
    echo "<h3>$result<h3>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chuyển đổi tiền tệ</title>
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <th>Amount</th>
            <th>From Currency</th>
            <th>To Currency</th>
        </tr>
        <tr>
            <td>
                <input type="text" name="amount">
            </td>
            <td>
                <select name="from" >
                    <option value="23000" >VietNam</option>
                    <option value="1" >USA</option>
                </select>
            </td>
            <td>
                <select name="to" >
                    <option value="1" >USA</option>
                    <option value="23000" >am</option>
                </select>
            </td>
            <td>
                <button type="submit" ">Quy đổi</button>

            </td>
        </tr>
    </table>
</form>
</body>
</html>
