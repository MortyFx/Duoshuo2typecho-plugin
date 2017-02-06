<?php
/**
 * 多说评论导入typecho插件
 *
 * @package Duoshuo2typecho
 * @author Patrick95
 * @version 1.0.0
 * @link https://muguang.me/
 */
class Duoshuo2typecho_Plugin implements Typecho_Plugin_Interface
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
        Helper::addPanel(1, 'Duoshuo2typecho/Duoshuo2typecho.php', '多说评论导入Typecho', '多说评论转Typecho', 'administrator');
        return _t('请进入 "控制台 > 多说评论导入Typecho" 进一步操作');

    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
        Helper::removePanel(1, 'Duoshuo2typecho/Duoshuo2typecho.php');
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
    }

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

}
