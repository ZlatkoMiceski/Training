<!DOCTYPE HTML>
<html>
<head>
    <title>Some site</title>

    <link rel="stylesheet" type="text/css" href="public/css/style.css">


</head>


<body>

<form method="POST" action="../controllers/users.php">
    <input name="namet" placeholder="Enter player name">
    <input name="lastname" placeholder="Enter player last name">
    <input name="jerseynumber" placeholder="Enter player Jersey Number">
    <input type="number" name="height" placeholder="Enter player Height">
    <input type="number" name="weight" placeholder="Enter player Weight">
    <input type="date" name="birthdate" placeholder="Enter player birth date">
    <input name="positiont" placeholder="Enter player position">
    <input name="bio" placeholder="Enter player short bio">
    <input name="teamid" placeholder="Enter player TeamID">
    <button type="submit">Submit</button>
</form>


</body>
</html>