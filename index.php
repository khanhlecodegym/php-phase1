<?php

$query = require 'bootstrap.php';

$customers = $query->selectAll('customers');

include 'index.view.php'

?>