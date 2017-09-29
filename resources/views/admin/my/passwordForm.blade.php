@extends('admin.layout.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">修改密码</div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="/admin/updatePwd">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-sm-1 control-label">原密码</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" placeholder="原密码" name="original_password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-1 control-label">新密码</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="新密码" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-1 control-label">确认密码</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" placeholder="确认密码" name="confirm_password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-1 col-sm-6">
                        <button type="submit" class="btn btn-default">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection