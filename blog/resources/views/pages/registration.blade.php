<div class="col-xs-8 col-xs-offset-2">
    <div class="widget-author widget-register-form boxed">
        <div class="row">
            <div class="col-xs-10  col-xs-offset-1">
                <h2>Регистрация</h2>
                <p>Поля, отмеченные звездочкой, являются <strong>обязательными</strong> для заполнения.</p>

                <form class="form-horizontal" method="POST"  action="/registration">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Адрес e-mail <span class="req-field">*</span></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="user@domain.ru" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Ваш пароль <span class="req-field">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" value="" placeholder="Придумайте пароль">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Подтверждение пароля <span class="req-field">*</span></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password2" value="" placeholder="Пароль еще раз">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Имя или никнейм </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Иван Иванов" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Мобильный телефон</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="register_phone" name="phone" placeholder="+79991234567" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_confirmed" ><span class="text-no-error">Согласен на хранение и обработку персональных данных</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Зарегистрироваться</button>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-gray">Очистить</button>
                        </div>
                    </div>
                    <div class="push-down-30">
                        Уже зарегистрированы? <a href="http://myblog.vlane.ru/login" style="cursor: pointer">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div></div>