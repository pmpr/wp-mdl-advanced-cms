<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6630305d72745             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AdvancedCMS\Shortcode; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Shortcode\Shortcode as BaseClass; use Pmpr\Common\Foundation\Interfaces\IconBrandInterface; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\AdvancedCMS\Shortcode\HTML\End; use Pmpr\Module\AdvancedCMS\Shortcode\HTML\Start; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Prerequisite; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Recommend; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Related; use Pmpr\Module\AdvancedCMS\Shortcode\Link\Wikipedia; use Pmpr\Module\AdvancedCMS\Shortcode\Post\Product; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Example; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Free; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Notice; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Question; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Quotation; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Right; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Stat; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Text; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Tip; use Pmpr\Module\AdvancedCMS\Shortcode\Text\Wrong; class Shortcode extends BaseClass { public function __construct() { $this->name = $this->aswwewigcsoawwqk(); parent::__construct(); } public function gogaagekwoisaqgu() { $this->title = __("\103\x4d\123\x20\x53\150\x6f\x72\x74\143\157\x64\145\x73", PR__MDL__ADVANCED_CMS); } public function enqueue() { parent::enqueue(); $eygsasmqycagyayw = $this->miocmcoykayoyyau(); $eygsasmqycagyayw->ayeieigcckcmsikq($eygsasmqycagyayw->owygwqwawqoiusis("\x63\x6f\144\145\55\163\150\157\162\164\x63\x6f\x64\145", $eygsasmqycagyayw->get("\155\151\x72\x72\157\162\56\x6a\163"))); } public function ckqaeiskasoyysmg($eyagosskwwmgwmog = []) : array { $eyagosskwwmgwmog = [self::TEXT => [self::qescuiwgsyuikume => __("\124\x65\x78\x74", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconInterface::wmygqmueoowayyae], self::mswoacegomcucaik => [self::qescuiwgsyuikume => __("\120\157\163\164", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconInterface::awmsmqouyuugigus], self::wwmgeoymmaiymyym => [self::qescuiwgsyuikume => __("\111\156\x74\145\162\x6e\x61\x6c\40\x4c\151\156\x6b", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconInterface::kaywykwgcsqckois], self::wouqosqskyksymwy => [self::qescuiwgsyuikume => __("\x45\x78\x74\145\162\156\x61\154\40\x4c\x69\x6e\x6b", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconInterface::gwyiwmwiwcmcmqem], self::gsqoooskigukokks => [self::qescuiwgsyuikume => __("\x48\124\x4d\114\x20\x54\x61\147\x73", PR__MDL__ADVANCED_CMS), self::qgqyauaqwqmqseim => IconBrandInterface::akyeqkegauoewowy]]; return parent::ckqaeiskasoyysmg($eyagosskwwmgwmog); } public function register($shortcodes = []) { $shortcodes = [ Tip::symcgieuakksimmu(), Text::symcgieuakksimmu(), Free::symcgieuakksimmu(), Stat::symcgieuakksimmu(), Right::symcgieuakksimmu(), Wrong::symcgieuakksimmu(), Notice::symcgieuakksimmu(), Example::symcgieuakksimmu(), Question::symcgieuakksimmu(), Quotation::symcgieuakksimmu(), Related::symcgieuakksimmu(), Recommend::symcgieuakksimmu(), Wikipedia::symcgieuakksimmu(), Prerequisite::symcgieuakksimmu(), Code::symcgieuakksimmu(), Blog::symcgieuakksimmu(), Download::symcgieuakksimmu(), Product::symcgieuakksimmu(), Start::symcgieuakksimmu(), End::symcgieuakksimmu(), ]; return parent::register($shortcodes); } }
