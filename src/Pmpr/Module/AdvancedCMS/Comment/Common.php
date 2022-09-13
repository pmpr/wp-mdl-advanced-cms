<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6320d863ebe26             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\163\x65\162\137\x69\x64"; const cqmeioumqiogmuog = "\x63\x6f\x6d\155\x65\156\164\137\x61\x6c\x65\162\164\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\x65\156\x64\145\x72\x5f\x63\x6f\155\x6d\145\x6e\164\163\x5f\160\x6f\x73\x74\137\x74\171\x70\x65\x73"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\157\x6d\x6d\145\x6e\x74\163"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\145\x70\154\171\164\157\143\157\155"]); } }
