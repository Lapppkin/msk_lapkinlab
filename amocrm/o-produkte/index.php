<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("� �������� - amoCRM");
?>
    <style>
        /*FAQ Styles*/

        .page_content {
            padding: 15px;
            width:   100%;
        }

        .aboutcrm img {
            width: 100%;
        }

        article {
            margin-bottom: 10px;
            text-align:    left;
        }

        section + section {
            margin-top: 10px;
        }

        .faq_left_column h2 {
            border-bottom:  1px solid #efefef;
            padding:        5px 5px 15px 0px;
            text-transform: none;
        }

        h1 {
            position: relative;
        }

        .sales a {
            text-decoration: none;
        }

        .sales li {
            margin-left: 10px;
        }

        .faq_left_column section:last-child {
            margin-bottom: 20px;
        }

        .faq_question {
            padding:               17px 25px;
            font-size:             15px;
            font-family:           Roboto, Helvetica, Arial, sans-serif;
            font-weight:           500;
            text-transform:        uppercase;
            text-decoration:       none;
            cursor:                pointer;
            color:                 #fff;
            background-color:      #006f9f;
            display:               inline-block;
            margin:                20px 0;
            border:                1px #62b4db solid;
            letter-spacing:        1px;
            text-align:            center;
            line-height:           1;
            -webkit-touch-callout: none;
            -webkit-user-select:   none;
            -moz-user-select:      none;
            -ms-user-select:       none;
            user-select:           none;
            box-shadow:            0 1px 3px 0 rgba(0, 0, 0, .23);
        }

        .faq_question:hover {
            background-color: #265884;
        }

        .faq_answer {
            width:       100%;
            text-align:  left;
            line-height: normal;
            color:       #2e2e2e;
            font-size:   16px;
        }


        .content-block__text {
            font-size: 16px;
        }

        table {
            float: none;
            width: 100%;
        }

        .contain {
            display:       flex;
            max-height:    660px;
            margin-bottom: 15px;
        }

        @media (max-width: 1220px) {
            .contain {
                display:    flex;
                max-height: none;
                flex-wrap:  wrap;
            }

            .bottom {
                flex-wrap:       wrap;
                justify-content: center;
            }

            .faq_about_prog article {
                text-align: center;
            }

            .faq_about_prog,
            .create_new_contract {
                width:      100%;
                text-align: center;
                display:    inline-block;

            }

            .right {
                overflow:   auto;
                display:    inline-block;
                width:      100%;
                max-height: 600px;
            }
        }

        .left {
            display:      inline-block;
            width:        100%;
            margin-right: 20px;
        }

        .right {
            overflow: auto;
            display:  inline-block;
            width:    100%;
        }


        table.list th {
            background-color: #339dc8;
            color:            #fff;
            text-transform:   uppercase;
            font-weight:      400;
            border:           none;
            text-align:       left;

        }

        table.list td {
            text-align: left;
            border:     none;
        }


        @media (max-width: 500px) {

            .list tr td:nth-child(2),
            .list tr th:nth-child(2) {
                word-break: break-all;
            }

            .list tr td:nth-child(3),
            .list tr th:nth-child(3) {
                text-align: right;
            }

            .list tr td,
            .list tr th {
                font-size: 13px;
            }

            .list tr td:first-child,
            .list tr th:first-child {
                width: 10px;
            }
        }

        .content-block ul li:before {
            color: #339dc8;
        }


        .faq_left_column .faq_question {

            font-size:             18px;
            font-family:           Roboto, Helvetica, Arial, sans-serif;
            font-weight:           300;
            text-decoration:       none;
            cursor:                pointer;
            color:                 #006f9f;
            display:               inline;
            margin:                0;
            border:                none;
            border-bottom:         1px #62b4db dashed;
            letter-spacing:        1px;
            text-align:            center;
            line-height:           1;
            -webkit-touch-callout: none;
            -moz-user-select:      none;
            -ms-user-select:       none;
            user-select:           none;
            background:            none;
            box-shadow:            none;
            padding:               0;
            text-transform:        none;
        }

        .faq_left_column ul {
            padding-left: 10px;
            margin:       10px 0 0;
        }

        .faq_left_column ul li {
            padding-left:  0;
            margin-bottom: 5px;
        }

        .faq_left_column ul li:last-of-type {
            margin-bottom: 0;
        }

        .faq_left_column li:before {
            display: none;
        }

        .article-list a {
            text-decoration: none;
        }

        .faq-container {
            display:   flex;
            flex-wrap: wrap;
        }

        .faq-container .faq_left_column h2 {
            margin: 0;
        }

        .left-side {
            margin-right: 80px;
        }

        .left-side,
        .right-side {
            min-width: 320px;
        }


        #rules h1 {
            font-size:   40px;
            font-weight: 400;
            text-align:  center;
        }

        #rules ol {
            list-style-type: decimal;
        }

        #rules li {
            margin:     15px 20px;
            list-style: none;
        }

        #rules b {
            font-weight: 500;
        }

        #rules span.circle {
            background-color: #3f90bb;
            border-radius:    100%;
            color:            #fff;
            margin-right:     10px;
            box-sizing:       border-box;
            display:          inline-block;
            width:            30px;
            height:           30px;
            text-align:       center;
            line-height:      1.9;
        }

        @media (max-width: 500px) {
            #rules h1 {
                font-size: 24px;
            }

            #rules li {
                margin: 15px 10px;
            }

            #rules span.circle {
                line-height: 1.5;
                width:       20px;
                height:      20px;
            }
        }

        .direct-link {
            text-decoration: none;
        }

        .last-release {
            transition:            background-color .1s ease;
            font-size:             15px;
            font-family:           Roboto, Helvetica, Arial, sans-serif;
            text-transform:        uppercase;
            z-index:               5;
            letter-spacing:        1px;
            text-align:            center;
            line-height:           1;
            cursor:                pointer;
            -webkit-touch-callout: none;
            -webkit-user-select:   none;
            -moz-user-select:      none;
            -ms-user-select:       none;
            user-select:           none;
            border:                1px solid #f287a0;
            border-radius:         5px;
            background-color:      #e92150;
            box-shadow:            0 1px 3px 0 rgba(0, 0, 0, .23);
            font-weight:           500;
            color:                 #fff;
            text-decoration:       none;
            padding:               17px 20px;
            padding-left:          57px;
            margin:                10px 0;
            display:               inline-block;
            position:              relative;
        }

        .last-release:before {
            content:           '';
            display:           block;
            width:             0;
            height:            0;
            position:          absolute;
            left:              20px;
            top:               50%;
            -webkit-transform: translateY(-50%);
            transform:         translateY(-50%);
            border-style:      solid;
            border-width:      10px 0 10px 18px;
            border-color:      transparent transparent transparent #fff;
        }


        @media (max-width: 1920px) {

            .last-release {
                font-size:    18px;
                padding:      20px 22px;
                padding-left: 70px;
            }

            .last-release:before {
                border-width: 12px 0 12px 22px;
                left:         30px;
            }
        }

        .tabs {
            margin-bottom: 25px !important;
        }

        .tab {
            cursor:           pointer !important;
            padding:          10px !important;
            display:          inline-block !important;
            z-index:          2 !important;
            position:         relative !important;
            background-color: #c7ccd0 !important;
            font-size:        18px !important;
            font-weight:      200 !important;
            margin:           0 0 5px 5px !important;
            line-height:      1 !important;
            color:            #fff !important;
            text-align:       center !important;
            white-space:      nowrap !important;
            vertical-align:   baseline !important;
            border-radius:    .25em !important;
        }

        .tab-wrapper .active {
            background-color: #339dc8 !important;
            color:            #fff !important;
        }


        .aboutcrm blockquote:before,
        .aboutcrm blockquote:after {
            display: none;
        }

        .aboutcrm blockquote {
            margin:     30px auto;
            box-sizing: border-box;
            width:      70%;
            text-align: center;
        }

        .aboutcrm .callout {
            border:           none !important;
            border-left:      5px solid #efb312 !important;
            padding:          25px 65px;
            margin:           30px auto;
            color:            #7f8081;
            position:         relative;
            font-style:       normal;
            background-color: #fcf8e3;
            text-align:       left;
        }


        .aboutcrm .blue {
            border:           none !important;
            border-left:      5px solid #339dc8 !important;
            padding:          25px 65px;
            margin:           30px auto;
            color:            #7f8081;
            position:         relative;
            font-style:       normal;
            background-color: #d9edf7;
            text-align:       left;
        }

        .aboutcrm img {
            display: block;
            margin:  20px auto 30px;
        }

        .aboutcrm p,
        .aboutcrm li {
            margin-bottom: 12px;
            color:         #2e2e2e;
            font-size:     18px;
        }

        .aboutcrm h1 {
            display:       block;
            margin-top:    40px;
            margin-bottom: 18px;
            color:         #2e2e2e;
            font-weight:   700;
            font-size:     30px;
        }

        .aboutcrm b {
            color:       #2e2e2e;
            font-weight: 700;
        }

        i {
            font-style: italic;
        }

        .intl-tel-input {
            position: relative;
            display:  inline-block
        }

        .intl-tel-input * {
            box-sizing:      border-box;
            -moz-box-sizing: border-box
        }

        .intl-tel-input .hide {
            display: none
        }

        .intl-tel-input .v-hide {
            visibility: hidden
        }

        .intl-tel-input input,
        .intl-tel-input input[type=text],
        .intl-tel-input input[type=tel] {
            position:      relative;
            z-index:       0;
            margin-top:    0 !important;
            margin-bottom: 0 !important;
            padding-left:  48px;
            margin-left:   0;
            transition:    background-color 100ms ease-out
        }

        .intl-tel-input input.iti-invalid-key {
            transition:       background-color 0s;
            background-color: #FFC7C7
        }

        .intl-tel-input .flag-container {
            position: absolute;
            top:      0;
            bottom:   0;
            padding:  1px
        }

        .intl-tel-input .flag-container:hover {
            cursor: pointer
        }

        .intl-tel-input .flag-container:hover .selected-flag {
            background-color: rgba(0, 0, 0, 0.05)
        }

        .intl-tel-input input[disabled] + .flag-container:hover,
        .intl-tel-input input[readonly] + .flag-container:hover {
            cursor: default
        }

        .intl-tel-input input[disabled] + .flag-container:hover .selected-flag,
        .intl-tel-input input[readonly] + .flag-container:hover .selected-flag {
            background-color: transparent
        }

        .intl-tel-input .selected-flag {
            z-index:  1;
            position: relative;
            width:    42px;
            height:   100%;
            padding:  0 0 0 8px
        }

        .intl-tel-input .selected-flag .iti-flag {
            position: absolute;
            top:      0;
            bottom:   0;
            margin:   auto
        }

        .intl-tel-input .selected-flag .iti-arrow {
            position:     absolute;
            top:          50%;
            margin-top:   -2px;
            right:        4px;
            width:        0;
            height:       0;
            border-left:  3px solid transparent;
            border-right: 3px solid transparent;
            border-top:   4px solid #555
        }

        .intl-tel-input .selected-flag .iti-arrow.up {
            border-top:    none;
            border-bottom: 4px solid #555
        }

        .intl-tel-input .country-list {
            list-style:       none;
            position:         absolute;
            z-index:          2;
            padding:          0;
            margin:           0 0 0 -1px;
            box-shadow:       1px 1px 4px rgba(0, 0, 0, 0.2);
            background-color: white;
            border:           1px solid #CCC;
            white-space:      nowrap;
            max-height:       200px;
            overflow-y:       scroll
        }

        .intl-tel-input .country-list.dropup {
            bottom:        100%;
            margin-bottom: -1px
        }

        .intl-tel-input .country-list .flag-box {
            display: inline-block;
            width:   20px
        }

        @media (max-width: 500px) {
            .intl-tel-input .country-list {
                white-space: normal
            }
        }

        .intl-tel-input .country-list .divider {
            padding-bottom: 5px;
            margin-bottom:  5px;
            border-bottom:  1px solid #CCC
        }

        .intl-tel-input .country-list .country {
            padding: 5px 10px
        }

        .intl-tel-input .country-list .country .dial-code {
            color: #999
        }

        .intl-tel-input .country-list .country.highlight {
            background-color: rgba(0, 0, 0, 0.05)
        }

        .intl-tel-input .country-list .flag-box,
        .intl-tel-input .country-list .country-name,
        .intl-tel-input .country-list .dial-code {
            vertical-align: middle
        }

        .intl-tel-input .country-list .flag-box,
        .intl-tel-input .country-list .country-name {
            margin-right: 6px
        }

        .intl-tel-input select {
            position: absolute;
            top:      0;
            left:     0;
            z-index:  1;
            width:    42px;
            height:   100%;
            opacity:  0
        }

        .intl-tel-input.iti-container {
            position: absolute;
            top:      -1000px;
            left:     -1000px;
            z-index:  1060;
            padding:  1px
        }

        .intl-tel-input.iti-container:hover {
            cursor: pointer
        }

        .iti-flag {
            width: 20px
        }

        .iti-flag.be {
            width: 18px
        }

        .iti-flag.ch {
            width: 15px
        }

        .iti-flag.mc {
            width: 19px
        }

        .iti-flag.ne {
            width: 18px
        }

        .iti-flag.np {
            width: 13px
        }

        .iti-flag.va {
            width: 15px
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {
                background-size: 5630px 15px
            }
        }

        .iti-flag.ac {
            height:              10px;
            background-position: 0px 0px
        }

        .iti-flag.ad {
            height:              14px;
            background-position: -22px 0px
        }

        .iti-flag.ae {
            height:              10px;
            background-position: -44px 0px
        }

        .iti-flag.af {
            height:              14px;
            background-position: -66px 0px
        }

        .iti-flag.ag {
            height:              14px;
            background-position: -88px 0px
        }

        .iti-flag.ai {
            height:              10px;
            background-position: -110px 0px
        }

        .iti-flag.al {
            height:              15px;
            background-position: -132px 0px
        }

        .iti-flag.am {
            height:              10px;
            background-position: -154px 0px
        }

        .iti-flag.ao {
            height:              14px;
            background-position: -176px 0px
        }

        .iti-flag.aq {
            height:              14px;
            background-position: -198px 0px
        }

        .iti-flag.ar {
            height:              13px;
            background-position: -220px 0px
        }

        .iti-flag.as {
            height:              10px;
            background-position: -242px 0px
        }

        .iti-flag.at {
            height:              14px;
            background-position: -264px 0px
        }

        .iti-flag.au {
            height:              10px;
            background-position: -286px 0px
        }

        .iti-flag.aw {
            height:              14px;
            background-position: -308px 0px
        }

        .iti-flag.ax {
            height:              13px;
            background-position: -330px 0px
        }

        .iti-flag.az {
            height:              10px;
            background-position: -352px 0px
        }

        .iti-flag.ba {
            height:              10px;
            background-position: -374px 0px
        }

        .iti-flag.bb {
            height:              14px;
            background-position: -396px 0px
        }

        .iti-flag.bd {
            height:              12px;
            background-position: -418px 0px
        }

        .iti-flag.be {
            height:              15px;
            background-position: -440px 0px
        }

        .iti-flag.bf {
            height:              14px;
            background-position: -460px 0px
        }

        .iti-flag.bg {
            height:              12px;
            background-position: -482px 0px
        }

        .iti-flag.bh {
            height:              12px;
            background-position: -504px 0px
        }

        .iti-flag.bi {
            height:              12px;
            background-position: -526px 0px
        }

        .iti-flag.bj {
            height:              14px;
            background-position: -548px 0px
        }

        .iti-flag.bl {
            height:              14px;
            background-position: -570px 0px
        }

        .iti-flag.bm {
            height:              10px;
            background-position: -592px 0px
        }

        .iti-flag.bn {
            height:              10px;
            background-position: -614px 0px
        }

        .iti-flag.bo {
            height:              14px;
            background-position: -636px 0px
        }

        .iti-flag.bq {
            height:              14px;
            background-position: -658px 0px
        }

        .iti-flag.br {
            height:              14px;
            background-position: -680px 0px
        }

        .iti-flag.bs {
            height:              10px;
            background-position: -702px 0px
        }

        .iti-flag.bt {
            height:              14px;
            background-position: -724px 0px
        }

        .iti-flag.bv {
            height:              15px;
            background-position: -746px 0px
        }

        .iti-flag.bw {
            height:              14px;
            background-position: -768px 0px
        }

        .iti-flag.by {
            height:              10px;
            background-position: -790px 0px
        }

        .iti-flag.bz {
            height:              14px;
            background-position: -812px 0px
        }

        .iti-flag.ca {
            height:              10px;
            background-position: -834px 0px
        }

        .iti-flag.cc {
            height:              10px;
            background-position: -856px 0px
        }

        .iti-flag.cd {
            height:              15px;
            background-position: -878px 0px
        }

        .iti-flag.cf {
            height:              14px;
            background-position: -900px 0px
        }

        .iti-flag.cg {
            height:              14px;
            background-position: -922px 0px
        }

        .iti-flag.ch {
            height:              15px;
            background-position: -944px 0px
        }

        .iti-flag.ci {
            height:              14px;
            background-position: -961px 0px
        }

        .iti-flag.ck {
            height:              10px;
            background-position: -983px 0px
        }

        .iti-flag.cl {
            height:              14px;
            background-position: -1005px 0px
        }

        .iti-flag.cm {
            height:              14px;
            background-position: -1027px 0px
        }

        .iti-flag.cn {
            height:              14px;
            background-position: -1049px 0px
        }

        .iti-flag.co {
            height:              14px;
            background-position: -1071px 0px
        }

        .iti-flag.cp {
            height:              14px;
            background-position: -1093px 0px
        }

        .iti-flag.cr {
            height:              12px;
            background-position: -1115px 0px
        }

        .iti-flag.cu {
            height:              10px;
            background-position: -1137px 0px
        }

        .iti-flag.cv {
            height:              12px;
            background-position: -1159px 0px
        }

        .iti-flag.cw {
            height:              14px;
            background-position: -1181px 0px
        }

        .iti-flag.cx {
            height:              10px;
            background-position: -1203px 0px
        }

        .iti-flag.cy {
            height:              13px;
            background-position: -1225px 0px
        }

        .iti-flag.cz {
            height:              14px;
            background-position: -1247px 0px
        }

        .iti-flag.de {
            height:              12px;
            background-position: -1269px 0px
        }

        .iti-flag.dg {
            height:              10px;
            background-position: -1291px 0px
        }

        .iti-flag.dj {
            height:              14px;
            background-position: -1313px 0px
        }

        .iti-flag.dk {
            height:              15px;
            background-position: -1335px 0px
        }

        .iti-flag.dm {
            height:              10px;
            background-position: -1357px 0px
        }

        .iti-flag.do {
            height:              13px;
            background-position: -1379px 0px
        }

        .iti-flag.dz {
            height:              14px;
            background-position: -1401px 0px
        }

        .iti-flag.ea {
            height:              14px;
            background-position: -1423px 0px
        }

        .iti-flag.ec {
            height:              14px;
            background-position: -1445px 0px
        }

        .iti-flag.ee {
            height:              13px;
            background-position: -1467px 0px
        }

        .iti-flag.eg {
            height:              14px;
            background-position: -1489px 0px
        }

        .iti-flag.eh {
            height:              10px;
            background-position: -1511px 0px
        }

        .iti-flag.er {
            height:              10px;
            background-position: -1533px 0px
        }

        .iti-flag.es {
            height:              14px;
            background-position: -1555px 0px
        }

        .iti-flag.et {
            height:              10px;
            background-position: -1577px 0px
        }

        .iti-flag.eu {
            height:              14px;
            background-position: -1599px 0px
        }

        .iti-flag.fi {
            height:              12px;
            background-position: -1621px 0px
        }

        .iti-flag.fj {
            height:              10px;
            background-position: -1643px 0px
        }

        .iti-flag.fk {
            height:              10px;
            background-position: -1665px 0px
        }

        .iti-flag.fm {
            height:              11px;
            background-position: -1687px 0px
        }

        .iti-flag.fo {
            height:              15px;
            background-position: -1709px 0px
        }

        .iti-flag.fr {
            height:              14px;
            background-position: -1731px 0px
        }

        .iti-flag.ga {
            height:              15px;
            background-position: -1753px 0px
        }

        .iti-flag.gb {
            height:              10px;
            background-position: -1775px 0px
        }

        .iti-flag.gd {
            height:              12px;
            background-position: -1797px 0px
        }

        .iti-flag.ge {
            height:              14px;
            background-position: -1819px 0px
        }

        .iti-flag.gf {
            height:              14px;
            background-position: -1841px 0px
        }

        .iti-flag.gg {
            height:              14px;
            background-position: -1863px 0px
        }

        .iti-flag.gh {
            height:              14px;
            background-position: -1885px 0px
        }

        .iti-flag.gi {
            height:              10px;
            background-position: -1907px 0px
        }

        .iti-flag.gl {
            height:              14px;
            background-position: -1929px 0px
        }

        .iti-flag.gm {
            height:              14px;
            background-position: -1951px 0px
        }

        .iti-flag.gn {
            height:              14px;
            background-position: -1973px 0px
        }

        .iti-flag.gp {
            height:              14px;
            background-position: -1995px 0px
        }

        .iti-flag.gq {
            height:              14px;
            background-position: -2017px 0px
        }

        .iti-flag.gr {
            height:              14px;
            background-position: -2039px 0px
        }

        .iti-flag.gs {
            height:              10px;
            background-position: -2061px 0px
        }

        .iti-flag.gt {
            height:              13px;
            background-position: -2083px 0px
        }

        .iti-flag.gu {
            height:              11px;
            background-position: -2105px 0px
        }

        .iti-flag.gw {
            height:              10px;
            background-position: -2127px 0px
        }

        .iti-flag.gy {
            height:              12px;
            background-position: -2149px 0px
        }

        .iti-flag.hk {
            height:              14px;
            background-position: -2171px 0px
        }

        .iti-flag.hm {
            height:              10px;
            background-position: -2193px 0px
        }

        .iti-flag.hn {
            height:              10px;
            background-position: -2215px 0px
        }

        .iti-flag.hr {
            height:              10px;
            background-position: -2237px 0px
        }

        .iti-flag.ht {
            height:              12px;
            background-position: -2259px 0px
        }

        .iti-flag.hu {
            height:              10px;
            background-position: -2281px 0px
        }

        .iti-flag.ic {
            height:              14px;
            background-position: -2303px 0px
        }

        .iti-flag.id {
            height:              14px;
            background-position: -2325px 0px
        }

        .iti-flag.ie {
            height:              10px;
            background-position: -2347px 0px
        }

        .iti-flag.il {
            height:              15px;
            background-position: -2369px 0px
        }

        .iti-flag.im {
            height:              10px;
            background-position: -2391px 0px
        }

        .iti-flag.in {
            height:              14px;
            background-position: -2413px 0px
        }

        .iti-flag.io {
            height:              10px;
            background-position: -2435px 0px
        }

        .iti-flag.iq {
            height:              14px;
            background-position: -2457px 0px
        }

        .iti-flag.ir {
            height:              12px;
            background-position: -2479px 0px
        }

        .iti-flag.is {
            height:              15px;
            background-position: -2501px 0px
        }

        .iti-flag.it {
            height:              14px;
            background-position: -2523px 0px
        }

        .iti-flag.je {
            height:              12px;
            background-position: -2545px 0px
        }

        .iti-flag.jm {
            height:              10px;
            background-position: -2567px 0px
        }

        .iti-flag.jo {
            height:              10px;
            background-position: -2589px 0px
        }

        .iti-flag.jp {
            height:              14px;
            background-position: -2611px 0px
        }

        .iti-flag.ke {
            height:              14px;
            background-position: -2633px 0px
        }

        .iti-flag.kg {
            height:              12px;
            background-position: -2655px 0px
        }

        .iti-flag.kh {
            height:              13px;
            background-position: -2677px 0px
        }

        .iti-flag.ki {
            height:              10px;
            background-position: -2699px 0px
        }

        .iti-flag.km {
            height:              12px;
            background-position: -2721px 0px
        }

        .iti-flag.kn {
            height:              14px;
            background-position: -2743px 0px
        }

        .iti-flag.kp {
            height:              10px;
            background-position: -2765px 0px
        }

        .iti-flag.kr {
            height:              14px;
            background-position: -2787px 0px
        }

        .iti-flag.kw {
            height:              10px;
            background-position: -2809px 0px
        }

        .iti-flag.ky {
            height:              10px;
            background-position: -2831px 0px
        }

        .iti-flag.kz {
            height:              10px;
            background-position: -2853px 0px
        }

        .iti-flag.la {
            height:              14px;
            background-position: -2875px 0px
        }

        .iti-flag.lb {
            height:              14px;
            background-position: -2897px 0px
        }

        .iti-flag.lc {
            height:              10px;
            background-position: -2919px 0px
        }

        .iti-flag.li {
            height:              12px;
            background-position: -2941px 0px
        }

        .iti-flag.lk {
            height:              10px;
            background-position: -2963px 0px
        }

        .iti-flag.lr {
            height:              11px;
            background-position: -2985px 0px
        }

        .iti-flag.ls {
            height:              14px;
            background-position: -3007px 0px
        }

        .iti-flag.lt {
            height:              12px;
            background-position: -3029px 0px
        }

        .iti-flag.lu {
            height:              12px;
            background-position: -3051px 0px
        }

        .iti-flag.lv {
            height:              10px;
            background-position: -3073px 0px
        }

        .iti-flag.ly {
            height:              10px;
            background-position: -3095px 0px
        }

        .iti-flag.ma {
            height:              14px;
            background-position: -3117px 0px
        }

        .iti-flag.mc {
            height:              15px;
            background-position: -3139px 0px
        }

        .iti-flag.md {
            height:              10px;
            background-position: -3160px 0px
        }

        .iti-flag.me {
            height:              10px;
            background-position: -3182px 0px
        }

        .iti-flag.mf {
            height:              14px;
            background-position: -3204px 0px
        }

        .iti-flag.mg {
            height:              14px;
            background-position: -3226px 0px
        }

        .iti-flag.mh {
            height:              11px;
            background-position: -3248px 0px
        }

        .iti-flag.mk {
            height:              10px;
            background-position: -3270px 0px
        }

        .iti-flag.ml {
            height:              14px;
            background-position: -3292px 0px
        }

        .iti-flag.mm {
            height:              14px;
            background-position: -3314px 0px
        }

        .iti-flag.mn {
            height:              10px;
            background-position: -3336px 0px
        }

        .iti-flag.mo {
            height:              14px;
            background-position: -3358px 0px
        }

        .iti-flag.mp {
            height:              10px;
            background-position: -3380px 0px
        }

        .iti-flag.mq {
            height:              14px;
            background-position: -3402px 0px
        }

        .iti-flag.mr {
            height:              14px;
            background-position: -3424px 0px
        }

        .iti-flag.ms {
            height:              10px;
            background-position: -3446px 0px
        }

        .iti-flag.mt {
            height:              14px;
            background-position: -3468px 0px
        }

        .iti-flag.mu {
            height:              14px;
            background-position: -3490px 0px
        }

        .iti-flag.mv {
            height:              14px;
            background-position: -3512px 0px
        }

        .iti-flag.mw {
            height:              14px;
            background-position: -3534px 0px
        }

        .iti-flag.mx {
            height:              12px;
            background-position: -3556px 0px
        }

        .iti-flag.my {
            height:              10px;
            background-position: -3578px 0px
        }

        .iti-flag.mz {
            height:              14px;
            background-position: -3600px 0px
        }

        .iti-flag.na {
            height:              14px;
            background-position: -3622px 0px
        }

        .iti-flag.nc {
            height:              10px;
            background-position: -3644px 0px
        }

        .iti-flag.ne {
            height:              15px;
            background-position: -3666px 0px
        }

        .iti-flag.nf {
            height:              10px;
            background-position: -3686px 0px
        }

        .iti-flag.ng {
            height:              10px;
            background-position: -3708px 0px
        }

        .iti-flag.ni {
            height:              12px;
            background-position: -3730px 0px
        }

        .iti-flag.nl {
            height:              14px;
            background-position: -3752px 0px
        }

        .iti-flag.no {
            height:              15px;
            background-position: -3774px 0px
        }

        .iti-flag.np {
            height:              15px;
            background-position: -3796px 0px
        }

        .iti-flag.nr {
            height:              10px;
            background-position: -3811px 0px
        }

        .iti-flag.nu {
            height:              10px;
            background-position: -3833px 0px
        }

        .iti-flag.nz {
            height:              10px;
            background-position: -3855px 0px
        }

        .iti-flag.om {
            height:              10px;
            background-position: -3877px 0px
        }

        .iti-flag.pa {
            height:              14px;
            background-position: -3899px 0px
        }

        .iti-flag.pe {
            height:              14px;
            background-position: -3921px 0px
        }

        .iti-flag.pf {
            height:              14px;
            background-position: -3943px 0px
        }

        .iti-flag.pg {
            height:              15px;
            background-position: -3965px 0px
        }

        .iti-flag.ph {
            height:              10px;
            background-position: -3987px 0px
        }

        .iti-flag.pk {
            height:              14px;
            background-position: -4009px 0px
        }

        .iti-flag.pl {
            height:              13px;
            background-position: -4031px 0px
        }

        .iti-flag.pm {
            height:              14px;
            background-position: -4053px 0px
        }

        .iti-flag.pn {
            height:              10px;
            background-position: -4075px 0px
        }

        .iti-flag.pr {
            height:              14px;
            background-position: -4097px 0px
        }

        .iti-flag.ps {
            height:              10px;
            background-position: -4119px 0px
        }

        .iti-flag.pt {
            height:              14px;
            background-position: -4141px 0px
        }

        .iti-flag.pw {
            height:              13px;
            background-position: -4163px 0px
        }

        .iti-flag.py {
            height:              11px;
            background-position: -4185px 0px
        }

        .iti-flag.qa {
            height:              8px;
            background-position: -4207px 0px
        }

        .iti-flag.re {
            height:              14px;
            background-position: -4229px 0px
        }

        .iti-flag.ro {
            height:              14px;
            background-position: -4251px 0px
        }

        .iti-flag.rs {
            height:              14px;
            background-position: -4273px 0px
        }

        .iti-flag.ru {
            height:              14px;
            background-position: -4295px 0px
        }

        .iti-flag.rw {
            height:              14px;
            background-position: -4317px 0px
        }

        .iti-flag.sa {
            height:              14px;
            background-position: -4339px 0px
        }

        .iti-flag.sb {
            height:              10px;
            background-position: -4361px 0px
        }

        .iti-flag.sc {
            height:              10px;
            background-position: -4383px 0px
        }

        .iti-flag.sd {
            height:              10px;
            background-position: -4405px 0px
        }

        .iti-flag.se {
            height:              13px;
            background-position: -4427px 0px
        }

        .iti-flag.sg {
            height:              14px;
            background-position: -4449px 0px
        }

        .iti-flag.sh {
            height:              10px;
            background-position: -4471px 0px
        }

        .iti-flag.si {
            height:              10px;
            background-position: -4493px 0px
        }

        .iti-flag.sj {
            height:              15px;
            background-position: -4515px 0px
        }

        .iti-flag.sk {
            height:              14px;
            background-position: -4537px 0px
        }

        .iti-flag.sl {
            height:              14px;
            background-position: -4559px 0px
        }

        .iti-flag.sm {
            height:              15px;
            background-position: -4581px 0px
        }

        .iti-flag.sn {
            height:              14px;
            background-position: -4603px 0px
        }

        .iti-flag.so {
            height:              14px;
            background-position: -4625px 0px
        }

        .iti-flag.sr {
            height:              14px;
            background-position: -4647px 0px
        }

        .iti-flag.ss {
            height:              10px;
            background-position: -4669px 0px
        }

        .iti-flag.st {
            height:              10px;
            background-position: -4691px 0px
        }

        .iti-flag.sv {
            height:              12px;
            background-position: -4713px 0px
        }

        .iti-flag.sx {
            height:              14px;
            background-position: -4735px 0px
        }

        .iti-flag.sy {
            height:              14px;
            background-position: -4757px 0px
        }

        .iti-flag.sz {
            height:              14px;
            background-position: -4779px 0px
        }

        .iti-flag.ta {
            height:              10px;
            background-position: -4801px 0px
        }

        .iti-flag.tc {
            height:              10px;
            background-position: -4823px 0px
        }

        .iti-flag.td {
            height:              14px;
            background-position: -4845px 0px
        }

        .iti-flag.tf {
            height:              14px;
            background-position: -4867px 0px
        }

        .iti-flag.tg {
            height:              13px;
            background-position: -4889px 0px
        }

        .iti-flag.th {
            height:              14px;
            background-position: -4911px 0px
        }

        .iti-flag.tj {
            height:              10px;
            background-position: -4933px 0px
        }

        .iti-flag.tk {
            height:              10px;
            background-position: -4955px 0px
        }

        .iti-flag.tl {
            height:              10px;
            background-position: -4977px 0px
        }

        .iti-flag.tm {
            height:              14px;
            background-position: -4999px 0px
        }

        .iti-flag.tn {
            height:              14px;
            background-position: -5021px 0px
        }

        .iti-flag.to {
            height:              10px;
            background-position: -5043px 0px
        }

        .iti-flag.tr {
            height:              14px;
            background-position: -5065px 0px
        }

        .iti-flag.tt {
            height:              12px;
            background-position: -5087px 0px
        }

        .iti-flag.tv {
            height:              10px;
            background-position: -5109px 0px
        }

        .iti-flag.tw {
            height:              14px;
            background-position: -5131px 0px
        }

        .iti-flag.tz {
            height:              14px;
            background-position: -5153px 0px
        }

        .iti-flag.ua {
            height:              14px;
            background-position: -5175px 0px
        }

        .iti-flag.ug {
            height:              14px;
            background-position: -5197px 0px
        }

        .iti-flag.um {
            height:              11px;
            background-position: -5219px 0px
        }

        .iti-flag.us {
            height:              11px;
            background-position: -5241px 0px
        }

        .iti-flag.uy {
            height:              14px;
            background-position: -5263px 0px
        }

        .iti-flag.uz {
            height:              10px;
            background-position: -5285px 0px
        }

        .iti-flag.va {
            height:              15px;
            background-position: -5307px 0px
        }

        .iti-flag.vc {
            height:              14px;
            background-position: -5324px 0px
        }

        .iti-flag.ve {
            height:              14px;
            background-position: -5346px 0px
        }

        .iti-flag.vg {
            height:              10px;
            background-position: -5368px 0px
        }

        .iti-flag.vi {
            height:              14px;
            background-position: -5390px 0px
        }

        .iti-flag.vn {
            height:              14px;
            background-position: -5412px 0px
        }

        .iti-flag.vu {
            height:              12px;
            background-position: -5434px 0px
        }

        .iti-flag.wf {
            height:              14px;
            background-position: -5456px 0px
        }

        .iti-flag.ws {
            height:              10px;
            background-position: -5478px 0px
        }

        .iti-flag.xk {
            height:              15px;
            background-position: -5500px 0px
        }

        .iti-flag.ye {
            height:              14px;
            background-position: -5522px 0px
        }

        .iti-flag.yt {
            height:              14px;
            background-position: -5544px 0px
        }

        .iti-flag.za {
            height:              14px;
            background-position: -5566px 0px
        }

        .iti-flag.zm {
            height:              14px;
            background-position: -5588px 0px
        }

        .iti-flag.zw {
            height:              10px;
            background-position: -5610px 0px
        }

        .iti-flag {
            width:               20px;
            height:              15px;
            box-shadow:          0px 0px 1px 0px #888;
            background-image:    url("../img/flags.png");
            background-repeat:   no-repeat;
            background-color:    #DBDBDB;
            background-position: 20px 0
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {
                background-image: url("../img/flags@2x.png")
            }
        }

        .iti-flag.np {
            background-color: transparent
        }

        .video {
            width:   100%;
            padding: 20px 0 30px;
        }

        .videoWrapper {
            position:       relative;
            padding-bottom: 56.25%;
            padding-top:    25px;
            height:         0;
        }

        .videoWrapper iframe {
            position: absolute;
            top:      0;
            left:     0;
            width:    100%;
            height:   100%;
        }


        @media (max-width: 650px) {
            .aboutcrm .callout,
            .aboutcrm .blue {
                padding: 25px 45px;
                width:   100%;
            }
        }
    </style>

    <section class="integration">
        <div class="container">
            <div class="row">

                <div class="page_content">
                    <section class="page_section">
                        <div class="page_section__inner">
                            <div class="content-block content-block_grey">
                                <div class="partner_id" style="text-align:right;">
                                    <span class="id_partner">��� ID ����ͨ�� AMOSTART: 25652845</span>
                                </div>
                                <div class="content-block__inner">
                                    <script src="//www.amocrm.ru/bitrix/components/qsoft/partners.private.faq/templates/.default/script.js?1555498428"
                                            type="text/javascript"></script>
                                    <div class="content-block__text aboutcrm">
                                        <h1>��� �������</h1>
                                    </div>
                                    <div class="content-block__text">

                                        <div class="tab-wrapper">

                                            <div class="tabs2">
                                                <span class="tab active">��� ����� CRM?</span>
                                                <span class="tab">���������� amoCRM</span>
                                            </div>
                                            <div class="tab_content">

                                                <div class="tab_item aboutcrm" style="display: block;">

                                                    <p>���������������� �������� ��� ����, ����� ���� ��������� ���������������� ����� ������ �������,
                                                        ��������� ��� �����������. ��� �� � �������� � ���, ����� ���� ��������
                                                        �������. ������ �� ��� ��� ��������������� � ���������, �� ������� ����, � ������� � ����� �������,
                                                        ������-�� ����� ����� ������� ��� ��������� ������������� � ������������
                                                        �������� � �����. � ���� ������ �� ������ ���������������� ����������� CRM, � ����� ����������, ���
                                                        ���������� ����� �������� �� � ����� ��������� �������.</p>

                                                    <blockquote class="callout">
                                                        <p> CRM-������� (Customer Relationship Management ��� ���������� ����������� � ���������) � ���
                                                            ���������� ����������� ����������� ��� ��������, ��������������� ���
                                                            ������������� �������������� � ���������. ������ ������������ ��� ��������� ������ ������,
                                                            ����������� ���������� � ��������� ������������ �������� ����� ����������
                                                            ���������� � �������� � ������� ��������������� � ����, ������������ � ���������
                                                            ������-���������, ������������ ������� �����������.
                                                        </p>
                                                    </blockquote>
                                                    <div class="h1">��� ��� ��� ������ ��� CRM</div>

                                                    <p>� 80-90 ��., ����� ������� ������� ��������������� � ��������� ��� �� ������������, ������� �
                                                        ����������� �������� ��������� �� ������� �����. </p>
                                                    <img src="//www.amocrm.ru/partners/private/content_files/blog_images/blogpic1.png" border="0">
                                                    <p>���� ����, ���� ��������� ���������� � ���������. ��������� ���� ������ � ��������� ��������, ���-��
                                                        �������, ���-�� ����� ��������, ���- �� �������� �� �������. �����
                                                        ����, �� ������ ��������� �� ����� ����� �������� �� ��� ���. ��� ����� ������� ���������� ������
                                                        ������ ��������, � ������ �������, �� ������������ � ������ �������
                                                        ������� �� ����������. ����� � �������� <i>����� ����������� ��������</i>, � ��� �������� ������
                                                        ������� ��������� ������ ������ ����� ����������. ������ ���������� �������
                                                        � ������ ������ ������ � ��������� ������ �� ������ ����. </p>

                                                    <p>� �� ����� �������� ������� ���������� ���� ������ ������ �� ��������, ���� � ��, ��� ������
                                                        ��������� ����������� � ������� �������� ���������� ��� ������ �������. �
                                                        ������ �������� ���������� ��, ���� ��������� ������ �� ������ �����-��������������. </p>

                                                    <p>� ����� �������, ���� ���� ������� � ����������, �� �� �� ��������� �������, ������� ���������� �
                                                        ������� �� ������. ������ � ������ �������, � ����� �������� ��������
                                                        ��������� ������� �� ���������. ������� �� ����� ������������� � �� � �����. ������ ����
                                                        ������������ ���� � ����������� (������ � ���������� ����� ��������), � ��
                                                        �������. ����� ������� ����� � ����� �������� ������� ��������, ����� ������� ����� ������� � �
                                                        ��������, ������� ������� ������, ���������� �� � ���. </p>
                                                    <img src="//www.amocrm.ru/partners/private/content_files/blog_images/blogpic2.png" border="0">
                                                    <p>���������� ����� ���������� ����������� ����������, ���������� � ����� ��������� ����� �����������
                                                        ������ � ���������. ������ ��� ������ ������ ����� ����� ��� �
                                                        ����������: ��� ��� ����� � ������� ��� ���, ��� �� �����, ����� �� �����, ��� ����� ��������, ��� �
                                                        ��� ����� �� ��� ������. ��������� ������������������ ��������������
                                                        �������, call-������ � ������������� ���� ������, ����� ��������� � ������������ �������� � ������
                                                        �������� ���, ������ �� ������������. </p>

                                                    <div class="h1">������� ����������������, ������ ������������</div>

                                                    <p>������� ����� �������� � ����� �������. �� ������ ����������� "��������" ������� � �����, �����������
                                                        � ��������, �������� � �����������. ������� �����
                                                        �������� � ����� ������ �� ������������ � ����������. ��������, ����������� (������������!) ��������
                                                        � ������� ����������, ���������� ��������� � ������� ���������. ������
                                                        ���������� � �� ������� ����� � �����, ��� ����� ���������� ����� ������ �������� ��� ��������
                                                        ������ �� ����������� ������. �� ����������, ��������� ������ ��������� ��
                                                        ������� ������� ������� ��������, ������� � ������� ����� ����������� ��������� ��� ������������� �
                                                        �� �� �����. </p>

                                                    <p>Customer Relationship Management ��� ������� ���������� ����������� � ���������. ����������
                                                        ����������, ������-�� ����������� ��������, ������� �������, ������
                                                        �������� ���, ��� ��������� �����, ��� ������� �������� � �����������. ���� ��������� ��������,
                                                        ����� �������� ������� ���������� �������, ������� ������������ �������
                                                        �������, � � ���������� �������� ������ ��� � ���������� �����������.</p>

                                                    <p>��� ������ ������ �� �������? ������ �������� ������? �� ������ ����������� ������ �������� �������
                                                        ���������? ��������� CRM �������� �������� ������ �� ������ ��������,
                                                        ������ ��� ������� ������� � �������� ������ �������������� �������. </p>
                                                    <blockquote class="blue">
                                                        <p><b> ����� �� ������� CRM � ��������, � �� ��������� � ������ � ���, ������������ ������������� ��
                                                                �����������</b></p>
                                                    </blockquote>
                                                    <p>�������� ��� CRM-������� � �������� � CRM-�������� ����� �������� � ����� ��������. ������ ������
                                                        ����� � ������ ��������� ����������, � ������ � �����������
                                                        ���������������� �����-��������, ���������� �� ��������� ������ � ��� ���� �������. �������, ���
                                                        ������� ���������� ��������� ���������. </p>
                                                    <img src="//www.amocrm.ru/partners/private/content_files/blog_images/blogpic3.png" border="0">
                                                    <div class="h1">��� ������� CRM-�������</div>

                                                    <p>��� ����� ����� ����� CRM? �������, ��� ����� ������� ������ ��� ������ �������. ������ �� ����
                                                        ���������� �������� ����� ���, ��� ������� � ������ �������. ��������
                                                        ������ ���������� � �������������� �� ����. ������ � ����� ����������� �� ���������� ���������
                                                        ������ �� ��������, ������� � ������ ������������ �����������: </p>
                                                    <blockquote class="blue">
                                                        <p><b>������ 1. ��� ����� �������� � �������? ������ ����� ������ ��� ������ ������ ����? </b></p>

                                                        <p>������� �� ���� ������, �� �������, ��������� �� ��� CRM � ERP-�������. </p>

                                                        <p><b>������ 2. ����� �������������� ������ ������ ������ �������? </b></p>

                                                        <p>�� ����� �������, ����� �� ��� ������� ��� ��������������, � ������� ������� ������� ��� �
                                                            ������������ ��������� ����������. </p>
                                                    </blockquote>
                                                    <p>����� ��� ��� ������� ������������� �������, ����� ������, ��� �� ������ ����������� �������. ��� ���
                                                        ����� ������ ���� ������? ������ �� ��� ������� ������� ��� �����
                                                        �������� ������� � ������ ������ ������������������� ���������: </p>

                                                    <ul>
                                                        <li>��� ������ ������������� ������� �������������� � ��������� ��������: � �������� � �������� ���
                                                            � ������? ������ ������� - �������� � �������� - ������ �������� ���
                                                            ������ � �������� �����, ������ - ��� ������ � ��������� ��������.
                                                        </li>

                                                        <li>���� �� ������������� ��������� ����������� ���� ��������� (����� ������� �������� ����� ������
                                                            ���� ����� ����, ��� ������� �� ���� ���������� ���� ��������)?
                                                        </li>

                                                        <li>����� ����� ������ �������� ������ �� ������� �������� ��������� �� ������� (������� ������)?
                                                        </li>

                                                        <li>����� ��������� ���������� �����������: ������������ ���������� ������ ���������� (����������
                                                            �������, ������������ �����) ��� ����� ����� ��������� �� ��������
                                                            (�����������, ������� ������, ��������� ������� �����)?
                                                        </li>

                                                        <li>����� �� ���������� � ��������������� ��������� (������� email-��������, ���������, ���������� �
                                                            1� � ������)?
                                                        </li>
                                                    </ul>

                                                    <p>����� �� ����� �������, ��� �� ����� ����������������� � ������� ���������� � �������. ������
                                                        ��������������� ������� ������������ ���� �������� ������, ����� �������
                                                        �������������� ������� ���������� ���������� ������ ������������� �� ����� �������, � ����������
                                                        �������� ���������� �������������� � ����� ��������. ������� ������ ����
                                                        ������, �� � �� �� ����� ��������, �������� �������������� �������� ��������� �����. </p>

                                                    <p>����� ����� �������� ���� ����� �������. ����� � �������� ���� ����������� ���������� �������
                                                        ������������������� CRM, � ������������ �� ������ ��� ������� �������
                                                        ������� � ��������. Email-�������� ���������� �� ������� �������, ��������� ���� �������, ����
                                                        ������������� CRM ���� �� ���� �������� ���� ����������� ������������. </p>
                                                    <img src="//www.amocrm.ru/partners/private/content_files/blog_images/blogpic5.png" border="0">
                                                    <p>������� ������ ������ ����� ���� ����������. �� ����� ������������ �� ������������� �������, ���� ��
                                                        ��������� �������� ��� ���� ������, �� ��� �� ������� ������-��
                                                        ������������� ������. ������ ��������� ��������� ����� ���������, ��� ��� ����� ����� ����� �����
                                                        ��������, ������������������ ������ �� ���������� CRM-������. ����� ����,
                                                        ���� ��������, ��������������� �� ���������� ���������� CRM-�������. ������ � ������� ������
                                                        ��������� � ��� ��� ���� �������� ������������� ������. </p>

                                                    <div class="h1">��� ���� ��������� CRM-����������</div>

                                                    <p><b>��� ��������� ��������: </b></p>

                                                    <ul>
                                                        <li><i>���������� ������� </i>
                                                            <br>
                                                            �������� �������� ������ ����������� � ������� � ������� ������. ������������� ���������� ������
                                                            �
                                                            �������� ���������� ������. ����� ��������������� �� ����� ��������
                                                            �������.
                                                        </li>

                                                        <li><i>��������� �������� ��������������� ������ </i>
                                                            <br>
                                                            �������������� ���������� ��������� ������� ����������� ���������� ������ � ��������������
                                                            ��������
                                                            ����������� �������� �� ������� ������, ��� ��������� ����������
                                                            ��������� ��������� �������� ��������.
                                                        </li>

                                                        <li><i>���������� ����������� ���������� ������ </i>
                                                            <br>
                                                            ������������� ����� ������ � ��������������� ������� ����� �� ���� ����������� ������ ������
                                                            �������� ������� �������� ������. ���� ������ �� ����������� �������� ��������
                                                            � ������� �� ���, ���� ������ �� ������ � ������� �������� ������ ����������� ���������
                                                            ����������
                                                            �������� � �������� ���� ����������� ��������.
                                                        </li>

                                                        <li><i>�������� �������� </i>
                                                            <br>
                                                            ������������� �������� ������ ��������� ���������������� �������� ��������, �������� �������� �
                                                            ���������� ������������ ������.
                                                        </li>

                                                        <li><i>��������� ������������������ ����������� </i>
                                                            <br>
                                                            ���������� �������������, ����������� ������������ � �������� ������ � ���������� ���������
                                                            ���������� ������������ ������� �����.
                                                        </li>
                                                        <img src="//www.amocrm.ru/partners/private/content_files/blog_images/blogpic4.png" border="0">
                                                        <p><b>��� ���������� ������ � ���������: </b></p>

                                                        <li><i>�������� �������� �� ������ ��������� </i>
                                                            <br>
                                                            �������� �������� ���������� �� ���� ������������� �������� ��������, ������������� ���� ������
                                                            ��
                                                            ���������� ��������, ������������� �������� ����������� ������.
                                                            ��������� ������� ��������� ������� ����� ������ �� ������ �������.
                                                        </li>

                                                        <li><i>��������� �������� ������� </i>
                                                            <br>
                                                            ������ ���������� � ������� ��������� ����� ����� ���������������� ��������� ��������� � �����
                                                            ���������� ����������� ������ ��� ������� ��������. �� ���������
                                                            ������������� �� ������ �������������� ������ ��������� � �������� ��������� � ��������.
                                                        </li>

                                                        <li><i>��������� ����������������� ������� </i>
                                                            <br>
                                                            �������������� �������� ������� �������� � ���������, ������� ������ ����� � ������������
                                                            ������������� ����������, ������������ ���������� �������� � ���, ������ �������
                                                            � ����������� ������ ��������� ��������, ���������� � ��� ����������������� � ����� ������� �
                                                            �������� �������� ������ ����������� � �������������� � ���.
                                                        </li>

                                                        <li><i>��������� ���������� �������� &nbsp;&nbsp;</i>
                                                            <br>
                                                            ������� ������ ���� ������� ������������� ���� ��������� � ���������, ������� ������� ����������
                                                            �������������� � ��������� � �������� �������������� ��������.
                                                        </li>

                                                        <li><i>���������� �������� ���� &nbsp;&nbsp;</i>
                                                            <br>
                                                            ��������� ������� � ��������� ������ ����� ���� ������� ������ ������� ��� ��������������
                                                            ��������
                                                            ��� ������. � ���������� ���������� ����������� ���������� ������� �����
                                                            �������� ��� ������ (cross-selling � up-selling).
                                                        </li>
                                                    </ul>

                                                    <div class="h1">� ��� �� ��������?</div>

                                                    <p>����� ����� ������ � ��������, ��� CRM ������ �� �������, �� ����� �������� ������. </p>

                                                    <p>�������� � �������� ��� CRM. � �������� �������� ���������, ����� ������ ������� �� 5 �������
                                                        ����������. � �������� ����������� �������: ����� ������� � ��������
                                                        ��������� �� �������� ���������� ������ � ������� ���� ������ �� ������ ������. </p>

                                                    <p>�������� � � �������, ������� ���������. �������� �� ����� ��������� ���� ��������������, �������
                                                        ������ ������ �� ����������� ������������������ ������� ������ �
                                                        ���������. � �������� ���� CRM. </p>

                                                    <p>��� �������� ������� ����� ������. </p>

                                                    <p>����, ������ ����� ��������� ���������, ��������� ������ � ��� ��������. ��� ���������� ������? </p>

                                                    <p>� �������� � �������� ������ ������, ������ ����������� �������, ����������� �������, ����������� �
                                                        ������ �� ��������� ����, ����� ������ �������� ��. �����,
                                                        ����������� ���������� = 18 ����� (10 ��� � ������, 5 ��� � ���������� ��, 3 ��� � ��������
                                                        ���������� � Ex�el � ������������). </p>

                                                    <p>� �������� � �������� ������ ������, �� ����� ������ ������������ ���������� � CRM � ����� ����������
                                                        ������ �ϻ, �� ��������� ��������� � 2 ����� ��������
                                                        ������ � ���������. �����, ����������� ���������� = 10 �����. </p>

                                                    <p>�����, �� �������� 8 ����� ������� �� ����� ������. �� ���� ����� 50% ������� ��������� �� ����
                                                        ������. </p>

                                                    <p>��������, �������� �������, ����������� ����������� ������� � ��� ��, ��� ������� ���� ������ �����
                                                        ������ ������������ ���� ����� ��������� ������� ������� ������.
                                                    </p>

                                                    <p>� ��� ��� ���� ������, ��������� ����������� ����� ��������<b> �� � ����� ��������� CRM</b>. </p>
                                                    <div class="video">
                                                        <div class="videoWrapper">
                                                            <iframe src="https://www.youtube.com/embed/7dSXEQMqBY8" allowfullscreen="" frameborder="0"></iframe>
                                                        </div>
                                                    </div>
                                                    <p>�������� ������� � ����� ������ ���� ������. � ��������� ������ ����������� �� ����������� �����
                                                        ����� ������. ������ �������� ��� �� ����� ������� ���� ������ ���
                                                        ����������� ����������� - �������� ������������� �� ���� ������������ �����������, � ��� ����� �
                                                        ��������� ������ � ���������, ��������� ������ �������. � ��� ��� ���
                                                        ������� CRM. </p>

                                                    <p>�� CRM �������� ������� �������. �����-�� ������� ��������� ���������� ��������, � ������ ���������
                                                        ����������� ����� ����� ���������� ��������� �����������. �������
                                                        ������������ ���������� �����, ��� ���� ���������������, ������������ ��� ���� �����������
                                                        �����������. ��������� ���������� � ���� ������������ ������ ��� ������� ��������
                                                        ������, ������������ ������������� �� ������ ��� ����� ������������ ��� ��������� �������, �������
                                                        ������������ ��������������� � ������� ������, � CRM ��������� ��������
                                                        ���� ���� ����� ����������� ������ � ��������. ��������, ��������� ���������� CRM, ������ �� ������
                                                        ��������� ����� �����������. </p>

                                                </div>

                                                <div class="tab_item algorythm" style="display: none;">

                                                    <div class="faq-container">
                                                        <div class="left-side">

                                                            <div class="faq_left_column">
                                                                <h2>������ � amoCRM</h2>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">����������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_customer/">��������
                                                                                        ����������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/231170747-%D0%9F%D0%BE%D0%BA%D1%83%D0%BF%D0%B0%D1%82%D0%B5%D0%BB%D0%B8">����������</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_list">��������
                                                                                        ������ ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_lists">���������
                                                                                        �������</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/add_new_list_element">
                                                                                        ���������� ������ �������� ������</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/work_with_lists">
                                                                                        ������ �� ��������</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">���������� "�������������"</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/chats_and_unsorted">����
                                                                                        � �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/connect_unsorted">�����������
                                                                                        ��������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/logic_of_show_unsorted">������
                                                                                        ����������� ��������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/mail_in_unsorted">�����
                                                                                        � ������������� </a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/caller_in_unsorted">���������
                                                                                        � �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/form_for_site_and_unsorted">�����
                                                                                        ��� ����� � �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/analysis_of_unsorted">���������
                                                                                        �� ��������������</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������� ����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/blocks_of_desktop">�����
                                                                                        �������� �����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/edit_desktop_elements">���������
                                                                                        ��������� �� ������� �����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/questions_about_desktop">��������
                                                                                        ������� �� �������� �����?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_contact/">��������
                                                                                        ������ ��������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/edit_contact/">��������������
                                                                                        ��������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/delete_and_recovery_remote_contact/">��������������
                                                                                        ���������� ��������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/questions_about_contacts/">��������
                                                                                        ������� �� ���������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_table_of_task_list">���������
                                                                                        ������� ������ �����</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_task">��������
                                                                                        ����� ������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/edit_task">��������������
                                                                                        ������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/search_and_view_task">�����
                                                                                        � �������� ������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_reminder_of_tasks">���������
                                                                                        ����������� � �������</a>
                                                                                </li>

                                                                                <li>
                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/questions_about_tasks">��������
                                                                                        ������� �� �������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_lead">��������
                                                                                        ����� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/edit_lead">��������������
                                                                                        ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/search_and_view_lead">�����
                                                                                        � �������� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/delete_recovery_remote_leads">��������������
                                                                                        ��������� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_list_of_leads">���������
                                                                                        ������ ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/questions_about_leads">��������
                                                                                        ������� �� �������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/218936188-%D0%A2%D0%B5%D0%B3-%D1%81%D1%82%D0%BE%D0%B8%D1%82-%D0%B2-%D1%81%D0%B4%D0%B5%D0%BB%D0%BA%D0%B5-%D0%BD%D0%BE-%D0%BD%D0%B5-%D0%BE%D1%82%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B0%D0%B5%D1%82%D1%81%D1%8F-%D0%B2-%D0%BE%D0%B1%D0%BB%D0%B0%D0%BA%D0%B5-%D1%82%D0%B5%D0%B3%D0%BE%D0%B2-%D0%B2-%D1%84%D0%B8%D0%BB%D1%8C%D1%82%D1%80%D0%B5">���
                                                                                        ����� � ������, �� �� ������������ � ������ ����� � �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_tag">��������
                                                                                        ������ ����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/edit_tag">��������������
                                                                                        ����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/delete_tag">��������
                                                                                        ����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/search_for_tags">�����
                                                                                        �� �����</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">���������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/sales_analysis">������
                                                                                        ������ - ��� ����� ������� ������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/list_events">������
                                                                                        �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/sales_analysis">������
                                                                                        ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/consolidated_report">�������
                                                                                        �����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/employee_report">�����
                                                                                        �� �����������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207922887-%D0%A6%D0%B5%D0%BB%D0%B8">����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/analyst_calls">������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/questions_about_analysis">��������
                                                                                        ������� �� ���������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">�����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_and_edit_forms">��������
                                                                                        � �������������� ����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_form_options">���������
                                                                                        ���������� ����� � amoCRM</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setup_form_on_site">���������
                                                                                        ����� �� ����� ��� ��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/connect_google_analytics">�����������
                                                                                        Google Analytics</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_goals_in_google_analytics">���������
                                                                                        ����� � Google Analytics</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������� � amoCRM</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_new_filter">��������
                                                                                        ������ �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/filters_on_desktop">�������
                                                                                        �� ������� �����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/filters_in_contacts">�������
                                                                                        � ���������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/filters_in_leads">�������
                                                                                        � �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/filters_in_tasks">�������
                                                                                        � �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/filters_in_analytics">�������
                                                                                        � ���������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207498787-%D0%9E%D1%81%D1%82%D0%B0%D0%BB%D0%B8%D1%81%D1%8C-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B-%D0%BF%D0%BE-%D1%84%D0%B8%D0%BB%D1%8C%D1%82%D1%80%D0%B0%D0%BC-">��������
                                                                                        ������� �� ��������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                            </div>

                                                            <div class="faq_left_column">

                                                                <h2>������ � ������� ������</h2>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������� ������ � amoCRM</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/export_full">�����
                                                                                        ������ �� ��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/205462438-%D0%92-%D0%BA%D0%B0%D0%BA%D0%BE%D0%BC-%D1%82%D0%B0%D1%80%D0%B8%D1%84%D0%BD%D0%BE%D0%BC-%D0%BF%D0%BB%D0%B0%D0%BD%D0%B5-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%B5%D0%BD-%D1%8D%D0%BA%D1%81%D0%BF%D0%BE%D1%80%D1%82-">�
                                                                                        ����� �������� ����� �������� �������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206232777-%D0%9A%D0%B0%D0%BA%D0%B8%D0%BC%D0%B8-%D0%BF%D1%80%D0%B0%D0%B2%D0%B0%D0%BC%D0%B8-%D0%B4%D0%BE%D0%BB%D0%B6%D0%B5%D0%BD-%D0%BE%D0%B1%D0%BB%D0%B0%D0%B4%D0%B0%D1%82%D1%8C-%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C-%D1%87%D1%82%D0%BE%D0%B1%D1%8B-%D1%81%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C-%D1%8D%D0%BA%D1%81%D0%BF%D0%BE%D1%80%D1%82-">������
                                                                                        ������� ������ �������� ������������, ����� ������� �������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/limit_export">�����
                                                                                        ���� ����������� �� ��������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/extort_list">���
                                                                                        ������� ������� ��������� ��� ��������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/export_leads">���
                                                                                        ������� ������� ������?</a>
                                                                                </li>

                                                                            </ul>

                                                                            <a target="_blank"
                                                                               href="http://support.amocrm.ru/hc/ru/sections/201584507-%D0%AD%D0%BA%D1%81%D0%BF%D0%BE%D1%80%D1%82-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-amoCRM"
                                                                               class="see-all-articles">
                                                                                �������� ��� ������ (24)
                                                                            </a>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������ ������ � amoCRM</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206812007-%D0%9E%D0%B1%D1%89%D0%B0%D1%8F-%D1%81%D1%82%D0%B0%D1%82%D1%8C%D1%8F-%D0%BF%D0%BE-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D1%83">�����
                                                                                        ������ �� �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206088628-%D0%9F%D0%BE%D0%B4%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BA%D0%B0-%D1%84%D0%B0%D0%B9%D0%BB%D0%B0-%D0%B4%D0%BB%D1%8F-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D0%B0">����������
                                                                                        ����� ��� �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206089068-%D0%9F%D1%80%D0%B8%D0%BC%D0%B5%D1%80%D1%8B-%D1%84%D0%B0%D0%B9%D0%BB%D0%BE%D0%B2-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D0%B0">�������
                                                                                        ������ �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206089058-%D0%9A%D0%B0%D0%BA-%D1%81%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82">���
                                                                                        ������� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207206458-%D0%A1%D0%BE%D0%B7%D0%B4%D0%B0%D0%BD%D0%B8%D0%B5-%D1%82%D0%B5%D0%B3%D0%BE%D0%B2-%D0%BF%D1%80%D0%B8-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D0%B5-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85">��������
                                                                                        ����� ��� ������� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206812987-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D0%B0">���������
                                                                                        �������</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207706397-%D0%9E%D1%88%D0%B8%D0%B1%D0%BA%D0%B8-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D0%B0">������
                                                                                        �������</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207706487-%D0%9E%D1%81%D1%82%D0%B0%D0%BB%D0%B8%D1%81%D1%8C-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B-%D0%BF%D0%BE-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D1%83-">��������
                                                                                        ������� �� �������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                            </div>

                                                            <div class="faq_left_column">

                                                                <h2>��������� amoCRM</h2>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">Digital pipeline</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/221001068-%D0%9D%D0%BE%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%B8-%D0%B2-Digital-Pipeline">�����������
                                                                                        � Digital Pipeline</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/219187207-%D0%9E%D1%81%D1%82%D0%B0%D0%BB%D0%B8%D1%81%D1%8C-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B-%D0%BF%D0%BE-%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B5-Digital-Pipeline-">��������
                                                                                        ������� �� ��������� Digital Pipeline?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/218743088-%D0%94%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F-%D0%BF%D1%80%D0%B8-%D0%BF%D0%B5%D1%80%D0%B5%D1%85%D0%BE%D0%B4%D0%B5-%D1%81%D0%B4%D0%B5%D0%BB%D0%BA%D0%B8-%D0%B2-%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81">��������
                                                                                        ��� �������� ������ � ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/219186497-%D0%90%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B0%D1%8F-%D1%81%D0%BC%D0%B5%D0%BD%D0%B0-%D1%81%D1%82%D0%B0%D1%82%D1%83%D1%81%D0%B0-%D0%BF%D0%BE-%D1%81%D0%BE%D0%B1%D1%8B%D1%82%D0%B8%D1%8E">��������������
                                                                                        ����� ������� �� �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/218742588-Digital-pipeline">Digital
                                                                                        pipeline</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� �����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/connect_email">����������
                                                                                        � ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/personal_mail">�����������
                                                                                        ������� �����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/215277258-%D0%A1%D0%B8%D0%BD%D1%85%D1%80%D0%BE%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F-%D0%BF%D0%BE%D1%87%D1%82%D1%8B">�������������
                                                                                        �����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/automatic_creat_contact">��������
                                                                                        ����� � ��������� </a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/automatic_creat_leads">��������
                                                                                        ����� � �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/email_in_queue_for_sending">��������
                                                                                        �����</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/email_templates">�������</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/delete_mailbox">����������
                                                                                        ��������� �����</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/?id=508">��������
                                                                                        ������� �� ��������� ���������� � ������?</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� ������������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li class="article-promoted">

                                                                                    <span data-title="����������� ������">&#9733;</span>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/safety">�����
                                                                                        ������ �� ������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208710847-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D0%B1%D0%B5%D0%BB%D0%BE%D0%B3%D0%BE-%D1%81%D0%BF%D0%B8%D1%81%D0%BA%D0%B0">���������
                                                                                        ������ ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207980378-%D0%A0%D0%B5%D0%B4%D0%B0%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B1%D0%B5%D0%BB%D0%BE%D0%B3%D0%BE-%D1%81%D0%BF%D0%B8%D1%81%D0%BA%D0%B0">��������������
                                                                                        ������ ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208881367-%D0%9E%D1%82%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B1%D0%B5%D0%BB%D0%BE%D0%B3%D0%BE-%D1%81%D0%BF%D0%B8%D1%81%D0%BA%D0%B0">����������
                                                                                        ������ ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208881637-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%B0-%D0%BF%D0%BE-API">���������
                                                                                        ������� �� API</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208182718-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D1%80%D0%B5%D0%B7%D0%B5%D1%80%D0%B2%D0%BD%D0%BE%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BF%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F">���������
                                                                                        ���������� �����������</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207086048-%D0%9E%D1%81%D1%82%D0%B0%D0%BB%D0%B8%D1%81%D1%8C-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B-%D0%BF%D0%BE-%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D0%B8-">��������
                                                                                        ������� �� ������������?
                                                                                    </a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/201175856-%D0%A7%D1%82%D0%BE-%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C-%D0%B5%D1%81%D0%BB%D0%B8-%D0%BF%D0%BE%D1%82%D0%B5%D1%80%D1%8F%D0%BD-%D0%B0%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%BE%D1%80%D1%81%D0%BA%D0%B8%D0%B9-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF-%D0%B8%D0%BB%D0%B8-%D0%B0%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%BE%D1%80-%D1%83%D0%B2%D0%BE%D0%BB%D0%B8%D0%BB%D1%81%D1%8F-">���
                                                                                        ������, ���� ������� ����������������� ������ ��� �������������
                                                                                        ��������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� ��������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207976958-%D0%90%D0%BA%D1%82%D0%B8%D0%B2%D0%B0%D1%86%D0%B8%D1%8F-%D1%81%D0%BA%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%D0%B0">���������
                                                                                        ��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207977018-%D0%A0%D0%B5%D0%B4%D0%B0%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BA-%D1%81%D0%BA%D0%BE%D1%80%D0%B8%D0%BD%D0%B3%D0%B0">��������������
                                                                                        �������� ��������</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� ������ ���������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207975828-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D0%BD%D0%BE%D0%B2%D0%BE%D0%B3%D0%BE-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81-%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%B0">���������
                                                                                        ������ ������ ��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207975938-%D0%A0%D0%B5%D0%B4%D0%B0%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81-%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%B0">��������������
                                                                                        ������ ��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207976248-%D0%A3%D0%B4%D0%B0%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81-%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%B0">��������
                                                                                        ������ ��������</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� �����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/222208168-%D0%93%D1%80%D1%83%D0%BF%D0%BF%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B0-%D0%BF%D0%BE%D0%BB%D0%B5%D0%B9">�����������
                                                                                        �����</a>
                                                                                </li>
                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208705757-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D0%BF%D0%BE%D0%BB%D0%B5%D0%B9-%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%B0">���������
                                                                                        ����� ��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207974198-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D0%BF%D0%BE%D0%BB%D0%B5%D0%B9-%D1%81%D0%B4%D0%B5%D0%BB%D0%BA%D0%B8">���������
                                                                                        ����� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208705827-%D0%98%D0%B7%D0%BC%D0%B5%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BE%D0%BB%D0%B5%D0%B9-%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8">���������
                                                                                        ����� ��������</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� ������������� � ����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_users">����������
                                                                                        ������ ������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/edit_users">��������������
                                                                                        ������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/delete_users_off_active">��������
                                                                                        ������������ � ���������� ����������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_right_level_users&quot;">������
                                                                                        ����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/setting_right_users">���������
                                                                                        ���� �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_user_groups">��������
                                                                                        ������ �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_user_groups">��������������
                                                                                        ������ �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/create_user_groups">��������
                                                                                        ������ �������������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/questions_about_users">��������
                                                                                        ������� �� ��������� ���� � �������������?</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">��������� ������ ������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/developers/content/api/pipelines">�������������
                                                                                        �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/developers/content/api/pipelines">����������
                                                                                        ������ ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/developers/content/api/pipelines">��������������
                                                                                        � �������� ������ ������</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">����� ���������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207914468-%D0%9E%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D1%8B%D0%B5-%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8-%D0%B0%D0%BA%D0%BA%D0%B0%D1%83%D0%BD%D1%82%D0%B0-amoCRM">��������
                                                                                        ��������� �������� amoCRM</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207959128-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B8-%D0%BF%D1%80%D0%BE%D1%84%D0%B8%D0%BB%D1%8F">���������
                                                                                        �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207960258-%D0%A1%D0%BC%D0%B5%D0%BD%D0%B0-%D0%BF%D0%B0%D1%80%D0%BE%D0%BB%D1%8F-%D0%B0%D0%BA%D0%BA%D0%B0%D1%83%D0%BD%D1%82%D0%B0-amoCRM">�����
                                                                                        ������ �������� amoCRM</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207962368-%D0%92%D0%BE%D1%81%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BF%D0%B0%D1%80%D0%BE%D0%BB%D1%8F">��������������
                                                                                        ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208703887-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D1%83%D0%B2%D0%B5%D0%B4%D0%BE%D0%BC%D0%BB%D0%B5%D0%BD%D0%B8%D0%B9">���������
                                                                                        �����������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208693667-%D0%94%D0%BE%D1%81%D1%82%D1%83%D0%BF-%D0%BA-API-%D0%BA%D0%BB%D1%8E%D1%87%D1%83">������
                                                                                        � API �����</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                            </div>

                                                        </div>

                                                        <div class="right-side"><!-- RIGHT SIDE -->
                                                            <div class="faq_left_column">

                                                                <div class="faq_left_column">

                                                                    <h2>������</h2>

                                                                    <section>
                                                                        <article>
                                                                            <p class="faq_question">���������� ���������</p>
                                                                            <div class="faq_answer" style="display: none;">
                                                                                <ul class="article-list">

                                                                                    <li>

                                                                                        <a target="_blank"
                                                                                           href="http://support.amocrm.ru/hc/ru/articles/207104288-%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0-%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0">������
                                                                                            ������</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank"
                                                                                           href="http://support.amocrm.ru/hc/ru/articles/207108728-%D0%9A%D0%BE%D1%80%D1%80%D0%B5%D0%BA%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B0-%D0%B7%D0%B0%D0%BA%D0%B0%D0%B7%D0%B0">�������������
                                                                                            ������</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank"
                                                                                           href="http://support.amocrm.ru/hc/ru/articles/208189818-%D0%9F%D1%80%D0%BE%D0%B4%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%B8">���������
                                                                                            ��������</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank"
                                                                                           href="http://support.amocrm.ru/hc/ru/articles/208190118-%D0%9F%D0%BE%D0%BA%D1%83%D0%BF%D0%BA%D0%B0-%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D0%B5%D0%B9">�������
                                                                                            �������������</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank"
                                                                                           href="http://support.amocrm.ru/hc/ru/articles/207824337-%D0%9E%D1%81%D1%82%D0%B0%D0%BB%D0%B8%D1%81%D1%8C-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B-%D0%BF%D0%BE-%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8E-%D0%BF%D0%BE%D0%B4%D0%BF%D0%B8%D1%81%D0%BA%D0%BE%D0%B9-">��������
                                                                                            ������� �� ���������� ���������?</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank"
                                                                                           href="http://support.amocrm.ru/hc/ru/articles/207830167-%D0%95%D1%81%D0%BB%D0%B8-%D0%BF%D0%BE%D1%81%D0%BB%D0%B5-%D0%BE%D0%BF%D0%BB%D0%B0%D1%82%D1%8B-%D0%B0%D0%BA%D0%BA%D0%B0%D1%83%D0%BD%D1%82-%D0%BD%D0%B5%D0%B0%D0%BA%D1%82%D0%B8%D0%B2%D0%B5%D0%BD-%D0%BD%D0%B5-%D1%80%D0%B0%D0%B7%D0%B1%D0%BB%D0%BE%D0%BA%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD">����
                                                                                            ����� ������ ������� ���������/��
                                                                                            �������������</a>
                                                                                    </li>

                                                                                </ul>

                                                                            </div>
                                                                        </article>
                                                                    </section>
                                                                    <section>
                                                                        <article>
                                                                            <p class="faq_question">�������� �����</p>
                                                                            <div class="faq_answer" style="display: none;">
                                                                                <ul class="article-list">

                                                                                    <li>

                                                                                        <a target="_blank" href="https://www.amocrm.ru/buy/">��������
                                                                                            ���� "�������"</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank" href="https://www.amocrm.ru/buy/">��������
                                                                                            ���� "�����������"</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank" href="https://www.amocrm.ru/buy/">��������
                                                                                            ���� "����������������"</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank" href="https://www.amocrm.ru/support/payment/">�����
                                                                                            ��������� �����</a>
                                                                                    </li>

                                                                                    <li>

                                                                                        <a target="_blank" href="https://www.amocrm.ru/buy/tariff/">�����
                                                                                            �������� ������</a>
                                                                                    </li>

                                                                                </ul>
                                                                            </div>
                                                                        </article>
                                                                    </section>
                                                                </div>

                                                                <h2>��������� ���������� amoCRM</h2>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">Android OS</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/export_to_address_book/">amoCRM
                                                                                        2.0</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/connect_google_analytics/">�����
                                                                                        ����� ����� "��������� Google Analytics" � ����������
                                                                                        ����������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="https://www.amocrm.ru/support/mobile_app/">��������������
                                                                                        ��������� ����������� ������ Android</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">iOS</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/222120888-amoCRM-2-0">amoCRM
                                                                                        2.0</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                            </div>

                                                            <div class="faq_left_column">

                                                                <h3>���������� � �������</h3>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">���������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/208419037-VoxImplant">VoxImplant</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208450217-OnlinePBX">OnlinePBX</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208457807-%D0%93%D1%80%D0%B0%D0%B2%D0%B8%D1%82%D0%B5%D0%BB">��������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207831798-Asterisk">Asterisk</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/205480948-Oktell-2-0">Oktell
                                                                                        2.0</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206428317-LeadBack">LeadBack</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/204778667-Sipuni">Sipuni</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/205543748-UIS-%D0%B8-CoMagic">UIS
                                                                                        � CoMagic</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/203433678-Oktell">Oktell</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/205394048-Alloka">Alloka</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/201606126-%D0%9F%D1%80%D0%BE%D1%81%D1%82%D1%8B%D0%B5-%D0%B7%D0%B2%D0%BE%D0%BD%D0%BA%D0%B8">�������
                                                                                        ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208948937-%D0%9E%D1%81%D1%82%D0%B0%D0%BB%D0%B8%D1%81%D1%8C-%D0%B2%D0%BE%D0%BF%D1%80%D0%BE%D1%81%D1%8B-%D0%BF%D0%BE-%D1%82%D0%B5%D0%BB%D0%B5%D1%84%D0%BE%D0%BD%D0%B8%D0%B8-">��������
                                                                                        ������� �� ���������?</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/204197197-%D0%92%D0%B8%D1%80%D1%82%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5-%D0%90%D0%A2%D0%A1-%D0%9E%D0%B1%D0%B7%D0%BE%D1%80">�����������
                                                                                        ���. �����</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">���������� � ���-������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/203721798-WordPress-%D0%9A%D0%BE%D1%80%D0%BE%D1%82%D0%BA%D0%B8%D0%B9-%D0%BA%D0%BE%D0%B4-Short-code-">WordPress
                                                                                        (�������� ���/Short code)</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/203722828-Unbounce">Unbounce</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/208506877-Wufoo">Wufoo</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207802528-CallTouch">CallTouch</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/208533607-LPGenerator">LPGenerator</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/216368427-%D0%92%D1%81%D1%82%D1%80%D0%BE%D0%B5%D0%BD%D0%BD%D1%8B%D0%B9-%D0%BA%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80-%D1%84%D0%BE%D1%80%D0%BC">����������
                                                                                        ����������� ����</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/216368667-qFlow">qFlow</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/216397107-%D0%9F%D0%BB%D0%B0%D0%B3%D0%B8%D0%BD-amoForms-%D0%B4%D0%BB%D1%8F-WordPress">������
                                                                                        amoForms ��� WordPress</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/220786487-Callbackhunter">Callbackhunter</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/221061628-%D0%A0%D1%83%D0%BA%D0%BE%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%BE-%D0%BF%D0%BE%D0%BB%D1%8C%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8F-Layout-Styles-Visual-Editor-amoForms-">�����������
                                                                                        ������������ Layout &amp; Styles Visual Editor (amoForms)</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/225851188-%D0%9A%D0%B0%D0%BA-%D1%81%D0%B4%D0%B5%D0%BB%D0%B0%D1%82%D1%8C-%D0%B8%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D1%8E-%D1%81-Yandex-%D0%9C%D0%B5%D1%82%D1%80%D0%B8%D0%BA%D0%BE%D0%B9">���
                                                                                        ������� ���������� � Yandex ��������</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">Email � SMS �������� � amoCRM</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208503477-UniSender">UniSender</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207773748-MailChimp">MailChimp</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207775318-ProfiSend">ProfiSend</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/203628168-%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D1%8F-%D1%81-%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D0%BE%D0%B9-%D0%BF%D0%BE%D1%87%D1%82%D0%BE%D0%B9-%D1%81-%D0%BF%D0%BE%D0%BC%D0%BE%D1%89%D1%8C%D1%8E-BCC">����������
                                                                                        � ����������� ������ � ������� BCC</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������ ����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/232048148-Telegram">Telegram</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/222325187-%D0%A7%D0%B0%D1%82-Facebook">���
                                                                                        Facebook</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/221005187-JivoSite">JivoSite</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/208535587-Live-Chat">Live
                                                                                        Chat</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">�������� �������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/213497928-%D0%9A%D0%BE%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%82%D0%BE%D1%80-%D1%81%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B2-%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6">�����������
                                                                                        �������� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/208553167-HyperScript">HyperScript</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/208545017-DropBox">DropBox</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/204371267-%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D1%8F-1%D0%A1">����������
                                                                                        1�</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank" href="http://support.amocrm.ru/hc/ru/articles/204271247-Tranzaptor">Tranzaptor</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                            </div>

                                                            <div class="faq_left_column">

                                                                <h2>������ ������������</h2>

                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">������ �� ������ � amoCRM</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/208006637-%D0%91%D1%8B%D1%81%D1%82%D1%80%D1%8B%D0%B5-%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F-%D1%81-%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82%D0%BE%D0%BC">�������
                                                                                        �������� � ���������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206034358-%D0%9F%D0%BE%D0%B8%D1%81%D0%BA-%D0%B8-%D0%BE%D0%B1%D1%8A%D0%B5%D0%B4%D0%B8%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5-%D0%B4%D1%83%D0%B1%D0%BB%D0%B5%D0%B9">�����
                                                                                        � ����������� ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207928747-%D0%91%D1%8B%D1%81%D1%82%D1%80%D1%8B%D0%B5-%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F-%D1%81%D0%BE-%D1%81%D0%B4%D0%B5%D0%BB%D0%BA%D0%BE%D0%B9">�������
                                                                                        �������� �� �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206089438-%D0%9D%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B9%D0%BA%D0%B0-%D1%82%D0%B0%D0%B1%D0%BB%D0%B8%D1%86">���������
                                                                                        ������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207721947-%D0%98%D0%B7%D0%BC%D0%B5%D0%BD%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE%D1%82%D0%B2%D0%B5%D1%82%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE">���������
                                                                                        ��������������</a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">�����������</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/207298708-%D0%94%D0%B8%D0%B0%D0%B3%D0%BD%D0%BE%D1%81%D1%82%D0%B8%D0%BA%D0%B0-%D1%81%D0%B5%D1%82%D0%B5%D0%B2%D1%8B%D1%85-%D0%B7%D0%B0%D0%B4%D0%B5%D1%80%D0%B6%D0%B5%D0%BA-WinMTR-">�����������
                                                                                        ������� �������� (WinMTR)</a>
                                                                                </li>

                                                                            </ul>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>
                                                                        <p class="faq_question">����� �����</p>
                                                                        <div class="faq_answer" style="display: none;">
                                                                            <ul class="article-list">

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206827767-%D0%9A%D0%B0%D0%BA-%D0%B8%D0%BC%D0%BF%D0%BE%D1%80%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D1%82%D1%8C-%D0%B1%D0%B0%D0%B7%D1%83-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-amoCRM-">���
                                                                                        ������������� ���� ������ � amoCRM </a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206827757-%D0%9A%D0%B0%D0%BA-%D0%B4%D0%BE%D0%B1%D0%B0%D0%B2%D0%B8%D1%82%D1%8C-%D1%81%D0%BE%D1%82%D1%80%D1%83%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-%D0%B2-%D0%B0%D0%BA%D0%BA%D0%B0%D1%83%D0%BD%D1%82">���
                                                                                        �������� ����������� � �������</a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206827737-%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-amoCRM-">���������
                                                                                        amoCRM </a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206102088-%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0-%D1%81-%D0%BA%D0%B0%D1%80%D1%82%D0%BE%D1%87%D0%BA%D0%BE%D0%B9-%D0%BA%D0%BB%D0%B8%D0%B5%D0%BD%D1%82%D0%B0-%D0%B2-amoCRM-">������
                                                                                        � ��������� ������� � amoCRM </a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206827727-%D0%9A%D0%B0%D0%BA-%D0%BD%D0%B0%D1%81%D1%82%D1%80%D0%BE%D0%B8%D1%82%D1%8C-amoCRM-%D0%BF%D0%BE%D0%B4-%D1%81%D0%B2%D0%BE%D0%B9-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81-">���
                                                                                        ��������� amoCRM ��� ���� ������ </a>
                                                                                </li>

                                                                                <li>

                                                                                    <a target="_blank"
                                                                                       href="http://support.amocrm.ru/hc/ru/articles/206102078-%D0%98%D0%BD%D1%82%D0%B5%D0%B3%D1%80%D0%B0%D1%86%D0%B8%D1%8F-amoCRM-%D1%81-%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D0%BE%D0%B9-%D0%BF%D0%BE%D1%87%D1%82%D0%BE%D0%B9-">����������
                                                                                        amoCRM � ����������� ������ </a>
                                                                                </li>

                                                                            </ul>

                                                                            <a target="_blank"
                                                                               href="http://support.amocrm.ru/hc/ru/sections/200282357-%D0%92%D0%B8%D0%B4%D0%B5%D0%BE-%D0%A3%D1%80%D0%BE%D0%BA%D0%B8"
                                                                               class="see-all-articles">
                                                                                �������� ��� ������ (16)
                                                                            </a>

                                                                        </div>
                                                                    </article>
                                                                </section>
                                                            </div>

                                                            <div class="faq_left_column">

                                                                <h2>�������������</h2>

                                                                <section>
                                                                    <article>

                                                                        <p class="faq_question"><a target="_blank"
                                                                                                   href="https://www.amocrm.ru/developers/content/api/webhooks/"
                                                                                                   class="direct-link">Webhooks</a></p>
                                                                    </article>
                                                                </section>

                                                                <section>
                                                                    <article>

                                                                        <p class="faq_question"><a target="_blank"
                                                                                                   href="https://www.amocrm.ru/developers/content/api/widgets/"
                                                                                                   class="direct-link">�������</a></p>

                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>

                                                                        <p class="faq_question"><a target="_blank"
                                                                                                   href="https://www.amocrm.ru/developers/content/api/auth/"
                                                                                                   class="direct-link">API</a></p>

                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>

                                                                        <p class="faq_question"><a target="_blank"
                                                                                                   href="https://www.amocrm.ru/developers/console/"
                                                                                                   class="direct-link">�������</a></p>

                                                                    </article>
                                                                </section>
                                                                <section>
                                                                    <article>

                                                                        <p class="faq_question"><a target="_blank"
                                                                                                   href="https://www.amocrm.ru/developers/content/telephony/integration/"
                                                                                                   class="direct-link">�������</a></p>

                                                                    </article>
                                                                </section>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <a href="https://www.youtube.com/watch?v=oMq-_iF-D9o" data-rel="media" class="last-release" target="_blank">�������� ���������
                                                        �����</a>

                                                </div>

                                            </div>
                                        </div>

                                    </div><!-- content block text -->

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>