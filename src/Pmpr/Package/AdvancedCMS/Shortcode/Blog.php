<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6160476918f4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Shortcode; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Package\AdvancedCMS\Metadata\Stat; class Blog extends Segment { const STATS = "\x73\164\141\164\163"; public function __construct() { $this->target = self::FULLWIDTH_TARGETS; parent::__construct(); } public function gogaagekwoisaqgu() { $this->icon = IconFontawesomeInterface::ICON_BLOG; $this->title = sprintf("\45\163\40\50\45\x73\x29", __("\x42\x6c\157\147", PR__PKG__ADVANCED_CMS), __("\120\157\x73\164\163", PR__PKG__ADVANCED_CMS)); } public function gkoiuyagqcoecigk() { parent::gkoiuyagqcoecigk(); add_shortcode("\142\x6f\151\x6c\145\x72\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\x73\x65\x61\143\x71\x69\155\145\x63\x77\147\x67\x61\153\167"]); } public function ecwgiiuacoaokqkw() { $this->aucimgwswmgaocae($this->kwosaecaikgmoeyo()->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::ORDERBY, __("\117\x72\x64\145\162\40\142\171", PR__PKG__ADVANCED_CMS), ["\144\x61\x74\x65" => __("\116\x65\x77\145\163\x74", PR__PKG__ADVANCED_CMS)]))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::STATS, __("\123\164\141\x74\x73", PR__PKG__ADVANCED_CMS), Stat::symcgieuakksimmu()->sksykqasgyyyqkie()))->ewweaossowcqywaw($this->swoqymqskqesekok())->mkksewyosgeumwsa(self::sciaycsmsiekqueg("\x63\x61\154\154\137\x74\x6f\137\x61\143\164\151\157\156\137\144\145\163\143", __("\x43\x61\154\154\40\x74\157\x20\101\x63\x74\151\x6f\156\x20\x44\x65\163\143\x72\151\160\x74\x69\157\x6e", PR__PKG__ADVANCED_CMS))->gsomueooycksswcy())->mkksewyosgeumwsa(self::ymuegqgyuagyucws("\x63\141\x6c\154\x5f\x74\157\x5f\x61\143\164\151\x6f\x6e\x5f\164\x65\x78\164", __("\103\141\x6c\x6c\x20\164\x6f\40\101\x63\x74\151\157\x6e\40\124\x65\x78\x74", PR__PKG__ADVANCED_CMS)))); } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { goto kuewoymyameyusgi; ocqocwcocigwogao: $wwgucssaecqekuek[self::STATS] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\x74\141\144\141\164\141\137\x73\x74\x61\x74\x5f\x67\x65\x74\x5f\x68\x74\x6d\154"), '', [self::INCLUDE => ManipulateArray::get($wwgucssaecqekuek, self::STATS, self::ALL), self::POST_TYPE => self::POST]); goto aygymyyeaiouckwm; saqssgocioekcyik: $wwgucssaecqekuek[self::PERMALINK] = ManipulatePage::symuoymymumgwkaw(); goto ocqocwcocigwogao; kuewoymyameyusgi: $wwgucssaecqekuek[self::ITEMS] = ManipulatePost::ciugwooasaqcywas("\x70\x6f\163\164", [self::ORDER => "\104\105\x53\103", self::ORDERBY => ManipulateArray::get($wwgucssaecqekuek, self::ORDERBY, "\144\x61\164\145"), self::POSTS_PER_PAGE => 4]); goto saqssgocioekcyik; aygymyyeaiouckwm: return parent::kyaweigsqwomykaa($wwgucssaecqekuek); goto cqggosuciisguwka; cqggosuciisguwka: } }
