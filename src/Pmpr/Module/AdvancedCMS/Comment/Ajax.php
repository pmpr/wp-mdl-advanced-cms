<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624001b728559             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Comment; use Exception; use Pmpr\Common\Foundation\DOMCrawler; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateComment; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Ajax extends Common { const yaouagmmkiyguiso = "\x73\x75\x62\x6d\x69\x74\x5f\143\x6f\x6d\x6d\x65\x6e\164\x5f\x66\157\162\155"; const kceoggiuqkiimsum = "\x67\145\164\137\143\x6f\155\x6d\x65\x6e\164\x5f\154\151\163\x74"; const myikkigscysoykgy = ["\147\145\x74\137\154\151\x73\164" => self::kceoggiuqkiimsum, "\163\165\x62\155\151\x74\x5f\x66\157\x72\x6d" => self::yaouagmmkiyguiso]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::yaouagmmkiyguiso, [$this, "\x61\x65\141\161\147\x79\163\147\x61\145\x6f\167\x61\147\165\147"])->iqkqummseggmikgo(self::kceoggiuqkiimsum, [$this, "\x63\x69\x75\x67\167\x6f\x6f\141\163\x61\x71\143\171\x77\141\163"]); } public function aeaqgysgaeowagug() { $occymigcemkqucuw = false; try { $aqqmosqmsuueyaes = wp_handle_comment_submission(wp_unslash(ManipulateServer::ayueggmoqeeukqmq())); if (is_wp_error($aqqmosqmsuueyaes)) { goto soqqemyioggmoakg; } if ($aqqmosqmsuueyaes) { goto ywqgcegomwaiuquc; } $keccaugmemegoimu = __("\123\x6f\x6d\x65\x74\x68\x69\156\147\40\151\x73\x20\x77\x72\157\x6e\x67\54\x20\160\154\145\x61\x73\x65\x20\x74\x72\x79\x20\x61\x67\x61\151\156\56", PR__MOD__ADVANCED_CMS); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $mkucggyaiaukqoce = ManipulateUser::get(); if (!$mkucggyaiaukqoce) { goto eegqyykygiccaoeo; } $this->cqscqicucmeamkyq("\163\x65\164\x5f\143\x6f\x6d\x6d\x65\156\164\x5f\x63\x6f\x6f\153\151\145\x73", $aqqmosqmsuueyaes, $mkucggyaiaukqoce); eegqyykygiccaoeo: $keccaugmemegoimu = $this->weysguygiseoukqw(Setting::kiywiwgciwcoiiyy); $occymigcemkqucuw = true; wmmggowmigekyoso: goto acaqummmoyiemqss; soqqemyioggmoakg: $iswcokucwmiosiaq = intval($aqqmosqmsuueyaes->get_error_data()); if ($iswcokucwmiosiaq) { goto qkcyqocqqwmqgqww; } $keccaugmemegoimu = __("\x55\156\x6b\x6e\157\167\x6e\40\x45\x72\x72\157\162", PR__MOD__ADVANCED_CMS); goto miyqyeiwquwsacsm; qkcyqocqqwmqgqww: $keccaugmemegoimu = $aqqmosqmsuueyaes->get_error_message(); miyqyeiwquwsacsm: acaqummmoyiemqss: } catch (Exception $wgaoewqkwgomoaai) { $keccaugmemegoimu = $wgaoewqkwgomoaai->sagusgigmkeysock(); } $keccaugmemegoimu = ManipulateBootstrap::oockkqiqsssakuug($keccaugmemegoimu, $occymigcemkqucuw ? self::ckcawaoawwioqecq : self::ecioqysekgaasegg); $this->uaggqsoeugksgooc($occymigcemkqucuw, $keccaugmemegoimu); } public function ciugwooasaqcywas() { $icwicymcioeyeyek = ManipulateServer::ayueggmoqeeukqmq(); $gqiuywqwmiieqcww = $kigowwqauiumummw = false; $suaemuyiacqyugsm = ManipulateArray::get($icwicymcioeyeyek, "\x70\x61\147\x65", 1); $sqeykgyoooqysmca = ManipulateArray::get($icwicymcioeyeyek, "\164\171\x70\x65", "\x63\x6f\x6d\155\x65\x6e\164"); $post = ManipulateArray::get($icwicymcioeyeyek, self::kqigmeickowqiiyy, 0); if ($post && $suaemuyiacqyugsm) { goto oqugqwcyomiaaoqu; } $sogksuscggsicmac = ManipulateBootstrap::oockkqiqsssakuug(__("\122\145\x71\x75\151\162\145\144\x20\144\141\164\x61\x20\156\x6f\164\x20\x70\x61\163\x73\145\x64", PR__MOD__ADVANCED_CMS), "\x77\141\162\x6e\151\156\x67"); goto foeeqckqsyockkak; oqugqwcyomiaaoqu: $ywmkwiwkosakssii = ["\x69\163\137\141\x6a\141\170" => true, "\x69\x73\x5f\x72\145\156\x64\x65\162" => false, self::squoamkioomemiyi => $sqeykgyoooqysmca, self::kkcqmwgccaygggcu => $suaemuyiacqyugsm, self::kqigmeickowqiiyy => $post]; $sogksuscggsicmac = Cover::symcgieuakksimmu()->wkwiceqaycqsygic('', $ywmkwiwkosakssii); if ($sogksuscggsicmac) { goto suswcqoyyqkkquuo; } $gqiuywqwmiieqcww = true; goto eeqesooyqagwawae; suswcqoyyqkkquuo: $uuwmqqqiwksuaise = ManipulatePost::ymgsgecsiqeegseg($post); $weyoqgcesqgeusiu = ManipulateComment::omkaowmygoqwsywq(); $gqiuywqwmiieqcww = !($uuwmqqqiwksuaise && $weyoqgcesqgeusiu) || $uuwmqqqiwksuaise / $weyoqgcesqgeusiu <= $suaemuyiacqyugsm; $sogksuscggsicmac = DOMCrawler::gyqqesecwssesmyy($sogksuscggsicmac, "\x6c\x69\x2e\143\x6f\x6d\155\x65\x6e\164\55\x6c\151\x73\164\x2d\151\164\145\x6d\x3a\156\x6f\x74\50\x2e\x63\x6f\155\155\145\156\x74\55\x63\150\x69\154\x64\x29"); eeqesooyqagwawae: $kigowwqauiumummw = true; foeeqckqsyockkak: $this->uaggqsoeugksgooc($kigowwqauiumummw, ["\x72\145\163\x75\154\164" => $sogksuscggsicmac, "\144\157\156\145" => $gqiuywqwmiieqcww]); } }