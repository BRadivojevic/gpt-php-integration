<?php
header('Content-Type: application/json');
// TODO: call TTS provider with timeout & retries
echo json_encode(['ok'=>true,'audio'=>'(demo)']);
