<?php
/**
* @version	$Id$
* @package	Joomla
* @subpackage	ClubManagement-Person
* @copyright	Copyright (c) 2014 Norbert Kümin. All rights reserved.
* @license	http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE
* @author	Norbert Kuemin
* @authorEmail	momo_102@bluemail.ch
*/

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
        <tr class="row<?php echo $i % 2; ?>">
                <td>
                        <?php echo JHtml::_('grid.id', $i, $item->id); ?>
                </td>
                <td>
                        <?php echo $item->name; ?>
                </td>
                <td>
                        <?php echo $item->firstname; ?>
                </td>
                <td>
                        <?php echo $item->address; ?>
                </td>
                <td>
                        <?php echo $item->zip; ?>
                </td>
                <td>
                        <?php echo $item->city; ?>
                </td>
                <td>
                        <?php echo $item->state; ?>
                </td>
                <td>
                        <?php echo $item->country; ?>
                </td>
        </tr>
<?php endforeach; ?>

