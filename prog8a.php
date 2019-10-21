<!DOCTYPE html>
<html>
    <head>
        <title>Prog 8</title>
    </head>
    <body>
        <form action="prog8a.php" method="POST">
            <fieldset>
                <legend>Enter numbers</legend>
                <table>
                    <tr>
                        <td>Enter number 1</td><td><input type="number" name="firstno" required/></td>
                    </tr>
                    <tr>
                        <td>Enter number 2</td><td><input type="number" name="secondno" required/></td>                       
                    </tr>
                    <tr>
                        <td>SELECT</td>
                        <td>
                            <select name="op">
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                                <option value="%">%</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="pop" value="perform op"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <?php
            if(isset($_POST['pop']))
            {
                echo "<h1> Result is </h1>";
                $num1 = $_POST["firstno"];
                $num2 = $_POST["secondno"];
                $op = $_POST["op"];
                $result = 0;
                switch($op)
                {
                    case '+': $result = $num1 + $num2;
                                echo "<h1>Addition:" .$result ."</h1>";
                                break;
                    
                    case '-': $result = $num1 - $num2;
                    echo "<h1>Sub:" .$result ."</h1>";
                    break;

                    case '*': $result = $num1 * $num2;
                    echo "<h1>Mult:" .$result ."</h1>";
                    break;

                    case '/': if($num2 == 0){echo "<h1 style='color:red;'> DIV BY 0!</h1>"; }
                    else
                    {
                        $result = $num1 / $num2;
                        echo "<h1>Div:" .$result ."</h1>";
                        break;
                    }
                    case '%': $result = $num1 % $num2;
                    echo "<h1>Mod:" .$result ."</h1>";
                    break;
                }
            }
        ?>
    </body>
</html>