<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624bfa3fdf85f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Relation\Manager\TaxonomyManager; use Pmpr\Module\AdvancedCMS\Relation\Setting; use WP_Term; class Taxonomy extends Entity { public function __construct() { $this->name = self::gmmygyiecgmggaam; $this->title = __("\x54\141\170\157\156\x6f\155\x79\x20\x52\145\154\x61\x74\151\x6f\156\163", PR__MDL__ADVANCED_CMS); parent::__construct(); } public function init() { parent::init(); $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag()); foreach ($oammesyieqmwuwyi as $uusmaiomayssaecw => $igqsaukqcqscimok) { foreach ($igqsaukqcqscimok as $ayegqaqygsqsmews) { $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{self::igecewwoemccgwsq}}\137\x65\x64\x69\x74\137\146\157\162\155\x5f\x66\x69\x65\154\144\163", [$this, "\x71\x61\x61\143\x67\x79\x79\x75\x71\x75\x73\x65\153\167\171\141"], 10, 2); if (!$ayegqaqygsqsmews->{self::iycuamekoueuemoy}) { goto yqagomygmeoecwey; } $this->qcsmikeggeemccuu("{$ayegqaqygsqsmews->{self::gygsikewooaciecc}}\x5f\x65\x64\151\164\x5f\x66\x6f\x72\155\137\x66\x69\x65\154\x64\163", [$this, "\161\x61\x61\143\147\x79\x79\165\161\165\x73\x65\153\x77\x79\x61"], 10, 2); yqagomygmeoecwey: qsgqwyqaqiowkmco: } gsygwgsiawgmqiyi: wwukgaquuyoissgy: } suqcsgaosywaauuu: } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::usaocmsseuquaqsu; } public function qaacgyyuqusekwya($iwewcwusemqaiggk, $kesssewsiegssiya) { $nsmgceoqaqogqmuw = ''; $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $kesssewsiegssiya); $iwewcwusemqaiggk->ID = $iwewcwusemqaiggk->term_id; $ysecigwmacqymaku = $this->iuygowkemiiwqmiw("\x74\141\170\157\156\x6f\155\171\137\x61\x64\x6d\x69\156\137\x66\151\145\x6c\144\137\x68\x6f\154\144\x65\162"); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $qkweikswegyciaie = $this->ysyeiiyqsecmgoyu($iwewcwusemqaiggk, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, false); if (!$qkweikswegyciaie) { goto usymasgsyqgsuocg; } $nsmgceoqaqogqmuw .= sprintf($ysecigwmacqymaku, sprintf(__("\x52\145\154\x61\164\151\x6f\x6e\x20\x77\151\164\150\40\45\163", PR__MDL__ADVANCED_CMS), $this->mauewaeoemuusikw($kooyscwkscsogysg)->label), $qkweikswegyciaie); usymasgsyqgsuocg: eucqomyqykgoiuge: } qikaewekoecykeou: if (!$nsmgceoqaqogqmuw) { goto aiccyaswigkaycqk; } printf($this->eqkimaoyqiaoyoqa(), $nsmgceoqaqogqmuw); aiccyaswigkaycqk: } public function eqkimaoyqiaoyoqa() { return ManipulateHTML::uuccukgasskgimsq("\x74\141\142\154\145", ["\x63\x6c\141\x73\x73" => "\146\x6f\162\155\55\x74\x61\x62\154\x65"], ManipulateHTML::uuccukgasskgimsq("\x74\x62\157\144\x79", [], "\45\163")); } public function mauewaeoemuusikw($muowmkwsoauukiag) { return ManipulateTaxonomy::imgymusqgccqsqqq($muowmkwsoauukiag); } public function goqmcwikekcgyokg() : array { return []; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Term) { goto sqyokemumceysegy; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); sqyokemumceysegy: return $oammesyieqmwuwyi; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { return $gqgemcmoicmgaqie; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "{$iakkeikwceeomgyq}\x2f\50\133\x5e\x2f\135\53\x29\57{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\57"; $gqgemcmoicmgaqie = "\x69\x6e\x64\x65\170\56\x70\x68\x70\77\164\141\170\157\156\157\155\171\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\46{$yygmoeguaqyumuui->side}\x3d\44\x6d\x61\164\143\x68\145\x73\133\x31\135"; if (!$kiyaqqoyagguscog) { goto oqousikwiiqagoyw; } global $wp_rewrite; $qucissyoweagooww = $wp_rewrite->pagination_base; $ucccueqywigcukcc .= "{$qucissyoweagooww}\57\x3f\50\x5b\60\x2d\x39\x5d\x7b\x31\54\x7d\x29\x2f"; $gqgemcmoicmgaqie .= "\x26\x70\x61\x67\145\144\75\x24\x6d\141\x74\143\x68\145\163\x5b\x32\135"; oqousikwiiqagoyw: $ucccueqywigcukcc .= "\x3f\44"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\164\157\x70"]; } public function ugmceccgwaaaigiy() : array { $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [Setting::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\x45\x6e\141\142\154\x65", PR__MDL__ADVANCED_CMS)), Setting::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\x49\164\145\x6d\x73", PR__MDL__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\x45\156\x61\x62\x6c\x65", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\x49\x6e\x76\145\x72\163\145\40\123\x69\x64\x65", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\141\x67\145", PR__MDL__ADVANCED_CMS))->wyqeckayigciacse("\x73\x6d\x61\x6c\154"), self::ymuegqgyuagyucws(self::NAME, __("\x41\x64\x6d\x69\156\40\x50\141\x6e\145\154\40\x4e\x61\x6d\145", PR__MDL__ADVANCED_CMS), sprintf("\74\x73\x74\x72\x6f\156\x67\x3e\45\163\72\x3c\57\x73\x74\162\x6f\x6e\x67\76\x20\x25\163", __("\116\x6f\164\x69\x63\145", PR__MDL__ADVANCED_CMS), __("\x57\x69\x6c\154\x20\x62\x65\40\165\163\145\144\40\141\163\x20\163\154\165\x67\x20\164\x6f\157\x2e", PR__MDL__ADVANCED_CMS))), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\x4f\162\x69\147\151\x6e", PR__MDL__ADVANCED_CMS), $seyqqsmuaiegkeeq)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\104\145\163\164\x69\156\x61\x74\151\x6f\x6e", PR__MDL__ADVANCED_CMS), $seyqqsmuaiegkeeq)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\x4f\162\151\x67\x69\x6e\x20\x54\x69\x74\x6c\145", PR__MDL__ADVANCED_CMS)), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\104\x65\x73\x74\151\x6e\x61\164\151\157\156\x20\x54\x69\x74\x6c\x65", PR__MDL__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return TaxonomyManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } }
