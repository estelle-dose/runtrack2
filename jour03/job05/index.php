<!DOCTYPE html>
<html>
<head>
    <title>job05</title>
</head>
<body>
    <?php
        $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

        $dic = [
            "consonnes" => 0,
            "voyelles" => 0
        ];

        $voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

        $length = strlen($str);
        for ($i = 0; $i < $length; $i++) {
            $caractere = $str[$i];
            if (in_array($caractere, $voyelles)) {
                $dic["voyelles"]++;
            } elseif (ctype_alpha($caractere)) {
                $dic["consonnes"]++;
            }
        }
    ?>

    <table>
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic["voyelles"]; ?></td>
                <td><?php echo $dic["consonnes"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>