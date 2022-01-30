<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61f6492a91625             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; class Comment extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto ugqwuugsweqgmywk; } if (is_admin()) { goto uaukmuiwskcemcsw; } Form::symcgieuakksimmu(); Theme::symcgieuakksimmu(); goto gmwykkouysyaqwqm; ugqwuugsweqgmywk: Ajax::symcgieuakksimmu(); goto gmwykkouysyaqwqm; uaukmuiwskcemcsw: Admin::symcgieuakksimmu(); Setting::symcgieuakksimmu(); gmwykkouysyaqwqm: } }
