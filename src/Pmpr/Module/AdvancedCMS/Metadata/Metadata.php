<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654b455e2bc9b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\141\165\164\x68\x6f\x72"; const UPDATE = "\x75\x70\x64\141\164\145"; const goumieeyyqigueiw = "\143\157\x6d\155\145\156\x74\x73"; const uceokykiyceaouke = "\x73\x74\165\144\x79\137\164\x69\155\145"; public function mameiwsayuyquoeq() { Stat::symcgieuakksimmu(); Widget::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\155\x65\164\141\144\x61\x74\141\137\162\x65\x6e\144\x65\162", [$this, "\162\x65\156\x64\x65\x72"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\155\145\x74\141\x64\141\164\141\137\147\x65\x74\x5f\x69\164\145\155\x73", [$this, "\x77\x61\163\x67\x77\x73\x6f\147\155\x75\161\x75\x71\x65\x61\x61"], 10, 2)->aqaqisyssqeomwom("\x6d\145\x74\x61\144\141\x74\141\137\147\x65\x74\x5f\151\164\x65\x6d\x73\137\x63\157\x75\156\164", [$this, "\x79\x67\155\x63\163\x6d\145\x67\143\x79\163\171\145\157\x73\163"], 10, 2)->aqaqisyssqeomwom("\x6d\x65\x74\141\144\x61\x74\141\137\147\x65\164\137\141\154\154\137\151\164\145\155\163", [$this, "\x73\x6b\x73\x79\153\161\141\x73\147\171\x79\171\161\153\151\145"], 10, 2); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\x69\164\145\x6d\163"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto oouoqimaaqcmccay; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); oouoqimaaqcmccay: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\x55\160\144\141\x74\x65\x64\x20\101\164", PR__MDL__ADVANCED_CMS), self::iwascisiiokuackw => __("\x41\165\164\x68\157\162", PR__MDL__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\x43\162\x65\x61\x74\145\144\40\x41\164", PR__MDL__ADVANCED_CMS), self::goumieeyyqigueiw => __("\x43\157\x6d\155\145\156\x74\x73", PR__MDL__ADVANCED_CMS), self::uceokykiyceaouke => __("\123\x74\x75\x64\x79\40\164\151\155\x65", PR__MDL__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\155\145\164\x61\144\x61\x74\x61\x5f\x61\x6c\x6c\137\151\164\x65\155\x73"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto kciouyuaqkyqomam; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; kciouyuaqkyqomam: gygawoqywkukmqee: } sycygoiaiqqageym: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::yqemseykugmsyeqa => ManipulateSetting::uyomwmskouyyqyyq(), self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto wwkgkaecgiwggcck; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); wwkgkaecgiwggcck: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, self::yqemseykugmsyeqa); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto ywqgcegomwaiuquc; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); $sqeakiwgmmaicmqq = ManipulatePost::squyiyimquqicqke("\x59\x2d\x6d\55\144", $post, false); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: if (!($suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum("\x59\x2d\155\55\144", $post, false))) { goto cmqucgoewuyieoyk; } if ($suckquwcuiuyiogc < $sqeakiwgmmaicmqq) { goto iqcogmsguwoikame; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto gimmuoqwckiseaik; iqcogmsguwoikame: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\55"); gimmuoqwckiseaik: $ugugimquukqwogge->saemoowcasogykak(IconInterface::csgwgkuuasoawegc); cmqucgoewuyieoyk: goto kiwqkcaekqqyuegq; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconInterface::kgqycokugcqioqya); goto kiwqkcaekqqyuegq; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto yqykqysmiquwoasu; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($wsqgggkqsaokoegu, $sqeakiwgmmaicmqq); $ugugimquukqwogge->saemoowcasogykak(IconInterface::mkqaeqmukuiacswc); yqykqysmiquwoasu: goto kiwqkcaekqqyuegq; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\x25\163\x20\x63\x6f\x6d\x6d\x65\x6e\164\163", PR__MDL__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\43\143\157\x6d\x6d\x65\x6e\x74\163\137\143\x6f\156\x74\x61\x69\156\145\x72"); goto kiwqkcaekqqyuegq; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto ayyweymyuuiauamo; } $eqgoocgaqwqcimie = sprintf(__("\x25\163\40\155\151\x6e\165\164\145\x20\x72\x65\x61\x64\151\156\147", PR__MDL__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg); ayyweymyuuiauamo: goto kiwqkcaekqqyuegq; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto miyqyeiwquwsacsm; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto qkcyqocqqwmqgqww; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\163\151\156\147\154\x65\x5f\x76\141\x6c\165\x65"); if ($qyucoagsiyeieyiu) { goto qqewoyookaskiuek; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto iggyqogweyosuikc; } if (1 === count($uyuaosigqymaqsaa)) { goto ygcsmkuycoagwyou; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; omugkkesagcyagmk: } mosqsmqimqgqoase: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\x74\x61\x78\157\156\157\155\x69\145\163", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); kqksuugcgsyeoayy: iggyqogweyosuikc: goto ssoucoucsgccekwe; qqewoyookaskiuek: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); ssoucoucsgccekwe: qkcyqocqqwmqgqww: $ugugimquukqwogge->saemoowcasogykak(IconInterface::uaimoioocayauuca); miyqyeiwquwsacsm: goto kiwqkcaekqqyuegq; } quwcqmyokicssyew: kiwqkcaekqqyuegq: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->ocksiywmkyaqseou("\x6d\x65\164\x61\144\141\x74\141\137\x75\160\144\x61\x74\x65\x5f{$igqsaukqcqscimok}", $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto eegqyykygiccaoeo; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; eegqyykygiccaoeo: qsygcycwieukkgwc: } umgaesggesswoaqe: ywqgcegomwaiuquc: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto soqqemyioggmoakg; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto wmmggowmigekyoso; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); wmmggowmigekyoso: soqqemyioggmoakg: return $ugugimquukqwogge; } }
