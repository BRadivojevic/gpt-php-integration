<?php
header('Content-Type: application/json');
// TODO: generate file from template; placeholder:
$name = preg_replace('/[^a-z0-9_.-]/i', '_', $_POST['name'] ?? 'file.txt');
file_put_contents(sys_get_temp_dir()."/$name", "demo");
echo json_encode(['ok'=>true,'file'=>$name]);
