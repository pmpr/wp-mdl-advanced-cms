<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c039ddc40b4             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\x75\x73\x65\162\137\x69\x64"; const COMMENT_ALERTS = "\143\157\x6d\x6d\x65\x6e\164\x5f\x61\154\145\x72\x74\x73"; public function skiywicuqacekmuw($post = null) { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\x6f\x6d\155\145\156\x74\x73"); } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\x70\x6c\x79\x74\157\x63\x6f\x6d"]); } }
