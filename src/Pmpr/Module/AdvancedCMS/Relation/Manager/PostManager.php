<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6328195a2a0d2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\AdvancedCMS\Relation\Entity\Post; use Pmpr\Module\AdvancedCMS\Relation\Relation; use WP_Post; class PostManager extends Manager { public static function awiyyawscoigiuae($gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $oammesyieqmwuwyi = []; $igqsaukqcqscimok = Relation::symcgieuakksimmu()->ugcmciwwskkeimse(Post::uwoqgmuqskqcqsag(), $gwiwsycaaqgwmewg); if (!($igqsaukqcqscimok && isset($igqsaukqcqscimok->{self::igecewwoemccgwsq}))) { goto ywqakqkmmcoceqka; } $iakkeikwceeomgyq = $igqsaukqcqscimok->{self::igecewwoemccgwsq}; $oammesyieqmwuwyi = [$iakkeikwceeomgyq, ManipulatePost::qgisekcaywsmigga($iakkeikwceeomgyq, $gwiwsycaaqgwmewg, null, $ywmkwiwkosakssii)]; ywqakqkmmcoceqka: return $oammesyieqmwuwyi; } public static function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = self::omaawkkwwyesqwcc($ywmkwiwkosakssii); $soqqyqgmmuigoqiy = self::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); $icwicymcioeyeyek = []; if (!$soqqyqgmmuigoqiy) { goto emauuoieewwoeyqq; } $soqqyqgmmuigoqiy = ManipulateArray::sagscekukkacqaaw($soqqyqgmmuigoqiy, self::iuqumwggccmcuyem, $ywmkwiwkosakssii["\154\151\x6d\151\x74"]); $icwicymcioeyeyek = array_keys($soqqyqgmmuigoqiy); if (!($ywmkwiwkosakssii["\x6f\x75\x74\x70\x75\164"] == OBJECT)) { goto kwsqgqmwyyeykgum; } $icwicymcioeyeyek = ManipulatePost::ciugwooasaqcywas($ccamueccusigaaio, [self::gqiasegggowomgie => self::eqomgewoayseioos, self::eqomgewoayseioos => $icwicymcioeyeyek, "\x73\x75\x70\x70\x72\145\x73\163\x5f\146\x69\x6c\x74\x65\x72\163" => true]); kwsqgqmwyyeykgum: emauuoieewwoeyqq: return $icwicymcioeyeyek; } protected static function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy) { ManipulatePost::giwmekimakcaawsq($gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy, $mcaisukqqyosuasi); } protected static function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { ManipulatePost::ksmqawcowkmegigw($gwiwsycaaqgwmewg, $icwicymcioeyeyek, $mcaisukqqyosuasi); return $mcaisukqqyosuasi; } protected static function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg) { return ManipulatePost::igawqaomowicuayw($gwiwsycaaqgwmewg, $mcaisukqqyosuasi, true); } }
