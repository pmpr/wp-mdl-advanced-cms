<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c066caec9a8             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\x75\163\145\x72\137\151\x64"; const COMMENT_ALERTS = "\143\x6f\155\155\x65\156\164\x5f\x61\154\145\x72\164\x73"; public function skiywicuqacekmuw($post = null) { $post = ManipulatePost::get($post); $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\157\x6d\x6d\145\156\164\x73"); } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\160\154\171\x74\157\x63\x6f\155"]); } }
