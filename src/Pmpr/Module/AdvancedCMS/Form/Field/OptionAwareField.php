<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc50360386             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class OptionAwareField extends Field { protected array $options = []; protected array $extendable = []; public function __construct(?string $sqeykgyoooqysmca, ?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo = null, ?string $mkqqqewsokcswckc = null, array $qiouiwasaauyaaue = []) { parent::__construct($sqeykgyoooqysmca, $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->options = $qiouiwasaauyaaue; } public function gkwkqmwweiawigae() : ?array { return $this->options; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); } return $this; } public function asicmoumkgkcmiqq() : array { return $this->extendable; } public function wmwikuasuocmqycw($ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ymckmcsiymwqucoq => [], Constants::sssoieywiewykmam => []]); $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::ymckmcsiymwqucoq); if (!$ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = []; } else { if (!is_array($ikgwqyuyckaewsow)) { $ikgwqyuyckaewsow = [$ikgwqyuyckaewsow]; } } $ikgwqyuyckaewsow[] = $this->mwikyscisascoeea(); $ywmkwiwkosakssii[Constants::ymckmcsiymwqucoq] = $ikgwqyuyckaewsow; $this->extendable = $ywmkwiwkosakssii; return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $mmswksymsquueauk = $this->asicmoumkgkcmiqq(); if ($mmswksymsquueauk) { $this->qigsyyqgewgskemg("\x70\162\55\145\170\x74\x65\156\144\x61\142\154\x65\x2d\x69\156\160\165\x74")->eskgwaywimqcwcyy("\x65\x78\164\x65\156\x64\x61\142\154\145", json_encode($mmswksymsquueauk)); } if ($this->msmiagueogcsucgc()) { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); if ($qiouiwasaauyaaue) { $omkysikckkcieckq = $isksgswsmmqgeqmo = reset($qiouiwasaauyaaue); if (is_array($isksgswsmmqgeqmo)) { if (isset($isksgswsmmqgeqmo["\x6f\x70\x74\x69\157\x6e\x73"])) { if (is_array($isksgswsmmqgeqmo["\157\x70\x74\151\x6f\x6e\x73"])) { $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo["\x6f\160\x74\x69\157\156\x73"])[0]; } } else { $omkysikckkcieckq = array_keys($isksgswsmmqgeqmo)[0]; } } else { $omkysikckkcieckq = array_keys($qiouiwasaauyaaue)[0]; } $this->eyygsasuqmommkua($omkysikckkcieckq); } } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }