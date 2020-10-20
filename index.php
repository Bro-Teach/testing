<!DOCTYPE html>
<html>
    <head>
        <title>days of week</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        	echo "ថ្ងៃ";
        	switch (date("l")) {
            	case "Sunday": echo "អាទិត្យ"; break;
                case "Monday": echo "ច័ន្ទ"; break;
                case "Tuesday": echo "អង្គារ"; break;
                case "Wednesday": echo "ពុធ"; break;
                case "Thursday": echo "ព្រហស្បតិ៍"; break;
                case "Friday": echo "សុក្រ"; break;
                case "Saturday": echo "សៅរ៍"; break;
            }
        ?>
    </body>
</html>
