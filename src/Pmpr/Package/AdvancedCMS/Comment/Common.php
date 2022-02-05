<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61fec342ce1a4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\x73\x65\162\137\x69\x64"; const cqmeioumqiogmuog = "\x63\157\155\155\145\156\164\137\141\x6c\145\162\164\x73"; public function skiywicuqacekmuw($post = null) { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::miemwgakuokqyoqo, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\155\155\x65\156\164\x73"); } public function bwuyeikikkcmqokm() { return isset($_GET["\162\145\x70\x6c\171\x74\157\143\157\x6d"]); } }
