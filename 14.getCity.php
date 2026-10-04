<?php

$country = $_GET["country"] ?? "";


if ($country == "Nepal") {

    echo "<option>Kathmandu</option>";
    echo "<option>Pokhara</option>";
    echo "<option>Biratnagar</option>";
    echo "<option>Butwal</option>";
    echo "<option>Lalitpur</option>";

}


elseif ($country == "India") {

    echo "<option>Delhi</option>";
    echo "<option>Mumbai</option>";
    echo "<option>Kolkata</option>";
    echo "<option>Chennai</option>";

}


elseif ($country == "China") {

    echo "<option>Beijing</option>";
    echo "<option>Shanghai</option>";
    echo "<option>Shenzhen</option>";
    echo "<option>Guangzhou</option>";

}


elseif ($country == "USA") {

    echo "<option>New York</option>";
    echo "<option>Los Angeles</option>";
    echo "<option>Chicago</option>";
    echo "<option>Houston</option>";

}


else {

    echo "<option>Select City</option>";

}

?>