<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61fec342ce1a4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Manipulate\ManipulateAjax; class Comment extends Common { public function __construct() { parent::__construct(); $this->iemaakgqgqosiecm(); } public function iemaakgqgqosiecm() { if (ManipulateAjax::mcgoysmkqsqooceq()) { goto gygawoqywkukmqee; } if (is_admin()) { goto kciouyuaqkyqomam; } Form::symcgieuakksimmu(); Theme::symcgieuakksimmu(); goto sycygoiaiqqageym; gygawoqywkukmqee: Ajax::symcgieuakksimmu(); goto sycygoiaiqqageym; kciouyuaqkyqomam: Admin::symcgieuakksimmu(); Setting::symcgieuakksimmu(); sycygoiaiqqageym: } }
