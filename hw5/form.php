<form action="" method="post">
    Име: <input type="text" name="name"><br />
    Презиме: <input type="text" name="second"><br />
    Фамиялия: <input type="text" name="famy"><br />
    ЕГН: <input type="text" name="egn"><br />
    Образование:<input type="text" name="school"><br />
    Професия:<input type="text" name="jobs"><br />
    <input type="submit" name="send" value="Създай">
</form>
<?php
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $secondName = $_POST['second'];
    $famy = $_POST['famy'];
    $egn = $_POST['egn'];
    $school = $_POST['school'];
    $prof = $_POST['jobs'];

    if (empty($name) || empty($secondName) || empty($famy) || empty($egn) || empty($school) || empty($prof)){
        echo "Моля попълнете полетата!!!";
        exit;
    }
    if (!is_numeric($egn)){
        echo "Моля въведете валидно ЕГН!!!";
        exit;
    }

    echo "<table border=\"1\">
    <tr>
        <td>Име</td>
        <td>Презиме</td>
        <td>Фамилия</td>
        <td>ЕГН</td>
        <td>Образувание</td>
        <td>Професия</td>
    </tr>
    <tr>
        <td>".$name."</td>
        <td>".$secondName."</td>
        <td>".$famy."</td>
        <td>".$egn."</td>
        <td>".$school."</td>
        <td>".$prof."</td>
    </tr>
</table>";
}
?>
