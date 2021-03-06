<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: select_options_source.php 5021 2007-02-12 13:04:07Z pachanga $
 * @package    macro_examples
 */

require_once 'limb/macro/common.inc.php';
require_once 'limb/macro/src/lmbMacroTemplate.class.php';

$page = new lmbMacroTemplate('2/page.html');

$data = array(array('id' => 10, 'title' => 'First option'),
              array('id' => 20, 'title' => 'Second option'));
$page->set('my_options_source1', $data);
$page->set('my_options_source2', $data);
$page->set('my_form1', $_POST);
echo $page->render();

?>
