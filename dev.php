
<!DOCTYPE html>
<html>
<head>
    <title>Meet the Developers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 2em;
        }
        .creator-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            margin: 1em;
            padding: 1em;
            text-align: center;
        }
        .creator-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1em;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to the Developers Page</h1>
    </header>
    <section>
    <?php
        $creators = [
            [
                "name" => "Seham Al Haque",
                "photo" => "template/seham.png",
            ],
            [
                "name" => "Ayesha Rob",
                "photo" => "template/ayesha.jpg",
            ],
            [
                "name" => "Samia Enam",
                "photo" => "template/enam.jpg",
            ],
            [
                "name" => "Asim Ajwad Gani",
                "photo" => "template/asim.jpg",
            ],
            [
                "name" => "Souharda Bhattacharjee",
                "photo" => "template/souhardo.jpg",
            ],
        ];

        foreach ($creators as $creator) {
            echo "<div class='creator-card'>";
            echo "<img class='creator-photo' src='{$creator['photo']}' alt='{$creator['name']}'>";
            echo "<h2>{$creator['name']}</h2>";
            echo "</div>";
        }
        ?>
    </section>
    <footer>
        <p>&copy; <?php echo date("2023"); ?> Creators Page</p>
    </footer>
</body>
</html>





   