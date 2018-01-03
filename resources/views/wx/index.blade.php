<!DOCTYPE html>
<html>
<head>
    <title>微信功能列表</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        function deleteById(stId) {
            flag = confirm("是否要删除这条数据？");
            if(flag){
                $.ajax({
                    type:'get',
                    url:'/st/destroy?id='+stId,
                    success:function (data) {
                        $("#tr"+stId).remove();
                    }
                });
            }
        }
    </script>
</head>
<body>
<div class="container">
    <div align="right">
        @if (Session::get('name')!==null) 用户名：{{Session::get('name')}}@endif
    </div>
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('/') }}">首页</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('wx/add') }}">功能添加</a>
        </ul>
    </nav>
    <h1>功能列表</h1>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>底部菜单栏</td>
            <td align="center"><a href="menu/add">生成</a></td>
        </tr>
        <tr>
            <td>群发消息</td>
            <td align="center"><a href="message/add">生成</a></td>
        </tr>
        <tr>
            <td>模版消息</td>
            <td align="center"><a href="template/add">生成</a></td>
        </tr>
        <tr>
            <td>授权</td>
            <td align="center"><a href="oauth/add">生成</a></td>
        </tr>
        <tr>
            <td>二维码</td>
            <td align="center"><a href="qr/add">生成</a></td>
        </tr>
        </thead>
    </table>
    {{--<div align="right"><tr>{{$data['info']->links()}}</tr></div>--}}
</div>
</body>
</html>