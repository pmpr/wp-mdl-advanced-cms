<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624001b728559             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Rating; use Pmpr\Common\Foundation\FormMaker\Front\Form; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Rating\Model\Rate; class Cover extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x63\157\x6d\155\145\156\164\137\146\x6f\x72\155\137\142\145\146\157\162\145", [$this, "\x72\x65\156\144\x65\162"], 0); parent::wigskegsqequoeks(); } public function render($post) { echo $this->sqkcuwewwecosise($post); } public function sqkcuwewwecosise($post, $egcgeqyisgamuamo = false) : string { $nsmgceoqaqogqmuw = ''; if (!$this->gaogimymcgsiqois()) { goto eiawsoasmscmqswa; } if ($post) { goto mswsoaimesegiiic; } $post = ManipulatePost::mwikyscisascoeea(); mswsoaimesegiiic: $useksmwkuswkwcqg = ManipulatePost::gueasuouwqysmomu($post); if (!in_array($useksmwkuswkwcqg, ["\160\157\163\164"])) { goto goeoymmqqqeeoime; } $qookweymeqawmcwo = ["\x72\x65\x73\165\x6c\164\x5f\155\141\163\153" => __("\122\141\x74\151\x6e\147\x20\x41\x76\x65\162\x61\147\145\40\x25\163\x20\157\146\40\x25\163\40\174\x20\122\x61\x74\151\156\147\x20\x43\x6f\x75\156\x74\72\x20\x25\163", PR__MOD__ADVANCED_CMS)]; $qqyuqswckkcomeak = Rate::symcgieuakksimmu()->qooeaookuemoqecm([], $post); $gaeqamemwmwsyukm = ManipulateArray::get($qqyuqswckkcomeak, "\143\157\x75\156\164"); $wiiqgewkwwkaukyo = ManipulateArray::get($qqyuqswckkcomeak, "\x61\166\x65\162\x61\147\145"); $qookweymeqawmcwo["\x72\141\x74\x69\156\x67"] = $qqyuqswckkcomeak; if (!$egcgeqyisgamuamo) { goto qgegkeomwscwwiuw; } $eoiqickgueqaoioi = Rate::symcgieuakksimmu()->jwskisguugiiqwsq($post); if ($eoiqickgueqaoioi) { goto egasokooagakisiy; } $qookweymeqawmcwo = array_merge($qookweymeqawmcwo, ["\164\x69\164\x6c\145" => __("\131\157\165\162\x20\x6f\160\151\156\x69\157\156\x20\x69\x73\x20\151\x6d\x70\x6f\162\x74\x61\x6e\x74\x20\x74\157\x20\x75\163", PR__MOD__ADVANCED_CMS), "\x67\165\x69\x64\145\x5f\164\x65\x78\x74" => sprintf(__("\122\x61\164\145\x20\x74\x68\x69\x73\x20\x70\x6f\163\x74\40\x25\163\40\164\x6f\40\x25\x73", PR__MOD__ADVANCED_CMS), 1, 5)]); egasokooagakisiy: $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x61\164\151\156\x67\137\146\x6f\162\155\137\162\x65\x6e\x64\145\x72\x5f\160\141\162\x61\155\145\164\145\x72\x73"), $qookweymeqawmcwo, $post); if (!$eoiqickgueqaoioi) { goto kecwuwwcwokuksyq; } $qookweymeqawmcwo["\x75\x73\x65\x72\x5f\162\141\x74\145"] = sprintf(__("\131\x6f\x75\x20\x68\x61\x76\145\x20\x61\154\x72\145\x61\x64\x79\40\162\141\x74\145\40\x25\163\40\164\157\x20\x74\150\x69\163\x20\x70\157\x73\164\56", PR__MOD__ADVANCED_CMS), $this->msywmyaoqmaegsuy(ManipulateArray::get($eoiqickgueqaoioi, "\166\x61\x6c\x75\x65", 1))); kecwuwwcwokuksyq: qgegkeomwscwwiuw: if (!($gaeqamemwmwsyukm && $wiiqgewkwwkaukyo)) { goto qmiwsequckckoaei; } $qookweymeqawmcwo["\162\145\163\x75\154\x74"] = $this->msywmyaoqmaegsuy(sprintf($qookweymeqawmcwo["\x72\x65\163\x75\154\x74\137\155\x61\163\x6b"], round($wiiqgewkwwkaukyo, 2), 5, intval($gaeqamemwmwsyukm))); qmiwsequckckoaei: $qookweymeqawmcwo["\160\x6f\x73\164"] = ManipulatePost::mwikyscisascoeea($post); $qookweymeqawmcwo["\162\x65\x6e\144\x65\x72"] = $egcgeqyisgamuamo; $qookweymeqawmcwo["\162\x61\164\x69\x6e\147\137\146\157\x72\155"] = $this->imqoowygmmgysyyu(); $qookweymeqawmcwo["\x66\x65\x65\x64\142\x61\143\x6b\x5f\x66\157\x72\155"] = $this->ocoacoemoquqgqwm(); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\146\x6f\x72\155", $qookweymeqawmcwo); goeoymmqqqeeoime: eiawsoasmscmqswa: return $nsmgceoqaqogqmuw; } public function imqoowygmmgysyyu() : ?string { return $this->iuygowkemiiwqmiw("\x72\141\x74\151\x6e\x67", ["\156\x61\155\145" => "\162\141\164\x69\156\x67"]); } public function ocoacoemoquqgqwm() : ?string { $qookweymeqawmcwo = [self::ymckmcsiymwqucoq => [Form::uouyygwcgsmygaee("\x72\x61\164\x69\156\147\x5f\146\x65\x65\x64\142\x61\x63\x6b", __("\x52\141\164\151\x6e\x67\40\106\145\x65\144\142\141\143\x6b", PR__MOD__ADVANCED_CMS))->qigsyyqgewgskemg("\155\x62\55\62"), Form::uikcsmyiqacmyoau(), Form::ucmasmuimegwqeuk("\x72\x61\x74\x69\x6e\x67\x5f\163\x75\142\x6d\151\164", __("\123\165\142\x6d\x69\164", PR__MOD__ADVANCED_CMS))->qigsyyqgewgskemg("\142\164\x6e\x2d\142\154\157\x63\x6b\40\152\165\x73\x74\151\146\x79\55\143\x6f\x6e\x74\x65\x6e\164\x2d\143\145\x6e\164\x65\162")->iswqmkousoeksaae()], "\x71\165\145\163\x74\151\157\x6e" => $this->weysguygiseoukqw(Setting::yuauwoaimesgouey)]; $qookweymeqawmcwo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\162\141\x74\151\156\147\x5f\x66\145\x65\x64\x62\141\143\x6b\x5f\x70\x61\x72\x61\x6d\x65\164\145\x72\163"), $qookweymeqawmcwo); return $this->iuygowkemiiwqmiw("\x66\145\x65\144\x62\141\143\x6b", $qookweymeqawmcwo); } }
