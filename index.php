<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <div id="header">
        <nav>
            <a> Weird </a>
        </nav>
    </div>
    <div id="main-wrapper">
        <div id="container">
            <div id="main-content">
                <h1>
                    <div class="imagewrap">
                        <div class="image-container">
                            <?php
                            $dice = rand(0, 2);
                            echo "Is that the Red Mist?<br>";
                            if ($dice <= 10) {
                                echo "<img src=\"assets/img/i1.jpg\">";
                                echo "THE RED MIST?!";
                            } else {
                                echo "No red mist sad, try again.";
                            }


                            ?>
                        </div>
                    </div>

                </h1>
            </div>
        </div>
    </div>

    <?php
    ?>
</body>

</html>