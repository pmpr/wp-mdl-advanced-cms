<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6267964e7b526             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\163\x65\162\x5f\151\x64"; const cqmeioumqiogmuog = "\x63\157\x6d\x6d\x65\x6e\x74\137\x61\154\x65\162\164\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\145\x6e\x64\x65\x72\137\x63\157\x6d\x6d\145\156\164\x73\137\160\157\163\x74\137\x74\171\x70\145\x73"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\157\155\x6d\145\156\x74\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\x6c\x79\164\157\143\x6f\155"]); } }
