<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d82048fb2a             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Shortcode; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Shortcode\Shortcode as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\AdvancedCMS\Shortcode\HTML\End; use Pmpr\Module\AdvancedCMS\Shortcode\HTML\Start; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Prerequisite; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Recommend; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Related; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Wikipedia; use Pmpr\Module\AdvancedCMS\Shortcode\Post\Product; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Example; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Free; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Notice; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Question; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Quotation; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Right; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Stat; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Text; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Tip; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Wrong; class Shortcode extends BaseClass { public function __construct() { $this->name = self::aswwewigcsoawwqk(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\103\x4d\123\40\x53\150\157\162\164\x63\x6f\144\x65\163", PR__MDL__ADVANCED_CMS); } public function enqueue() { parent::enqueue(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\143\x6f\x64\145\x2d\x73\150\x6f\162\x74\143\157\x64\x65", $eygsasmqycagyayw->get("\x6d\151\162\x72\157\162\x2e\x6a\x73"))); } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { $eyagosskwwmgwmog = [self::TEXT => [self::qescuiwgsyuikume => __("\124\145\170\164", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconFontawesomeInterface::gqasygwgmouskwak], self::mswoacegomcucaik => [self::qescuiwgsyuikume => __("\x50\x6f\x73\x74", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconFontawesomeInterface::gscaisseeekokyea], self::wwmgeoymmaiymyym => [self::qescuiwgsyuikume => __("\111\156\x74\x65\162\x6e\141\154\x20\x4c\x69\156\153", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconFontawesomeInterface::mkogeqoyaaeeykgu], self::wouqosqskyksymwy => [self::qescuiwgsyuikume => __("\x45\170\164\145\162\156\x61\x6c\x20\114\x69\x6e\153", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconFontawesomeInterface::iyuoawqyyguwismg], self::gsqoooskigukokks => [self::qescuiwgsyuikume => __("\110\x54\115\x4c\x20\x54\141\147\163", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconBrandInterface::gkmqswguqeiiseku]]; return parent::ckqaeiskasoyysmg($eyagosskwwmgwmog); } public function register($shortcodes = []) { $shortcodes = [ Tip::symcgieuakksimmu(), Text::symcgieuakksimmu(), Free::symcgieuakksimmu(), Stat::symcgieuakksimmu(), Right::symcgieuakksimmu(), Wrong::symcgieuakksimmu(), Notice::symcgieuakksimmu(), Example::symcgieuakksimmu(), Question::symcgieuakksimmu(), Quotation::symcgieuakksimmu(), Related::symcgieuakksimmu(), Recommend::symcgieuakksimmu(), Wikipedia::symcgieuakksimmu(), Prerequisite::symcgieuakksimmu(), Code::symcgieuakksimmu(), Blog::symcgieuakksimmu(), Download::symcgieuakksimmu(), Product::symcgieuakksimmu(), Start::symcgieuakksimmu(), End::symcgieuakksimmu(), ]; return parent::register($shortcodes); } }
