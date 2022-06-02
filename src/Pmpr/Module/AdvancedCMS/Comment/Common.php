<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62993a86bc26f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\165\x73\x65\x72\x5f\x69\x64"; const cqmeioumqiogmuog = "\x63\x6f\155\x6d\145\156\164\137\141\154\145\x72\164\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\x6e\x64\x65\162\137\x63\x6f\x6d\155\145\156\x74\x73\137\x70\157\x73\x74\x5f\x74\171\160\x65\x73"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\157\155\x6d\145\x6e\164\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\162\145\x70\154\171\x74\157\143\157\155"]); } }
