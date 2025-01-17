


<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
<script src="/mohinhmvc/applications/content/jsnew/bootstrap.min.js"></script>
<style>
    body {
        background-color: #f9f9f9;
        margin: 0px;
        padding: 0px;
    }

    .grid-container {
        display: grid;
        grid-template-areas:
            'header header header'
            'sidebar-1  sidebar-2'
            'footer footer footer';
    }

    .header {
        padding: 5px;
        grid-area: header;
        width: 100%;
        height: 50px;
    }

    .sidebar-1 {
        padding: 5px;
        grid-area: sidebar-1;
        float: left
    }

    .sidebar-2 {
        padding: 5px;
        grid-area: sidebar-2;
    }

    .footer {
        padding: 5px;
        grid-area: footer;
        border: 1px dashed #AAA;
    }

    .close {
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 42px;
        cursor: pointer;
        margin-right: 5px;
    }

    .closeHD {
        position: absolute;
        top: 0;
        right: 14px;
        font-size: 32px;
        cursor: pointer;
        margin-right: 5px;
    }

    .bg-modal {
        width: 98%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    input {
        border-color: darkgreen;
    }

    .bg-modalHD {
        width: 98%;
        height: 100%;
        background: rgba(0,0,0,0.7);
        position: absolute;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        display: none;
    }

    h5 {
        font-size: 14px;
        margin-bottom: 5px;
    }

    .input {
        width: 50%;
        text-align: left;
        display: block;
        margin: 15px auto;
    }

    .rowRadio {
        width: 42%;
        float: left;
    }

    .rowFile {
        width: 50%;
        float: left;
    }

    .modal-content {
        width: 1000px;
        height: 600px;
        background: white;
        border-radius: 4px;
        text-align: left;
        padding: 20px;
        position: relative;
    }

    .h5 {
        font-size: 14px;
    }


    .clean {
        position: relative;
        display: inline-block;
        width: 215px;
        padding: 10px 0 10px 15px;
        font-family: "Open Sans", sans;
        font-weight: 400;
        color: #377d6a;
        background: #efefef;
        border: 0;
        border-radius: 3px;
        outline: 0;
        // Arbitrary. transition: all 0.3s ease-in-out;
    }

    .ngoaiNguWaring div {
        float: right !important;
        margin-left: 3px !important;
    }

    .RadMenu_Bootstrap .rmExpandRight:after {
        content: "";
        margin: 0px -4px 0px 4px;
        border: 4px solid transparent;
        border-left-color: #333;
        display: inline-block;
        position: absolute;
        right: 8px;
        top: 16px;
    }

    .RadGrid_Bootstrap .rgRow > td, .RadGrid_Bootstrap .rgAltRow > td, .RadGrid_Bootstrap .rgEditRow > td {
        padding: 5px 10px !important;
    }

    .padding {
        padding-left: 5px !important;
        padding-right: 5px !important;
    }

    #qi-div-toolbar-form {
        height: 36px;
        background: #f5f5f5;
        border-bottom: 1px solid #ddd;
    }

        #qi-div-toolbar-form .qi-tieu-de-form {
            line-height: 36px;
            height: 36px;
            font-weight: bold;
        }

        #qi-div-toolbar-form .qi-button-form input {
            min-width: 80px;
            margin-top: 2px;
        }

    #qi-div-filter-form {
        height: 36px;
        background: #f5f5f5;
        border-bottom: 1px solid #ddd;
    }

    .qi-tieu-de-form {
        line-height: 36px;
        height: 36px;
        font-weight: bold;
        color: #0074f2;
    }

    #qi-div-filter-form .qi-button-form {
        line-height: 36px;
        height: 36px;
    }

    #qi-panel-search {
        border-bottom: 1px solid #ddd;
        margin-bottom: -1px;
        padding-top: 3px;
    }

    #qi-div-grid-form {
        height: 36px;
        background: #f5f5f5;
    }

        #qi-div-grid-form .qi-tieu-de-form {
            line-height: 36px;
            height: 36px;
            font-weight: bold;
        }

        #qi-div-grid-form .qi-button-form {
            line-height: 36px;
            height: 36px;
        }

    .rgEditForm .rcbInput {
        border: 0px !important;
    }

    .rcbInputCell .rcbInput {
        border: 0px !important;
        padding: 2px 0 0px !important;
    }

    .RadComboBox .rcbInput {
        padding: 2px 0 0px !important;
    }

    .rgEditForm > table > tbody > tr > td > table > tbody > tr > td {
        padding: 2px !important;
    }

        .rgEditForm > table > tbody > tr > td > table > tbody > tr > td > input[type="text"] {
            width: 300px !important;
        }

    .rgEditForm > div > table > tbody > tr > td > table > tbody > tr > td {
        padding: 2px !important;
    }

    .rgEditForm .rgHeader {
        height: 29px !important;
    }

    .rgEditForm input[type="submit"] {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

        .rgEditForm input[type="submit"]:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }

    .qi-bt-rad {
        background-color: #337ab7 !important;
    }

        .qi-bt-rad:hover {
            color: #fff !important;
            background-color: #286090 !important;
            border-color: #204d74 !important;
        }

    span.RadButton_Bootstrap .rbDecorated {
        height: 20px;
        line-height: 22px;
        margin-top: 0px !important;
        color: #fff !important;
    }

    .qi-bt {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
        min-width: 100px !important;
    }

        .qi-bt:hover {
            color: #fff;
            background-color: #286090;
            border-color: #204d74;
        }

    .qi-head-list-grid {
        background-color: #0071a6 !important;
        color: white !important;
        font-weight: bold !important;
    }

        .qi-head-list-grid a {
            color: white !important;
        }

    .rcbSlide {
        z-index: 999999 !important;
    }

    .form-group {
        margin-top: 4px !important;
        margin-bottom: 5px !important;
        margin-right: 0px !important;
        margin-left: 0px !important;
        background-color: aquamarine;
    }

    .control-label {
        float: left;
    }

    .n-index, .n-index-child {
        float: right;
        padding-top: 7px;
        font-weight: 700;
    }

    span.required {
        color: red;
        margin-left: 2px;
    }

    .label-wrapper-value {
        padding-top: 7px;
        border-bottom: 1px dotted #ddd;
    }

        .label-wrapper-value:after {
            content: '.';
            visibility: hidden;
        }

    .bt-zoom {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/zoom.png) no-repeat 0 0;
        cursor: pointer;
    }

    .bt-mini {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/zoom.png) no-repeat -30px 0;
        cursor: pointer;
    }

    .bt-mo {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/dong_mo.png) no-repeat 0 0;
        cursor: pointer;
    }

    .bt-dong {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/dong_mo.png) no-repeat -30px 0;
        cursor: pointer;
    }


    .control-label {
        text-align: left !important;
    }
    /*GridViewCSS*/

    .GridViewStyle {
        font-family: Tahoma;
        font-size: 12px;
        table-layout: auto;
        border-collapse: collapse;
        border: #009AD9 3px solid;
    }

    .GridViewStyle2 {
        border-color: #3366CC;
        font-family: Arial;
        font-size: 13px !important;
        table-layout: auto;
        border-collapse: collapse;
        border: #D0D7E5 1px solid;
        padding: 0px;
        margin: 0px;
    }

    .HeaderStyle2 td {
        border: #D0D7E5 1px solid;
    }

    .HeaderStyle2 th {
        border: #D0D7E5 1px solid;
    }

    .HeaderStyle {
        font-family: Arial;
        font-size: 13px !important;
        text-align: center;
        height: 30px;
    }

    .HeaderStyle2 {
        background-position: center;
        background-color: #00aff0;
        color: White;
        text-align: center;
        font-weight: bold;
        font-family: Arial;
        font-size: 13px !important;
        height: 30px;
    }

        .HeaderStyle2 th, .HeaderStyle2 a, .HeaderStyle2 td {
            color: White;
            font-weight: bold;
            font-family: Arial;
            font-size: 13px !important;
            text-align: center;
            padding: 6px;
            height: 30px;
        }

    .HeaderStyle th {
        font-family: Arial;
        padding: 5px;
        color: #ffffff;
    }

    .HeaderStyle a {
        color: #ffffff;
        display: block;
        font-weight: bold;
        font-family: Arial;
        font-size: 13px !important;
        text-align: center;
    }

    /*Page Style*/
    .PagerStyle {
        /*display: inline-block;*/
        padding-left: 0;
        margin: 16px 0;
        border-radius: 4px;
    }

        .PagerStyle td {
            border-color: #d0d7e5 !important;
        }

        .PagerStyle table > tbody > tr > td {
            display: inline;
        }

            .PagerStyle table > tbody > tr > td > a, .PagerStyle table > tbody > tr > td > span {
                position: relative;
                float: left;
                padding: 8px 12px;
                text-decoration: none;
                color: #4078C0;
                background-color: #ffffff;
                border: 1px solid #dddddd;
                margin-left: -1px;
                font-weight: bold;
            }

            .PagerStyle table > tbody > tr > td > span {
                position: relative;
                float: left;
                padding: 8px 12px;
                text-decoration: none;
                margin-left: -1px;
                z-index: 2;
                color: #FFFFFF;
                background-color: #4078C0;
                border-color: #4078C0;
                cursor: default;
                font-weight: bold;
            }

            .PagerStyle table > tbody > tr > td:first-child > a, .PagerStyle table > tbody > tr > td:first-child > span {
                margin-left: 0;
                border-bottom-left-radius: 2px;
                border-top-left-radius: 2px;
            }

            .PagerStyle table > tbody > tr > td:last-child > a, .PagerStyle table > tbody > tr > td:last-child > span {
                border-bottom-right-radius: 2px;
                border-top-right-radius: 2px;
            }

            .PagerStyle table > tbody > tr > td > a:hover, .PagerStyle table > tbody > tr > td > span:hover, .PagerStyle table > tbody > tr > td > a:focus, .PagerStyle table > tbody > tr > td > span:focus {
                background-color: #E5E5E5;
                border-color: #E5E5E5;
            }

            .PagerStyle table > tbody > tr > td > span:hover {
                background-color: #4078C0;
                border-color: #4078C0;
                cursor: pointer;
            }

        /*RowStyles*/
        .PagerStyle > td > table {
            margin: 6px 0;
        }

    .RowStyle td, .AltRowStyle td, .SelectedRowStyle td, .EditRowStyle td {
        padding: 1px 4px 1px 4px;
        border: solid 1px #D0D7E5;
        line-height: 22px;
        height: 32px;
    }

    .RowStyle td {
        background-color: white;
    }

    .selectCell td {
        border-top: solid 1px #0094e1 !important;
        border-bottom: solid 1px #0094e1 !important;
    }

    .AltRowStyle td {
        background-color: #f1f1f1;
    }

    .SelectedRowStyle td {
        background-color: #ffff66 !important;
    }

    /*PagerStyles for DetailView in Edit Mode*/
    .PagerStyleEdit table {
        text-align: center;
        margin: auto;
    }

        .PagerStyleEdit table td {
            border: 0px;
            padding: 5px;
        }

    .PagerStyleEdit a {
        color: #008000;
        font-family: Arial;
        font-size: 13px !important;
        padding: 2px 10px 2px 10px;
        border-top: solid 1px #A7DE92;
        border-right: solid 1px #01971C;
        border-bottom: solid 1px #01971C;
        border-left: solid 1px #A7DE92;
    }

    .PagerStyleEdit span {
        font-weight: bold;
        font-family: Arial;
        font-size: 13px !important;
        color: #008000;
        text-decoration: none;
        padding: 2px 10px 2px 10px;
    }

    .full-task {
        padding-left: 0px !important;
        padding-right: 0px !important;
    }

    .btic-chung {
        margin-top: 3px;
        margin-left: 3px;
        width: 30px;
        height: 30px;
        background: #337ab7;
        border-radius: 3px;
        text-align: center;
    }

        .btic-chung:hover {
            background: #3b8fd6;
        }

        .fa-file-excel-o, .btic-chung .fa {
            margin-top: 6px;
            color: #fff;
            font-size: 18px !important;
        }

    .text-right {
        position: relative;
    }

    .grbt-chucnang {
        float: right;
    }

        .grbt-chucnang > div {
            float: right;
        }

    .grbt-giaodien {
        float: right;
        height: 36px;
        padding-left: 4px;
        padding-right: 6px;
        margin-left: 10px;
        background: #fff;
        border: 1px solid #ddd;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom: none;
    }

    .btn-style-chucnang {
        margin-top: 4px;
        margin-left: 3px;
        padding: 6px 5px 2px 5px;
        height: 30px;
        background: #337ab7;
        border-radius: 3px;
        text-align: center;
    }

        .btn-style-chucnang a {
            color: #fff;
        }

            .btn-style-chucnang a:hover, .btn-style-chucnang a:active, .btn-style-chucnang a:focus {
                text-decoration: none;
            }

    .qi-div-toolbar-form {
        height: 36px;
        background: #f5f5f5;
        border-bottom: 1px solid #ddd;
    }

        .qi-div-toolbar-form .qi-tieu-de-form {
            line-height: 36px;
            height: 36px;
            font-weight: bold;
        }

    .RadTreeView .rtPlus, .RadTreeView .rtMinus {
        width: 1em !important;
        height: 1em !important;
    }

    .rgBatchCurrent {
        padding: 0px !important;
    }

    .RadGrid .rgBatchContainer {
        max-width: 100% !important;
    }



    .LockCell {
        background: #ededed !important;
    }

    .LockRow td {
        background: #ededed !important;
        padding: .35714em .5em .28571em .5em;
        height: 2.28571em;
        border-style: solid;
        border-width: 0 0 1px 1px;
        border-color: #ddd;
    }

    .rgBatchCurrent [type="text"] {
        border-radius: 0em !important;
        margin-bottom: 0px !important;
    }

    .RowEndGroup td {
        border-bottom-width: 2px !important;
        border-bottom-color: #D0D7E5 !important;
    }

    .word-wrap-label {
        word-wrap: normal;
        word-break: break-all;
    }

    .label-nowrap {
        white-space: nowrap;
    }

    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
        color: #1e99db;
        cursor: default;
        font-size: 14px !important;
        font-weight: bold;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent;
        border-top: 2px #337ab6 solid;
    }

    .qi-bt:active, .qi-bt:focus, .qi-bt:visited {
        background: #286090;
        color: #fff;
    }

    .RadGrid_Bootstrap .rgMasterTable .rgSelectedCell, .RadGrid_Bootstrap .rgSelectedRow > td, .RadGrid_Bootstrap td.rgEditRow .rgSelectedRow, .RadGrid_Bootstrap .rgSelectedRow td.rgSorted {
        background: #d0ecff !important;
        color: #000 !important;
    }

    .RadGrid_Bootstrap .rgMasterTable .rgSelectedCell, .RadGrid_Bootstrap .rgSelectedRowHover > td, .RadGrid_Bootstrap td.rgEditRow .rgSelectedRowHover, .RadGrid_Bootstrap .rgSelectedRowHover td.rgSorted {
        background: #d0ecff !important;
        color: #000 !important;
    }

    .profile-detail-wrapper {
        /*margin-top: 4px;*/
    }

    .content-cf {
        padding: 20px;
        max-height: 450px;
        overflow: hidden;
        font-family: "Segoe UI",Arial,Helvetica,sans-serif,Times New Roman;
    }

    .content-huongdan {
        padding: 20px;
        max-height: 450px;
        overflow: scroll;
        font-family: "Segoe UI",Arial,Helvetica,sans-serif,Times New Roman;
        color: #000000;
        font-weight: normal;
    }

    .header-cf {
        background: #e2e2e2;
        padding: 10px 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
    }
    /* The Modal (background) */
    .myModal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 999; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content-config {
        background-color: #fefefe;
        position: relative;
        margin: auto;
        padding: 0px;
        border: 1px solid #888;
        width: 20%;
        border-radius: 6px;
    }

    .modal-content-phanhoi {
        background-color: #fefefe;
        position: relative;
        margin: auto;
        padding: 0px;
        border: 1px solid #888;
        width: 50%;
        border-radius: 6px;
    }

    .modal-content-thongbao {
        background-color: #fefefe;
        position: relative;
        margin: auto;
        padding: 0px;
        border: 1px solid #888;
        width: 96%;
    }
    /* The Close Button */
    .close {
        color: #000 !important;
        float: right;
        font-size: 28px !important;
        font-weight: bold !important;
        position: absolute;
        top: 5px;
        right: 8px;
    }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    .table-popconfig {
        width: 100%;
    }

    .iconHD {
        margin-top: 6px;
        margin-left: 4px;
        float: left;
        width: 29px;
        height: 29px;
        background: url(/images/tthuongdan.png) no-repeat 0 0;
        cursor: pointer;
    }

    .iconLinkHD {
        margin-top: 6px;
        margin-left: 4px;
        float: left;
        width: 29px;
        height: 29px;
        background: url(/images/tthuongdan.png) no-repeat 0 0;
        cursor: pointer;
    }

    .iconYoutube {
        margin-top: 6px;
        margin-left: 4px;
        float: left;
        width: 29px;
        height: 29px;
        background: url(/images/icon-videohuongdan.png) no-repeat 0 0;
        cursor: pointer;
        margin-left: 15px;
    }

    .iconPage {
        margin-top: 6px;
        float: left;
        width: 29px;
        height: 29px;
        background: url(/images/iconpage22.png) no-repeat 0 0;
        cursor: pointer;
    }

    .bt-config {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/Setting.png) no-repeat 0 0;
        cursor: pointer;
    }

    .bt-config-cot {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/add_colum.png) no-repeat 0 0;
        cursor: pointer;
    }

    .rtsLevel a.rtsPrevArrow, a.rtsPrevArrowDisabled, a.rtsNextArrow, a.rtsNextArrowDisabled {
        margin-top: 2px !important;
    }

    .rtsLevel a.rtsPrevArrow, a.rtsPrevArrowDisabled {
        margin-right: 4px !important;
    }

    .group-item-menu {
        padding-top: 1px;
        background: linear-gradient( to left, #ffffff 10%, #dddddd 50%, #dddddd 50%, #ffffff 100% ) left top #ffffff no-repeat;
        background-size: 100% 1px;
    }

    .RadTabStripTop_Bootstrap .rtsLevel1 .rtsSelected {
        color: #1e99db;
        font-size: 14px !important;
        border-top: 2px #337ab6 solid !important;
        font-weight: bold;
    }

    .form-group .col-md-1, .form-group .col-md-2, .form-group .col-md-3, .form-group .col-md-4, .form-group .col-md-5, .form-group .col-md-6, .form-group .col-md-7, .form-group .col-md-8, .form-group .col-md-9,
    .form-group .col-md-10, .form-group .col-md-11, .form-group .col-md-12 {
        padding-right: 7px !important;
        padding-left: 7px !important;
    }

    .rdViewChart label {
        padding: 0 8px;
        font-weight: 100;
        cursor: pointer;
    }

    .rdViewChart input[type=radio] {
        cursor: pointer;
    }

    .RadWindow .rwTitleWrapper {
        height: auto !important;
    }

    .RadWindow .rwTitleBar .rwTitleWrapper .rwIcon {
        margin-top: -10px;
        background: url(/images/logo22.png) 0px 0px no-repeat scroll transparent;
        width: 22px !important;
        height: 22px !important;
    }

    .RadWindow .rwTitleBar .rwTitleWrapper .rwTitle {
        vertical-align: middle !important;
    }

    .RadWindow_Bootstrap span.rwIcon:before {
        content: "" !important;
    }

    .tooltip.top .tooltip-arrow {
        bottom: 0;
        left: 50%;
        margin-left: -5px;
        border-top-color: #17a2b8;
        border-width: 5px 5px 0;
    }

    .tooltip.right .tooltip-arrow {
        top: 50%;
        left: 0;
        margin-top: -5px;
        border-width: 5px 5px 5px 0;
        border-right-color: #17a2b8;
    }

    .tooltip-inner {
        color: #fff;
        background: #17a2b8;
        border: solid 1px #17a2b8;
        text-align: left;
    }
    /**mặc định thu gọn phần tìm kiếm*/
    .extend_fillter {
        display: none;
    }

    .extend_btn {
        width: 100%;
    }

    .form-group {
        min-height: 34px;
    }

    .valid-task {
        color: red;
    }

    tr.rgNoRecords td {
        padding: 20px 0 20px 10px !important;
    }

    tr.rgNoRecords td {
        border: 1px solid #eaeaea;
        border-top: none;
        background: #fbfbfb;
    }


    /* style xét lên lớp */
    .wirard-container {
        padding: 0px 5px;
        border-radius: 5px;
    }

    .RadWizard_Bootstrap .rwzBreadCrumb .rwzLink {
        padding: 5px 20px !important;
    }

    .RadWizard .rwzButton {
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer !important;
        background-image: none;
        border: 1px solid transparent !important;
        border-radius: 4px;
        color: #fff !important;
        background-color: #4CAF50 !important;
        border-color: #4CAF50 !important;
        min-width: 100px !important;
    }

    .RadWizard_Bootstrap .rwzProgressBar {
        height: 5px !important;
        border-radius: 0px !important;
        box-shadow: none !important;
    }

    .RadWizard_Bootstrap .rwzProgress {
        height: 5px !important;
        box-shadow: none !important;
    }

    .wirard-container .step-content-wraper {
        padding: 0px 0 20px 0;
    }

    .wirard-container .title-step h2 {
        font-weight: 700;
        margin-top: 8px !important;
        float: left;
    }

    .wirard-container .action-step, .wirard-container .result-message {
        text-align: right;
        margin: 0 0 10px;
        float: right;
    }

    .wirard-container label {
        display: inline-block;
    }

    .wirard-container .first {
        margin-left: 0;
    }

    .clear {
        zoom: 1;
    }

        .clear:after {
            content: "";
            display: block;
            clear: both;
        }

    .wirard-container .inputWrapper {
        float: left;
        margin-left: 30px;
        position: relative;
    }

    .wirard-container .RadWizard {
        *width: 550px !important;
        *height: 320px !important;
    }

        .wirard-container .RadWizard .rwzContent {
            overflow: visible;
        }

    .wirard-container .RadListBox .rlbTemplateContainer {
        border: 0;
        background: #eeeeee;
    }

    .badge:hover {
        color: #ffffff;
        text-decoration: none;
        cursor: pointer;
    }

    .badge-error {
        background-color: #b94a48;
    }

        .badge-error:hover {
            background-color: #953b39;
        }

    .badge-warning {
        background-color: #f89406;
    }

        .badge-warning:hover {
            background-color: #c67605;
        }

    .badge-success {
        background-color: #468847;
    }

        .badge-success:hover {
            background-color: #356635;
        }

    .badge-info {
        background-color: #3a87ad;
    }

        .badge-info:hover {
            background-color: #2d6987;
        }

    .badge-inverse {
        background-color: #333333;
    }

        .badge-inverse:hover {
            background-color: #1a1a1a;
        }

    .page-header {
        margin: 10px 0 10px 0;
        font-size: 14px !important;
        font-weight: 700;
    }

    .step-result-content {
        margin-bottom: 10px;
        line-height: 26px;
    }

    .table-result {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
    }

        .table-result th {
            background-color: #0071a6 !important;
            color: white !important;
            font-weight: bold !important;
            border-bottom: none !important;
        }

        .table-result thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #eceeef;
        }

        .table-result tbody tr:hover td, .table-result tbody tr:hover th {
            background: #d0ecff !important;
        }

    .RadMenu {
        z-index: 999 !important;
    }

    .RadAjaxPanel {
        border-radius: 6px;
    }

    .modal {
        z-index: 2001 !important;
    }


        .modal .modal-title {
            font-weight: 700;
        }

    .modal-dialog {
        width: 550px;
        margin: 200px auto !important;
    }

    .modal-backdrop {
        z-index: 2000 !important;
    }

    button .close {
        top: 10px !important;
        right: 10px !important;
    }

    .btn-action {
        float: right;
        margin-left: 6px;
    }

    .pnlAction input {
        vertical-align: top;
        position: relative;
        bottom: 3px;
        cursor: pointer;
    }

    .pnlAction label {
        margin-left: 6px;
        cursor: pointer;
    }

    #confirm-delete-message {
        padding: 0px 18px;
        margin-top: -8px;
        color: #D9534F;
    }

    .cf-space {
        margin: 0 0 6px;
    }

        .cf-space input[type="submit"] {
            margin-right: 6px;
        }

    .cf-require {
        float: right;
    }

    .table-popconfig input[type="radio"] {
        vertical-align: middle;
        position: relative;
        bottom: 3px;
        margin-right: 4px;
    }

    .table-popconfig input[type="radio"], .table-popconfig label {
        cursor: pointer;
    }

    .label-wrapper a img {
        margin-top: 5px;
    }

    .invalid-value {
        background-image: linear-gradient(225deg, red, red 5px, transparent 6px, transparent) /*, linear-gradient(135deg, orange, orange 5px, transparent 5px, transparent)*/ !important;
    }

    .message-notice {
        color: red;
        font-size: 15px !important;
        text-align: left;
        /*padding: 10px 10px 0px 15px;*/
    }

    .import-toolbar {
        padding: 0 0 8px;
    }

    .import-description {
        padding: 8px 0 8px;
    }

    .import-file {
        padding: 20px 0;
    }

        .import-file .input-select-file {
            border-top-left-radius: 4px !important;
            border-bottom-left-radius: 4px !important;
        }

    .import-toolbar, .import-description {
        border-bottom-width: 1px;
        border-bottom-style: solid;
        border-bottom-color: #d9d9d9;
    }

    .import-file .btn {
        padding: 7px 12px;
    }

    .rwd-import .rwContent {
        padding: 3px 0 !important;
    }


    .rdp-date-imput .RadInput input {
        height: 34px !important;
        border-top-right-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .rdp-date-imput .rcCalPopup {
        border-top-right-radius: 4px !important;
        border-bottom-right-radius: 4px !important;
    }

    .btn[disabled]:hover {
        filter: alpha(opacity=65);
        -webkit-box-shadow: none;
        box-shadow: none;
        background-color: #77a6ce;
    }

    /** Customize the demo canvas */
    .exampleRadComboBox .colheader1, .exampleRadComboBox .colheader2 {
        font-weight: bold;
    }

    .exampleRadComboBox .colheader1 {
        padding-left: 18px !important;
    }

    .exampleRadComboBox .colheader2 {
        padding-left: 12px !important;
    }

    .exampleRadComboBox .rcbHeader ul,
    .exampleRadComboBox .rcbFooter ul,
    .exampleRadComboBox .rcbItem ul,
    .exampleRadComboBox .rcbHovered ul,
    .exampleRadComboBox .rcbDisabled ul {
        margin: 0;
        padding: 0;
        width: 100%;
        display: inline-block;
        list-style-type: none;
    }

    .exampleRadComboBox.RadComboBoxDropDown .rcbHeader {
        padding: 5px 27px 4px 7px;
    }

    .exampleRadComboBox .col1 {
        width: 45%;
    }

    .exampleRadComboBox .col2 {
        width: 55%;
    }

    .exampleRadComboBox .col1,
    .exampleRadComboBox .col2,
    .exampleRadComboBox .col3 {
        margin: 0;
        padding: 5px 5px 0 14px;
        line-height: 14px;
        float: left;
    }

    .gridTotalRow {
        font-weight: bold !important;
    }


    /* Style giao dien*/
    div.label-wrapper .control-label.coMaSo {
        position: absolute;
        right: 37px;
    }

    div.label-wrapper .control-label {
        position: absolute;
        right: 0px;
    }

    div.label-wrapper .n-index {
        position: absolute;
        right: 0px;
    }

    div.rgEditForm div.container .lable-control {
        text-align: right;
    }

    div.rgEditForm div.container .control-label {
        text-align: right !important;
    }

    div.rgEditForm .lable-control {
        text-align: right;
    }

    div.rgEditForm .control-label {
        text-align: right !important;
    }

    }

    .chiTietTxtImg {
        display: block;
        float: left;
    }

    .chiTietTxtLink {
        cursor: pointer;
        display: block;
        float: left;
        margin-top: 10px;
        margin-left: 6px;
    }


    label.listNoteTop {
        width: 100%;
        margin-top: 0px !important;
        padding: 0px;
    }

    ul.listNote {
        display: block;
        float: left;
        margin-top: 5px;
    }

    .bt-mo-note {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/ShowNote.png) no-repeat 0 0;
        cursor: pointer;
    }

    .bt-dong-note {
        margin-top: 4px;
        margin-left: 4px;
        float: right;
        width: 29px;
        height: 29px;
        background: url(/images/HideNote.png) no-repeat 0 0;
        cursor: pointer;
    }

    .bt-note {
    }

    span.closeNote {
        color: #357ebd;
        margin-left: 10px;
        font-style: normal;
        font-weight: bold;
        cursor: pointer;
    }

        span.closeNote:hover {
            color: #0074f2;
        }

    .tooltipParent {
        position: relative;
        display: inline-block;
        /* If you want dots under the hoverable text */
    }

        /* Tooltip text */
        .tooltipParent .tooltiptext {
            visibility: visible;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            z-index: 1;
            top: 50px;
        }

    .tooltip-bottom {
        top: 135%;
        left: 50%;
        margin-left: -60px;
    }

    .tooltipParent .tooltiptext::after {
        content: " ";
        position: absolute;
        bottom: 100%; /* At the top of the tooltip */
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent black transparent;
    }

    .nextRowAndCol {
        float: right !important;
        text-align: right !important;
        margin-top: 4px;
    }

        .nextRowAndCol .nextRowAndColIn {
            padding-top: 7px;
            float: right;
        }

            .nextRowAndCol .nextRowAndColIn label {
                font-weight: normal !important;
            }

    .nextRowAndColLabel {
        margin-top: 7px;
        /*margin-right: 15px;*/
    }

    .nextRowAndCol .nextRowAndColIn input.nextColInput {
        margin-top: 2px;
        float: left;
    }

    .nextRowAndCol .nextRowAndColIn input.nextRowInput {
        margin-top: 2px;
        float: left;
    }

    .message-notice {
        padding-bottom: 6px !important;
    }

    .fillterFieldsOneRow .form-group .control-label:not(:first-child) {
        margin-left: 10px !important;
    }

    .messageContent {
        color: red;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid #e7e7e7;
        padding-left: 15px;
        line-height: 20px;
    }

    #qi-panel-message .messageNotContent {
        margin-bottom: 6px;
        border: none !important;
        margin-bottom: 0px !important;
        border: none !important;
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }

    .qiPanelSearchNotContent {
        border: none !important;
    }

    .noteContentBaoCao .listNote span {
        line-height: 22px;
    }

    .noteContentBaoCao ul.listNote li {
        list-style: none;
    }

        .noteContentBaoCao ul.listNote li p {
            margin: 0px !important;
        }


    .RadTabStripTop_Bootstrap .rtsLevel1 span {
        font-weight: bold;
    }

    .RadTabStripTop_Bootstrap .rtsLevel1 .rtsSelected span.rtsTxt {
        color: #2191f3;
    }

    ul.nav.nav-tabs li a {
        font-weight: bold;
    }

    .diemTruong div.label-wrapper .control-label.coMaSo {
        position: absolute;
        right: 37px;
    }



    #qi-panel-note::before {
        clear: both;
    }

    .qiPanelSearchNotContent div.form-group {
        height: 0px !important;
        padding: 0px !important;
        margin: 0px !important;
        min-height: 0px !important
    }

    .fixMarginRadio {
        display: block;
        line-height: 38px;
    }

    .formGroupHoSoTruong {
        margin-top: 15px !important;
    }

    ul.rcbList > li.rcbHovered:hover {
        background: #dadada !important;
    }

    div.colMonHoc {
        width: 180px !important;
        float: left;
    }


    .thamGiaBDQLGD {
        right: 23px !important;
    }

    .thamGiaBDCBQLCotCan {
        right: 22px !important;
    }

    .quaTrinhDTBD {
        right: 28px !important;
    }

    .giaoVienCoTiengDTTS {
    }

    .danhGiaChuanNgheNghiep {
        right: 28px !important;
    }

    .thamGiaCTBDTXuyen {
        right: 27px !important;
    }

    .giaoVienCnGioi {
        right: 30px !important;
    }

    p.ghiChuBaoCao {
        color: #000 !important;
        display: block;
        float: left;
        width: 100%;
        padding: 0px;
        margin: 0px;
    }

    .messageContent:after {
        content: ".";
        display: block;
        clear: both;
        visibility: hidden;
        height: 0;
    }

    p.ghiChuBaoCao span span {
        color: #000 !important;
        font-weight: bold;
    }

        p.ghiChuBaoCao span span:last-child {
            font-weight: normal !important;
        }

    .messageContent {
        line-height: 21px;
    }

    .list-chucnang {
        z-index: 999;
    }

    .toolbar-config {
        padding: 0px 2px 5px !important;
    }

    input[type=checkbox], input[type=radio] {
        margin: 4px 0 0;
        margin-top: 1px\9;
        line-height: normal;
        width: 30px;
        height: 15px;
    }

    .sprite_button_close {
        cursor: pointer;
        background-image: url(../images/iconoff.png);
        height: 35px;
        width: 35px;
        background-position: 0px 0px;
    }

    .modal-header {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        padding: 12px;
        border-bottom: 1px solid #e5e5e5;
        background-color: #2270b5;
        color: #fff;
    }

    .item-thongbao {
        padding-top: 5px;
        padding-bottom: 10px;
        border-bottom: 1px solid #ededed;
    }

    .form-check input[type=checkbox], .form-check input[type=radio] {
        vertical-align: middle !important;
        width: 30px !important;
        height: 15px !important;
    }

    .form-check .form-check-label, .form-check .form-check-label {
        vertical-align: sub !important;
    }

    .item-thongbao .title-thongbao a {
        font-size: 18px;
        color: #333;
        font-weight: bold;
    }

    .item-thongbao .sub-tb {
        color: #ababab;
        font-weight: normal !important;
        font-size: 12px;
        margin-right: 10px;
    }

    .item-thongbao .date {
        color: #0f6ab1;
        font-weight: normal !important;
        font-size: 12px;
    }

    .swal2-styled.swal2-deny {
        color: #fff !important;
        background-color: #286090 !important;
        border-color: #204d74 !important;
    }

    .swal2-styled.swal2-confirm {
        color: #fff !important;
        background-color: #286090 !important;
        border-color: #204d74 !important;
    }

    .swal2-styled.swal2-cancel {
        color: #fff !important;
        background-color: #286090 !important;
        border-color: #204d74 !important;
    }

    table {
        border: 1px solid #868585;
    }

    th {
        border: 1px solid #868585;
        height: 30px
    }

    td {
        border: 1px solid #868585;
        height: 30px
    }

    table {
        border-collapse: collapse;
    }

        table tr:nth-child(odd) {
            background-color: #eee;
        }

        table tr:nth-child(even) {
            background-color: white;
        }

        table tr:nth-child(1) {
            background-color: lightgrey;
        }

    #post {
        width: 220px;
        height: 50px;
        float: left;
    }

    #post2 {
        width: 90px;
        height: 50px;
        float: right;
    }
</style>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <div class="container">
        <div>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$ctl00$hfServerValue" id="ContentPlaceHolder1_ctl00_hfServerValue">
            <div class="form-horizontal">
                <div id="qi-div-toolbar-form">
                    <h4 id="ContentPlaceHolder1_ctl00_lbTieuDe"><span class="iconPage"></span><span style="float: left;font-size:16px">Cập nhật chỉ số nước</span></h4>
                    <div class="clear"></div>
                </div>

                <div id="qi-panel-search" class=" qi-div-toolbar-form text-left" style="padding-left:10px">

                    <div class="row">
                        <div class="col-md-1">
                            <label class="control-label" style="margin:10px">Tháng:</label>

                        </div>

                        <div class="col-md-5">

                            <select class="clean" id="selectitemthang" style="float:left; margin-left:10px">
                                <option>--Chọn tháng--</option>
                                <option id="selectitemthang" value="1">1</option>
                                <option id="selectitemthang" value="2">2</option>
                                <option id="selectitemthang" value="3">3</option>
                                <option id="selectitemthang" value="4">4</option>
                                <option id="selectitemthang" value="5">5</option>
                                <option id="selectitemthang" value="6">6</option>
                                <option id="selectitemthang" value="7">7</option>
                                <option id="selectitemthang" value="8">8</option>
                                <option id="selectitemthang" value="9">9</option>
                                <option id="selectitemthang" value="10">10</option>
                                <option id="selectitemthang" value="11">11</option>
                                <option id="selectitemthang" value="12">12</option>
                            </select>

                        </div>
                        <div class="col-md-6" style="float:right">
                            <input type="submit" value="Cập nhật chỉ số nước" id="btnLuu" class="btn btn-success qi-bt " style="height:fit-content;float:right" onclick="location.href='#" />
                        </div>
                    </div>
                </div>

                <div style="clear: both"></div>
            </div>

            <div>
                <div class="RadAjaxPanel" id="ctl00_ContentPlaceHolder1_ctl00_ctl00_ContentPlaceHolder1_ctl00_RadGrid1Panel" style="display: block;margin-top:20px">
                    <div id="ctl00_ContentPlaceHolder1_ctl00_RadGrid1" class="RadGrid RadGrid_Bootstrap" tabindex="0">

                        <div class="rgHeaderWrapper">
                            <div id="ctl00_ContentPlaceHolder1_ctl00_RadGrid1_GridHeader" class="rgHeaderDiv" style="overflow: hidden; margin-right: 17px;">

                                <table class="rgMasterTable rgClipCells" id="ctl00_ContentPlaceHolder1_ctl00_RadGrid1_ctl00" style="width: 100%;font-size:13px ;table-layout: fixed; overflow: hidden; empty-cells: show; font-size:16px;">
                                    <colgroup>

                                        <col style="width:50px">
                                        <col style="width:150px">
                                        <col style="width:100px">
                                        <col style="width:150px">
                                        <col style="width:150px">
                                        <col style="width:50px">
                                    </colgroup>
                                    <thead>
                                        <tr>

                                            <th scope="col" class="rgHeader qi-head-list-grid" style="text-align:center;">Mã phòng</th>
                                            <th scope="col" class="rgHeader qi-head-list-grid" style="text-align:center;">Họ tên chủ phòng</th>
                                            <th scope="col" class="rgHeader qi-head-list-grid" style="text-align:center;">Tháng</th>
                                            <th scope="col" class="rgHeader qi-head-list-grid" style="text-align:center;">Chỉ số cũ</th>

                                            <th scope="col" class="rgHeader qi-head-list-grid" style="text-align:center;">Chỉ số mới</th>
                                            <th scope="col" class="rgHeader qi-head-list-grid" style="text-align:center;">Cập nhật</th>
                                        </tr>
                                    </thead>

                                    <tbody id="tablebody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#selectitem').off('change').on('change', function () {
                var id = $(this).val();
                if (id != '' && id != 'tatca') {
                    Loadtable(id);
                    LoadCSM(id);
                }
                else if (id == 'tatca') {
                    LoadtableAll();
                }
                else {
                    $('#tablebody').html('');
                }
            });
            $('#selectitemthang').off('change').on('change', function () {
                var id = $(this).val();
                if (id != '' && id != 'tatca') {
                    LoadtableThang(id);
                    LoadCSM(id);
                }
                else if (id == 'tatca') {
                    LoadtableAllThang();
                    LoadCSM(id);
                }
                else {
                    $('#tablebody').html('');
                }
            });
        });
        function Loadtable(id) {
            $.ajax({
                dataType: "json",
                type: "GET",
                url: '/QuanLy/ChangeTableDien',
                data: { maphong: id },
                success: function (response) {
                    var html = "";
                    $.each(response, function (i, item) {

                        html += "<tr>";
                        html += "<td align='center'>" + item.MAPHONG + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.HOVATEN + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.THANG + "/" + item.NAM + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.CHISOCU + "</td>";
                        html += "<td><input type='text' class='form-control' style='width: 100%' name='csm' id='csm' /></td>";
                        html += "<td align='center'><img src='~/images/update.png' style='cursor: pointer' class='loadword' id='loadword' data-id='" + item.CHISOCU + "'></td>";

                        html += "</tr>";

                    });

                    $('#tablebody').html(html);
                }
            });
        }
        function LoadtableAll() {
            $.ajax({
                dataType: "json",
                type: "GET",
                url: '/QuanLy/NoChangeTableDien',

                success: function (response) {
                    var html = "";
                    $.each(response, function (i, item) {
                        html += "<tr>";
                        html += "<td align='center'>" + item.MAPHONG + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.HOVATEN + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.THANG + "/" + item.NAM + "</td>";

                        html += "<td align='center' class='rgRow'>" + item.CHISOCU + "</td>";
                        html += "<td><input type='text' class='form-control' style='width: 100%' name='csm' id='csm' /></td>";
                        html += "<td align='center'><img src='../images/print.png'/ style='cursor: pointer' class='loadword' id='loadword' data-id='" + item.CHISOCU + "'></td>";

                        html += "</tr>";
                        $('#cms').val(item.CHISOMOI);
                    });

                    $('#tablebody').html(html);
                }
            });
        }
        function LoadtableThang(id) {
            $.ajax({
                dataType: "json",
                type: "GET",
                url: '/QuanLy/ChangeTableDienThang',
                data: { thang: id },
                success: function (response) {
                    var html = "";
                    $.each(response, function (i, item) {
                        html += "<tr>";
                        html += "<td align='center'>" + item.MAPHONG + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.HOVATEN + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.THANG + "/" + item.NAM + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.CHISOCU + "</td>";
                        html += "<td><input type='text' class='form-control' style='width: 100%' name='csm' id='csm' /></td>";
                        html += "<td align='center'><img src='../images/edit.png'/ style='cursor: pointer' class='loadword' id='loadword' data-id='" + item.CHISOCU + "'></td>";

                        html += "</tr>";
                        $('#csm').val(item.CHISOMOI);
                    });
                    $('#tablebody').html(html);
                }
            });
        }

        function LoadtableAllThang() {
            $.ajax({
                dataType: "json",
                type: "GET",
                url: '/QuanLy/NoChangeTableDienThang',

                success: function (response) {
                    var html = "";
                    $.each(response, function (i, item) {
                        html += "<tr>";
                        html += "<td align='center'>" + item.MAPHONG + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.HOVATEN + "</td>";
                        html += "<td align='center' class='rgRow'>" + item.THANG + "/" + item.NAM + "</td>";

                        html += "<td align='center' class='rgRow'>" + item.CHISOCU + "</td>";
                        html += "<td><input type='text' class='form-control'  style='width: 100%' name='csm' id ='csm' /></td>";
                        html += "<td align='center'><img src='../images/edit.png'/ style='cursor: pointer' class='loadword' id='loadword' data-id='" + item.CHISOCU + "'></td>";

                        html += "</tr>";
                        $('#csm').val(item.CHISOMOI);
                    });
                    $('#tablebody').html(html);
                }
            });
        }
    </script>
    <?php require_once("../mohinhmvc/applications/views/jquerynohome.php") ?>

</body>
</html>


