<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624298fce69d9             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Cover extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\x6f\x6d\x6d\145\156\164\137\154\151\x73\x74\137\162\x65\156\x64\145\x72"), [$this, "\x72\145\x6e\x64\145\x72"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\157\x6d\155\145\x6e\164\137\146\157\x72\155\137\x61\156\144\137\154\151\163\164\x5f\x72\x65\x6e\x64\145\162"), [$this, "\x69\x73\x69\x79\141\x73\x79\165\x61\153\x75\x6b\x73\151\x61\155"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::ayumqueugowuywqs)) { goto kiwqkcaekqqyuegq; } $this->cecaguuoecmccuse("\x67\x65\x74\x5f\141\166\141\164\x61\x72", [$this, "\x61\x79\x73\x65\151\165\x6d\x6f\141\157\165\x61\x63\161\x63\x75"], 10, 3)->cecaguuoecmccuse("\x67\x65\164\137\x63\157\x6d\155\145\156\164\x5f\x61\165\x74\x68\157\x72", [$this, "\155\x65\165\157\145\165\x6b\151\x77\x6b\145\x75\x6d\147\147\x6b"], 10, 2); kiwqkcaekqqyuegq: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); $ywmkwiwkosakssii["\145\143\x68\x6f"] = false; echo $this->iuygowkemiiwqmiw("\x66\157\x72\155\x5f\141\156\x64\x5f\x6c\x69\x73\x74", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), "\x63\x6f\x6d\155\x65\156\x74\137\154\x69\163\164" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\143\157\x6d\x6d\x65\x6e\164\137\146\x6f\162\x6d" => Form::symcgieuakksimmu()->sqkcuwewwecosise($ywmkwiwkosakssii, $gcqseksiskwueksc)]); } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(Setting::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto quwcqmyokicssyew; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); quwcqmyokicssyew: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto iqcogmsguwoikame; } $qscaoekmoooeuyqg = get_bloginfo("\x6e\x61\155\145"); iqcogmsguwoikame: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\x43\157\x6d\x6d\145\156\x74", PR__MDL__ADVANCED_CMS), self::kqigmeickowqiiyy => 0, "\151\163\x5f\141\152\141\x78" => false, "\151\163\137\x72\x65\x6e\144\x65\162" => true, "\144\141\164\145\x5f\x66\157\x72\155\141\x74" => ManipulateSetting::uyomwmskouyyqyyq(), "\x65\155\160\164\x79\x5f\x6d\145\163\x73\x61\x67\x65" => __("\124\150\x65\162\145\x20\x61\162\x65\40\156\x6f\40\x63\x6f\155\x6d\145\156\164\163\40\x79\145\164\56", PR__MDL__ADVANCED_CMS), "\x67\145\x74\137\143\157\155\x6d\x65\x6e\164\x73\137\x61\162\x67\163" => [], "\143\x6f\x6d\x6d\x65\x6e\x74\x5f\167\141\x69\x74\x69\x6e\147\137\x74\145\x78\x74" => __("\131\x6f\165\162\x20\x63\157\x6d\x6d\x65\156\x74\40\x69\163\x20\x61\167\141\151\164\151\156\x67\40\x6d\157\144\x65\162\x61\x74\151\x6f\x6e\x2e", PR__MDL__ADVANCED_CMS)]); $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\156\x64\x65\162\x5f\143\157\155\x6d\x65\156\x74\x73\x5f\x61\x72\x67\x73"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto gimmuoqwckiseaik; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto cmqucgoewuyieoyk; gimmuoqwckiseaik: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); cmqucgoewuyieoyk: $kcagcoeuiasswusq = []; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\x69\163\137\x61\x6a\x61\x78"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\151\163\137\x72\x65\156\x64\x65\162"]; $qookweymeqawmcwo = ["\x65\x6d\160\x74\171\x5f\x6d\x65\163\x73\141\x67\x65" => $ywmkwiwkosakssii["\x65\x6d\x70\x74\x79\x5f\155\x65\163\x73\x61\x67\x65"], "\150\x61\x73\x5f\x63\157\x6d\155\145\x6e\x74" => false, "\151\x73\137\x61\x6a\x61\170" => $ywmkwiwkosakssii["\x69\x73\x5f\141\x6a\x61\170"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto mosqsmqimqgqoase; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->skiywicuqacekmuw($gcqseksiskwueksc))) { goto ayyweymyuuiauamo; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\147\145\164\137\x63\x6f\x6d\x6d\145\x6e\164\x73\x5f\x61\162\147\x73"], ["\x6e\x75\155\142\145\x72" => ManipulateComment::omkaowmygoqwsywq(), self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments(["\x65\143\x68\x6f" => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\x6d\151\x63\x73\x79\161\x65\143\163\x69\x79\x71\x6d\171\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto yqykqysmiquwoasu; } $qookweymeqawmcwo["\x70\x61\x67\151\156\x61\x74\151\157\x6e"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x67\145\x74\137\143\x6f\x6d\x6d\145\x6e\x74\137\x70\x61\147\151\x6e\x61\x74\151\157\x6e"), '', [self::mswoacegomcucaik => $gcqseksiskwueksc, "\145\143\150\157" => false]); yqykqysmiquwoasu: ayyweymyuuiauamo: $qookweymeqawmcwo["\150\x61\163\137\x63\157\x6d\x6d\145\156\164"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); $qookweymeqawmcwo["\x63\157\165\x6e\164"] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); mosqsmqimqgqoase: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto ygcsmkuycoagwyou; } if (!is_string($kcagcoeuiasswusq)) { goto omugkkesagcyagmk; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; omugkkesagcyagmk: goto kqksuugcgsyeoayy; ygcsmkuycoagwyou: $qookweymeqawmcwo["\x63\x6f\x6d\155\145\156\x74\163"] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\163\160\x69\x6e\x6e\x65\162"] = ManipulateHTML::kqmkicmuscsgqeoi(["\164\x72\141\156\x73\160\x61\x72\145\156\164" => true, self::waguuiqqgsysuukq => "\x32\x78"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\x6c\x69\163\x74", $qookweymeqawmcwo); kqksuugcgsyeoayy: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto ssoucoucsgccekwe; } $uouuguwawimuemic = $this->weysguygiseoukqw(Setting::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto qqewoyookaskiuek; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\155\x65\x6e\164\x5f\141\x76\x61\x74\141\162\x5f\x73\x69\172\145"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\143\x6c\141\x73\163" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\x6d\147", "\143\x6c\141\163\163") : '', "\x61\154\164" => __("\101\165\164\x68\x6f\x72\x20\x4c\x6f\x67\157", PR__MDL__ADVANCED_CMS)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto iggyqogweyosuikc; } $mowgokyeuymuwiew = $uouuguwawimuemic; iggyqogweyosuikc: qqewoyookaskiuek: ssoucoucsgccekwe: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS["\x63\x6f\x6d\x6d\145\156\x74"] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\155\x65\x6e\164\x5f\x61\166\141\164\141\162\137\x73\x69\172\145"), "\x73\155\141\154\154", false); echo $this->iuygowkemiiwqmiw("\151\164\145\x6d", ["\141\162\147\x73" => $ywmkwiwkosakssii, "\144\x65\160\164\x68" => $gquaqgsmiuqsaoum, "\x63\x6f\x6d\x6d\x65\x6e\x74" => $aqqmosqmsuueyaes, "\151\x64" => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), "\164\x65\x78\164" => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), "\160\x6f\163\164" => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), "\160\141\x67\145" => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), "\x74\x69\x6d\145\137\x6d\141\x73\x6b" => __("\45\x31\44\x73\40\141\x74\x20\45\62\44\x73", PR__MDL__ADVANCED_CMS), "\x6d\x61\x78\x5f\x64\x65\160\x74\x68" => ManipulateArray::get($ywmkwiwkosakssii, "\x6d\141\x78\x5f\x64\x65\160\x74\x68"), "\162\x65\x70\x6c\171\x5f\151\x63\157\x6e" => IconFontawesomeInterface::isiauyiaoyuwiamg, "\141\166\x61\x74\141\162\x5f\x73\151\172\x65" => $oiegiwogmwmawkeo]); } }
