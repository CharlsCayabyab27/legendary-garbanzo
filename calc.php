<html>
<head><title>Calculation Result</title></head>
<body>
<?php
    if (is_numeric($_POST['val1']) && is_numeric($_POST['val2'])) {
        if (isset($_POST['calc'])) {
                switch($_POST['calc']){
                    case 'add':
                               $result = $_POST['val1'] + $_POST['val2'];
                              break;
                    case 'sub':
                        $result = $_POST['val1'] - $_POST['val2'];
                          break;
                    case 'mul':
                        $result = $_POST['val1']* $_POST['val2'];
                           # code...
                              break;
                    case 'div':
                        $result = $_POST['val1'] / $_POST['val2'];
                               # code...
                                  break;
     
            }

            echo "Calculation result: $result";
        }
    } else 
        echo "Invalid entry - please retry";
    
    ?>
</body>
</html>