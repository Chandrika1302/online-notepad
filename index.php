<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NotePad</title>
    <link rel="stylesheet" href="./style/index.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/843f31a33f.js" crossorigin="anonymous"></script>


</head>

<body class="bg-gradient-to-l from-cyan-500 to-blue-500">
    <div>
        <?php
include "./misc/heading.php";
echo "

<h2 class='text-9xl text-center py-24 font-extrabold text-transparent bg-clip-text bg-gradient-to-b via-slate-700 to-slate-800'>Welcome to Online Notepad</h2>
<main>
<p class='welcome-para'>Intro Text</p>
<div class='my-10'><a href='./all.php' class='browse-all rounded-md bg-opacity-50 bg-white backdrop-blur-md shadow-xl p-4 hover:shadow-inner text-xl font-medium '>View All</a><div>
</main>
";

?>
    </div>
</body>

</html>