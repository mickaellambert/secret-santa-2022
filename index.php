<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/snow.css">
        <link rel="stylesheet" href="/assets/css/dog.css">
        <link rel="stylesheet" href="/assets/css/tree.css">
        <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">

        <title>Cheh</title>
    </head>
    <body>
        <h1 class="title text-center">Neha Mushtaq</h1>

        <section class="ah-ouais">
            <img width="200" height="200" src="/assets/images/ah_ouais.jpg">
        </section>

        <section class="santa">
            <img class="gif" height="200" width="300" src="https://i.pinimg.com/originals/9c/6f/e5/9c6fe5e035abadc20b4654c4bec1f08d.gif">
        </section>

        <section id="tree">
            <?php include 'tree.html'; ?>
        </section>

        <div id="dog">
            <?php include 'dog.html'; ?>
        </div>

        <section id="cheh">
            <img width="650" height="650" src="/assets/images/cheh.png">
        </section>
        
        <?php for ($i = 0; $i < 200; $i++) : ?>
            <div class="snow"></div>
        <?php endfor; ?> 
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
        <script src="/assets/js/tree.js"></script> 
        
    </body>
</html>

