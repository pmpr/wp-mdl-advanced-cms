<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc50360386             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Shortcode; use Pmpr\Module\AdvancedCMS\Form\Modal\Segment as BaseClass; use Pmpr\Module\AdvancedCMS\Form\Field\BSSelect; use Pmpr\Module\AdvancedCMS\Form\Field\Field; use Pmpr\Module\AdvancedCMS\Form\Field\Group; use Pmpr\Common\Foundation\Interfaces\Constants; abstract class Segment extends BaseClass { protected $target = Constants::ALL; protected bool $enableInAmp = true; public function squsacgomqgkakaw() { return $this->target; } public function kqeoeeayumeoyaoa() : ?bool { return $this->enableInAmp; } public function mwikyscisascoeea() : ?string { $aokagokqyuysuksm = parent::mwikyscisascoeea(); if (!$aokagokqyuysuksm) { $aokagokqyuysuksm = $this->aakmagwggmkoiiyu(); } return $aokagokqyuysuksm; } public function gosmqcmmomkqwmis() { parent::gosmqcmmomkqwmis(); if ($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->kccakwkaqugygwmq()) { if ($post = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->get()) { $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->souwykwwmyygqyqi($post); if (has_shortcode($ewgwqamkygiqaawc, $this->cisyiemkeykgkomc()) || has_shortcode($ewgwqamkygiqaawc, "\160\x6d\160\162\137{$this->aakmagwggmkoiiyu()}")) { $this->enqueue(); } } } } public function init() { parent::init(); $this->gkoiuyagqcoecigk(); } public function enqueue() { } public function gkoiuyagqcoecigk() { add_shortcode($this->cisyiemkeykgkomc(), [$this, "\x6f\163\x65\x61\143\x71\x69\155\x65\x63\x77\147\147\x61\153\167"]); add_shortcode("\160\155\x70\x72\137{$this->aakmagwggmkoiiyu()}", [$this, "\157\163\145\x61\x63\x71\x69\155\x65\143\x77\x67\147\141\x6b\167"]); } public function isqsicqgwyyasyke() : array { return $this->sscegwueamckwmcy("\163\150\157\162\164\143\x6f\x64\145\x5f\x63\x6f\x6c\x75\155\x6e\163", []); } public function oseacqimecwggakw($wwgucssaecqekuek) : string { $nsmgceoqaqogqmuw = ''; if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->goumkccmgysgqueu() && !$this->kqeoeeayumeoyaoa()) { return $nsmgceoqaqogqmuw; } if (is_array($wwgucssaecqekuek)) { $ggauoeuaesiymgee = $this->gwquaaaaikcwcges(); $wwgucssaecqekuek = array_merge($ggauoeuaesiymgee, $wwgucssaecqekuek); } else { $wwgucssaecqekuek = []; } $iqyiekoceqqsqoow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, Constants::sqomuccqsqwsckyw, $this->aakmagwggmkoiiyu()); if ($iqyiekoceqqsqoow) { $wwgucssaecqekuek = $this->woqmqgkiuomammya($wwgucssaecqekuek); $wwgucssaecqekuek = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("{$this->aakmagwggmkoiiyu()}\137\163\150\157\162\164\x63\157\x64\x65\x5f\x61\x74\x74\x72\x73"), $wwgucssaecqekuek, $this); $qookweymeqawmcwo = array_filter($this->kyaweigsqwomykaa($wwgucssaecqekuek)); $qookweymeqawmcwo["\163\x68\157\162\164\x63\157\144\145\137\x6e\141\x6d\145"] = $this->aakmagwggmkoiiyu(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw($iqyiekoceqqsqoow, $qookweymeqawmcwo, ["\x64\145\x66\141\165\154\164" => "\151\156\144\145\170\56\x68\x74\155\x6c\x2e\164\167\x69\x67"]); } else { wp_die(__("\x63\x61\156\156\157\164\40\x66\157\165\x6e\x64\x20\x74\145\x6d\160\x6c\x61\x74\x65\40\x66\157\x72\40\143\162\145\141\x74\145\40\x6d\x61\162\x6b\x75\x70\x20\x69\156\40\163\x68\x6f\162\x74\x63\x6f\144\145\x20\x6f\x66\x3a\x20" . static::class, PR__CMN__FOUNDATION)); } return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\163\x68\157\162\164\143\x6f\x64\145\137\150\x74\x6d\154"), $nsmgceoqaqogqmuw, $this->aakmagwggmkoiiyu(), $this); } public final function woqmqgkiuomammya($wwgucssaecqekuek = [], $ikgwqyuyckaewsow = []) : array { $this->ecwgiiuacoaokqkw(); if (!$ikgwqyuyckaewsow) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); } foreach ($ikgwqyuyckaewsow as $aokagokqyuysuksm => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wwgucssaecqekuek, $aokagokqyuysuksm); $wwgucssaecqekuek[$aokagokqyuysuksm] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus); } } return $wwgucssaecqekuek; } public function ymcsqgcuewmommio($eqgoocgaqwqcimie, $aiowsaccomcoikus = null) { if ($aiowsaccomcoikus instanceof Field) { if ($aiowsaccomcoikus instanceof Group) { $eqgoocgaqwqcimie = $this->xaycwsakgqmcseue($eqgoocgaqwqcimie, $aiowsaccomcoikus); } elseif ($aiowsaccomcoikus instanceof BSSelect) { if ($aiowsaccomcoikus->zosqeeykkcqmmkqs()) { $eqgoocgaqwqcimie = $this->acgiiomwuewkmgei($eqgoocgaqwqcimie); } } elseif (is_string($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = rawurldecode($eqgoocgaqwqcimie); } } return $eqgoocgaqwqcimie; } public function ocwoiywammqiuggq() : string { return "\x70\x72\x2d\x73\x68\157\162\164\x63\x6f\144\x65"; } public function ccmewsuaqiaegqso($eqgoocgaqwqcimie) { preg_match("\x2f\x7b\50\x2e\x2a\77\x29\175\x2f", $eqgoocgaqwqcimie, $uammqaqiwgcmeska); if (isset($uammqaqiwgcmeska[1])) { $shortcode = do_shortcode("\x5b" . $uammqaqiwgcmeska[1] . "\135"); $eqgoocgaqwqcimie = str_replace($uammqaqiwgcmeska[0], $shortcode, $eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; } public function squkoowcgeokaywq($somsiuiquigiqsmk) : array { $oammesyieqmwuwyi = []; foreach ($somsiuiquigiqsmk as $uusmaiomayssaecw => $mcqieaigyeeyaksm) { $oammesyieqmwuwyi[$uusmaiomayssaecw] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq("\x69\155\147", ["\163\162\x63" => $mcqieaigyeeyaksm]); } return $oammesyieqmwuwyi; } public function kyaweigsqwomykaa($wwgucssaecqekuek = []) : array { return $wwgucssaecqekuek; } public function xaycwsakgqmcseue($icwicymcioeyeyek, ?Group $aiowsaccomcoikus = null) : array { $aqykuigiuwmmcieu = []; preg_match_all("\x2f\x5c\x28\x28\56\52\77\51\134\x29\x2f", $icwicymcioeyeyek, $meyiiwcswqmuggyg); $meyiiwcswqmuggyg = $meyiiwcswqmuggyg[1]; foreach ($meyiiwcswqmuggyg as $momcykaoccoymeig => $uammqaqiwgcmeska) { $uammqaqiwgcmeska = explode("\x2c", $uammqaqiwgcmeska); foreach ($uammqaqiwgcmeska as $igqsaukqcqscimok) { preg_match("\57\50\x5b\x5e\75\x5d\x2b\x29\x2f", $igqsaukqcqscimok, $uusmaiomayssaecw); preg_match("\57\x27\x28\x5b\136\47\135\x2a\x29\x27\x2f", $igqsaukqcqscimok, $eqgoocgaqwqcimie); $uusmaiomayssaecw = $uusmaiomayssaecw[1]; if (isset($eqgoocgaqwqcimie[1])) { $uskwgmsuqowaosow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uusmaiomayssaecw); $aqykuigiuwmmcieu[$momcykaoccoymeig][$uusmaiomayssaecw] = $this->ymcsqgcuewmommio($eqgoocgaqwqcimie[1], $uskwgmsuqowaosow); } } } return $aqykuigiuwmmcieu; } public function acgiiomwuewkmgei($eqgoocgaqwqcimie) { if (is_string($eqgoocgaqwqcimie)) { $aqykuigiuwmmcieu = explode("\54", $eqgoocgaqwqcimie); if (count($aqykuigiuwmmcieu) <= 1) { $eqgoocgaqwqcimie = explode("\174", $eqgoocgaqwqcimie); } else { $eqgoocgaqwqcimie = $aqykuigiuwmmcieu; } } return $eqgoocgaqwqcimie; } public abstract function gwquaaaaikcwcges() : array; }
