<form action="" method="post">
    <select name="Days">
        <option value="0" selected>Select Day</option>
        <option value="1">Monday</option>
        <option value="2">Tuesday</option>
        <option value="3">Wednesday</option>
        <option value="4">Thursday</option>
        <option value="5">Friday</option>
        <option value="6">Saturday</option>
        <option value="7">Sunday</option>
    </select>
    <input type="submit" name="send" value="Избери ден">
</form>
<?php
if (isset($_POST['send'])){
    $selected = $_POST['Days'];

switch ($selected){
    case 0:
        echo "Моля изберете ден!!!";
        break;
    case 1:
        echo "Laugh on Monday, laugh for danger.";
        break;
    case 2:
        echo "Laugh on Tuesday, kiss a stranger.";
        break;
    case 3:
        echo "Laugh on Wednesday, laugh for a letter.";
        break;
    case 4:
        echo "Laugh on Thursday, something better.";
        break;
    case 5:
        echo "Laugh on Friday, laugh for sorrow.";
        break;
    case 6:
        echo "Laugh on Saturday, joy tomorrow.";
        break;

}
}