<ol class="breadcrumb">
    <li class="breadcrumb-item "><i class="fa fa-home"></i></li>
    <li class="breadcrumb-item "><a href="{{route('site.site.index')}}">站点</a></li>
    <li class="breadcrumb-item ">设置站点信息</li>
</ol>
<div class="card">
    <div class="card-header">设置站点信息</div>
    <div class="card-body">
        <div class="form-group">
            <label class="col-sm-2 control-label">站点名称</label>
            <div class="col-sm-6">
                <input type="text" required name="name" value="{{old('name',$site['name']??'')}}" class="form-control" placeholder="如: 后盾人">
                <span class="help-block small text-muted">站点中显示的站点名称,可以使用中文等任意字符</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">站点介绍</label>
            <div class="col-sm-6">
                <textarea name="description"  class="form-control" cols="30" rows="3">{{old('description',$site['description']??'')}}</textarea>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-success mt-2">保存提交</button>