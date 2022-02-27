<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621bc57da6dfa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\163\x65\162\x5f\x69\144"; const cqmeioumqiogmuog = "\x63\x6f\155\x6d\x65\156\x74\137\141\x6c\145\x72\x74\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::miemwgakuokqyoqo, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\155\155\x65\156\164\163"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\160\x6c\x79\164\157\143\157\x6d"]); } }
