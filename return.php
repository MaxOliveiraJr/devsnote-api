<?php

header("Access-Control-Allow-origin:*");
header("Access-Control-Allow-Methods:GET,POST,PUT,DELETE,OPTIONS");
header("Content-Type:Application/json");
echo json_encode($array);
exit;
