<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             661e411869b0b             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Metadata; use Pmpr\Common\Foundation\Data\Metadata as Data; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Decorator\Taxonomy\DecoratorTaxonomy; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Taxonomy; class Metadata extends Common { const iwascisiiokuackw = "\x61\x75\164\x68\157\x72"; const UPDATE = "\x75\160\x64\141\164\x65"; const goumieeyyqigueiw = "\143\157\155\x6d\x65\x6e\164\163"; const uceokykiyceaouke = "\x73\x74\165\144\x79\137\x74\151\155\x65"; public function mameiwsayuyquoeq() { Stat::symcgieuakksimmu(); Widget::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->waqewsckuayqguos("\155\145\164\141\144\x61\x74\141\x5f\162\x65\x6e\x64\145\x72", [$this, "\x72\145\x6e\x64\x65\162"]); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom("\155\145\x74\x61\144\141\164\141\x5f\x67\x65\164\137\151\164\145\x6d\x73", [$this, "\167\x61\x73\x67\167\x73\x6f\x67\155\x75\161\165\161\145\x61\x61"], 10, 2)->aqaqisyssqeomwom("\x6d\145\x74\x61\144\141\x74\x61\x5f\147\x65\x74\x5f\151\164\145\x6d\163\137\x63\157\165\x6e\164", [$this, "\171\x67\x6d\143\163\155\145\147\143\171\163\x79\145\157\163\163"], 10, 2)->aqaqisyssqeomwom("\x6d\145\x74\141\144\x61\164\141\x5f\147\x65\164\x5f\141\x6c\154\137\x69\x74\145\155\x73", [$this, "\163\153\163\171\153\161\x61\163\x67\171\x79\171\x71\153\151\145"], 10, 2); } public function render($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::uwceyikaaaqgkkee => "\x69\164\145\x6d\163"]); if (isset($ywmkwiwkosakssii[self::qwumqqyuasyskkkc])) { goto kuicqywysciceggs; } $ywmkwiwkosakssii[self::qwumqqyuasyskkkc] = $this->wasgwsogmuquqeaa([], $ywmkwiwkosakssii); kuicqywysciceggs: echo $this->iuygowkemiiwqmiw($ywmkwiwkosakssii[self::uwceyikaaaqgkkee], $ywmkwiwkosakssii); } public function sksykqasgyyyqkie() : array { $oammesyieqmwuwyi = [self::UPDATE => __("\x55\160\144\x61\164\145\144\40\101\x74", PR__MDL__ADVANCED_CMS), self::iwascisiiokuackw => __("\x41\165\x74\x68\x6f\x72", PR__MDL__ADVANCED_CMS), self::wmmucsiyiyusmssm => __("\103\x72\145\141\164\145\x64\40\x41\164", PR__MDL__ADVANCED_CMS), self::goumieeyyqigueiw => __("\103\x6f\155\155\x65\x6e\x74\x73", PR__MDL__ADVANCED_CMS), self::uceokykiyceaouke => __("\123\x74\165\x64\171\x20\164\151\x6d\145", PR__MDL__ADVANCED_CMS)]; $oammesyieqmwuwyi = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6d\145\x74\141\144\x61\x74\x61\x5f\141\x6c\154\x5f\x69\x74\x65\155\x73"), $oammesyieqmwuwyi); $seyqqsmuaiegkeeq = ManipulateTaxonomy::ciugwooasaqcywas(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { if (!$kesssewsiegssiya instanceof WP_Taxonomy) { goto eqkauqciwewmgeoi; } $oammesyieqmwuwyi[$kesssewsiegssiya->name] = $kesssewsiegssiya->labels->singular_name; eqkauqciwewmgeoi: sciwggaeogcoesiu: } mkwskuycuyguqqok: return $oammesyieqmwuwyi; } public function ygmcsmegcysyeoss($gaeqamemwmwsyukm = 0, $ywmkwiwkosakssii = []) { return $gaeqamemwmwsyukm; } public function wasgwsogmuquqeaa($oammesyieqmwuwyi = [], $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => '', self::cgiswgcumueqgcmw => 0, self::yqemseykugmsyeqa => ManipulateSetting::uyomwmskouyyqyyq(), self::ackcaikowcokggsc => []]); $post = ManipulatePost::get(ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik)); $uuyoeicyoayimaoa = ManipulateArray::get($ywmkwiwkosakssii, self::cgiswgcumueqgcmw, 0); $ooiewiwkegguusum = ManipulateArray::get($ywmkwiwkosakssii, self::ackcaikowcokggsc, []); if (!($uuyoeicyoayimaoa > 0 && $uuyoeicyoayimaoa < count($ooiewiwkegguusum))) { goto kwagwqyusyiyoaqs; } $ooiewiwkegguusum = array_slice($ooiewiwkegguusum, 0, $uuyoeicyoayimaoa); kwagwqyusyiyoaqs: $saqmwwmqiwmkiwaa = ManipulateArray::get($ywmkwiwkosakssii, self::yqemseykugmsyeqa); if (!($post && is_array($ooiewiwkegguusum) && $ooiewiwkegguusum)) { goto eiawsoasmscmqswa; } $wsqgggkqsaokoegu = ManipulatePost::squyiyimquqicqke($saqmwwmqiwmkiwaa, $post); $eqomywkesmwsiaik = $this->sksykqasgyyyqkie(); $sqeakiwgmmaicmqq = ManipulatePost::squyiyimquqicqke("\131\55\155\x2d\x64", $post, false); foreach ($ooiewiwkegguusum as $momcykaoccoymeig => $igqsaukqcqscimok) { $eqgoocgaqwqcimie = ''; $ugugimquukqwogge = new Data(); $ugugimquukqwogge->usuqmwksoeaayaig($igqsaukqcqscimok)->jyumyyugiwwiqomk(($momcykaoccoymeig + 1) * 5)->gswweykyogmsyawy(ManipulateArray::get($eqomywkesmwsiaik, $igqsaukqcqscimok)); $iakkeikwceeomgyq = null; switch ($igqsaukqcqscimok) { case self::UPDATE: if (!($suckquwcuiuyiogc = ManipulatePost::oukqamgqowciwoum("\131\x2d\155\x2d\144", $post, false))) { goto cggowoquuiwqkyew; } if ($suckquwcuiuyiogc < $sqeakiwgmmaicmqq) { goto eequksumcoogyoem; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($this->eciukqcoqmyacwow($suckquwcuiuyiogc), $suckquwcuiuyiogc); goto uukumskkeggaowck; eequksumcoogyoem: $eqgoocgaqwqcimie = ManipulateHTML::gmqyuaqwgiayskei("\55"); uukumskkeggaowck: $ugugimquukqwogge->saemoowcasogykak(IconInterface::csgwgkuuasoawegc); cggowoquuiwqkyew: goto iomcaiwewsawiamu; case self::iwascisiiokuackw: $iakkeikwceeomgyq = ManipulatePost::mguqscccckuywsya($post); $eqgoocgaqwqcimie = ManipulatePost::ekauksssqmmykouq($post); $ugugimquukqwogge->qoowicksguscqyks(ManipulatePost::qkweigiqsaaigqau($post))->saemoowcasogykak(IconInterface::kgqycokugcqioqya); goto iomcaiwewsawiamu; case self::wmmucsiyiyusmssm: if (!$wsqgggkqsaokoegu) { goto ocokwuuquaokmasc; } $eqgoocgaqwqcimie = ManipulateHTML::yekemqwyimcqgeuk($wsqgggkqsaokoegu, $sqeakiwgmmaicmqq); $ugugimquukqwogge->saemoowcasogykak(IconInterface::mkqaeqmukuiacswc); ocokwuuquaokmasc: goto iomcaiwewsawiamu; case self::goumieeyyqigueiw: $eqgoocgaqwqcimie = sprintf(__("\45\163\40\143\x6f\x6d\x6d\x65\156\x74\x73", PR__MDL__ADVANCED_CMS), DecoratorPost::qmegicmsiwuuwysa($post)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qmowyycmkagomiiy)->qoowicksguscqyks(ManipulatePost::ycqquoiyyuesegsy($post) . "\43\x63\157\155\x6d\x65\156\164\x73\x5f\x63\x6f\156\x74\x61\151\x6e\x65\162"); goto iomcaiwewsawiamu; case self::uceokykiyceaouke: $moowucgmewesiwsu = ManipulatePost::cuoieqacocyyookg($post); if (!$moowucgmewesiwsu) { goto yiwiqaqmwiogawym; } $eqgoocgaqwqcimie = sprintf(__("\45\x73\40\x6d\151\x6e\165\164\x65\40\x72\x65\x61\144\151\x6e\147", PR__MDL__ADVANCED_CMS), $this->msywmyaoqmaegsuy($moowucgmewesiwsu)); $ugugimquukqwogge->saemoowcasogykak(IconInterface::qcyaqcamyiuukygg); yiwiqaqmwiogawym: goto iomcaiwewsawiamu; default: if (!DecoratorTaxonomy::myagqecycsaiyqsk($igqsaukqcqscimok)) { goto qmiwsequckckoaei; } $kesssewsiegssiya = ManipulateTaxonomy::imgymusqgccqsqqq($igqsaukqcqscimok); if (!$kesssewsiegssiya) { goto qgegkeomwscwwiuw; } $cekoogweeooasayu = $kesssewsiegssiya->public && $kesssewsiegssiya->publicly_queryable; $qyucoagsiyeieyiu = ManipulateArray::get($kesssewsiegssiya, "\163\151\156\x67\154\x65\x5f\x76\x61\x6c\x75\145"); if ($qyucoagsiyeieyiu) { goto egasokooagakisiy; } $uyuaosigqymaqsaa = ManipulatePost::weescwwgqgiyumyw($post, $igqsaukqcqscimok); if (!$uyuaosigqymaqsaa) { goto mswsoaimesegiiic; } if (1 === count($uyuaosigqymaqsaa)) { goto wcesymwqykqoyuqk; } foreach ($uyuaosigqymaqsaa as $ciyackuwsqkoqese => $iwewcwusemqaiggk) { $uyuaosigqymaqsaa[$ciyackuwsqkoqese] = [self::qescuiwgsyuikume => ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk), self::ogigqueukwysusii => $cekoogweeooasayu ? ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk) : false]; meawswgwagoqgkye: } goacqqsgaaigyuaw: $eqgoocgaqwqcimie = $this->iuygowkemiiwqmiw("\x74\x61\x78\x6f\156\157\155\x69\x65\x73", [self::qwumqqyuasyskkkc => $uyuaosigqymaqsaa]); goto usqgaogkqgemuima; wcesymwqykqoyuqk: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); usqgaogkqgemuima: mswsoaimesegiiic: goto kecwuwwcwokuksyq; egasokooagakisiy: $this->uayquiakegwyiocs($eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu); kecwuwwcwokuksyq: qgegkeomwscwwiuw: $ugugimquukqwogge->saemoowcasogykak(IconInterface::uaimoioocayauuca); qmiwsequckckoaei: goto iomcaiwewsawiamu; } sqiciiuwmykocycc: iomcaiwewsawiamu: $ugugimquukqwogge->iygyugseyaqwywyg($eqgoocgaqwqcimie)->kmaeqisgkicagake($iakkeikwceeomgyq); $ugugimquukqwogge = $this->ocksiywmkyaqseou("\x6d\x65\164\x61\x64\x61\x74\141\137\x75\x70\x64\141\164\x65\137{$igqsaukqcqscimok}", $ugugimquukqwogge, $post, $igqsaukqcqscimok); if (!$ugugimquukqwogge->qooeaookuemoqecm()) { goto goeoymmqqqeeoime; } $oammesyieqmwuwyi[$igqsaukqcqscimok] = $ugugimquukqwogge; goeoymmqqqeeoime: kiqogmwcgcamwiig: } yowsmsiyimmimemc: eiawsoasmscmqswa: return $oammesyieqmwuwyi; } public function uayquiakegwyiocs(&$eqgoocgaqwqcimie, $ugugimquukqwogge, $post, $kesssewsiegssiya, $cekoogweeooasayu) { $iwewcwusemqaiggk = ManipulatePost::kckogqkiycqeumoa($post, ManipulateTaxonomy::aakmagwggmkoiiyu($kesssewsiegssiya)); if (!$iwewcwusemqaiggk) { goto qmeoaqmsuseueqiy; } $eqgoocgaqwqcimie = ManipulateTerm::qcgakseyaikigqco($iwewcwusemqaiggk); if (!$cekoogweeooasayu) { goto ickcmqoiosquugwe; } $ugugimquukqwogge->qoowicksguscqyks(ManipulateTerm::qmgcisuuikgmqcsu($iwewcwusemqaiggk, $kesssewsiegssiya)); ickcmqoiosquugwe: qmeoaqmsuseueqiy: return $ugugimquukqwogge; } }
