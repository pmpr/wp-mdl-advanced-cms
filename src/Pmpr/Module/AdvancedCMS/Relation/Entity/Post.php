<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624ea7a9c46c0             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Entity; use Pmpr\Common\Foundation\Manipulate\ManipulateRewrite; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePage; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateTemplate; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Relation\Manager\PostManager; use WP_Post; use WP_Post_Type; class Post extends Entity { public function __construct() { $this->name = self::mswoacegomcucaik; $this->title = __("\x43\x75\163\x74\x6f\155\x20\x50\157\x73\164\40\x54\171\x70\x65\40\122\x65\x6c\141\x74\151\157\156\x73", PR__MDL__ADVANCED_CMS); parent::__construct(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\141\x64\144\x5f\155\145\x74\x61\137\x62\157\x78\x65\163", [$this, "\x73\151\153\161\147\147\x77\155\155\x79\x6b\x75\x69\171\155\x79"]); parent::wigskegsqequoeks(); } public function eyamqkqiykagecsw() : ?string { return IconFontawesomeInterface::gscaisseeekokyea; } public function acmquqgqsakwqaso($iakkeikwceeomgyq, $muowmkwsoauukiag, $aaokuekaimigoyue, $gwiwsycaaqgwmewg, $kiyaqqoyagguscog = false) { $yygmoeguaqyumuui = $this->agciaameqmyisqgo(); $ucccueqywigcukcc = "\136{$iakkeikwceeomgyq}\x2f\x28\x5b\x5e\x2f\x5d\53\51\x2f{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}\x2f"; $gqgemcmoicmgaqie = "\151\x6e\x64\x65\x78\56\x70\150\x70\77\160\x6f\163\164\x5f\x74\x79\x70\145\75{$muowmkwsoauukiag}\x26{$yygmoeguaqyumuui->target}\x3d{$iakkeikwceeomgyq}\x26{$yygmoeguaqyumuui->metakey}\75{$gwiwsycaaqgwmewg}\x26{$yygmoeguaqyumuui->side}\75\44\155\141\164\143\150\145\163\133\61\x5d"; if (!$kiyaqqoyagguscog) { goto kocqqoyymosmuksu; } ManipulateRewrite::wqcwsicmeukcoqei($ucccueqywigcukcc, $gqgemcmoicmgaqie, 2); kocqqoyymosmuksu: $ucccueqywigcukcc .= "\77\x24"; return [$ucccueqywigcukcc, $gqgemcmoicmgaqie, "\x74\x6f\x70"]; } public function sikqggwmmykuiymy($useksmwkuswkwcqg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $useksmwkuswkwcqg); $mgkceomocowocqyo = $this->weysguygiseoukqw(self::osiogououyayqyck, "\156\x6f\x72\155\x61\154"); if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi && ManipulatePost::uqwgsuysegkweago([$useksmwkuswkwcqg], "\x65\144\151\x74"))) { goto yiowgigkkwsoqcci; } $this->enqueue(); foreach ($oammesyieqmwuwyi as $kooyscwkscsogysg => $gsgwomokyuwmqqkg) { $mksyucucyswaukig = $this->mauewaeoemuusikw($kooyscwkscsogysg); if (!$mksyucucyswaukig) { goto sioekkmekwygemyc; } ManipulateTemplate::sikqggwmmykuiymy([self::gouqcwikiiygyasc => "{$kooyscwkscsogysg}\137\155\145\x74\141\137\x62\157\x78", "\143\x61\x6c\x6c\142\x61\143\153" => [$this, "\x79\x73\171\x65\151\151\x79\x71\x73\145\143\x6d\x67\x6f\171\165"], self::qgqyauaqwqmqseim => $this->eyamqkqiykagecsw(), self::qescuiwgsyuikume => sprintf(__("\122\x65\x6c\141\164\x69\x6f\156\x20\167\151\164\x68\40\45\x73", PR__MDL__ADVANCED_CMS), $mksyucucyswaukig->label), "\163\x63\x72\145\x65\156" => $useksmwkuswkwcqg, "\x63\x6f\156\x74\x65\170\164" => $mgkceomocowocqyo, "\x61\162\147\163" => [$gsgwomokyuwmqqkg, $kooyscwkscsogysg]]); sioekkmekwygemyc: qukocuwgakemmyga: } uqokiksoqcwwqgio: yiowgigkkwsoqcci: } public function ysyeiiyqsecmgoyu($post, $qookweymeqawmcwo, $kooyscwkscsogysg = null, $koaqeegoeiaiccse = true) : ?string { [$gsgwomokyuwmqqkg, $kooyscwkscsogysg] = self::gagauoqcuosakeiq($qookweymeqawmcwo); return parent::ysyeiiyqsecmgoyu($post, $gsgwomokyuwmqqkg, $kooyscwkscsogysg, $koaqeegoeiaiccse); } public static function gagauoqcuosakeiq($qookweymeqawmcwo) { if (!(isset($qookweymeqawmcwo["\x61\x72\x67\x73"]) && $qookweymeqawmcwo["\141\x72\147\163"])) { goto ieqesiiageaauiuw; } return $qookweymeqawmcwo["\141\162\x67\163"]; ieqesiiageaauiuw: self::symcgieuakksimmu()->yiggueaiwiygoiyi(__("\x53\x6f\x6d\x65\164\x68\151\x6e\x67\x20\x69\163\40\167\162\x6f\156\147\40\151\156\x20\x72\145\x6c\x61\164\151\157\x6e\40\x66\151\x65\x6c\x64\40\162\145\x6e\144\x65\x72\151\x6e\147", PR__MDL__ADVANCED_CMS), "\162\145\x6c\141\164\151\157\156", self::imkacwmiuiykyuim); return null; } public function mauewaeoemuusikw($muowmkwsoauukiag) : ?WP_Post_Type { return ManipulatePost::waaisqccqacqeium($muowmkwsoauukiag); } public function seyyiqmgwymyumoq($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; if (!$mcaisukqqyosuasi instanceof WP_Post) { goto gamqcwuwkikwqoay; } $oammesyieqmwuwyi = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); gamqcwuwkikwqoay: return $oammesyieqmwuwyi; } public function goqmcwikekcgyokg() : array { $post = ManipulatePost::get(); $oammesyieqmwuwyi = []; if (!$post instanceof WP_Post) { goto mscyggqcesgqqksu; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye(self::uwoqgmuqskqcqsag(), $post->post_type); mscyggqcesgqqksu: return $oammesyieqmwuwyi; } public function kuksecseqkakwguo($ymqmyyeuycgmigyo, $sqeykgyoooqysmca = null) { if ($ymqmyyeuycgmigyo instanceof WP_Post || is_numeric($ymqmyyeuycgmigyo)) { goto oyeyomcgkmgymogq; } $mcaisukqqyosuasi = ManipulatePage::ssacaeeassumyuws($ymqmyyeuycgmigyo, self::ckmqoekmugkggeym, $sqeykgyoooqysmca); goto iesekaeqeomeuaui; oyeyomcgkmgymogq: $mcaisukqqyosuasi = ManipulatePost::get($ymqmyyeuycgmigyo); iesekaeqeomeuaui: return $mcaisukqqyosuasi; } public function muekkssosomcakme($mcaisukqqyosuasi, $ayegqaqygsqsmews) : array { $mguygkocuoaoqqkg = []; $gwiwsycaaqgwmewg = ManipulateArray::get($ayegqaqygsqsmews, self::moegqsqomeumiomk); if (!$gwiwsycaaqgwmewg) { goto wsesqmcqoiyyqkqi; } $mguygkocuoaoqqkg = $this->wasgwsogmuquqeaa($mcaisukqqyosuasi, $ayegqaqygsqsmews->{self::gygsikewooaciecc}, $gwiwsycaaqgwmewg); wsesqmcqoiyyqkqi: return $mguygkocuoaoqqkg; } public function ieikwusquwawyiue($gqgemcmoicmgaqie, $oammesyieqmwuwyi) { $gqgemcmoicmgaqie->set(self::eqomgewoayseioos, $oammesyieqmwuwyi); $gqgemcmoicmgaqie->set(self::gqiasegggowomgie, self::eqomgewoayseioos); return $gqgemcmoicmgaqie; } public function wasgwsogmuquqeaa($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { return PostManager::get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii); } public function ugmceccgwaaaigiy() : array { $sciomagaqmgggsiu = ManipulatePost::mwoyqeeigwqoamiw([self::aisguagukaewucii => self::eoaiagsgqsmskugs]); return [self::wcwmusaouiqaqeww($this->aakmagwggmkoiiyu() . self::kouiwaoasqgwksas, __("\105\x6e\141\142\x6c\x65", PR__MDL__ADVANCED_CMS)), self::yyuwuqsiucweeoue(self::osiogououyayqyck, __("\115\145\164\141\102\x6f\170\x20\120\157\x73\x69\x74\151\x6f\x6e", PR__MDL__ADVANCED_CMS), ["\163\151\x64\x65" => __("\123\151\144\145\142\141\x72", PR__MDL__ADVANCED_CMS), "\141\x64\x76\x61\156\x63\x65\144" => __("\x42\x6f\164\164\x6f\x6d", PR__MDL__ADVANCED_CMS)], __("\120\157\163\151\x74\151\x6f\156\x20\x6f\x66\x20\x6d\x65\x74\x61\x62\157\x78\x20\x69\x6e\x20\145\144\x69\164\40\x73\x63\162\145\145\156\x20\x6f\146\40\143\x75\x73\x74\157\155\40\x70\x6f\163\x74\40\164\171\160\145\163\x2e", PR__MDL__ADVANCED_CMS))->awagieqcmmwkgwgs(true), self::iseogkiymousogom(self::uwoqgmuqskqcqsag(), __("\111\164\145\x6d\x73", PR__MDL__ADVANCED_CMS), [self::wcwmusaouiqaqeww(self::iccwcygaeqmomooo, __("\105\x6e\x61\x62\154\x65", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6)->mkmssscwmeekwgqo(), self::wcwmusaouiqaqeww(self::iycuamekoueuemoy, __("\x49\x6e\166\x65\162\x73\145\40\123\151\144\145", PR__MDL__ADVANCED_CMS))->iyouqgqicyqkiswi(6), self::kimoeccokowuaiic(self::mkousmkiawwousws, __("\111\x6d\141\x67\x65", PR__MDL__ADVANCED_CMS))->wyqeckayigciacse("\163\155\x61\x6c\x6c"), self::ymuegqgyuagyucws(self::NAME, __("\101\144\155\x69\x6e\40\x50\141\x6e\145\x6c\x20\x4e\x61\x6d\x65", PR__MDL__ADVANCED_CMS)), self::ckuwucygcwsiawms(self::igecewwoemccgwsq, __("\117\x72\x69\147\x69\156", PR__MDL__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ckuwucygcwsiawms(self::gygsikewooaciecc, __("\x44\x65\163\x74\x69\156\141\164\151\x6f\x6e", PR__MDL__ADVANCED_CMS), $sciomagaqmgggsiu)->eumecwmqmukqgyea(), self::ymuegqgyuagyucws(self::qgwwgcuuykqagamk, __("\117\x72\x69\147\151\x6e\x20\124\151\x74\154\145", PR__MDL__ADVANCED_CMS), sprintf("\74\163\164\x72\157\156\x67\x3e\45\x73\72\x3c\57\x73\x74\x72\x6f\156\147\76\x20\x25\163", __("\x4e\157\164\x69\143\145", PR__MDL__ADVANCED_CMS), __("\127\151\x6c\x6c\40\142\145\x20\x75\x73\145\x64\x20\141\163\40\x73\x6c\165\x67\x20\x74\x6f\157\x2e", PR__MDL__ADVANCED_CMS))), self::ymuegqgyuagyucws(self::uyqakoogaigomqmq, __("\x44\x65\163\x74\151\x6e\x61\164\x69\157\156\x20\x54\x69\164\x6c\x65", PR__MDL__ADVANCED_CMS)), self::cwiuiiakukcsaakw(self::ascagqcquwgmygkm)])->usosgsaaimqcysyk()]; } }
