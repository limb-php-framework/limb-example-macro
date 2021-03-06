<?php
// Crude.
require './setup.php';

function contains($str, $sub) {
    return gettype(strpos($str, $sub)) == "integer";
}

if(!isset($_GET['file']))
  die('file param is not set!');

$file = $_GET['file'];

if (contains($file, "..") || contains($file, "//") || (substr($file, 0, 1) == '/'))
  exit;

$filename = './examples/' . $file;

if(!file_exists($filename))
  exit;

$filename = realpath($filename);

$dir = substr($filename, 0, strpos($filename, 'templates'));
set_include_path($dir . PATH_SEPARATOR . get_include_path());

$page = new lmbMacroTemplate('phpfile.html');
$page->set('Filename', $file);

list($compiled_name, ) = $page->compile(realpath($filename));

$highlighted_string = highlight_string(file_get_contents($compiled_name), true);

$page->set('SourceCode', $highlighted_string);
echo $page->render();
?>
