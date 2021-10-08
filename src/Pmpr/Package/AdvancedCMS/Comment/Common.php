<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6160476918f4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\165\163\145\x72\x5f\151\144"; const COMMENT_ALERTS = "\143\x6f\155\x6d\145\156\164\x5f\x61\x6c\x65\162\164\163"; public function skiywicuqacekmuw($post = null) { goto csyoimsqgwcmiwki; csyoimsqgwcmiwki: $post = ManipulatePost::get($post); goto ggqwcqssoauckuic; mmkoqmccusoeaoyi: return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\x6d\x6d\x65\x6e\164\163"); goto waewaiuiogywqigu; ggqwcqssoauckuic: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); goto ggwcauaeuagekeyo; ggwcauaeuagekeyo: $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); goto mmkoqmccusoeaoyi; waewaiuiogywqigu: } public function bwuyeikikkcmqokm() { return isset($_GET["\x72\x65\x70\154\x79\x74\157\143\157\155"]); } }
