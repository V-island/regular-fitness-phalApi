<?php
/**
 * 请在下面放置任何您需要的应用配置
 */

return array(

    /**
     * 应用接口层的统一参数
     */
    'apiCommonRules' => array(
        //'sign' => array('name' => 'sign', 'require' => true),
    ),

    /**
     * 接口服务白名单，格式：接口服务类名.接口服务方法名
     *
     * 示例：
     * - *.*            通配，全部接口服务，慎用！
     * - Default.*      Api_Default接口类的全部方法
     * - *.Index        全部接口类的Index方法
     * - Default.Index  指定某个接口服务，即Api_Default::Index()
     */
    'service_whitelist' => array(
        'Default.Index',
    ),

    /**
     * 扩展类库 - 微信小程序
     */
    'WechatMini'  => array(
        'appid'      => 'wx37f3886e5163d6ae', // AppID(小程序ID)
        'secret'     => 'c7db370207c5cf041dad490819343e58', // AppSecret(小程序密钥)
        'url'        => 'https://api.weixin.qq.com/sns/jscode2session',
        'grant_type' => 'authorization_code'
    ),
);
