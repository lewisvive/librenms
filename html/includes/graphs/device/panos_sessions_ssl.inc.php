<?php

$rrd_filename = rrd_name($device['hostname'], 'panos-sessions-ssl');

$ds = 'sessions_ssl';

$colour_area = '9999cc';
$colour_line = '0000cc';

$colour_area_max = '9999cc';

$graph_max = 1;

$unit_text = 'SSL Sessions';

require 'includes/graphs/generic_simplex.inc.php';
