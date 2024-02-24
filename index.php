<html>

<head>
    <meta charset="utf-8">
    <style>
        table {
            width: 150px;
        }

        .tableScrollable {
            height: 265px;
            overflow: auto;
            width: 200px;
        }

        td {
            padding: 8px 2px;
        }
    </style>
</head>

<body>
    <?php for ($multi_x = 2; $multi_x <= 12; $multi_x++) { ?>
        <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <div class="tableScrollable">
            <table>
                <tbody>
                    <?php for ($x = 1; $x <= 24; $x++) {
                        $result = $multi_x * $x;
                    ?>
                        <tr>
                            <td><?php echo $multi_x ?></td>
                            <td>x</td>
                            <td><?php echo $x ?></td>
                            <td>=</td>
                            <td><?php echo $result ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } ?>
</body>

</html>