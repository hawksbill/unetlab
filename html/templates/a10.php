<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/a10.php
 *
 * a10 template for UNetLab.
 * You should have received a copy of the GNU General Public License
 * along with UNetLab. If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrea Dainese <andrea.dainese@gmail.com>
 * @copyright 2014-2016 Andrea Dainese
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @link http://www.unetlab.com/
 * @version 20151116
 */

$p['type'] = 'qemu';
$p['name'] = 'A10';
$p['icon'] = 'Firewall.png';
$p['cpu'] = 1;
$p['ram'] = 2048;
$p['ethernet'] = 3;
$p['console'] = 'telnet';
$p['qemu_arch'] = 'x86_64';
$p['qemu_nic'] = 'virtio-net-pci';
$p['qemu_options'] = '-machine type=pc-1.0,accel=kvm -nographic -rtc base=utc';
?>
