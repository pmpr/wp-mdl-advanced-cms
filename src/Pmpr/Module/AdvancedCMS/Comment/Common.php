<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6261a8f3145d7             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\163\x65\162\x5f\151\144"; const cqmeioumqiogmuog = "\143\x6f\x6d\x6d\145\x6e\164\137\141\154\x65\x72\x74\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\x6e\x64\x65\x72\x5f\143\x6f\155\x6d\x65\156\x74\x73\x5f\160\x6f\x73\164\x5f\164\x79\160\145\x73"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\x6d\x6d\145\156\x74\163"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\154\171\164\x6f\143\x6f\x6d"]); } }
