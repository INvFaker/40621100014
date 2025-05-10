<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>
        <div class="konten">
            <?php
            $tasks = [
                ["id" => 1, "title" => "Belajar PHP", "status" => "belum"],
                ["id" => 2, "title" => "Kerjakan tugas UX", "status" => "selesai"],
            ];

            function tampilkanDaftar($tasks)
            {
                foreach ($tasks as $task) {
                    foreach ($task as $key => $val) {
                        if ($key == "title") {
                            echo "<li>$val</li>";
                        }
                    }
                    echo "<br>";
                }
            }
            ?>

            <form action="">
                <header>TODO LIST</header>
                <input type="text">
                <button>input</button>
            </form>
            <ul>
                <header class="header-daftarlist">
                    <span>Daftar list</span>
                </header>
                <?php
                tampilkanDaftar($tasks);
                ?>
            </ul>
        </div>
    </main>
</body>

</html>