<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621bc57da6dfa             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Comment; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Theme extends Common { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\143\x6f\x6d\x6d\x65\156\164\137\x6c\151\x73\164\x5f\162\x65\x6e\x64\145\162"), [$this, "\162\145\x6e\144\145\162"])->qcsmikeggeemccuu($this->ygyygikyocoymgaw("\x63\x6f\x6d\155\x65\156\164\x5f\x66\x6f\162\155\137\x61\156\144\137\154\x69\163\164\137\162\145\156\x64\145\162"), [$this, "\151\x73\x69\x79\141\x73\x79\165\x61\153\165\153\163\x69\141\x6d"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { if (!$this->weysguygiseoukqw(Setting::ayumqueugowuywqs)) { goto yqykqysmiquwoasu; } $this->cecaguuoecmccuse("\147\145\164\137\x61\166\141\164\141\162", [$this, "\x61\171\163\x65\x69\x75\155\157\141\157\165\141\143\x71\x63\x75"], 10, 3)->cecaguuoecmccuse("\147\145\x74\x5f\143\x6f\155\x6d\x65\156\164\x5f\x61\x75\164\150\x6f\162", [$this, "\155\145\x75\x6f\x65\x75\153\x69\167\x6b\145\x75\155\147\147\x6b"], 10, 2); yqykqysmiquwoasu: } public function isiyasyuakuksiam($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::kqigmeickowqiiyy => ManipulatePost::mwikyscisascoeea()]); $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); $ywmkwiwkosakssii["\145\x63\150\157"] = false; echo $this->iuygowkemiiwqmiw("\x66\x6f\x72\155\137\141\x6e\x64\137\x6c\x69\x73\164", [self::mswoacegomcucaik => ManipulatePost::mwikyscisascoeea($gcqseksiskwueksc), "\x63\x6f\x6d\155\x65\156\x74\137\154\x69\163\164" => $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii), "\143\x6f\x6d\155\x65\156\164\137\x66\157\162\155" => Form::symcgieuakksimmu()->sqkcuwewwecosise($ywmkwiwkosakssii, $gcqseksiskwueksc)]); } public function render($ywmkwiwkosakssii = []) { echo $this->wkwiceqaycqsygic('', $ywmkwiwkosakssii); } public function uuyycaeqcawcaiqe($aqqmosqmsuueyaes) : bool { $cuakwceieagskoaa = false; $uagwmwoawiwkycao = $this->weysguygiseoukqw(Setting::osoyyuwymacswyum, []); $aqqmosqmsuueyaes = ManipulateComment::get($aqqmosqmsuueyaes); if (!($aqqmosqmsuueyaes && $uagwmwoawiwkycao && $aqqmosqmsuueyaes->comment_parent)) { goto ayyweymyuuiauamo; } $mkucggyaiaukqoce = ManipulateComment::issssuygyewuaswa($aqqmosqmsuueyaes); $cuakwceieagskoaa = $mkucggyaiaukqoce && ManipulateUser::esmswawesuyogmik($uagwmwoawiwkycao, $mkucggyaiaukqoce); ayyweymyuuiauamo: return $cuakwceieagskoaa; } public function meuoeukiwkeumggk($qscaoekmoooeuyqg, $aqqmosqmsuueyaes) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto mosqsmqimqgqoase; } $qscaoekmoooeuyqg = get_bloginfo("\x6e\x61\x6d\x65"); mosqsmqimqgqoase: return $qscaoekmoooeuyqg; } public function wkwiceqaycqsygic($nsmgceoqaqogqmuw = '', $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::mswoacegomcucaik => null, self::kkcqmwgccaygggcu => 1, self::qescuiwgsyuikume => __("\103\157\x6d\155\145\x6e\164", PR__PKG__ADVANCED_CMS), self::kqigmeickowqiiyy => 0, "\x69\163\137\x61\x6a\141\170" => false, "\x69\x73\137\162\x65\156\144\145\162" => true, "\144\x61\164\x65\137\146\157\x72\x6d\141\x74" => ManipulateSetting::uyomwmskouyyqyyq(), "\145\x6d\x70\164\x79\x5f\x6d\x65\163\x73\141\x67\x65" => __("\x54\150\145\x72\x65\x20\x61\x72\x65\40\x6e\157\40\x63\x6f\x6d\155\145\x6e\x74\x73\40\x79\145\x74\56", PR__PKG__ADVANCED_CMS), "\147\145\164\x5f\143\x6f\155\155\x65\156\x74\163\x5f\x61\162\x67\163" => [], "\x63\x6f\x6d\155\145\156\164\x5f\167\x61\x69\164\151\x6e\147\x5f\x74\145\170\164" => __("\x59\x6f\x75\x72\x20\143\x6f\x6d\x6d\x65\156\x74\40\x69\163\40\x61\167\141\x69\x74\151\156\147\40\155\157\144\145\x72\141\x74\151\x6f\x6e\56", PR__PKG__ADVANCED_CMS)]); $ywmkwiwkosakssii = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\156\x64\145\x72\x5f\x63\157\155\x6d\x65\156\164\x73\x5f\141\x72\147\x73"), $ywmkwiwkosakssii, $nsmgceoqaqogqmuw); $post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik); $qawuqcsueakkgiio = ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu); if ($post) { goto omugkkesagcyagmk; } $gcqseksiskwueksc = ManipulateArray::get($ywmkwiwkosakssii, self::kqigmeickowqiiyy); goto ygcsmkuycoagwyou; omugkkesagcyagmk: $gcqseksiskwueksc = ManipulatePost::mwikyscisascoeea($post, true); ygcsmkuycoagwyou: $kcagcoeuiasswusq = []; $mcgoysmkqsqooceq = $ywmkwiwkosakssii["\x69\163\x5f\x61\152\x61\170"]; $cgkkqqgoqqmmwysq = $ywmkwiwkosakssii["\x69\x73\137\x72\145\x6e\x64\x65\x72"]; $qookweymeqawmcwo = ["\x65\155\x70\164\x79\x5f\x6d\145\163\163\x61\x67\x65" => $ywmkwiwkosakssii["\x65\155\160\x74\171\x5f\155\145\x73\x73\141\147\145"], "\150\141\x73\x5f\143\x6f\x6d\x6d\145\x6e\164" => false, "\x69\x73\x5f\x61\152\x61\x78" => $ywmkwiwkosakssii["\151\x73\x5f\141\x6a\141\x78"], self::qescuiwgsyuikume => $ywmkwiwkosakssii[self::qescuiwgsyuikume]]; if (!$gcqseksiskwueksc) { goto qqewoyookaskiuek; } if (!(($cgkkqqgoqqmmwysq || $mcgoysmkqsqooceq) && $this->skiywicuqacekmuw($gcqseksiskwueksc))) { goto iggyqogweyosuikc; } $weeomyummeocueyk = array_merge($ywmkwiwkosakssii["\x67\x65\164\137\143\157\155\155\145\156\164\163\x5f\141\162\x67\x73"], ["\x6e\165\155\142\145\x72" => ManipulateComment::omkaowmygoqwsywq(), self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::kqigmeickowqiiyy => $gcqseksiskwueksc]); $kcagcoeuiasswusq = ManipulateComment::ciugwooasaqcywas(ConvertArray::comkeiiwgwaqmcwe($weeomyummeocueyk)); $kcagcoeuiasswusq = wp_list_comments(["\145\x63\x68\x6f" => false, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::wwgusigoaksqmwsm => [$this, "\x79\155\x69\143\163\x79\x71\145\x63\163\x69\171\161\x6d\x79\x63"]], $kcagcoeuiasswusq); if ($mcgoysmkqsqooceq) { goto kqksuugcgsyeoayy; } $qookweymeqawmcwo["\160\x61\147\151\156\x61\x74\151\157\156"] = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\147\145\164\x5f\143\157\x6d\x6d\x65\156\164\137\x70\x61\147\151\156\141\x74\151\x6f\x6e"), '', [self::mswoacegomcucaik => $gcqseksiskwueksc, "\145\143\150\x6f" => false]); kqksuugcgsyeoayy: iggyqogweyosuikc: $qookweymeqawmcwo["\150\x61\x73\137\143\157\x6d\155\x65\156\164"] = ManipulatePost::gamoemyysmgugccu($gcqseksiskwueksc); $qookweymeqawmcwo["\143\x6f\x75\x6e\x74"] = DecoratorPost::qmegicmsiwuuwysa($gcqseksiskwueksc); qqewoyookaskiuek: if (!$mcgoysmkqsqooceq || $cgkkqqgoqqmmwysq) { goto qkcyqocqqwmqgqww; } if (!is_string($kcagcoeuiasswusq)) { goto ssoucoucsgccekwe; } $nsmgceoqaqogqmuw = $kcagcoeuiasswusq; ssoucoucsgccekwe: goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $qookweymeqawmcwo["\143\157\155\x6d\145\156\x74\x73"] = $kcagcoeuiasswusq; $qookweymeqawmcwo["\x73\x70\151\x6e\x6e\145\x72"] = ManipulateHTML::kqmkicmuscsgqeoi(["\164\x72\x61\156\163\160\x61\x72\145\x6e\x74" => true, self::waguuiqqgsysuukq => "\62\170"]); $nsmgceoqaqogqmuw = $this->iuygowkemiiwqmiw("\154\x69\x73\164", $qookweymeqawmcwo); miyqyeiwquwsacsm: return $nsmgceoqaqogqmuw; } public function ayseiumoaouacqcu($mowgokyeuymuwiew, $aqqmosqmsuueyaes, $oiegiwogmwmawkeo) { if (!$this->uuyycaeqcawcaiqe($aqqmosqmsuueyaes)) { goto wmmggowmigekyoso; } $uouuguwawimuemic = $this->weysguygiseoukqw(Setting::aammuqouwoakgwgq . self::mswocgcucqoaesaa, 0); if (!$uouuguwawimuemic) { goto ywqgcegomwaiuquc; } $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\155\155\x65\156\164\x5f\x61\x76\141\164\x61\x72\137\x73\151\172\x65"), $oiegiwogmwmawkeo, false); $wwgucssaecqekuek = ["\143\154\x61\x73\163" => $mowgokyeuymuwiew ? DOMCrawler::waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\155\x67", "\143\x6c\141\x73\163") : '', "\x61\154\164" => __("\101\165\164\x68\x6f\162\40\114\x6f\147\x6f", PR__PKG__ADVANCED_CMS)]; $uouuguwawimuemic = ManipulateAttachment::qaeeusqkgwagwaqc($uouuguwawimuemic, $oiegiwogmwmawkeo, $wwgucssaecqekuek); if (!$uouuguwawimuemic) { goto eegqyykygiccaoeo; } $mowgokyeuymuwiew = $uouuguwawimuemic; eegqyykygiccaoeo: ywqgcegomwaiuquc: wmmggowmigekyoso: return $mowgokyeuymuwiew; } public function ymicsyqecsiyqmyc($aqqmosqmsuueyaes, $ywmkwiwkosakssii = [], $gquaqgsmiuqsaoum = 0) { $GLOBALS["\143\157\x6d\x6d\x65\x6e\x74"] = $aqqmosqmsuueyaes; $oiegiwogmwmawkeo = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\143\157\155\x6d\x65\x6e\x74\x5f\141\x76\x61\x74\x61\162\137\163\x69\172\145"), "\163\155\x61\x6c\154", false); echo $this->iuygowkemiiwqmiw("\151\x74\x65\x6d", ["\141\162\x67\x73" => $ywmkwiwkosakssii, "\x64\x65\x70\x74\150" => $gquaqgsmiuqsaoum, "\x63\157\x6d\x6d\145\156\x74" => $aqqmosqmsuueyaes, "\151\x64" => ManipulateComment::mwikyscisascoeea($aqqmosqmsuueyaes), "\x74\145\170\164" => ManipulateComment::souwykwwmyygqyqi($aqqmosqmsuueyaes), "\x70\x6f\x73\x74" => ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik), "\x70\x61\x67\145" => ManipulateArray::get($ywmkwiwkosakssii, self::kkcqmwgccaygggcu, 1), "\164\151\155\145\137\x6d\141\x73\153" => __("\45\61\44\163\40\141\x74\x20\x25\62\44\x73", PR__PKG__ADVANCED_CMS), "\155\x61\170\137\144\x65\160\x74\150" => ManipulateArray::get($ywmkwiwkosakssii, "\x6d\x61\170\x5f\x64\x65\160\164\x68"), "\162\x65\160\x6c\171\137\x69\x63\157\x6e" => IconFontawesomeInterface::isiauyiaoyuwiamg, "\x61\x76\x61\x74\141\x72\x5f\163\x69\172\x65" => $oiegiwogmwmawkeo]); } }
