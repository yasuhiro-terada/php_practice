<!DOCTYPE html>
<html>
    <head>
        <meta charset =utf-8>
        <title></title>
    </head>
    <body>
        
    <?php 
        class chef {
            function makeChicken(){
                echo "The chef makes chicken <br> ";
        }
            function makeSalad(){
                echo "The chef makes salad <br>";
            } 
            function makeSpacialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }
        
        class ItalianChef extends Chef {
            function makePasta(){
                echo "aaaaaa";
            }
            function makeSpacioalDish(){
                echo "The chef makes checken parm";
            }
           
       } 
        
        $chef = new Chef();
        $chef->makeChicken();
        
        
        $italianChef = new Chef();
        $italianChef->makePasta();

    

    ?>

    </body>
    
</html>
