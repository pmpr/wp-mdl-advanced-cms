<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621bc57da6dfa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\ElementTrait; use Pmpr\Common\Foundation\FormMaker\Admin\Traits\FieldTrait; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Ajax; use Pmpr\Package\AdvancedCMS\Relation\Common; use Pmpr\Package\AdvancedCMS\Relation\Setting; use stdClass; use WP_Post; use WP_Query; use WP_Term; abstract class Entity extends Common { const gsogeeomsuykagku = "\162\x65\154\x61\164\151\x6f\x6e\137\x73\151\144\x65"; const osaqscycewgywasc = "\x72\x65\154\141\164\151\x6f\x6e\x5f\x74\x61\162\x67\145\x74"; const gummygkewuamuwec = "\x72\145\x6c\141\x74\151\x6f\156\137\155\145\164\x61\137\153\x65\171"; use FieldTrait, ElementTrait; public ?string $name = null; protected ?string $title = null; public function aakmagwggmkoiiyu() : ?string { return $this->name; } public function qcgakseyaikigqco() : ?string { return $this->title; } public function wigskegsqequoeks() { $uusmaiomayssaecw = $this->kmuweyayaqoeqiyw()->cisyiemkeykgkomc(); $this->qcsmikeggeemccuu("\x69\156\151\x74", [$this, "\151\156\151\164"], 0)->qcsmikeggeemccuu("\x70\x61\x72\163\145\x5f\161\x75\145\162\x79", [$this, "\x75\165\x71\x71\143\165\153\143\153\165\x73\x63\x6f\171\141\x73"], 999)->qcsmikeggeemccuu("\x77\157\x6f\143\157\x6d\155\x65\162\x63\x65\x5f\x70\x72\x6f\144\165\143\x74\x5f\161\165\x65\162\171", [$this, "\x75\x75\x71\x71\143\165\153\143\x6b\165\163\143\157\171\x61\x73"], 999)->qcsmikeggeemccuu("\x62\145\146\x6f\162\x65\137\165\160\x64\x61\164\145\137{$uusmaiomayssaecw}", [$this, "\x69\141\x73\171\x77\167\x6b\147\165\171\x61\165\x69\171\167\165"], 10, 2); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\161\165\145\162\171\x5f\x76\x61\x72\163", [$this, "\x6d\165\x6f\165\155\147\155\x69\165\x75\x6f\x61\167\x73\151\x77"])->cecaguuoecmccuse(Setting::symcgieuakksimmu()->mmsykuomogaqoaye(), [$this, "\x6f\x63\x6f\x69\x73\x73\171\x69\x6d\167\165\x79\x6d\x71\155\x79"])->cecaguuoecmccuse("\x75\x70\x64\141\164\x65\137{$this->aakmagwggmkoiiyu()}\x5f\x69\x74\x65\155\163\137\x62\x79\x5f\x6d\x65\x74\141\x6b\x65\x79", [$this, "\x67\x69\x6d\163\151\x69\151\167\x69\141\x69\x71\143\x69\x69\x63"], 10, 2); parent::kgquecmsgcouyaya(); } public function init() { $this->uuycqmsuyqokygky(); } public function uuycqmsuyqokygky() { $acqqmqmcquukaqsc = []; $gsgwomokyuwmqqkg = $this->comscwiqyuuesess(self::uwoqgmuqskqcqsag()); if (!($gsgwomokyuwmqqkg && is_array($gsgwomokyuwmqqkg))) { goto yssqmyoaokkksukc; } foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $this->uueaoikucyigousq($ayegqaqygsqsmews, $acqqmqmcquukaqsc); if (!ManipulateArray::get($ayegqaqygsqsmews, self::iycuamekoueuemoy)) { goto sckioayasmkcoeoo; } $this->uueaoikucyigousq($this->ggiqwoiwqoieoeqe($ayegqaqygsqsmews), $acqqmqmcquukaqsc); sckioayasmkcoeoo: eyiwqgqcsqakwqss: } yuoeumyiuqkuouey: ManipulateRewrite::kcaoacekwkiqmaee($acqqmqmcquukaqsc); yssqmyoaokkksukc: } public function gimsiiiwiaiqciic($qcgkuqesqqymcuui, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, ["\x6d\145\x74\141\137\x6b\145\171" => '', "\x73\151\x64\145\x73" => [], "\x6c\151\155\151\x74" => 5]); $oammesyieqmwuwyi = []; $yguacsiqkqgiauaa = $ywmkwiwkosakssii["\163\x69\x64\145\x73"]; $gwiwsycaaqgwmewg = $ywmkwiwkosakssii["\x6d\x65\164\x61\x5f\153\x65\x79"]; $ayegqaqygsqsmews = $this->ugcmciwwskkeimse($this->uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto iauwuugggmegwisk; } $iakkeikwceeomgyq = $ayegqaqygsqsmews->{self::igecewwoemccgwsq}; $muowmkwsoauukiag = $ayegqaqygsqsmews->{self::gygsikewooaciecc}; if (!($iakkeikwceeomgyq && $muowmkwsoauukiag && is_array($yguacsiqkqgiauaa))) { goto wgiygcmqaokywuqa; } foreach ($yguacsiqkqgiauaa as $mcaisukqqyosuasi) { $mcaisukqqyosuasi = $this->kuksecseqkakwguo($mcaisukqqyosuasi); $mcaisukqqyosuasi->archive = $this->weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi); $mcaisukqqyosuasi->related = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $muowmkwsoauukiag, $gwiwsycaaqgwmewg, ["\154\x69\155\151\164" => $ywmkwiwkosakssii["\x6c\x69\x6d\x69\x74"]]); $oammesyieqmwuwyi[] = $mcaisukqqyosuasi; osmmoyqkqoucsgow: } ooqksueucyagyuoe: wgiygcmqaokywuqa: $qcgkuqesqqymcuui = [$oammesyieqmwuwyi, $ayegqaqygsqsmews]; iauwuugggmegwisk: return $qcgkuqesqqymcuui; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return []; } public function uueaoikucyigousq($ayegqaqygsqsmews, &$acqqmqmcquukaqsc = []) { $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $iakkeikwceeomgyq = ManipulateArray::get($ayegqaqygsqsmews, self::igecewwoemccgwsq); $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg); $acqqmqmcquukaqsc[] = $this->acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, true); } public function agciaameqmyisqgo() { return ConvertArray::kamisyecckmwywwo([self::gummygkewuamuwec, self::osaqscycewgywasc, self::gsogeeomsuykagku], ["\x6d\145\x74\141\153\x65\x79", "\x74\x61\162\x67\145\x74", "\x73\x69\144\x65"]); } public function oewsgacismqeuomk($gqgemcmoicmgaqie = null) { if ($gqgemcmoicmgaqie) { goto aukucaieceiwesmm; } global $wp_query; $gqgemcmoicmgaqie = $wp_query; aukucaieceiwesmm: if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto micceocwuwkyusic; } $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $gwiwsycaaqgwmewg = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->metakey); $ccamueccusigaaio = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->target); $mcaisukqqyosuasi = $gqgemcmoicmgaqie->get($yygmoeguaqyumuui->side); if (!($gwiwsycaaqgwmewg && $ccamueccusigaaio && $mcaisukqqyosuasi)) { goto kqyoakickmseyyeq; } return ConvertArray::kamisyecckmwywwo([$gwiwsycaaqgwmewg, $ccamueccusigaaio, $mcaisukqqyosuasi], ["\x6d\145\x74\141\113\x65\171", "\164\x61\x72\147\x65\x74", "\x73\x69\x64\145"]); kqyoakickmseyyeq: micceocwuwkyusic: return false; } public function uuqqcukckuscoyas($gqgemcmoicmgaqie) { if (!$gqgemcmoicmgaqie instanceof WP_Query) { goto acggikioyeueeowg; } $kkeqqkkkqwkocsyu = $this->oewsgacismqeuomk($gqgemcmoicmgaqie); if (!$kkeqqkkkqwkocsyu) { goto ykwasaaoeeiuomim; } $mcaisukqqyosuasi = $this->kuksecseqkakwguo($kkeqqkkkqwkocsyu->side, $kkeqqkkkqwkocsyu->target); $oammesyieqmwuwyi = $this->seyyiqmgwymyumoq($mcaisukqqyosuasi, $kkeqqkkkqwkocsyu->target, $kkeqqkkkqwkocsyu->metaKey, ["\157\x75\164\x70\165\164" => "\x69\x64"]); if (!$oammesyieqmwuwyi) { goto iwueukqcywkiyqge; } $gqgemcmoicmgaqie = $this->ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); iwueukqcywkiyqge: ykwasaaoeeiuomim: acggikioyeueeowg: return $gqgemcmoicmgaqie; } public function muoumgmiuuoawsiw($kkeqqkkkqwkocsyu) { $kkeqqkkkqwkocsyu[] = self::gummygkewuamuwec; $kkeqqkkkqwkocsyu[] = self::osaqscycewgywasc; $kkeqqkkkqwkocsyu[] = self::gsogeeomsuykagku; return $kkeqqkkkqwkocsyu; } public static function uwoqgmuqskqcqsag() { return self::symcgieuakksimmu()->aakmagwggmkoiiyu() . self::gmsyiecgeegkooym; } public function ysyeiiyqsecmgoyu($igqsaukqcqscimok, $gsgwomokyuwmqqkg, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { $uaqusiikkokccqou = []; $aiwgcyaewwagisoo = []; foreach ($gsgwomokyuwmqqkg as $aaokuekaimigoyue => $ayegqaqygsqsmews) { $aiwgcyaewwagisoo[$aaokuekaimigoyue] = ManipulateArray::get($ayegqaqygsqsmews, self::NAME); $uaqusiikkokccqou[$aaokuekaimigoyue] = $this->giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $kooyscwkscsogysg); egaymskkosukqeao: } cwikoaeqmmoimmso: return $this->iuygowkemiiwqmiw("\x6d\x65\164\x61\137\142\157\x78\x5f\x74\141\142\163", ["\x6d\x65\164\141\x42\x6f\170\145\163" => $uaqusiikkokccqou, "\x74\141\x72\147\145\x74" => "\43\162\x65\154\141\x74\151\157\156\55\163\164\165\146\x66", "\156\x61\x6d\145\163" => $aiwgcyaewwagisoo], ["\145\x63\x68\x6f" => $koaqeegoeiaiccse]); } public function giwayokckieooecs($igqsaukqcqscimok, $ayegqaqygsqsmews, $ccamueccusigaaio) : ?string { $gwiwsycaaqgwmewg = $ayegqaqygsqsmews->metakey; $ccamueccusigaaio = $this->mauewaeoemuusikw($ccamueccusigaaio); $icwicymcioeyeyek = $this->seyyiqmgwymyumoq($igqsaukqcqscimok, $ccamueccusigaaio->name, $gwiwsycaaqgwmewg); return $this->iuygowkemiiwqmiw("\x6d\145\164\x61\137\142\157\x78", ["\x64\x61\164\x61" => $icwicymcioeyeyek, "\164\x61\x72\147\145\x74" => $ccamueccusigaaio->name, "\145\x6e\x74\151\164\x79" => $this->aakmagwggmkoiiyu(), "\x6f\x77\x6e\145\162" => $igqsaukqcqscimok->ID, "\155\x65\164\141\113\145\x79" => $gwiwsycaaqgwmewg, "\156\x61\155\x65" => $ccamueccusigaaio->labels->singular_name, "\145\170\x63\x6c\x75\144\x65\x73" => $icwicymcioeyeyek ? json_encode(array_map(function ($igqsaukqcqscimok) { $aokagokqyuysuksm = 0; if ($igqsaukqcqscimok instanceof WP_Term) { goto kicwiowcogmauwiy; } if (!$igqsaukqcqscimok instanceof WP_Post) { goto kaiesowkgwogqseg; } $aokagokqyuysuksm = ManipulatePost::mwikyscisascoeea($igqsaukqcqscimok); kaiesowkgwogqseg: goto cwswueuqoamqasya; kicwiowcogmauwiy: $aokagokqyuysuksm = ManipulateTerm::mwikyscisascoeea($igqsaukqcqscimok); cwswueuqoamqasya: return $aokagokqyuysuksm; }, $icwicymcioeyeyek)) : "\173\175", "\x69\x6e\160\165\164\x5f\x70\154\141\143\145\150\x6f\x6c\144\145\x72" => __("\x54\171\x70\x65\40\116\x61\x6d\145\x20\157\146\40\141\x20\x25\x73", PR__PKG__ADVANCED_CMS), "\x6d\157\x76\145\137\150\x61\156\x64\x6c\145" => $this->cmeuowkiswiuocqa(), "\x72\x65\x6d\x6f\x76\x65\137\x6d\157\x64\141\x6c" => $this->amsaeiymyieqksqy()]); } public function ocoissyimwuymqmy($cciauwuwuqaywgce) { if (!$cciauwuwuqaywgce instanceof Tab) { goto kgmeiwiakwicgkkk; } $cciauwuwuqaywgce->sikqggwmmykuiymy(self::cgygmuguceeosoey(self::ygyiacciqgemekwc . $this->aakmagwggmkoiiyu(), $this->qcgakseyaikigqco())->ewweaossowcqywaw($this->ugmceccgwaaaigiy())->saemoowcasogykak($this->eyamqkqiykagecsw())); kgmeiwiakwicgkkk: return $cciauwuwuqaywgce; } public function ugmceccgwaaaigiy() : array { return []; } public function iasywwkguyauiywu($qiouiwasaauyaaue) { return $this->kmuweyayaqoeqiyw()::wcoqgwyekgsmiueo($qiouiwasaauyaaue, self::uwoqgmuqskqcqsag(), 5); } public function enqueue() { $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->awgyqswkqywwmkye("\x72\x65\154\x61\164\x69\157\x6e", $eygsasmqycagyayw->get("\162\x65\x6c\141\x74\x69\x6f\x6e\x2e\143\x73\x73")))->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\162\x65\154\141\164\151\157\156", $eygsasmqycagyayw->get("\162\145\x6c\141\164\x69\x6f\156\x2e\152\x73"))->ayuciigykaswwqeo("\x6a\161\165\145\x72\171"))->ikqyiskqaaymscgw("\162\145\x6c\141\x74\151\157\156", ["\141\x6a\x61\x78" => Ajax::myikkigscysoykgy]); } public abstract function eyamqkqiykagecsw() : ?string; public abstract function mauewaeoemuusikw($muowmkwsoauukiag); public abstract function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); public abstract function goqmcwikekcgyokg() : array; public abstract function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null); public abstract function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi); public abstract function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false); }
