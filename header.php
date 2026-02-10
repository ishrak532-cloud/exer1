<!DOCTYPE html>

<html>
<head>
    <title>Your Website Title</title>
    <style>
        .navlink{
    color: white;
    text-decoration: none;
    margin: 10px;
}
       html, body {
        height: 100%;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
        }
        main {
            flex:1;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
        <p>Your go-to source for web development tutorials</p>
        <nav>
  <a class="navlink"href="index.php">home</a>
  <a class="navlink"href="ex1.php">ex 1</a>
    <a class="navlink"href="aboutus.php">about us</a>
  <a class="navlink"href="contactus.php">contact us</a>
</nav>

    </header>
    <main>