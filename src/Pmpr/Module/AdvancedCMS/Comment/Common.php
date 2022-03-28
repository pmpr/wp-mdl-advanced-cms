<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62419c781800a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\x73\x65\162\137\x69\x64"; const cqmeioumqiogmuog = "\x63\x6f\x6d\x6d\x65\x6e\x74\x5f\141\154\x65\162\x74\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\x6d\x6d\x65\156\x74\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\160\x6c\x79\x74\157\143\157\x6d"]); } }
