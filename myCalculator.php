<!DOCTYPE html>
<?php
//originally designed as part of a webpage.
?>
<html>
    <!-- A box-->
    <style>
        h1{text-align: center;}
        .center {
            margin: auto;
            width: 50%;
            border: 3px solid green;
            padding: 10px;
        }
    </style>
    
    <header> 
            
        <h1> Calculator </h1>
    </header>
    <?php
    //The calculator itself
        $answer = 0;
        if(isset($_POST['operator'])){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $operand=$_POST['operator'];
            // echo " operand = \"$operand\"";
            if($operand =='+'){
                $answer = $num1 + $num2;
            }else if($operand == '-'){
                $answer = $num1 - $num2;
            }else if($operand == '*'){
                $answer = $num1 * $num2;
            }else if($operand == '/'){
                $answer = $num1/$num2;
            }
            // echo "<p>$num1 $op $num2 = $answer</p>";
        }
    ?>
    <!-- Rest of the webpage. Radio buttons, text boxes, a button, etc-->
    <body>
        <div class = "center">
                    <form method="POST" action = "calculator.php">
                    <label for="num1"> First Number</label><br>
                    <input type="number" name="num1" id ="num1"/><br>

                    <label for="num2"> Second Number </label><br>
                    <input type="number" name="num2" id ="num2" /><br>

                    <label for="field3"> Output: </label><br>
                    
                    <input type="text" value=<?php echo $answer; ?> id ="field3" /><br>
        
                    <input type="submit" value="submit"><br>
                    <br>

                    <input type="radio" name="operator" id="addition" value="+">
                    <label for="addition">+</label><br>
                    <input type="radio" name="operator" id="subtraction" value="-">
                    <label for="subtraction">-</label><br>
                    <input type="radio" name="operator" id="multiply" value="*">
                    <label for="multiply">*</label><br>
                    <input type="radio" name="operator" id="division" value="/">
                    <label for="division">/</label><br>
                </form>
        </table>
    </body>
</html>
