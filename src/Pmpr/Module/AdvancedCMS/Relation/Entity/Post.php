<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d82048fb2a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Relation\Manager\PostManager; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\103\165\x73\164\x6f\155\x20\x50\157\x73\x74\40\124\171\x70\x65\40\122\x65\154\141\164\151\x6f\x6e\x73", PR__MDL__ADVANCED_CMS); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\144\x5f\x6d\145\164\141\x5f\142\x6f\x78\145\x73", [$this, "\163\151\x6b\161\x67\147\x77\155\x6d\171\x6b\165\x69\x79\x6d\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::gscaisseeekokyea; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\57\50\133\136\57\135\x2b\51\x2f{$muowmkwsoauukiag}\57{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\x69\x6e\144\x65\x78\56\160\150\160\x3f\x70\157\x73\164\137\x74\171\160\145\x3d{$muowmkwsoauukiag}\46{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\46{$yygmoeguaqyumuui->metakey}\x3d{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\x3d\x24\x6d\x61\x74\x63\x68\x65\163\x5b\61\x5d"; if (!$kiyaqqoyagguscog) { goto kocqqoyymosmuksu; } ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); kocqqoyymosmuksu: $ucccueqywigcukcc .= "\x3f\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\157\160"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg); $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\x6e\x6f\x72\155\141\154"); if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi && ManipulatePost::uqwgsuysegkweago([$useksmwkuswkwcqg], "\145\x64\151\164"))) { goto yiowgigkkwsoqcci; } $this->enqueue(); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto sioekkmekwygemyc; } ManipulateTemplate::sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\x6d\145\x74\141\x5f\x62\x6f\x78", "\x63\x61\154\154\x62\141\x63\x6b" => [$this, "\171\163\x79\x65\x69\151\x79\x71\163\145\143\155\147\157\171\x75"], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\122\x65\154\x61\164\151\157\156\x20\x77\151\x74\x68\40\x25\x73", PR__MDL__ADVANCED_CMS), $mksyucucyswaukig->label), "\163\x63\162\145\145\x6e" => $useksmwkuswkwcqg, "\x63\157\156\164\x65\x78\x74" => $mgkceomocowocqyo, "\141\x72\x67\163" => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg]]); sioekkmekwygemyc: qukocuwgakemmyga: } uqokiksoqcwwqgio: yiowgigkkwsoqcci: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo["\x61\x72\x67\163"]) && $qookweymeqawmcwo["\141\x72\x67\x73"])) { goto ieqesiiageaauiuw; } return $qookweymeqawmcwo["\x61\x72\x67\x73"]; ieqesiiageaauiuw: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\x53\x6f\155\145\164\x68\151\x6e\x67\40\x69\163\40\x77\162\x6f\156\x67\x20\x69\156\40\x72\x65\154\141\x74\151\157\156\x20\x66\x69\x65\x6c\x64\40\x72\145\x6e\144\145\162\x69\156\147", PR__MDL__ADVANCED_CMS), "\x72\x65\154\x61\x74\x69\x6f\x6e", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return ManipulatePost::waaisqccqacqeium($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto gamqcwuwkikwqoay; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); gamqcwuwkikwqoay: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = ManipulatePost::get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto mscyggqcesgqqksu; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); mscyggqcesgqqksu: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto oyeyomcgkmgymogq; } $mcaisukqqyosuasi = ManipulatePage::ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto iesekaeqeomeuaui; oyeyomcgkmgymogq: $mcaisukqqyosuasi = ManipulatePost::get($ymqmyyeuycgmigyo); iesekaeqeomeuaui: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); if (!$gwiwsycaaqgwmewg) { goto wsesqmcqoiyyqkqi; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); wsesqmcqoiyyqkqi: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy() : array { $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [self::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\105\x6e\141\x62\154\x65", PR__MDL__ADVANCED_CMS)), self::yyuwuqsiucweeoue(self::osiogououyayqyck, __("\x4d\145\x74\141\102\157\x78\x20\x50\157\x73\151\x74\x69\157\x6e", PR__MDL__ADVANCED_CMS), ["\x73\151\x64\x65" => __("\x53\151\144\x65\142\x61\162", PR__MDL__ADVANCED_CMS), "\x61\x64\x76\141\156\x63\x65\144" => __("\x42\157\164\x74\157\155", PR__MDL__ADVANCED_CMS)], __("\x50\x6f\163\151\164\151\157\156\40\157\x66\x20\x6d\x65\x74\141\142\157\x78\40\151\156\x20\x65\x64\x69\x74\40\x73\x63\x72\x65\145\156\40\x6f\146\x20\143\x75\163\x74\x6f\x6d\x20\160\x6f\x73\164\x20\x74\x79\x70\x65\x73\56", PR__MDL__ADVANCED_CMS))->awagieqcmmwkgwgs(true), self::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\111\164\145\155\163", PR__MDL__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\x45\156\x61\142\154\x65", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\x49\156\x76\x65\x72\x73\145\x20\123\151\144\145", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\141\147\x65", PR__MDL__ADVANCED_CMS))->wyqeckayigciacse("\163\x6d\141\154\x6c"), self::ymuegqgyuagyucws(self::NAME, __("\101\144\x6d\x69\x6e\x20\x50\x61\156\x65\x6c\40\x4e\x61\x6d\145", PR__MDL__ADVANCED_CMS)), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\x4f\x72\x69\147\151\x6e", PR__MDL__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\104\145\163\164\151\156\x61\164\x69\157\156", PR__MDL__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\117\162\151\x67\x69\156\40\x54\151\x74\x6c\145", PR__MDL__ADVANCED_CMS), sprintf("\74\163\164\162\157\156\x67\x3e\x25\x73\x3a\x3c\57\x73\x74\162\157\x6e\x67\x3e\40\x25\x73", __("\x4e\x6f\x74\x69\143\145", PR__MDL__ADVANCED_CMS), __("\127\151\x6c\x6c\x20\x62\x65\40\165\163\145\144\x20\x61\163\x20\163\154\x75\x67\x20\x74\x6f\157\56", PR__MDL__ADVANCED_CMS))), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\104\x65\163\x74\151\156\x61\164\x69\157\x6e\40\124\x69\x74\154\145", PR__MDL__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } }
