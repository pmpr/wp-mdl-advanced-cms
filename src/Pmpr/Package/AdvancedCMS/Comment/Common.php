<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe12c38792             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Package\AdvancedCMS\Container; class Common extends Container { const USER_ID_FIELD = "\x75\163\x65\x72\137\x69\144"; const COMMENT_ALERTS = "\143\x6f\155\155\145\x6e\164\137\141\x6c\145\162\164\163"; public function skiywicuqacekmuw($post = null) { goto meqmcgmksqiqcoyq; meqmcgmksqiqcoyq: $post = ManipulatePost::get($post); goto euskosgaksmimgug; iusaeoimukymskgs: $csqgaqmimuoawiym = (array) $this->weysguygiseoukqw(Setting::TARGET_POST_TYPES, []); goto asciaakaoygususy; euskosgaksmimgug: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); goto iusaeoimukymskgs; asciaakaoygususy: return $post && comments_open($post) && in_array($useksmwkuswkwcqg, $csqgaqmimuoawiym) && DecoratorPost::aukcwycsusueciec($useksmwkuswkwcqg, "\143\x6f\x6d\x6d\145\156\164\x73"); goto eaggoasiwogmquwc; eaggoasiwogmquwc: } public function bwuyeikikkcmqokm() { return isset($_GET["\x72\145\160\x6c\171\x74\x6f\x63\x6f\155"]); } }
