<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc50360386             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Form\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Group extends OptionAwareField { protected array $fields = []; protected array $nonDuplicate = []; public function __construct(?string $aokagokqyuysuksm, ?string $ymqmyyeuycgmigyo, array $ikgwqyuyckaewsow = [], ?string $mkqqqewsokcswckc = null) { parent::__construct("\x67\162\x6f\x75\x70", $aokagokqyuysuksm, $ymqmyyeuycgmigyo, $mkqqqewsokcswckc); $this->sanitizer = null; $this->acauweqyyugwisqc(["\x6c\x69\155\151\164" => 0, "\x73\157\162\164\x61\142\154\145" => false, "\162\x65\x6d\x6f\166\x65\137\x62\x75\x74\x74\x6f\x6e" => null])->yecmagkckgkwukuq($ymqmyyeuycgmigyo)->qigsyyqgewgskemg("\142\x67\x2d\x74\x72\x61\156\x73\160\x61\162\145\x6e\164\40\146\x6f\162\x6d\55\143\x6f\156\164\x61\x69\x6e\145\x72\40\143\157\x6c\x2d\x31\62")->ewweaossowcqywaw($ikgwqyuyckaewsow); } public function sosuookgumsgyyyc($uuyoeicyoayimaoa) : self { $this->gmywsauuqwcmakuc("\162\157\167\x2d\x6c\151\x6d\x69\164", $uuyoeicyoayimaoa); return $this; } public function yecmagkckgkwukuq(?string $pkyyagewkiyckmwy) : self { if ($pkyyagewkiyckmwy) { $this->acauweqyyugwisqc(["\x61\x64\144\x5f\142\x75\164\164\x6f\156" => sprintf(__("\x41\x64\144\x20\116\x65\x77\40\x25\x73", PR__CMN__FOUNDATION), $pkyyagewkiyckmwy), "\x67\x72\x6f\x75\160\137\164\x69\x74\154\145" => sprintf("\x25\163\x20\173\x23\x7d", $pkyyagewkiyckmwy)]); } return $this; } public function ugmceccgwaaaigiy() : ?array { return $this->fields; } public function acakyumkgoeiskqq(array $ikgwqyuyckaewsow) : self { $this->fields = $ikgwqyuyckaewsow; return $this; } public function omsoosuoikgueyke() : self { $this->qigsyyqgewgskemg("\143\x6f\x6c\55\x6c\147\x2d\x36"); return $this; } public function usosgsaaimqcysyk() : self { $this->qigsyyqgewgskemg("\143\157\154\55\x6c\147\x2d\x36\40\143\157\154\55\x78\x6c\x2d\x34"); return $this; } public function wygoskowywcuyaiq() : self { $this->usosgsaaimqcysyk(); return $this; } public function mkksewyosgeumwsa(Field $aiowsaccomcoikus) : self { if (!$aiowsaccomcoikus->yywskysiycwkwsgw()) { $aiowsaccomcoikus->jyumyyugiwwiqomk(count($this->ugmceccgwaaaigiy()) + 1); } if (!in_array($aiowsaccomcoikus->gueasuouwqysmomu(), ["\x63\150\x65\x63\153\x62\157\170", "\x72\141\144\x69\x6f"])) { $aiowsaccomcoikus->yoimakcqmoqokkcu(); } else { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } $this->fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $aiowsaccomcoikus; return $this; } public function ewweaossowcqywaw($ikgwqyuyckaewsow) : self { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $this->mkksewyosgeumwsa($aiowsaccomcoikus); } return $this; } public function awaeegwoiqoisoam(?array $ikgwqyuyckaewsow = [], $qsycuegoicqcqkmo = "\x61\x6e\144", $wumguikkgaigkoee = []) : self { if (!$wumguikkgaigkoee) { $wumguikkgaigkoee = ["\x73\165\x62\x6d\151\x74" => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(sprintf(__("\123\157\162\162\x79\x2c\40\171\x6f\165\x20\x63\x61\x6e\x27\164\x20\163\x75\x62\155\x69\164\40\146\157\162\x6d\x2e\x20\x53\157\x6d\145\x20\x66\x69\x65\154\x64\47\x73\x20\166\x61\x6c\x75\x65\x20\x69\x73\x20\144\x75\x70\x6c\x69\143\x61\164\145\x64\40\x69\x6e\40\147\x72\157\x75\x70\54\x20\160\x6c\145\141\x73\x65\40\x66\151\170\x20\145\162\162\x6f\x72\x73\40\141\x6e\x64\40\x74\x72\171\40\x61\x67\141\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu())), "\141\144\x64\x5f\156\145\x77" => $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(sprintf(__("\123\157\162\x72\x79\x2c\x20\x79\157\165\40\x63\x61\x6e\x27\x74\40\x61\144\x64\40\156\145\x77\x20\x25\x73\x2e\x20\x53\x6f\x6d\145\40\x66\x69\x65\154\x64\x27\x73\x20\x76\x61\154\x75\x65\x20\x69\x73\40\x64\x75\160\x6c\151\143\x61\x74\x65\144\x2c\x20\x70\x6c\x65\141\163\x65\x20\146\x69\x78\x20\145\x72\x72\x6f\162\x73\40\141\156\144\x20\x74\162\171\x20\x61\x67\x61\x69\x6e\56", PR__CMN__FOUNDATION), $this->aakmagwggmkoiiyu()))]; } $this->nonDuplicate[] = ["\155\145\x73\x73\141\x67\145\x73" => $wumguikkgaigkoee, Constants::ymckmcsiymwqucoq => $ikgwqyuyckaewsow, Constants::cwsguekoagqkaesm => $qsycuegoicqcqkmo]; return $this; } public function iaogqeuosowauooc() : array { return $this->nonDuplicate; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { $aiowsaccomcoikus[Constants::ciyoccqkiamemcmm] = $this->qooeaookuemoqecm(); } if ($wmeooiyuiyagywsc = $this->iaogqeuosowauooc()) { $this->usoqcyyugsuyiewc("\x70\x72\x2d\x6e\157\156\55\144\x75\x70\154\x69\143\141\164\145\x2d\147\162\157\x75\160")->eskgwaywimqcwcyy("\x6e\157\x6e\55\x64\x75\160\x6c\151\x63\x61\164\145", json_encode($wmeooiyuiyagywsc)); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); $this->options[Constants::iikosyqiawkweouo] = $this->ccekeuwwqqoiwuwy(); } }
