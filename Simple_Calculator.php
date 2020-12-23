<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="width:800px;margin:0 auto; background-color:#ddd; height:400px;">
        <section>
        <h1 style="background-color:#34495e; color:white; text-align:center;">THis is my first PHP practice</h1>
        </section>

        <div style="margin-left:20px;">

         
          <form action="" method="post">

             <table>
         
                  <tr>
                  <td>Enter the first Number:</td>
                  <td><input type="number" name="num1"></td>
                  </tr>

                  <tr>
                  <td>Enter the second Number:</td>
                  <td><input type="number" name="num2"></td>
                  </tr>

                  <tr>
                  <td></td>
                  <td><input type="submit" name="calculation" value="Calculate"></td>
                  </tr>
         
              </table>

              <?php 
              
               if(isset($_POST['calculation']))
                 
                 {
                     $valueone=$_POST['num1'];
                     $valuetwo=$_POST['num2'];

                     if(empty($valueone) or empty($valuetwo))
                       {
                           echo "<span style='color:red;'>Please Enter Both Value</span> <br>";
                       }

                       else
                       {
                           echo "First value is:".$valueone."<br>"."Second value is:".$valuetwo."<br>";
                           class Calculation{

                            public function add($a,$b){
                                echo "Sumetion:".($a+$b)."<br>";
                            }

                            public function sub($a,$b){
                                echo "Substraction:".($a-$b)."<br>";
                            }

                            public function div($a,$b){
                                echo "Devition:".($a/$b)."<br>";
                            }

                            public function mul($a,$b){
                                echo "Multiplication:".($a*$b)."<br>";
                            }

                         } 

                         $cal=new Calculation;

                         $cal->add($valueone, $valuetwo);
                         $cal->sub($valueone, $valuetwo);
                         $cal->div($valueone, $valuetwo);
                         $cal->mul($valueone, $valuetwo);
                           
                       }
                 }
              
              
              
              ?>
  
          </form>

        </div>  

        
    </div>
    
</body>
</html>