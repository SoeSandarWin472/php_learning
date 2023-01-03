<?php
$config = require 'config.php';

require 'core/functions.php';

require 'Database/Connection.php';
require 'Database/QueryBulider.php';

$query = new QueryBulider(Connection::make($config['database']));

?>
