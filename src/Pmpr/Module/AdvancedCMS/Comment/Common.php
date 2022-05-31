<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6296530e85361             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\x73\x65\162\137\151\x64"; const cqmeioumqiogmuog = "\143\x6f\155\155\145\156\164\x5f\x61\x6c\145\x72\x74\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\145\x6e\x64\x65\x72\137\143\x6f\x6d\155\x65\x6e\164\x73\137\160\x6f\163\164\137\x74\171\160\x65\163"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\157\x6d\155\145\156\164\163"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\160\x6c\x79\x74\x6f\x63\x6f\155"]); } }
