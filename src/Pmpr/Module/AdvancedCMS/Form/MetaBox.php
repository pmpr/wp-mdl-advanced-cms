<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4afe9b772             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form; use CMB2; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\AdvancedCMS\Form\Field\Field; class MetaBox extends Element { protected array $tabs = []; protected array $fields = []; protected ?string $icon = null; protected array $postTypes = []; protected bool $hookAble = false; protected array $taxonomies = []; protected bool $isVerticalTab = true; protected ?string $context = "\x6e\x6f\x72\x6d\x61\154"; public function __construct($aokagokqyuysuksm, $meqocwsecsywiiqs = null, $yiyasiwyokuumigg = false) { $this->id = $aokagokqyuysuksm; $this->title = $meqocwsecsywiiqs; $this->hookAble = $yiyasiwyokuumigg; parent::__construct($aokagokqyuysuksm); } public function wigskegsqequoeks() { if ($this->qwkguquqiiaekmsi() && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $this->qcsmikeggeemccuu("\143\x6d\x62\x32\137\141\x64\x6d\151\x6e\137\151\x6e\x69\x74", [$this, "\162\x65\147\151\163\164\x65\162"]); } parent::wigskegsqequoeks(); } public function yqsycyoeiusqqqgm() : ?string { return $this->context; } public function sucsaaaeiecgqcem(?string $mgkceomocowocqyo) : self { $this->context = $mgkceomocowocqyo; return $this; } public function maosyyqsuygkawma() : self { $this->sucsaaaeiecgqcem("\156\157\x72\x6d\x61\x6c"); return $this; } public function igeseuiwcwwsuesi() : self { $this->sucsaaaeiecgqcem("\x73\x69\x64\x65"); return $this; } public function ymyesuiosuagoaco() : self { $this->sucsaaaeiecgqcem("\141\144\166\x61\x6e\x63\145\144"); return $this; } public function qwkguquqiiaekmsi() : ?bool { return $this->hookAble; } public function cmuqkakwwqyywqke(bool $yiyasiwyokuumigg) : self { $this->hookAble = $yiyasiwyokuumigg; return $this; } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function kyccqycmcyqomiqm() : ?bool { return $this->isVerticalTab; } public function cgmuykwsyqgaymgm(bool $kyccqycmcyqomiqm) : self { $this->isVerticalTab = $kyccqycmcyqomiqm; return $this; } public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function uyaeumskacgcyskk() : ?array { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, $cciauwuwuqaywgce->ugmceccgwaaaigiy()); } } return $ikgwqyuyckaewsow; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw(array $ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $this->mkksewyosgeumwsa($aiowsaccomcoikus); } } return $this; } public function mukiwuqwmywsckco() : bool { return !empty($this->ugmceccgwaaaigiy()); } public function kukswgcoysaeescm(string $mqyaskyaekmkegmg) : self { if (!is_array($this->objectType)) { $this->objectType = []; } $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function iakygkwocqoukwuc() : ?array { return $this->postTypes; } public function mgieiwsmcswmmiim(string $useksmwkuswkwcqg) : self { if (!in_array($useksmwkuswkwcqg, $this->iakygkwocqoukwuc(), true)) { $this->postTypes[] = $useksmwkuswkwcqg; $this->kukswgcoysaeescm($useksmwkuswkwcqg); } return $this; } public function aueosikimququsko(array $sciomagaqmgggsiu) : self { foreach ($sciomagaqmgggsiu as $useksmwkuswkwcqg) { if ($useksmwkuswkwcqg) { $this->mgieiwsmcswmmiim($useksmwkuswkwcqg); } } return $this; } public function iwqugwigmoiagwec() : ?string { $meqocwsecsywiiqs = $this->qcgakseyaikigqco(); if ($this->eyamqkqiykagecsw()) { $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($this->eyamqkqiykagecsw(), ["\x63\154\x61\163\163" => "\x70\x72\x2d\x6d\145\164\x61\x62\157\x78\x2d\151\x63\x6f\156\40\151\143\x6f\x6e\x2d\x73\155"]); $meqocwsecsywiiqs = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui([$wkaqekwwgqsqwcoi, $meqocwsecsywiiqs], ["\x63\154\141\163\x73" => "\x70\x72\55\x6d\x65\x74\x61\142\157\x78\55\164\151\x74\x6c\x65\x20\x6d\x79\55\141\x75\164\x6f"]); } return $meqocwsecsywiiqs; } public function mqmocoguqcyymgqu() : ?array { return $this->taxonomies; } public function acqyqaaeeogkosoq(string $kesssewsiegssiya) : self { if (!in_array($kesssewsiegssiya, $this->mqmocoguqcyymgqu())) { $this->taxonomies[] = $kesssewsiegssiya; } return $this; } public function mieeukuyckssemsm(array $seyqqsmuaiegkeeq) : self { foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if ($kesssewsiegssiya) { $this->acqyqaaeeogkosoq($kesssewsiegssiya); } } return $this; } public function equiyaoamqmaeckc() : ?array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } } return $this; } public function osqsemgesogkmios() : bool { return !empty($this->equiyaoamqmaeckc()); } public function register($uusmaiomayssaecw = null) : CMB2 { if (!$uusmaiomayssaecw) { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); } $uiewakwqscemywuo = $this->weqsyyuyccsemacu($uusmaiomayssaecw); if ($this->osqsemgesogkmios()) { foreach ($this->equiyaoamqmaeckc() as $cciauwuwuqaywgce) { if ($cciauwuwuqaywgce instanceof Tab && $cciauwuwuqaywgce->wkkcmkuiigsukyik()) { $this->ewweaossowcqywaw($cciauwuwuqaywgce->ugmceccgwaaaigiy()); } } $uiewakwqscemywuo["\164\141\142\163"] = array_filter($this->equiyaoamqmaeckc(), function ($cciauwuwuqaywgce) { return $cciauwuwuqaywgce->wkkcmkuiigsukyik(); }); } if ($this->mukiwuqwmywsckco()) { $uiewakwqscemywuo[Constants::ymckmcsiymwqucoq] = $this->yceyooiweyiqgsam($this->ugmceccgwaaaigiy()); } $scegeeyqweaksmki = new_cmb2_box($uiewakwqscemywuo); $scegeeyqweaksmki->object_type($this->aaamyckgicycisqq()); return $scegeeyqweaksmki; } public function gisikkgygmseekyi() : self { return $this->ycgswwsswoyyeqgc(["\143\157\155\x6d\x65\x6e\164"]); } public function weqsyyuyccsemacu($kooiowmeygoykmms = null) : array { $uiewakwqscemywuo = [Constants::gouqcwikiiygyasc => $this->mwikyscisascoeea(), Constants::qescuiwgsyuikume => $this->iwqugwigmoiagwec(), Constants::osiogououyayqyck => $this->yqsycyoeiusqqqgm(), Constants::iuqumwggccmcuyem => $this->qwkguquqiiaekmsi() ? "\x6c\x6f\167" : $this->yywskysiycwkwsgw(), "\163\150\x6f\x77\137\156\141\155\x65\x73" => $this->eoceqqugyiaqqayw(), "\143\x61\x70\141\x62\151\x6c\151\x74\x79" => $this->gwaeeegmgggawiyi(), "\x64\151\x73\x70\154\141\171\137\x63\x62" => false, "\157\x62\152\x65\x63\164\x5f\x74\x79\160\145\x73" => $this->aaamyckgicycisqq(), "\x76\145\x72\x74\151\x63\x61\154\x5f\164\x61\142\163" => $this->kyccqycmcyqomiqm(), "\141\x64\155\151\x6e\137\x6d\145\x6e\x75\x5f\150\157\x6f\x6b" => false]; $egkyssmuqcwaciya = "\146\x6f\x72\x6d\55\143\x6f\x6e\164\141\x69\156\145\162"; if ($this->iakygkwocqoukwuc()) { $uiewakwqscemywuo["\x70\x6f\x73\x74\137\x74\x79\160\x65\x73"] = $this->iakygkwocqoukwuc(); $egkyssmuqcwaciya .= "\x20\160\162\55\x6d\145\164\141\142\157\170"; } else { if ($this->mqmocoguqcyymgqu()) { $egkyssmuqcwaciya .= "\x20\x70\x72\x2d\x74\x65\x72\x6d"; $uiewakwqscemywuo["\x74\141\x78\x6f\x6e\x6f\155\x69\x65\x73"] = $this->mqmocoguqcyymgqu(); $uiewakwqscemywuo["\157\x62\x6a\x65\143\164\x5f\164\171\160\x65\163"] = ["\164\145\x72\x6d"]; } } if (!$this->qwkguquqiiaekmsi() && $kooiowmeygoykmms) { $uiewakwqscemywuo["\x73\150\x6f\x77\x5f\157\x6e"] = ["\153\145\171" => $this->aaamyckgicycisqq(), "\x76\141\154\165\145" => [$kooiowmeygoykmms]]; } $uiewakwqscemywuo["\143\x6c\141\x73\x73\x65\163"] = $egkyssmuqcwaciya; $this->megwuoouecmkuaqm($uiewakwqscemywuo); return $this->configuration; } }
