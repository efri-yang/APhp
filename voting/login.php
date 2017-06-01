<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆页面</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
    <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-theme.css">
    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="./bootstrap/bootstrapvalidator/js/bootstrapValidator.js"></script>
    <script type="text/javascript" src="./bootstrap/bootstrapvalidator/js/language/zh_CN.js"></script>


    <link rel="stylesheet" type="text/css" href="./styles/style.css">
</head>

<body>

<div class="container">
    <div class="row">
        <form class="form-horizontal" action="./doLogin.php" method="post" id="defaultForm">
            <div class="form-group">
                <label  class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input type="text" name="username" class="form-control"  placeholder="请输入用户名">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">密码</label>
                <div class="col-sm-10">
                    <input type="password" name="pwd" class="form-control"  placeholder="请输入密码">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">登陆</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
