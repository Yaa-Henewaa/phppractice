<!DOCTYPE <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <main>
        <form action="formhandler.php" method="post">
            <div class="fn">
            <label for="firstname">Firstname</label>
            <input id="firstname" type="text" name="firstname" placeholder="Firstname">
            </div>
           
            <div class="ln">
            <label for="lastname">lastname</label>
            <input id="lastname" type="text" name="lastname" placeholder="lastname">
            </div>
            
            <div class="fp">
            <label for="favoritepet">Favorite pet</label>
            <select name="favoritepet" id="Favoritepet">
                <option value="none">None</option>
                <option value="Dog">Dog</option>
                <option value="Cat">Cat</option>
                <option value="Bird">Bird</option>
            </select>
          
            </div>
            <div>
            <button type="submit" class="btn">Submit</button>
            </div>
          
            


        </form>
    </main>

    <?php

   


    ?>




</body>

</html>