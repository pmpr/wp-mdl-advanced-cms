<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc50360386             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Modal; use Pmpr\Module\AdvancedCMS\Form\Element; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Modal extends Element { protected array $segments = []; public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\x6e\137\146\x6f\x6f\164\145\x72", [$this, "\157\161\157\151\x63\165\167\167\151\x73\x79\161\165\x67\165\x69"]); parent::wigskegsqequoeks(); } public function yeyiguyegmmyusea() { if ($this->qoqyomiqwooaeoiy()) { $this->enqueue(); } parent::yeyiguyegmmyusea(); } public function gsesiocqciggmauo() : array { return $this->segments; } public function ogimmkwaymekmoky(Segment $oceoauekaygmuoko) : self { $this->segments[$oceoauekaygmuoko->cisyiemkeykgkomc()] = $oceoauekaygmuoko; return $this; } public function skgwcckoyoqsascq() : bool { return !empty($this->segments); } public function oqoicuwwisyqugui() { if ($this->qoqyomiqwooaeoiy()) { $this->ecwgiiuacoaokqkw(); $qookweymeqawmcwo = $this->eeisgyksyecuceue(); $this->iuygowkemiiwqmiw("\x6d\x6f\x64\x61\x6c", $qookweymeqawmcwo, ["\x63\154\141\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } } public function eeisgyksyecuceue() : array { $wsqkgswwooewwekw = $this->gsesiocqciggmauo(); $eyagosskwwmgwmog = $this->ckqaeiskasoyysmg(); $oammesyieqmwuwyi = ["\x61\x6c\154" => $wsqkgswwooewwekw, "\x6e\157\x5f\x70\x61\x72\145\156\164" => [], "\x68\x61\163\x5f\160\141\162\x65\156\164" => []]; if ($eyagosskwwmgwmog) { foreach ($wsqkgswwooewwekw as $momcykaoccoymeig => $oceoauekaygmuoko) { $omwmuycmeqcqokom = $oceoauekaygmuoko->ygqycmmkoiuocoia(); if ($omwmuycmeqcqokom && isset($eyagosskwwmgwmog[$omwmuycmeqcqokom])) { $oammesyieqmwuwyi["\150\x61\163\137\160\x61\x72\145\156\x74"][$omwmuycmeqcqokom][] = $oceoauekaygmuoko; } else { $oammesyieqmwuwyi["\156\x6f\137\160\141\x72\145\x6e\x74"][] = $oceoauekaygmuoko; } } } else { $oammesyieqmwuwyi["\156\x6f\x5f\160\x61\x72\x65\x6e\164"] = $wsqkgswwooewwekw; } return [Constants::NAME => $this->cisyiemkeykgkomc(), Constants::qescuiwgsyuikume => $this->qcgakseyaikigqco(), "\142\165\164\x74\157\x6e\x73" => $this->imswwiyicyksouus(), "\x70\x61\162\x65\156\x74\163" => $eyagosskwwmgwmog, "\163\145\147\155\145\x6e\x74\163" => $oammesyieqmwuwyi, "\143\154\x6f\163\145\137\151\143\x6f\x6e" => IconInterface::ucomcyskmkiqysee, "\141\x72\x72\157\167\x5f\x69\x63\x6f\156" => IconInterface::ckqgusoqoosqqwyo, "\154\x69\x73\x74\137\x74\x69\164\x6c\x65" => __("\x43\x6f\x6e\164\x65\156\x74\163\40\x4c\151\x73\x74", PR__CMN__FOUNDATION), "\143\154\x6f\163\145\x5f\155\145\163\163\141\x67\x65" => __("\103\154\157\163\x65\x20\115\157\x64\x61\x6c", PR__CMN__FOUNDATION)]; } public function imswwiyicyksouus() : array { return []; } public function qoqyomiqwooaeoiy() : bool { return true; } public function enqueue() { } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x73\x68\x6f\162\164\143\157\x64\x65\137\x76\141\x6c\151\144\x5f\160\141\162\x65\x6e\x74\163"), $eyagosskwwmgwmog, $this); } }