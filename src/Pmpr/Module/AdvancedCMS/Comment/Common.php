<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62cb912a6978c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Module\AdvancedCMS\Container; class Common extends Container { const wcigqgscaeeqiigq = "\x75\163\145\162\137\x69\x64"; const cqmeioumqiogmuog = "\143\157\155\155\145\x6e\x74\137\141\x6c\145\162\x74\x73"; public function skiywicuqacekmuw($post = null) : bool { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::wiqwcgqiqagcucam, []); $csqgaqmimuoawiym = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\145\156\144\145\x72\137\143\157\155\155\145\156\164\x73\x5f\x70\157\163\x74\x5f\164\171\x70\x65\163"), $csqgaqmimuoawiym, $post, $useksmwkuswkwcqg); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym, true) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\x6d\x6d\x65\x6e\164\x73"); } public function bwuyeikikkcmqokm() : bool { return isset($_GET["\x72\145\x70\x6c\171\x74\157\x63\157\155"]); } }
