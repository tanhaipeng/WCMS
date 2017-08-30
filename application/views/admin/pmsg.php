<body class='main page'>
<!-- Navbar -->
<div class='navbar navbar-default' id='navbar'>
    <a class='navbar-brand' href='#'>
        <i class='icon-beer'></i>
        Dashboard
    </a>
    <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-envelope'></i>
                Messages
                <span class='badge'>5</span>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>New message</a>
                </li>
                <li>
                    <a href='#'>Inbox</a>
                </li>
                <li>
                    <a href='#'>Out box</a>
                </li>
                <li>
                    <a href='#'>Trash</a>
                </li>
            </ul>
        </li>
        <li>
            <a href='#'>
                <i class='icon-cog'></i>
                Settings
            </a>
        </li>
        <li class='dropdown user'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-user'></i>
                <strong>John DOE</strong>
                <img class="img-rounded" src="http://placehold.it/20x20/ccc/777"/>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>Edit Profile</a>
                </li>
                <li class='divider'></li>
                <li>
                    <a href="/">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div id='wrapper'>
    <!-- Sidebar -->
    <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
            <li class='launcher'>
                <i class='icon-dashboard'></i>
                <a href="/wx/index.php/admin/index">平台概览</a>
            </li>
            <li class='active launcher'>
                <i class='icon-file-text-alt'></i>
                <a href="/wx/index.php/admin/pmsg">消息群发</a>
            </li>
            <li class='launcher'>
                <i class='icon-table'></i>
                <a href="/wx/index.php/admin/wacc">帐号管理</a>
            </li>
            <!--
            <li class='launcher dropdown hover'>
                <i class='icon-flag'></i>
                <a href='#'>Reports</a>
                <ul class='dropdown-menu'>
                    <li class='dropdown-header'>Launcher description</li>
                    <li>
                        <a href='#'>Action</a>
                    </li>
                    <li>
                        <a href='#'>Another action</a>
                    </li>
                    <li>
                        <a href='#'>Something else here</a>
                    </li>
                </ul>
            </li>
            <li class='launcher'>
                <i class='icon-bookmark'></i>
                <a href='#'>Bookmarks</a>
            </li>
            <li class='launcher'>
                <i class='icon-cloud'></i>
                <a href='#'>Backup</a>
            </li>
            <li class='launcher'>
                <i class='icon-bug'></i>
                <a href='#'>Feedback</a>
            </li>
            -->
        </ul>
        <!--
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
        -->
    </section>
    <!-- Tools -->
    <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>消息群发</li>
        </ul>
        <div id='toolbar'>

        </div>
    </section>
    <!-- Content -->
    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                消息编辑
            </div>
            <div class='panel-body'>
                <form>
                    <fieldset>
                        <div class='form-group'>
                            <label class='control-label'>文章标题</label>
                            <input class='form-control' placeholder='Enter username' type='text'>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>文章内容</label>
                            <textarea class='form-control' rows='10'></textarea>
                        </div>
                        <div class='form-group'>
                            <label class='control-label'>群发帐号</label>
                            <br>
                            <div class='checkbox-inline'>
                                <input type='checkbox' value='test1'>
                                test1
                            </div>
                            <div class='checkbox-inline'>
                                <input type='checkbox' value='test2'>
                                test2
                            </div>
                            <div class='checkbox-inline'>
                                <input type='checkbox' value='test3'>
                                test3
                            </div>
                        </div>
                    </fieldset>
                    <div class='form-actions'>
                        <button class='btn btn-default' type='submit'>提交</button>
                        <a class='btn' href='#'>取消</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
