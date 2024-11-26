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
    <title>University of Bahrain Students Enrollment Data by Nationality</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- pico CSS  minimal styles  -->
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
    <body>
<!-- Pico CSS Overflow Auto -->
<div class="overflow-auto">
</div>
    </body>
</html>

