<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c027c84179e             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; class Comment extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto kicwiowcogmauwiy; } if (is_admin()) { goto cwswueuqoamqasya; } Form::symcgieuakksimmu(); Theme::symcgieuakksimmu(); goto kaiesowkgwogqseg; kicwiowcogmauwiy: Ajax::symcgieuakksimmu(); goto kaiesowkgwogqseg; cwswueuqoamqasya: Admin::symcgieuakksimmu(); Setting::symcgieuakksimmu(); kaiesowkgwogqseg: } }
