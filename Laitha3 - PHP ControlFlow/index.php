<?php
// Pengulangan

// for
for ($i = 0; $i < 3; $i++) {
    echo "for " . ($i + 1) . " <br>";
}
echo "<br>";

// while
$j = 0;
while ($j < 3) {
    echo "while " . ($j + 1) . "<br>";
    $j++;
}
echo "<br>";

// do.. while
$k = 0;
do {
    echo "do " . ($k + 1) . "<br>";
    $k++;
} while ($k < 3);

// foreach : pengulangan khusus array


// Pengkondisian / Percabangan

// nested if
// ternary
// switch

// if else
$x = 20;
if ($x < 10) {
    echo "<br>True";
} else if ($x == 20) {
    echo "<br>$x == 20 (True)";
} else {
    echo "<br>False";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3 - PHP Conditional Flow</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .bg-salmon {
        background-color: salmon;
        color: white;
    }

    body table tr td:hover {
        background-color: greenyellow;
        color: white;
    }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<br>";
    }
    ?>

    <!-- Penulisan Gaya HTML di dalam PHP -->
    <table border="1" padding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<br>";
    }
    ?>

    <!-- Penulisan Gaya HTML di luar PHP -->
    <table border="1" padding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
            <td> <?= "$i,$j" ?> </td>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>

    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<br>";
    }
    ?>

    <!-- If Inside For -->
    <table border="1" padding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
            <?php if ($j == 3 && $i == 2 || $j == 2 && $i == 3) : ?>
            <td class="bg-salmon">
                <?php echo "$i,$j" ?>
            </td>
            <?php else : ?>
            <td>
                <?php echo "$i,$j" ?>
            </td>
            <?php endif; ?>
            <?php endfor; ?>
        </tr>
        <?php endfor; ?>
    </table>
</body>

</html>