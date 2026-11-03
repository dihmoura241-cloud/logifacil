<?php
function data_file($name){ return __DIR__ . '/data/' . $name . '.json'; }
function load_data($name){ $f=data_file($name); if(!file_exists($f)) return []; $d=json_decode(file_get_contents($f),true); return is_array($d)?$d:[]; }
function save_data($name,$data){ file_put_contents(data_file($name),json_encode(array_values($data),JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE),LOCK_EX); }
function next_id($items){ $max=0; foreach($items as $i){$max=max($max,(int)($i['id']??0));} return $max+1; }
function h($v){ return htmlspecialchars((string)$v,ENT_QUOTES,'UTF-8'); }
function find_by_id($items,$id){ foreach($items as $i){if((int)$i['id']===(int)$id)return $i;} return null; }
function redirect($page,$msg=''){ header('Location: '.$page.($msg?'?msg='.urlencode($msg):'')); exit; }
?>
