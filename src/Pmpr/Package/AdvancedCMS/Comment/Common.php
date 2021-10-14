<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680f16d93d1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\165\163\145\162\137\151\x64"; const COMMENT_ALERTS = "\143\x6f\155\155\x65\x6e\x74\137\141\x6c\145\162\x74\x73"; public function skiywicuqacekmuw($post = null) { goto csyoimsqgwcmiwki; csyoimsqgwcmiwki: $post = ManipulatePost::get($post); goto ggqwcqssoauckuic; mmkoqmccusoeaoyi: return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\x6f\155\155\145\156\x74\x73"); goto waewaiuiogywqigu; ggqwcqssoauckuic: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); goto ggwcauaeuagekeyo; ggwcauaeuagekeyo: $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); goto mmkoqmccusoeaoyi; waewaiuiogywqigu: } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\x70\154\x79\164\x6f\143\x6f\155"]); } }
