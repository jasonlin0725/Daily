<meta name="csrf-token" content="{{csrf_token()}}">
<script>
    window.hdjs = {};
    //组件目录必须绝对路径
    window.hdjs.base = '/org/hdjs';
    //上传文件后台地址
    window.hdjs.uploader = '{{route('upload')}}?';
    //获取文件列表的后台地址
    window.hdjs.filesLists = '{{route('upload.lists')}}?';
</script>
<script src="/org/hdjs/require.js"></script>
<script src="/org/hdjs/config.js"></script>
