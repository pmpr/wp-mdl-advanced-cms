<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d82048fb2a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Container; use stdClass; class Common extends Container { const ggsoiqkcasskkeae = "\160\157\x73\x74\x5f\x5f\151\156\137\x72\x65\154\141\164\x69\x6f\x6e"; public function iucouyoswwsakqyc($ccamueccusigaaio) : array { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $igqsaukqcqscimok) { $uusmaiomayssaecw = ManipulateArray::get($igqsaukqcqscimok, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto msemumccgceyugmg; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; msemumccgceyugmg: eogwckcymuugikuy: } eeauyscekuckoues: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto asiqwuoswmigcaki; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto wcugqegqsuuuwqao; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto iwsuawwqomaowuii; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; iwsuawwqomaowuii: qoqskyuuwueqkquk: } wagqgeqymeqoeuyi: wcugqegqsuuuwqao: $ayegqaqygsqsmews = $wkmckkosmqouwqko; asiqwuoswmigcaki: return $ayegqaqygsqsmews; } public function weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto ciykoyeioqgyaeqo; } $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}"; ciykoyeioqgyaeqo: return trailingslashit($migiiksoiymissge); } public static function ocwoggikwceqsiuc($ayegqaqygsqsmews) : ?string { $aaokuekaimigoyue = ManipulateArray::get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk); if (!$aaokuekaimigoyue) { goto mqicocmqegwukkwg; } $aaokuekaimigoyue = DecoratorSanitize::wouqysuosmigaggy($aaokuekaimigoyue); mqicocmqegwukkwg: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey == $gwiwsycaaqgwmewg)) { goto acsqgiuageaasiyy; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto ouamogymawucwswu; acsqgiuageaasiyy: mugqyyeayeyggqqk: } ouamogymawucwswu: emmsycooskoqmgeg: } qgeugwymkkiacwoc: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto miweggwqeiaeweia; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); kkumywowcoycymeo: } guykyqecgswcsmws: wyuemgggaqogsmsq: } samwkqgwouggsguc: goto kqqiegkuqagcqsya; miweggwqeiaeweia: $ayegqaqygsqsmews = self::ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto oomguqikqokqwgku; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); oomguqikqokqwgku: kqqiegkuqagcqsya: if (!$agkmksicugiqcucq) { goto ousiuuwgwkiyikyq; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); ousiuuwgwkiyikyq: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) : array { $igqsaukqcqscimok = []; if (ManipulateArray::uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto aomysykcgikegiau; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto ikqqskkqqwmwssoo; } $igqsaukqcqscimok[$uusmaiomayssaecw] = ManipulateArray::get($ayegqaqygsqsmews, $uusmaiomayssaecw); ikqqskkqqwmwssoo: iwekmyyccgiyuecc: } ogsaaqsaogcqiouy: aomysykcgikegiau: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, $aqykuigiuwmmcieu = OBJECT) : array { $oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio); $agkmksicugiqcucq = []; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto gicyayswqyuoekcq; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto kosaqwikueyksqmw; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = ManipulateArray::get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto mqkmcysgoiaouiwm; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\x5f{$eswwueuissckicww}\x5f{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto ogqmesokykywseys; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = ManipulateArray::get($igqsaukqcqscimok, self::NAME, ''); goto ykomgumacooyomsk; ogqmesokykywseys: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag == $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); ykomgumacooyomsk: mqkmcysgoiaouiwm: kosaqwikueyksqmw: awoaooyoeoyeeqee: } cwwmimggaaecmucw: gicyayswqyuoekcq: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\x6c\x61\164\x69\157\x6e\x5f\x76\141\x6c\151\144\137\151\164\145\x6d\163"), $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = "\x70\162\151\155\x61\x72\x79") { return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\x6c\x61\163\163" => "\x69\143\157\x6e\55\163\x6d\40\x66\165\154\154\x2d\157\160\x61\143\x69\164\x79\40\x69\x63\x6f\156\x2d{$qoiwmokisgikggia}"], ["\155\141\x72\153\x75\x70" => true]); } public function cmeuowkiswiuocqa() : string { return ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\145\146" => "\x23", "\x63\154\x61\163\x73" => "\x68\x61\x6e\x64\154\145\40\x72\145\154\x61\164\151\x6f\156\x2d\x68\141\156\144\x6c\x65\x20\146\154\157\x61\x74\x2d\x72\151\x67\150\x74\x20\160\x2d\x31\x20\x62\157\162\144\145\162\145\x64\x20\162\x6f\x75\156\x64\145\x64\x20\155\162\x2d\61"], $this->woqgasgkqemiiseo(IconFontawesomeInterface::wmukkkgkoaweqyqo)); } public function amsaeiymyieqksqy() : string { $meqocwsecsywiiqs = __("\x52\x65\155\x6f\166\145", PR__MDL__ADVANCED_CMS); return ManipulateHTML::icqkogwskuwscskk(["\x70\162\x65\146\151\x78" => "\162\x65\x6d\157\166\145\x5f\162\145\x6c\x61\164\x69\157\x6e", "\164\x79\x70\145" => self::wyaqwomqwwaoiwas, "\164\x69\x74\154\145" => $meqocwsecsywiiqs, "\143\x6f\156\164\x65\156\164" => __("\101\x72\x65\x20\171\x6f\x75\40\163\165\x72\145\x20\171\157\x75\40\167\x61\156\x74\40\x74\157\40\162\x65\x6d\157\166\145\40\164\150\151\x73\40\x69\164\x65\155\77", PR__MDL__ADVANCED_CMS), "\x62\x75\164\164\157\156\163" => ["\x63\141\x6e\143\145\154", ["\143\154\x61\x73\x73" => "\x72\x65\154\x61\164\151\x6f\156\55\x69\164\x65\x6d\x2d\162\145\155\157\166\x65\x20\142\164\x6e\x20\142\164\x6e\55\160\x72\151\x6d\x61\162\x79", "\164\x69\164\x6c\145" => $meqocwsecsywiiqs]]], ["\x61\x74\164\162\163" => ["\x63\154\x61\x73\x73" => "\x70\162\x2d\143\x6f\x6e\146\151\162\155\141\142\154\145\55\x61\x63\x74\x69\x6f\156\x20\x66\x6c\157\x61\164\x2d\x72\151\147\150\x74\40\160\55\61\x20\x62\x6f\x72\144\x65\x72\145\144\x20\x72\157\x75\x6e\x64\145\144"], "\145\x6c\x65\x6d\x65\156\x74" => "\141", "\143\157\x6e\x74\x65\x6e\164" => $this->woqgasgkqemiiseo(IconFontawesomeInterface::cugwqwigakiwyiuk, "\x64\x61\x6e\x67\145\x72")]); } }
