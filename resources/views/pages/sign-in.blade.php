<div class="col-xs-8 col-xs-offset-2">
    <div class="widget-author widget-auth-form boxed">
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1">
                <h2>Авторизация</h2>
                <p>Для продолжения необходимо ввести логин и пароль</p>
                <form class="form-horizontal" method="POST" action="/sign-in">
                    @csrf
                    @if (Session::has('authError'))
                        <p class="alert">
                            {!! Session::get('authError') !!}
                        </p>
                    @endif
                    <div class="form-group">
                        @if ($errors->has('email'))
                            <p style="color:red">{{ $errors->first('email') }}</p>
                        @endif
                        <label for="inputEmail3" class="col-sm-3 control-label">Адрес e-mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Адрес e-mail, указанный при регистрации" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($errors->has('password'))
                            <p style="color:red">{{ $errors->first('password') }}</p>
                        @endif
                        <label for="inputPassword3" class="col-sm-3 control-label">Пароль</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" placeholder="Ваш пароль" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember">Запомнить меня</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Войти</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-gray">Очистить</button>
                        </div>
                    </div>
                    <div class="push-down-30">
                        Еще не зарегистрированы? <a href="http://myblog.vlane.ru/register.html" style="cursor: pointer">Зарегистрироваться</a>
                    </div>
                </form>
            </div>
        </div>
    </div></div>