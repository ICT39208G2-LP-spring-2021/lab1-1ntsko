<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- phpinfo ფუნქციის გამოეყნებით გამოიტანეთ სერვერის შესახებ ინფორმაცია -->
    <?php phpinfo() ?>

    <!-- mysqli_connect-ის გამოყენებით დაუკავშირდით მონაცემთა ბაზას, თუ კავშირი შედგა გამოტანეთ შეტყობეინება "მონაცემთა ბაზასთან კავშირი წარმატებით დამყარდა", წინააღმდეგ შემთხვევაში შეწყვიტეთ სკრიპტის შესრულება და გამოიტანეთ შეტყობინება "შეცდომა მონაცემთა ბაზასთან კავშირისას" -->
    <?php
        $conn = new mysqli();

        if ($conn) {
            echo 'მონაცემთა ბაზასთან კავშირი წარმატებით დამყარდა';
        } else {
            echo 'შეცდომა მონაცემთა ბაზასთან კავშირისას';
        }
    ?>
</body>
</html>