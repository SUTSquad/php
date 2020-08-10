<html>
<head>
<meta charset="utf-8">
<title>用户登录</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
</head>
<body>
<form action="dl2.php" method="post" >
<div class="form-group">
    <label for="name">用户名：</label>
    <input type="text" class="form-control" name="name" placeholder="用户名">
  </div>
  <div class="form-group">
    <label for="password">密码：</label>
    <input type="password" class="form-control" name="password" placeholder="密码">
  </div>
  <button type="button" class="btn btn-primary">登录</button>
</form>
</body>
</html>
