<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <title>Administrator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../source/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../source/admin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../source/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../source/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Đăng Nhập Quản Trị </h3>
                        @if(count($errors)>0)
                        <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                          {{$err}}2

                          @endforeach
                      </div>
                      @endif
                      @if(Session::has('message'))
                      <div class="alert alert-danger">{{Session::get('message')}}</div>
                      @endif
                  </div>
                  <div class="panel-body">
                    <form role="form" action="/admin/login" method="POST">
                        {!!csrf_field()!!}
                        <input id="role" name="role" value="1" type="hidden">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Tên đăng nhập" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">Đăng Nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div style=""><a href="/"><< Quay về trang chủ</a></div>
    <div><a href="/teacher/login">Giảng viên đăng nhập >></a></div>
</div>

<!-- jQuery -->
<script src="../source/admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../source/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../source/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../source/admin/dist/js/sb-admin-2.js"></script>

</body>

</html>
