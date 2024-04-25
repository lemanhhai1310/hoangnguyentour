<?php $projectName = "Hoang Nguyen Tour"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Bungee+Inline&family=Inter:wght@100..900&family=WindSong:wght@400;500&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="assets/uikit/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="assets/uikit/dist/js/uikit.min.js"></script>
    <script src="assets/uikit/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>

    <style>
        .windsong-regular {
            font-family: "WindSong", cursive;
            font-weight: 400;
            font-style: normal;
        }

        .windsong-medium {
            font-family: "WindSong", cursive;
            font-weight: 500;
            font-style: normal;
        }
        @font-face{
            font-family:'Be Vietnam Regular';
            font-display: swap;
            src:local('Be Vietnam Regular'),
            url('fonts/be-vietnam/BeVietnam-Regular.ttf') format('truetype');
            font-weight:normal;
            font-style:normal;
        }
        @font-face{
            font-family:'Be Vietnam Bold';
            font-display: swap;
            src:local('Be Vietnam Bold'),
            url('fonts/be-vietnam/BeVietnam-Bold.ttf') format('truetype');
            font-weight:normal;
            font-style:normal;
        }
        .be-vietnam-pro-thin {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .be-vietnam-pro-extralight {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .be-vietnam-pro-light {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .be-vietnam-pro-regular {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .be-vietnam-pro-medium {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .be-vietnam-pro-semibold {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .be-vietnam-pro-bold {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .be-vietnam-pro-extrabold {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .be-vietnam-pro-black {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .be-vietnam-pro-thin-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .be-vietnam-pro-extralight-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .be-vietnam-pro-light-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .be-vietnam-pro-regular-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .be-vietnam-pro-medium-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .be-vietnam-pro-semibold-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .be-vietnam-pro-bold-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .be-vietnam-pro-extrabold-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .be-vietnam-pro-black-italic {
            font-family: "Be Vietnam Pro", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

    </style>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <nav class="uk-navbar-container header" uk-sticky>
        <div class="uk-container">
            <div uk-navbar>
                <div class="uk-navbar-left">
                    <a href="" class="uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@l">
                        <li class="uk-active"><a href="#">Về chúng tôi</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Hàn quốc</a></li>
                        <li><a href="#">Nhật Bản</a></li>
                        <li><a href="#">Úc</a></li>
                        <li><a href="#">Tour khám phá</a></li>
                        <li>
                            <a href="#">Dịch vụ <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="uk-navbar-item">
                        <a href="" class="header__btn be-vietnam-pro-bold uk-button uk-button-small uk-button-default uk-border-pill">Tư vấn ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
