<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622ee2abb3faf             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\163\x65\162\x5f\151\x64"; const cqmeioumqiogmuog = "\x63\x6f\x6d\155\145\156\164\137\x61\x6c\x65\162\164\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\x6d\155\x65\x6e\164\163"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\145\x70\154\171\164\x6f\143\x6f\x6d"]); } }
