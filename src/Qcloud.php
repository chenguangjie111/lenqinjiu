<?php
namespace Lenqinjiu\Qcloud;

use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Base;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Bill;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Cbs;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Cdb;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Cdn;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Cns;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Cvm;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Eip;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Image;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Lb;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Live;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Market;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Monitor;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Scaling;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Sec;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Snapshot;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Trade;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Vod;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Wenzhi;
use Lenqinjiu\Qcloud\Module\QcloudApi_Module_Yunsou;


/**
 * QcloudApi
 * SDK入口文件
 */
class Qcloud
{
    /**
     * MODULE_CVM
     * 云服务器
     */
    const MODULE_CVM   = 'cvm';

    /**
     * MODULE_CDB
     * CDB数据库
     */
    const MODULE_CDB   = 'cdb';

    /**
     * MODULE_LB
     * 负载均衡
     */
    const MODULE_LB    = 'lb';

    /**
     * MODULE_TRADE
     * 产品售卖
     */
    const MODULE_TRADE = 'trade';

    /**
     * MODULE_BILL
     * 账单
     */
    const MODULE_BILL = 'bill';

    /**
     * MODULE_SEC
     * 云安全
     */
    const MODULE_SEC = 'sec';

    /**
     * MODULE_IMAGE
     * 镜像
     */
    const MODULE_IMAGE = 'image';

    /**
     * MODULE_MONITOR
     * 云监控
     */
    const MODULE_MONITOR = 'monitor';

    /**
     * MODULE_CDN
     * CDN
     */
    const MODULE_CDN = 'cdn';

    /**
     * MODULE_VPC
     * VPC
     */
    const MODULE_VPC = 'vpc';

    /**
     * MODULE_VOD
     * VOD
     */
    const MODULE_VOD = 'vod';

    /**
     * YUNSOU
     */
    const MODULE_YUNSOU = 'yunsou';

    /**
     * cns
     */
    const MODULE_CNS = 'cns';

    /**
     * wenzhi
     */
    const MODULE_WENZHI = 'wenzhi';

    /**
     * MARKET
     */
    const MODULE_MARKET = 'market';

    /**
     * MODULE_EIP
     * 弹性公网Ip
     */
    const MODULE_EIP = 'eip';

    /**
     * MODULE_LIVE
     * 直播
     */
    const MODULE_LIVE = 'live';

    /**
     * MODULE_SNAPSHOT
     * 快照
     */
    const MODULE_SNAPSHOT = 'snapshot';

    /**
     * MODULE_CBS
     * 云硬盘
     */
    const MODULE_CBS = 'cbs';

    /**
     * MODULE_SCALING
     * 弹性伸缩
     */
    const MODULE_SCALING = 'scaling';

    /**
     * load
     * 加载模块文件
     * @param  string $moduleName   模块名称
     * @param  array  $moduleConfig 模块配置
     * @return
     */
    public static function load($moduleName, $moduleConfig = array())
    {
        $moduleName = ucfirst($moduleName);
        $moduleClassName = 'QcloudApi_Module_' . $moduleName;
        $moduleInstance = new $moduleClassName();

        if (! empty($moduleConfig)) {
            $moduleInstance->setConfig($moduleConfig);
        }

        return $moduleInstance;
    }
}
