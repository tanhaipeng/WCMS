<body class='main page'>
<!-- Navbar -->
<div class='navbar navbar-default' id='navbar'>
    <a class='navbar-brand' href='#'>
        <i class='icon-beer'></i>
        Hierapolis
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
            <li class='launcher'>
                <i class='icon-file-text-alt'></i>
                <a href="/wx/index.php/admin/pmsg">消息群发</a>
            </li>
            <li class='active launcher'>
                <i class='icon-table'></i>
                <a href="/wx/index.php/admin/wacc">帐号管理</a>
            </li>
        </ul>
    </section>
    <!-- Tools -->
    <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>帐号管理</li>
        </ul>
    </section>
    <!-- Content -->
    <div id='content'>
        <div class='panel panel-default grid'>
            <div class='panel-heading'>
                <i class='icon-table icon-large'></i>
                帐号列表
                <div class='panel-tools'>
                    <div class='btn-group'>
                        <a class='btn' href='#'>
                            <i class='icon-wrench'></i>
                            新增
                        </a>
                    </div>
                </div>
            </div>
            <div class='panel-body filters'>
                <div class='row'>
                    <div class='col-md-3'>
                        <div class='input-group'>
                            <input class='form-control' placeholder='Quick search...' type='text'>
                            <span class='input-group-btn'>
                                <button class='btn' type='button'>
                                  <i class='icon-search'></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <table class='table'>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Account</th>
                    <th>Appid</th>
                    <th>Token</th>
                    <th>Update</th>
                    <th class='actions'>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                $index = 1;
                foreach ($detail as $item) {
                    echo "<tr>
                    <td>{$index}</td>
                    <td>{$item['account']}</td>
                    <td>{$item['appid']}</td>
                    <td>{$item['token']}</td>
                    <td>{$item['update']}</td>
                    <td class='action'>
                        <a class='btn btn-danger' href='javascript:void(0)' onclick=\"delAcccount('{$item['account']}');return false;\">
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>";
                    $index = $index + 1;
                }
                ?>
                </tbody>
            </table>
            <div class='panel-footer'>
                <ul class='pagination pagination-sm'>
                    <li>
                        <a href='/wx/index.php/admin/wacc?pg=0'>«</a>
                    </li>
                    <?php
                    for ($index = 1; $index <= $pn; $index++) {
                        $start = $index - 1;
                        echo "<li>
                        <a href=\"/wx/index.php/admin/wacc?pg={$start}\">{$index}</a>
                    </li>";
                    }
                    ?>
                    <li>
                        <?php
                        if ($pn > 0) {
                            $end = $pn - 1;
                        } else {
                            $end = 0;
                        }
                        echo "<a href='/wx/index.php/admin/wacc?pg={$end}'>»</a>";
                        ?>
                    </li>
                </ul>
                <div class='pull-right'>
                    Showing <?= count($detail); ?> to 10 of <?= $total; ?> entries
                </div>
            </div>
        </div>
    </div>
</body>
