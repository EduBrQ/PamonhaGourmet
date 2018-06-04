
@section('content')

    <style>

        body {
            background-color: #ECECEC;
            color: #444444;
            padding: 0;
            margin: 0;
            perspective: 1px;
            transform-style: preserve-3d;
            height: 100%;
            overflow-x: hidden;
            font-family: 'Roboto';
        }
        .left-underline {
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            -moz-osx-font-smoothing: grayscale;
            position: relative;
            overflow: hidden;
        }
        .left-underline:before {
            content: "";
            position: absolute;
            z-index: -1;
            left: 0;
            right: 100%;
            bottom: 0;
            background: #ECECEC;
            height: 4px;
            -webkit-transition-property: right;
            transition-property: right;
            -webkit-transition-duration: 0.15s;
            transition-duration: 0.15s;
            -webkit-transition-timing-function: ease-out;
            transition-timing-function: ease-out;
        }
        .left-underline:hover:before, .left-underline:focus:before, .left-underline:active:before {
            right: 0;
        }
        div.navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #218838;
            -webkit-box-shadow: 0px 2px 6px 0px rgba(50, 50, 50, 0.75);
            -moz-box-shadow:    0px 2px 6px 0px rgba(50, 50, 50, 0.75);
            box-shadow:         0px 2px 6px 0px rgba(50, 50, 50, 0.75);
            z-index: 9999999;
            opacity: 0.6;
        }
        div.navbar > ul.navbar-container {
            list-style-type: none;
            margin: 0;
            padding-left: 1em;
            padding-right: 1em;
            overflow: hidden;
        }
        div.navbar > ul > li.nav-item {
            float: right;
            background-color: rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease;
            border-radius: 15px;

        }
        div.navbar > ul > li.active {
            background-color: rgba(0, 0, 0, 0.5);
        }
        div.navbar > ul > li:hover {
            background-color: rgba(0, 0, 0, 0.2);
        }
        a.nav-button {
            font-family: 'Roboto';
            text-decoration: none;
            line-height: 60px;
            padding-left: 20px;
            padding-right: 20px;
            color: rgba(228, 241, 254, 1);
            transition: all 0.5s ease;
        }
        a.nav-button:hover {
            text-decoration: none;
        }
        li.active > a.nav-button {
            cursor: default;
        }
        .brand-logo {
            float: left;
            cursor: default;
        }
        .parallax {
            height: 70vh;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .parallax.p1 {
            background: url(https://www.sbs.com.au/food/sites/sbs.com.au.food/files/TIB_Street_Pamonha_07.jpg) no-repeat fixed 50% 0;
            background-size: cover;
            color: #fff;
        }
        .parallax.p2 {
            background: url(https://abrilveja.files.wordpress.com/2017/10/frutos-da-terra-006.jpg) no-repeat fixed 50% 0;
            background-size: cover;
            color: #fff;
        }
        .parallax.p3 {
            background: url(http://i-exc.ccm2.net/iex/1280/1512046019/1224980.jpg) no-repeat fixed 70% 0;
            background-size: cover;
            color: #fff;
        }
        .parallax.p4 {
            background: url(http://www.portalrosachoque.com.br/storage/images/5d96a.jpeg) no-repeat fixed 70% 0;
            background-size: cover;
            color: #fff;
        }
        .parallax.p5 {
            background: url(https://cdn3.semglutensemlactose.com/wp-content/uploads/2011/02/DSC_0364.jpg) no-repeat fixed 70% 0;
            background-size: cover;
            color: #fff;
        }
        .parallax.p6 {
            background: url(https://guiadacozinha.com.br/wp-content/uploads/2016/01/pamonha-recheada-40172.jpg) no-repeat fixed 70% 0;
            background-size: cover;
            color: #fff;
        }
        .parallax-text {
            width: 24em;
            position: fixed;
            top: 20%;
            left: 50%;
            border: .5em solid #fff;
            margin-left: -10%;
            padding: 2em 0;
            text-align: center;
            z-index: 999;
        }
        .parallax > div.blur-image {
            position: relative;
            width: 100%;
            height: 100%;
        }
        hgroup{

            display: inline-block;
            text-align: center;
            position: relative;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            color: #fff;
            border: 2px solid #fff;
            padding: .5em 3em;
            background-color: rgba(0,0,0,.2);
            z-index: 2;
            border-radius: 15px 50px;
        }
        .row {
            width: 80%;
            height: 30%;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 15px;
            padding-bottom: 15px;
            min-height: 150px;
        }
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .row > .col-3 {
            width: 30%;
            height: 100%;
            box-sizing: border-box;
            float: left;
            padding-left: 5px;
            padding-right: 5px;
        }
        footer {
            width: 100%;
            padding-top: 20px;
            display: block;
            background-color: #ee6e73;
        }
        .footer-copyright {
            font-weight: 300;
            overflow: hidden;
            height: 50px;
            line-height: 50px;
            color: rgba(255, 255, 255, 0.8);
            background-color: rgba(51, 51, 51, 0.08);
        }
        .container {
            width: 85%;
            padding: 0 1.5rem;
            margin: 0 auto;
            max-width: 1280px;
        }
        footer p {
            border-left: 3px solid #ffcdd2;
            padding-left: 15px;
            text-indent: 20px;
            color: #ececec;
        }


        /* Blank lines for ease and view */
        /* */
    </style>

    <html>
    <head>
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.5.5/jquery.smooth-scroll.min.js"></script>
    </head>
    <body>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <div class="navbar">
        <ul class="navbar-container">
            <li><img src="http://pamonhagourmet.com/img/logo-pamonha-gourmet.png" href="#" class="left-underline nav-button brand-logo" style="width:6%; height: 8%"></li>
            <li class="nav-item"><a href="#section-3" class="left-underline nav-button" data-scroll>Contatos</a></li>
            <li class="nav-item"><a href="#section-2" class="left-underline nav-button" data-scroll>Pamonhas</a></li>
            <li class="nav-item active"><a href="#section-1" class="left-underline nav-button" data-scroll>Home</a></li>
        </ul>
    </div>
    <div class="parallax p1" id="section-1">
        <hgroup style="width: 30%">
            <h1>Olá!</h1>
            <h2>Seja Bem Vindo</h2>
        </hgroup>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>First Section Col1</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus maximus quam et dignissim. Praesent felis arcu, euismod et ullamcorper ut, condimentum ut ante. Vestibulum vel libero commodo, aliquam libero eu, gravida arcu. Proin scelerisque faucibus ligula quis efficitur. Donec at sollicitudin purus, suscipit tempus augue. Sed imperdiet volutpat sapien at hendrerit. Mauris egestas ex a quam tincidunt gravida. Quisque interdum tempor lacinia. Nulla eget varius purus. Integer non sollicitudin dui. Phasellus sem turpis, maximus in auctor vulputate, porta id nunc.</p>
        </div>
        <div class="col-3">
            <h1>First Section Col2</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet est id leo facilisis, quis egestas erat vehicula. Aenean nec facilisis leo, et tristique lorem. Aliquam porttitor, elit ac ornare lacinia, sapien augue sagittis dolor, tempor ultricies lorem arcu et ante. Nulla facilisi. Praesent facilisis lacus at blandit maximus. Ut at libero nisi. Cras eu augue tellus. Nam pretium eget nisi non viverra. Maecenas eget tincidunt nibh, vitae interdum dolor.</p>
        </div>
        <div class="col-3">
            <h1>First Section Col3</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac nibh dolor. Cras rutrum molestie ligula posuere hendrerit. Donec luctus vitae elit in gravida. Duis in viverra nunc. Nunc et metus blandit, blandit quam in, laoreet mi. In vitae mauris sit amet tellus dictum rhoncus malesuada non arcu. Ut lacus lacus, dignissim at commodo id, dapibus sed felis. Cras in nunc id est lobortis euismod. Sed egestas nulla et augue sagittis lacinia. Quisque finibus bibendum risus, vitae accumsan ante mollis ac. Aliquam fermentum, mauris eu gravida dictum, tortor risus finibus nibh, in tincidunt velit tortor vehicula mi.</p>
        </div>
    </div>
    <div class="parallax p2" id="section-2">
        <hgroup>
            <h1>Well</h1>
            <h2>This is some bold info!</h2>
        </hgroup>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>Maçã</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus maximus quam et dignissim. Praesent felis arcu, euismod et ullamcorper ut, condimentum ut ante. Vestibulum vel libero commodo, aliquam libero eu, gravida arcu. Proin scelerisque faucibus ligula quis efficitur. Donec at sollicitudin purus, suscipit tempus augue. Sed imperdiet volutpat sapien at hendrerit. Mauris egestas ex a quam tincidunt gravida. Quisque interdum tempor lacinia. Nulla eget varius purus. Integer non sollicitudin dui. Phasellus sem turpis, maximus in auctor vulputate, porta id nunc.</p>
        </div>
        <div class="col-3">
            <h1>Chocolate</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet est id leo facilisis, quis egestas erat vehicula. Aenean nec facilisis leo, et tristique lorem. Aliquam porttitor, elit ac ornare lacinia, sapien augue sagittis dolor, tempor ultricies lorem arcu et ante. Nulla facilisi. Praesent facilisis lacus at blandit maximus. Ut at libero nisi. Cras eu augue tellus. Nam pretium eget nisi non viverra. Maecenas eget tincidunt nibh, vitae interdum dolor.</p>
        </div>
        <div class="col-3">
            <h1>Banana</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac nibh dolor. Cras rutrum molestie ligula posuere hendrerit. Donec luctus vitae elit in gravida. Duis in viverra nunc. Nunc et metus blandit, blandit quam in, laoreet mi. In vitae mauris sit amet tellus dictum rhoncus malesuada non arcu. Ut lacus lacus, dignissim at commodo id, dapibus sed felis. Cras in nunc id est lobortis euismod. Sed egestas nulla et augue sagittis lacinia. Quisque finibus bibendum risus, vitae accumsan ante mollis ac. Aliquam fermentum, mauris eu gravida dictum, tortor risus finibus nibh, in tincidunt velit tortor vehicula mi.</p>
        </div>
    </div>
    <div class="parallax p3" id="section-2">
        <hgroup>
            <h1>Well</h1>
            <h2>This is some bold info!</h2>
        </hgroup>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>Maçã</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus maximus quam et dignissim. Praesent felis arcu, euismod et ullamcorper ut, condimentum ut ante. Vestibulum vel libero commodo, aliquam libero eu, gravida arcu. Proin scelerisque faucibus ligula quis efficitur. Donec at sollicitudin purus, suscipit tempus augue. Sed imperdiet volutpat sapien at hendrerit. Mauris egestas ex a quam tincidunt gravida. Quisque interdum tempor lacinia. Nulla eget varius purus. Integer non sollicitudin dui. Phasellus sem turpis, maximus in auctor vulputate, porta id nunc.</p>
        </div>
        <div class="col-3">
            <h1>Chocolate</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet est id leo facilisis, quis egestas erat vehicula. Aenean nec facilisis leo, et tristique lorem. Aliquam porttitor, elit ac ornare lacinia, sapien augue sagittis dolor, tempor ultricies lorem arcu et ante. Nulla facilisi. Praesent facilisis lacus at blandit maximus. Ut at libero nisi. Cras eu augue tellus. Nam pretium eget nisi non viverra. Maecenas eget tincidunt nibh, vitae interdum dolor.</p>
        </div>
        <div class="col-3">
            <h1>Banana</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac nibh dolor. Cras rutrum molestie ligula posuere hendrerit. Donec luctus vitae elit in gravida. Duis in viverra nunc. Nunc et metus blandit, blandit quam in, laoreet mi. In vitae mauris sit amet tellus dictum rhoncus malesuada non arcu. Ut lacus lacus, dignissim at commodo id, dapibus sed felis. Cras in nunc id est lobortis euismod. Sed egestas nulla et augue sagittis lacinia. Quisque finibus bibendum risus, vitae accumsan ante mollis ac. Aliquam fermentum, mauris eu gravida dictum, tortor risus finibus nibh, in tincidunt velit tortor vehicula mi.</p>
        </div>
    </div>
    <div class="parallax p4" id="section-2">
        <hgroup>
            <h1>Well</h1>
            <h2>This is some bold info!</h2>
        </hgroup>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>Maçã</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus maximus quam et dignissim. Praesent felis arcu, euismod et ullamcorper ut, condimentum ut ante. Vestibulum vel libero commodo, aliquam libero eu, gravida arcu. Proin scelerisque faucibus ligula quis efficitur. Donec at sollicitudin purus, suscipit tempus augue. Sed imperdiet volutpat sapien at hendrerit. Mauris egestas ex a quam tincidunt gravida. Quisque interdum tempor lacinia. Nulla eget varius purus. Integer non sollicitudin dui. Phasellus sem turpis, maximus in auctor vulputate, porta id nunc.</p>
        </div>
        <div class="col-3">
            <h1>Chocolate</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet est id leo facilisis, quis egestas erat vehicula. Aenean nec facilisis leo, et tristique lorem. Aliquam porttitor, elit ac ornare lacinia, sapien augue sagittis dolor, tempor ultricies lorem arcu et ante. Nulla facilisi. Praesent facilisis lacus at blandit maximus. Ut at libero nisi. Cras eu augue tellus. Nam pretium eget nisi non viverra. Maecenas eget tincidunt nibh, vitae interdum dolor.</p>
        </div>
        <div class="col-3">
            <h1>Banana</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac nibh dolor. Cras rutrum molestie ligula posuere hendrerit. Donec luctus vitae elit in gravida. Duis in viverra nunc. Nunc et metus blandit, blandit quam in, laoreet mi. In vitae mauris sit amet tellus dictum rhoncus malesuada non arcu. Ut lacus lacus, dignissim at commodo id, dapibus sed felis. Cras in nunc id est lobortis euismod. Sed egestas nulla et augue sagittis lacinia. Quisque finibus bibendum risus, vitae accumsan ante mollis ac. Aliquam fermentum, mauris eu gravida dictum, tortor risus finibus nibh, in tincidunt velit tortor vehicula mi.</p>
        </div>
    </div>
    <div class="parallax p5" id="section-2">
        <hgroup>
            <h1>Well</h1>
            <h2>This is some bold info!</h2>
        </hgroup>
    </div>
    <div class="row">
        <div class="col-3">
            <h1>Maçã</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam cursus maximus quam et dignissim. Praesent felis arcu, euismod et ullamcorper ut, condimentum ut ante. Vestibulum vel libero commodo, aliquam libero eu, gravida arcu. Proin scelerisque faucibus ligula quis efficitur. Donec at sollicitudin purus, suscipit tempus augue. Sed imperdiet volutpat sapien at hendrerit. Mauris egestas ex a quam tincidunt gravida. Quisque interdum tempor lacinia. Nulla eget varius purus. Integer non sollicitudin dui. Phasellus sem turpis, maximus in auctor vulputate, porta id nunc.</p>
        </div>
        <div class="col-3">
            <h1>Chocolate</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet est id leo facilisis, quis egestas erat vehicula. Aenean nec facilisis leo, et tristique lorem. Aliquam porttitor, elit ac ornare lacinia, sapien augue sagittis dolor, tempor ultricies lorem arcu et ante. Nulla facilisi. Praesent facilisis lacus at blandit maximus. Ut at libero nisi. Cras eu augue tellus. Nam pretium eget nisi non viverra. Maecenas eget tincidunt nibh, vitae interdum dolor.</p>
        </div>
        <div class="col-3">
            <h1>Banana</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac nibh dolor. Cras rutrum molestie ligula posuere hendrerit. Donec luctus vitae elit in gravida. Duis in viverra nunc. Nunc et metus blandit, blandit quam in, laoreet mi. In vitae mauris sit amet tellus dictum rhoncus malesuada non arcu. Ut lacus lacus, dignissim at commodo id, dapibus sed felis. Cras in nunc id est lobortis euismod. Sed egestas nulla et augue sagittis lacinia. Quisque finibus bibendum risus, vitae accumsan ante mollis ac. Aliquam fermentum, mauris eu gravida dictum, tortor risus finibus nibh, in tincidunt velit tortor vehicula mi.</p>
        </div>
    </div>
    <div class="parallax p6">

        <hgroup>
            <h1>Well</h1>
            <h2>This is some bold info!</h2>
        </hgroup>
    </div>
    <footer>
        <div class="row" id="section-3">
            <div class="col-3">
                <p>Contato:</p>
                <img @show src="../assets/img/f.png">

            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2018 Pamonha da Elis, Todos os direitos Reservados.
            </div>
        </div>
    </footer>

    </body>

    </html>
    <script>

        function EasyPeasyParallax() {
            scrollPos = $(this).scrollTop();
            $('.p1').css({
                'background-position' : '50% ' + (-scrollPos/4)+"px"
            });
            $('.p2').css({
                'background-position' : '50% ' + (-scrollPos/8)+"px"
            });
            $('.p3').css({
                'background-position' : '70% ' + (-scrollPos/16)+"px"
            });
            $('.parallax-text').css({
                'margin-top': (scrollPos/2)+"px",
                'opacity': 1-(scrollPos/230)
            });
        }
        $(document).ready(function(){
            $(window).scroll(function() {
                EasyPeasyParallax();
            });
        });
    </script>