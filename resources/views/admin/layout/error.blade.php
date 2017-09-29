@if (count($errors) > 0)
<div class="modal fade" role="dialog" id="message_model">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">温馨提示</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-2">
                        <h2 class="glyphicon glyphicon-exclamation-sign"></h2>
                    </div>
                    <div class="col-sm-8">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br/>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary">确定</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    $('#message_model').modal('show');

    setTimeout(function () {
        $('#message_model').modal('hide');
    },2000);
</script>
@endif