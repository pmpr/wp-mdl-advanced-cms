<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a435003b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class BSSelect extends Select { protected ?array $items = []; protected bool $isCustom = false; protected ?string $target = null; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = [], ?string $mkqqqewsokcswckc = null) { parent::__construct($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $qiouiwasaauyaaue, $mkqqqewsokcswckc, 'bsselect'); $this->gmywsauuqwcmakuc('style', 'btn-white')->gmywsauuqwcmakuc('live-search', 'true')->gmywsauuqwcmakuc('deselect-all-text', __('Deselect', PR__CMN__FOUNDATION))->qigsyyqgewgskemg('pr-boostrap-select boostrap-select'); } public function wasgwsogmuquqeaa() : ?array { return $this->items; } public function icsmsougoccqosgc(?array $oammesyieqmwuwyi) : self { $this->items = $oammesyieqmwuwyi; return $this; } public function oeewiaacscgyamai($igqsaukqcqscimok) : self { $this->items[] = $igqsaukqcqscimok; return $this; } public function wiweskwucmkcukcm($oammesyieqmwuwyi = []) : self { if (is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi) { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $this->oeewiaacscgyamai($igqsaukqcqscimok); } } return $this; } public function ikgocaywoggomiak($giqggecqqikcysgq = null) : self { if ($giqggecqqikcysgq) { $this->gmywsauuqwcmakuc('max-options', (string) $giqggecqqikcysgq); } return $this; } public function soyqkauogoaqekos() : self { $this->oockkiieqcwiocga('users'); return $this; } public function yyayequseyasoyks() : self { $this->oockkiieqcwiocga('terms'); return $this; } public function smmismmuuccmscya() : self { $this->oockkiieqcwiocga('posts'); return $this; } public function wkqyoukciomqiyew() : self { $this->oockkiieqcwiocga('models'); return $this; } public function kacywqgmseagyuyu() : self { $this->oockkiieqcwiocga('icons'); return $this; } public function imwouwmsiukakwqi() : self { $this->oockkiieqcwiocga('comments'); return $this; } public function euagkaqymgiigyaa() : self { $this->oockkiieqcwiocga('static_images'); return $this; } public function squsacgomqgkakaw() : ?string { return $this->target; } public function oockkiieqcwiocga(?string $ccamueccusigaaio) : self { $this->target = $ccamueccusigaaio; return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { $this->gmywsauuqwcmakuc(Constants::okeuagwgwkmiokac, $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($ywmkwiwkosakssii, JSON_UNESCAPED_SLASHES)); return $this; } public function osmkwgikieoyykwg() : self { $this->oikgogcweiiaocka()->usoqcyyugsuyiewc('sortable-select')->qigsyyqgewgskemg('sortable-select'); return $this; } public function somyygqqawwswkyk() : ?bool { return $this->isCustom; } public function yogkakywcccsikkg(bool $somyygqqawwswkyk) : self { $this->isCustom = $somyygqqawwswkyk; return $this; } public function oikgogcweiiaocka() : self { $this->sanitizer = null; return $this->aseocggwwegcmqes("multi{$this->gueasuouwqysmomu()}")->iqiasugacuagiwcw(); } public function zosqeeykkcqmmkqs() : bool { return strpos($this->gueasuouwqysmomu(), 'multi') !== false; } public function kyiucygqsgequoys(?string $iwiewowoqmoekyqi = null) : self { return $this->qcgocuceocquqcuw(Constants::qescuiwgsyuikume, $iwiewowoqmoekyqi); } public function iqiasugacuagiwcw($gaeqamemwmwsyukm = null) : self { $uiymkeeaukcyqqik = 'count'; if ($gaeqamemwmwsyukm) { $uiymkeeaukcyqqik = "{$uiymkeeaukcyqqik} > {$gaeqamemwmwsyukm}"; } return $this->gmywsauuqwcmakuc('selected-text-format', $uiymkeeaukcyqqik); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa(); if (is_array($oammesyieqmwuwyi)) { if ($this->squsacgomqgkakaw()) { $this->gmywsauuqwcmakuc(Constants::mgsccwumkcawaqcy, $this->squsacgomqgkakaw()); } $this->gmywsauuqwcmakuc(Constants::qwumqqyuasyskkkc, wp_json_encode($oammesyieqmwuwyi, JSON_THROW_ON_ERROR)); } if (!$this->msmiagueogcsucgc()) { $iwiewowoqmoekyqi = __('Choose an option...', PR__CMN__FOUNDATION); $this->gmywsauuqwcmakuc('deselect-all-text', __('Deselect', PR__CMN__FOUNDATION)); if (!$this->zosqeeykkcqmmkqs()) { $this->options = ['' => $iwiewowoqmoekyqi] + $this->options; } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->squsacgomqgkakaw()) { $kkeqqkkkqwkocsyu['before'] = '<div class="position-relative">'; $kkeqqkkkqwkocsyu['after'] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->kqmkicmuscsgqeoi([Constants::waguuiqqgsysuukq => '1x', 'container_class' => 'position-static']) . '</div>'; } return parent::uqawesackiomqgga($kkeqqkkkqwkocsyu, $ywmkwiwkosakssii); } }
