<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Grid Layout</title>
    <style>
        /* Styles for the grid */
        .grid-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .grid-item {
            flex: 1 1 calc(25% - 20px);
            /* Each item takes up 25% of the width, minus spacing */
            border: 1px solid #ddd;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .pattern-output {
            margin: 10px 0;
        }

        /* Media query to make it responsive */
        @media (max-width: 768px) {
            .grid-item {
                flex: 1 1 calc(50% - 20px);
                /* 2 cards per row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .grid-item {
                flex: 1 1 100%;
                /* 1 card per row on mobile screens */
            }
        }
    </style>
</head>

<body>
    <?php include('./components/header.php') ?>

    <div class="grid-container">

        <!-- Diamond space Right-Angled Triangle Pattern -->
        <div class="grid-item">
            <h3>Diamond space Right-Angled Triangle Pattern</h3>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = $n; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "0";
                    }
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($k = 2; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    if ($i == 5) {
                        $m = $i - 1;
                    } else {
                        $m = $i;
                    }
                    for ($l = 1; $l <= $m; $l++) {
                        echo "1";
                    }
                    echo "</br>";
                }

                for ($i = 2; $i <= $n; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "2";
                    }

                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($k = 2; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    if ($i == 5) {
                        $m = $i - 1;
                    } else {
                        $m = $i;
                    }
                    for ($l = 1; $l <= $m; $l++) {
                        echo "3";
                    }
                    echo "</br>";
                }
                ?>
            </div>
        </div>

        <!-- Inverted Right-Angled Number Triangle Pattern -->
        <div class="grid-item">
            <h3>Inverted Right-Angled Number Triangle Pattern</h3>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = $n; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo $j;
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>

        <!-- Right-Angled Number Triangle Pattern -->
        <div class="grid-item">
            <h3>Right-Angled Number Triangle Pattern</h3>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = 1; $i <= $n; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo $j;
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>


        <!-- Cross Diamond Pattern -->
        <div class="grid-item">
            <h4>Diamond Pattern</h4>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = $n; $i >= 1; $i--) {
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    for ($l = 2; $l <= $i; $l++) {
                        echo "*";
                    }
                    echo "<br/>";
                }


                for ($i = 2; $i <= $n; $i++) {
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    for ($l = 2; $l <= $i; $l++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>

        <!-- Diamond Pattern -->
        <div class="grid-item">
            <h4>Diamond Pattern</h4>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = 1; $i <= $n; $i++) {
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    for ($l = 2; $l <= $i; $l++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                for ($i = $n - 1; $i >= 1; $i--) {
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    for ($l = 2; $l <= $i; $l++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>


        <!-- Inverted Pyramid Pattern -->
        <div class="grid-item">
            <h4>Inverted Pyramid Pattern</h4>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = $n; $i >= 1; $i--) {
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    for ($l = 2; $l <= $i; $l++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>



        <!-- Pyramid Pattern -->
        <div class="grid-item">
            <h5>Pyramid Pattern</h5>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = 1; $i <= $n; $i++) {
                    for ($k = 1; $k <= $n - $i; $k++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    for ($l = 2; $l <= $i; $l++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>


        <!-- Inverted Right-Angled Triangle Pattern -->
        <div class="grid-item">
            <h4>Inverted Right-Angled Triangle Pattern</h4>
            <div class="pattern-output">
                <?php
                $n = 6;
                for ($i = $n; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>

        <!-- Right-Angled Triangle Pattern -->
        <div class="grid-item">
            <h3>Right-Angled Triangle Pattern</h3>
            <div class="pattern-output">
                <?php
                $n = 5;
                for ($i = 1; $i <= $n; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "<br/>";
                }
                ?>
            </div>
        </div>

    </div>

    <?php include('./components/footer.php') ?>
</body>

</html>