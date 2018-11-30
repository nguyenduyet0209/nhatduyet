<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{asset('public/be_admin')}}/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Nhật Duyệt</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/metisMenu.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{asset('admin/home')}}">Shop Mr.NhatDuyet</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
                        {{Auth::user()->email}}
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="{{asset('logout')}}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{asset('admin/home')}}">
                                <i class="fa fa-home fa-fw"></i>Trang chủ
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('admin/product')}}">
                                <i class="fa fa-th fa-fw"></i>Sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('admin/category')}}">
                                <i class="fa fa-list-ol fa-fw"></i>Danh mục sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('admin/news')}}">
                                <i class="fa fa-pencil fa-fw"></i>Bài viết
                            </a>
                        </li>
                        <li>
                            <a href="{{asset('admin/newscategory')}}">
                                <i class="fa fa-list-ul fa-fw"></i>Danh mục bài viết
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('main')

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/metisMenu.js"></script>
    <script src="js/confirm.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor');
    </script>
</body>
</html>
