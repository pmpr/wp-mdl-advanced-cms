<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624bfa3fdf85f             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Relation\Manager; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; abstract class Manager implements ConstantInterface { const qocqgyaswyskyuwy = "\151\x73\x5f\157\162\x69\x67\x69\x6e"; public static function persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { return self::update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); } public static function update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if (is_array($icwicymcioeyeyek) && is_array($soqqyqgmmuigoqiy)) { goto iiiccouaaqsyikae; } if (!(is_array($soqqyqgmmuigoqiy) && array_search($icwicymcioeyeyek, array_column($soqqyqgmmuigoqiy, self::gouqcwikiiygyasc)) !== false)) { goto ewscugeuicukkycc; } return $soqqyqgmmuigoqiy[$icwicymcioeyeyek]; ewscugeuicukkycc: if (!is_array($soqqyqgmmuigoqiy)) { goto kqswcsysqawkcgye; } $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys, $soqqyqgmmuigoqiy); return self::update($icwicymcioeyeyek, $gwiwsycaaqgwmewg, static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy), 0); goto wusciwkkckmqigms; kqswcsysqawkcgye: return self::_persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys); wusciwkkckmqigms: goto ukkcmocamwgiqayu; iiiccouaaqsyikae: foreach ($icwicymcioeyeyek as $sqqewmoeaekuyyas => $igqsaukqcqscimok) { if (!(isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok]) && isset($soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem]))) { goto eeyyskqsmquyquqw; } $soqqyqgmmuigoqiy[$igqsaukqcqscimok][self::iuqumwggccmcuyem] = $sqqewmoeaekuyyas; eeyyskqsmquyquqw: cgyakcqgugqgkqiw: } uegouoiuyoqkcscg: return static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); ukkcmocamwgiqayu: } public static function remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { return self::_remove(self::_remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek), $gwiwsycaaqgwmewg, $mcaisukqqyosuasi); } protected static function _persist($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek, $ugceeuygogcwwoys = 1) { $soqqyqgmmuigoqiy[$icwicymcioeyeyek] = self::_generateData($icwicymcioeyeyek, $ugceeuygogcwwoys); static::_addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); return self::persist($icwicymcioeyeyek, $gwiwsycaaqgwmewg, $mcaisukqqyosuasi, 0); } protected static function _remove($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek) { $soqqyqgmmuigoqiy = static::_getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); if ($soqqyqgmmuigoqiy && array_key_exists($icwicymcioeyeyek, $soqqyqgmmuigoqiy)) { goto mwysseaekcsiesmm; } $icwicymcioeyeyek = null; goto amgsueumgaguceaa; mwysseaekcsiesmm: unset($soqqyqgmmuigoqiy[$icwicymcioeyeyek]); static::_update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); amgsueumgaguceaa: return $icwicymcioeyeyek; } protected static function _generateData($icwicymcioeyeyek, $ugceeuygogcwwoys = 1, $soqqyqgmmuigoqiy = []) { return [self::gouqcwikiiygyasc => $icwicymcioeyeyek, self::iuqumwggccmcuyem => self::_getNextPriority($soqqyqgmmuigoqiy), self::qocqgyaswyskyuwy => $ugceeuygogcwwoys]; } protected static function _getNextPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = self::_getSortedPriority($soqqyqgmmuigoqiy); if (!$soqqyqgmmuigoqiy) { goto uougwgeyiokewkkm; } sort($icwicymcioeyeyek); $wmegquyumsyykcka = end($icwicymcioeyeyek); if (!$wmegquyumsyykcka) { goto gygwewcqsmwqismo; } return $wmegquyumsyykcka + 1; gygwewcqsmwqismo: uougwgeyiokewkkm: return 1; } protected static function _getSortedPriority($soqqyqgmmuigoqiy) { $icwicymcioeyeyek = []; if (!is_array($soqqyqgmmuigoqiy)) { goto gommacygsykyussk; } $icwicymcioeyeyek = array_map(function ($igqsaukqcqscimok) { return $igqsaukqcqscimok[self::iuqumwggccmcuyem]; }, $soqqyqgmmuigoqiy); gommacygsykyussk: return $icwicymcioeyeyek; } protected static function _filter($soqqyqgmmuigoqiy, $tsuauommsquiesmk) { if (!($tsuauommsquiesmk && $soqqyqgmmuigoqiy)) { goto iuuuususuuuaieem; } $eqgoocgaqwqcimie = 1; if (!($tsuauommsquiesmk != self::qocqgyaswyskyuwy)) { goto ukqocwewouckikso; } $eqgoocgaqwqcimie = 0; ukqocwewouckikso: foreach ($soqqyqgmmuigoqiy as $uusmaiomayssaecw => $igqsaukqcqscimok) { if (!(isset($igqsaukqcqscimok[self::qocqgyaswyskyuwy]) && $igqsaukqcqscimok[self::qocqgyaswyskyuwy] !== $eqgoocgaqwqcimie)) { goto uimeeckqksqeekqq; } unset($soqqyqgmmuigoqiy[$uusmaiomayssaecw]); uimeeckqksqeekqq: uykousayyomcaeaa: } ucqmumuygcywwqma: iuuuususuuuaieem: return $soqqyqgmmuigoqiy; } public static function omaawkkwwyesqwcc($ywmkwiwkosakssii = []) { $ggauoeuaesiymgee = ["\x66\151\x6c\164\145\x72" => false, "\x6f\x75\x74\160\165\164" => OBJECT, "\x6c\151\x6d\151\x74" => -1]; return wp_parse_args($ywmkwiwkosakssii, $ggauoeuaesiymgee); } public static abstract function awiyyawscoigiuae($gwiwsycaaqgwmewg); public static abstract function get($mcaisukqqyosuasi, $ccamueccusigaaio, $gwiwsycaaqgwmewg, $ywmkwiwkosakssii = []); protected static abstract function _addMeta($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $soqqyqgmmuigoqiy); protected static abstract function _update($mcaisukqqyosuasi, $gwiwsycaaqgwmewg, $icwicymcioeyeyek); protected static abstract function _getMetaData($mcaisukqqyosuasi, $gwiwsycaaqgwmewg); }
