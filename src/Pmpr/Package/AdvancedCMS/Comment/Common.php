<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             615d91b157747             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\165\x73\145\162\x5f\151\144"; const COMMENT_ALERTS = "\143\x6f\x6d\x6d\x65\x6e\x74\x5f\x61\x6c\x65\x72\164\163"; public function skiywicuqacekmuw($post = null) { goto ggqeakyaggiuegek; ggqeakyaggiuegek: $post = ManipulatePost::get($post); goto usgcoawgqswoeiec; qowcwmsiyscackaa: $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); goto aqigiwmamkowomiw; usgcoawgqswoeiec: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); goto qowcwmsiyscackaa; aqigiwmamkowomiw: return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\x63\157\155\x6d\145\x6e\164\x73"); goto qesqgumuouyymcwa; qesqgumuouyymcwa: } public function bwuyeikikkcmqokm() { return isset($_GET["\162\x65\160\x6c\x79\164\x6f\x63\x6f\155"]); } }
