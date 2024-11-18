<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>About</title>
</head>
<body>
    <div class="container">
        <div class="content text-center">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/blog">Blog</a>
            <a href="/contact">Contact</a>    
            <div class="isi ">
                <h3>Pemilik : {{ $nama }}</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minima voluptate ratione, quaerat id odit quibusdam ad distinctio maxime dolorem commodi corporis facere quae repellat, molestias tempore beatae harum corrupti!</p>
            </div>
        </div>
    </div>
</body>
</html>