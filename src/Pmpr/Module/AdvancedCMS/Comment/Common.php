<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6256c1a44c458             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\x73\x65\162\137\x69\x64"; const cqmeioumqiogmuog = "\x63\157\x6d\155\145\156\x74\137\141\x6c\x65\162\164\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\x6e\x64\145\x72\x5f\x63\x6f\155\155\145\x6e\x74\x73\x5f\160\x6f\x73\164\137\164\171\160\x65\x73"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\x6f\155\x6d\x65\156\164\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\160\154\x79\x74\x6f\x63\157\155"]); } }
