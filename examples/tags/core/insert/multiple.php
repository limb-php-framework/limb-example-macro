<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: multiple.php 5021 2007-02-12 13:04:07Z pachanga $
 * @package    macro_examples
 */

require_once 'limb/macro/common.inc.php';
require_once 'limb/macro/src/lmbMacroTemplate.class.php';

$page = new lmbMacroTemplate('multiple_wrap/multiple.html');
echo $page->render();

?>
