<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621bc57da6dfa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating\Model; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Model as BaseClass; abstract class Model extends BaseClass { public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::mswoacegomcucaik: $post = ManipulatePost::get($eqgoocgaqwqcimie); if (!$post) { goto yowsmsiyimmimemc; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorPost::yyykkcyiksewsoqy($post), ManipulatePost::qcgakseyaikigqco($post)); yowsmsiyimmimemc: goto eqkauqciwewmgeoi; case self::iockmgiyoygcswog: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie); if (!$mkucggyaiaukqoce) { goto kiqogmwcgcamwiig; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)); kiqogmwcgcamwiig: } kwagwqyusyiyoaqs: eqkauqciwewmgeoi: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $post = ManipulatePost::get(ManipulateArray::get($igqsaukqcqscimok, self::mswoacegomcucaik), self::ckmqoekmugkggeym, true); if (!$post) { goto iomcaiwewsawiamu; } $ccowyogiqwikkkie["\163\150\x6f\x77\137\x70\x6f\x73\164"] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\162\145\x66" => ManipulatePost::ycqquoiyyuesegsy($post)], __("\x53\150\x6f\167\x20\120\157\x73\x74", PR__PKG__ADVANCED_CMS)); iomcaiwewsawiamu: return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } }
