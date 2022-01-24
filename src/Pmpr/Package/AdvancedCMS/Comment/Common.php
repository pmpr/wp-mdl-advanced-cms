<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61eed0dae8e05             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\x73\145\162\x5f\151\144"; const cqmeioumqiogmuog = "\143\157\155\x6d\145\x6e\164\x5f\x61\x6c\x65\x72\164\163"; public function skiywicuqacekmuw($post = null) { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::miemwgakuokqyoqo, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\x6f\x6d\x6d\145\x6e\x74\163"); } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\x70\154\171\164\x6f\143\157\155"]); } }
