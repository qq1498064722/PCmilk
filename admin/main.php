<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        nav{
            width: 100%;
            height: 50px;
            border-radius: 0px;
            margin-bottom: 0;
            box-sizing: border-box;
        }
        aside{
            width: 200px;
            position: absolute;
            top: 50px;
            bottom: 0;
            background: rgba(213, 211, 220, 0.1);
        }
        aside>.panel{
            margin-bottom: 0px;
            border-radius: 0;
        }
        .panel-heading{
            border-bottom: 2px solid #cccccc;
        }
        .list-group-item{
            padding: 10px 30px;
            border: 0px;
        }
        main{
            position: absolute;
            left: 200px;
            right: 0;
            top: 50px;
            bottom: 0;
            background:;
            
            /*background: aquamarine;*/
        }
        .glyphicon{
            float: right;
            transition: all ease .4ms;
        }
        .active{
            transform: rotateZ(180deg);
        }
    main>iframe{
        width: 100%;
        height: 100%;
        padding: 10px;
        box-sizing: border-box;
    }
    </style>
</head>
<body>
<!--导航栏开始-->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--导航栏结束-->
<!--左边栏开始-->
<aside>
    <div class="panel">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-menu-down"></i>
            导航管理
        </div>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="navinsert.php" target="right">
                       添加导航
                    </a>
                </li>
                <li class="list-group-item">
                    <a href="navselect.php" target="right">
                        查看导航
                    </a>
                </li>
            </ul>
        </div>
    <div class="panel">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-menu-down"></i>
            商品分类
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="cateinsert.php" target="right">
                    产品分类
                </a>
            </li>
            <li class="list-group-item">
                <a href="cateselect.php" target="right">
                    查看分类
                </a>
            </li>
        </ul>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-menu-down"></i>
            商品管理
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="goodsinsert.php" target="right">
                    商品添加
                </a>
            </li>
            <li class="list-group-item">
                <a href="goodsselect.php" target="right">
                    商品查看
                </a>
            </li>
        </ul>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-menu-down"></i>
            在线预约
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="onlineinsert.php" target="right">
                    在线预约
                </a>
            </li>
            <li class="list-group-item">
                <a href="onlineselect.php" target="right">
                    预约查看
                </a>
            </li>
        </ul>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <i class="glyphicon glyphicon-menu-down"></i>
            新闻资讯
        </div>
        <ul class="list-group">
            <li class="list-group-item">
                <a href="newinsert.php" target="right">
                    类型管理
                </a>
            </li>
            <li class="list-group-item">
                <a href="newselect.php" target="right">
                    类型添加
                </a>
            </li>
        </ul>
    </div>
</aside>
<!--左边栏结束-->
<!--右边内容开始-->
<main>
    <iframe src="" frameborder="0" name="right"></iframe>
</main>

<!--右边内容结束-->
</body>
</html>
<script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
<script>
    $('.panel-heading').on('click',function (e) {
        e.preventDefault();
        $(this).next('.list-group').slideToggle();
        $(this).children('i').toggleClass('active');
    })
</script>