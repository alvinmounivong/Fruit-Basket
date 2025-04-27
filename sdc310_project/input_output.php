<html>

<head>
    <title>Fruit shopping center</title>
</head>

<body>
    <form method='POST'>
        <h3>How many apples would you like? <input type="text" name="apple"></h3>
        <h3>How many bananas would you like? <input type="text" name="banana"></h3>
        <h3>How many peaches would you like? <input type="text" name="peach"></h3>
        <h3>How many plums would you like? <input type="text" name="plum"></h3>
        <h3>How many broccoli would you like? <input type="text" name="broccoli"></h3>
        <input type="submit" value="Submit Values">
    </form>
    <?php
        $apple = '';
        $banana = '';
        $peach = '';
        $plum = '';
        $broccoli = '';

        if (isset($_POST['apple']))
            $apple = $_POST['apple'];
        if (isset($_POST['banana']))
            $banana = $_POST['banana'];
        if (isset($_POST['peach']))
            $peach = $_POST['peach'];
        if (isset($_POST['plum']))
            $plum = $_POST['plum'];
        if (isset($_POST['broccoli']))
            $broccoli = $_POST['broccoli'];

        

        if (strlen($apple) > 0)
            echo "<h3> You ordered $apple apple </h3>";
        if (strlen($banana) > 0)
            echo "<h3> You ordered $banana banana </h3>";
        if (strlen($peach) > 0)
            echo "<h3> You ordered $peach peach </h3>";
        if (strlen($plum) > 0)
            echo "<h3> You ordered $plum plum </h3>";
        if (strlen($broccoli) > 0)
            echo "<h3> You ordered $broccoli broccoli </h3>";
    ?>            
</body>

</html>