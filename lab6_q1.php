<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 6 Q1</title>
        <style>
             table, tr, td {
            border: 1px solid;
            border-collapse: collapse;
        }    
        </style>
    </head>
    <body>
        <?php
        $name = "TENGKU MUAHHAMAD MUZAFFAR BIN TENGKU MASLY MOHD GADAFI";
        $matric_num = "DI220178";
        $course = "Information Technology";
        $yearOfStudy = 2;
        $address = "34, Jalan Omar, Bandar Batu Pahat Johor";
        ?>
        <table>
            <tr>
                <td>Name</td>
                <td><?php echo "$name"; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo "$matric_num"; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo "$course"; ?></td>
            </tr>
            <tr>
                <td>Year Of Study</td>
                <td><?php echo "$yearOfStudy"; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo "$address"; ?></td>
            </tr>
        </table>

    </body>
</html>