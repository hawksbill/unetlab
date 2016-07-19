<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/coeus.php
 *
 * coeus template for UNetLab.
 * You should have received a copy of the GNU General Public License
 * along with UNetLab.If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrea Dainese <andrea.dainese@gmail.com>
 * @copyright 2014-2016 Andrea Dainese
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @link http://www.unetlab.com/
 * @version 20160719
 */

$p['type'] = 'qemu';
$p['name'] = 'WSA'; 
$p['icon'] = 'WSA.png';
$p['cpu'] = 1;
$p['ram'] = 4096; 
$p['ethernet'] = 3; 
$p['console'] = 'telnet'; 
$p['qemu_arch'] = 'x86_64';
$p['qemu_options'] = '-machine type=pc-1.0,accel=kvm -nographic -rtc base=utc';
?>
