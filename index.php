<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ice Cream Order Online</title>
    <link rel="stylesheet" href="style.css">
    
      <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
  <script src="js/incrementing.js"></script>
</head>
<body>
    <div id="pagewrap">


<!-----Header-------------------->
<header>
    <section class="layout">
        
        
    </section>
</header>


<!-----Main---------------------->
<section id="firstcontent">


    <h1>Ice Cream Order Online</h1>
        <p>Welcome to our Ice Cream online page</p>
        
        <form method = "post" action="index.php" >
            <p>Choose your flavor</p>
            <input type="radio" name="choice" value="chocolate" > Chocolate<br>
            <input type="radio" name="choice" value="bannana" > Bannana<br>
            <input type="radio" name="choice" value="vanilla" > Vanilla<br>
        </form>
        
        <br>
        <br>
        
        <tr>      
            <td>
                    Choose a Quantity																						
            </td>
            <br>

            <td>
  <!--              <div>
                    <span>
                        <button class="myButtonQ" type="button" data-sign="-">-</button>
                    </span>
                    <input class="name" id="" name="" value="0">
                    <span>
                        <button class="myButtonQ" type="button" data-sign="+">+</button>
                    </span>
                    

                </div>-->
                
              
    
                    <form method="post" action="">
                      <div class="numbers-row">
                        <!--<label for="name">Choose a Quantity</label>-->
                        <!--<input type="text" name="french-hens" class="name" value="0">-->
                      </div>
               
    				</form>
            </td>
        </tr>
        
<hr>
        
        <form action="">
            <p>Choose your topping</p>
            
            <input type="checkbox" name="choice" value="oreo" > Oreo<br>
            <input type="checkbox" name="choice" value="caramel" > Caramel<br>
            <input type="checkbox" name="choice" value="fudge" > Fudge<br>
               
            <input type="checkbox" name="choice" value="nuts" > Nuts<br>
            <input type="checkbox" name="choice" value="caramel" > Caramel<br>
            <input type="checkbox" name="choice" value="fudge" > Fudge<br>
            
            <br>
            
            <button class="myButton" type="submit" name="submit" value="add">Add to Order</button>
        </form>

</section>
        
        
<section id="secondcontent">
    <h1>
	Order Detail
	</h1>
</section>
        
        
        


    


<!-----Footer-------------------->
<footer>
    <section class="layout">
        
        
    </section>
</footer>

    </div>
</body>
</html>
