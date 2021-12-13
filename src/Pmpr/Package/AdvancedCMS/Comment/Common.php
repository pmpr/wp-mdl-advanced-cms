<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b74f31bc925             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\x75\163\x65\162\137\x69\144"; const COMMENT_ALERTS = "\x63\157\x6d\155\x65\156\x74\137\x61\x6c\145\162\164\x73"; public function skiywicuqacekmuw($post = null) { goto oskwwcgyuwkiuacu; ccqkugckigeckeqa: return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\155\155\x65\x6e\164\163"); goto waaammoiumecaiys; oskwwcgyuwkiuacu: $post = ManipulatePost::get($post); goto qsecoiqswyiseake; swkukukimeueycaq: $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); goto ccqkugckigeckeqa; qsecoiqswyiseake: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); goto swkukukimeueycaq; waaammoiumecaiys: } public function bwuyeikikkcmqokm() { return isset($_GET["\x72\145\x70\x6c\x79\164\x6f\x63\157\x6d"]); } }
