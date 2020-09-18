<?php
/** .-------------------------------------------------------------------
 * |  Software: [hdcms framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军大叔 <www.aoxiangjun.com>
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use App\Repositories\ConfigRepository;
use App\Repositories\SiteRepository;
use Illuminate\Http\Request;

/**
 * 系统配置
 * Class SettingController
 * @package App\Http\Controllers
 */
class SettingController extends Controller
{
    public function index()
    {
        return view('system.setting.index');
    }

    public function edit($name, ConfigRepository $repository)
    {
        $config = $repository->get($name, [], 'system');
        return view('system.setting.edit', compact('config', 'name'));
    }

    public function update(Request $request, $name, ConfigRepository $repository)
    {
        $repository->save($request, $name, 'system');
        return back()->with('success', '保存成功');
    }

    public function updateCache(SiteRepository $siteRepository)
    {
        \Cache::flush();
        $siteRepository->loadAllSitePermission();
        return back()->with('success', '全站缓存更新成功');
    }
}
