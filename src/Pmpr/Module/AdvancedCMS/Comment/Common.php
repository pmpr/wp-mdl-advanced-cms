<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6327538adab60             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\x73\145\162\137\x69\144"; const cqmeioumqiogmuog = "\x63\x6f\x6d\155\145\x6e\x74\137\141\x6c\145\x72\164\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\145\156\144\x65\162\x5f\x63\x6f\x6d\x6d\x65\x6e\x74\x73\137\160\x6f\163\x74\137\x74\x79\x70\x65\163"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\x6d\x6d\x65\x6e\164\163"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\154\x79\x74\x6f\143\x6f\x6d"]); } }
