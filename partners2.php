<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0366f96474.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <script src="script.js"></script>
</head>

<body class="bg-dark">
    <div id="AllPage" class="container-fluid mrg-auto bg-light">
        <?php include "header.php"; ?>
        <div class="container-fluid text-center">
            <h1 class="m-4">Partner Insitutions</h1>
            <div class="row justify-content-center">
                <?php
                $fp = fopen("partners.msv", "r");
                if (!$fp) exit;
                while (!feof($fp))
                {
                    $line = fgets($fp);
                    if (!empty($line))
                    {
                        $data = explode('$$$', $line);
                        echo
<<<HTML
                        <div class="card uniCards m-4" style="width: 18rem;">
                            <!--<img class="card-img-top p-2" src="" alt="Card image cap">-->
                            <div class="card-body">
                                <h4 class="card-title text-center">{$data[0]}</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item text-center">{$data[1]}</li>
                                <li class="list-group-item text-center font-weight-light">
                                    <h5>Subject Area</h5>{$data[2]}
                                </li>
                                <!-- <li class="list-group-item text-center font-weight-light"><i class="fas fa-envelope"></i> international@kocaeli.edu.tr</li> -->
                                <a href="http://{$data[3]}" class="text-light font-weight-light">
                                    <li class="list-group-item text-center font-weight-light bg-info text-light">{$data[3]}</li>
                                </a>
                            </ul>
                        </div>
HTML;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>