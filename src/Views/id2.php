
<?php 
 // Connect to database and call 
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Shri Banke Bihari Mandir, Vrindavan</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Shri Bankey Bihari Mandir, Vrindavan and Swami Shri Haridas' beloved Thakur Shri Banke Bihariji Maharaj's website." />

    <meta name="keywords" content="Shri Banke Bihari Maharaj, Shri Bankey Bihariji Maharaj, Swami Shri Haridas, Vrindavan" />

    <meta name="author" content="Shri Banke Bihariji Temple Vrindavan" />
    <meta http-equiv="refresh" content="360" />
    <meta http-equiv="Permissions-Policy" content="ch-ua-form-factor" />
    <meta name="google" content="notranslate" />
    <!--Google crawling verification-->
    <meta name="google-site-verification" content="wvsyxzkHwWZxDWi24cvfMSMhnIEMwkgfVQDZseZDM10" />
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/Favicons/favicon.ico" />

    <!-- Google fonts-->
    <link href="../css/css.css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="css/css.css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <!-- Icons 
    <link rel="stylesheet" href="restricted/assets/vendor/nucleo/css/nucleo.css" type="text/css" />
    <link rel="stylesheet" href="restricted/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css" />-->


    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!------------------Dialoge Box-------->
    <!-- jsDeliver -->



    <style>
        .btn-custom {
            color: white;
            background: #EE6F2D 0% 0% no-repeat padding-box;
            box-shadow: 0px 3px 6px #00000029;
        }

            .btn-custom:hover, .btn-custom:focus, .btn-custom:active, .btn-custom.active, .open > .dropdown-toggle.btn-custom {
                color: white;
                /*border-color: #285e8e;*/
                background: #f06218 0% 0% no-repeat padding-box;
                box-shadow: 0px 1px 2px #fff;
            }

        .svgoutline {
            color: white;
        }

        .btn:hover .svgoutline {
            filter: invert(1);
        }
        /**************************************************/
        .shfooter .collapse {
            display: inherit;
        }

        @media (max-width:767px) {
            .shfooter ul {
                margin-bottom: 0;
            }

            .shfooter .collapse {
                display: none;
            }

                .shfooter .collapse.show {
                    display: block;
                }

            .shfooter .title .fa-minus,
            .shfooter .title[aria-expanded=true] .fa-plus {
                display: none;
            }

            .shfooter .title[aria-expanded=true] .fa-minus {
                display: block;
            }

            .shfooter .navbar-toggler {
                display: inline-block;
                padding: 0;
                vertical-align: middle;
                margin-right: 10px;
            }
        }

        .resize {
            text-align: center;
        }

        /**.resize {
            margin-top: 3rem;
           font-size: 1.25rem;
        }**/
        /*RESIZESCREEN ANIMATION*/
        .fa-angle-double-right {
            animation: rightanime 1s linear infinite;
        }

        .fa-angle-double-left {
            animation: leftanime 1s linear infinite;
        }

        @keyframes rightanime {
            50% {
                transform: translateX(10px);
                opacity: 0.5;
            }

            100% {
                transform: translateX(10px);
                opacity: 0;
            }
        }

        @keyframes leftanime {
            50% {
                transform: translateX(-10px);
                opacity: 0.5;
            }

            100% {
                transform: translateX(-10px);
                opacity: 0;
            }
        }


        .ul_footer {
            list-style-type: none;
            margin-left: -30px;
            text-align: left;
            padding-right: 10px;
            background-color: #F18306;
            padding-top: 2px;
            padding-bottom: 10px;
            margin-left: 0px;
            padding-left: 0px;
            box-shadow: 0px 6px 15px #00000088;
            margin-top: -5px;
        }

            .ul_footer li {
                margin-left: 10px;
                padding: 10px;
                border-bottom: 1px solid #FFFFFF;
            }

        .modalBackground {
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        /* Mobile */
        .container_0 {
            margin-top: 2%;
            position: relative;
            color: black;
            padding: 0px;
        }

        .container_1 {
            padding: 0px;
            margin-top: -0.5%;
        }

        .container_f {
            padding: 0px;
            margin-top: 0px;
        }

        .festCls {
            text-align: center;
        }

        .festClsbg {
            background-image: url('assets/img/page-background-caligraphy.svg');
        }

        .kathacls {
            background-image: url('assets/img/page-background-caligraphy.svg');
            padding: 2px;
        }

        .darshan1 {
            background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
            /*background-image: url('assets/img/page-background-caligraphy.svg');*/
            padding: 2px;
        }

        .abtTemple1 {
            background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
            box-shadow: 0px 6px 15px #00000088;
        }

        .kathacls1 {
            padding-left: 2px;
            padding-right: 2px;
        }

        .kathacls2 {
            width: 100%;
        }

        .subscribecls1 {
            border-radius: 0px;
        }

        .subscribecls2 {
            min-height: 175px;
            padding: 3%;
        }

        .contactus1 {
            min-height: 125px;
            padding: 3%;
        }

        #divDarshan {
            display: none;
        }

        .darshancol2 {
            padding-right: 12px;
            padding-left: 12px;
        }

        .abtTemple2 {
            width: 100%;
            margin-top: -70px;
        }


        .imgcara {
            opacity: .45;
            border-radius: 0px;
            min-height: 280px;
        }

        .itemCara {
            /*border-radius: 0px; background-color: rgba(0, 0, 0, 0.8); box-shadow: 0px 6px 15px #00000088;*/
            background: #000000 0% 0% no-repeat padding-box;
        }

        .captionText {
            /*padding-top:10%;
            text-align: center;
            font: normal normal 900 34px/44px Roboto!important;
            letter-spacing: 0px!important;
            color: #FFFFFF!important;
            text-shadow: 0px 3px 6px #00000029!important;
            opacity: 1!important;*/
        }

        .embossed {
            background-color: #666666;
            text-align: center;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            padding-top: 100px;
            /*  font: normal normal medium 16px/23px Roboto!important;*/
            font: normal normal 900 30px/39px Roboto;
            letter-spacing: 0.32px;
            color: #FFFFFF;
            /*text-shadow: 0px 1px 4px #770404!important;*/
            text-shadow: 0px 3px 6px #00000029 !important;
            opacity: 1;
        }

        .embossed_top {
            background-color: #666666;
            text-align: center;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            margin-left: 2%;
            margin-right: 2%;
            font: normal normal medium 16px/23px Roboto;
            letter-spacing: 0.64px;
            color: #FFFFFF;
            text-shadow: 0px 1px 4px #770404;
            opacity: 1;
        }

        #hoverlay {
            display: none;
        }

        #hoverlayMobile {
            display: block;
        }

        .para_lowertext {
            text-align: center;
            font: Roboto;
            font-style: normal;
            font-size: 10pt;
            color: #FFFFFF;
            opacity: 1;
            line-height: normal;
            padding-top: 10px;
        }

        #divPhotoGallery {
            display: none;
        }

        #divPhotoGalleryMobile {
            display: block;
            padding: 3%;
        }
        /******************************************************************************/
        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {
            .ul_footer {
                list-style-type: none;
                margin-left: -30px;
                text-align: left;
                padding-right: 10px;
                padding-top: 2px;
                padding-bottom: 10px;
                margin-left: 0px;
                padding-left: 0px;
                box-shadow: 0px 6px 15px #00000088;
                margin-top: -2px;
            }

                .ul_footer li {
                    margin-left: 10px;
                    padding: 10px;
                    border-bottom: 1px solid #FFFFFF;
                }

            #divPhotoGallery {
                display: none;
            }

            #divPhotoGalleryMobile {
                display: block;
            }

            .para_lowertext {
                text-align: center;
                font: Roboto;
                font-style: normal;
                font-size: 10pt;
                color: #FFFFFF;
                opacity: 1;
                line-height: normal;
            }

            #hoverlay {
                display: none;
            }

            #hoverlayMobile {
                display: block;
            }

            .embossed_top {
                background-color: #666666;
                text-align: center;
                -webkit-background-clip: text;
                -moz-background-clip: text;
                margin-left: 2%;
                margin-right: 2%;
                font: normal normal medium 16px/23px Roboto;
                letter-spacing: 0.64px;
                color: #FFFFFF;
                text-shadow: 0px 1px 4px #770404;
                opacity: 1;
            }

            .darshan1 {
                background-image: url('assets/img/page-background-caligraphy.svg');
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                padding: 2px;
            }

            .darshancol2 {
                padding-right: 2px;
            }

            .festCls {
                text-align: center;
            }

            .festClsbg {
                background-image: url('assets/img/page-background-caligraphy.svg');
            }

            .kathacls {
                background-image: url('assets/img/page-background-caligraphy.svg');
                padding: 2px;
            }

            .kathacls1 {
                padding-left: 2px;
                padding-right: 2px;
            }

            .kathacls2 {
                width: 100%;
            }

            .subscribecls1 {
                border-radius: 0px;
            }

            .subscribecls2 {
                min-height: 175px;
                padding: 3%;
            }

            .contactus1 {
                min-height: 125px;
                padding: 3%;
            }

            .container_0 {
                margin-top: -182px;
                position: relative;
                color: black;
            }

            .container_1 {
                padding-left: 120px !Important;
                padding-right: 120px !Important;
                padding-top: 0px;
            }

            .container_f {
                padding-left: 120px !Important;
                padding-right: 120px !Important;
                padding-top: 0px;
                margin-top: 0px;
            }

            .nav-pills-background {
                background: transparent linear-gradient(0deg, #1A2300 0%, #565D04 100%) 0% 0% no-repeat padding-box;
                height: 55px;
                padding-top: 10px;
                /*  border-radius: 25px 25px 0px 0px;**/
                opacity: 1;
            }

            #divDarshan {
                display: none;
            }
            /* hide it elsewhere */
            #headingRowMobile {
                display: block;
            }

            .abtTemple1 {
                background-image: url('assets/img/page-background-caligraphy.svg');
                padding: 2px;
            }

            .abtTemple2 {
                width: 100%;
                margin-top: -10px;
            }
        }
        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .ul_footer {
                list-style-type: none;
                margin-left: -30px;
                text-align: left;
                padding-right: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
                margin-left: 0px;
                padding-left: 0px;
                box-shadow: 0px 6px 15px #00000088;
            }

                .ul_footer li {
                    margin-left: 10px;
                    padding: 10px;
                    border-bottom: 1px solid #FFFFFF;
                }

            #divPhotoGallery {
                display: block;
                padding: 50px;
            }

            #divPhotoGalleryMobile {
                display: none;
            }

            .para_lowertext {
                text-align: center;
                font: Roboto;
                font-style: normal;
                font-size: 12pt;
                color: #FFFFFF;
                opacity: 1;
                line-height: normal;
            }

            #hoverlay {
                display: block;
            }

            #hoverlayMobile {
                display: none;
            }

            .captionText {
                font: normal normal 900 30px/39px Roboto;
                letter-spacing: 0px;
            }

            .embossed_top {
                color: #f0f0f0;
                /**font-size: 100px;
  font-family: Futura;*/
                margin-left: 1%;
                margin-right: 1%;
                background-color: #666666;
                text-shadow: 5px 4px 4px #555;
                text-align: center;
                -webkit-background-clip: text;
                -moz-background-clip: text;
            }

            .itemCara {
                border-radius: 20px;
                box-shadow: 0px 6px 15px #00000088;
            }

            .imgcara {
                opacity: .45;
                border-radius: 20px;
                height: 450px;
            }

            .abtTemple1 {
                background-image: url('assets/img/page-background-caligraphy.svg');
                padding: 2px;
            }

            .abtTemple2 {
                width: 85%;
                margin-top: -280px;
            }

            .darshan1 {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                padding: 20px;
            }

            .darshancol2 {
                padding-right: 40px;
            }

            .subscribecls1 {
                border-radius: 20px;
            }

            .subscribecls2 {
                min-height: 124px;
                padding: 1%;
            }

            .contactus1 {
                min-height: 120px;
                padding: 1%;
            }

            .festCls {
                text-align: left;
            }

            .festClsbg {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
            }

            .kathacls {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                box-shadow: 0px 6px 15px #00000088;
                border-radius: 20px;
                padding: 30px;
            }

            .kathacls1 {
                padding-left: 50px;
                padding-right: 50px;
            }

            .kathacls2 {
                width: 60%;
            }

            .spanHeading {
                display: none;
            }

            #headingRowAll {
                display: none;
            }

            #headingRowMobile {
                display: block;
            }

            #headingRowMobile1 {
                display: block;
            }

            .nav-pills-background {
                background: transparent linear-gradient(0deg, #1A2300 0%, #565D04 100%) 0% 0% no-repeat padding-box !important;
                height: 55px !important;
                padding-top: 10px !important;
                opacity: 1 !important;
                border-radius: 0px !important;
            }

            .container_0 {
                margin-top: -22%;
                padding-top: 25%;
            }

            .container_1 {
                padding-left: 0px;
                padding-right: 0px;
            }

            .container_f {
                padding: 10px !important;
                margin-top: 10px;
            }

            #divDarshan {
                display: block;
            }
        }
        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .ul_footer {
                list-style-type: none;
                margin-left: -30px;
                text-align: left;
                padding-right: 10px;
                background-color: transparent;
                margin-top: -4% !important;
                box-shadow: none;
            }

                .ul_footer li {
                    margin-left: 10px;
                    border: none;
                    background-color: none;
                    padding: 2px;
                }

            #divPhotoGallery {
                display: block;
                padding: 50px;
            }

            #divPhotoGalleryMobile {
                display: none;
            }

            .para_lowertext {
                text-align: center;
                font: Roboto;
                font-style: normal;
                font-size: 12pt;
                color: #FFFFFF;
                opacity: 1;
                line-height: normal;
            }

            #hoverlay {
                display: block;
            }

            #hoverlayMobile {
                display: none;
            }

            .embossed_top {
                color: #f0f0f0;
                /**font-size: 100px;
  font-family: Futura;*/
                background-color: #666666;
                text-shadow: 5px 4px 4px #555;
                text-align: center;
                -webkit-background-clip: text;
                -moz-background-clip: text;
            }

            .itemCara {
                border-radius: 20px;
                box-shadow: 0px 6px 15px #00000088;
            }

            .imgcara {
                opacity: .45;
                border-radius: 20px;
                height: 450px;
            }

            .abtTemple1 {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                box-shadow: 0px 6px 15px #00000088;
                padding: 20px;
            }

            .abtTemple2 {
                width: 85%;
                margin-top: -280px;
            }

            .darshan1 {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                padding: 20px;
            }

            .darshancol2 {
                padding-right: 40px;
            }

            .subscribecls1 {
                border-radius: 20px;
            }

            .subscribecls2 {
                min-height: 124px;
                padding: 1%;
            }

            .contactus1 {
                min-height: 120px;
                padding: 1%;
            }

            .festCls {
                text-align: left;
            }

            .festClsbg {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
            }

            .kathacls {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                box-shadow: 0px 6px 15px #00000088;
                border-radius: 20px;
                padding: 30px;
            }

            .kathacls1 {
                padding-left: 50px;
                padding-right: 50px;
            }

            .kathacls2 {
                width: 60%;
            }

            .container_0 {
                margin-top: -182px;
                position: relative;
                color: black;
                --bs-gutter-x: 1.5rem;
                --bs-gutter-y: 0;
                width: 100%;
                padding-right: 0px; /* calc(var(--bs-gutter-x) * 0.5);*/
                padding-left: calc(var(--bs-gutter-x) * 0.5);
                margin-right: auto;
                margin-left: auto;
                justify-content: center;
            }

            .container_1 {
                padding-left: 150px;
                padding-right: 100px;
                padding-top: 0px;
            }

            .container_f {
                padding-left: 150px !Important;
                padding-right: 100px !Important;
                padding-top: 0px !Important;
            }

            #headingRowAll {
                display: block;
            }
            /* hide it elsewhere */
            #headingRowMobile {
                display: none;
            }

            #divDarshan {
                display: block;
            }
        }
        /* Extra large devices (large laptops and desktops, 1200px and up) */
        @media only screen and (min-width: 1200px) {
            .ul_footer {
                list-style-type: none;
                margin-left: -30px;
                text-align: left;
                padding-right: 10px;
                margin-top: -4% !important;
                box-shadow: none;
            }

                .ul_footer li {
                    margin-left: 10px;
                    border: none;
                    background-color: transparent;
                    padding: 2px;
                }

            #divPhotoGallery {
                display: block;
                padding: 50px;
            }

            #divPhotoGalleryMobile {
                display: none;
            }

            .para_lowertext {
                text-align: center;
                font: Roboto;
                font-style: normal;
                font-size: 12pt;
                color: #FFFFFF;
                opacity: 1;
                line-height: normal;
            }

            #hoverlay {
                display: block;
            }

            #hoverlayMobile {
                display: none;
            }

            .embossed_top {
                color: #f0f0f0;
                /**font-size: 100px;
  font-family: Futura;*/
                background-color: #666666;
                text-shadow: 5px 4px 4px #555;
                text-align: center;
                -webkit-background-clip: text;
                -moz-background-clip: text;
            }

            .itemCara {
                border-radius: 20px;
                box-shadow: 0px 6px 15px #00000088;
            }

            .imgcara {
                opacity: .45;
                border-radius: 20px;
                height: 450px;
            }

            .abtTemple1 {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                box-shadow: 0px 6px 15px #00000088;
                padding: 20px;
            }

            .abtTemple2 {
                width: 85%;
                margin-top: -280px;
            }

            .darshan1 {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                padding: 20px;
            }

            .darshancol2 {
                padding-right: 40px;
            }

            .subscribecls1 {
                border-radius: 20px;
            }

            .subscribecls2 {
                min-height: 124px;
                padding: 1%;
            }

            .contactus1 {
                min-height: 120px;
                padding: 1%;
            }

            .festCls {
                text-align: left;
            }

            .festClsbg {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
            }

            .kathacls {
                background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box;
                box-shadow: 0px 6px 15px #00000088;
                border-radius: 20px;
                padding: 30px;
            }

            .kathacls1 {
                padding-left: 50px;
                padding-right: 50px;
            }

            .kathacls2 {
                width: 60%;
            }

            .container_0 {
                /*margin-top: -182px;*/
                margin-top: -3px;
                position: relative;
                color: black;
                --bs-gutter-x: 1.5rem;
                --bs-gutter-y: 0;
                width: 100%;
                padding-right: 0px; /* calc(var(--bs-gutter-x) * 0.5);*/
                padding-left: calc(var(--bs-gutter-x) * 0.5);
                margin-right: auto;
                margin-left: auto;
                justify-content: center;
            }

            .container_1 {
                padding-left: 150px;
                padding-right: 100px;
                padding-top: 0px;
                margin-top: -25.5%;
            }

            .container_f {
                padding-left: 150px !Important;
                padding-right: 100px !Important;
                padding-top: 0px !Important;
            }

            #headingRowAll {
                display: block;
            }
            /* hide it elsewhere */
            #headingRowMobile {
                display: none;
            }

            .nav-pills-background {
                background: transparent linear-gradient(0deg, #1A2300 0%, #565D04 100%) 0% 0% no-repeat padding-box;
                height: 55px;
                padding-top: 10px;
                border-radius: 25px 25px 0px 0px !important;
                opacity: 1;
            }

            .footer {
                margin-top: 2% !important;
            }

            #divDarshan {
                display: block;
            }
        }
        /*------------------------------------*/
        /******************************************************************************/


        #pageupBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

            #pageupBtn:hover {
                background-color: #555;
            }

        .vcenter-item {
            display: flex;
            align-items: center;
        }

        .bs-example {
            /*margin: 20px;
             float: left;
            left: 50%;
            top: 50%;*/
        }

        .modal-dialog iframe {
            margin: 0 auto;
            display: block;
        }


        .fixed-dialog {
            position: fixed;
            border: 1px solid Red;
            border-radius: 10px;
            background-color: orangered;
            float: left;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .rounded1 {
            border-radius: 10px 10px 10px 10px;
            box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
            border-color: white;
            border-width: 1px;
            border-style: solid;
        }

        .layer {
            background-color: rgba(248, 247, 216, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .borderless td, .borderless th {
            border: none;
        }

        .align-items-center1 {
            display: flex;
            align-items: center; /*Aligns vertically center */
            justify-content: center; /*Aligns horizontally center */
        }

        /********/
        #summary {
            font-size: 12pt;
            line-height: 1.5;
        }

            #summary p.collapse:not(.show) {
                height: 150px !important;
                overflow: hidden;
                display: -webkit-box;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
            }

            #summary p.collapsing {
                min-height: 102px !important;
            }

            #summary a.collapsed:after {
                content: 'Read More';
                color: red;
                text-decoration: none;
            }

            #summary a:not(.collapsed):after {
                content: 'Read Less';
                color: red;
                text-decoration: none;
            }



        @media (max-width: 978px) {
            .container {
                padding: 0;
                margin: 0;
                margin-top: 0;
            }

            body {
                padding: 0;
            }

            .navbar-fixed-top, .navbar-fixed-bottom, .navbar-static-top {
                margin-left: 0;
                margin-right: 0;
                margin-bottom: 0;
            }
        }
        /*****************************************/
        /*switch styles*/

        div.btn-container {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
        }

            div.btn-container i {
                display: inline-block;
                position: relative;
                top: -9px;
            }

        label {
            font-size: 13px;
            color: #424242;
            font-weight: 500;
        }

        .btn-color-mode-switch {
            display: inline-block;
            margin: 0px;
            position: relative;
        }

            .btn-color-mode-switch > label.btn-color-mode-switch-inner {
                margin: 0px;
                width: 200px;
                height: 40px;
                background: #FFFFFF;
                border-radius: 60px;
                overflow: hidden;
                position: relative;
                transition: all 0.3s ease;
                display: block;
            }

                .btn-color-mode-switch > label.btn-color-mode-switch-inner:before {
                    content: attr(data-on);
                    position: absolute;
                    font-size: 12px;
                    font-weight: 500;
                    top: 10px;
                    right: 30px;
                }

                .btn-color-mode-switch > label.btn-color-mode-switch-inner:after {
                    content: attr(data-off);
                    width: 90px;
                    height: 35px;
                    background: #D11B1B 0% 0% no-repeat padding-box;
                    border-radius: 26px;
                    position: absolute;
                    left: 2px;
                    top: 2px;
                    text-align: center;
                    transition: all 0.3s ease;
                    box-shadow: 0px 0px 6px -2px #111;
                    padding: 6px 0px;
                    color: white;
                }

            .btn-color-mode-switch > .alert {
                display: none;
                background: #FF9800;
                border: none;
                color: #fff;
            }

            .btn-color-mode-switch input[type="checkbox"] {
                cursor: pointer;
                width: 50px;
                height: 25px;
                opacity: 0;
                position: absolute;
                top: 0;
                z-index: 1;
                margin: 0px;
            }

                .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner {
                    color: black;
                }

                    .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:after {
                        content: attr(data-on);
                        left: 108px;
                        background: #D11B1B 0% 0% no-repeat padding-box;
                    }

                    .btn-color-mode-switch input[type="checkbox"]:checked + label.btn-color-mode-switch-inner:before {
                        content: attr(data-off);
                        right: auto;
                        left: 20px;
                    }

                .btn-color-mode-switch input[type="checkbox"]:checked ~ .alert {
                    display: block;
                }



        /*mode preview*/
        .dark-preview {
            background: #0d0d0d;
        }

            .dark-preview div.btn-container i.fa-sun-o {
                color: #777;
            }

            .dark-preview div.btn-container i.fa-moon-o {
                color: #fff;
                text-shadow: 0px 0px 11px #fff;
            }

        .white-preview {
            background: #fff;
        }

            .white-preview div.btn-container i.fa-sun-o {
                color: #ffa500;
                text-shadow: 0px 0px 16px #ffa500;
            }

            .white-preview div.btn-container i.fa-moon-o {
                color: #777;
            }

        p.by {
        }

            p.by a {
                text-decoration: none;
                color: #000;
            }

        .dark-preview p.by a {
            color: #777;
        }

        .white-preview p.by a {
            color: #000;
        }

        @media (max-width: 350px) {
            .overlay {
                visibility: collapse;
            }
        }

        @media (max-width: 450px) {
            .overlay .embossed_top {
                font-size: 15px;
                margin-top: -5%;
            }

            .overlay {
                top: 2%;
            }
        }

        .overlay {
            color: #fff;
            position: absolute;
            z-index: 12;
            top: 10%;
            left: 0;
            width: 100%;
            text-align: center;
            text-shadow: 0px 1px 4px #770404;
            opacity: 1;
        }

        .overlayM {
            color: #fff;
            position: absolute;
            z-index: 12;
            top: 30%;
            width: 100%;
            text-align: left;
            text-shadow: 0px 1px 4px #770404;
            left: 152px;
            /* UI Properties */
            text-align: left;
            font: normal normal 900 30px/39px Roboto;
            letter-spacing: 0px;
            color: #FFFFFF;
            opacity: 1;
        }



        #loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: rgb(0, 0, 0, .65);
        }

        .waviy {
            position: relative;
            -webkit-box-reflect: below -20px linear-gradient(transparent, rgba(0,0,0,.2));
            text-align: center;
            top: 50%;
        }

            .waviy span {
                position: relative;
                display: inline-block;
                font-size: 50px;
                color: #fff;
                animation: waviy 1s infinite;
                animation-delay: calc(.1s * var(--i));
            }

        @keyframes waviy {
            0%,40%,100% {
                transform: translateY(0);
            }

            20% {
                transform: translateY(-20px);
            }
        }

        .carousel-caption {
            right: 5%;
            left: 5%;
        }
    </style>
    <script>
        //$(document).ready(function () {
        //    $('#divBhajan').hide();

        //});
       
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
        //function katha_showhhideDiv(cbKatha) {

        //    var dvKatha = document.getElementById("divKatha");
        //    var dvBhajan = document.getElementById("divBhajan");

        //    if (cbKatha.checked) {
        //        dvKatha.style.display = "none"
        //        dvBhajan.style.display = "block"
        //    }
        //    else {

        //        dvBhajan.style.display = "none"
        //        dvKatha.style.display = "block"

        //    }
        //}
        function gallery_showhhideDiv(cbGallery) {

            var dvPhoto = document.getElementById("dvPhoto");
            var dvVideo = document.getElementById("dvVideo");

            if (cbGallery.checked) {
                dvPhoto.style.display = "none"
                dvVideo.style.display = "block"
            }
            else {

                dvVideo.style.display = "none"
                dvPhoto.style.display = "block"

            }
        }
        function opendialoge1(dtitle, audiofile) {
            $('#audiofile').attr('src', audiofile);
            $('#audio').load();

            document.getElementById("audio").autoplay = "true";
            document.getElementById("lblAudio").innerHTML = dtitle;
            $("#dialog:ui-dialog").dialog("destroy");
            $("#dialog").dialog({
                title: "Bhajans and Katha",
                width: 600,
                modal: true,
                resizable: false,
                dialogClass: 'fixed-dialog',

                open: function (event, ui) {
                    $('.ui-widget-overlay').css({ opacity: '.8' });
                },
                close: function () {
                    //location.reload();
                    document.getElementById("audio").pause();
                    document.getElementById("audio").autoplay = "false";
                    $('#audiofile').attr('src', '');
                },
                buttons: [
            {
                text: "Close",
                icon: "ui-icon-help",
                click: function (e) {
                    //location.reload();
                    document.getElementById("audio").pause();
                    document.getElementById("audio").autoplay = "false";
                    $('#audiofile').attr('src', '');
                    $(this).dialog("close");
                }
            }]


            });
            $(".ui-dialog-titlebar").hide();
            return false;
        }
        function openvideo(dtitle, youtubelink) {
            document.getElementById("lblTitle").innerHTML = dtitle;


            var url = $("#iframeYouTube").attr('src');
            $("#myModal").on('hide.bs.modal', function () {
                $("#iframeYouTube").attr('src', '');

            });
            $("#myModal").on('show.bs.modal', function () {
                $("#iframeYouTube").attr('src', youtubelink);
            });


        }
        //$(document).ready(function () {
        //    var url = $("#iframeYouTube").attr('src');

        //});

        function opendialoge(dtitle, audiofile) {

            document.getElementById("lblTitle1").innerHTML = dtitle;


            $("#myModal1").on('hide.bs.modal', function () {
                document.getElementById("audio1").pause();
                document.getElementById("audio1").autoplay = "false";
                document.getElementById("audiofile1").src = "";

            });

            $("#myModal1").on('show.bs.modal', function () {

                document.getElementById("audiofile1").src = audiofile;
                document.getElementById("audio1").load();
                //$('#audiofile1').attr('src', audiofile);
                //$('#audio1').load();

                document.getElementById("audio1").autoplay = "true";
            });


        }


        function opendialogeKBDtls(kbid) {
            switch (kbid) {
                case 1:
                    document.getElementById("lblKBTitle").innerHTML = "About Doha";
                    document.getElementById("lblKBDtls").innerHTML = "Doha";
                    break;
                case 2:
                    document.getElementById("lblKBTitle").innerHTML = "About Aarti";
                    document.getElementById("lblKBDtls").innerHTML = "Aarti is a Shri Krishna Prayer ";
                    break;
                case 3:
                    document.getElementById("lblKBTitle").innerHTML = "Bhajan";
                    document.getElementById("lblKBDtls").innerHTML = "Shri Krishna Bhajan ";
                    break;


                case 4:
                    document.getElementById("lblKBTitle").innerHTML = "About Ashtadash Siddhant";
                    document.getElementById("lblKBDtls").innerHTML = " Ashtadash Siddhant Part 1";
                    break;
                case 5:
                    document.getElementById("lblKBTitle").innerHTML = "About Ashtadash Siddhant";
                    document.getElementById("lblKBDtls").innerHTML = " Ashtadash Siddhant Part 2";
                    break;

                case 6:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Kelimalji";
                    document.getElementById("lblKBDtls").innerHTML = "Shri Kelimalji Part 1";
                    break;
                case 7:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Kelimalji";
                    document.getElementById("lblKBDtls").innerHTML = "Shri Kelimalji Part 2";
                    break;
                case 8:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Kunj Bihari Ashtak";
                    document.getElementById("lblKBDtls").innerHTML = "Shri Kunj Bihari Ashtak";
                    break;



                case 9:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Krishna Janma Katha";
                    document.getElementById("lblKBDtls").innerHTML = "Shri Krishna Janma Katha";
                    break;
                case 10:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Kunj Bihari Ashtak";
                    document.getElementById("lblKBDtls").innerHTML = "Introduction to Shri Kunj Bihari Ashtak";
                    break;
                case 11:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Kelimalji";
                    document.getElementById("lblKBDtls").innerHTML = "About Shri Kelmaliji which is  written by Swami Haridas, an incarnation of Lalita Sakhi, who himself had witnessed the blissful leelas of Sri Radha Krishna at Nidhivan and then put it into words."
                    break;
                case 12:
                    document.getElementById("lblKBTitle").innerHTML = "About Ashtadash Siddhant";
                    document.getElementById("lblKBDtls").innerHTML = "Introduction to Ashtadash Siddhant (Part 1)"
                    break;
                case 13:
                    document.getElementById("lblKBTitle").innerHTML = "About Ashtadash Siddhant";
                    document.getElementById("lblKBDtls").innerHTML = "Introduction to Ashtadash Siddhant (Part 2)"
                    break;
                case 14:
                    document.getElementById("lblKBTitle").innerHTML = "About Shri Goverdhan Katha";
                    document.getElementById("lblKBDtls").innerHTML = "Shri Goverdhan Katha"
                    break;
                case 15:
                    document.getElementById("lblKBTitle").innerHTML = "About Holi Katha";
                    document.getElementById("lblKBDtls").innerHTML = "Holi Katha";
                    break;
                case 16:
                    document.getElementById("lblKBTitle").innerHTML = "About Raas Lila Katha";
                    document.getElementById("lblKBDtls").innerHTML = "Raas Lila Katha";
                    break;

                default:
                    // code block
            }




        }
        //// When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("pageupBtn").style.display = "block";
            }
            else {
                document.getElementById("pageupBtn").style.display = "none";
            }
        }

        //// When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }


        function ShowLoading() {
            var div = document.getElementById("loader");
            div.style.display = "block";
        }
        function HideLoading() {
            var div = document.getElementById("loader");
            div.style.display = "none";
        }
    </script>
</head>

<body id="page-top" style="background-image: url('assets/img/page-background-caligraphy.svg')" onload="HideLoading();">
    <!-- <div id="loader">
        <div class="waviy">
            <span style="--i: 1">S</span>
            <span style="--i: 2">h</span>
            <span style="--i: 3">r</span>
            <span style="--i: 4">i</span>
            <span style="--i: 5"></span>
            <span style="--i: 6">R</span>
            <span style="--i: 7">a</span>
            <span style="--i: 8">d</span>
            <span style="--i: 9">h</span>
            <span style="--i: 10">e</span>
            <span style="--i: 11">y</span>

            <p style="color: white;">Shri Banke Bihariji Mandir (Vrindavan)</p>
        </div>
    </div> -->
    <?php 
        require 'inc/loader.php'
    ?>
    <form id="form1">
        <!-- <asp:ScriptManager ID="ScriptManager1" runat="server"></asp:ScriptManager> -->

        <div>
            <a id="pageupBtn" href="#" class="btn btn-light btn-lg back-to-top" role="button" onclick="topFunction()"><i class="fas fa-chevron-up"></i></a>
            <!----Headers--------->
            <!-- Header for small screens (less than 576px) -->
            <!-- <header class="d-sm-block d-md-none  text-white text-center p-0  w-100">
                <a href="default.aspx" target="_Self">
                    <img src="assets/img/headermobile.jpg" style="width: 100%" class="img-fluid" /></a>
                <nav class="navbar navbar-expand-lg p-0" style="position: absolute; margin-top: -50%; margin-left: 2px; z-index: 99999">
                    <a class="navbar-brand" href="#" style="text-align: left">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation"
                            style="background: #AC0505 0% 0% no-repeat padding-box; border: 0.5px solid #AC0505; border-radius: 8px; opacity: 1; color: white; font-size: smaller; padding: 10px;">
                            <span class="navbar-toggler-icon navbar-dark"></span>Menu
                        </button>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav1">
                        <ul class="navbar-nav" style="text-align: left; background-color: white; padding-left: 10px; color: orangered; border: 1px solid red">
                            <li class="nav-item">
                                <a class="nav-link" href="default.aspx">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/aboutTemple.aspx" target="_self">About Temple</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/registerfordarshan.aspx">Register for Darshan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/blogbihariji.aspx">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/invitethakurji.aspx">Invite Thakur Ji</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/visitTemple.aspx">Visit Temple</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/festivals.aspx">Festivals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/donation.aspx">Donate</a>
                            </li>
                        </ul>
                    </div>


                </nav>
                <div class="row" style="margin-top: -11%; margin-bottom: 0%; margin-left: 0px; margin-right: 0px;"
                    id="headingRowMobile" runat="server">
                    <div class="col-12 " style="text-align: left">
                        <h5 id="hdHeading" runat="server"></h5>
                    </div>

                </div>

            </header> -->
            <!-- Header for medium screens (576px or larger) -->
            <!-- <header class="d-none d-md-block d-lg-none  text-center p-0">
                <a href="default.aspx" target="_Self">
                    <img src="assets/img/headermobile.jpg" style="width: 100%" class="img-fluid" /></a>
                <nav class="navbar navbar-expand-lg p-0" style="position: absolute; margin-top: -50%; margin-left: 2px; z-index: 99999">
                    <a class="navbar-brand" href="#" style="text-align: left">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation"
                            style="background: #AC0505 0% 0% no-repeat padding-box; border: 0.5px solid #AC0505; border-radius: 8px; opacity: 1; color: white; font-size: smaller; padding: 10px;">
                            <span class="navbar-toggler-icon navbar-dark"></span>Menu
                        </button>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav2">
                        <ul class="navbar-nav" style="text-align: left; background-color: white; padding-left: 10px; color: orangered; border: 1px solid red">
                            <li class="nav-item">
                                <a class="nav-link" href="default.aspx">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/aboutTemple.aspx" target="_self">About Temple</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/registerfordarshan.aspx">Register for Darshan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/blogbihariji.aspx">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/invitethakurji.aspx">Invite Thakur Ji</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/visitTemple.aspx">Visit Temple</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/festivals.aspx">Festivals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="public/donation.aspx">Donate</a>
                            </li>
                        </ul>
                    </div>


                </nav>

                <div class="row" style="margin-top: -11%; margin-bottom: 0%; margin-left: 0px; margin-right: 0px;"
                    id="headingRowMobile1" runat="server">
                    <div class="col-12">
                        <h4 id="hdHeading1" runat="server"></h4>
                    </div>

                </div>
            </header> -->
            
            <?php
                require 'inc/header.php'
            ?>
 

            <div id="dialog" style="display: none; z-index: 9999; border-radius: 5px">
                <div class="row">
                    <div class="col-lg-4">

                        <img src="assets/img/HaridasJi.png" style="width: 80%" />
                    </div>
                    <div class="col-lg-8">
                        <label id="lblAudio" class="h4" style="color: white"></label>
                        <audio controls id="audio">
                            <source id="audiofile" type="audio/mp3">
                        </audio>
                    </div>

                </div>
            </div>

            <!--///---------------------------------->
            <!--------TEST--------------->

            <div class="container-fluid container_0">

                <div class="row row-centered pos g-0">

                    <div class="col-lg-12 col-xs-12 col-centered container_1">

                        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                            <!-- Carousel indicators -->
                            <div class="overlay">
                                <h6 class="embossed_top" id="hoverlay">नमः कुञ्ज बिहारिण्यै, नमः कुञ्ज बिहारिणे। स्वामी श्री हरिदासाय, गुरूणां गुरुवे नमः।।</h6>
                                <h6 class="embossed_top" id="hoverlayMobile">नमः कुञ्ज बिहारिण्यै, नमः कुञ्ज बिहारिणे।<br />
                                    स्वामी श्री हरिदासाय, गुरूणां गुरुवे नमः।।</h6>
                            </div>


                            <ol class="carousel-indicators">
                                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" runat="server" id="carimg1"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="1" runat="server" id="carimg2"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="2" runat="server" id="carimg3"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="3" runat="server" id="carimg4"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="4" runat="server" id="carimg5"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="5" runat="server" id="carimg6"></li>

                            </ol>

                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item active shadow-lg itemCara " runat="server" id="crsIteml1">

                                    <img src="" class="d-block w-100 img-fluid imgcara " alt="Shri Kunj Biharine Namah" runat="server" id="img1">

                                    <div class="carousel-caption ">
                                        <h3 class="embossed">प्रेम समुद्र रूप रस गहरे, कैसे पाऊँ थाह ||</h3>
                                        <p class="para_lowertext">Lord Shri Banke Bihariji Maharaj are the ocean of love, the cosmic beauty and eternal bliss of this ocean is so deep that nobody can measure it.</p>
                                    </div>
                                </div>
                                <div class="carousel-item itemCara" runat="server" id="crsIteml2">
                                    <img src="" class="d-block w-100 img-fluid imgcara" alt="Shri Kunj Biharine Namah1" runat="server" id="img2">
                                    <div class="carousel-caption ">
                                        <h3 style="font: normal normal 900 30px/39px Roboto; letter-spacing: 0px; color: #FFFFFF; opacity: 1;">प्रेम समुद्र रूप रस गहरे, कैसे पाऊँ थाह ||</h3>
                                        <p class="para_lowertext">Lord Shri Banke Bihariji Maharaj are the ocean of love, the cosmic beauty and eternal bliss of this ocean is so deep that nobody can measure it.</p>
                                    </div>
                                </div>
                                <div class="carousel-item itemCara" runat="server" id="crsIteml3">
                                    <img src="" class="d-block w-100 img-fluid imgcara" alt="Shri Kunj Biharine Namah" runat="server" id="img3">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 style="font: normal normal 900 30px/39px Roboto; letter-spacing: 0px; color: #FFFFFF; opacity: 1; 1px 1px #f09318">प्रेम समुद्र रूप रस गहरे, कैसे पाऊँ थाह ||</h3>
                                        <p class="para_lowertext">Lord Shri Banke Bihariji Maharaj are the ocean of love, the cosmic beauty and eternal bliss of this ocean is so deep that nobody can measure it.</p>
                                    </div>
                                </div>
                                <div class="carousel-item itemCara" runat="server" id="crsIteml4">
                                    <img src="" class="d-block w-100 img-fluid imgcara" alt="Shri Kunj Biharine Namah" runat="server" id="img4">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 style="font: normal normal 900 30px/39px Roboto; letter-spacing: 0px; color: #FFFFFF; opacity: 1;">प्रेम समुद्र रूप रस गहरे, कैसे पाऊँ थाह ||</h3>
                                        <p class="para_lowertext">Lord Shri Banke Bihariji Maharaj are the ocean of love, the cosmic beauty and eternal bliss of this ocean is so deep that nobody can measure it.</p>
                                    </div>
                                </div>
                                <div class="carousel-item itemCara" runat="server" id="crsIteml5">
                                    <img src="" class="d-block w-100 imgcara" alt="Shri Kunj Biharine Namah" runat="server" id="img5">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 style="font: normal normal 900 30px/39px Roboto; letter-spacing: 0px; color: #FFFFFF; opacity: 1;">प्रेम समुद्र रूप रस गहरे, कैसे पाऊँ थाह ||</h3>
                                        <p class="para_lowertext">Lord Shri Banke Bihariji Maharaj are the ocean of love, the cosmic beauty and eternal bliss of this ocean is so deep that nobody can measure it.</p>
                                    </div>
                                </div>
                                <div class="carousel-item itemCara" runat="server" id="crsIteml6">
                                    <img src="" class="d-block w-100 imgcara" alt="Slide 2" runat="server" id="img6">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3 style="font: normal normal 900 30px/39px Roboto; letter-spacing: 0px; color: #FFFFFF; opacity: 1;">प्रेम समुद्र रूप रस गहरे, कैसे पाऊँ थाह ||</h3>
                                        <p class="para_lowertext">Lord Shri Banke Bihariji Maharaj are the ocean of love, the cosmic beauty and eternal bliss of this ocean is so deep that nobody can measure it.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel controls -->
                            <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                    <!-- <%-- <div class="col-lg-1 col-xs-1 col-centered">
                        </div>--%> -->
                </div>
            </div>
            <!---Mandir Darshan---->
            <div class="container-fluid container_1" style="margin-top: 50px;" id="darshantiming">

                <div class="row row-centered pos g-0">
                    <div class="col-lg-12 col-xs-12 col-centered darshan1 " style="min-height: 700px; background-blend-mode: lighten; border-radius: 20px; opacity: 1;">
                        <center>
                            <img src="assets/img/box-header-caligraphy.svg" alt="Shri Radhey" />
                            <h2>MANDIR  DARSHAN TIMINGS</h2>
                               
                     <asp:UpdatePanel runat="server">
                         <ContentTemplate> 
                             
                            <div class="btn-container">
                                <label class="switch btn-color-mode-switch">
                                    <asp:CheckBox ID="color_mode" runat="server"  OnCheckedChanged="color_mode_CheckedChanged" AutoPostBack="true" Checked="true" />
                                    <label for="color_mode" data-on="WINTER" data-off="SUMMER" class="btn-color-mode-switch-inner"></label>
                                </label>
                            </div>
                            <div class="row justify-content-end" style="height: 30px;" id="divDarshan">

                                <div class="col-3 " style="background: #D11B1B 0% 0% no-repeat padding-box; border-radius: 5px; opacity: 1; margin-right: 40px;float: right;min-height: 30px">
                                
                              <asp:Label id="lblDarshanType"  runat="server" text="">  Summer: 10<sup>th</sup> March - 15<sup>th</sup> Oct</asp:Label>   
                                </div>
                            </div>
                            <div class="row row-centered pos mt-1">
                            
                                 <div class="col-sm-6 center-image d-none d-sm-block" >
                                    <img src="assets/img/manndir-box-image.jpg" style="background: #C39A64 0% 0% no-repeat padding-box; border-radius: 10px; width: 90%; height: 80%" />
                                </div>
                                
                                  <div class="col-xs-12 col-sm-6 col-centered darshancol2" >
                                      <center>
                                     <!---Summer--->
                                    <table class="table table-responsive table-bordered" runat="server" id="tbldarshanS" style="min-height: 300px;height: 100%; background: #698A69 0% 0% no-repeat padding-box; border: 1px solid #D5D5D5; opacity: 1; border-collapse: collapse; border-radius: .25em; overflow: hidden;">

                                        <thead class="thead-dark align-middle" style="color: #FFFD71; height: 60px">
                                            <tr>

                                                <th scope="col" style="text-align: center;">EVENT</th>
                                                <th scope="col" style="text-align: center;">MORNING</th>
                                                <th scope="col" style="text-align: center;">EVENING</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr style="background-color: #FBEBA0; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Mandir Open</td>
                                                <td style="text-align: center;">07:45 AM</td>
                                                <td style="text-align: center;">05:30 PM</td>

                                            </tr>
                                            <tr style="background: #f2df85 0% 0% no-repeat padding-box; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Shringar Aarti  </td>
                                                <td style="text-align: center;">08:00 AM</td>
                                                <td style="text-align: center;"></td>

                                            </tr>
                                            <tr style="background-color: #FBEBA0; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Bhog  </td>
                                                <td style="text-align: center;">11:00 - 11:30 AM</td>
                                                <td style="text-align: center;">08:30 - 9:00 PM</td>

                                            </tr>
                                            <tr style="background: #f2df85 0% 0% no-repeat padding-box; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Aarti & Closing</td>
                                                <td style="text-align: center;">12:00 Noon</td>
                                                <td style="text-align: center;">9:30 PM</td>

                                            </tr>
                                        </tbody>
                                    </table>

                                    <!---Winter--->
                                    <table class="table table-responsive table-bordered" runat="server" id="tbldarshanW" style="min-height: 300px;height: 100%;  background: #698A69 0% 0% no-repeat padding-box; border: 1px solid #D5D5D5; opacity: 1; border-collapse: collapse; border-radius: .25em; overflow: hidden;">

                                        <thead class="thead-dark align-middle" style="color: #FFFD71; height: 60px">
                                            <tr>

                                                <th scope="col" style="text-align: center;">EVENT</th>
                                                <th scope="col" style="text-align: center;">MORNING</th>
                                                <th scope="col" style="text-align: center;">EVENING</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr style="background-color: #FBEBA0; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Mandir Open</td>
                                                <td style="text-align: center;">08:45 AM</td>
                                                <td style="text-align: center;">04:30 PM</td>

                                            </tr>
                                            <tr style="background: #f2df85 0% 0% no-repeat padding-box; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Shringar Aarti  </td>
                                                <td style="text-align: center;">09:00 AM</td>
                                                <td style="text-align: center;"></td>

                                            </tr>
                                            <tr style="background-color: #FBEBA0; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Bhog  </td>
                                                <td style="text-align: center;">12:00 Noon - 12:30 PM</td>
                                                <td style="text-align: center;">07:30 - 08:00 PM</td>

                                            </tr>
                                            <tr style="background: #f2df85 0% 0% no-repeat padding-box; color: #31520E;" class="align-middle">

                                                <td style="text-align: center; font-weight: bold; padding-right: 15px">Aarti & Closing</td>
                                                <td style="text-align: center;">01:00 PM</td>
                                                <td style="text-align: center;">08:30 PM</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    </center>
                                </div>
                            </div>
                             <!--------------------->
                            <h5 style="color: #FFFD71">TRENDING QUERIES</h5>
                            <div class="row row-centered justify-content-center" style="padding-right: 40px; padding-left: 40px">

                                <div class="col-lg-12" style="text-align: center">

                                    
                                    <asp:LinkButton runat="server" ID="lbtnVisitTemple" Text="How to Visit Mandir?" CssClass="btn btn-xs" Style="background: #FEAF1C 0% 0% no-repeat padding-box; color: #31520E; margin-right: 10px" OnClick="lbtnVisitTemple_Click" ToolTip="Click to know about temple"></asp:LinkButton>
                                    <asp:LinkButton runat="server" ID="lbtnCovidPolicy" Text="Do's and Don'ts in Temple" CssClass="btn btn-xs" Style="background: #FEAF1C 0% 0% no-repeat padding-box; margin-right: 10px" OnClick="lbtnCovidPolicy_Click" ToolTip="Click to know about Do's and Don'ts in Temple"></asp:LinkButton>
                                    <asp:LinkButton runat="server" ID="lbtnPlacesToVisit" Text="Places to see, ways to wander, and signature experiences" CssClass="btn btn-xs" Style="background: #FEAF1C 0% 0% no-repeat padding-box;" OnClick="lbtnPlacesToVisit_Click" ToolTip="Click to know about places to visit in and around Vrindavan"></asp:LinkButton>
                                </div>



                            </div>

                            <!---------------------->
                             </ContentTemplate>
                     </asp:UpdatePanel>
                            

                            </center>


                    </div>

                </div>
            </div>
            <!--/-Mandir Darshan---->

            <!---About Mandir---->
            <div class="container-fluid container_1" style="margin-top: 50px;">

                <div class="row row-centered pos g-0">
                    <!-- <%--<div class="col">
                        </div>--%> -->
                    <div class="col-lg-12 col-xs-12 col-centered abtTemple1 " style="min-height: 700px; border-radius: 20px; opacity: 1;">
                        <center>
                            <img src="assets/img/box-header-caligraphy.svg"alt="Shri Radhey" />
                                <h2>SHRI BANKE BIHARI MANDIR</h2>

                               <div class="row row-centered pos g-0">
                                                <div class="col-lg-12 col-xs-12 col-centered ">
                                             <img src="assets/img/about-temple-box.jpg" style="width:95%" />
                                            </div>
                                   </div>

                                <div id="myCarousel1" class="carousel slide abtTemple2" data-bs-ride="carousel" style="box-shadow: 0px 6px 15px #00000088;background-color:white" data-interval="1000">
                                <!-- Carousel indicators -->
                              


                                <ol class="carousel-indicators" >
                                    <li data-bs-target="#myCarousel1" data-bs-slide-to="0" class="active" style="background-color: #f00;"></li>
                                    <li data-bs-target="#myCarousel1" data-bs-slide-to="1" style="background-color: #f00;"></li>
                                    <li data-bs-target="#myCarousel1" data-bs-slide-to="2" style="background-color: #f00;"></li>
                                     <li data-bs-target="#myCarousel1" data-bs-slide-to="3" style="background-color: #f00;"></li>
                                 <!-- <%--    <li data-bs-target="#myCarousel1" data-bs-slide-to="4" style="background-color: #f00;"></li>--%> -->
                                </ol>

                                <!-- Wrapper for carousel items -->
                                <div class="carousel-inner" style="height:60% ">
                    
                                    <div class="carousel-item shadow-lg active  bg-white p-4" style="color:#101010">
                                    <h4 style="text-align:left; color: #EE6F2D">Temple History and Appearance of Bihari Ji</h4>
                                     <p style="text-align:justify" >  
                                         The image of Bihariji installed in the Shri Banke Bihari Mandir, is the one granted to Swami 
                                         Haridas by the celestial couple Shyama-Shyam themselves. Submitting to the desire of devotees 
                                         The Lord appeared in person with his divine consort and left back a black charming image before
                                          disappering.
                                        </p>
                                     
                                          
                                       
                                        <p  style="text-align:justify">
                                            Swami Haridas Ji was born to Shri Ashudhir and his wife Smt Gangadevi on the day of Radha Ashtami i.e. eighth day of second (bright) 
                                            fortnight of Bhadrapad month of the year 1535 Vikrami(1478 A.D.). He was born in a small village, now known as Haridaspur, 
                                            near Aligarh in Uttar Pradesh. The linage of the family can be traced back to Shri Gargacharya. 
                                            Shri Gargachrya was the kulguru (family guru) of Yadavs and visited Brij secretly for conducting the Namkaran Samskar (naming ceremony) 
                                            of young Krishna and Balram on request of Sri Vasudev. A branch of the family migrated to Multan (now in Pakistan),
                                             but some of them returned after a long time. Sri Ashudhir was one such migrant who after returning from Multan settled 
                                            at the outskirts of Brij, near Aligarh.
 
                                          </p> <a  href="public/aboutTemple.aspx" class="btn-custom mt-2 mb-2" title="Click to read more" style="font-weight:bold;font-size:large;padding-top:10px;padding-bottom:10px; padding-left:20px;padding-right:20px;border-radius: 48px;text-decoration:none">Read More</a>
                                </div>
                                    <div class="carousel-item  shadow-lg  bg-white p-4" style="color:#101010">
                                        <h4 style="text-align:left; color: #EE6F2D">Swami Ramkrishna Paramhans visit to Vrindavan</h4>
                                     <p style="text-align:justify" >  Nidhivan , the location of appearance of Shri Banke Bihari, is a serene place. It has dense plantation 
                                         of Ban Tulsi (a kind of Basil, the wild variety) with its branches bowing down to ground as if they want to touch the ground imprinted
                                          with tender feet of the divine couple Priya-Priyatam. The panorama is particularly charming during the rainy season as the freshly 
                                         washed and newly erupted tender leaves seem to invite the visitor to shelter from the scorching heat of intense Sun outside. 
                                         Once a visitor enters the environs of Nidhivan, he feels relaxed bodily as well as spiritually. Such is the grace of Swami Haridas!
                                         </p>
                                     
                                          
                                       
                                        <p  style="text-align:justify">
                                        A devotee from foreign land was tensely roaming around the place one day. It was so surprising to me, how a devotee can remain restless 
                                        even at this place? He was walking to and fro in front of the place of Bihariji’s appearance (Prakatya Sthal) as if looking for some 
                                            specific thing or place.  </p> 
                                        <a  href="public/aboutTemple_3.aspx#aboutTemple3" class="btn-custom mt-2 mb-2"  title="Click to read more" style="font-weight:bold;font-size:large;padding-top:10px;padding-bottom:10px; padding-left:20px;padding-right:20px;border-radius: 48px;text-decoration:none">Read More</a>
                                        
                                      
                                            
                                    </div>

                                    <div class="carousel-item shadow-lg  bg-white p-4" style="color:#101010">
                                    <h4 style="text-align:left; color: #EE6F2D">Legends in Vrindavan</h4>
                                        <h5> Gopeshwar Mahadev</h5>
                                     <p style="text-align:justify" >  
                                       
                                         On that pleasant night of Sharat Poornima, when Krishna was performing Maharasa on the banks of Yamuna near Vamshivat in Vrindavan, Lord Shiv along with mother Parvati reached their to participate in Rasa. 
                                        </p>  <p style="text-align:justify" >  Mother Parvati was readily granted entryinto Rasa Mandal but Shiv was detained at the outskirts of Vrindavan by Vrinda Devi, the presiding deity of Vrindavan. Vrinda Devi explained to Him, "There is no male in Vrindavan other than Krishna. The spirit of Rasa is to please Raseshwari Shri Radha as a sakhi (friend) so as to maximize the bliss or Rasa Ras. A male devotee, however exalted he may be, can never develop this sakhibhav and is thus not worthy of entering into Rasa Mandal.” Shiv was left with no option but to sit at the entry point of Vrindavan and watching the magnificent Leela of Divinity....
                                        </p>
                                          <a  href="public/aboutTemple_5.aspx" class="btn-custom mt-2 mb-2"  title="Click to read more" style="font-weight:bold;font-size:large;padding-top:10px;padding-bottom:10px; padding-left:20px;padding-right:20px;border-radius: 48px;text-decoration:none">Read More</a>
                                
                         
                           <!-- <%--               
                                        <h4> Guru of Lord Shiv</h4>
                                        <p  style="text-align:justify">
                                        All Vaishnav saints and sages regard Lord Shiv as their eternal Guru because He is the supreme Vaishnav . There is no other Vaishnav who can explain the subtleties of Bhaktiyog or Sadhna so beautifully. But whom Shiv regards as Guru?

                                           As Lalita Devi facilitated his entry into Raas Mandal, Shiv considers Lalita as his Guru. It is worthwhile to remember here that Lalita is not different from Radha, as she is the mirror image and intimate friend of Shri Radha......
 
                                          </p> <a  href="public/aboutTemple.aspx"  style="float:right; text-decoration:none;color:orangered">Read More</a>--%> -->
                                </div>
                                      <div class="carousel-item shadow-lg  bg-white p-4" style="color:#101010">
                                    <h4 style="text-align:left; color: #EE6F2D">Does he eat? When Bihariji eats sweets</h4>
                                     <p style="text-align:justify" >  
                                    As practicing vaishnavas we all have developed a habit of offering to the lord whatever food is prepared in our kitchen. We also solemnly offer bhog in the temples we visit, and partake it as the prasad. Even if we are not at home, may be traveling, or at a friend's place, or in a party we say our silent prayers before we take our meals - Shri Krishnarpanam - whatever I have, is offered to Lord Krishna. The practice has a great practical significance - we shall always be eating healthy, fresh and satvic food as stale or tamsic food can not be offered to the Lord. 
                                       </p>  <p style="text-align:justify" >The important spiritual significance of the practice is derived from the dialogue between sage Valmiki and Lord Rama when latter visited the hermitage during his vanvas (exile in forests) in treta yug. Lord Rama asked the sage -Where should I live? To which the wise sage answered wittily, "You are asking me where should you live? Tell me where you are not and I will show you the place." Further elaborating about Lord's preferred places to live, the sage mentions the heart (or mind) of those who take their food only after offering to you as prasad, is where you reside with devi Sita and brother Laxman.
                                        </p>
                                     
                                             <a  href="public/aboutTemple_4.aspx#dg_2" class="btn-custom mt-2 mb-2"  title="Click to read more" style="font-weight:bold;font-size:large;padding-top:10px;padding-bottom:10px; padding-left:20px;padding-right:20px;border-radius: 48px;text-decoration:none">Read More</a>
                                
                                       
                                        
                                </div>
                                   
                                </div>
                                    
                                    <br />
                                <!-- Carousel controls -->
                                <a class="carousel-control-prev" href="#myCarousel1" data-bs-slide="prev">

                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#myCarousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                               </center>


                    </div>
                    <!-- <%-- <div class="col">
                        </div>--%> -->
                </div>
            </div>
            <!--/-About Mandir---->
            <div class="container-fluid container_1" style="margin-top: 50px">
                <div class="row row-centered pos g-0 ">

                    <div class="col-lg-12 col-xs-12 align-middle subscribecls1" style="min-height: 120px; background: transparent linear-gradient(90deg, #C82090 0%, #6A14D1 100%) 0% 0% no-repeat padding-box; opacity: 1;">
                        <center>
                                <div class="row row-centered pos g-0 align-items-center1 subscribecls2"  >
                                <div class="col-lg-7"  style="font-size:x-large"><h2 class=" fw-normal" >Become a Part of Banke Bihari Ji Community</h2></div>
                                <div class="col-lg-5">
                                    <asp:button ID="lbtnSubscribe" runat="server" Text="SUBSCRIBE NEWSLETTER" CssClass="btn-custom" style="font-weight:bold;font-size:large; padding:10px; width:80%;border-radius: 48px;" OnClick="lbtnSubscribe_Click" ToolTip="Click to subscribe newsletter"></asp:button>

                                </div>
                                </div>
                         </center>
                    </div>

                </div>
            </div>
            <hr />
            <!-- <%-- Festival--%> -->
            <div class="container-fluid container_1" style="margin-top: 50px">

                <div class="row row-centered pos g-0">

                    <div class="col-lg-12 col-xs-12 col-centered  festClsbg" style="min-height: 675px; box-shadow: 0px 6px 15px #00000088; border-radius: 20px; opacity: 1; padding: 20px">
                        <center>
                            <img src="assets/img/box-header-caligraphy.svg" alt="Shri Radhey" class="img-fluid" />
                                <h2><asp:Label ID="lblFestivalHeader" runat="server">   </asp:Label></h2>
                               
                            

                                    
                                 <div class="row row-centered pos mt-3 p-0">
                                     <!-- <%--  <div class="col-lg-6 col-xs-6 col-centered">--%> -->
                                            <div class="col-sm-6 center-image d-none d-sm-block" >
                                          <img src="assets/img/box-festiival-image.jpg" style="border-radius: 10px; " class="img-fluid" />
                                     </div>
                                      <!-- <%-- <div class="col-lg-6 col-xs-6 col-centered" style="padding-right:40px">--%> -->
                                      <div class="col-xs-12 col-sm-6 col-centered" style="padding-right:40px;">
                                       <asp:Repeater ID="rptrFestivals" runat="server" OnItemCommand="rptrFestivals_ItemCommand">
                                                        <ItemTemplate> 
                                                            <asp:LinkButton ID="btn" runat="server" style="text-decoration:none;" >
                                                          <div class="row g-0 text-dark bg-transparent">
                                            <div class="col-md-4" >
                                                <div class="card mb-3" style="max-width: 100px;padding:5px">
                                                    <asp:HiddenField ID="hndFestID" runat="server" Value='<%#Eval("p_festival_page")%>'/>
                                                    
                                                       
                                                    <h1 style="color: #D11B1B;text-shadow: 0px 3px 6px #00000029; opacity: 1;font-size:xxx-large"><asp:Label ID="lblFestivalDayNo_1" runat="server" Text='<%#Eval("p_festivalDayNo")%>'></asp:Label><br /></h1>
                                                            <small style="font-size:16pt; margin-top:-10px;font: Roboto;letter-spacing: 0px;color: #D11B1B;opacity: 1;">
                                                                <asp:Label ID="lblFestivalDayName_1" runat="server" Text='<%#Eval("p_festivalDayName")%>'></asp:Label>
                                                                </small>
                                                            </div>
                                                    </div>
                                                    <div class="col-md-8 bg-transparent festCls" >
                                                      <div class="card-body bg-transparent text-white">
                                                        <h4 class="card-title"> 
                                                            <asp:Label ID="lblFestivalName_1" runat="server" Text='<%#Eval("p_festival_name")%>'></asp:Label>
                                                        </h4>
                                                        <p class="card-text"> <%#Eval("p_festival_details")%><br /><%#Eval("p_festival_day_indian_calender")%></p>
                                                        <br />
                                                      </div>
                                                    </div>
                                               </div>
                                                            </asp:LinkButton>
                                                 </ItemTemplate>
                                                      </asp:Repeater>
                                           <asp:button ID="btnFestivals" OnClick="btnFestivals_Click" runat="server" Text="VIEW ALL FESTIVALS" CssClass="btn-custom" style="font-size:large;font-weight:bold;   margin-top :50px; padding:10px; width:80%;border-radius: 48px;" ToolTip="Click to know about festivals"></asp:button>
                                        </div>

                                            <!-- <%-- <div class="row g-0 text-dark bg-transparent mt-3">
                                                <div class="col-md-4">
                                                 <div class="card mb-3" style="max-width: 100px;padding:5px">
                                                <h1 style="color: #D11B1B;text-shadow: 0px 3px 6px #00000029;opacity: 1">13<br />
                                                   </h1>  <small style="font-size:12pt; margin-top:-10px;font: Roboto;letter-spacing: 0px;color: #D11B1B;opacity: 1;">November</small>
                                                        </div>
                                                </div>
                                                <div class="col-md-8 bg-transparent " style="text-align:left; padding-left:20px">
                                                  <div class="card-body bg-transparent text-white">
                                                    <h5 class="card-title">Roop Chaturdashi</h5>
                                                    <p class="card-text">Chhoti Deepavali<br />Kartik Krishna Chaturdashi</p>
      
     
                                                </div>
                                              </div>
                                            </div>

                                            <div class="row g-0 text-dark bg-transparent mt-3">
                                                <div class="col-md-4">
                                                 <div class="card mb-3" style="max-width: 100px; padding:5px">
                                                <h1 style="color: #D11B1B;text-shadow: 0px 3px 6px #00000029;opacity: 1">
                                                    14<br /></h1>
                                                     <small style="font-size:12pt; margin-top:-10px;font: Roboto;letter-spacing: 0px;color: #D11B1B;opacity: 1;">November</small>
                                                        </div>
                                                </div>
                                                <div class="col-md-8 bg-transparent " style="text-align:left; padding-left:20px">
                                                  <div class="card-body bg-transparent text-white">
                                                    <h5 class="card-title">Deepavali</h5>
                                                    <p class="card-text">Deepmalika, Lakshmi Poojan<br />Kartik Krishna Amavasya</p>
      
     
                                                </div>
                                              </div>
                                            </div>--%> -->
                                            
                                   
                                     </div>
                                    <!-- <%-- </div>--%> -->
                               

                            </center>


                    </div>

                </div>
            </div>
            <!-- <%-- </Festival>--%> -->


            <!--//------------------------------------------->

            <div class="container-fluid  container_1" style="margin-top: 50px">

                <div class="row row-centered pos g-0">

                    <div class="col-lg-12 col-xs-12 col-centered  gallarycontainer" style="background: transparent linear-gradient(180deg, #FFB01C 0%, #A80404 100%) 0% 0% no-repeat padding-box; box-shadow: 0px 6px 15px #00000088; border-radius: 20px; opacity: 1;">
                        <center>
                            <img src="assets/img/box-header-caligraphy.svg"alt="Shri Radhey" />
                            <h2>GALLERY</h2>
                                <div class="btn-container">
                                    <label class="switch btn-color-mode-switch">
                                        <input type="checkbox" name="cbGallery" id="cbGallery" value="0" onclick="javascript: return gallery_showhhideDiv(this);"/>
                                        <label for="cbGallery" data-on="VIDEO" data-off="PHOTO" class="btn-color-mode-switch-inner"></label>
                                    </label>
                                 
                                </div>
                                <div class="row row-centered pos mt-2" style="padding-left:0px;padding-right:0px;" id="dvPhoto">
                  
                                  <div class="col-lg-12 col-xs-12 col-centered " style="min-height:650px;" id="divPhotoGallery">
                                   <!-- Gallery -->
                                    <div class="row" style="min-height:650px;"  runat="server">
                                      <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                    
                                           <img src="assets/img/gallery7.jpg" class="w-100 shadow-1-strong rounded mb-4 img-fluid"   style="height:220px"/>

                                       
                                           <img src="assets/img/gallery10.jpg" class="w-100 shadow-1-strong rounded mb-4 img-fluid"   style="height:400px"/>
                                      </div>

                                      <div class="col-lg-4 mb-4 mb-lg-0">
                                  
                                        <img src="assets/img/gallery1.jpg" class="w-100 shadow-1-strong rounded mb-4 img-fluid" style="height:400px"/>
                                   
                                          <img src="assets/img/gallery4.jpg"  class="w-100 shadow-1-strong rounded mb-4  img-fluid" alt="Shri Radhe"/>
                                      </div>

                                      <div class="col-lg-4 mb-4 mb-lg-0">
                                      
                                      <img src="assets/img/gallery3.jpg" class="w-100 shadow-1-strong rounded mb-4  img-fluid" />

                                      
                                           <img src="assets/img/gallery8.jpg" class="w-100 shadow-1-strong rounded mb-4  img-fluid"  style="height:400px;"/>
                                      </div>
                                    </div>
                                    <asp:button ID="btnPhotoMore" runat="server" Text="VIEW MORE IMAGES" CssClass="btn-custom" style="font-weight:bold;font-size:large;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px; border-radius: 48px;margin-top:20px" OnClick="btnPhotoMore_Click" ToolTip="Click to view more images"></asp:button>
                                 </div>
                                     <div class="col-lg-12 col-xs-12 col-centered " style="min-height:400px;" id="divPhotoGalleryMobile">
                                   <!-- Gallery -->
                                    <div class="row" style="min-height:350px;"  runat="server">
                                      

                                      <div class="col" style="padding-right:1%">
                                  <img src="assets/img/gallery4.jpg"  class="w-100  mb-2  img-fluid  " alt="Shri Radhe"  style="height:35%;border: 2px solid #FFFFFF;
border-radius: 10px;background: #9B610F 0% 0% no-repeat padding-box;"/>
                                        <img src="assets/img/gallery1.jpg" class="w-100 shadow-1-strong rounded mb-2 img-fluid" style="height:65%;border: 2px solid #FFFFFF;
border-radius: 10px;background: #9B610F 0% 0% no-repeat padding-box;" />
                                   
                                          
                                      </div>

                                      <div class="col" style="padding-left:1%">
                                           <img src="assets/img/gallery8.jpg" class="w-100 shadow-1-strong rounded mb-2 img-fluid" style="height:65%;border: 2px solid #FFFFFF;
border-radius: 10px;background: #9B610F 0% 0% no-repeat padding-box;"  />
                                      
                                      <img src="assets/img/gallery3.jpg" class="w-100 shadow-1-strong rounded mb-2  img-fluid" style="height:35%;border: 2px solid #FFFFFF;
border-radius: 10px;background: #9B610F 0% 0% no-repeat padding-box;" />

                                      
                                          
                                      </div>
                                    </div>
                                    <asp:button ID="Button1" runat="server" Text="VIEW MORE IMAGES" CssClass="btn-custom" style="font-weight:bold;font-size:large;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px; border-radius: 48px;margin-top:20px" OnClick="btnPhotoMore_Click" ToolTip="Click to view more images" ></asp:button>
                                 
                                      
                                     </div>
                                </div>
                                <div class="row row-centered pos mt-2" style="opacity: 1;padding-left:50px;padding-right:50px;display:none; " id="dvVideo">
                                            <div class="col-lg-12 col-xs-12 col-centered " >
                                     
                                            <div class="row"  >
                                                <div class="col-lg-12 justify-content-center">
                                                    <a href="#myModal" style="text-decoration: none;" data-toggle="modal">
                                                        <img ID="imgVideo1" runat="server" class="rounded1 d-block" style="width:65%" />
                                                    </a>
                                                </div>
                                            </div>
                                                 <br />
                                            <div class="row mt-2" >
                                            <div class="col-lg-4 col-md-4 mb-lg-0">
                                              
                                                 <a href="#myModal" style="text-decoration: none;" data-toggle="modal">
                                                        <img ID="imgVideo2" runat="server" class="rounded1 d-block" style="width:100%" />
                                                    </a>
                                            </div>
                                             <div class="col-lg-4 col-md-4 mb-lg-0">
                                                 <a href="#myModal" style="text-decoration: none;" data-toggle="modal">
                                                        <img ID="imgVideo3" runat="server" class="rounded1 d-block" style="width:100%" />
                                                    </a>
                                                
                                               
                                            </div>
                                                <div class="col-lg-4 col-md-4 mb-lg-0">
                                                     <a href="#myModal" style="text-decoration: none;" data-toggle="modal">
                                                        <img ID="imgVideo4" runat="server" class="rounded1 d-block" style="width:100%" />
                                                    </a>
                                                  
                                            </div>
                                                 
                                        </div>
                                                    
                                                <asp:button ID="btnVideoMore" runat="server" Text="VIEW MORE VIDEOS" CssClass="btn-custom" style="font-weight:bold;font-size:large;padding-left:20px;padding-right:20px;padding-top:10px;padding-bottom:10px; border-radius: 48px;margin-top:20px;margin-bottom:20px" OnClick="btnVideoMore_Click" ToolTip="Click to view more videos"></asp:button>
                                           </div>
                                            

                                        </div>
                            </center>


                    </div>

                </div>
            </div>

            <!-- End Gallery -->



            <!-- <%--  Kathat--%> -->
            <div class="container-fluid  container_1" style="margin-top: 50px">

                <div class="row row-centered pos g-0">

                    <div class="col-lg-12 col-xs-12 col-centered kathacls" style="min-height: 675px; opacity: 1;">
                        <center>
                            <img src="assets/img/box-header-caligraphy.svg"alt="Shri Radhey" />
                                <h2 id="kathabhajan">SHRI BANKE BIHARI JI BHAJAN & KATHA</h2>
                               <asp:UpdatePanel runat="server">
                         <ContentTemplate> 


                             <div class="btn-container">
                                <label class="switch btn-color-mode-switch">
                                    <asp:CheckBox ID="cbKathaBhajans" runat="server"  OnCheckedChanged="cbKathaBhajans_CheckedChanged" AutoPostBack="true" Checked="true" />
                                  <label for="cbKathaBhajans" data-on="KATHA" data-off="BHAJAN" class="btn-color-mode-switch-inner"></label>
                                </label>
                            </div>
                       
                                <div class="row row-centered pos mt-2 kathacls1" style="opacity: 1;backdrop-filter: blur(10px);-webkit-backdrop-filter: blur(10px);" >
                                     
                                       <div class="col-lg-12 col-xs-12 col-centered  pt-4" style="min-height:450px; background-image:url('assets/img/box-bhajan-katha-image.jpg');background-size: cover;">
                                          <div runat="server" id="tblBhajans">
                                            <table class="table borderless table-responsive kathacls2" style="color:white; " >
                                                 <tr class="align-middle">
                                                  
                                                    <td style="text-align:left; padding-left:15px;width:60%;vertical-align:top; ">01 - Doha</td>
                                                    <td style="text-align:center;vertical-align:top;"> 00:23 &nbsp;&nbsp;&nbsp;
                                                      <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">  <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Doha', 'media/BhajanKatha/Bhajan_1_Dohas.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_1_Dohas.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                        &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  onclick="javascript: opendialogeKBDtls(1);"><i class="fa fa-info-circle"></i></a>

                                                    </td>
                                                   

                                               </tr>
                                              <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left; padding-left:15px;width:60%;vertical-align:top;">02 - Aarti  </td>
                                                    <td style="text-align:center;vertical-align:top;">03:28&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">     <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Aarti-1', 'media/BhajanKatha/Bhajan_2_Aarti.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_2_Aarti.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                   &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  onclick="javascript: opendialogeKBDtls(2);" ><i class="fa fa-info-circle"></i></a></td>

                                               </tr>
                                               <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;  padding-left:15px;width:60%;vertical-align:top;">03 - Bhajan</td>
                                                    <td style="text-align:center;vertical-align:top;">04:20&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">    <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Bhajan', 'media/BhajanKatha/Bhajan_3_Aarti.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_3_Aarti.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                  &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  ><i class="fa fa-info-circle"   onclick="javascript: opendialogeKBDtls(3);"></i></a></td>

                                               </tr>
                                                <!------>
                                                <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;  padding-left:15px;width:60%;vertical-align:top;">04 - Ashtadash Siddhant Part 1</td>
                                                    <td style="text-align:center;vertical-align:top;">16:04&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">    <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Ashtadash Siddhant Part 1', 'media/BhajanKatha/Bhajan_4_Ashtadash_1.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_4_Ashtadash_1.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                  &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  ><i class="fa fa-info-circle"   onclick="javascript: opendialogeKBDtls(4);"></i></a></td>

                                               </tr>
                                                <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;  padding-left:15px;width:60%;vertical-align:top;">05 - Ashtadash Siddhant Part 2</td>
                                                    <td style="text-align:center;vertical-align:top;">17:26&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">    <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Ashtadash Siddhant Part 2', 'media/BhajanKatha/Bhajan_5_Ashtadash_2.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_5_Ashtadash_2.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                  &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  ><i class="fa fa-info-circle"   onclick="javascript: opendialogeKBDtls(5);"></i></a></td>

                                               </tr>
                                                <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;  padding-left:15px;width:60%;vertical-align:top;">06 - Shri Kelimalji Part 1</td>
                                                    <td style="text-align:center;vertical-align:top;">14:22&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">    <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Kelimalji Part 1', 'media/BhajanKatha/Bhajan_6_Kelimalji_1.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_6_Kelimalji_1.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                  &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  ><i class="fa fa-info-circle"   onclick="javascript: opendialogeKBDtls(6);"></i></a></td>

                                               </tr>
                                                <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;  padding-left:15px;width:60%;vertical-align:top;">07 - Shri Kelimalji Part 2</td>
                                                    <td style="text-align:center;vertical-align:top;">16:18&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">    <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Kelimalji Part 2', 'media/BhajanKatha/Bhajan_7_Kelimalji_2.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_7_Kelimalji_2.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                  &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  ><i class="fa fa-info-circle"   onclick="javascript: opendialogeKBDtls(7);"></i></a></td>

                                               </tr>
                                                <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;  padding-left:15px;width:60%;vertical-align:top;">08 - Shri Kunj Bihari Ashtak</td>
                                                    <td style="text-align:center;vertical-align:top;">04:58&nbsp;&nbsp;&nbsp;
                                                    <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">    <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Kunj Bihari Ashtak', 'media/BhajanKatha/Bhajan_8_Ashtak.mp3');"><i class="fa fa-play-circle"></i></span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Bhajan_8_Ashtak.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                  &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  ><i class="fa fa-info-circle"   onclick="javascript: opendialogeKBDtls(8);"></i></a></td>

                                               </tr>

                                          </table>
                                               </div>
                                            <div runat="server" id="tblkatha">
                                           <table class="table borderless table-responsive kathacls2" style="color:white; height:100% ;"  >
                                               <tr class="align-middle">
                                                  
                                                    <td style="text-align:left; width:60% ; vertical-align:top;">01 - Shri Krishna Janma Katha</td>
                                                    <td style="text-align:center;vertical-align:top;"> 28:02 &nbsp;&nbsp;&nbsp;
                                                      <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">   <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Krishna Janma Katha', 'media/BhajanKatha/Katha_1_ShriKrishnaJanma.mp3');"><i class="fa fa-play-circle"></i>   </span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_1_ShriKrishnaJanma.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                   &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  onclick="javascript: opendialogeKBDtls(9);"><i class="fa fa-info-circle"></i></a>

                                                    </td>
                                                    </tr>
                                               <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left; width:60% ; vertical-align:top;">02 - Introduction to Shri Kunj Bihari Ashtak </td>
                                                    <td style="text-align:center;vertical-align:top;">09:00&nbsp;&nbsp;&nbsp;
                                                       
                                                        <a href="#myModal1" style="text-decoration: none;" data-toggle="modal"><span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Kunj Bihari Ashtak Katha', 'media/BhajanKatha/Katha_2_ShriKunjBihariAshtak.mp3');"><i class="fa fa-play-circle"></i>   </span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_2_ShriKunjBihariAshtak.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                   &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"   href="#myModal2"  data-toggle="modal"   onclick="javascript: opendialogeKBDtls(10);"><i class="fa fa-info-circle"></i></a></td>

                                               </tr>

                                               <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;width:60% ;vertical-align:top; ">03 - Introduction to Shri Kelimalji  </td>
                                                    <td style="text-align:center;vertical-align:top;">11:19&nbsp;&nbsp;&nbsp;
                                                      <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">
                                                        <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Kelimalji Katha', 'media/BhajanKatha/Katha_3_1_Kelimalji.mp3');"><i class="fa fa-play-circle"></i>   </span></a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_3_1_Kelimalji.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                   &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"   href="#myModal2"  data-toggle="modal"   onclick="javascript: opendialogeKBDtls(11);"><i class="fa fa-info-circle"></i></a></td>

                                               </tr>

                                               
                                               <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;width:60% ;vertical-align:top; "> 04 - Introduction to Ashtadash Siddhant (Part 1)</td>
                                                    <td style="text-align:center;vertical-align:top;"> 10:32&nbsp;&nbsp;&nbsp;
                                                     <a href="#myModal1" style="text-decoration: none;" data-toggle="modal"> <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Ashtadash Siddhant Katha(Part 1) ', 'media/BhajanKatha/Katha_4_1_AshtadashSidhant.mp3');"><i class="fa fa-play-circle"></i>   </span></a>
                                                      &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_4_1_AshtadashSidhant.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a> 
                                                   &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"   onclick="javascript: opendialogeKBDtls(12);" ><i class="fa fa-info-circle"></i></a></td>

                                               </tr>
                                               <tr  class="align-middle">
                                                  <td style="text-align:left;width:60%;vertical-align:top; "> 05 - Introduction to Ashtadash Siddhant (Part 2)</td>
                                                    <td style="text-align:center;vertical-align:top;"> 06:36&nbsp;&nbsp;&nbsp;
                                                  <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">   <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Ashtadash Siddhant Katha(Part 2) ', 'media/BhajanKatha/Katha_4_2_AshtadashSidhant.mp3');"><i class="fa fa-play-circle"></i>   </span></a>
                                                     &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_4_2_AshtadashSidhant.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a> 
                                               &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"  href="#myModal2"  data-toggle="modal"  onclick="javascript: opendialogeKBDtls(13);" ><i class="fa fa-info-circle"></i></a></td>
                                               </tr>
                                               <tr  class="align-middle">
                                                    <td style="text-align:left;width:60%;vertical-align:top; "> 06 - Shri Goverdhan Katha</td>
                                                    <td style="text-align:center;vertical-align:top;"> 41:10&nbsp;&nbsp;&nbsp;
                                                  <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">   <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Shri Goverdhan Katha ', 'media/BhajanKatha/Katha_5_GoverdhanPoojan.mp3');"><i class="fa fa-play-circle"></i></span> </a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_5_GoverdhanPoojan.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a> 
                                               &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"   href="#myModal2"  data-toggle="modal"   onclick="javascript: opendialogeKBDtls(14);"><i class="fa fa-info-circle"></i></a> </td>   
                                               </tr>
                                               <tr  class="align-middle">
                                                  
                                                    <td style="text-align:left;width:60%;vertical-align:top; "> 07 - Holi Katha</td>
                                                    <td style="text-align:center;vertical-align:top;"> 21:16&nbsp;&nbsp;&nbsp;
                                                      <a href="#myModal1" style="text-decoration: none;" data-toggle="modal">  <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Holi Katha ', 'media/BhajanKatha/Katha_6_Holi.mp3');"><i class="fa fa-play-circle"></i></span> </a>
                                                        &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_6_Holi.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a> 
                                                   &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"   href="#myModal2"  data-toggle="modal"   onclick="javascript: opendialogeKBDtls(15);" ><i class="fa fa-info-circle"></i></a></td>

                                               </tr>
                                               <tr class="align-middle">
                                                <td style="text-align:left;width:60%;vertical-align:top; ">08 - Raas Lila Katha</td>
                                                <td style="text-align:center;vertical-align:top;"> 30:25 &nbsp;&nbsp;&nbsp;
                                                 <a href="#myModal1" style="text-decoration: none;" data-toggle="modal"> <span  style=" cursor: pointer;" title="Please click to play"  onclick="javascript: opendialoge('Raas Lila ', 'media/BhajanKatha/Katha_7_RaasLila.mp3');"><i class="fa fa-play-circle"></i></span>  </a>
                                                  &nbsp;<a title="Please click here to download" href="media/BhajanKatha/Katha_7_RaasLila.mp3" style="text-decoration:none;" download ><i class="fa fa-download"></i></a>
                                                 &nbsp;<a title="Please click here to view details"  style="text-decoration:none;"   href="#myModal2"  data-toggle="modal"  onclick="javascript: opendialogeKBDtls(16);"><i class="fa fa-info-circle"></i></a></td>
                                               </tr>
                                              
     
                                           </table>
                                              </div>
                                          
                                     </div>
                                     </div>
                             </ContentTemplate>
                     </asp:UpdatePanel>
                             </center>


                    </div>

                </div>
            </div>

            <!-- <%-- Section : Contact US--%> -->
            <div class="container-fluid container_1" style="margin-top: 50px">
                <div class="row row-centered pos g-0 ">

                    <div class="col-lg-12 col-xs-12 align-middle subscribecls1" style="min-height: 120px; background: transparent linear-gradient(90deg, #C82090 0%, #6A14D1 100%) 0% 0% no-repeat padding-box; opacity: 1;">
                        <center>
                                <div class="row row-centered pos g-0 align-items-center1 contactus1"  >
                                <div class="col-lg-6 " style="text-align:center; font-size:large"><h2 class="fw-normal" >How to Contact Us?</h2></div>
                                <div class="col-lg-6" style="text-align:center">
                                    <asp:button ID="lbtnContactUs" runat="server" Text="CONTACT US" CssClass="btn-custom" style="font-weight:bold;font-size:large; padding:10px; width:50%;border-radius: 48px;" OnClick="lbtnContactUs_Click" ToolTip="Click to contact us"></asp:button>

                                </div>
                                    </div>
                                </center>
                    </div>

                </div>

            </div>


            <!-- Footer-->

            <footer class="footer text-center mt-5 mb-5" style="background: transparent linear-gradient(180deg, #B82308 0%, #F18306 100%) 0% 0% no-repeat padding-box; opacity: 1; padding-top: 10px; padding-left: 10px; padding-bottom: 10px; ">
                <div class="container_f" style="background-image: url('assets/img/page-background-caligraphy.svg'); height: 440px;">
                    <div class="row" style="width: 100%">
                        <!-- Footer Location-->
                        <div class="col-lg-5 mb-lg-0  mx-auto shfooter mb-1">

                            <h5 class="font-weight-bold d-none d-md-block fw-normal" style="text-align: left; margin-left: -20px; margin-top: 10px;">ABOUT THAKURJI</h5>
                            <div class="d-md-none title" data-target="#BROWSE" data-toggle="collapse">
                                <div class="mt-3 font-weight-bold h5" style="background-color: #F18306; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 20px">
                                    <div class="float-left navbar-toggler h5">
                                        <i class="fas  fa-plus"></i>
                                        <i class="fas  fa-minus"></i>
                                    </div>
                                    ABOUT THAKURJI
                                   
                                </div>
                            </div>

                            <ul class="link-list-wrapper-class collapse ul_footer" id="BROWSE" style="text-align: left;">
                                <li><a href="public/aboutTemple.aspx#1a" style="text-decoration: none; color: white; text-align: left;" title="Click to visit">Appearance of Thakur Shri Banke Bihariji Maharaj</a></li>
                                <li><a href="public/aboutTemple_1.aspx" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Who was Swami Shri Haridas?</a></li>
                                <li><a href="public/aboutTemple_5.aspx" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Legends of Vrindavan
                                </a></li>
                                <li><a href="public/aboutTemple_4.aspx" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Bihariji Ki Leela </a></li>

                                <li><a href="public/aboutTemple_3.aspx#aboutTemple3" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Swami Ram Krishna Paramhansa visit to Nidhivan</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-3 mb-lg-0  mx-auto shfooter">

                            <h5 class="font-weight-bold d-none d-md-block fw-normal" style="text-align: left; margin-left: -20px; margin-top: 10px;">ABOUT MANDIR</h5>
                            <div class="d-md-none title  pl-2" data-target="#EXPLORE" data-toggle="collapse">
                                <div class="font-weight-bold h5" style="background-color: #F18306; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 20px">
                                    <div class="float-left navbar-toggler h5 ">
                                        <i class="fas  fa-plus"></i>
                                        <i class="fas  fa-minus"></i>
                                    </div>
                                    ABOUT TEMPLE
                                   
                                </div>
                            </div>

                            <ul class="link-list-wrapper-class collapse ul_footer" id="EXPLORE" style="text-align: left;">
                                <li><a href="#darshantiming" style="text-decoration: none; color: white" title="Click to visit">Timings</a></li>
                                <li><a href="public/festivals.aspx#fvl" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Festival Calender</a></li>
                                <li><a href="public/registerfordarshan.aspx" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Register for Darshan</a></li>
                                <li><a href="public/aboutTemple_2.aspx" style="text-decoration: none; color: white" title="Click to visit">Mandir Management</a></li>
                                <li><a href="public/contactUs.aspx#cs" style="text-decoration: none; color: white" title="Click to visit">Contact Us</a></li>


                            </ul>
                        </div>
                        <div class="col-lg-2 mb-lg-0  mx-auto shfooter">

                            <h5 class="font-weight-bold d-none d-md-block fw-normal" style="text-align: left; margin-left: -20px; margin-top: 10px;">MEDIA</h5>
                            <div class="d-md-none title  pl-2" data-target="#MEDIA" data-toggle="collapse">
                                <div class="font-weight-bold h5" style="background-color: #F18306; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 20px">
                                    <div class="float-left navbar-toggler h5 ">
                                        <i class="fas  fa-plus"></i>
                                        <i class="fas  fa-minus"></i>
                                    </div>
                                    MEDIA
                                   
                                </div>
                            </div>

                            <ul class="link-list-wrapper-class collapse ul_footer" id="MEDIA" style="text-align: left;">

                                <li><a href="default.aspx#kathabhajan" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Katha/Bhajan</a> </li>
                                <li><a href="public/photogallery.aspx#pg" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Photo Gallery</a></li>
                                <li><a href="public/videogallery.aspx#vg" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Video Gallery</a></li>
                                <li><a href="public/blogBihariji.aspx#bb" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Blog </a></li>


                            </ul>
                        </div>
                        <div class="col-lg-2 mb-lg-0  mx-auto shfooter  mb-1">

                            <h5 class="font-weight-bold d-none d-md-block fw-normal" style="text-align: left; margin-left: -20px; margin-top: 10px;">IMPORTANT LINKS</h5>
                            <div class="d-md-none title" data-target="#LINKS" data-toggle="collapse">
                                <div class="font-weight-bold h5" style="background-color: #F18306; padding-top: 10px; padding-bottom: 10px; text-align: left; padding-left: 20px">
                                    <div class="float-left navbar-toggler h5 pl-2">
                                        <i class="fas  fa-plus"></i>
                                        <i class="fas  fa-minus"></i>
                                    </div>
                                    IMPORTANT LINKS
                                   
                                </div>
                            </div>

                            <ul class="link-list-wrapper-class collapse ul_footer" id="LINKS" style="text-align: left;">
                                <li><a href="public/donation.aspx" style="text-decoration: none; color: white" title="Click to visit">Donation</a></li>
                                <li><a href="public/subscribenewsletter.aspx" style="text-decoration: none; color: white" title="Click to visit">Newsletter Signup</a></li>
                                <li><a href="public/invitethakurji.aspx#itj" style="text-decoration: none; color: white; text-align: left" title="Click to visit">Invite Thakur Ji</a></li>
                                <li><a href="public/FAQ.aspx#faq" style="text-decoration: none; color: white" title="Click to visit">Frequently Asked Questions(FAQ’s)</a></li>
                                <li><a href="public/termofUse.aspx#tou" style="text-decoration: none; color: white" title="Click to visit">Terms of Use </a></li>
                                <li><a href="public/privacyPolicy.aspx#pp" style="text-decoration: none; color: white" title="Click to visit">Privacy Policy</a></li>
                            </ul>
                        </div>





                    </div>
                    <hr />
                    <p>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/ShriBankeBihariMaharaj/?skip_nax_wizard=true" target="_blank" title="Click to visit"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/#!/ShriBihariji" target="_blank" title="Click to visit">

                            <svg xmlns="http://www.w3.org/2000/svg" height="5em" viewBox="0 0 512 512" class="svgoutline">
                                <style id="svgStyle">
                                    svg {
                                        fill: #f0f0f0;
                                    }
                                </style>
                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                            </svg>
                        </a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/c/shribankeybihariji" target="_blank" title="Click to visit"><i class="fab fa-fw fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/shribankebiharimaharaj" target="_blank" title="Click to visit"><i class="fab fa-fw fa-instagram"></i></a>
                    </p>
                    <p>Copyright © 2012 Official website of Shri Banke Bihariji Mandir (Vrindavan). All rights reserved.</p>
                </div>
            </footer>


        </div>

        <!--Youtube Display--->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog templePopup" style="top: 20px; min-width: 50vw">
                <div class="modal-content" style="min-height: 500px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lblTitle"></h5>
                        <button class="close" type="button" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-black">
                        <div class="row">
                            <div class="col-lg-12" style="border-right: 2px solid #ff5722;">
                                <div class="cards">

                                    <iframe id="iframeYouTube" width="100%" height="415" allow="autoplay" allowfullscreen></iframe>
                                </div>




                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>




        <!----TEST---->
        <div id="myModal1" class="modal fade">
            <div class="modal-dialog templePopup" style="top: 20px;">
                <div class="modal-content" style="min-height: 200px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lblTitle1" style="color: orangered"></h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>


                    </div>
                    <div class="modal-body text-black">
                        <div class="row">
                            <div class="col-lg-4 p-4">

                                <img src="assets/img/HaridasJi.png" style="width: 80%" />
                            </div>
                            <div class="col-lg-8 wrapper vcenter-item p-4" style="vertical-align: middle;">
                                <audio controls id="audio1">
                                    <source id="audiofile1" type="audio/mp3">
                                </audio>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="myModal2" class="modal fade">
            <div class="modal-dialog templePopup" style="top: 20px;">
                <div class="modal-content" style="min-height: 200px;">
                    <div class="modal-header">
                        <h6 class="modal-title" id="lblKBTitle" style="color: orangered"></h6>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>


                    </div>
                    <div class="modal-body text-black">
                        <div class="row">
                            <div class="col-lg-4 p-2">

                                <img src="assets/img/HaridasJi.png" style="width: 80%" />
                            </div>
                            <div class="col-lg-8 wrapper vcenter-item p-2" style="vertical-align: middle;">

                                <span id="lblKBDtls" style="color: orangered"></span>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <!-- Bootstrap core JS-->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script> -->


    
    <!-- Bootstrap core JS-->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="extrajs/bootstrap.min.js"></script>
    <script src="extrajs/jquery.rwdImageMaps.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS
    <script src="js/scripts.js"></script>-->
    <script type="text/javascript">
        $('img[usemap]').rwdImageMaps();
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>



</body>
</html>

