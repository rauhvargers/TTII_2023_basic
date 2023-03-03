<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View file demo</title>
</head>

<body>
    <?php
    echo $output;
    ?>
    <form action="/lecture4" method="get">
        <?php
        if ($error) {
        ?>
            <div class='error'>
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php
        }
        ?>
        Year: <input type="text" name="year" value="<?php echo htmlspecialchars($defaultyear); ?>" /> <br />
        Month: <input type="text" name="month" value="<?php echo $defaultmonth ?>" />

        <button type="submit">Submit</button>

    </form>

</body>

</html>