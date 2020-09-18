<?php
/** .-------------------------------------------------------------------
 * |  Software: [hdcms framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军大叔 <www.aoxiangjun.com>
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * 仓库接口
 * Interface RepositoryInterface
 * @package App\Repositories
 */
interface RepositoryInterface
{
    public function all(array $columns = ['*']);

    public function paginate($row = 10, array $columns = ['*'], $latest = null);

    public function create(array $attributes);

    public function update(Model $model, array $attributes);

    public function delete(Model $model);

    public function find($id, $columns = ['*']);

    public function findByAttributes(array $attributes, $columns = ['*']);
}