<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6328195a2a0d2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\163\x65\162\x5f\x69\x64"; const cqmeioumqiogmuog = "\143\157\x6d\x6d\145\156\x74\x5f\x61\154\x65\162\x74\163"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\145\x6e\144\145\x72\x5f\143\157\155\155\145\156\164\163\x5f\160\157\163\164\x5f\x74\171\x70\145\163"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\x6d\155\x65\x6e\x74\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\x65\x70\154\x79\x74\157\143\157\155"]); } }
