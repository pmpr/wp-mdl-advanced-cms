<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             623bb95d2d887             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\TableOfContent; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Widget as BaseClass; class Widget extends BaseClass { const ayscagukkeoucmoe = "\143\157\154\154\x61\160\163\151\x62\154\145"; public function __construct() { parent::__construct(__("\124\x61\142\x6c\x65\x20\157\146\40\103\x6f\156\x74\x65\x6e\164\x73", PR__PKG__ADVANCED_CMS), __("\104\151\x73\x70\x6c\141\171\40\x74\150\145\40\164\x61\142\x6c\x65\x20\x6f\x66\x20\143\157\156\164\x65\156\x74\x73\x2e", PR__PKG__ADVANCED_CMS), "\x74\157\x63"); } public function ugmceccgwaaaigiy() : array { return [self::qescuiwgsyuikume => ["\x6e\x61\x6d\x65" => __("\x54\151\164\154\145", PR__PKG__ADVANCED_CMS)], self::ayscagukkeoucmoe => ["\x74\171\x70\145" => "\x63\150\145\x63\x6b\x62\x6f\x78", "\156\141\155\145" => __("\x43\x6f\x6c\154\141\x70\163\x69\x62\x6c\x65", PR__PKG__ADVANCED_CMS)]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { $qookweymeqawmcwo = ManipulateFormat::omaawkkwwyesqwcc($owgumcsyqsamiemg, [self::qescuiwgsyuikume => __("\x54\x61\x62\x6c\x65\40\157\x66\40\x43\157\156\x74\x65\x6e\x74", PR__PKG__ADVANCED_CMS), "\150\x69\144\145\137\164\x69\164\154\145" => __("\x43\154\x6f\x73\x65", PR__PKG__ADVANCED_CMS), "\x73\x68\x6f\167\x5f\164\x69\164\154\145" => __("\123\x68\157\167", PR__PKG__ADVANCED_CMS), "\143\x6f\x6c\x6c\141\x70\x73\x69\142\x6c\145" => true]); $post = ManipulatePost::get(); $qookweymeqawmcwo = $this->sscegwueamckwmcy("{$this->id_base}\x5f\162\x65\156\x64\x65\162\x5f\141\162\147\163", $qookweymeqawmcwo, $post); $qookweymeqawmcwo["\x68\145\141\x64\x69\156\147\163"] = Generator::symcgieuakksimmu()->uioymssscymciyca(ManipulatePost::souwykwwmyygqyqi($post, false), $ywmkwiwkosakssii); return $qookweymeqawmcwo; } public function qoqyomiqwooaeoiy($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = [], $qookweymeqawmcwo = []) : bool { $yciaosuiyeieceug = false; $post = ManipulatePost::get(); if (!$post) { goto qyyyycwaookqaoke; } $acksemyqewqyciao = TableOfContent::symcgieuakksimmu(); $sqeykgyoooqysmca = ManipulatePost::gueasuouwqysmomu($post); $yciaosuiyeieceug = in_array($sqeykgyoooqysmca, $acksemyqewqyciao->esciskwmewkgwaik()) && !in_array(ManipulatePost::mwikyscisascoeea($post), $acksemyqewqyciao->weysguygiseoukqw(Setting::ocsiqccyawmwcawm, [])); qyyyycwaookqaoke: return $yciaosuiyeieceug; } }
