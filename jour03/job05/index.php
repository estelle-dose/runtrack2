<!DOCTYPE html>
<html>
<head>
    <title>job05</title>
</head>
<body>
    <?php
        $str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

        $dic = array(
            "consonnes" => 0,
            "voyelles" => 0
        );

        $vowels = "aeiouAEIOU";

        for ($i = 0; isset($str[$i]); $i++) {
            $char = $str[$i];
            
            if (ctype_alpha($char)) {
                if (strpos($vowels, $char) !== false) {
                    $dic["voyelles"]++;
                } else {
                    $dic["consonnes"]++;
                }
            }
        }

        echo "<table>
                <thead>
                    <tr>
                        <th>Voyelles</th>
                        <th>Consonnes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{$dic['voyelles']}</td>
                        <td>{$dic['consonnes']}</td>
                    </tr>
                </tbody>
            </table>";
    ?>
</body>
</html>