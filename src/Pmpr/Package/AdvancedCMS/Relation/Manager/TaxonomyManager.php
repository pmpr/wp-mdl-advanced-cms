<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6160476918f4a             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Manipulate\Taxonomy\ManipulateTerm; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Relation\Entity\Taxonomy; use Pmpr\Package\AdvancedCMS\Relation\Relation; use Pmpr\Package\AdvancedCMS\Relation\Setting; use WP_Term; class TaxonomyManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg) { goto aiukiwqmikscoswm; mcmkqgkwyqoiikcq: if (!($igqsaukqcqscimok && isset($igqsaukqcqscimok->{self::ORIGIN}))) { goto agyycikucwgmysee; } goto ssyukuseoymackeo; gskacikgkwcuauko: return [$iakkeikwceeomgyq, ManipulateTerm::qgisekcaywsmigga($gwiwsycaaqgwmewg, $iakkeikwceeomgyq)]; goto yyieomeeqycmikqw; kwiuqqwamsimqgme: return []; goto qmegcmqemmywoqas; aiukiwqmikscoswm: $igqsaukqcqscimok = Relation::symcgieuakksimmu()->ugcmciwwskkeimse(Taxonomy::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); goto mcmkqgkwyqoiikcq; ssyukuseoymackeo: $iakkeikwceeomgyq = $igqsaukqcqscimok->{self::ORIGIN}; goto gskacikgkwcuauko; yyieomeeqycmikqw: agyycikucwgmysee: goto kwiuqqwamsimqgme; qmegcmqemmywoqas: } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { goto qgyoesyiasqimcoe; meoweqcaaosoomeu: seieguyaaiqismgo: goto ywmoieqkigsykequ; iusaeoimukymskgs: if (!($ywmkwiwkosakssii["\157\x75\x74\160\x75\164"] == OBJECT)) { goto uueywyysiicuauem; } goto asciaakaoygususy; gsgkayokisiesciy: $mcaisukqqyosuasi = $mcaisukqqyosuasi->term_id; goto ascogkesqmuuaesq; eaggoasiwogmquwc: uueywyysiicuauem: goto meoweqcaaosoomeu; qgyoesyiasqimcoe: $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); goto kkwqmewaksmokuqy; kkwqmewaksmokuqy: if (!$mcaisukqqyosuasi instanceof WP_Term) { goto giooasyeqwaaocea; } goto gsgkayokisiesciy; euskosgaksmimgug: $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); goto iusaeoimukymskgs; asciaakaoygususy: $icwicymcioeyeyek = ManipulateTerm::ciugwooasaqcywas($ccamueccusigaaio, [self::INCLUDE => $icwicymcioeyeyek]); goto eaggoasiwogmquwc; kiemqsgcmouqscao: $icwicymcioeyeyek = []; goto wssaaemscmmiomee; wssaaemscmmiomee: if (!$soqqyqgmmuigoqiy) { goto seieguyaaiqismgo; } goto meqmcgmksqiqcoyq; meqmcgmksqiqcoyq: $soqqyqgmmuigoqiy = ManipulateArray::sagscekukkacqaaw($soqqyqgmmuigoqiy, self::PRIORITY); goto euskosgaksmimgug; ascogkesqmuuaesq: giooasyeqwaaocea: goto askukaucmocewkgg; ywmoieqkigsykequ: return $icwicymcioeyeyek; goto iaousaauoawkqkkg; askukaucmocewkgg: $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); goto kiemqsgcmouqscao; iaousaauoawkqkkg: } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { ManipulateTerm::giwmekimakcaawsq($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { ManipulateTerm::ksmqawcowkmegigw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return ManipulateTerm::igawqaomowicuayw($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, true); } }
