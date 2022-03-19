<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236561abfe21             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\163\x65\162\x5f\x69\144"; const cqmeioumqiogmuog = "\143\157\155\155\x65\156\x74\137\x61\154\145\162\164\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\155\155\145\156\164\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\160\x6c\x79\x74\157\143\x6f\155"]); } }
