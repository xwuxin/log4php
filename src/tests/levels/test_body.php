<?php
/**
 * Copyright 2004 The Apache Software Foundation.
 *
 * This software is published under the terms of the Apache Software
 * License version 2.0, a copy of which has been included with this
 * distribution in the LICENSE file.
 * 
 * @package tests
 * @author Marco V. <marco@apache.org>
 * @subpackage levels
 * @version $Revision$
 * @since 0.6
 */

/**
 */
require_once('./MyLoggerLevel.php');
 
$mylogger =& LoggerManager::getLogger('mylogger');

$mylogger->log(MyLoggerLevel::getLevelTrace(), 'this is a TRACE log generated by main() function');
$mylogger->debug('this is a DEBUG log generated by main() function');
$mylogger->info('this is an INFO log generated by main() function');
$mylogger->warn('this is a WARN log generated by main() function');
$mylogger->error('this is an ERROR log generated by main() function');
$mylogger->fatal('this is a FATAL log generated by main() function');
$mylogger->log(MyLoggerLevel::getLevelLethal(), 'this is a LETHAL log generated by main() function');

?>