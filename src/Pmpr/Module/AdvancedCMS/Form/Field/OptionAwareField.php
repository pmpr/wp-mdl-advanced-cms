<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce116c94039             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class OptionAwareField extends Field { protected array $options = []; protected array $extendable = []; public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = []) { parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->options = $qiouiwasaauyaaue; } public function gkwkqmwweiawigae() : ?array { return $this->options; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); sckioayasmkcoeoo: } eyiwqgqcsqakwqss: return $this; } public function asicmoumkgkcmiqq() : array { return $this->extendable; } public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ymckmcsiymwqucoq => [], Constants::sssoieywiewykmam => []]); $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::ymckmcsiymwqucoq); if (!$ikgwqyuyckaewsow) { goto ooqksueucyagyuoe; } if (is_array($ikgwqyuyckaewsow)) { goto yssqmyoaokkksukc; } $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow]; yssqmyoaokkksukc: goto osmmoyqkqoucsgow; ooqksueucyagyuoe: $ikgwqyuyckaewsow = []; osmmoyqkqoucsgow: $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea(); $ywmkwiwkosakssii[Constants::ymckmcsiymwqucoq] = $ikgwqyuyckaewsow; $this->extendable = $ywmkwiwkosakssii; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $mmswksymsquueauk = $this->asicmoumkgkcmiqq(); if (!$mmswksymsquueauk) { goto wgiygcmqaokywuqa; } $this->qigsyyqgewgskemg("\160\162\x2d\145\170\164\x65\156\x64\141\x62\x6c\x65\x2d\x69\156\x70\x75\164")->eskgwaywimqcwcyy("\x65\170\164\145\156\x64\x61\x62\x6c\x65", json_encode($mmswksymsquueauk)); wgiygcmqaokywuqa: if (!$this->msmiagueogcsucgc()) { goto acggikioyeueeowg; } $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); if (!$qiouiwasaauyaaue) { goto ykwasaaoeeiuomim; } $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue); if (is_array($isksgswsmmqgeqmo)) { goto micceocwuwkyusic; } $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0]; goto iwueukqcywkiyqge; micceocwuwkyusic: if (isset($isksgswsmmqgeqmo["\x6f\160\164\x69\157\x6e\163"])) { goto aukucaieceiwesmm; } $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0]; goto kqyoakickmseyyeq; aukucaieceiwesmm: if (!is_array($isksgswsmmqgeqmo["\157\160\164\151\157\x6e\x73"])) { goto iauwuugggmegwisk; } $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\157\x70\x74\x69\157\156\x73"])[0]; iauwuugggmegwisk: kqyoakickmseyyeq: iwueukqcywkiyqge: $this->eyygsasuqmommkua($omkysikckkcieckq); ykwasaaoeeiuomim: acggikioyeueeowg: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
