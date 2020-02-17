<?php

require 'function.php';
require 'database/QueryBuilder.php';
require 'database/ConnectDb.php';

$config = require 'config.php';

return new QueryBuilder(
    ConnectDb::connect($config['database'])
);

?>