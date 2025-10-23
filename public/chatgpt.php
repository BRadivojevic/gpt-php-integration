<?php
header('Content-Type: application/json');
$apiKey = getenv('OPENAI_API_KEY') ?: '';
if (!$apiKey) { http_response_code(500); echo json_encode(['error'=>'API key missing']); exit; }
$prompt = substr(trim($_POST['prompt'] ?? ''), 0, 4000);
if ($prompt === '') { http_response_code(400); echo json_encode(['error'=>'prompt required']); exit; }
// TODO: call OpenAI; placeholder response:
echo json_encode(['ok'=>true,'reply'=>'(demo) response for: '.$prompt]);
