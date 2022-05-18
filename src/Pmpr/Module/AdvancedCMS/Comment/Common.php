<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6284d9a500ecb             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\163\145\162\x5f\151\144"; const cqmeioumqiogmuog = "\143\x6f\155\155\x65\x6e\x74\x5f\x61\154\145\162\x74\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\145\x6e\x64\x65\162\x5f\143\x6f\x6d\x6d\x65\x6e\164\x73\x5f\x70\157\163\x74\x5f\164\171\160\x65\163"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\x6f\155\155\145\x6e\x74\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\x70\x6c\x79\164\157\143\157\155"]); } }
