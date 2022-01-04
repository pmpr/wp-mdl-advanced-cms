<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61d45eee7c0b2             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\x73\145\162\137\151\144"; const cqmeioumqiogmuog = "\143\x6f\155\155\x65\x6e\x74\x5f\141\x6c\x65\x72\164\x73"; public function skiywicuqacekmuw($post = null) { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::miemwgakuokqyoqo, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\x6d\155\x65\x6e\x74\163"); } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\160\x6c\x79\164\157\x63\x6f\155"]); } }
