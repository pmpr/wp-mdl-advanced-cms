<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624298fce69d9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Relation\Ajax; use Pmpr\Module\AdvancedCMS\Relation\Common; use Pmpr\Module\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const gsogeeomsuykagku = "\x72\x65\154\x61\x74\x69\157\x6e\137\163\x69\x64\x65"; const osaqscycewgywasc = "\x72\x65\154\x61\164\151\157\156\x5f\x74\141\x72\x67\145\x74"; const gummygkewuamuwec = "\162\145\154\x61\x74\151\157\x6e\x5f\x6d\145\164\x61\137\x6b\145\x79"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\151\156\151\164"], 0)->qcsmikeggeemccuu("\160\x61\162\x73\145\x5f\161\x75\145\162\171", [$this, "\165\165\x71\x71\143\x75\x6b\x63\153\165\163\x63\157\171\141\x73"], 999)->qcsmikeggeemccuu("\x77\157\x6f\143\157\155\x6d\x65\162\x63\x65\x5f\160\x72\x6f\x64\165\143\x74\137\161\165\145\162\x79", [$this, "\x75\x75\161\x71\143\165\x6b\143\x6b\x75\163\143\157\171\x61\x73"], 999)->qcsmikeggeemccuu("\x62\145\x66\157\x72\145\137\x75\x70\x64\141\164\x65\137{$uusmaiomayssaecw}", [$this, "\151\x61\x73\171\x77\167\153\x67\x75\x79\x61\x75\x69\x79\167\165"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\x75\145\162\x79\137\x76\x61\162\163", [$this, "\x6d\165\x6f\165\x6d\147\155\x69\165\165\157\141\x77\163\151\167"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\x6f\x63\157\151\163\163\171\x69\155\167\165\171\x6d\161\x6d\171"])->cecaguuoecmccuse("\165\x70\x64\x61\164\145\x5f{$this->aakmagwggmkoiiyu()}\x5f\151\164\145\155\163\x5f\x62\x79\137\155\145\x74\141\153\x65\171", [$this, "\x67\151\x6d\163\151\x69\151\167\151\141\151\161\143\x69\151\143"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto eyiwqgqcsqakwqss; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto yuoeumyiuqkuouey; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); yuoeumyiuqkuouey: eoyiumycaigawmmc: } mgcuiguaomoqwwwm: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); eyiwqgqcsqakwqss: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\155\145\x74\141\x5f\x6b\145\x79" => '', "\x73\151\x64\x65\163" => [], "\154\151\x6d\151\x74" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\x73\151\144\145\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\x6d\x65\164\141\137\153\x65\x79"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto osmmoyqkqoucsgow; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto ooqksueucyagyuoe; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\154\151\155\151\x74" => $ywmkwiwkosakssii["\154\151\x6d\151\164"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; yssqmyoaokkksukc: } sckioayasmkcoeoo: ooqksueucyagyuoe: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; osmmoyqkqoucsgow: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\155\x65\x74\141\x6b\145\171", "\x74\x61\162\147\x65\x74", "\x73\x69\144\x65"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto wgiygcmqaokywuqa; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; wgiygcmqaokywuqa: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto aukucaieceiwesmm; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto iauwuugggmegwisk; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\145\164\141\113\x65\171", "\164\141\x72\x67\145\164", "\x73\151\x64\145"]); iauwuugggmegwisk: aukucaieceiwesmm: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto iwueukqcywkiyqge; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto micceocwuwkyusic; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\157\x75\x74\x70\x75\x74" => "\151\144"]); if (!$oammesyieqmwuwyi) { goto kqyoakickmseyyeq; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); kqyoakickmseyyeq: micceocwuwkyusic: iwueukqcywkiyqge: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); acggikioyeueeowg: } ykwasaaoeeiuomim: return $this->iuygowkemiiwqmiw("\155\145\164\141\137\x62\x6f\170\x5f\x74\141\142\x73", ["\155\145\164\141\102\x6f\170\145\163" => $uaqusiikkokccqou, "\x74\x61\x72\147\145\x74" => "\x23\162\x65\x6c\141\x74\x69\x6f\156\x2d\163\164\x75\146\146", "\x6e\x61\x6d\x65\163" => $aiwgcyaewwagisoo], ["\x65\143\x68\157" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); return $this->iuygowkemiiwqmiw("\155\145\164\141\x5f\142\157\170", ["\144\141\x74\x61" => $icwicymcioeyeyek, "\x74\x61\162\147\x65\x74" => $ccamueccusigaaio->name, "\x65\x6e\164\151\164\171" => $this->aakmagwggmkoiiyu(), "\157\x77\156\x65\162" => $igqsaukqcqscimok->ID, "\155\145\164\x61\113\145\x79" => $gwiwsycaaqgwmewg, "\156\141\155\145" => $ccamueccusigaaio->labels->singular_name, "\x65\170\x63\154\x75\144\x65\x73" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto egaymskkosukqeao; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto cwikoaeqmmoimmso; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); cwikoaeqmmoimmso: goto kaiesowkgwogqseg; egaymskkosukqeao: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); kaiesowkgwogqseg: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\x7d", "\151\x6e\160\x75\x74\x5f\160\154\x61\x63\x65\x68\x6f\x6c\x64\145\162" => __("\x54\171\x70\x65\x20\x4e\x61\155\145\40\157\146\40\141\x20\x25\x73", PR__MDL__ADVANCED_CMS), "\155\157\166\145\x5f\150\x61\156\144\154\145" => $this->cmeuowkiswiuocqa(), "\162\145\x6d\157\x76\145\x5f\155\x6f\x64\x61\154" => $this->amsaeiymyieqksqy()]); } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto kicwiowcogmauwiy; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ygyiacciqgemekwc . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); kicwiowcogmauwiy: return $cciauwuwuqaywgce; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); if (!$eygsasmqycagyayw) { goto cwswueuqoamqasya; } $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x72\x65\x6c\x61\x74\x69\x6f\156", $eygsasmqycagyayw->get("\x72\x65\154\141\x74\151\x6f\x6e\x2e\x63\x73\163")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x72\x65\154\x61\x74\x69\157\x6e", $eygsasmqycagyayw->get("\x72\x65\154\141\164\x69\x6f\x6e\x2e\152\x73"))->simswskycwagoeqy())->ikqyiskqaaymscgw("\162\145\x6c\x61\x74\151\157\x6e", ["\141\x6a\141\170" => Ajax::myikkigscysoykgy]); cwswueuqoamqasya: } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
