<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id$
 * @package    macro_examples
 */

require_once 'limb/macro/common.inc.php';
require_once 'limb/macro/src/lmbMacroTemplate.class.php';

$page = new lmbMacroTemplate('2/page.html');
echo $page->render();

?>
