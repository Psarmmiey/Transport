

<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">

<!-- Mirrored from gigm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Sep 2018 15:32:44 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<script type="text/javascript" src="../script.crazyegg.com/pages/scripts/0079/2867.js" async="async"></script>

   <meta property="og:image" content="https://gigm.com/img/gigm-hire.jpg" />
    <meta name="description" content="GIGM.com is Nigeria's leading road transportation company. Using technology to move road transportation in Nigeria forward." />
    <meta name="keywords" content="God is good motors, Easter 2018, Easter Special Offers,Easter Egg,Events for Easter,Easter History,Nativity story,Restaurant discount,Travel discount,Travel deals,
Easter Travel Deals,
Easter Sunday,
Holiday Hangout,
Spiritual Retreats,
Church programs,
Easter camp meeting, online bus ticket booking, online bus booking in nigeria,  best transport company in Nigeria, More leg room, best trip prices, child fare rates, manage your booking, discount for tickets, discount for children tickets, travel & Tours, pick up service, bus terminals, transport company in Nigeria,  transport companies in nigeria, gigm motors
, g igm booking, gigm online booking, god is good motors, gigm logistics, gigm app, transport, transportation, abc, abc transport, what is transportation, transportation in nigeria, what is transport, transport system, god is good, god is good transport, transport fare, chisco transport, abc transport lagos, communication, abc transport nigeria, types of transportation, 
        importance of transportation, cross country, cross country transport, meaning of transportation, means of transportation, advantages of transportation, god is good motors, transportation model, define transportation, god is good motors, guo transport, aktc transport, god is good transport company, gigm, primero transport services limited, god is good, god is good transport,
        abc transport port harcourt, what is communication, efex transport, young shall grow motors, transport fare, peace mass transit, abc transport lagos, cross country, cross country transport, meaning of transportation, means of transportation, peace mass transport, define transportation, what is transportation, chisco transport, types of transportation, advantages of transportation" />
 
     <script src="js/Stor.js"></script>
    <script src="js/str.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="../code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link href="dist/select2/select2.min.css" rel="stylesheet" />
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css" />
    <link href="plugin/demo.css" rel="stylesheet" />
    <link href="plugin/Font%20Awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="plugin/components/bootstrap-datepicker/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="plugin/datepicker-in-fullscreen.css" rel="stylesheet" />
    <script>
        function ShowLoading() {
        

            var adultnum = $('#ContentPlaceHolder2_ddltickets').val();
            var children = $('#ContentPlaceHolder2_ddlchild').val();
            var totalpax = parseInt(adultnum) + parseInt(children);
            stor.add("pax", totalpax);
            var loadingDiv = document.getElementById("welcomeDiv");
            loadingDiv.style.display = "block";
            // }

        }



        function ShowLoadinghire() {
            var loadingDiv = document.getElementById("welcomeDiv");
            loadingDiv.style.display = "block";
            //$("#welcomeDiv").show();
            // $("#welcomeDiv").show().delay(10000).hide();
        }
        function getMobileOperatingSystem() {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;

            if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i) || userAgent.match(/iPod/i)) {
                document.getElementById("ios").style.display = "none";
            }
            else if (userAgent.match(/Android/i)) {
                document.getElementById("andriod").style.display = "block";
            }
            else {
                //alert('Unknown');
                //return 'unknown';
            }


        }

    </script>


    <style>

@media screen and (max-width: 1025px) {
	.booking-section .search-inputs label {
		color: #ffffff;
		font-weight: normal;
		letter-spacing: 1px;
		font-size: .7985714163em;
	}
}

        .check-text {
            font-size: 12px;
        }

        .bookingStatus .btn-gigm {
            width: 82%;
        }

        a .fa {
            color: #ffffff;
            font-size: 20px;
            padding: 5px;
        }

        .gm_container {
            width: 100%;
            float: left;
            overflow: hidden;
        }

        .gm_triptype input[type=radio] {
            display: none;
        }

            .gm_triptype input[type=radio]:checked + .radio {
                background-color: #f1f1f2;
                color: #ef3a37;
            }

        .gm_triptype .radio {
            float: left;
            display: inline-block;
            background-color: #ef3a37;
            border: thin solid #f5f5f5;
            padding: 2%;
            text-align: center;
            width: 45%;
            margin-left: 3%;
            border-radius: 3px;
            cursor: pointer;
        }

        .gm_triptype input[type=radio] label {
            color: #ef3a37;
            font-weight: normal;
            letter-spacing: 1px;
        }

        #ContentPlaceHolder2_dialogpop {
            width: 50%;
            padding: 10px;
            height: 100%;
            overflow: auto;
        }

        .img-banner {
            position: fixed;
            bottom: 5%;
            right: 0;
            z-index: 100;
        }

        #welcomeDiv {
            position: fixed;
            top: 0%;
            left: 0%;
            background-color: rgba(0,0,0,0.5);
            width: 100%;
            height: 100%;
            z-index: 9002;
            color: #fff;
            font-size: 14px;
            text-align: center;
            display: none;
        }

        #overlay {
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: none;
        }

        .select2-container--default .select2-selection--single {
            height: 40px;
        }

            .select2-container--default .select2-selection--single .select2-selection__arrow {
                height: 40px;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 40px;
            }

            .select2-container--default .select2-selection--single .select2-selection__placeholder {
                color: #444;
            }

        .departic {
            background-image: url("img/calendar.gif");
            background-repeat: no-repeat;
            padding-left: 45px;
        }

        .no-pad-default {
            margin-top: 0px !important;
        }

        .cd-popup {
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(94, 110, 141, 0.9);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
            -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
            transition: opacity 0.3s 0s, visibility 0s 0.3s;
        }

            .cd-popup.is-visible {
                opacity: 1;
                visibility: visible;
                -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
                -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
                transition: opacity 0.3s 0s, visibility 0s 0s;
            }

        .cd-popup-container {
            position: relative;
            width: 90%;
            max-width: 400px;
            margin: 4em auto;
            background: #FFF;
            border-radius: .25em .25em .4em .4em;
            text-align: center;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            -webkit-transform: translateY(-40px);
            -moz-transform: translateY(-40px);
            -ms-transform: translateY(-40px);
            -o-transform: translateY(-40px);
            transform: translateY(-40px);
            /* Force Hardware Acceleration in WebKit */
            -webkit-backface-visibility: hidden;
            -webkit-transition-property: -webkit-transform;
            -moz-transition-property: -moz-transform;
            transition-property: transform;
            -webkit-transition-duration: 0.3s;
            -moz-transition-duration: 0.3s;
            transition-duration: 0.3s;
        }

            .cd-popup-container p {
                padding: 3em 1em;
            }

            .cd-popup-container .cd-buttons:after {
                content: "";
                display: table;
                clear: both;
            }

            .cd-popup-container .cd-buttons li {
                float: left;
                width: 50%;
                list-style: none;
            }

            .cd-popup-container .cd-buttons a {
                display: block;
                height: 60px;
                line-height: 60px;
                text-transform: uppercase;
                color: #FFF;
                -webkit-transition: background-color 0.2s;
                -moz-transition: background-color 0.2s;
                transition: background-color 0.2s;
            }

            .cd-popup-container .cd-buttons li:first-child a {
                background: #fc7169;
                border-radius: 0 0 0 .25em;
            }

        .no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
            background-color: #fc8982;
        }

        .cd-popup-container .cd-buttons li:last-child a {
            background: #b6bece;
            border-radius: 0 0 .25em 0;
        }

        .no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
            background-color: #c5ccd8;
        }

        .cd-popup-container .cd-popup-close {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 30px;
            height: 30px;
        }

            .cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
                content: '';
                position: absolute;
                top: 12px;
                width: 14px;
                height: 3px;
                background-color: #8f9cb5;
            }

            .cd-popup-container .cd-popup-close::before {
                -webkit-transform: rotate(45deg);
                -moz-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                -o-transform: rotate(45deg);
                transform: rotate(45deg);
                left: 8px;
            }

            .cd-popup-container .cd-popup-close::after {
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                transform: rotate(-45deg);
                right: 8px;
            }

        .is-visible .cd-popup-container {
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }

        @media only screen and (min-width: 1170px) {
            .cd-popup-container {
                margin: 8em auto;
            }
        }

        .windowpop {
            display: none;
        }
        /* The Close Button */
        .close {
            color: #fff;
            float: right;
            font-size: 22px;
            font-weight: 500;
            opacity: 1;
            background: red;
            border-radius: 6px;
            padding: 5px;
        }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

        .radioButtonList {
            list-style: none;
            margin: 0;
            padding: 0;
        }

            .radioButtonList.horizontal li {
                display: inline;
            }

            .radioButtonList label {
                display: inline;
            }

        .select2-container {
            width: 100% !important;
        }

        .select2-container--default .select2-selection--single {
            height: 34px !important;
        }

		nav .navbar-nav {
    float: left !important;
    margin-left: 1% !important;
}

    	.account-btn {
    		left: 0 !important;
    	}

    	@media screen and (min-width:1600px) {
    		nav .navbar-nav {
    			float: left !important;
    			margin-left: 4% !important;
    		}
    	}
    	

				@media screen and (min-width:1910px) {
    		nav .navbar-nav {
    			float: left !important;
    			margin-left: 9% !important;
    		}
    	}
    </style>


    <script src="js/redirection-mobile.js"></script>
    <script src="js/Stor.js"></script>

    <script>
        SA.redirection_mobile({
            mobile_url: "m.gigm.com",
            mobile_prefix: "https",
            keep_path : true,
            cookie_hours: "2"
        });

    </script>
    
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
    
    <!-- Hotjar Tracking Code for https://www.gigm.com -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 212560, hjsv: 5 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, '//static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!--booking widget a/b experiment --->
    <style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-MR6ZPNH':true});</script>

    <!----end booking widget a/b experiment --->
	<script  src="https://www.googletagmanager.com/gtag/js?id=UA-60793633-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-60793633-2');
</script>



	 
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60793633-2', 'auto');
        ga('require', 'GTM-MR6ZPNH');
        ga('send', 'pageview');

    </script>
    <meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    
    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- GIGM Style Sheet-->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/respond.css" rel="stylesheet" /><link rel="stylesheet" href="webassets/css/bootstrap.min.css" /><link rel="stylesheet" href="webassets/css/main260f.css?v=1239" /><link rel="stylesheet" href="webassets/css/animate.css" /><link rel="stylesheet" href="webassets/css/font-awesome.min.css" /><link rel="shortcut icon" type="image/ico" href="img/ico.png" />

    <style>
        #welcomespan:hover, #lnkLogout:hover {
            background: none;
            text-decoration: underline;
        }

        .benefit-points {
            list-style: none;
        }

        .account-btn .sign-btn a {
            color: #EF3A37 !important;
        }

            .account-btn .sign-btn a:hover {
                color: #fff !important;
                background: #EF3A37 !important;
            }

        .ad-color {
            background: #f1c933 !important;
        }

        .displayme {
            display: block !important;
        }

        /* The Modal (background) */
        .Mymodal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1500; /* Sit on top */
            padding-top: 30px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* The Close Button */
        .close {
            color: #ffffff;
            float: right;
            font-size: 22px;
            font-weight: 500;
            opacity: 1;
        }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

			.account-btn {
    		left: 0 !important;
    	}

    	@media screen and (min-width:1600px) {
    		nav .navbar-nav {
    			float: left !important;
    			margin-left: 4% !important;
    		}
    	}
    	

				@media screen and (min-width:1910px) {
    		nav .navbar-nav {
    			float: left !important;
    			margin-left: 9% !important;
    		}
    	}
    </style>

   
<title>
	Transport | Nigeria's leading transport company
</title></head>
<body>
    <script type='text/javascript' data-cfasync='false'>window.purechatApi = { l: [], t: [], on: function () { this.l.push(arguments); } }; (function () { var done = false; var script = document.createElement('script'); script.async = true; script.type = 'text/javascript'; script.src = 'https://app.purechat.com/VisitorWidget/WidgetScript'; document.getElementsByTagName('HEAD').item(0).appendChild(script); script.onreadystatechange = script.onload = function (e) { if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) { var w = new PCWidget({c: '70f234ef-334a-4b9c-9816-aed0827d4e6b', f: true }); done = true; } }; })();</script>

    
    

    <!-- Google Tag Manager -->
    <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-T4GZR9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function (w, d, s, l, i) {
    w[l] = w[l] || []; w[l].push({
        'gtm.start':
        new Date().getTime(), event: 'gtm.js'
    }); var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
    '../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
})(window, document, 'script', 'dataLayer', 'GTM-T4GZR9');</script>
    <!-- End Google Tag Manager -->
    <form method="post" action="https://gigm.com/" onsubmit="javascript:return WebForm_OnSubmit();" id="form1" novalidate="novalidate">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="A9krVUI92P4z/gmV1opVIrnO2tfxws6eHI938Ny4LBsC/CL/vTEDlTig0r6mzxjcqiUZh/AN4H22PFXHMrQvxryh4J1d3C8evtniJCXrF7I1SQNa69uoypHYvgwTnXioy5hVQi/Fertvg0gbJgXx96Q4uaS2der+aKDdKCU6F9bTIu9Drg1N9ExXLoE1IiD0Pu9sD/0VkjvVnkfh98tUwA4ZQLoH5YyUHf9naik95DOlM2aLmfzWggv+u59Rx+U8C6few0hBA1Xuipyvc+FSKB97dAQRIneUC23WcPRkYV4qC5MkvGolNlCwJocIZhE+KUSaEv7eVDeRcW4lFmj16W9sO0yjxNqwyz1AWqgAgyWH2MmvM6pwhruHVe1NM8szXvEUNkmg2wVSnN3jVk+4xzdHi2L5WXV+RuEeJss8VTAAbPCerzTpZqrD0LcjylPWOPh1BthkuC8e1bI//1SdXUUnMVcSsr5TWFQ+btjtSZhq+RYCO7md4DPRReinzAQNcrcuDCZXNVPd9sOZVJCgwsohWw7NA+M2P+U/Q0OQevtOo/JXBPYo3BAUCcxWEhu5SkGXFzSEn/D5Hf4t9KKxjMz2VXmOeJfzfdv9KIAMSkevsqjOENhstTeJmgk4bkZXZYteA8TK/8ueJw9DIgIK/SRj0YTrADUzCRdBblYpCvE33bWeo43Kg9PgAk5TscDqzi3f0b6woh8K5BlZqPzdH89xta7+hVF8UPU15ko/iSFiREmP7LiJ8MZGzCUQPGC8mbRcMNdpxcyrx4KZ3usj8Oer/V2ZmPUg6KZDScU+SHI6iqocMZS+viGr+faoaa7Wffvd89SA/dkcX96dZ+1ohrs2v0Sp/3KRAlbO87PeJ3obkZRjQ4dptxIaPEx6MvFU7GhFH6dsVnXjVXjk5C7rzhNf9VN29+9C9cpNFjbnRlWDu6f/HSQZMeq6Wz5HxIjjEov57t2ryrl1jfUtIJMZCXdP3L7fGO4kq9kQz+1uZfiBkfhEd0VeSDsLpth7OpAqAp7Lf6RLwojz2IXMTSaEuuAneL2939Aykhyub0n29WHTCiup/dIrzRRd2a5aV2w4QA8zSln7zMj36F+/C5cBUQWL0I3Yb4o8xbWMytz98tizGWZr9nx4nqIL0QcJOXCdJZbOnLjojSB0EpCB3qZN3yDeeEd+dYM4k1CT+QIsp4ZCl0D3AaAsLVYxri9T1yyTcubdaTfshXuL9bC2rX1hkDtUcFWNpznCyQnP0TcsMDfXIwPfrxWUM5uPbFZfBEF/gel1hp8CnGikgAgN6t6wMwO8COQzhQ+whSf6XsNxsnTxJ6yBqIT+FoISrAwa2kIrDc+bOOQsBDP+IM+HHBCCf7bQ2krXIYH6ZsDBjktbsGlJpeLXHcEFhEDnqBzBB6UA8khUgcWbTd2DZGrnvTxaF3g6v0T/0E+DZ3l5MMZIr4S0/AENL/My5HTL7IwnC7IHdOoLsC2nIarObcoaO8ywGFn4vqO3DgF0d455y2yebugZ74JJ1Sc1eLF3C2r/PE7QF+FQ5WSkqBG83C6p54Kf1Xt7MKhIeLParjTUDlVm+wQlYuwxWwk6jLKAXkkpsWpkkFM+JZJE+AK8EpI2m45MTXU5kD2ZI0OlwAHEReizK0J6bDz69pMvSpTokZ7EFa5qIhxkZACbXRqlG3nBND3GaqinYaHp6uxIjeDbiisWA3Z/THwZnxSpvd4/WDDCp8Lm8QFY+mo2OulhnPk1uccsuB9Bb72CiZldb2HJEIrIGQ/c2Uw9QYmiie+bN7CyAg5dh46jDqlxSKZdOjl88rzoDk4K/Nrh4Pm3mo5okc3aGH2rwCVMsPh9HMKvYn9Hm++n5gDssRLmcrr6t4Xg2O03BOgp1t54kUu4s5XA8uy2jdK2XSQGLewhE1o8BGA517AaUhHpwemum3qo1u78hb9zQbhyICqu1iystWjgQOW6yExuy7zpfpHd2nsW3nNBZi1E/gV92uB1Ec/jZ+a/J0gN998GIGccjU8dGdwfJHvG8Qwn2dcdxFswwyaZsrYKkhaAikR3oAwZF8kQc7Iqp1LnYUdNmtS8XeGHc8HRBoLZw8rsanpfAB+ti5Mln9I9Lggsw7OaLHW8bWBRCjtP5pAvCPISn8S+pqHvSOVYPBsF4oJMh/rQFLpDvqArWkFVoCqOAGDnFQz4wia0kNGQZcI7qwwICqHmiw6Be5OsZWEa6w4xJOD0gcyjBUnkYyL4aam2Lqcjyspe8m7eZjUcdCQ3Xn2a138Qt0zKHTPcwKWSuw5mcIXabGHLEuqgndkHeZpQjzu0xkeIyGLfmM+w8m229EnjbfEpw1XWDEoSCo5l1bqhnhKLl1SfcDWZBscLP9l7V71Hwy0kMBzaR1GRcPW61GvY/2eCQYEQ3sL3a8WIHW1E+6ebS9Uf1IfQ7ZflFcElhOvTIrxU/arrvE0ndYyssM8k+6vD/16AW79tSCIlWOpW/AZETAAReXMmYu3I9vMwClQ6A522n0YZZR3m/tlUdgGsTVvCRb2ODBeDe3/wHgAesrzTy+0RaDKnyTojTUeV3bPkWzO8wZtoHYPVttMvdgE2Sb0Obbaoaz4PQlfMCns=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="WebResource41f8.js?d=pynGkmcFUV13He1Qd6_TZCmOtBvyE8CDCvkIirSE_vl5vkMhd6bmQlJF9bkfWvYQj2q7vIKTOkKEQ963oyjifQ2&amp;t=636639207890360068" type="text/javascript"></script>


<script src="ScriptResource7356.js?d=1HpV3OVB0CaEXoaafcqmhjqSOJxhmpkH-Bvq4_jRIemsyN9_WWAjbaNDtPMlFEGOtdKeRJNoyhqaOJlVHXhIjNkJFYidV1b-68IPmBXXoaTnpArQTiUxvHdnlp8ESYWmtzC2mdOb7fxHEfRg2yubjQ2&amp;t=ffffffffa83fb62f" type="text/javascript"></script>
<script src="ScriptResourcead3a.js?d=uHIkleVeDJf4xS50Krz-yLtlMK60iYO4jEo6GzwP9giBKEvF4ucYotrbd7IrAz5EsNjQ2kLVdWscyWkbBkrF41rf7Ncx_SS4EzH45tcoDwrZeWjvjFsmp_0S6f8RtIo5tTt74VUX7DmMOThbV_LK4bzuf70Ni5F9-9LyzAfFaCk1&amp;t=ffffffffad4b7194" type="text/javascript"></script>
<script src="ScriptResource8a4f.js?d=Jw6tUGWnA15YEa3ai3FadBOdu4QgHL9YTNLVpfltqTIzU2oFGUcCN5nMBdaNwbCXk72VA2z8-06nyFFdeUVE8CaVdetscM2OmiIMRwOz5WGSEwuTK4TO8swuRlWYWTUpLjSrZ57HuUaUpuzayP4DWSbCQTQ2p5gXeL3tHAEnAWM1&amp;t=ffffffffad4b7194" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var PageMethods = function() {
PageMethods.initializeBase(this);
this._timeout = 0;
this._userContext = null;
this._succeeded = null;
this._failed = null;
}
PageMethods.prototype = {
_get_path:function() {
 var p = this.get_path();
 if (p) return p;
 else return PageMethods._staticInstance.get_path();},
load_All_terminals:function(succeededCallback, failedCallback, userContext) {
return this._invoke(this._get_path(), 'load_All_terminals',false,{},succeededCallback,failedCallback,userContext); }}
PageMethods.registerClass('PageMethods',Sys.Net.WebServiceProxy);
PageMethods._staticInstance = new PageMethods();
PageMethods.set_path = function(value) { PageMethods._staticInstance.set_path(value); }
PageMethods.get_path = function() { return PageMethods._staticInstance.get_path(); }
PageMethods.set_timeout = function(value) { PageMethods._staticInstance.set_timeout(value); }
PageMethods.get_timeout = function() { return PageMethods._staticInstance.get_timeout(); }
PageMethods.set_defaultUserContext = function(value) { PageMethods._staticInstance.set_defaultUserContext(value); }
PageMethods.get_defaultUserContext = function() { return PageMethods._staticInstance.get_defaultUserContext(); }
PageMethods.set_defaultSucceededCallback = function(value) { PageMethods._staticInstance.set_defaultSucceededCallback(value); }
PageMethods.get_defaultSucceededCallback = function() { return PageMethods._staticInstance.get_defaultSucceededCallback(); }
PageMethods.set_defaultFailedCallback = function(value) { PageMethods._staticInstance.set_defaultFailedCallback(value); }
PageMethods.get_defaultFailedCallback = function() { return PageMethods._staticInstance.get_defaultFailedCallback(); }
PageMethods.set_enableJsonp = function(value) { PageMethods._staticInstance.set_enableJsonp(value); }
PageMethods.get_enableJsonp = function() { return PageMethods._staticInstance.get_enableJsonp(); }
PageMethods.set_jsonpCallbackParameter = function(value) { PageMethods._staticInstance.set_jsonpCallbackParameter(value); }
PageMethods.get_jsonpCallbackParameter = function() { return PageMethods._staticInstance.get_jsonpCallbackParameter(); }
PageMethods.set_path("default.aspx");
PageMethods.load_All_terminals= function(onSuccess,onFailed,userContext) {PageMethods._staticInstance.load_All_terminals(onSuccess,onFailed,userContext); }
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
</div>
        <input type="hidden" name="ctl00$hdflogin" id="hdflogin" />
        <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$scm', 'form1', ['tctl00$ctl11','ctl11','tctl00$ContentPlaceHolder2$UpdatePanel1','ContentPlaceHolder2_UpdatePanel1','tctl00$ContentPlaceHolder2$ReschedulePanel','ContentPlaceHolder2_ReschedulePanel'], [], [], 90, 'ctl00');
//]]>
</script>


        <nav class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand gigm-logo" href="Default.html">
                        <img src="webassets/img/gigm-logo.png" alt="GIGM.com logo" /></a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="navbar-gigm"><a href="Default.html">Home</a></li>
                        <li class="dropdown mega-dropdown navbar-gigm">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">GIGM Experience
                         <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-sm-3 hide-mobile">
                                    <ul class="mobile-ul">
                                        <li class="dropdown-header">GIGM EXPERIENCE</li>
                                        <div id="cheapTrips" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <a href="#">
                                                        <img src="webassets/img/asaba.png" class="img-responsive" alt="GIGM - lagos to Asaba"></a>
                                                    <h4><small>Lagos to Asaba</small></h4>
                                                    <a href="index.html#gigm-widget" class="btn btn-gigm" type="button">Book now</a>

                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <a href="#">
                                                        <img src="webassets/img/enugu.png" class="img-responsive" alt="GIGM - Lagos to Enugu"></a>
                                                    <h4><small>Lagos to Enugu</small></h4>
                                                    <a href="index.html#gigm-widget" class="btn btn-gigm" type="button">Book now</a>
                                                </div>
                                                <!-- End Item -->
                                                <div class="item">
                                                    <a href="#">
                                                        <img src="webassets/img/ph.png" class="img-responsive" alt="product 1"></a>
                                                    <h4><small>Lagos to Port Harcourt</small></h4>
                                                    <a href="index.html#gigm-widget" class="btn btn-gigm" type="button">Book now</a>
                                                </div>
                                                <!-- End Item -->
                                            </div>
                                            <!-- End Carousel Inner -->
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#cheapTrips" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#cheapTrips" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                        <!-- /.carousel -->
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">EXPLORE</li>
                                        <li><a href="Learning-Academy.html">Learning Academy</a></li>
                                        <li><a href="Travels-Tours.html">Travels &amp; Tours</a></li>
                                        <li><a href="Safety.html">Safety</a></li>

                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">TRAVEL EXTRAS</li>
                                        <li><a href="hire-vehicle.html">Bus hire</a></li>
                                        <li><a href="#">Priority Services</a></li>
                                        <li><a href="http://giglogistics.ng/" target="_blank">Logistics</a></li>
                                        <li><a href="#">Coupons</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">TRAVEL WITH US</li>
                                        
                                        <li><a href="gigm-mobile-app.html">Our app</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown mega-dropdown navbar-gigm">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info
                         <i class="fa fa-angle-down"></i>
                            </a>

                            <ul class="dropdown-menu mega-dropdown-menu">
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">GIGM INFO</li>
                                        <p>Learn everything you would like to know about trips, GIGM and everything in between</p>

                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">CUSTOMER SERVICE</li>
                                        <li><a href="Faq.html">FAQ</a></li>
                                        <li><a href="Luggage-Allowance.html">Luggage Allowance</a></li>
                                        <li><a href="Terms-and-Conditions.html">Terms and condition</a></li>
                                        <li><a href="Contact-Us.html">Contact us</a></li>
                                        <li><a href="Customer-Care.html">Customer care</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">TRAVEL INFO</li>
                                        <li><a href="Terminals.html">Terminals</a></li>
                                    </ul>
                                </li>
                                <li class="col-sm-3">
                                    <ul>
                                        <li class="dropdown-header">ABOUT GIGM</li>
                                        <li><a href="About-Us.html">About us</a></li>
                                        
                                        <li><a href="Awards.html">Awards</a></li>
                                        <li><a href="Careers.html">Careers</a></li>
                                        <li><a href="enterprisepartners.html">Become an Enterprise Partner</a></li>
										<li><a href="captain.html">Become a Captain</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
						 <li class="dropdown mega-dropdown navbar-gigm"><a href="pickupservice.html">Pick up service</a></li>

						 

                    </ul>
                    <div id="ctl11">
	
                            <ul class="nav navbar-nav account-btn">
                                <li id="lisignup" class="sign-btn"><a href="Register.html">Sign Up</a></li>
                                <li id="liLogin" class="sign-btn"><a href="#" id="lmodal">Log In</a>
                                </li>
                                
                            </ul>

                            <ul class="nav call-us hidden-sm">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <span>Call Us Now    
                                    </span>
                                </li>
                                <li><span>(+234) 08139851110</span>
                                </li>
                            </ul>

                            </div>
                <!--.nav-collapse -->
                            </div>
        </nav>

        <div class="wrapper" style="overflow-x: hidden; overflow-y: hidden;">

            <div class="mainView">
                <div id="myLogin" class="Mymodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
                    <div class="modal-dialog">

                        <div class="loginmodal-container">
                            <span class="close" id="mClose">&times;</span>
                            <p class=" col-xs-12 text-center " style="margin: 4px">
                                <span id="lblmsg"></span>
                            </p>
                            <h1>Login to Your Account</h1>
                            <br />
                            <div id="mainForm">
                                <input name="ctl00$txtEmailPhone" type="text" id="txtEmailPhone" placeholder="Email ID or Phone number" />
                                <span id="RequiredFieldValidator2" style="color:Red;visibility:hidden;">*</span>
                                <input name="ctl00$txtPassword" type="password" id="txtPassword" class="form-control" required="required" placeholder="Password" />
                                <span id="RequiredFieldValidator3" style="color:Red;visibility:hidden;">*</span>
                                <input type="button" name="ctl00$btnlogin" value="Login" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$btnlogin&quot;, &quot;&quot;, true, &quot;loginvalmaster&quot;, &quot;&quot;, false, true))" id="btnlogin" class="login loginmodal-submit" />
                            </div>
                            <div style="display: none" id="activationDiv">
                                <input name="ctl00$txtActivationLink" type="text" id="txtActivationLink" placeholder="Phone number" />
                                <span id="reacti" style="color:Red;visibility:hidden;">*</span>

                                <input type="button" name="ctl00$GetActivationBtn" value="Get Activation Code" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$GetActivationBtn&quot;, &quot;&quot;, true, &quot;activation&quot;, &quot;&quot;, false, true))" id="GetActivationBtn" class="login loginmodal-submit" />
                                <br />
                                <a href="#" id="returnToLogin" style="color: #337ab7;">Return to login</a>
                            </div>
                            <div class="login-help">
                                <div>
                                    Don't have an account?
                                <a id="lnkRegister" class="text-center gigm-redTxt" href="javascript:__doPostBack(&#39;ctl00$lnkRegister&#39;,&#39;&#39;)">Click here to Register</a>

                                </div>
                                <div>
                                    <a href="#" id="forgotPassword">Forgot your password?</a>
                                </div>
                            </div>

                            <div class="sign-benefits-message login-deals">
                                <p class="benefit-header">Why sign up on GIGM.com ?</p>
                                <ul class="benefit-points">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Get additional 5%
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Manage your booking
                                    </li>
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Get exclusive deals and special offers
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
                        
</div>

                    
    <input type="hidden" name="ctl00$ContentPlaceHolder2$actstatus" id="ContentPlaceHolder2_actstatus" value="0" />
    <div id="ContentPlaceHolder2_dialogpop" class="windowpop">
        <span class="close" id="mClose">close</span>
        <a href="gigm-mobile-app.html" target="_blank">
			
            <img src="webassets/img/banner.jpg" class="img-responsive" /></a>
    </div>

    <div class="mask"></div>

    <div class="row no-margin" id="andriod" style="display: none;">

        <div class="alert noradius gigm-alert alert-dismissible" role="alert" style="margin-bottom: 0px;">
            <button type="button" class="close gigclose" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="row">
                <div class="col-xs-6" style="text-align: center">
                    <h4 style="margin-bottom: 0px; line-height: 35px;">Book. Pay. Travel.</h4>
                </div>
                <div class="col-xs-5 pull-right" style="text-align: right">
                    <!-- <a href="https://play.google.com/store/apps/details?id=com.gigm"> -->
                        <img src="img/googleplay.png" class="img-responsive" style="max-height: 35px; float: right; padding-right: 26px;" /></a>
                </div>
            </div>

        </div>
    </div>
    <div class="row no-margin" id="ios" style="display: none;">

        <div class="alert noradius gigm-alert alert-dismissible" role="alert" style="margin-bottom: 0px;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="row">
                <div class="col-xs-6" style="text-align: center">
                    <h4 style="margin-bottom: 0px; line-height: 35px;">Book. Pay. Travel.</h4>
                </div>
                <div class="col-xs-5 pull-right" style="text-align: right">
                    <img src="img/iOS-app-store.gif" class="img-responsive" style="max-height: 35px; float: right; padding-right: 26px;" />
                </div>
            </div>

        </div>
    </div>
    <div id="welcomeDiv" style="text-align: center; display: none" class="parentDisable gm_interstatial">
        
        <img src="img/pickup-loader.png" class="img loadingimg" style="margin-top: 8%;" />
		
            

        <p class="hidden">
            <h3 style="text-shadow: 2px 2px 8px #fff;">Looking for Buses</h3>
            <span style="text-shadow: 2px 2px 8px #fff;">it will only take a few seconds</span>
        </p>
    </div>
    <div class="marquee hidden-md hidden-lg text-big hidden">
        
        <p>50% off from Oyingbo to anywhere</p>
        <p>Lagos-Oyingbo to Abuja for 3,750</p>
    </div>
    
    <div id="ContentPlaceHolder2_updateProgress1" style="display:none;">
	
            <div style="position: fixed; text-align: center; height: 100%; width: 100%; top: 0%; right: 0; left: 0; z-index: 9999999;">
                <span style="border-width: 0px; position: fixed; padding: 50px; left: 40%; top: 22%;">
                    <img alt="progress" src="img/loadingBar.gif" style="width: 90px;" />
                </span>

            </div>
        
</div>
    <div id="ContentPlaceHolder2_UpdatePanel1">
	
            <div class="mainView">
                <div class="booking-section">
                    <div class="container">
                        <div class="gigm-tabs-search">
                            <div class="search-selector">
                                <!-- Nav tabs -->
                                <ul class="nav nav-justified tabs-custom" role="tablist">
                                    <li role="presentation" class="active" id="bookingtab"><a href="#bookBusWidget" aria-controls="bookBusWidget" role="tab" data-toggle="tab">
                                        <i class="fa fa-bus" aria-hidden="true"></i>
                                        <span>BOOK A TICKET</span>
                                    </a>

                                    </li>


                                    <li role="presentation" id="hiretab">
                                        <a href="#hireBus" aria-controls="hireBus" role="tab" data-toggle="tab">
                                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>

                                            <span>RENT A BUS</span>
                                        </a>

                                    </li>


                                    <li role="presentation" id="statustab">
                                        <a href="#bookingStatus" aria-controls="bookingStatus" role="tab" data-toggle="tab">
                                            <i class="fa fa-crosshairs" aria-hidden="true"></i>
                                            <span>BOOKING STATUS</span>
                                        </a>

                                    </li>

                                    <li role="presentation" id="rescheduletab" style="display: none">
                                        <a href="#rescheduleTicket" aria-controls="rescheduleTicket" role="tab" data-toggle="tab">
                                            <i class="fa fa-calendar-plus-o" aria-hidden="true"></i>

                                            <span>RESCHEDULE</span>
                                        </a>

                                    </li>


                                </ul>
                            </div>
                            <!-- Tab panes -->
                            <div class="search-inputs">

                                <div class="">
                                    <div class="tab-content-wrap" id="gigm-widget">
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="bookBusWidget">
                                                <div class="row bookingRow">
                                                    <div class="form-group col-md-4 col-sm-4 small-inputs">
                                                        <div class="gm_pushdown gm_container gm_triptype">
                                                            <input type="radio" name="triptype" value="oneway" id="oneway" checked />
                                                            <label for="oneway" class="radio nomargin">
                                                                One Way</label>
                                                            <input type="radio" name="triptype" value="roundtrip" id="roundtrip" />
                                                            <label for="roundtrip" class="radio">
                                                                Round Trip</label>
                                                        </div>
                                                        <input type="hidden" name="ctl00$ContentPlaceHolder2$hdftriptype" id="ContentPlaceHolder2_hdftriptype" value="0" />

                                                    </div>
                                                </div>

                                                <div class="row bookingRow">

                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                                        <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">

                                                            <label>Travelling From:</label>
                                                            <div class="select-menu">
                                                                <select name="ctl00$ContentPlaceHolder2$ddlstate" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder2$ddlstate\&#39;,\&#39;\&#39;)&#39;, 0)" id="ContentPlaceHolder2_ddlstate" class="form-control diacritics input-gigm" placeholder="Departure Terminal">
		<option selected="selected" value="">Departure Terminal</option>
		<option value="4">Edo =&gt; Auchi</option>
		<option value="5">Edo =&gt; Benin (Uselu)</option>
		<option value="6">Lagos =&gt; Iyana Ipaja</option>
		<option value="7">Lagos =&gt; Ajah</option>
		<option value="8">Abia =&gt; Umuahia</option>
		<option value="9">Abia =&gt; Aba</option>
		<option value="10">Akwa Ibom =&gt; Uyo</option>
		<option value="11">Anambra =&gt; Awka</option>
		<option value="12">Bayelsa =&gt; Yenagoa</option>
		<option value="13">Delta =&gt; Asaba (Onitsha)</option>
		<option value="14">Edo =&gt; Benin (Akpakpava)</option>
		<option value="15">Edo =&gt; Ekpoma</option>
		<option value="17">Enugu =&gt; Enugu</option>
		<option value="18">FCT Abuja =&gt; Mararaba</option>
		<option value="19">FCT Abuja =&gt; Zuba</option>
		<option value="20">FCT Abuja =&gt; Kubwa</option>
		<option value="21">FCT Abuja =&gt; Utako</option>
		<option value="22">Imo =&gt; Owerri</option>
		<option value="23">Imo =&gt; Orlu</option>
		<option value="24">Kaduna =&gt; Kaduna North</option>
		<option value="25">Lagos =&gt; Festac (mazamaza)</option>
		<option value="26">Lagos =&gt; Volks</option>
		<option value="27">Lagos =&gt; Ikotun</option>
		<option value="28">Lagos =&gt; Yaba</option>
		<option value="29">Lagos =&gt; Jibowu</option>
		<option value="30">Lagos =&gt; Oyingbo (Iddo)</option>
		<option value="31">Plateau =&gt; Jos</option>
		<option value="32">Rivers =&gt; Port Harcourt</option>
		<option value="33">Lagos =&gt; Old Ojo Road</option>
		<option value="34">Akwa Ibom =&gt; Calabar</option>
		<option value="35">Delta =&gt; Warri</option>
		<option value="36">Imo =&gt; Nkwerre Local Government Area Camp</option>
		<option value="37">FCT Abuja =&gt; Kubwa, Bwari Area Council Camp</option>
		<option value="38">Abia =&gt; Bende Local Government Area Camp</option>
		<option value="39">Enugu =&gt; Awgu Local Government Area Camp</option>
		<option value="40">Edo =&gt; Ovia North-East Local Government Area Camp</option>
		<option value="41">Delta =&gt; Aniocha North L.G.A. Camp</option>
		<option value="42">Rivers =&gt; Tai Local Government Area Camp</option>
		<option value="43">Anambra =&gt; Oyi Local Government Area Camp</option>
		<option value="44">Akwa Ibom =&gt; Nsit Atai Local Government Area Camp</option>
		<option value="45">Kaduna =&gt; Kaduna – Abuja Road Camp</option>
		<option value="46">Plateau =&gt; Jakatai-Mangu Mangu LGA Camp</option>
		<option value="47">Bayelsa =&gt; Kolokoma-Opokuma Local Government Area Camp</option>
		<option value="48">Lagos =&gt; Iyana Ipaja, Agege Camp</option>
		<option value="49">Lagos =&gt; Cele/Okota</option>
		<option value="56">Kaduna =&gt; Kaduna South</option>
		<option value="57">Lagos =&gt; AJAHBACKWARD</option>
		<option value="59">Lagos =&gt; Head Office</option>

	</select>
                                                                <span id="ContentPlaceHolder2_RequiredFieldValidator8" style="color:White;display:none;">Required</span>
                                                            </div>
                                                        </div>


                                                        <div class="form-group col-md-1 col-sm-1 text-center swap-div">
                                                            <a href="javascript:void(0)" class="padTB5">
                                                                <i class="fa fa-arrows-h"></i>
                                                            </a>
                                                        </div>

                                                        <div class="form-group col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                            <label>Travelling To:</label>
                                                            <div class="select-menu">
                                                                <select name="ctl00$ContentPlaceHolder2$ddlto" id="ContentPlaceHolder2_ddlto" class="form-control" SetFocusOnError="true" style="height:40px;">
		<option value="">Arrival Terminal</option>

	</select>
                                                                <span id="ContentPlaceHolder2_RequiredFieldValidator9" style="color:White;display:none;">Required</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                                        <div class="range">
                                                            <div class="col-xs-3" style="padding-left: 0px;">
                                                                <label>Departure Date</label>
                                                                <input name="ctl00$ContentPlaceHolder2$txtdepart" type="text" id="ContentPlaceHolder2_txtdepart" class="departic input-gigm form-control ui-autocomplete-input col-sm-10 col-xs-10 no-left-border form-control datepicker-here pad-left-date" data-language="en" placeholder="Select Date" style="color:#3C3939;height:40px;" />
                                                                <input type="hidden" name="ctl00$ContentPlaceHolder2$hdfdepart" id="ContentPlaceHolder2_hdfdepart" />
                                                                <span id="ContentPlaceHolder2_RequiredFieldValidator11" style="color:White;display:none;">Required</span>
                                                            </div>
                                                            <div id="ContentPlaceHolder2_TwoWayDate" class="col-xs-3">
                                                                <label>Arrival Date</label>
                                                                <input name="ctl00$ContentPlaceHolder2$txtarrive" type="text" id="ContentPlaceHolder2_txtarrive" class="departic input-gigm form-control ui-autocomplete-input col-sm-10 col-xs-10 no-left-border form-control datepicker-here pad-left-date" data-language="en" placeholder="Select Date" style="color:#3C3939;height:40px;" />
                                                                <span id="ContentPlaceHolder2_RequiredFieldValidator1" style="color:White;display:none;">Required</span>
                                                                <input type="hidden" name="ctl00$ContentPlaceHolder2$hdfarrive" id="ContentPlaceHolder2_hdfarrive" />
                                                            </div>

                                                            <div class="form-group col-md-1 col-sm-1 col-xs-12 small-inputs">
                                                                <label>Adults</label>
                                                                <div class="select-menu">
                                                                    <select name="ctl00$ContentPlaceHolder2$ddltickets" id="ContentPlaceHolder2_ddltickets" class="form-control" style="height:40px;">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>

	</select>
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-2 col-sm-2 col-xs-12 small-inputs hidden">
                                                                <label>Children ( Ages 2 - 10)</label>
                                                                <div class="select-menu">
                                                                    <select name="ctl00$ContentPlaceHolder2$ddlchild" id="ContentPlaceHolder2_ddlchild" class="form-control" style="height:40px;">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>

	</select>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-3 col-sm-3 col-xs-12">
                                                                <div class="form-group col-lg-2 col-md-2 col-sm-12 col-xs-12 small-inputs book-widget">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder2$Button1" value="Book Now" onclick="if(Page_ClientValidate(&#39;bus&#39;)) return ShowLoading();WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder2$Button1&quot;, &quot;&quot;, true, &quot;bus&quot;, &quot;&quot;, false, false))" id="ContentPlaceHolder2_Button1" class="btn btn-gigm" />

                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane bookingStatus" id="bookingStatus">
                                                <div class="row">
                                                    <div class="form-group col-md-6 col-sm-8">
                                                        <label>Check booking Status</label>
                                                        <input name="ctl00$ContentPlaceHolder2$txtbooking" type="text" id="ContentPlaceHolder2_txtbooking" class="form-control" placeholder="Enter Refcode" />
                                                        &nbsp;
                                                            <span id="ContentPlaceHolder2_RequiredFieldValidator12" style="color:White;visibility:hidden;">Required</span>
                                                    </div>

                                                    <div class="form-group col-md-2 col-sm-4">
                                                        <input type="button" name="ctl00$ContentPlaceHolder2$btnref" value="Check Status" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder2$btnref&quot;, &quot;&quot;, true, &quot;bStatus&quot;, &quot;&quot;, false, true))" id="ContentPlaceHolder2_btnref" class="btn btn-gigm" />

                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane bookingStatus bookingRow" id="hireBus">
                                                <div class="row hiringRow">
                                                    <div class="form-group col-md-4 col-sm-4 small-inputs">
                                                        <div class="gm_pushdown gm_container gm_triptype">
                                                            <div class="btn-group" data-toggle="buttons">
                                                                <label for="oneway" class="btn form-check-label active" id="hireoneway">
                                                                    <input value="oneway" name="ctl00$ContentPlaceHolder2$triptype" type="radio" id="ContentPlaceHolder2_oneWayHire" checked="checked" />One Way
                                                                </label>

                                                                <label for="roundtrip" class="btn form-check-label" id="hireroundtrip">
                                                                    <input value="roundtrip" name="ctl00$ContentPlaceHolder2$triptype" type="radio" id="ContentPlaceHolder2_roundTripHire" />Round Trip
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-5 col-sm-5 col-xs-12">
                                                        <label>Hire From:</label>
                                                        <div class="select-menu">
                                                            
                                                            

                                                            <input name="ctl00$ContentPlaceHolder2$HireDeparturePoint" type="text" id="ContentPlaceHolder2_HireDeparturePoint" class="form-control" placeholder="Enter Departure Point" />
                                                            <span id="ContentPlaceHolder2_RequiredFieldValidator33" style="color:White;visibility:hidden;">Required</span>

                                                        </div>


                                                    </div>
                                                    <div class="form-group col-md-1 col-sm-1 text-center swap-div">
                                                        <a href="javascript:void(0)" class="padTB5">
                                                            <i class="fa fa-arrows-h"></i>
                                                        </a>
                                                    </div>
                                                    <div class="form-group col-md-5 col-sm-5 col-xs-12">
                                                        <label>Hire Destination:</label>
                                                        <div class="select-menu">
                                                            <input name="ctl00$ContentPlaceHolder2$HireDestinationPoint" type="text" id="ContentPlaceHolder2_HireDestinationPoint" class="form-control" placeholder="Enter Destination" />
                                                            <span id="ContentPlaceHolder2_RequiredFieldValidator43" style="color:White;visibility:hidden;">Required</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="row">
                                                    <div class="form-group col-md-3 col-sm-3 col-xs-12 small-inputs">
                                                        <label>Departing On:</label>
                                                        <div class="">
                                                            <i class="fa fa-calendar range" aria-hidden="true"></i>
                                                            
                                                            <input name="ctl00$ContentPlaceHolder2$hireDepart" type="text" id="ContentPlaceHolder2_hireDepart" class="departic input-gigm form-control ui-autocomplete-input col-sm-10 col-xs-10 no-left-border form-control pad-left-date" data-language="en" placeholder="Select Date" style="color:#3C3939;height:40px;" />
                                                            <span id="ContentPlaceHolder2_RequiredFieldValidator53" style="color:White;visibility:hidden;">Required</span>

                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-3 col-sm-3 col-xs-12 small-inputs return-input">
                                                        <label>Return:</label>
                                                        <div class="">
                                                            <i class="fa fa-calendar range" aria-hidden="true"></i>
                                                            
                                                            <input name="ctl00$ContentPlaceHolder2$hirereturndate" type="text" id="ContentPlaceHolder2_hirereturndate" class="departic input-gigm form-control ui-autocomplete-input col-sm-10 col-xs-10 no-left-border form-control pad-left-date" data-language="en" placeholder="Select Return Date" style="color:#3C3939;height:40px;" />

                                                        </div>
                                                    </div>






                                                    <div class="form-check col-md-4 col-sm-4 check-group">
                                                        <div class="checkbox">
                                                            <label class="form-check-label check-text">
                                                                <input name="ctl00$ContentPlaceHolder2$sleepOvernight" type="checkbox" id="ContentPlaceHolder2_sleepOvernight" class="form-check-input" />
                                                                Retain bus for the night? <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                    




                                                    <div class="form-group col-md-2 col-sm-4">
                                                        <input type="button" name="ctl00$ContentPlaceHolder2$ContinueHire" value="Continue" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder2$ContinueHire&quot;, &quot;&quot;, true, &quot;hireValidate&quot;, &quot;&quot;, false, true))" id="ContentPlaceHolder2_ContinueHire" class="btn btn-gigm" />

                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <div role="tabpanel" class="tab-pane bookingStatus" id="rescheduleTicket" style="display: none">
                                                <div class="row">
                                                    <input type="hidden" name="ctl00$ContentPlaceHolder2$hidTAB" id="ContentPlaceHolder2_hidTAB" value="0" />
                                                    

                                                    <div id="ContentPlaceHolder2_ReschedulePanel">
		
                                                            <input type="hidden" name="ctl00$ContentPlaceHolder2$hdfreschedule" id="ContentPlaceHolder2_hdfreschedule" value="0" />
                                                            <div id="ContentPlaceHolder2_startresch" class="row col-md-12">
                                                                <div class="form-group col-md-4 col-sm-8">
                                                                    <label>Refcode</label>
                                                                    <input name="ctl00$ContentPlaceHolder2$Refcode" type="text" id="ContentPlaceHolder2_Refcode" class="form-control" placeholder="Enter Refcode" />
                                                                    &nbsp;
                                                            <span id="ContentPlaceHolder2_RequiredFieldValidator2" style="color:White;visibility:hidden;">Required</span>
                                                                </div>
                                                                <div class="col-md-4 range " style="padding-left: 0px;">
                                                                    <label>New Departure Date</label>
                                                                    <input name="ctl00$ContentPlaceHolder2$newDepart" type="text" id="ContentPlaceHolder2_newDepart" class="departic input-gigm form-control ui-autocomplete-input col-sm-10 col-xs-10 no-left-border form-control pad-left-date" data-language="en" placeholder="Select Date" style="color:#3C3939;height:40px;" />
                                                                    <br />
                                                                    <span id="ContentPlaceHolder2_RequiredFieldValidator6" style="color:White;display:none;">Required</span>
                                                                </div>
                                                                <div class="col-md-4">

                                                                    <input type="button" name="ctl00$ContentPlaceHolder2$getRefcodeDetails" value="Start Rescheduling" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder2$getRefcodeDetails&quot;, &quot;&quot;, true, &quot;reschedule&quot;, &quot;&quot;, false, true))" id="ContentPlaceHolder2_getRefcodeDetails" class="btn btn-gigm" />

                                                                </div>

                                                            </div>

                                                            

                                                            
                                                            </div>
                                                        
	</div>


                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        
</div>

    <div class="adverts-section">
        <div class="container">
            <div class="gig-ads">
                <a href="gigm-mobile-app.html">
                    <img src="../m.gigm.com/img/Pickupwebstrip.jpg" class="img-responsive" />
                </a>
            </div>
        </div>
    </div>
    <div class="contentView">
        <div class="container">
            <div class="small-cards-section">
                <div class="row minicard-row">
                    <div class="col-lg-3 col-md-3 minicard-col">
                        <div class="minicard">
                            <a class="card-content-link" href="Contact-Us.html"></a>
                            <div class="icon-component">
                                <img src="webassets/img/icons/customer-service.png" alt="GIGM.com customer care">
                            </div>
                            <div class="text-component">
                                <h3>Contact us</h3>
                            </div>
                            <div class="next-icon">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 minicard-col">
                        <div class="minicard">
                            <a class="card-content-link" href="Faq.html"></a>
                            <div class="icon-component">
                                <img src="webassets/img/icons/question.png" alt="GIGM.com ask us questions">
                            </div>
                            <div class="text-component">
                                <h3>Ask us Questions</h3>
                            </div>
                            <div class="next-icon">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 minicard-col">
                        <div class="minicard">
                            <a class="card-content-link" href="Terminals.html"></a>
                            <div class="icon-component">
                                <img src="webassets/img/icons/terminals.png" alt="GIGM.com terminals">
                            </div>
                            <div class="text-component">
                                <h3>Terminal info</h3>
                            </div>
                            <div class="next-icon">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 minicard-col">
                        <div class="minicard">
                            <a class="card-content-link" href="Pickup.html"></a>
                            <div class="icon-component">
                                <img src="webassets/img/icons/pickup-point.png" alt="GIGM.com pickup-points">
                            </div>
                            <div class="text-component">
                                <h3>Pick-up service</h3>
                            </div>
                            <div class="next-icon">
                                <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="facilities-section hidden-xs">
            <div class="container">
                <h2>Facilities &amp; Services of Our Buses</h2>
                
                <div class="facilities wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                    <table class="facilities-table hidden-xs">
                        <thead>
                            <tr>
                                <th></th>
                                <td>
                                    <i class="facilities-icon icon-ac"></i>
                                    <span class="column-title">AC</span>
                                </td>
                                <td>
                                    <i class="facilities-icon icon-legroom"></i>
                                    <span class="column-title">More Leg Room</span>
                                </td>
                                <td>
                                    <i class="facilities-icon icon-media"></i>
                                    <span class="column-title">Media</span>
                                </td>
                                <td>
                                    <i class="facilities-icon icon-power"></i>
                                    <span class="column-title">Power Outlet</span>
                                </td>
                                <td>
                                    <i class="facilities-icon icon-luggage"></i>
                                    <span class="column-title">Excess Luggage</span>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <a href="#">Mercedes Benz Sprinter</a>
                                </th>
                                <td class="yes">Yes
                                </td>
                                <td class="yes">Yes
                                </td>
                                <td class="yes">Yes
                                </td>
                                <td class="no">No
                                </td>
                                <td>No
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <a href="#">Toyota Hiace</a>
                                </th>
                                <td class="yes">Yes
                                </td>
                                <td class="no">No
                                </td>
                                <td class="yes">Yes
                                </td>
                                <td>No
                                </td>
                                <td>No
                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <a href="#">GIG Prime</a>
                                </th>
                                <td class="yes">Yes
                                </td>
                                <td class="yes">Yes
                                </td>
                                <td class="yes">Yes
                                </td>
                                <td>No
                                </td>
                                <td>No
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="disclaimer hidden-xs">
                        Further facilities and services may vary according to the company's operation. For more detailed information about providers, please refer to our comprehensive list of luggage restrictions.
                   
                    </p>
                </div>
            </div>
        </div>
        <div class="best-price-section">
            <div class="container">
                <div class="row best-trip-row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="best-title">
                            <h2>Best Trip Prices</h2>
                            <p>Bringing you more routes at the best prices.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="travel-cards wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.6s">
                            <div class="trip-img">
                                <img src="webassets/img/asaba.png" alt="GIGM.com lagos to asaba" />
                            </div>
                            <div class="best-trip-details">
                                <ul>
                                    <li>Lagos to Asaba
                                    </li>

                                </ul>
                                <button class="btn btn-gigm">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="travel-cards wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.7s">
                            <div class="trip-img">
                                <img src="webassets/img/enugu.png" alt="GIGM.com lagos to enugu" />
                            </div>
                            <div class="best-trip-details">
                                <ul>
                                    <li>Lagos to Enugu
                                    </li>

                                </ul>
                                <button class="btn btn-gigm">Book Now</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="travel-cards wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.8s">
                            <div class="trip-img">
                                <img src="webassets/img/ph.png" alt="GIGM.com lagos to PH" />
                            </div>
                            <div class="best-trip-details">
                                <ul>
                                    <li>Lagos to PH
                                    </li>

                                </ul>
                                <button class="btn btn-gigm">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-childfare">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="element-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                            <a href="gigm-mobile-app.html">
                                <img src="webassets/img/download-app-img.png" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="element-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                            <a href="#">
                                <img src="webassets/img/childfare-img.png" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lower-section">
        <div class="container">
            <div class="bus-routes">
                <h2 class="header">Popular Bus Routes</h2>
                <ul class="gigm-routes">
                    <li>ABIA-Aba to LAGOS-Iyana Ipaja</li>
                    <li>ANAMBRA-Awka to FCT ABUJA-Utako</li>
                    <li>ANAMBRA-Awka to LAGOS-Ajah</li>
                    <li>BAYELSA-Yenagoa to RIVERS-Port Harcourt</li>
                    <li>DELTA-Asaba to FCT ABUJA-Utako</li>
                    <li>ABIA-Aba to LAGOS-Iyana Ipaja</li>
                    <li>ANAMBRA-Awka to FCT ABUJA-Utako</li>
                    <li>ANAMBRA-Awka to LAGOS-Ajah</li>
                    <li>BAYELSA-Yenagoa to RIVERS-Port Harcourt</li>
                    <li>DELTA-Asaba to FCT ABUJA-Utako</li>
                    <li>ABIA-Aba to LAGOS-Iyana Ipaja</li>
                    <li>ANAMBRA-Awka to FCT ABUJA-Utako</li>
                    <li>ANAMBRA-Awka to LAGOS-Ajah</li>
                    <li>BAYELSA-Yenagoa to RIVERS-Port Harcourt</li>
                </ul>

                <button class="btn btn-more">Show more</button>
            </div>
        </div>
    </div>


                    <div class="lower-section no-pad-default">
                        <div class="container">
                            <div class="footer">
                                <div class="row useful-links">
                                    <div class="hidden-xs">
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                                            <ul class="link-lists">
                                                <h3>Services</h3>
                                                <li>
                                                    <a href="travels-tours-2.html" class="link-inline">Travels &amp; Tours</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="link-inline">Priority Services</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                                            <ul class="link-lists">
                                                <h3>Company</h3>
                                                <li>
                                                    <a href="About-Us.html" class="link-inline">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="Awards.html" class="link-inline">Awards</a>
                                                </li>
                                                <li>
                                                    <a href="Terminals.html" class="link-inline">Bus Terminals</a>
                                                </li>
                                                <li>
                                                    <a href="Faq.html" class="link-inline">FAQs</a>
                                                </li>
                                                <li>
                                                    <a href="How-To-Book-A-Bus.html" class="link-inline">How To Book a Bus</a>
                                                </li>
                                                
                                            </ul>
                                        </div>

                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
                                            <ul>
                                                <h3>Experience</h3>
                                                <li>
                                                    <a href="Learning-Academy.html" class="link-inline">Learning Academy</a>
                                                </li>
                                                <li>
                                                    <a href="Safety.html" class="link-inline">Safety</a>
                                                </li>


                                                <li>
                                                    <a href="Contact-Us.html" class="link-inline">Contact Us</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                            <ul>
                                                <h3>Terms</h3>
                                                <li>
                                                    <a href="Privacy-Policy.html" class="link-inline">Privacy Policy</a>
                                                </li>
                                                
                                                <li>
                                                    <a href="Terms-and-Conditions.html" class="link-inline">Terms &amp; Condition</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 social-media">
                                        <div class="social-icon">
                                            <h3>Connect with us</h3>
                                            <ul class="footer_social_ul clearfix">
                                                <li>
                                                    <a href="https://www.facebook.com/GIGMOTORS" target="_blank" class="">
                                                        <i class="fa fa-facebook" aria-hidden="true"></i>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/GIGmotors" target="_blank" class="">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/gigmotors/" target="_blank" class="">
                                                        <i class="fa fa-instagram" aria-hidden="true"></i>

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UC2JPxDgjBdCRlLd0ZEZGM1w" target="_blank" class="">
                                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>

                                                    </a>
                                                </li>
										
                                            </ul>
                                        </div>

                                        <div class="download-app">
                                            <h3>Download now</h3>

                                            <a href="https://play.google.com/store/apps/details?id=com.gigm" target="_blank" id="android-app-link" class="appicon app_and"></a>

                                            <a href="https://itunes.apple.com/ng/app/gigm/id1103940362?mt=8" target="_blank" id="ios-app-link" class="appicon app_ios"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <iframe src="keep.html" id="KeepAliveFrame" frameborder="0" width="0" height="0"></iframe>

                        <div class="copyright-section">
                            <p id="copyrightLine">2018 &#169; GIGM.com. All Rights Reserved.</p>
                        </div>
                    </div>


                </div>

                     <script src="../code.jquery.com/jquery-3.2.1.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="webassets/js/bootstrap.min.js"></script>
                <script src="webassets/js/main1ded.js?v=6789"></script>
                <script src="webassets/js/wow.min.js"></script>
                  <script src="js/legacy.js"></script>
                <script>
                    new WOW().init();
                </script>

                
    <script src="js/DateTime.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/date.js"></script>
    <script src="dist/select2/select2.full.min.js"></script>
    <link href="dist/css/sweetalert.css" rel="stylesheet" />
    <script src="dist/js/sweetalert.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="plugin/components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="plugin/components/bootstrap-datepicker/locales/bootstrap-datepicker.en-GB.min.js"></script>
    <script src="plugin/components/moment/moment.min.js"></script>
    <script src="plugin/components/TouchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Only if touchswipe is enabled -->
    <script src="plugin/datepicker-in-fullscreen.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBTES58-7C8xFtrY5l9qUesM5hpltUjKr4&amp;libraries=places"></script>

    <script type="text/javascript">
        var theStartDate = Date.now().addDays(1);
        var theEndDate = new Date.now().addWeeks(2);
        //Comment this out at the start of the month *************************************
        $('#ContentPlaceHolder2_txtdepart').val(new Date(theStartDate).format('MMMM dd, yyyy'));
        $('#ContentPlaceHolder2_hireDepart').val(new Date(theStartDate).format('MMMM dd, yyyy'));
        //********************************************************************************

        google.maps.event.addDomListener(window, 'load', function () {
            var options = {
                componentRestrictions: { country: "ng" }, 
                
            };
            var places = new google.maps.places.Autocomplete(document.getElementById('ContentPlaceHolder2_HireDeparturePoint'), options);
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                //alert(mesg);
            });
        });
        $('#ContentPlaceHolder2_HireDeparturePoint').on('focus', function () {
            selected = false;
        }).on('blur', function () {
            if (!selected) {
                $(this).val('');
            }
        });


        google.maps.event.addDomListener(window, 'load', function () {
            var options = {
                componentRestrictions: { country: "ng" }
            };
            var places = new google.maps.places.Autocomplete(document.getElementById('ContentPlaceHolder2_HireDestinationPoint'), options);
            google.maps.event.addListener(places, options, 'place_changed', function () {
                var place = places.getPlace();
                var address = place.formatted_address;
                var latitude = place.geometry.location.lat();
                var longitude = place.geometry.location.lng();
                var mesg = "Address: " + address;
                mesg += "\nLatitude: " + latitude;
                mesg += "\nLongitude: " + longitude;
                //alert(mesg);
            });
        });
    </script>
    <script type="text/javascript" language="javascript">
        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
        function EndRequestHandler(sender, args) {
            if (args.get_error() != undefined) {
                alert(args.get_error().message.substr(args.get_error().name.length + 2));
                args.set_errorHandled(true);
            }
        }
    </script>
    <script type="text/javascript">
        //On page postback Javascript
        Sys.WebForms.PageRequestManager.getInstance().add_pageL
        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
        function EndRequestHandler() {
            var theStartDate = Date.now().addDays(1);
            var terminalId = $("#ContentPlaceHolder2_ddlstate").val();
            //Comment this out at the start of the month *************************************
            $('#ContentPlaceHolder2_txtdepart').val(new Date(theStartDate).format('MMMM dd, yyyy'));
            $('#ContentPlaceHolder2_hireDepart').val(new Date(theStartDate).format('MMMM dd, yyyy'));
        //********************************************************************************
            //if (terminalId == '49') {
            //    theStartDate = new Date('December 20,2017');
            //}
            google.maps.event.addDomListener(window, 'load', function () {
                var options = {
                    componentRestrictions: { country: "ng" }
                };
                var places = new google.maps.places.Autocomplete(document.getElementById('ContentPlaceHolder2_HireDeparturePoint'), options);
                google.maps.event.addListener(places, 'place_changed', function () {
                    var place = places.getPlace();
                    var address = place.formatted_address;
                    var latitude = place.geometry.location.lat();
                    var longitude = place.geometry.location.lng();
                    var mesg = "Address: " + address;
                    mesg += "\nLatitude: " + latitude;
                    mesg += "\nLongitude: " + longitude;
                    //alert(mesg);
                });
            });

            google.maps.event.addDomListener(window, 'load', function () {
                var options = {
                    componentRestrictions: { country: "ng" }
                };
                var places = new google.maps.places.Autocomplete(document.getElementById('ContentPlaceHolder2_HireDestinationPoint'), options);
                google.maps.event.addListener(places, options, 'place_changed', function () {
                    var place = places.getPlace();
                    var address = place.formatted_address;
                    var latitude = place.geometry.location.lat();
                    var longitude = place.geometry.location.lng();
                    var mesg = "Address: " + address;
                    mesg += "\nLatitude: " + latitude;
                    mesg += "\nLongitude: " + longitude;
                    //alert(mesg);
                });
            });


            $('#ContentPlaceHolder2_getRefcodeDetails').click(function () {
                $('#ContentPlaceHolder2_hidTAB').val("1");
            });
            if ($('#ContentPlaceHolder2_hdftriptype').val() == 1) {
                $('#roundtrip').attr('checked', 'checked');
                $('#ContentPlaceHolder2_TwoWayDate').show();
            }
            else {
                $('#oneway').attr('checked', 'checked');
            }

            $('#oneway').click(function () {
                if ($('#oneway').is(':checked')) {
                    $('#ContentPlaceHolder2_TwoWayDate').hide();
                    $('#ContentPlaceHolder2_hdftriptype').val(0);
                }
            });
            $('#roundtrip').click(function () {
                if ($('#roundtrip').is(':checked')) {
                    $('#ContentPlaceHolder2_TwoWayDate').show();
                    $('#ContentPlaceHolder2_hdftriptype').val(1);
                }
            });
            $(document).ready(function () {
                var visibleDivs = $(".depart-point-input, .destination-input, .return-input, .check-group").hide();
                $("#hireroundtrip").click(function () {
                    //alert("checking");
                    $(visibleDivs).show();
                });

                $("#hireoneway").click(function () {
                    //alert("checking");
                    $(visibleDivs).hide();
                });

                $(".diacritics").select2();
                $(".diacritics").select2({ placeholder: "Departure Terminal", maximumSelectionSize: 6 });
                $('#ContentPlaceHolder2_ddlstate').change(function () {
                    $('#ContentPlaceHolder2_ddlto').empty();
                    $('#ContentPlaceHolder2_ddlto').append(new Option("Select Destination", ""));
                });

                $('#ContentPlaceHolder2_ddltickets').change(function () {
                    var adultnum1 = $('#ContentPlaceHolder2_ddltickets').val();
                    var children1 = $('#ContentPlaceHolder2_ddlchild').val();
                    var totalpax1 = parseInt(adultnum1) + parseInt(children1);
                    if (totalpax1 > 13) {
                        sweetAlert("You can't select more that 13 passengers");
                        $('#ContentPlaceHolder2_ddlchild').val("0", true, true);
                        return false;
                    }
                });
                function Func() {
                    sweetAlert("Enter a valid location")
                }
                $('#ContentPlaceHolder2_ddlchild').change(function () {
                    var adultnum1 = $('#ContentPlaceHolder2_ddltickets').val();
                    var children1 = $('#ContentPlaceHolder2_ddlchild').val();
                    var totalpax1 = parseInt(adultnum1) + parseInt(children1);
                    if (totalpax1 > 13) {
                        sweetAlert("You can't select more that 13 passengers");
                        $('#ContentPlaceHolder2_ddlchild').val("0", true, true);
                        return false;
                    }
                });
                $('#ContentPlaceHolder2_txtdepart').attr('readonly', 'true');
                $('#ContentPlaceHolder2_txtdepart').blur(function () {

                    $('#ContentPlaceHolder2_txtdepart').attr('readonly', 'true');
                });
                $('#ContentPlaceHolder2_txtdepart').click(function () {

                    $('#ContentPlaceHolder2_txtdepart').attr('readonly', 'true');
                });
                $('#ContentPlaceHolder2_txtdepart').datepickerInFullscreen({
                    beforeOpen: function (modal, settings) {
                        var till_date = moment($('#ContentPlaceHolder2_txtarrive').val(), 'MMMM DD,YYYY');
                        if (till_date.isValid()) {
                            settings.datepicker.endDate = till_date.toDate();
                        }
                    },
                    fakeInput: false,
                    todayWord: ' ',
                    touchSwipe: true,
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    datepicker: {
                        
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,
                    },
                });

                $('#ContentPlaceHolder2_txtarrive').datepickerInFullscreen({
                    beforeOpen: function (modal, settings) {
                        var from_date = moment($('#ContentPlaceHolder2_txtdepart').val(), 'MMMM DD,YYYY');
                        if (from_date.isValid()) {
                            settings.datepicker.startDate = from_date.toDate();
                        }
                    },
                    fakeInput: false,
                    todayWord: ' ',
                    
                    touchSwipe: true,
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    datepicker: {
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,

                    },
                });




                //return trip
                $('#ContentPlaceHolder2_txtarrive').attr('readonly', 'true');
                $('#ContentPlaceHolder2_txtarrive').blur(function () {
                    $('#ContentPlaceHolder2_txtarrive').attr('readonly', 'true');
                });
                $('#ContentPlaceHolder2_txtarrive').click(function () {

                    $('#ContentPlaceHolder2_txtarrive').attr('readonly', 'true');
                });


                //reschedule trip

                $('#ContentPlaceHolder2_newDepart').datepickerInFullscreen({
                    fakeInput: false,
                    todayWord: ' ',
                    touchSwipe: true,
                    
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    datepicker: {
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,
                    },
                });



                $('#ContentPlaceHolder2_newDepart').attr('readonly', 'true');
                $('#ContentPlaceHolder2_newDepart').blur(function () {
                    $('#ContentPlaceHolder2_newDepart').attr('readonly', 'true');
                });
                $('#ContentPlaceHolder2_newDepart').click(function () {

                    $('#ContentPlaceHolder2_newDepart').attr('readonly', 'true');
                });


                //hire datepicker
                $('#ContentPlaceHolder2_hireDepart').datepickerInFullscreen({
                    fakeInput: false,
                    todayWord: ' ',
                    touchSwipe: true,
                    
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    format: 'YYYY-MM-DD',
                    datepicker: {
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,
                        format: 'YYYY-MM-DD'
                    },
                });



                $('#ContentPlaceHolder2_hireDepart').attr('readonly', 'true');
                $('#ContentPlaceHolder2_hireDepart').blur(function () {
                    $('#ContentPlaceHolder2_hireDepart').attr('readonly', 'true');
                });
                $('#ContentPlaceHolder2_hireDepart').click(function () {

                    $('#ContentPlaceHolder2_hireDepart').attr('readonly', 'true');
                });


                //hire datepicker end

                //hire return datepicker
                $('#ContentPlaceHolder2_hirereturndate').datepickerInFullscreen({
                    beforeOpen: function (modal, settings) {
                        var from_date = moment($('#ContentPlaceHolder2_hireDepart').val(), 'YYYY-MM-DD');
                        if (from_date.isValid()) {
                            settings.datepicker.startDate = from_date.toDate();
                        }
                    },
                    fakeInput: false,
                    todayWord: ' ',
                    touchSwipe: true,
                    
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    format: 'YYYY-MM-DD',
                    datepicker: {
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,
                        format: 'YYYY-MM-DD'
                    },
                });



                $('#ContentPlaceHolder2_hirereturndate').attr('readonly', 'true');
                $('#ContentPlaceHolder2_hirereturndate').blur(function () {
                    $('#ContentPlaceHolder2_hirereturndate').attr('readonly', 'true');
                });
                $('#ContentPlaceHolder2_hirereturndate').click(function () {

                    $('#ContentPlaceHolder2_hirereturndate').attr('readonly', 'true');
                });


                //hire datepicker end



                var tab = document.getElementById('ContentPlaceHolder2_hidTAB').value;
                if (tab == 1) {
                    $('#bookBusWidget').removeClass("active");
                    $('#rescheduleTicket').addClass("active");
                    $('#bookingStatus').removeClass("active");
                    $('#hiretab').addClass("active");
                    $('#bookingtab').removeClass("active");
                    $('#statustab').removeClass("active");

                }
                else if (tab == 2) {
                    $('#bookBusWidget').removeClass("active");
                    $('#rescheduleTicket').removeClass("active");
                    $('#bookingStatus').removeClass("active");
                    $('#hiretab').addClass("active");
                    $('#hireBus').addClass("active");
                    $('#bookingtab').removeClass("active");
                    $('#statustab').removeClass("active");

                }
                else if (tab == 0) {
                    $('#bookBusWidget').addClass("active");
                    $('#hiretab').removeClass("active");
                    $('#rescheduleTicket').removeClass("active");
                }
            });

        }

        //End on page postback Javascript




        function Func() {
            sweetAlert("Enter a valid location")
        }

        $('#ContentPlaceHolder2_getRefcodeDetails').click(function () {
            $('#ContentPlaceHolder2_hidTAB').val("1");
        });

        var tab = document.getElementById('ContentPlaceHolder2_hidTAB').value;
        if (tab == 1) {
            $('#bookBusWidget').removeClass("active");
            $('#rescheduleTicket').addClass("active");
            $('#bookingStatus').removeClass("active");
            $('#hiretab').addClass("active");
            $('#bookingtab').removeClass("active");
            $('#statustab').removeClass("active");
        }
        else if (tab == 2) {
            $('#bookBusWidget').removeClass("active");
            $('#rescheduleTicket').removeClass("active");
            $('#bookingStatus').removeClass("active");
            $('#hiretab').addClass("active");
            $('#bookingtab').removeClass("active");
            $('#statustab').removeClass("active");

        }
        else if (tab == 0) {
            $('#bookBusWidget').addClass("active");
            $('#hiretab').removeClass("active");
            $('#rescheduleTicket').removeClass("active");
        }
        $('#ContentPlaceHolder2_txtdepart').attr('readonly', 'true');
        $('#ContentPlaceHolder2_txtdepart').blur(function () {

            $('#ContentPlaceHolder2_txtdepart').attr('readonly', 'true');
        });
        $('#ContentPlaceHolder2_txtdepart').click(function () {

            $('#ContentPlaceHolder2_txtdepart').attr('readonly', 'true');
        });

        //return trip
        $('#ContentPlaceHolder2_txtarrive').attr('readonly', 'true');
        $('#ContentPlaceHolder2_txtarrive').blur(function () {

            $('#ContentPlaceHolder2_txtarrive').attr('readonly', 'true');
        });
        $('#ContentPlaceHolder2_txtarrive').click(function () {

            $('#ContentPlaceHolder2_txtarrive').attr('readonly', 'true');
        });


        //reschedule trip
        $('#ContentPlaceHolder2_newDepart').attr('readonly', 'true');
        $('#ContentPlaceHolder2_newDepart').blur(function () {

            $('#ContentPlaceHolder2_newDepart').attr('readonly', 'true');
        });
        $('#ContentPlaceHolder2_newDepart').click(function () {

            $('#ContentPlaceHolder2_newDepart').attr('readonly', 'true');
        });

        $('#ContentPlaceHolder2_newDepart').datepickerInFullscreen({
            fakeInput: false,
            todayWord: ' ',
            touchSwipe: true,
            
            effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
            datepicker: {
                calendarWeeks: false,
                startDate: theStartDate,
                endDate: theEndDate,
            },
        });


        //hire trip
        $('#ContentPlaceHolder2_hireDepart').attr('readonly', 'true');
        $('#ContentPlaceHolder2_hireDepart').blur(function () {

            $('#ContentPlaceHolder2_hireDepart').attr('readonly', 'true');
        });
        $('#ContentPlaceHolder2_hireDepart').click(function () {

            $('#ContentPlaceHolder2_hireDepart').attr('readonly', 'true');
        });

        $('#ContentPlaceHolder2_hireDepart').datepickerInFullscreen({
            fakeInput: false,
            todayWord: ' ',
            touchSwipe: true,
            
            effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
            format: 'YYYY-MM-DD',
            datepicker: {
                calendarWeeks: false,
                startDate: theStartDate,
                endDate: theEndDate,

            },
        });
        //end date picker

        //hire return date
        $('#ContentPlaceHolder2_hirereturndate').attr('readonly', 'true');
        $('#ContentPlaceHolder2_hirereturndate').blur(function () {
            $('#ContentPlaceHolder2_hirereturndate').attr('readonly', 'true');
        });
        $('#ContentPlaceHolder2_hirereturndate').click(function () {

            $('#ContentPlaceHolder2_hirereturndate').attr('readonly', 'true');
        });


        $('#ContentPlaceHolder2_hirereturndate').datepickerInFullscreen({
            beforeOpen: function (modal, settings) {
                var from_date = moment($('#ContentPlaceHolder2_hireDepart').val(), 'YYYY-MM-DD');
                if (from_date.isValid()) {
                    settings.datepicker.startDate = from_date.toDate();
                }
            },
            fakeInput: false,
            todayWord: ' ',
            touchSwipe: true,
            
            effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
            format: 'YYYY-MM-DD',
            datepicker: {
                calendarWeeks: false,
                startDate: theStartDate,
                //endDate: Date.now().addWeeks(2),
                format: 'YYYY-MM-DD'
            },
        });




        function countpax() {
            sweetAlert("You can't select more that 13 passengers");
            return false;
        }

        new WOW().init();
        jQuery(document).ready(function ($) {
            //open popup
            $('.cd-popup-trigger').on('click', function (event) {
                event.preventDefault();
                $('.cd-popup').addClass('is-visible');
            });

            //close popup
            $('.cd-popup').on('click', function (event) {
                if ($(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup')) {
                    event.preventDefault();
                    $(this).removeClass('is-visible');
                }
            });
            //close popup when clicking the esc keyboard button
            $(document).keyup(function (event) {
                if (event.which == '27') {
                    $('.cd-popup').removeClass('is-visible');
                }
            });
        });

        $(document).ready(function () {
            if ($('#ContentPlaceHolder2_hdftriptype').val() == 0) {
                    $('#ContentPlaceHolder2_TwoWayDate').hide();
                }
                $('#oneway').click(function () {
                    if ($('#oneway').is(':checked')) {
                        $('#ContentPlaceHolder2_TwoWayDate').hide();
                        $('#ContentPlaceHolder2_hdftriptype').val(0);
                    }
                });
                $('#roundtrip').click(function () {
                    if ($('#roundtrip').is(':checked')) {
                        $('#ContentPlaceHolder2_TwoWayDate').show();
                        $('#ContentPlaceHolder2_hdftriptype').val(1);
                    }
                });
                // $('#ContentPlaceHolder2_TwoWayDate').hide();

                var id = '#ContentPlaceHolder2_dialogpop';
                if ($('#ContentPlaceHolder2_actstatus').val() == 0) {
                    //Get the screen height and width
                    var maskHeight = $(document).height();
                    var maskWidth = $(window).width();

                    //Set heigth and width to mask to fill up the whole screen
                    $('.mask').css({ 'width': maskWidth, 'height': maskHeight });

                    //transition effect
                    $('.mask').fadeIn(500);
                    $('.mask').fadeTo("slow", 0.9);


                    //Get the window height and width
                    var winH = $(window).height();
                    var winW = $(window).width();

                    //Set the popup window to center
                    //$(id).css('top', winH / 2 - $(id).height() / 2);
                    $(id).css('left', winW / 2 - $(id).width() / 2);

                    //transition effect
                    $(id).fadeIn(2000).delay(15000).fadeOut(function () { $('.window').hide(); $('.mask').hide(); });

                    //if close button is clicked
                    $('.window .close').click(function (e) {
                        //Cancel the link behavior
                        e.preventDefault();

                        $('.mask').hide();
                        $('.window').hide();
                        $(id).fadeOut(function () { $('.window').hide(); $('.mask').hide(); });
                    });
                    $('.close').click(function (e) {
                        $("#ContentPlaceHolder2_dialogpop").hide();
                        $('.mask').hide();
                        $('.window').hide();
                    });

                    //if mask is clicked
                    $('.mask').click(function () {
                        $(this).hide();
                        $('.window').hide();
                        $(id).fadeOut(function () { $('.window').hide(); $('.mask').hide(); });
                    });
                }
                else {
                    $('#ContentPlaceHolder2_actstatus').hide();
                }
                $(".diacritics").select2();
                $(".diacritics").select2({ placeholder: "Departure Terminal", maximumSelectionSize: 6 });
                $('#ContentPlaceHolder2_ddltickets').change(function () {
                    var adultnum1 = $('#ContentPlaceHolder2_ddltickets').val();
                    var children1 = $('#ContentPlaceHolder2_ddlchild').val();
                                var totalpax1 = parseInt(adultnum1) + parseInt(children1);
                                if (totalpax1 > 13) {
                                    sweetAlert("You can't select more that 13 passengers");
                                    $('#ContentPlaceHolder2_ddlchild').val("0", true, true);
                                    return false;
                                }
                });

                $('#ContentPlaceHolder2_ddlchild').change(function () {
                    var adultnum1 = $('#ContentPlaceHolder2_ddltickets').val();
                    var children1 = $('#ContentPlaceHolder2_ddlchild').val();
                    var totalpax1 = parseInt(adultnum1) + parseInt(children1);
                    if (totalpax1 > 13) {
                        sweetAlert("You can't select more that 13 passengers");
                        $('#ContentPlaceHolder2_ddlchild').val("0", true, true);
                                    return false;
                                }
                });

                $('#ContentPlaceHolder2_txtdepart').datepickerInFullscreen({
                    beforeOpen: function (modal, settings) {
                        var till_date = moment($('#ContentPlaceHolder2_txtarrive').val(), 'MMMM DD,YYYY');
                        if (till_date.isValid()) {
                            settings.datepicker.endDate = till_date.toDate();
                        }
                    },
                    fakeInput: false,
                    
                    todayWord: ' ',
                    touchSwipe: true,
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    datepicker: {
                        maxViewMode: 0,
                        startView: 0,
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,
                    },

                });

                $('#ContentPlaceHolder2_txtarrive').datepickerInFullscreen({
                    beforeOpen: function (modal, settings) {
                        var from_date = moment($('#ContentPlaceHolder2_txtdepart').val(), 'MMMM DD,YYYY');
                        if (from_date.isValid()) {
                            settings.datepicker.startDate = from_date.toDate();
                        }
                    },
                    fakeInput: false,
                    
                    todayWord: ' ',
                    touchSwipe: true,
                    effect: '1', // 1 or 2 or 3 or 5 or 6 up to 16
                    datepicker: {
                        calendarWeeks: false,
                        startDate: theStartDate,
                        endDate: theEndDate,

                    },
                });
                $('.slider1').bxSlider({
                    slideWidth: 500,
                    minSlides: 4,
                    maxSlides: 4,
                    slideMargin: 10
                });
            });


            var visibleDivs = $(".depart-point-input, .destination-input, .return-input, .check-group").hide();
            //    var checking = $("label.form-check-label");
            //checking.on("click", visibleDivs);

            $("#hireroundtrip").click(function () {
                //alert("checking");
                $(visibleDivs).show();
            });

            $("#hireoneway").click(function () {
                //alert("checking");
                $(visibleDivs).hide();
            });

            //function stayHirePage() {
            //    var ContinueHire = document.getElementById('ContentPlaceHolder2_ContinueHire');
            //    ContinueHire.onclick = (function (e) {
            //        alert("checking");
            //        e.preventDefault();
            //    });
            //};

            google.maps.event.addDomListener(window, 'load', function () {
                var options = {
                    componentRestrictions: { country: "ng" }
                };
                var places = new google.maps.places.Autocomplete(document.getElementById('ContentPlaceHolder2_HireDeparturePoint'), options);
                google.maps.event.addListener(places, 'place_changed', function () {
                    var place = places.getPlace();
                    var address = place.formatted_address;
                    var latitude = place.geometry.location.lat();
                    var longitude = place.geometry.location.lng();
                    var mesg = "Address: " + address;
                    mesg += "\nLatitude: " + latitude;
                    mesg += "\nLongitude: " + longitude;
                    //alert(mesg);
                });
            });

            google.maps.event.addDomListener(window, 'load', function () {
                var options = {
                    componentRestrictions: { country: "ng" }
                };
                var places = new google.maps.places.Autocomplete(document.getElementById('ContentPlaceHolder2_HireDestinationPoint'), options);
                google.maps.event.addListener(places, options, 'place_changed', function () {
                    var place = places.getPlace();
                    var address = place.formatted_address;
                    var latitude = place.geometry.location.lat();
                    var longitude = place.geometry.location.lng();
                    var mesg = "Address: " + address;
                    mesg += "\nLatitude: " + latitude;
                    mesg += "\nLongitude: " + longitude;
                    //alert(mesg);
                });
            });

    </script>



    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("RequiredFieldValidator2"), document.getElementById("RequiredFieldValidator3"), document.getElementById("reacti"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator8"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator9"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator11"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator1"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator12"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator33"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator43"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator53"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator2"), document.getElementById("ContentPlaceHolder2_RequiredFieldValidator6"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var RequiredFieldValidator2 = document.all ? document.all["RequiredFieldValidator2"] : document.getElementById("RequiredFieldValidator2");
RequiredFieldValidator2.controltovalidate = "txtEmailPhone";
RequiredFieldValidator2.errormessage = "*";
RequiredFieldValidator2.validationGroup = "loginvalmaster";
RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator2.initialvalue = "";
var RequiredFieldValidator3 = document.all ? document.all["RequiredFieldValidator3"] : document.getElementById("RequiredFieldValidator3");
RequiredFieldValidator3.controltovalidate = "txtPassword";
RequiredFieldValidator3.errormessage = "*";
RequiredFieldValidator3.validationGroup = "loginvalmaster";
RequiredFieldValidator3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
RequiredFieldValidator3.initialvalue = "";
var reacti = document.all ? document.all["reacti"] : document.getElementById("reacti");
reacti.controltovalidate = "txtActivationLink";
reacti.focusOnError = "t";
reacti.errormessage = "*";
reacti.validationGroup = "activation";
reacti.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
reacti.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator8 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator8"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator8");
ContentPlaceHolder2_RequiredFieldValidator8.controltovalidate = "ContentPlaceHolder2_ddlstate";
ContentPlaceHolder2_RequiredFieldValidator8.focusOnError = "t";
ContentPlaceHolder2_RequiredFieldValidator8.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator8.display = "Dynamic";
ContentPlaceHolder2_RequiredFieldValidator8.validationGroup = "bus";
ContentPlaceHolder2_RequiredFieldValidator8.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator8.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator9 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator9"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator9");
ContentPlaceHolder2_RequiredFieldValidator9.controltovalidate = "ContentPlaceHolder2_ddlto";
ContentPlaceHolder2_RequiredFieldValidator9.focusOnError = "t";
ContentPlaceHolder2_RequiredFieldValidator9.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator9.display = "Dynamic";
ContentPlaceHolder2_RequiredFieldValidator9.validationGroup = "bus";
ContentPlaceHolder2_RequiredFieldValidator9.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator9.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator11 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator11"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator11");
ContentPlaceHolder2_RequiredFieldValidator11.controltovalidate = "ContentPlaceHolder2_txtdepart";
ContentPlaceHolder2_RequiredFieldValidator11.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator11.display = "Dynamic";
ContentPlaceHolder2_RequiredFieldValidator11.validationGroup = "bus";
ContentPlaceHolder2_RequiredFieldValidator11.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator11.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator1 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator1"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator1");
ContentPlaceHolder2_RequiredFieldValidator1.controltovalidate = "ContentPlaceHolder2_txtarrive";
ContentPlaceHolder2_RequiredFieldValidator1.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator1.display = "Dynamic";
ContentPlaceHolder2_RequiredFieldValidator1.enabled = "False";
ContentPlaceHolder2_RequiredFieldValidator1.validationGroup = "bus";
ContentPlaceHolder2_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator1.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator12 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator12"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator12");
ContentPlaceHolder2_RequiredFieldValidator12.controltovalidate = "ContentPlaceHolder2_txtbooking";
ContentPlaceHolder2_RequiredFieldValidator12.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator12.validationGroup = "bStatus";
ContentPlaceHolder2_RequiredFieldValidator12.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator12.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator33 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator33"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator33");
ContentPlaceHolder2_RequiredFieldValidator33.controltovalidate = "ContentPlaceHolder2_HireDeparturePoint";
ContentPlaceHolder2_RequiredFieldValidator33.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator33.validationGroup = "hireValidate";
ContentPlaceHolder2_RequiredFieldValidator33.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator33.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator43 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator43"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator43");
ContentPlaceHolder2_RequiredFieldValidator43.controltovalidate = "ContentPlaceHolder2_HireDestinationPoint";
ContentPlaceHolder2_RequiredFieldValidator43.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator43.validationGroup = "hireValidate";
ContentPlaceHolder2_RequiredFieldValidator43.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator43.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator53 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator53"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator53");
ContentPlaceHolder2_RequiredFieldValidator53.controltovalidate = "ContentPlaceHolder2_hireDepart";
ContentPlaceHolder2_RequiredFieldValidator53.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator53.validationGroup = "hireValidate";
ContentPlaceHolder2_RequiredFieldValidator53.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator53.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator2 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator2"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator2");
ContentPlaceHolder2_RequiredFieldValidator2.controltovalidate = "ContentPlaceHolder2_Refcode";
ContentPlaceHolder2_RequiredFieldValidator2.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator2.validationGroup = "reschedule";
ContentPlaceHolder2_RequiredFieldValidator2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator2.initialvalue = "";
var ContentPlaceHolder2_RequiredFieldValidator6 = document.all ? document.all["ContentPlaceHolder2_RequiredFieldValidator6"] : document.getElementById("ContentPlaceHolder2_RequiredFieldValidator6");
ContentPlaceHolder2_RequiredFieldValidator6.controltovalidate = "ContentPlaceHolder2_newDepart";
ContentPlaceHolder2_RequiredFieldValidator6.errormessage = "Required";
ContentPlaceHolder2_RequiredFieldValidator6.display = "Dynamic";
ContentPlaceHolder2_RequiredFieldValidator6.validationGroup = "reschedule";
ContentPlaceHolder2_RequiredFieldValidator6.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ContentPlaceHolder2_RequiredFieldValidator6.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        
document.getElementById('RequiredFieldValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator2'));
}

document.getElementById('RequiredFieldValidator3').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('RequiredFieldValidator3'));
}

document.getElementById('reacti').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('reacti'));
}
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"ContentPlaceHolder2_UpdatePanel1","displayAfter":500,"dynamicLayout":true}, null, null, $get("ContentPlaceHolder2_updateProgress1"));
});

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator8').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator8'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator9').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator9'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator11').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator11'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator1').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator1'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator12').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator12'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator33').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator33'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator43').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator43'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator53').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator53'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator2').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator2'));
}

document.getElementById('ContentPlaceHolder2_RequiredFieldValidator6').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('ContentPlaceHolder2_RequiredFieldValidator6'));
}
//]]>
</script>
</form>
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 968596049;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt">
    </script>
    <noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/968596049/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    '../connect.facebook.net/en_US/fbevents.js');
     fbq('init', '296259517537862'); 
    fbq('track', 'PageView');

         fbq('track', 'ViewContent');

    </script>
    <noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=296259517537862&amp;ev=PageView%20%20%20%20&amp;noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->



    <script type="text/javascript">
        function removephone() {
            stor.remove("userd");
        }
        $("#lmodal").click(function () {
            $('#myLogin').slideDown("slow");
        });
        $(document).ready(function () {
            var modalw = document.getElementById('myLogin');
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks on <span> (x), close the modal
            $('.close').on('click', function () {
                $('#myLogin').slideUp("slow");
            });

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modalw) {
                    $('#myLogin').slideUp("slow");
                }
            }
            //returnToLogin
            $("#forgotPassword").click(function () {
                $("#mainForm").hide();
                $("#activationDiv").show();
                $('.login-help').hide();
                $(".sign-benefits-message").hide();

            });

            $("#returnToLogin").click(function () {
                $("#mainForm").show();
                $("#activationDiv").hide();
                $(".sign-benefits-message").show();
                $('.login-help').show();
            });
        });

        Sys.WebForms.PageRequestManager.getInstance().add_pageL
        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
        function EndRequestHandler() {
            var modalw = document.getElementById('myLogin');
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
            // When the user clicks on <span> (x), close the modal
            $('.close').on('click', function () {
                $('#myLogin').slideUp("slow");
            });

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modalw) {
                    // modalw.style.display = "none";
                    $('#myLogin').slideUp("slow");
                }
            }
            $("#lmodal").click(function () {
                $('#myLogin').slideDown("slow");

            });

            //returnToLogin
            $("#forgotPassword").click(function () {
                $("#mainForm").hide();
                $("#activationDiv").show();
                $('.login-help').hide();
                $(".sign-benefits-message").hide();

            });

            $("#returnToLogin").click(function () {
                $("#mainForm").show();
                $("#activationDiv").hide();
                $(".sign-benefits-message").show();
                $('.login-help').show();
            });
        }
    </script>
    <noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1099666696749575&amp;ev=PageView&amp;noscript=1"
/></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
    
    <script type="text/javascript">
    adroll_adv_id = "Q67Y63H465GILJEEE7FOSO";
    adroll_pix_id = "A7KVZDOYCBAPDHLD2O3XCG";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = "username@example.com"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>
    
   
</body>

<!-- Mirrored from gigm.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Sep 2018 15:32:50 GMT -->
</html>
