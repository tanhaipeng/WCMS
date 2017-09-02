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
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
    </section>
    <!-- Tools -->
    <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>帐号管理</li>
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
                    <span class='badge'>3</span>
                </a>
                <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Lemon'>
                    <i class='icon-lemon'></i>
                </a>
            </div>
        </div>
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
                            Settings
                        </a>
                        <a class='btn' href='#'>
                            <i class='icon-filter'></i>
                            Filters
                        </a>
                        <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Reload'>
                            <i class='icon-refresh'></i>
                        </a>
                    </div>
                    <div class='badge'>3 record</div>
                </div>
            </div>
            <div class='panel-body filters'>
                <div class='row'>
                    <div class='col-md-9'>

                    </div>
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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th class='actions'>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class='success'>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr class='danger'>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr class='warning'>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr class='active'>
                    <td>4</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr class='disabled'>
                    <td>5</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class='action'>
                        <a class='btn btn-success' data-toggle='tooltip' href='#' title='Zoom'>
                            <i class='icon-zoom-in'></i>
                        </a>
                        <a class='btn btn-info' href='#'>
                            <i class='icon-edit'></i>
                        </a>
                        <a class='btn btn-danger' href='#'>
                            <i class='icon-trash'></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class='panel-footer'>
                <ul class='pagination pagination-sm'>
                    <li>
                        <a href='#'>«</a>
                    </li>
                    <li class='active'>
                        <a href='#'>1</a>
                    </li>
                    <li>
                        <a href='#'>2</a>
                    </li>
                    <li>
                        <a href='#'>3</a>
                    </li>
                    <li>
                        <a href='#'>4</a>
                    </li>
                    <li>
                        <a href='#'>5</a>
                    </li>
                    <li>
                        <a href='#'>6</a>
                    </li>
                    <li>
                        <a href='#'>7</a>
                    </li>
                    <li>
                        <a href='#'>8</a>
                    </li>
                    <li>
                        <a href='#'>»</a>
                    </li>
                </ul>
                <div class='pull-right'>
                    Showing 1 to 10 of 32 entries
                </div>
            </div>
        </div>
</div>
</body>
