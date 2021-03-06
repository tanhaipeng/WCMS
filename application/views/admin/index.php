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
                通知
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
                    <a href='#'>Outbox</a>
                </li>
                <li>
                    <a href='#'>Trash</a>
                </li>
            </ul>
        </li>
        <li>
            <a href='#'>
                <i class='icon-cog'></i>
                设置
            </a>
        </li>
        <li class='dropdown user'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-user'></i>
                <strong>AllinGo</strong>
                <img class="img-rounded" src="http://placehold.it/20x20/ccc/777"/>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>个人中心</a>
                </li>
                <li class='divider'></li>
                <li>
                    <a href="/">注销</a>
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
            <li class='active launcher'>
                <i class='icon-dashboard'></i>
                <a href="/wx/index.php/admin/index">平台概览</a>
            </li>
            <li class='launcher'>
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
        <div data-toggle='tooltip' id='beaker' title='Made by AllinGo'></div>
        -->
    </section>
    <!-- Tools -->
    <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>平台概览</li>
        </ul>

        <div id='toolbar'>
            <div class='btn-group'>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Building'>
                    <i class='icon-building'></i>
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Laptop'>
                    <i class='icon-laptop'></i>
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Calendar'>
                    <i class='icon-calendar'></i>
                    <!--
                    <span class='badge'>0</span>
                    -->
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Lemon'>
                    <i class='icon-lemon'></i>
                </a>
            </div>
            <div class='label label-danger'>
                Danger
            </div>
            <div class='label label-info'>
                Info
            </div>
        </div>

    </section>
    <!-- Content -->
    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-beer icon-large'></i>
                Hierapolis Rocks!
                <div class='panel-tools'>
                    <div class='btn-group'>
                        <a class='btn' href='#'>
                            <i class='icon-refresh'></i>
                            Refresh statics
                        </a>
                        <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                            <i class='icon-chevron-down'></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class='panel-body'>
                <div class='page-header'>
                    <h4>System usage</h4>
                </div>
                <div class='progress'>
                    <div class='progress-bar progress-bar-success' style='width: 35%'></div>
                    <div class='progress-bar progress-bar-warning' style='width: 20%'></div>
                    <div class='progress-bar progress-bar-danger' style='width: 10%'></div>
                </div>
                <div class='page-header'>
                    <h4>User statics</h4>
                </div>
                <div class='row text-center'>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140'
                               data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='50'>
                    </div>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140'
                               data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='75'>
                    </div>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140'
                               data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='35'>
                    </div>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140'
                               data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='85'>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</body>