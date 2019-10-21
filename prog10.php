<!DOCTYPE html>
<html>
    <head>
        <title>Prog 10</title>
    </head>
    <body>
        <?php
            function printer($data)
            {
                for($i=0;$i<count($data);$i++)
                {
                    echo '<h5>' . $data[$i][0] ." ". $data[$i][1] . '</h5>';
                }
            }

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "prog10";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            $sql = "SELECT usn, name FROM Student";
            $result = $conn->query($sql);
            $data = Array();
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = Array($row["usn"],$row["name"]);
                }
            } 
            echo '<h1 style="color:red">Before</h1>';
            printer($data);
            for($i = 0; $i<count($data)-1;$i++)
            {
                $min = 100;
                $index = -1;
                for ($j=$i; $j<count($data);$j++)
                {
                    if($data[$j][0]<=$min)
                    {
                        $min = $data[$j][0];
                        $index = $j;
                    }
                }
                $temp = $data[$index];
                $data[$index] = $data[$i];
                $data[$i] = $temp;
            }
            echo '<h1 style="color:blue">After</h1>';
            printer($data);
            $conn->close();
        ?>
    </body>
</html>