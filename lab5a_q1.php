<!DOCTYPE html>
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 
        $name = "Nur Fatin Nazifa Binti Mohd Nazlan";
        $matric_number = "CI220011";
        $course = "Bachelor In Computer Science (Information Security) with Honors";
        $year_of_study = "Year 3";
        $address = "1864, Jalan Pulai Jaya 52, Bandar Pulai Jaya, Johor";
    ?>

    <table border="1">
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td> 
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td> 
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td> 
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td> 
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td> 
        </tr>
    </table>
    
</body>
</html>
