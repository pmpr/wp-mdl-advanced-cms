<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61680f16d93d1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\AdvancedCMS\Rating\Model; use Pmpr\Common\Foundation\Decorator\Post\DecoratorPost; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Package\AdvancedCMS\Model as BaseClass; abstract class Model extends BaseClass { public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { goto oeusomaaeekakake; oeusomaaeekakake: switch ($qgoqiacsiccwoawi) { case self::POST: goto oeamoqweiueaueay; gqimwsyemoewagcy: $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(DecoratorPost::yyykkcyiksewsoqy($post), $eqgoocgaqwqcimie); goto aoaqwygkaagiuuws; aoaqwygkaagiuuws: eweaaismksecwagy: goto esagiiawomyacuiw; awgmegueeqeyqamu: if ($this->wmwguecgowcscues()) { goto eweaaismksecwagy; } goto gqimwsyemoewagcy; kyiwsiakwgiwouyi: $eqgoocgaqwqcimie = ManipulatePost::qcgakseyaikigqco($post); goto awgmegueeqeyqamu; owgsameoayaogsma: if (!$post) { goto icumkkykaoqycqqu; } goto kyiwsiakwgiwouyi; esagiiawomyacuiw: icumkkykaoqycqqu: goto maaisuqwkymeguys; oeamoqweiueaueay: $post = ManipulatePost::get($eqgoocgaqwqcimie); goto owgsameoayaogsma; maaisuqwkymeguys: goto syusgosewwkoagoq; goto qkyciyiwkmgkmquk; qkyciyiwkmgkmquk: case self::OWNER: goto ayceeyuocgowqwsa; yggseoaommssscwo: $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa(ManipulateUser::yyykkcyiksewsoqy($mkucggyaiaukqoce), ManipulateUser::ygwimyogyaqgumam($mkucggyaiaukqoce)); goto aeiemwacaiygemmg; aeiemwacaiygemmg: sksgcusuyqcwqswe: goto yyqygaokeccgugos; ayceeyuocgowqwsa: $mkucggyaiaukqoce = ManipulateUser::get($eqgoocgaqwqcimie); goto iuwkiyimqmgguose; iuwkiyimqmgguose: if (!$mkucggyaiaukqoce) { goto sksgcusuyqcwqswe; } goto yggseoaommssscwo; yyqygaokeccgugos: } goto kwuckkyqaygwgcuy; sicgyiyiocyygkoc: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); goto cyosacayacumuaks; giuccakymqymawgk: syusgosewwkoagoq: goto sicgyiyiocyygkoc; kwuckkyqaygwgcuy: mcqucouuiuoagqwc: goto giuccakymqymawgk; cyosacayacumuaks: } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { goto eqiiaokcgakicaye; aumowowgewgqmwci: ikcwmsgocyuqiumc: goto oasggeyceiyieuuo; eqiiaokcgakicaye: $post = ManipulatePost::get(ManipulateArray::get($igqsaukqcqscimok, self::POST), self::OBJECT, true); goto gcucsowqoeiwmyyq; oasggeyceiyieuuo: return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); goto omuauimgkygcecsc; kyiuewcikkqagwwg: $ccowyogiqwikkkie["\x73\x68\x6f\x77\x5f\x70\x6f\x73\x74"] = ManipulateHTML::uuccukgasskgimsq("\x61", ["\x68\x72\x65\x66" => ManipulatePost::ycqquoiyyuesegsy($post)], __("\x53\x68\x6f\167\x20\120\x6f\163\x74", PR__PKG__ADVANCED_CMS)); goto aumowowgewgqmwci; gcucsowqoeiwmyyq: if (!$post) { goto ikcwmsgocyuqiumc; } goto kyiuewcikkqagwwg; omuauimgkygcecsc: } }
