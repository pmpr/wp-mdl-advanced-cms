<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6160476918f4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Widget; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTaxonomy; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Taxonomy extends Common { const SHOW_COUNT = "\x73\150\x6f\167\x5f\143\157\165\x6e\164"; const NORMAL = "\x6e\157\162\x6d\141\x6c"; const RECENT = "\162\x65\143\145\x6e\164"; const MOST_USED = "\155\x6f\163\164\137\165\163\145\x64"; const JUST_TOP_PARENTS = "\152\x75\x73\164\x5f\164\x6f\160\x5f\160\141\x72\x65\x6e\x74\x73"; const DONT_SHOW = "\x64\x6f\x6e\164\x5f\x73\x68\x6f\x77"; const SHOW_POST_COUNT = "\163\x68\157\167\137\x70\x6f\x73\164\x5f\143\x6f\x75\x6e\164"; const SHOW_CHILD_COUNT = "\163\150\157\167\137\143\x68\151\x6c\144\x5f\143\157\165\156\x74"; const TAG_CLOUD = "\164\141\147\137\143\x6c\x6f\165\x64"; public function __construct() { parent::__construct(__("\x54\x61\x78\157\x6e\157\155\151\x65\163", PR__PKG__ADVANCED_CMS), __("\104\x69\163\x70\x6c\x61\171\40\x74\x68\145\x20\164\141\170\157\156\x6f\x6d\x69\145\x73\56", PR__PKG__ADVANCED_CMS)); } public function ugmceccgwaaaigiy() : array { return [self::TITLE => ["\156\x61\155\x65" => __("\124\151\164\154\x65", PR__PKG__ADVANCED_CMS)], self::COUNT => ["\x6e\x61\x6d\145" => __("\103\157\x75\x6e\x74", PR__PKG__ADVANCED_CMS), "\144\145\x66\141\x75\x6c\x74" => 20, "\141\163\55\x6e\x75\155\142\x65\162"], self::SHOW_COUNT => ["\x74\x79\x70\145" => "\142\x73\163\145\154\x65\143\x74", "\x6e\x61\155\x65" => __("\x53\150\x6f\x77\40\x43\157\165\156\x74", PR__PKG__ADVANCED_CMS), "\157\160\164\x69\157\156\163" => [self::DONT_SHOW => __("\x44\x6f\156\x74\x20\123\x68\157\x77", PR__PKG__ADVANCED_CMS), self::SHOW_POST_COUNT => __("\123\x68\x6f\167\x20\120\157\163\164\40\103\x6f\x75\x6e\x74", PR__PKG__ADVANCED_CMS), self::SHOW_CHILD_COUNT => __("\123\x68\x6f\x77\40\103\150\151\154\144\x20\103\x6f\x75\156\x74", PR__PKG__ADVANCED_CMS)]], self::TAXONOMY => ["\x74\171\x70\x65" => "\x62\163\x73\x65\x6c\x65\143\164", "\x6e\141\x6d\x65" => __("\x54\x61\170\x6f\x6e\157\155\x79", PR__PKG__ADVANCED_CMS), "\x6f\160\x74\151\x6f\156\x73" => ManipulateTaxonomy::ciugwooasaqcywas([self::OUTPUT => self::LABELS])], self::TYPE => ["\164\x79\160\x65" => "\142\163\163\145\154\145\143\x74", "\x6e\141\x6d\x65" => __("\x54\x79\x70\x65", PR__PKG__ADVANCED_CMS), "\157\160\164\x69\x6f\156\x73" => [self::NORMAL => __("\116\157\162\x6d\x61\154", PR__PKG__ADVANCED_CMS), self::MOST_USED => __("\115\157\163\164\40\125\x73\x65\x64", PR__PKG__ADVANCED_CMS), self::JUST_TOP_PARENTS => __("\112\x75\x73\164\40\124\x6f\x70\x20\114\145\x76\145\x6c\x20\x50\141\x72\145\x6e\164\163", PR__PKG__ADVANCED_CMS)]], self::SHOW_TEMPLATE => ["\164\171\160\x65" => "\142\163\163\x65\154\x65\143\x74", "\x6e\x61\x6d\x65" => __("\x53\x68\157\x77\40\124\145\155\x70\154\x61\164\145", PR__PKG__ADVANCED_CMS), "\157\x70\x74\151\157\156\x73" => [self::LIST => __("\x4c\151\163\x74", PR__PKG__ADVANCED_CMS), self::TAG_CLOUD => __("\x54\141\147\40\103\154\x6f\x75\144", PR__PKG__ADVANCED_CMS)]]]; } public function gayqqwwuycceosii($ywmkwiwkosakssii = [], $owgumcsyqsamiemg = []) : array { goto wcugqegqsuuuwqao; emmsycooskoqmgeg: switch ($sqeykgyoooqysmca) { case self::MOST_USED: $ywmkwiwkosakssii[self::ORDERBY] = "\143\x6f\x75\156\x74"; goto scisgsyemmsekgos; case self::JUST_TOP_PARENTS: $ywmkwiwkosakssii["\x70\141\162\145\x6e\164"] = "\60"; goto scisgsyemmsekgos; case self::NORMAL: goto scisgsyemmsekgos; } goto ouamogymawucwswu; ouamogymawucwswu: cewmoqyysgsmuiya: goto mugqyyeayeyggqqk; wyuemgggaqogsmsq: $aoaskuimsmmcgwce = ManipulateArray::get($owgumcsyqsamiemg, self::SHOW_COUNT); goto guykyqecgswcsmws; kkumywowcoycymeo: $aoaskuimsmmcgwce = $aoaskuimsmmcgwce !== self::DONT_SHOW; goto miweggwqeiaeweia; cwwmimggaaecmucw: iwsuawwqomaowuii: goto awoaooyoeoyeeqee; qgeugwymkkiacwoc: $ywmkwiwkosakssii = [self::ORDER => "\144\145\x73\x63", self::NUMBER => $uuyoeicyoayimaoa]; goto emmsycooskoqmgeg; oomguqikqokqwgku: $qookweymeqawmcwo = []; goto samwkqgwouggsguc; mqicocmqegwukkwg: $qqscaoyqikuyeoaw = ManipulateArray::get($owgumcsyqsamiemg, self::SHOW_TEMPLATE, self::LIST); goto qgeugwymkkiacwoc; samwkqgwouggsguc: if (!$uyuaosigqymaqsaa) { goto iwsuawwqomaowuii; } goto wyuemgggaqogsmsq; guykyqecgswcsmws: if ($aoaskuimsmmcgwce === self::SHOW_CHILD_COUNT) { goto wagqgeqymeqoeuyi; } goto kkumywowcoycymeo; ciykoyeioqgyaeqo: $kesssewsiegssiya = ManipulateArray::get($owgumcsyqsamiemg, self::TAXONOMY, "\143\141\x74\145\147\157\x72\x79"); goto mqicocmqegwukkwg; kqqiegkuqagcqsya: wagqgeqymeqoeuyi: goto ousiuuwgwkiyikyq; aomysykcgikegiau: $qookweymeqawmcwo = [self::ITEMS => $uyuaosigqymaqsaa, self::TITLE => ManipulateArray::get($owgumcsyqsamiemg, self::TITLE), self::SHOW_COUNT => $aoaskuimsmmcgwce, self::OUTPUT_TEMPLATE => $qqscaoyqikuyeoaw]; goto cwwmimggaaecmucw; ousiuuwgwkiyikyq: foreach ($uyuaosigqymaqsaa as $momcykaoccoymeig => $iwewcwusemqaiggk) { goto kqgcyoscsusgoaqi; eogwckcymuugikuy: omqiayeucoioqoao: goto msemumccgceyugmg; wkeuuycukmuqiaom: if (!$okcscwesammossuq) { goto ugqaaewwmkocwwgy; } goto wakmayaoqoskekqy; owmuceyswmgueasi: $iwewcwusemqaiggk->count = $gaeqamemwmwsyukm; goto mwsmsguqqkcwiiuk; qmuwoecuacmkwgem: ugqaaewwmkocwwgy: goto owmuceyswmgueasi; ueigkucgaucgeimc: $okcscwesammossuq = ManipulateTerm::mmoaikqueyiwcesm($iwewcwusemqaiggk, ["\x66\151\145\x6c\144\x73" => "\x69\144\x73"]); goto sggawugoykqcmsug; wakmayaoqoskekqy: $gaeqamemwmwsyukm = count($okcscwesammossuq); goto qmuwoecuacmkwgem; sggawugoykqcmsug: $gaeqamemwmwsyukm = 0; goto wkeuuycukmuqiaom; eeauyscekuckoues: wgewmqieuamsoayy: goto eogwckcymuugikuy; kqgcyoscsusgoaqi: if (!$iwewcwusemqaiggk) { goto wgewmqieuamsoayy; } goto ueigkucgaucgeimc; mwsmsguqqkcwiiuk: $uyuaosigqymaqsaa[$momcykaoccoymeig] = $iwewcwusemqaiggk; goto eeauyscekuckoues; msemumccgceyugmg: } goto ogsaaqsaogcqiouy; wcugqegqsuuuwqao: $sqeykgyoooqysmca = ManipulateArray::get($owgumcsyqsamiemg, self::TYPE, self::NORMAL); goto asiqwuoswmigcaki; acsqgiuageaasiyy: $uyuaosigqymaqsaa = ManipulateTerm::ciugwooasaqcywas($kesssewsiegssiya, $ywmkwiwkosakssii); goto oomguqikqokqwgku; ogsaaqsaogcqiouy: igooksugieceoege: goto iwekmyyccgiyuecc; miweggwqeiaeweia: goto qoqskyuuwueqkquk; goto kqqiegkuqagcqsya; asiqwuoswmigcaki: $uuyoeicyoayimaoa = ManipulateArray::get($owgumcsyqsamiemg, self::COUNT, 20); goto ciykoyeioqgyaeqo; mugqyyeayeyggqqk: scisgsyemmsekgos: goto acsqgiuageaasiyy; awoaooyoeoyeeqee: return $qookweymeqawmcwo; goto ogqmesokykywseys; ikqqskkqqwmwssoo: qoqskyuuwueqkquk: goto aomysykcgikegiau; iwekmyyccgiyuecc: $aoaskuimsmmcgwce = true; goto ikqqskkqqwmwssoo; ogqmesokykywseys: } }
