<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             615d8e8e8d637             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\165\x73\x65\162\x5f\151\144"; const COMMENT_ALERTS = "\x63\x6f\x6d\x6d\x65\x6e\164\137\141\x6c\x65\162\x74\163"; public function skiywicuqacekmuw($post = null) { goto ggqeakyaggiuegek; usgcoawgqswoeiec: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); goto qowcwmsiyscackaa; ggqeakyaggiuegek: $post = ManipulatePost::get($post); goto usgcoawgqswoeiec; aqigiwmamkowomiw: return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\x6d\155\145\x6e\164\x73"); goto qesqgumuouyymcwa; qowcwmsiyscackaa: $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); goto aqigiwmamkowomiw; qesqgumuouyymcwa: } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\160\x6c\x79\164\157\143\157\155"]); } }
