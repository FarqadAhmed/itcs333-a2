<?php
// URL (link to fetch data from the Bahrain Open Data Portal API)
$url= "https://data.gov.bh/api/explore/v2.1/catalog/datasets/01-statistics-of-students-nationalities_updated/records?where=colleges%20like%20%22IT%22%20AND%20the_programs%20like%20%22bachelor%22&limit=100";

// Fetch the data from API
$response= file_get_contents($url);

// decode the JSON response
$data = json_decode($response , true);

?>

<html>
<head>
    <Style>
      /* Main heading (h1) style */
     h1 {
     text-align: center;
    margin-bottom: 15px;
        }
     /* table style  */
     table {
            width: 70%;
            margin: 0 auto;
          
        }
        /* td and th style inside table */
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        
    </Style>
  

    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- pico CSS  minimal styles  -->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
    <body>
        <main>
            <h1 >University of Bahrain Students Enrollment Data by Nationality</h1>
<!-- Pico CSS Overflow Auto -->
<div class="overflow-auto">
    <!-- Pico CSS Table striped  -->
            <table class="striped">
    <!-- Table headers for UOB Student Data -->
  <thead>
    <tr>
        <th>Year</th>
        <th>Semester</th>
        <th>The programs</th>
        <th>Natiotnality</th>
        <th>Colleges</th>
        <th>Number Of Students</th>
    </tr>
  </thead>
    <!-- Table Body for UOB Student Data -->
<tbody>
<!-- extract results -->
<?php $results=$data["results"];
?>

<!-- Check if record empty OR Not -->
<?php if(!$data || !isset($data["results"])){
    die('error fetching the data from API');
}
?>
<? php
else
?>
<!-- Loop to display data for each student  -->
<?php
foreach($results as $student)
{
    ?>
    <tr>
    <td><?php echo $student["year"];?></td>
    <td><?php echo $student["semester"];?></td>
    <td><?php echo $student["the_programs"];?></td>
    <td><?php echo $student["nationality"];?></td>
    <td><?php echo $student["colleges"];?></td>
    <td><?php echo $student["number_of_students"];?></td>
    </tr>

    <?php

}
         ?>   

</tbody>
</table>
</div>
    </body>
    </main>
</html>

