<html>

<body>
    <table border="1">
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo '<tr>';
            for ($j = 0; $j <= 10; $j++) {
                $s = $j * $i;
                echo '<td>';
                if ($i == 0 && $j == 0) {
                    echo 'X';
                    continue;
                }
                if ($i == 0) {
                    echo $j;
                    continue;
                }
                if ($j == 0) {
                    echo $i;
                    continue;
                }
                if (($s) % 2 == 0) echo "($s)";
                elseif (!($s) % 2 == 0) echo "[$s]";
                else echo $s;
                echo '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>