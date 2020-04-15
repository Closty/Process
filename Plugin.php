<?php
/**
 * 适用于typecho的页面加载进度条
 *
 * @package Process
 * @author 瓶子
 * @version 2.1.3
 * @link https://www.clost.net/index.php/jishujiaocheng/470.html
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;

class Process_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Process')->render = array('Process_Plugin', 'render');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
    	       // 插件信息与更新检测
        function process_update($name, $version){
            echo "<style>.process-info{text-align:left; margin:1em 0;} .process-info > *{margin:0 0 1rem} .buttons a{background:#000; color:#fff; border-radius:10px; padding:.5em .75em; display:inline-block}</style>";
            echo "<div class='process-info'>";
            echo "<h2>Process插件 (".$version.")</h2>";
            echo "<p>By: <a href='https://www.clost.net'>瓶子</a></p>";
            echo "<p class='buttons'><a href='https://www.clost.net/index.php/jishujiaocheng/470.html'>项目介绍</a>
                  <a href='https://github.com/closty/process/releases'>更新日志</a></p>";
        }
         process_update("Process", "2.3.1");
        /** 进度条主题配置 */
        $colors = array(
            'black'  => '黑色',
            'blue'   => '蓝色',
            'green'  => '绿色',
            'orange' => '橙色',
            'pink'   => '粉红色',
            'purple' => '紫色',
            'red'    => '红色',
            'silver' => '银色',
            'white'  => '白色',
            'yellow' => '黄色'
        );

        $types = array(
            'barber-shop'      => '理发店型',
            'big-counter'      => '大字号数字型',
            'bounce'           => '萌萌哒跳跃型',
            'center-atom'      => '旋转桃花型',
            'center-circle'    => '翻转圆圈型',
            'center-radar'     => '雷达扫描型',
            'center-simple'    => '居中常规型',
            'corner-indicator' => '角指示器型',
            'fill-left'        => '左侧填充型',
            'flash'            => 'flash控件型',
            'flat-top'         => '平直呆板型',
            'loading-bar'      => '缓存加载型',
            'minimal'          => '简洁小巧型',
            'mac-osx'          => 'Mac系统型',
            'material'         => '材料物质型'
        );
        $ProcessColor = new Typecho_Widget_Helper_Form_Element_Select('ProcessColor', $colors, 'blue', _t('进度条颜色'));
        $ProcessTheme = new Typecho_Widget_Helper_Form_Element_Select('ProcessTheme', $types, 'flash', _t('进度条主题'));
        $githubusernameDescription = _t("注意:请在Github中Folk<a href='https://github.com/closty/Process'>本项目</a>后，在此处填写您的Github用户名；以使用您的github仓库进行CDN加速;例如填写closted");
		$githubusername = new Typecho_Widget_Helper_Form_Element_Text('githubusername', NULL, '', _t('您的Github用户名:'), $githubusernameDescription);
        $form->addInput($ProcessColor);
        $form->addInput($ProcessTheme);
		$form->addInput($githubusername->addRule('required', _t('Github用户名不能为空！不会请填写closted即可')));
    }

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /**
     * 插件实现方法
     *
     * @access public
     * @return void
     */
    public static function render()
    {
        $config = Typecho_Widget::widget('Widget_Options')->plugin('Process');
        $pluginUrl = "https://cdn.jsdelivr.net/gh/$config->githubusername/Process" ;
        $themeUrl = "https://cdn.jsdelivr.net/gh/$config->githubusername/Process" . '/themes/' . $config->ProcessColor . '/pace-theme-' . $config->ProcessTheme . '.css';
        echo '<link href="' . $themeUrl . '" rel="stylesheet" />';
        echo <<<EOT
            <script> paceOptions = { elements: {selectors: ['#footer']}};</script>
            <script src="{$pluginUrl}/pace.min.js"></script>            
EOT;
    }
}
