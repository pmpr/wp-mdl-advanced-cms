<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624001b728559             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Decorator\DecoratorSanitize; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Container; use stdClass; class Common extends Container { const ggsoiqkcasskkeae = "\x70\157\x73\x74\137\x5f\151\x6e\137\162\145\154\x61\164\151\157\156"; public function iucouyoswwsakqyc($ccamueccusigaaio) : array { $oammesyieqmwuwyi = []; $cmaccwokqweqweqi = $this->weysguygiseoukqw($ccamueccusigaaio, []); foreach ($cmaccwokqweqweqi as $igqsaukqcqscimok) { $uusmaiomayssaecw = ManipulateArray::get($igqsaukqcqscimok, self::ascagqcquwgmygkm); if (!$uusmaiomayssaecw) { goto ieqesiiageaauiuw; } $oammesyieqmwuwyi[$uusmaiomayssaecw] = $igqsaukqcqscimok; ieqesiiageaauiuw: yiowgigkkwsoqcci: } sioekkmekwygemyc: return $oammesyieqmwuwyi; } public function ggiqwoiwqoieoeqe($ayegqaqygsqsmews) { if (!$ayegqaqygsqsmews) { goto wsesqmcqoiyyqkqi; } $wkmckkosmqouwqko = clone $ayegqaqygsqsmews; if (!$wkmckkosmqouwqko instanceof stdClass) { goto iesekaeqeomeuaui; } $gmawcgiwcmsukeiu = [self::igecewwoemccgwsq => self::gygsikewooaciecc, self::qgwwgcuuykqagamk => self::uyqakoogaigomqmq]; foreach ($gmawcgiwcmsukeiu as $sysgmomuyiiawwcm => $gcegymooyemmaysk) { if (!isset($wkmckkosmqouwqko->{$sysgmomuyiiawwcm}, $wkmckkosmqouwqko->{$gcegymooyemmaysk})) { goto oyeyomcgkmgymogq; } $umkokecyamcwcqwe = $wkmckkosmqouwqko->{$sysgmomuyiiawwcm}; $wkmckkosmqouwqko->{$sysgmomuyiiawwcm} = $wkmckkosmqouwqko->{$gcegymooyemmaysk}; $wkmckkosmqouwqko->{$gcegymooyemmaysk} = $umkokecyamcwcqwe; oyeyomcgkmgymogq: mscyggqcesgqqksu: } gamqcwuwkikwqoay: iesekaeqeomeuaui: $ayegqaqygsqsmews = $wkmckkosmqouwqko; wsesqmcqoiyyqkqi: return $ayegqaqygsqsmews; } public function weygmwuauaogwqoc($ayegqaqygsqsmews, $mcaisukqqyosuasi) : string { $migiiksoiymissge = ManipulatePost::ycqquoiyyuesegsy($mcaisukqqyosuasi); $muowmkwsoauukiag = ManipulateArray::get($ayegqaqygsqsmews, self::gygsikewooaciecc); if (!($migiiksoiymissge && $ayegqaqygsqsmews && $muowmkwsoauukiag)) { goto mogkoocsoeuyoqqa; } $aaokuekaimigoyue = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); $migiiksoiymissge .= "{$muowmkwsoauukiag}\x2f{$aaokuekaimigoyue}"; mogkoocsoeuyoqqa: return trailingslashit($migiiksoiymissge); } public static function ocwoggikwceqsiuc($ayegqaqygsqsmews) : ?string { $aaokuekaimigoyue = ManipulateArray::get($ayegqaqygsqsmews, self::qgwwgcuuykqagamk); if (!$aaokuekaimigoyue) { goto wkwamkgkwykeqkec; } $aaokuekaimigoyue = DecoratorSanitize::wouqysuosmigaggy($aaokuekaimigoyue); wkwamkgkwykeqkec: return $aaokuekaimigoyue; } public function ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg) { $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); $ccamueccusigaaio = null; foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { if (!($ayegqaqygsqsmews->metakey == $gwiwsycaaqgwmewg)) { goto kwiggogcgciwuwqk; } $ccamueccusigaaio = $ayegqaqygsqsmews; goto suqceasgacskcmkc; kwiggogcgciwuwqk: yykqaowwsqgqysmq: } suqceasgacskcmkc: oeocukauoyosicso: } oimkeqocuguqqsqk: return $ccamueccusigaaio; } public function comscwiqyuuesess($ccamueccusigaaio, $gwiwsycaaqgwmewg = null) { $agkmksicugiqcucq = []; $yygmoeguaqyumuui = [self::ouywiegeiyuaaawo, self::igecewwoemccgwsq, self::qgwwgcuuykqagamk, self::gygsikewooaciecc, self::uyqakoogaigomqmq, self::moegqsqomeumiomk, self::iycuamekoueuemoy]; if ($gwiwsycaaqgwmewg) { goto ocywegekakimmwcq; } $oammesyieqmwuwyi = $this->gyykaeouuskoqiye($ccamueccusigaaio); foreach ($oammesyieqmwuwyi as $gsgwomokyuwmqqkg) { foreach ($gsgwomokyuwmqqkg as $ayegqaqygsqsmews) { $agkmksicugiqcucq[] = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); yuimwyoywaiiqacs: } gswcoeiisamakwii: yoqakewookqoqacm: } ikuuiauwouuqawuw: goto emqswoaawgeyosmi; ocywegekakimmwcq: $ayegqaqygsqsmews = self::ugcmciwwskkeimse($ccamueccusigaaio, $gwiwsycaaqgwmewg); if (!$ayegqaqygsqsmews) { goto uckewycoogsogwiy; } $agkmksicugiqcucq = $this->suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui); uckewycoogsogwiy: emqswoaawgeyosmi: if (!$agkmksicugiqcucq) { goto iwsmmkqaoksmocok; } $agkmksicugiqcucq = ConvertArray::wauqeqkcymgoceuy($agkmksicugiqcucq, $yygmoeguaqyumuui); iwsmmkqaoksmocok: return $agkmksicugiqcucq; } public function suuyoiigssmmmgwu($ayegqaqygsqsmews, $yygmoeguaqyumuui = []) : array { $igqsaukqcqscimok = []; if (ManipulateArray::uuegkqwagymmusiy($ayegqaqygsqsmews, [self::igecewwoemccgwsq, self::moegqsqomeumiomk])) { goto esaqcqqwuussiiwo; } $igqsaukqcqscimok[self::ouywiegeiyuaaawo] = $this->ocwoggikwceqsiuc($ayegqaqygsqsmews); foreach ($yygmoeguaqyumuui as $uusmaiomayssaecw) { if (!isset($ayegqaqygsqsmews->{$uusmaiomayssaecw})) { goto qiiigwkqeoewsuwm; } $igqsaukqcqscimok[$uusmaiomayssaecw] = ManipulateArray::get($ayegqaqygsqsmews, $uusmaiomayssaecw); qiiigwkqeoewsuwm: okkmcocqokkskasy: } esikeyqyuikmaiek: esaqcqqwuussiiwo: return $igqsaukqcqscimok; } public function gyykaeouuskoqiye($ccamueccusigaaio, $mcaisukqqyosuasi = null, $aqykuigiuwmmcieu = OBJECT) : array { $oammesyieqmwuwyi = $this->iucouyoswwsakqyc($ccamueccusigaaio); $agkmksicugiqcucq = []; if (!(is_array($oammesyieqmwuwyi) && $oammesyieqmwuwyi)) { goto yqagomygmeoecwey; } foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (!(!ManipulateArray::uuegkqwagymmusiy($igqsaukqcqscimok, [self::ascagqcquwgmygkm, self::NAME, self::iccwcygaeqmomooo, self::igecewwoemccgwsq, self::gygsikewooaciecc]) && $igqsaukqcqscimok[self::iccwcygaeqmomooo])) { goto qsgqwyqaqiowkmco; } $iakkeikwceeomgyq = $igqsaukqcqscimok[self::igecewwoemccgwsq]; $eswwueuissckicww = $igqsaukqcqscimok[self::ascagqcquwgmygkm]; $qkkiukyyasyoeywi = ManipulateArray::get($igqsaukqcqscimok, self::iycuamekoueuemoy); $muowmkwsoauukiag = $igqsaukqcqscimok[self::gygsikewooaciecc]; if (!(is_null($mcaisukqqyosuasi) || $iakkeikwceeomgyq === $mcaisukqqyosuasi || $qkkiukyyasyoeywi && $muowmkwsoauukiag === $mcaisukqqyosuasi)) { goto gsygwgsiawgmqiyi; } $gwiwsycaaqgwmewg = "{$iakkeikwceeomgyq}\137{$eswwueuissckicww}\137{$muowmkwsoauukiag}"; if ($aqykuigiuwmmcieu === OBJECT) { goto suqcsgaosywaauuu; } $agkmksicugiqcucq[$gwiwsycaaqgwmewg] = ManipulateArray::get($igqsaukqcqscimok, self::NAME, ''); goto wwukgaquuyoissgy; suqcsgaosywaauuu: $uusmaiomayssaecw = $qkkiukyyasyoeywi && $muowmkwsoauukiag == $mcaisukqqyosuasi ? $iakkeikwceeomgyq : $muowmkwsoauukiag; $igqsaukqcqscimok[self::moegqsqomeumiomk] = $gwiwsycaaqgwmewg; $agkmksicugiqcucq[$uusmaiomayssaecw][$eswwueuissckicww] = ConvertArray::kamisyecckmwywwo($igqsaukqcqscimok); wwukgaquuyoissgy: gsygwgsiawgmqiyi: qsgqwyqaqiowkmco: mscgewkcqcoowweg: } ikqeeaysmqgcgawq: yqagomygmeoecwey: return $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x72\x65\x6c\141\x74\x69\157\x6e\137\166\141\x6c\x69\144\x5f\151\164\x65\155\163"), $agkmksicugiqcucq, $ccamueccusigaaio, $mcaisukqqyosuasi, $aqykuigiuwmmcieu); } public function woqgasgkqemiiseo($wkaqekwwgqsqwcoi, $qoiwmokisgikggia = "\160\x72\151\155\141\162\171") { return ManipulateHTML::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\x61\163\x73" => "\x69\143\157\156\x2d\x73\x6d\x20\146\x75\154\x6c\55\x6f\x70\x61\x63\x69\x74\x79\40\151\x63\157\156\x2d{$qoiwmokisgikggia}"], ["\x6d\141\162\153\x75\160" => true]); } public function cmeuowkiswiuocqa() : string { return ManipulateHTML::uuccukgasskgimsq("\141", ["\x68\x72\145\146" => "\43", "\143\154\x61\163\163" => "\150\x61\156\144\x6c\145\40\x72\145\x6c\141\164\151\157\x6e\55\x68\141\156\x64\154\145\x20\146\x6c\157\141\164\x2d\x72\151\x67\x68\164\40\x70\55\x31\40\x62\x6f\x72\144\145\x72\x65\144\40\x72\157\165\x6e\144\145\144\40\x6d\162\x2d\x31"], $this->woqgasgkqemiiseo(IconFontawesomeInterface::wmukkkgkoaweqyqo)); } public function amsaeiymyieqksqy() : string { $meqocwsecsywiiqs = __("\122\x65\155\157\166\x65", PR__MOD__ADVANCED_CMS); return ManipulateHTML::icqkogwskuwscskk(["\x70\162\x65\146\151\170" => "\162\145\x6d\157\x76\145\x5f\x72\x65\x6c\141\x74\x69\x6f\156", "\x74\x79\160\x65" => self::wyaqwomqwwaoiwas, "\x74\x69\164\x6c\x65" => $meqocwsecsywiiqs, "\143\157\156\x74\145\x6e\x74" => __("\x41\x72\x65\x20\171\x6f\x75\40\163\x75\x72\145\x20\171\157\x75\x20\x77\x61\156\x74\x20\x74\157\x20\162\145\x6d\157\x76\145\40\x74\150\151\x73\40\x69\x74\145\155\77", PR__MOD__ADVANCED_CMS), "\142\165\x74\x74\x6f\x6e\163" => ["\143\141\156\x63\145\x6c", ["\143\x6c\x61\163\x73" => "\x72\145\154\x61\164\151\x6f\x6e\55\x69\x74\x65\x6d\x2d\x72\x65\155\157\x76\145\40\142\164\x6e\40\142\x74\156\x2d\x70\x72\151\x6d\141\x72\x79", "\x74\x69\x74\154\x65" => $meqocwsecsywiiqs]]], ["\141\x74\164\x72\x73" => ["\143\x6c\141\163\x73" => "\160\x72\55\143\157\156\146\151\162\155\x61\x62\154\x65\x2d\x61\143\x74\151\x6f\156\x20\x66\154\157\x61\164\x2d\x72\x69\147\150\164\40\160\55\x31\40\142\157\162\144\145\162\x65\144\40\162\157\165\156\x64\145\x64"], "\x65\154\x65\x6d\x65\156\x74" => "\141", "\143\x6f\156\x74\x65\156\x74" => $this->woqgasgkqemiiseo(IconFontawesomeInterface::cugwqwigakiwyiuk, "\x64\x61\x6e\147\145\x72")]); } }