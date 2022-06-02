<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6299308b147b9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\x73\x65\x72\137\x69\144"; const cqmeioumqiogmuog = "\x63\157\155\x6d\x65\156\x74\137\x61\x6c\x65\162\164\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\156\144\145\162\x5f\x63\157\155\x6d\x65\x6e\x74\x73\137\160\x6f\x73\164\x5f\x74\171\160\x65\x73"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\x6f\x6d\x6d\145\156\164\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\x65\160\154\x79\164\x6f\143\x6f\155"]); } }
