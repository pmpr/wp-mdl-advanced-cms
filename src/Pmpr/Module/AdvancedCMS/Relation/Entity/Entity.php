<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62993a86bc26f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Relation\Ajax; use Pmpr\Module\AdvancedCMS\Relation\Common; use Pmpr\Module\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const gsogeeomsuykagku = "\162\x65\154\141\164\x69\157\156\137\163\x69\144\x65"; const osaqscycewgywasc = "\x72\145\x6c\x61\x74\151\157\x6e\137\164\141\162\x67\145\x74"; const gummygkewuamuwec = "\x72\145\154\141\164\151\157\156\137\155\145\164\141\137\153\145\171"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\151\156\x69\x74", [$this, "\151\x6e\x69\x74"], 0)->qcsmikeggeemccuu("\x70\x61\x72\163\145\x5f\x71\x75\x65\162\x79", [$this, "\165\x75\161\161\143\165\x6b\x63\153\x75\x73\x63\157\171\x61\x73"], 999)->qcsmikeggeemccuu("\167\x6f\x6f\143\157\155\155\x65\x72\x63\145\x5f\160\162\157\144\x75\143\x74\137\x71\x75\x65\162\x79", [$this, "\x75\x75\x71\161\143\165\153\143\153\x75\163\143\157\171\141\x73"], 999)->qcsmikeggeemccuu("\x62\145\146\x6f\x72\x65\137\165\160\x64\x61\164\x65\137{$uusmaiomayssaecw}", [$this, "\x69\141\x73\x79\167\x77\153\x67\165\171\x61\165\151\x79\167\x75"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\165\145\x72\171\x5f\x76\141\162\163", [$this, "\155\165\x6f\x75\x6d\147\x6d\151\x75\165\x6f\141\x77\163\151\x77"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\157\x63\x6f\151\x73\163\x79\x69\x6d\167\x75\x79\155\x71\155\171"])->cecaguuoecmccuse("\x75\160\144\141\x74\145\137{$this->aakmagwggmkoiiyu()}\x5f\151\x74\145\x6d\163\137\142\171\x5f\x6d\145\x74\x61\153\145\171", [$this, "\147\x69\x6d\163\151\x69\x69\x77\x69\141\x69\x71\x63\x69\151\x63"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto ueigkucgaucgeimc; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto kqgcyoscsusgoaqi; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); kqgcyoscsusgoaqi: wgewmqieuamsoayy: } ugqaaewwmkocwwgy: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); ueigkucgaucgeimc: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6d\145\164\141\137\153\145\x79" => '', "\163\151\144\x65\163" => [], "\154\x69\155\x69\x74" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\x69\x64\145\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\155\145\x74\141\x5f\153\x65\x79"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto qmuwoecuacmkwgem; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto wakmayaoqoskekqy; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\154\x69\x6d\151\x74" => $ywmkwiwkosakssii["\154\151\x6d\151\x74"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; wkeuuycukmuqiaom: } sggawugoykqcmsug: wakmayaoqoskekqy: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; qmuwoecuacmkwgem: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\145\164\x61\153\x65\171", "\164\141\x72\147\145\x74", "\163\151\144\x65"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto owmuceyswmgueasi; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; owmuceyswmgueasi: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto eeauyscekuckoues; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto mwsmsguqqkcwiiuk; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\x65\x74\x61\x4b\x65\x79", "\x74\141\162\x67\145\x74", "\x73\151\x64\145"]); mwsmsguqqkcwiiuk: eeauyscekuckoues: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto wagqgeqymeqoeuyi; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto msemumccgceyugmg; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\157\x75\x74\160\165\x74" => "\x69\x64"]); if (!$oammesyieqmwuwyi) { goto eogwckcymuugikuy; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); eogwckcymuugikuy: msemumccgceyugmg: wagqgeqymeqoeuyi: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); iwsuawwqomaowuii: } qoqskyuuwueqkquk: return $this->iuygowkemiiwqmiw("\155\x65\x74\141\137\x62\x6f\170\137\164\x61\x62\163", ["\x6d\145\164\x61\102\x6f\x78\x65\163" => $uaqusiikkokccqou, "\164\x61\x72\x67\x65\x74" => "\x23\x72\x65\x6c\141\x74\151\157\x6e\x2d\x73\164\165\x66\x66", "\156\141\155\x65\x73" => $aiwgcyaewwagisoo], ["\145\x63\x68\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); return $this->iuygowkemiiwqmiw("\x6d\x65\164\141\x5f\x62\x6f\x78", ["\x64\141\164\x61" => $icwicymcioeyeyek, "\x74\141\162\x67\x65\164" => $ccamueccusigaaio->name, "\x65\x6e\164\x69\164\x79" => $this->aakmagwggmkoiiyu(), "\157\167\156\145\162" => $igqsaukqcqscimok->ID, "\155\145\x74\141\113\x65\x79" => $gwiwsycaaqgwmewg, "\x6e\141\155\145" => $ccamueccusigaaio->labels->singular_name, "\145\x78\143\154\165\x64\145\x73" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto asiqwuoswmigcaki; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto wcugqegqsuuuwqao; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); wcugqegqsuuuwqao: goto ciykoyeioqgyaeqo; asiqwuoswmigcaki: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); ciykoyeioqgyaeqo: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\175", "\151\x6e\160\165\x74\x5f\x70\x6c\141\x63\145\x68\x6f\154\144\145\x72" => __("\x54\171\x70\145\40\116\141\155\x65\x20\x6f\146\40\x61\x20\45\x73", PR__MDL__ADVANCED_CMS), "\x6d\x6f\166\x65\x5f\150\x61\156\x64\154\x65" => $this->cmeuowkiswiuocqa(), "\162\x65\155\x6f\166\145\x5f\x6d\x6f\x64\x61\x6c" => $this->amsaeiymyieqksqy()]); } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto mqicocmqegwukkwg; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ygyiacciqgemekwc . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); mqicocmqegwukkwg: return $cciauwuwuqaywgce; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$eygsasmqycagyayw) { goto qgeugwymkkiacwoc; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x72\x65\x6c\141\x74\151\x6f\x6e", $eygsasmqycagyayw->get("\162\145\154\x61\164\151\x6f\x6e\56\143\x73\163")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\162\145\x6c\141\164\151\157\156", $eygsasmqycagyayw->get("\x72\x65\x6c\141\x74\151\157\156\56\152\163"))->simswskycwagoeqy())->ikqyiskqaaymscgw("\162\145\154\x61\164\x69\x6f\x6e", ["\141\152\x61\x78" => Ajax::myikkigscysoykgy]); qgeugwymkkiacwoc: } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
