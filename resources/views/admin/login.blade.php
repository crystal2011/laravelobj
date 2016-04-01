@include('admin.header')
<div  class="login-body">
    <div class="container">
        <form class="form-signin" action="index.html">
            <div class="form-signin-heading text-center">
                <h1 class="sign-title">登录后台管理系统</h1>
                <img src="/public/images/login-logo.png" alt=""/>
            </div>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="管理员" autofocus>
                <input type="password" class="form-control" placeholder="登录密码">
                <button class="btn btn-lg btn-login btn-block" type="submit">
                    <i class="fa fa-check"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@include('admin.footer')