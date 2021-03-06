
/* Because we do dynamic window height measurements for timecard sizing, we need to make sure that timecard.css 
   is loaded and styles are applied. */
@import url("css/timecard.css");

/* --------------- Styles for common HTML elements --------------- */

/* We can add local('??') to src: if we want the browser to always download the font we've specified */
@font-face {
  font-family: 'ClearSans';
  src: url('include/fonts/ClearSans-Light.eot?') format('eot'), url('include/fonts/ClearSans-Light.woff') format('woff'), url('include/fonts/ClearSans-Light.ttf') format('truetype');
  font-weight:300;
}

@font-face {
  font-family: 'ClearSans';
  src: url('include/fonts/ClearSans-Regular.eot?') format('eot'), url('include/fonts/ClearSans-Regular.woff') format('woff'), url('include/fonts/ClearSans-Regular.ttf') format('truetype');
  font-weight:400;
}


@font-face {
  font-family: 'ClearSans';
  src: url('include/fonts/ClearSans-Medium.eot?') format('eot'), url('include/fonts/ClearSans-Medium.woff') format('woff'), url('include/fonts/ClearSans-Medium.ttf') format('truetype');
  font-weight:500;
}


@font-face {
  font-family: 'ClearSans';
  src: url('include/fonts/ClearSans-Bold.eot?') format('eot'), url('include/fonts/ClearSans-Bold.woff') format('woff'), url('include/fonts/ClearSans-Bold.ttf') format('truetype');
  font-weight:600;
}

html {
    background-color:#FAFAFA;
}

body {
    margin: 0px;
    overflow: auto;
    font-family: 'ClearSans', sans-serif;
    font-size: 14px;
    color: #333333;
    vertical-align: top;
    min-height: 100%;
}

td {
    margin: 0px;
    font-family: 'ClearSans', sans-serif;
    font-size: 14px;
    color: #333333;
    vertical-align: top;
}

ul { margin-top: 0px; }

ol { margin-top: 0px; }

img {
    vertical-align: middle;
    border:none;
}

a            { color: #3178C6;  cursor: pointer; text-decoration: none; }
a:link       { color: #3178C6;  cursor: pointer; text-decoration: none; }
a:visited    { color: #3178C6; cursor: pointer; text-decoration: none; }
a:active     { color: #3178C6; cursor: pointer; text-decoration: underline; }
a:hover      { cursor: pointer; text-decoration:none; color:#185394;  }

.clear { clear: both; }
.inline { display: inline; }
.block { display: block; }
.inline-block { display: inline-block; }

.float-left { float: left; }
.float-right { float: right; }

.text-left { text-align: left; }
.text-right { text-align: right; }

div.global-winc-container {
    border-top: none;
    border-right: 1px solid #C1C1C1;
    border-bottom: 1px solid #C1C1C1;
    border-left: 1px solid #C1C1C1;
    background-color: #F1F1F1;
    border-bottom-left-radius:3px;
    border-bottom-right-radius:3px;
}

/* ------------------- Header Elements ----------------------- */

#box_top {
    height:48px;
    display:block;
    background-color:#333333;
    padding: 7px;
    color: #FFFFFF;
}
    
#box_content {
    vertical-align: top;
    background: #FAFAFA;
    padding: 0px;
    margin: 0px;
}

#bar_top {
    background-color: #FAFAFA;
    height:24px;
    padding:0 10px;
}

#box_top #tsheets_logo {
    float:left;
    padding:7px;
}

#box_top #clock_wrapper {
    position:absolute;
    left:50%;
    margin-left:-65px;
    padding:2px 0 0 0;
}

#clock_wrapper #clock_box {
    font-family: 'ClearSans', sans-serif;
    cursor: pointer;
    font-size:32px;
    color:#FFFFFF;
    font-weight:500;
    text-align:center;
    margin:0 auto;
}

#clock_wrapper #clock_box .clock-seconds {
    font-weight:300;
    font-size:16px;
}

#clock_wrapper #clock_box #clock9 {
    font-size:12px;
    font-weight:400;
    position: relative;
    top: 7px;
    float: left;
}

#account_wrapper {
    position: relative;
    float:right;
    height:30px;
    margin:0;
    font-size: 10px;
}

#dashboard_account_center .avatar_holder {
    float:left;
}

#account_wrapper p {
    padding:0px;
    float:left;
}

#dashboard_account_center {
    float:left;
    cursor:pointer;
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius:3px;
    padding: 6px;
    white-space: nowrap;
    min-width:168px;
}

#dashboard_account_center:hover {
    background-color:rgba(255, 255, 255, 0.1);
}

#dashboard_account_center:active {
    background-color:rgba(255, 255, 255, 0.1);
}

#account_user_name {
    font-size:14px;
    margin:0 40px 0 0;
}

#company_name_display {
    padding:0 0 0 14px;
    margin-right:32px;
}


/*-------Notification Center--------*/

.notification_wrapper {
    font-family: 'ClearSans', sans-serif;
    width: 400px;
    border:1px solid #DADADA;
    border-radius: 0px;
    position: absolute;
    top: 54px;
    left: -297px;
    box-shadow: 0px 1px 2px 1px rgba(25,25,25,0.24);
    display: none;
    z-index: 70;
}

.notification_pointer {
    position: absolute;
    top: -10px;
    right:73px;
}

.notification_header_wrapper {
    border-radius: 3px 3px 0 0;
    background-color: #F1F1F1;
    position: relative;
    width: 100%;
    padding: 13px 0px 13px 0px;
}

.notification_header {
    width: 100%;
    color: #333333;
    font-size: 16px;
    text-align: left;
    margin:0px;
    padding-left:13px;
    padding-right:190px;
}

.notification_item_wrapper {
    border-top: 1px solid #DADADA;
    background: #FFFFFF;
}

.notification_item {
    font-size: 14px;
    padding: 13px 13px 18px 13px;
    color: #666;
    -ms-box-sizing: content-box;
    border-bottom: 1px solid #bebebe;
    position: relative;
}

.notification_date {
    text-align:left;
    font-size:0.8em; 
    color:#999999;
    margin-bottom:7px;
}

.first_notification {
    border-top:0px;
}

.notification_cta {
    text-decoration: underline;
    text-align: center;
    float: right;
}

.clear {
    clear:both;
}

.conflict {
    color: #990000;
}

.pull_left {
    float:left;
}

.width_100 {
    width: 100%;
}

.notification_item .close_icon {
    position: absolute;
    right: 7px;
    top: 7px;
    cursor: pointer;
    opacity:0.6;
}

.notification_item .close_icon:hover {
    opacity:1.0;
}

.notification_center {
    position: relative;
    float: left;
    margin: 10px 8px;
}

#notification_center_link {
    top:11px;
    right:168px;
    cursor:pointer;
}

#nc_unread_count {
    background-color: #DF1F26;
    color: #fff;
    border-radius: 4px;
    font-size: 12px;
    padding: 0px 4px 1px 4px;
    position:absolute;
    top: -2px;
    right: -3px;
    cursor:pointer;
}

.nc_preview_wrapper {
    font-family: 'helvetica neue', 'helvetica', 'arial', 'sans serif';
    color: #333333;
    width: 360px;
    border-radius: 0px;
    position: absolute;
    top: 0px;
    left: -198px;
    background: #F1F1F1;
    box-shadow: 0px 1px 2px 1px rgba(25,25,25,0.24);
    z-index: 90;
}
    
.nc_preview_header {
    padding: 13px 0px 13px 13px;
    font-size: 16px;
    font-weight: 500;
}

.nc_preview {
    padding: 0px 0px 13px 13px;
    font-size: 14px;
}

#nc_close_preview {
    cursor:pointer;
    position: absolute;
    top: 7px;
    right: 7px;
}

#nc_clear_all a:hover {
    color: #333333;
}

#nc_clear_all {
    padding: 0px;
    margin: 0px;
    text-decoration: none;
}

#nc_clear_all_link {
    font-size:12px;
    color: #666666;
    cursor: pointer;
    text-decoration:none;
    vertical-align:top;
}

#nc_close_nc {
    cursor:pointer;
    padding:0px 13px 6px 13px;
    float:right;
}



/*-------------- Account Center -----------------*/
.account-center-wrapper {
    font-family: 'ClearSans', sans-serif;
    width: 300px;
    border-radius: 0px;
    position: absolute;
    top: 49px;
    left: -70px;
    background: #fefefe;
    box-shadow: 0px 1px 5px rgba(0,0,0,.4);
    border:1px solid #DADADA;
    display: none;
    z-index: 70;
}

.account-center-pointer {
    position: absolute;
    top: -10px;
    right:152px;
}

#account-center-wrapper .account-center-link {
    font-size:14px;
    color:#333333;
    padding:10px 13px;
    cursor:pointer;
}

#account-center-wrapper .account-center-link:hover {
    background-color: #F1F1F1;
}

#account-center-wrapper #account_center_sound_link {
    float:right;
    cursor:pointer;
    padding: 9px 13px;
    position:relative;
    top:-36px;
    border-left:1px solid #DADADA;
}

#account-center-wrapper #account_center_url_switcher {
    white-space:nowrap;
    padding: 0px 13px 13px 13px;
}

#account_center_timecard_link #account_center_on_the_clock_status {
    float:right;
    color:#333333;
    font-size:12px;
    text-transform:uppercase;
}

.account-center-user-info {
    font-family: 'ClearSans', sans-serif;
    padding: 13px;
}

.account-center-user-info #account_center_user_avatar {
    float:left;
    padding-right:9px;
}

#account_center_url_display {
    padding:0px 0px 13px 0px;
    font-size:12px;
    color:#666666;
}

#account_center_username_display {
    font-size: 16px;
    color: #333333;
}

#account_center_user_status_display {
    font-size:12px;
    color:#666666;
}

#account_center_switch_url_button {
    width: 170px;
    margin: 0 auto;
    display: block;
}

/* END account center styling */


/* When a clients account has been blocked.
 * Includes styling for the overlay managers and admins see
 */

#account_blocked_overlay_wrapper {
    margin: 15px;
    font-size: 14px;
    color: #212121;
}

.account_blocked_header {
    font-size: 28px;
}

.account_blocked_msg {
    margin: 25px 0;
}

#account_blocked_action_msg {
    margin: 0 0 25px 0;
}

#account_blocked_overlay_btn {
    display: block;
    position: relative;
    padding: 10px;
    margin: 0 auto;
    margin-bottom: 15px;
}

.account_blocked_footer {
    font-size: 11px;
    text-align: center;
}

.account_blocked_footer a {
    color: #212121;
}

.account_blocked_footer a:hover {
    color: black;
}

.account_blocked_msg ul {
    line-height:125%;
}

#account_blocked_close_acct {
    float:right;
    text-decoration: underline;
}

#account_blocked_logout {
    float:left;
    text-decoration:underline;
}

#account_blocked_close_acct_cancel {
    text-decoration:underline;
}

#account_blocked_close_acct_submit {
    margin: 15px 0 0 0;
}

.ts-title-help-link {
    cursor: pointer;
    font-size: 16px;
    text-decoration:none;
    color:#d1d1d1;
    outline:none;
}

.ts-hyperlink a {
    font-size: 14px;
    cursor: pointer;
}

.ts-text-box {
    font-family: ClearSans, sans-serif;
    height: 26px;
    border: 1px solid #dadada;
    padding-left: 5px;
    color: #333333;
    font-size:14px;
}

.ts-text-box:focus {
    outline:none;
    border-color:#9ecaed;
    box-shadow:0 0 3px #9ecaed;
}

.ts-text-box:disabled {
    background-color: transparent;
    color:#7F7F7F;
}

.ts-text-box-label {
    font-size:14px;
    color:#333333;
}

.ts-text-box::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #999999;
}
.ts-text-box:-moz-placeholder { /* Mozilla Firefox 4+ */
    color:    #999999;
    opacity:  1;
}
.ts-text-box:-ms-input-placeholder { /* Internet Explorer 10 - 11 */
    color:    #999999;
}

.ts-icon-glow {
    outline: none;
    box-shadow: -4px 0px 10px #9ecaed;
}

.ts-select-box {
    display:inline-block;
    height: 28px;
    border: 1px solid #dadada;
    cursor:pointer;
    outline: none;
}

.ts-select-box select {
    background: url('/images/glyph_icons/triangle_down_16.png') no-repeat right 5px center #fff;
    font-family: ClearSans, sans-serif;
    min-width: 44px;
    padding-left: 5px;
    padding-right: 21px;
    font-size: 14px;
    line-height: normal;
    height:28px;
    border: 0;
    border-radius: 0;
    -webkit-appearance: none;
    -moz-appearance:none;
    appearance:none;
    outline: none;
    cursor:pointer;
    width:100%;
}

.ts-select-box select:disabled {
    background-color: transparent;
    cursor:default;
}

.ts-block-title {
    font-weight:500; 
    font-size: 20px;
    color: #333333;
}

.ts-block-subtitle {
    font-size:14px; 
    color: #333333;
}

.ts-input-label {
    font-weight: 500;
    font-size: 12px;
    color: #666666;
    text-transform: uppercase;
}

.ts-input-remove-emboss {
    border: 1px solid #DADADA;
}
    

/* For IE10+ */
select::-ms-expand{
    display:none;
}
    
/*-------------- Text at bottom of the page (both sites) --------------*/
.bottomBox {
    padding: 2px 4px 6px 4px;
    font-family: 'ClearSans', sans-serif;
    font-size: 12px;
    font-weight: 400;
    color: #999999;
    background-color: #FAFAFA;
}
.bottomBox span {
    color:#666666;
}
.bottomBox a {
    color:#666666;
    text-decoration:none;
}
.bottomBox a:hover {
    color:#333333;
    text-decoration:none;
}

/* Dashboard footer */
#box_bottom {
   position:fixed;
   left:42%;
   bottom:0px;
}

/* Some Menus */
div.menu {
    background-color: #CFDFFF;
}
div.menu .row {
    font-size: 12px;
    vertical-align: middle;
    padding: 2px 6px;
    background-color: #CFDFFF;
}
div.menu .hovered {
    font-size: 12px;
    vertical-align: middle;
    padding: 2px 6px;
    background-color: #B1C6E3;
}


/* ---------------- forms ------------------------ */

form {
    border: none;
    margin: 0;
    display: inline;
}

textarea.edit {
    font-family: monospace;
    border: 1px solid #DADADA;
    color: Black;
    background-color: white;
    padding: 3px;
    width:98%;
}

input.edit,select.edit {
    border: 1px solid #DADADA;
    color: Black;
    background-color: white;
    vertical-align: middle;
    padding: 1px;
    display: inline;
}

input.checkbox {
    border: 1px solid #DADADA;
    background-color: white;
    vertical-align: middle;
    padding: 1px;
    display: inline;
}

input.missing {
    border: 1px solid #DADADA;
    height: 18px !important;
    max-height: 22px !important;
    min-height: 22px !important;
    color: Black;
    background-color: #ffcccc;
    vertical-align: middle;
    padding: 1px;
    display: inline;
}

input.button {
    border: 1px solid #DADADA;
    color: Black;
    background-color: white;
    vertical-align: middle;
    text-decoration:none;
    cursor: pointer;
    height: 22px !important;
    max-height: 22px !important;
    min-height: 22px !important;
    margin: 1px;
    display: inline;
    white-space: nowrap;
}

input.button:hover {
    border: 1px solid #DADADA;
    color: Black;
    background-color: #EBEBEB;
    vertical-align: middle;
    text-decoration:none;
    cursor: pointer;
    height: 22px !important;
    max-height: 22px !important;
    min-height: 22px !important;
    margin: 1px;
    display: inline;
    white-space: nowrap;
}

a.button {
    border: 1px solid #DADADA;
    background-color: white;
    vertical-align: middle;
    text-align: center;
    text-decoration:none;
    cursor: pointer;
    height: 22px !important;
    max-height: 22px !important;
    min-height: 22px !important;
    line-height: 22px;
    display: inline;
    margin-top: 0;
    margin-bottom: .2em;
    padding: 4px 6px;
    white-space: nowrap;
}

a.button:hover {
    border: 1px solid #DADADA;
    background-color: #EBEBEB;
    vertical-align: middle;
    text-align: center;
    text-decoration:none;
    cursor: pointer;
    height: 22px !important;
    max-height: 22px !important;
    min-height: 22px !important;
    line-height: 22px;
    display: inline;
    margin-top: 0;
    margin-bottom: .2em;
    padding: 4px 6px;
    white-space: nowrap;
}

select.select {
    border: 1px solid #DADADA;
    font-family: 'ClearSans', sans-serif;
    color: #333333;
    background-color: #FFFFFF;
    font-size: 14px;
    outline:none;
}

/* ---------------------------- Tip Bubbles --------------------------*/
.tip_bubble_general {
    width:215px;
    background-color:#333;
    border-radius: 3px;
    box-shadow: 1px 1px 5px rgba(0,0,0,.2);
    -moz-box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
    -webkit-box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
    box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
}

.tip_bubble_general div {
    padding: 20px;
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,.6);
    font-size: 14px;
}

.tip_bubble_success {
    width:215px;
    background-color:#70a306;
    border-radius: 3px;
    box-shadow: 1px 1px 5px rgba(0,0,0,.2);
    -moz-box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
    -webkit-box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
    box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
}

.tip_bubble_success div {
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,.6);
    padding: 20px;
    font-size: 14px;
}

.tip_bubble_failure {
    width:215px;
    background-color:#9b402c;
    border-radius: 3px;
    box-shadow: 1px 1px 5px rgba(0,0,0,.2);
    -moz-box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
    -webkit-box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
    box-shadow: inset 0 0 1px rgba(255,255,255,.5), inset 0 1px 0 rgba(255,255,255,.3);
}

.tip_bubble_failure div {
    color:#fff;
    text-shadow:0 1px 0 rgba(0,0,0,.6);
    padding: 20px;
    font-size: 14px;
}

.tip_bubble_close_icon {
	position:absolute;
	right:5px;
	top:5px;
}

.tip_pointer {
    float:right;
    margin:-9px 10px 0 0;
    position:absolute;
    z-index:4000;
    top:0;
    right:0;
}



/* ---------------------------- Misc --------------------------*/

.padding {
    font-size: 12px;
    margin: 0px;
    padding: 2px 4px;
}

.hidden  { visibility:hidden; display:none; }


.noticeBox {
    -moz-border-radius: 4px;
    border:2px solid #009900;
    background-color:#D2F982;
    color:#009900;
    font-weight:normal;
    font-family:verdana, geneva, arial, sans-serif;
    font-size:11px;
    padding:5px;
    margin:5px;
    width:300px;
}

.warningBox {
    -moz-border-radius: 4px;
    border:3px solid #FAC11F;
    background-color:#FFE817;
    color:#f1690F;
    font-weight:normal;
    font-family:verdana, geneva, arial, sans-serif;
    font-size:11px;
    padding:5px;
    margin:5px;
    width:300px;
}

.warningBox_nw {
    -moz-border-radius: 4px;
    border:3px solid #FAC11F;
    background-color:#FFE817;
    color:#f1690F;
    font-weight:normal;
    font-family:verdana, geneva, arial, sans-serif;
    font-size:11px;
    padding:5px;
    margin:5px;
}

.errorBox {
    -moz-border-radius: 4px;
    border:2px solid #F1690F;
    background-color:#FDEDDE;
    color:#f1690F;
    font-weight:normal;
    font-family:verdana, geneva, arial, sans-serif;
    font-size:11px;
    padding:5px;
    margin:5px;
    width:300px;
}

.errorBox_nw {
    -moz-border-radius: 4px;
    border:2px solid #F1690F;
    background-color:#FDEDDE;
    color:#f1690F;
    font-weight:normal;
    font-family:verdana, geneva, arial, sans-serif;
    font-size:11px;
    padding:5px;
    margin:5px;
}

.collapsible {
    display:none;
}

/* ---------------------------- PTO Accruals warning for applying to all --------------------------*/

.confirmation_wrapper {
    
    background:#fff;
    padding:25px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    font-size: 14px;
    box-shadow: 0 0 40px rgba(0,0,0,.3);
}


.confirmation_wrapper p {
    margin-top:15px;
    clear:both;
}

.confirmation_wrapper .buttons {
    margin:0px auto;
    width:350px;
}

.confirmation_wrapper h3 {
    margin-top:0;
    float:left;
}

.confirmation_wrapper input {
    padding:5px;
    margin:0 0 15px 0;
    height:30px;
}

.confirmation_wrapper .warning_icon {
    float:left;
    margin-right:5px;
}

.confirmation_warning b {
    color:#c03925;
}

.confirmation_wrapper label {
    font-weight:800;
    margin-left:75px;
    line-height:30px;
}

.confirmation_wrapper .error-msg {
    padding: 5px;
    color: white;
    margin-bottom: 5px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    display:block;
    clear:both;
}
/* ---------------------------- End of old public site, start of old secondary include --------------------------*/








/* ---------------  Left Menu (and a few ajax menus) ---------------- */
.menu-bar {
    background-color: #F1F1F1;
    font-size: 12px;
    width: 153px;
    text-align: left;
    vertical-align: top;
    margin: 0px;
    padding: 0px;
    border-right: 1px solid #DADADA;
}

.menu-header {
    background-color: #F1F1F1;
    color: #333333;
    font-size: 14px;
    font-weight: 500;
    padding: 4px 16px 0px 16px;
    cursor:default;
    text-transform:uppercase;
}

.menu-header-accordian {
    cursor:pointer;
    padding: 4px 16px;
}

.menu-item {
    font-size: 12px;
    color: #333333;
    background-color: #F1F1F1;
    margin: 0px;
    padding: 2px 5px;
}

.main-menu-header-accordian:hover {
    background-color:#DADADA;
    cursor:pointer;
}

#report_menu_container {
    width:300px;
}

#report_menu_container .success-msg {
    display:none;
    padding:5px 5px;
    color:#fff; margin-bottom:5px;
    -moz-border-radius:3px;
    border-radius:3px;
    background-color:#75d01c;
}

#report_menu_container .error-msg {
    background-color:#ff0000;
}

#report_menu_container .report-section-header {
    font-family:'ClearSans', sans-serif;
    font-weight:500;
    font-size:13px;
    background-color: #FFFFFF;
    padding:6px 17px;
    cursor:pointer;
    color:#333333;
    text-transform:uppercase;
}

#report_menu_container .report-section-header:hover {
    background-color:#f1f1f1;
}

#report_menu_container .report-section-links {
    background:#fff;
    font-weight:400;
    font-size:14px;
}

#report_menu_container .report-section-links ul {
    list-style-type:none;
    padding:0px;
    margin:0px;
}

#report_menu_container .report-link {
    padding:7px 0px 7px 21px;
}

#report_menu_container .report-link:hover {
    cursor:pointer;
    background-color: #f1f1f1;
}

#report_menu_container .report-toggle-img img {
    vertical-align:middle;
}

/* ---------------  Left Menu Links ---------------- */
div.wwTT_menu {
    background-color: #FFFFFF;
    cursor: pointer;
    color: #333333;
}
div.wwTT_menu .row {
    font-size: 14px;
    font-family: 'ClearSans', sans-serif;
    vertical-align: middle;
    padding: 6px 14px 6px 43px;
    background-color: #F1F1F1;
    white-space: nowrap;
    overflow: hidden;
}
#my_account div.wwTT_menu .row {
    padding: 8px 35px 8px 25px;
}
div.wwTT_menu .hovered {
    font-size: 14px;
    font-family: 'ClearSans', sans-serif;
    vertical-align: middle;
    padding: 6px 14px 6px 43px;
    background-color: #DADADA;
    white-space: nowrap;
    overflow: hidden;
}
#my_account div.wwTT_menu .hovered {
    padding: 8px 35px 8px 25px;
}
div.wwTT_menu .spacer {
    min-width:200px;
    padding: 0px;
    height: 8px;
    line-height: 8px;
    background: #F1F1F1;
}

/* Plain Tooltip Style */
div.wwTTPlain {
    box-shadow: 0px 1px 2px 1px rgba(25,25,25,.12);
    border: 1px solid #DADADA;
    margin:0px;
    padding:0px;
}
div.wwTTPlain .caption {
    font-size: 12px;
    font-weight: bold;
}
div.wwTTPlain .contents {
    font-size: 12px;
}

/* ---------------  webwin menu bars ---------------- */
/* Inline styles break IE on SSL when they reference
   a background image, even if that image is https.
*/
.ww_title_table {
    background-color: #DADADA;
    font-size:16px;
    border-top: 1px solid #c1c1c1;
    border-left: 1px solid #c1c1c1;
    border-right: 1px solid #c1c1c1;
    border-top-left-radius:3px;
    border-top-right-radius:3px;
}

.ww_title_table_left {
    color: #333333;
    vertical-align: middle;
    white-space: nowrap;
    text-align: left;
    cursor:move;
    cursor: -webkit-grab;
    cursor:-moz-grab;
    text-transform: capitalize;
    font-size:16px;
    padding: 7px 0px 6px 13px;
}

.ww_title_table_left:active {
    cursor: move;
    cursor: -webkit-grabbing;
    cursor:-moz-grabbing;
}

.ww_title_table_right {
    color: #333333;
    vertical-align: middle;
    white-space: nowrap;
    text-align: right;
}

.ww_title_table_close_winc {
    padding: 9px 13px 11px 13px;
    cursor:pointer;
}

.ww_title_table_help_box {
    padding: 9px 13px 11px 13px;
    cursor:pointer;
    float:right;
}






/* ---------------  For Quick Search Boxes ---------------- */
.qf-search-line {
    color: #000000;
    vertical-align: top;
    font-size: smaller;
    margin: 0px;
    padding-top:    2px;
    padding-bottom: 2px;
    padding-left:   4px;
    padding-right:  4px;
}
div.wwTT_qf {
    background-color: #DADADA;
    color: #333333;
    font-weight: bold;
    font-size: 12px;
    left: 0;
    top: 0;
    position: absolute;
    text-align: left;
    z-index: 20;
    padding: 4px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
div.wwTT_qf .contents {
    margin: 0;
    padding: 0 3px;
}

td.tooltip_title_bar {
    font-weight: 500;
    cursor: move;
    padding: 2px 0px;
    color: #333333;
}

/* --------------- Weekly Time Editor --------------- */

input.grid {
    padding: 3px 4px 1px 1px;
    width: 70px;
    text-align: right;
    border:none;
    height: 24px;
    line-height: 24px;
}

table.table_grid {
    border-collapse: collapse;
    border:none;
}

td.td_grid {
    border: 1px solid #bbbbbb; /*#DADADA;*/
    /*width: 70px;*/
}

td.td_grid_total {
    border: 1px solid #DADADA;
    background-color: #CCCCCC;
    padding-right:16px;

}


select.jobcode {
    border: 1px solid white;
    color: Black;
    background-color: white;
    vertical-align: middle;
    padding: 2px;
    display: inline;
    width: 200px;
}

input.edit_disabled {
    color: Black;
    background-color: #CCCCCC;
    padding: 2px 4px 1px 1px;
    width:70px;
    text-align: right;
    border:none;
    height: 24px;
    line-height: 24px;
}

input.pto, select.pto, option.pto {
    background-color: #DFF4FF;
    border:none;
}
#weekly_timecard input.unpaid_break, select.unpaid_break, option.unpaid_break {
    background-color: #FFE3C2;
    border:none;
}
#weekly_timecard input.paid_break, select.paid_break, option.paid_break {
    background-color: #FFE3C2;
    border:none;
}

input.current_row {
    background-color: #E6EFC2;
}

input.current_cell {
    /*background-color: #529214;*/
    background-color: #E6EFC2;
    border:2px solid #529214;
    height:20px;
    width:66px;
}

input.over_threshold, td.over_threshold {
    background-color: #FBE3E4;
    color: #D12F19;
    font-weight: normal;
}



/* --------------- AJAX Boxes --------------- */

a.nav        { color: #3178C6;  cursor: pointer; text-decoration: none; }
a.nav:hover  { color: #3178C6;  cursor: pointer; text-decoration: underline; }
span.nav        { color: #3178C6;  cursor: pointer; text-decoration: none; }
span.nav:hover  { color: #3178C6;  cursor: pointer; text-decoration: underline; }
a.act        { color: #3178C6;  cursor: pointer; text-decoration: none; }
a.act:hover  { color: #3178C6;  cursor: pointer; text-decoration: underline; }

.row-normal    { background-color: #FFFFFF; }
.row-highlight { background-color: #F1F1F1; }

.table-tab-active {
    font-size: 12px;
    white-space: nowrap;
    vertical-align: middle;
    border-right: 1px solid #DADADA;;
    padding: 2px 5px;
}

.table-tab-inactive {
    font-size: 12px;
    white-space: nowrap;
    cursor: pointer;
    vertical-align: middle;
    background-color: #FFFFFF;
    border-right: 1px solid #DADADA;;
    padding: 2px 5px;
}

/* Filter Text Input Box */
input.filter {
    font-size: 11px;
    width: 125px;
    border: 1px solid #DADADA;
    color: #000000;
    background-color: white;
    vertical-align: middle;
    display: inline;
    padding: 2px;
    margin: 2px;
}

/* Filter Overlay */
.filter-overlay {
    position: relative;
    display: inline;
    color: #CACACA;
    font-size: 11px;
    cursor: text;
}

.act-box { background-color: #E9FFE1; }

.list-box {
    background-color: #ffffff;
    border-top: 1px solid #DADADA;
    margin-bottom: 0.2em;
}

.list-header {
    text-align: left;
    border-right: 1px solid #DADADA;
    background-color: #F1F1F1;
    border-bottom: 1px solid #DADADA;
    margin: 0px;
    padding: 2px 5px;
    white-space: nowrap;
    font-size: 12px;
    color: #666666;
    text-decoration:none;
}

.list-header-sortable {
    color:#3178C6;
}

.list-header-sortable:hover {
    cursor:pointer;
    text-decoration:underline;
}

.list-row {
    font-family:'ClearSans', sans-serif;
    border-bottom: 1px solid #DADADA;
    margin: 0px;
    padding: 3px 5px;
    white-space: nowrap;
    font-size: 12px;
}

/* Time Slider */
.ts_user_bg {
    position: absolute;
    height: 23px;
    width: 1440px;
    background: url('images/calendar-bg.png') top left repeat-x;
    z-index: 3;
}

.ts_block { background: url('images/tsmap_bg.png') top left repeat-x; }
.ts_block_hl { background: url('images/tsmap_hl.png') top left no-repeat; }
.ts_block_hr { background: url('images/tsmap_hr.png') top left no-repeat; }
.ts_block_hr_active { background: url('images/tsmap_hr_active.png') top left no-repeat; }
.ts_block_hl_locked { background: url('images/tsmap_hl_locked.png') top left no-repeat; }
.ts_block_hr_locked { background: url('images/tsmap_hr_locked.png') top left no-repeat; }

.ts_block_break { background: url('images/tsmap_break_bg.png') top left repeat-x; }
.ts_block_break_hl { background: url('images/tsmap_break_hl.png') top left no-repeat; }
.ts_block_break_hr { background: url('images/tsmap_break_hr.png') top left no-repeat; }
.ts_block_break_hr_active { background: url('images/tsmap_break_hr_active.png') top left no-repeat; }
.ts_block_break_hl_locked { background: url('images/tsmap_break_hl_locked.png') top left no-repeat; }
.ts_block_break_hr_locked { background: url('images/tsmap_break_hr_locked.png') top left no-repeat; }


/* BUTTONS */


/* This is the style normally applied to the outer div containing a row of buttons */
.buttons_row {
    clear:both;
    text-align:right;
    white-space:nowrap;
 }

.buttons_row button img, .buttons_row a img {
    margin-right:4px;
    border:none;
    vertical-align: text-top;
}

/* Updated class for button containers. To replace .buttons_row at some point. JH:20160216 */
.button-group .flat {
    display: inline-block;
    margin-left: 10px;
}

.button-group .flat:first-child {
    margin-left: 0;
}

/*--------- Flat button styles --------*/

/* There are 3 button styles:
 1. Primary button
 2. Secondary button
 3. Clockin/clockout button (120px width)
*/
button {
    outline:none;
}

button.flat {
    font-family: 'ClearSans', sans-serif;
    border-radius:3px;
    text-align:center;
    cursor:pointer;
    outline:none;
    border:none;
    font-weight:500;
    margin:4px;
}

button.flat img {
    margin-right:4px;
    border:none;
    vertical-align: middle;
}

button.primary {
    font-size:14px;
    min-width:75px;
    padding:4px 8px 7px 8px;
    background-color:#DADADA;
    color:#333333;
}

button.primary:disabled {
    background-color:#EBEBEB;
    color:#999999;
}

button.primary:hover {
    background-color:#D0D0D0;
}

button.primary:active {
    background-color:#C6C6C6;
}

button.secondary {
    font-size:12px;
    min-width:60px;
    padding:3px 7px 5px 7px;
    background-color:#DADADA;
    color:#333333;
}

button.secondary:disabled {
    background-color:#EBEBEB;
    color:#999999;
}

button.secondary:hover {
    background-color:#D0D0D0;
}

button.secondary:active {
    background-color:#C6C6C6;
}

button.action {
    background-color:#3178C6;
    color:#FFFFFF;
}

button.action:hover {
    background-color:#276ebc;
}

button.action:active {
    background-color:#1d64b2;
}

button.clockin {
    width: 100px;
    background-color:#46A657;
    color:#FFFFFF;
}

button.clockin:hover {
    background-color:#3c9c4d;
}

button.clockin:active {
    background-color:#329243;
}

button.clockout {
    width: 100px;
    background-color:#DF1F26;
    color:#FFFFFF;
}

button.clockout:hover {
    background-color:#d5151c;
}

button.clockout:active {
    background-color:#cb0b26;
}

button.break {
    width: 100px;
    background-color: #F7931E;
    color: #ffffff;
}

button.break:hover {
    background-color: #E68333;
}

button.break:active {
    background-color: #CC6f31;
}

/*------ END Flat button styles -------*/

.buttons a, .buttons button, .buttons input{
    text-align: center;
    margin:0 0 0 0;
    *margin: 0px 0px 0px 2px;
    background-color:#ffffff;
    border:1px solid #dedede;
    border-top:1px solid #eee;
    border-left:1px solid #eee;

    font-family:'ClearSans', sans-serif;
    font-size:9pt;
    line-height:10pt;
    text-decoration:none;
    font-weight:bold;
    color:#202020;
    cursor:pointer;
    padding:5px 10px 6px 7px; /* Links */
}
.buttons button, .buttons input{
    width:auto;
    overflow:visible;
    padding:4px 10px 3px 7px; /* IE6 */
}
.buttons button[type], .buttons input[type]{
    padding:4px 9px 4px 6px; /* Firefox */
    line-height:17px; /* Safari */
}
*:first-child+html button[type]{
    padding:4px 10px 3px 7px; /* IE7 */
}
.buttons button img, .buttons a img{
    margin:0 3px -3px 0 !important;
    padding:0;
    border:none;
    width:16px;
    height:16px;
    vertical-align: baseline;
}

/* STANDARD BUTTONS */

button.standard:hover, .buttons a:hover, input.standard:hover{
    background-color:#dff4ff;
    border:1px solid #c2e1ef;
    color:#336699;
}
.buttons a:active{
    background-color:#6299c5;
    border:1px solid #6299c5;
    color:#fff;
}

/* SAVE BUTTON */

button.save, .buttons a.save, input.save{
    font-size:14px;
    color:#529214;
}
.buttons a.save:hover, button.save:hover, input.save:hover{
    background-color:#E6EFC2;
    border:1px solid #C6D880;
    color:#529214;
}
.buttons a.save:active{
    background-color:#529214;
    border:1px solid #529214;
    color:#fff;
}

/* NEGATIVE BUTTON */

.buttons a.negative, button.negative{
    color:#d12f19;
}
.buttons a.negative:hover, button.negative:hover{
    background:#fbe3e4;
    border:1px solid #fbc2c4;
    color:#d12f19;
}
.buttons a.negative:active{
    background-color:#d12f19;
    border:1px solid #d12f19;
    color:#fff;
}


/* NEUTRAL BUTTON */

.buttons a.neutral, button.neutral{
    color:#61CBF9;
}
.buttons a.neutral:hover, button.neutral:hover{
    background:#CFF2FF;
    border:1px solid #c1effc;
    color:#61CBF9;
}
.buttons a.neutral:active{
    background-color:#61CBF9;
    border:1px solid #61CBF9;
    color:#fff;
}


/* Buttons Rev2 
   Inspiration: http://ubuwaits.github.com/css3-buttons/
*/

button:hover {
    cursor: pointer;
}

button::-moz-focus-inner {
    border:0;
}

button.green, a.green {
    background: #7fbf4d;
    background-image: -moz-linear-gradient(top, #7fbf4d 0%, #63a62f 100%);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#7fbf4d), to(#63a62f));
    border: 1px solid #63a62f;
    border-bottom: 1px solid #5b992b;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -moz-box-shadow: inset 0 1px 0 0 #96ca6d;
    -webkit-box-shadow: inset 0 1px 0 0 #96ca6d;
    box-shadow: inset 0 1px 0 0 #96ca6d;
    color: #fff;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
    font-size: 11px;
    font-weight: bold;
    line-height: 1;
    padding: 7px 0 8px 0;
    text-align: center;
    text-shadow: 0 -1px 0 #4c9021;
    width: 150px;
}

button.green:hover, a.green:hover {
    background: #76b347;
    background-image: -moz-linear-gradient(top, #76b347 0%, #5e9e2e 100%);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#76b347), to(#5e9e2e));
    -moz-box-shadow: inset 0 1px 0 0 #8dbf67;
    -webkit-box-shadow: inset 0 1px 0 0 #8dbf67;
    box-shadow: inset 0 1px 0 0 #8dbf67;
    cursor: pointer;
}

button.green:active, a.green:active {
    border: 1px solid #5b992b;
    border-bottom: 1px solid #538c27;
    -moz-box-shadow: inset 0 0 8px 4px #548c29, 0 1px 0 0 #eee;
    -webkit-box-shadow: inset 0 0 8px 4px #548c29, 0 1px 0 0 #eee;
    box-shadow: inset 0 0 8px 4px #548c29, 0 1px 0 0 #eee;
}

button.red, a.red {
    background: #f84b2e;
    background-image: -moz-linear-gradient(top, #f84b2e 0%, #be1c01 100%);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f84b2e), to(#be1c01));
    border: 1px solid #be1c01;
    border-bottom: 1px solid #be1c01;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -moz-box-shadow: inset 0 1px 0 0 #f84b2e;
    -webkit-box-shadow: inset 0 1px 0 0 #f84b2e;
    box-shadow: inset 0 1px 0 0 #f84b2e;
    color: #fff;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
    font-size: 11px;
    font-weight: bold;
    line-height: 1;
    padding: 7px 0 8px 0;
    text-align: center;
    text-shadow: 0 -1px 0 #be1c01;
    width: 150px;
}

button.red:hover, a.red:hover {
    background: #DB4127;
    background-image: -moz-linear-gradient(top, #DB4127 0%, #a31700 100%);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#DB4127), to(#a31700));
    -moz-box-shadow: inset 0 1px 0 0 #f84b2e;
    -webkit-box-shadow: inset 0 1px 0 0 #f84b2e;
    box-shadow: inset 0 1px 0 0 #f84b2e;
    cursor: pointer;
}

button.red:active, a.red:active {
    border: 1px solid #C9351C;
    border-bottom: 1px solid #C9351C;
    -moz-box-shadow: inset 0 0 8px 4px #a31700, 0 1px 0 0 #eee;
    -webkit-box-shadow: inset 0 0 8px 4px #a31700, 0 1px 0 0 #eee;
    box-shadow: inset 0 0 8px 4px #a31700, 0 1px 0 0 #eee;
}

button.blue, a.blue {
    background: #d7e5f5;
    background-image: -moz-linear-gradient(top, #d7e5f5 0%, #cbe0f5 100%);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#d7e5f5), to(#cbe0f5));
    border-top: 1px solid #abbbcc;
    border-left: 1px solid #a7b6c7;
    border-bottom: 1px solid #a1afbf;
    border-right: 1px solid #a7b6c7;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -moz-box-shadow: inset 0 1px 0 0 #fff;
    -webkit-box-shadow: inset 0 1px 0 0 #fff;
    box-shadow: inset 0 1px 0 0 #fff;
    color: #1a3e66;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
    font-size: 11px;
    font-weight: normal;
    line-height: 1;
    padding: 7px 0 8px 0;
    text-align: center;
    text-shadow: 0 1px 1px #fff;
    width: 150px;
    cursor: pointer;
}

button.blue:hover, a.blue:hover {
    background: #ccd9e8;
    background-image: -moz-linear-gradient(top, #ccd9e8 0%, #c1d4e8 100%);
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ccd9e8), to(#c1d4e8));
    border-top: 1px solid #a1afbf;
    border-left: 1px solid #9caaba;
    border-bottom: 1px solid #96a3b3;
    border-right: 1px solid #9caaba;
    -moz-box-shadow: inset 0 1px 0 0 #f2f2f2;
    -webkit-box-shadow: inset 0 1px 0 0 #f2f2f2;
    box-shadow: inset 0 1px 0 0 #f2f2f2;
    color: #163659;
    cursor: pointer;
}

button.blue:active, a.blue:active {
    border: 1px solid #8c98a7;
    -moz-box-shadow: inset 0 0 4px 2px #abbccf, 0 0 1px 0 #eee;
    -webkit-box-shadow: inset 0 0 4px 2px #abbccf, 0 0 1px 0 #eee;
    box-shadow: inset 0 0 4px 2px #abbccf, 0 0 1px 0 #eee;
}

button.grey {
    background: #eeeeee;
    background-image: -moz-linear-gradient(top, #eeeeee, #cccccc);;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #eeeeee), color-stop(100%, #cccccc));
    background-image: linear-gradient(top, #eeeeee, #cccccc);
    border: 1px solid #ccc;
    border-bottom: 1px solid #bbb;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: inset 0 1px 0 0 #f6f6f6;
    -moz-box-shadow: inset 0 1px 0 0 #f6f6f6;
    box-shadow: inset 0 1px 0 0 #f6f6f6;
    color: #333;
    font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
    font-size: 11px;
    font-weight: bold;
    line-height: 1;
    padding: 7px 0 8px 0;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    width: 150px;
}

button.grey:hover {
    background: #d9d9d9;
    -webkit-box-shadow: inset 0 1px 0 0 #eaeaea;
    -moz-box-shadow: inset 0 1px 0 0 #eaeaea;
    box-shadow: inset 0 1px 0 0 #eaeaea;
    color: #222;
    cursor: pointer;
}

button.grey:active {
    background: #d0d0d0;
    -webkit-box-shadow: inset 0 1px 0 0 #e3e3e3;
    -moz-box-shadow: inset 0 1px 0 0 #e3e3e3;
    box-shadow: inset 0 1px 0 0 #e3e3e3;
    color: #000;
}

button[disabled], button[disabled]:hover, button[disabled]:active {
    background-color:#EBEBEB;
    color:#999999;
    border: 0;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    cursor: default;
    text-shadow: none;
}


/* Toggle On/Off Switch */

.on-off-switch {
    position: relative;
    width: 52px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
}
.on-off-switch-checkbox {
    display: none;
}
.on-off-switch-label {
    display: block;
    overflow: hidden;
    cursor: pointer;
    border: 1px solid #DADADA;
    border-radius: 3px;
}
.on-off-switch-inner {
    display: block;
    width: 200%;
    margin-left: -100%;
    -moz-transition: margin 167ms ease-in-out 0s;
    -webkit-transition: margin 167ms ease-in-out 0s;
    -o-transition: margin 167ms ease-in-out 0s;
    transition: margin 167ms ease-in-out 0s;
}
.on-off-switch-inner:before, .on-off-switch-inner:after {
    display: block;
    float: left;
    width: 50%;
    height: 16px;
    padding: 0;
    line-height: 16px;
    font-size: 12px;
    color: white;
    font-family: 'ClearSans', sans-serif;
    font-size: 12px;;
    font-weight: 500;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
.on-off-switch-inner:before {
    content: "ON";
    padding-left: 8px;
    background-color: #3178C6;
    color: #FFFFFF;
}
.on-off-switch-inner:after {
    content: "OFF";
    padding-right: 5px;
    background-color: #F1F1F1;
    color: #666666;
    text-align: right;
}
.on-off-switch-switch {
    display: block;
    width: 14px;
    margin: 1px;
    background: #FFFFFF;
    border: 1px solid #DADADA;
    border-radius: 3px;
    position: absolute;
    top: 0;
    bottom: 0;
    right: 34px;
    -moz-transition: all 167ms ease-in-out 0s;
    -webkit-transition: all 167ms ease-in-out 0s;
    -o-transition: all 167ms ease-in-out 0s;
    transition: all 167ms ease-in-out 0s;
}
.on-off-switch-checkbox:checked + .on-off-switch-label .on-off-switch-inner {
    margin-left: 0;
}
.on-off-switch-checkbox:checked + .on-off-switch-label .on-off-switch-switch {
    right: 0px;
    border-color: #3178C6;
}

.on-off-switch-checked .on-off-switch-inner {
    margin-left: 0;
}

.on-off-switch-checked .on-off-switch-switch {
    right: 0px;
}

/* End Toggle On/Off Switch */

.promo_overlay {
    background-color: #202020;
    zoom: 1;
    position: absolute;
    left: 0px;
    bottom: 0px;
    filter: alpha(opacity=25);
    -moz-opacity: .25;
    opacity: .25;
}

/* Used by ts_overlay() in js.php, and other things */
.promo_overlay_v2 {
    background-color: #202020;
    zoom: 1;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    filter: alpha(opacity=45);
    -moz-opacity: .45;
    opacity: .45;
    width: 100%;
}

.promo_overlay_upgrade {
    padding: 20px;
    background: #dff4ff;
    color: #202020;
    border: 2px solid #6299c5;
    text-align: center;
    border-radius: 10px;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
}

.overlay_loading_msg {
    padding: 20px;
    background: transparent;
    color: #202020;
    border: none;
    text-align: center;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
}

/* Used by ts_overlay() in js.php */
.overlay_content {
    background: transparent;
    zoom: 1;
    position: absolute;
}

/* Used in winc's for convenience */
.overlay_content_box {
    background-color: #FFFFFF;
    border: 1px solid #DADADA;
    padding: 10px;
    margin: 6px;
    border-radius: 0px;
}

.overlay_content_box_white {
    background-color: #FFFFFF;
    border: 1px solid #DADADA;
    padding: 30px;
    margin: 6px;
    border-radius: 2px;
}


/* ------ MESSAGE BOXES --------- */
.mboxNegative {
    background-color: #fbe3e4;
    border: 1px solid #fbc2c4;
    color: #d12f19;
}

.mboxPositive {
    background-color:#E6EFC2;
    border:1px solid #C6D880;
    color:#529214;
}


/* ------ Tabs v2 --------- */

div.tabcontent {
    border: 1px solid #666;
    clear: both;
    background: #fff;
    padding-top: 0em;
}

div.subtabcontent {
    background: #eee;
    height: 14px;
    display: block;
    padding: 5px 0;
}

ul#primary_tab_holder {
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: -1px;
    *bottom: -2px; /* stupid IE hack... */
}

ul#primary_tab_holder li  {
    display: inline;
    list-style: none;
}

ul#primary_tab_holder a, ul#primary_tab_holder a.current {
    display: block;
    float: left;
    padding: 4px 4px;
    margin: 1px 2px 0 0;
    text-align: center;
    font-family: tahoma, verdana, sans-serif;
    font-size: 95%;
    text-decoration: none;
    color: #333;
    -moz-outline: none;
}

ul#primary_tab_holder a.current, ul#primary_tab_holder a.current:hover {
    border: 1px solid #666;
    border-bottom: none;
    background: #eee;
    padding-bottom: 6px;
    margin-top: 0;
    -moz-outline: none;
}

ul#primary_tab_holder a {
    background: #EBE9D6;
    border: 1px solid #AAA;
    border-bottom: none;
    -moz-outline: none;
}

ul#primary_tab_holder a:hover {
    margin-top: 0;
    border-color: #666;
    background: #f6f5f5;
    padding-bottom: 5px;
    -moz-outline: none;
}

ul#secondary_tab_holder {
    margin: 0;
    padding: 0;
    list-style: none;
}

ul#secondary_tab_holder li {
    display: inline;
    list-style: none;
}

ul#secondary_tab_holder li a {
    width: auto;
    display: block;
    float: left;
    padding: 0 10px;
    margin: 0;
    text-align: auto;
    border: none;
    border-right: 1px dotted #AAA;
    background: none;
    font-size: 90%;
    -moz-outline: none;
}

ul#secondary_tab_holder li a {
    text-decoration: none;
}

ul#secondary_tab_holder li a:hover {
    background: transparent;
    padding: 0 10px;
    border: none;
    text-decoration: underline;
    border-right: 1px dotted #AAA;
    -moz-outline: none;
}

ul#secondary_tab_holder li a:active {
    color: #000;
    background: transparent;
    -moz-outline: none;
}

ul#secondary_tab_holder li a.current, ul#secondary_tab_holder li a.current:hover {
    color: #333;
    text-decoration: none;
    -moz-outline: none;
}

ul#secondary_tab_holder li:last-child a { border: none; }


/* Badge Formatting  */
.new-badge, .paid-break-badge, .pto-badge, .unpaid-break-badge {
     color: #FFF;
     -webkit-border-radius: 3px;
     -moz-border-radius: 3px;
     border-radius: 3px;
     padding: 0px 6px 1px;
     font-size: 11px;
     font-family: ClearSans, sans-serif;
     font-weight: 400;
     display: inline-block;
     white-space: nowrap;
 }
 
.new-badge {
    background-color: #039BE5;
}

.paid-break-badge {
    background-color: #F7931E;
}

.pto-badge {
    background-color: #3178C6;
}

.unpaid-break-badge {
    color: #D18415;
    background-color: #FFF;
    border: solid 1px #F7931E;
    padding: 0px 5px 1px;
}

/* Approvals Report */

div.approvals_active_tab {
    float: left;
    height: 55px;
    width: 151px;
    background: url('/images/active_tab.png?v=20150216') no-repeat;
    line-height: 55px;
    text-align: center;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    letter-spacing: -1px;
}

div.approvals_inactive_tab {
    cursor: pointer;
    float: left;
    height: 35px;
    width: 145px;
    background: url('/images/inactive_tab.png?v=20150216') no-repeat;
    text-align: center;
    line-height:35px;
    padding-top:20px;
    font-size: 13px;
}

#approvals_tab_content_wrapper {
    padding: 0 0px;
    background: #eee url('/images/tab_content_holder_bg.png') top left repeat-x;
}

#approvals_outer_wrapper {
    background: url('/images/tab_content_left_bg.png') repeat-y left;
}

div.approvals_employee_block {
    border-bottom: 1px solid #e4e0e0;
    height: 60px;
    padding-top: 30px;
    padding-bottom: 10px;
}

div.approved,tr.approved {
    background: #eefce4;
}

div.submitted,tr.submitted {
    background: #fffccc;
}

div.unapproved,tr.unapproved {
    background: #eeeeee;
}

div.approvals_button_holder {
    float: left;
    margin-left: 15px;
}

div.approvals_employee_name {
    float: left;
    margin-left: 25px;
    font-size: 16px;
    margin-top: -14px;
}

div.approvals_bb {
    float: right;
    height: 75px;
    background: #f3fcff;
    border: 1px solid #afebfe;
    width: 413px;
    margin-left: 0;
    margin-right: 12px;
    margin-top: -20px;
    position: relative;
}

div.approvals_bb_plus {
    position: absolute;
    top: -8px;
    right: -8px;
    width:16px;
    height: 16px;
}

div.approvals_bb_hours {
    float: left;
    width: 50px;
    margin-top: 16px;
    margin-left: 7px;
}

div.approvals_dashboard_graph_holder {
    float: right;
    width: 260px;
    margin: 20px 0 0 0 ;
    line-height: normal;
    padding: 0 15px 0 0;
    overflow: hidden;
}

div.approvals_dashboard_graph {
    width: 200px;
    height: 28px;
    background: #212121;
    position: relative;
}

div.approvals_dashboard_graph_reg {
    float: left;
    background: #46A657;
    height: 28px;
    line-height: 28px;
}

div.approvals_dashboard_graph_ot {
    float: left;
    background: #DF1F26;
    height: 28px;
    line-height: 28px;
}

div.approvals_dashboard_graph_pto {
    float: left;
    background: #3178C6;
    height: 28px;
    line-height: 28px;
}

div.approvals_dashboard_graph_paid_break {
    float: left;
    background: #EE8137;
    height: 28px;
    line-height: 28px;
}

div.approvals_dashboard_summary {
    margin-top: 3px;
    margin-right: 12px;
    font-size: 10px;
}

div.approvals_dashboard_overlay {
    width: 200px;
    height: 28px;
    position: absolute;
    top: 20px;
}


/* Outside Approvals Report */

.outside_approvals_holder {
    margin:0px auto; 
    width:940px; 
    font-family: 'ClearSans', sans-serif;
}

.outside_approvals_container {
    width: 940px; 
    clear:both; 
    -moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.09); 
    -webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.09); 
    box-shadow:0px 0px 10px rgba(0, 0, 0, 0.09); 
    font-family:'ClearSans', sans-serif;
    border:1px solid #d7d7d7;
    background:#fff;
    color:#333;
    position:relative;
    min-height:500px; 
    padding:0px;
}

.report_dashboard {
    position: relative; 
    top: 0px; 
    left: -10px; 
    width:960px; 
    background:#feffe0; 
    -moz-box-shadow:0px 4px 5px rgba(0, 0, 0, 0.09); 
    -webkit-box-shadow:0px 4px 5px rgba(0, 0, 0, 0.09); 
    box-shadow:0px 4px 5px rgba(0, 0, 0, 0.09); 
    margin-top:25px; 
    clear:both;
}

.dashboard_total_hours {
    margin:30px 50px; 
    text-align: center; 
    float: left; 
    background: #9ddb84; 
    padding:10px; 
    color:#356821; 
    -moz-border-radius: 3px; 
    border-radius: 3px; 
    font-size: 25px; 
    font-weight: bold;
}

.outside_approvals_employee_container {
    padding: 10px; 
    background: #eee; 
    border-bottom: 1px solid #ccc; 
    height:40px;
}

div.outside_approvals_employee_name {
    float:left; 
    display:block; 
    padding-top:9px; 
    padding-left: 20px; 
    font-size: 17px; 
    font-weight: bold;
}

.outside_approvals_employee_hours_graph_holder {
    display:block; 
    width: 100px; 
    float: right; 
    height: 20px; 
    position: relative; 
    margin-top:10px; 
    -webkit-border-radius: 10px; 
    -moz-border-radius: 10px; 
    border-radius: 10px; 
    background-color: #999; 
    position: relative; 
    overflow: hidden; 
    -webkit-box-shadow: 1px 1px #fff; 
    -moz-box-shadow: 1px 1px #fff; 
    box-shadow: 1px 1px #fff;
}

.outside_approvals_employee_hours_reg_progress {
    display: block; 
    float: left; 
    height: 100%; 
    -webkit-border-radius: 10px; 
    -moz-border-radius: 10px; 
    border-radius: 10px;  
    background-color: rgb(43,194,83); 
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, rgb(43,194,83)), color-stop(1, rgb(84,240,84))); 
    background-image: -moz-linear-gradient(center bottom, rgb(43,194,83) 37%, rgb(84,240,84) 69%); 
    position: absolute; 
    overflow: hidden;
}

.outside_approvals_employee_hours_ot_progress {
    display: block; 
    float: right; 
    height: 100%; 
    -webkit-border-radius: 10px; 
    -moz-border-radius: 10px; 
    border-radius: 10px;  
    background-color: #f0a3a3; 
    background-image: -moz-linear-gradient(top, #f0a3a3, #f42323);
    background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, #f0a3a3),color-stop(1, #f42323));
    background-image: -webkit-linear-gradient(#f0a3a3, #f42323); 
    position: absolute; 
    overflow: hidden;
    right:0;
}

.outside_approvals_employee_total_hours {
    text-align: center;
    float: right; 
    background: #9ddb84; 
    padding:7px; 
    color:#356821; 
    -moz-border-radius: 3px; 
    border-radius: 3px; 
    font-size: 15px; 
    font-weight: bold; 
    margin-right:10px; 
    display:block; 
    margin-top:4px;
}


.outside_approvals_employee_overtime_hours {
    background: #db8484;
    color: #682121;
}

.outside_approvals_loading {
    float: right; 
    margin-right: 15px; 
    margin-top: 10px; 
    display:none;
}

.outside_approvals_week_details_holder {
    background: #ccc; 
    height:130px; 
    -webkit-box-shadow: inset 0px -1px #fff, inset -1px 0px 0px #fff, inset 1px 0px 0px #fff; 
    -moz-box-shadow: inset 0px -1px #fff, inset -1px 0px 0px #fff, inset 1px 0px 0px #fff;
    box-shadow: inset 0px -1px #fff, inset -1px 0px 0px #fff, inset 1px 0px 0px #fff; 
    display:none; 
    position:relative;
}

.outside_approvals_week_details_holder .scroll_holder {
    height:120px; 
    margin:0px 8px; 
    overflow:auto; 
    overflow-y:hidden; 
    position:relative; 
    background:#ccc; 
    text-align: center;
}

.outside_approvals_week_details_holder .scroll_holder .day_holder {
    height:100px; 
    overflow:auto; 
    position:absolute; 
    background:#ccc; 
    top:5px; 
    text-align: center;
}

.outside_approvals_day_holder {
    float:left; 
    margin-left:13px; 
    margin-top:15px; 
    text-align:center; 
    padding:3px;
}

.outside_approvals_weekend {
    background: #eee; 
    -moz-border-radius: 3px; 
    border-radius: 3px;
}

.outside_approvals_day_holder .day_of_week {
    color: #888; 
    margin-bottom: 9px; 
    border-bottom: 1px solid #888;
}

.outside_approvals_day_holder .day_hours {
    background:#999; 
    color: #eee; 
    text-align: center; 
    padding:7px; 
    -moz-border-radius: 3px; 
    border-radius: 3px; 
    font-size: 15px; 
    font-weight: bold; 
    display:block;
}

.outside_approvals_day_holder .day_number {
    color: #888; 
    margin-top: 3px;
}

/* Payroll Reports */
.payroll_reports_holder {
    margin: 0px auto; 
    width: 940px; 
    font-family: 'ClearSans', sans-serif;
}

.payroll_report_tabs {
    cursor: pointer;
    position: relative;
    top: 0px;
    float: right;
    padding:0 20px;
    height: 26px;
    background: #d5e4f5 url(/images/grey_down_trans.png) no-repeat 94% center; padding-right:30px;
    line-height: 26px;
    font-size: 12px;
    z-index: 10;
    font-wieght:bold;
    border-bottom-right-radius: 7px;
    border-bottom-left-radius: 7px;
    -moz-border-radius-bottomright: 7px;
    -moz-border-radius-bottomleft: 7px;
    -moz-box-shadow:3px 3px 5px rgba(0, 0, 0, 0.09);
    box-shadow:3px 3px 5px rgba(0, 0, 0, 0.09);
}

.payroll_report_tabs:hover {
    height: 30px;
    line-height: 30px;
    
}

.active_payroll_tab {
    height: 30px;
    line-height: 30px;
    background: #eee url(/images/grey_up.png) no-repeat 94% center; padding-right:30px;
}

.payroll_reports_container {
    width: 966px; 
    clear:both; 
    -moz-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.09); 
    -webkit-box-shadow:0px 0px 10px rgba(0, 0, 0, 0.09); 
    box-shadow:0px 0px 10px rgba(0, 0, 0, 0.09); 
    font-family:'ClearSans', sans-serif;
    border:1px solid #d7d7d7;
    background:#fff;
    color:#333;
    position:relative;
    min-height:500px; 
    padding:0px;
}

.payroll_reports_dashboard {
    position: relative; 
    top: 0px; 
    left: -10px; 
    width:960px; 
    background:#feffe0; 
    -moz-box-shadow:0px 4px 5px rgba(0, 0, 0, 0.09); 
    -webkit-box-shadow:0px 4px 5px rgba(0, 0, 0, 0.09); 
    box-shadow:0px 4px 5px rgba(0, 0, 0, 0.09); 
    margin-top:25px; 
    clear:both;
}

.payroll_reports_dashboard_total_hours {
    margin:30px 50px; 
    text-align: center; 
    float: left; 
    background: #9ddb84; 
    padding:10px 10px 17px 10px; 
    color:#356821; 
    -moz-border-radius: 3px; 
    border-radius: 3px; 
    font-size: 25px; 
    font-weight: bold;
}

.payroll_reports_employee_container {
    padding: 10px;
    background: #eee;
    border-bottom: 1px solid #ccc;
    height:40px;
}

.payroll_reports_employee_container.small {
    height:20px;
    padding:5px;
    padding-right:10px;
}

div.payroll_reports_employee_name {
    float:left;
    display:block;
    padding-top:9px;
    padding-left: 10px;
    font-size: 17px;
    font-weight: bold;
}

.payroll_reports_employee_container.small div.payroll_reports_employee_name {
    font-size: 12px;
    padding-top:4px;
}

.payroll_reports_employee_hours_graph_holder {
    display:block;
    width: 100px;
    float: right;
    height: 20px;
    position: relative;
    margin-top:10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    background-color: #999;
    position: relative;
    overflow: hidden;
}

.payroll_reports_employee_container.small .payroll_reports_employee_hours_graph_holder {
    margin-top:3px;
    height:14px;
}

.payroll_reports_employee_container.small .payroll_reports_employee_total_hours {
    font-size:13px;
    padding:3px;
    margin-top:0px;
}

.payroll_reports_employee_hours_reg_progress {
    display: block; 
    float: left; 
    height: 100%; 
    background-color: #9ddb84; 
    overflow: hidden;
}

.payroll_reports_employee_hours_ot_progress {
    display: block; 
    float: left; 
    height: 100%; 
    background-color: #db8484; 
    overflow: hidden;
}

.payroll_reports_employee_hours_pto_progress {
    display: block; 
    float: left; 
    height: 100%; 
    background-color: #84d2db; 
    overflow: hidden;
}

.payroll_reports_employee_hours_paid_break_progress {
    display: block; 
    float: left; 
    height: 100%; 
    background-color: #ffa44a; 
    overflow: hidden;
}



.payroll_reports_employee_total_hours {
    text-align: center;
    float: right; 
    background: #999; 
    padding:7px; 
    color:#333; 
    -moz-border-radius: 3px; 
    border-radius: 3px; 
    font-size: 15px; 
    font-weight: bold; 
    margin-right:10px; 
    display:block; 
    margin-top:4px;
}

.payroll_reports_employee_reg_hours {
    background: #9ddb84; 
    color:#356821; 
}

.payroll_reports_employee_pto_hours {
    background: #84d2db;
    color: #216268;
}

.payroll_reports_employee_overtime_hours {
    background: #db8484;
    color: #682121;
}

.payroll_reports_loading {
    float: right; 
    margin-right: 15px; 
    margin-top: 10px; 
    display:none;
}

.payroll_reports_week_details_holder {
    background: #ccc; 
    -webkit-box-shadow: inset 0px -1px #fff, inset -1px 0px 0px #fff, inset 1px 0px 0px #fff; 
    -moz-box-shadow: inset 0px -1px #fff, inset -1px 0px 0px #fff, inset 1px 0px 0px #fff;
    box-shadow: inset 0px -1px #fff, inset -1px 0px 0px #fff, inset 1px 0px 0px #fff; 
    display:none; 
}

.payroll_reports_week_details_holder .scroll_holder {
    height:140px;
    margin:0px 8px; 
    overflow:auto; 
    overflow-y:hidden; 
    position:relative; 
    background:#ccc; 
    text-align: center;
}

.payroll_reports_week_details_holder .scroll_holder .day_holder {

    overflow:auto; 
    position:absolute; 
    background:#ccc; 
    top:5px; 
    text-align: center;
}

.payroll_reports_day_holder {
    float:left; 
    margin-left:13px; 
    margin-top:15px;
    text-align:center; 
    padding:3px;
}

.payroll_reports_weekend {
    background: #eee; 
    -moz-border-radius: 3px; 
    border-radius: 3px;
}

.payroll_reports_day_holder .day_of_week {
    color: #888; 
    margin-bottom: 9px; 
    border-bottom: 1px solid #888;
}

.payroll_reports_day_holder .day_hours {
    background:#999; 
    color: #eee; 
    text-align: center; 
    padding:7px; 
    -moz-border-radius: 3px; 
    border-radius: 3px; 
    font-size: 15px; 
    font-weight: bold; 
    display:block;
}

.payroll_reports_day_holder .day_number {
    color: #888; 
    margin-top: 3px;
}


/* End Payroll Reports */


/* Daily Timecard */

#schedule_blocks div.hour_holder {
     position: relative;
     border-top: 1px solid #bcc2c7;
     border-left: 1px solid #bcc2c7;
}

#schedule_blocks div.hour_holder div.label {
     position: absolute;
     left: -50px;
     text-align: right;
     width: 35px;
     top: -9px;
}

div.half_hour {
    cursor: pointer;
}

div.half_hour:hover {
    background: #eee;
}

/* Small Tab */

div.small_active_tab {
    float: left;
    height: 35px;
    width: 104px;
    background: url('/images/small_active_tab.png') no-repeat;
    line-height: 37px;
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
}

div.small_inactive_tab {
    cursor: pointer;
    float: left;
    height: 35px;
    width: 70px;
    background: url('/images/small_inactive_tab.png') no-repeat;
    text-align: center;
    line-height:42px;
    padding-top:0px;
    font-size: 12px;
}

/* Scheduling Add-On */

form.schedule_overlay_form {
    padding: 0;
    margin: 0;
}

form.schedule_overlay_form ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    display: block;
}

form.schedule_overlay_form li {
    width: 97% !important;
    clear: both;
    display: block;
    margin: 0;
    padding: 0px 5px 9px 5px;
}

form.schedule_overlay_form li.left {
    width: 46% !important;
    clear: left;
    float: left;
    display: block;
    margin: 0;
    padding: 0px 5px 9px 5px;
}

form.schedule_overlay_form li.right {
    width: 46% !important;
    clear: none;
    float: right;
    display: block;
    margin: 0;
    padding: 0px 5px 9px 5px;
}

form.schedule_overlay_form label {
    border: none;
    display: block;
    margin: 0;
    padding: 0 0 3px 0;
    font-weight: bold;
    font-size: 11px;
}

form.schedule_overlay_form input, form.schedule_overlay_form select {
    padding: 2px 0;
    margin: 2px 0;
}

li.appointment {
    padding: 0;
    margin: 0 0 2px 0;
}

.more_appointments {
    font-size: 10px;
    font-weight: bold;
    margin-top: 2px;
    float: right;
}

/* End Daily Timecard */


/* Start Standard Form Style (not used yet...) */

form.standard_form {
    margin:0px;
    padding:0px;
}

form.standard_form input {
    border: 1px solid #aaa;
    padding:3px 2px;
    font-size: 12px;
}

form.standard_form input.noBorder {
    border: none;
}

form.standard_form select {
    font-size:12px;
    margin:0px 0px 1px;
    padding:1px 0px 0px;
}

form.standard_form input.numbers {
    text-align:center;
}

form.standard_form ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100%;
    display: block;
}

form.standard_form li {
    width: 97% !important;
    clear: both;
    display: block;
    margin: 0;
    padding: 0px 5px 9px 5px;
}

form.standard_form h3 {
    padding:0px;
    padding-top:8px;
    margin:0px;
    margin-top:4px;
    border-top: 1px dotted #aaa;
    font-weight:normal;
    font-size:15px;
}

/* ----------- jQuery style overrides/additions -----------*/
.ui-datepicker-trigger {
    cursor:pointer;
}

.notify_success {
    background-color: #B3EFB3;
}

.notify_fail {
    background-color: #FFDFDF;
}

.ui-autocomplete {
    border-color: #ccc;
    border-style: solid;
    border-width: 1px;
    color: Black;
}

.ui-menu-item {
    display: block;
    padding: 2px 15px;
    clear: both;
    font-weight: normal;
    background:white;
    font-size:12px;
    line-height: 14px;
    color: Black;
    white-space: nowrap;
    text-decoration: none;
}

/* ---------------  Printable Overlay stuff -------------- */
/* This style will prevent our 'close' icon from showing when someone actually prints */
@media print {
    #ts_printable_overlay .close-block {
        display:none;
    }
}
/*! jQuery UI - v1.11.4 - 2015-09-04
* http://jqueryui.com
* Includes: core.css, draggable.css, resizable.css, selectable.css, sortable.css, accordion.css, autocomplete.css, button.css, datepicker.css, dialog.css, menu.css, progressbar.css, selectmenu.css, slider.css, spinner.css, tabs.css, tooltip.css, theme.css
* To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Verdana%2CArial%2Csans-serif&fwDefault=normal&fsDefault=1.1em&cornerRadius=4px&bgColorHeader=cccccc&bgTextureHeader=highlight_soft&bgImgOpacityHeader=75&borderColorHeader=aaaaaa&fcHeader=222222&iconColorHeader=222222&bgColorContent=ffffff&bgTextureContent=flat&bgImgOpacityContent=75&borderColorContent=aaaaaa&fcContent=222222&iconColorContent=222222&bgColorDefault=e6e6e6&bgTextureDefault=glass&bgImgOpacityDefault=75&borderColorDefault=d3d3d3&fcDefault=555555&iconColorDefault=888888&bgColorHover=dadada&bgTextureHover=glass&bgImgOpacityHover=75&borderColorHover=999999&fcHover=212121&iconColorHover=454545&bgColorActive=ffffff&bgTextureActive=glass&bgImgOpacityActive=65&borderColorActive=aaaaaa&fcActive=212121&iconColorActive=454545&bgColorHighlight=fbf9ee&bgTextureHighlight=glass&bgImgOpacityHighlight=55&borderColorHighlight=fcefa1&fcHighlight=363636&iconColorHighlight=2e83ff&bgColorError=fef1ec&bgTextureError=glass&bgImgOpacityError=95&borderColorError=cd0a0a&fcError=cd0a0a&iconColorError=cd0a0a&bgColorOverlay=aaaaaa&bgTextureOverlay=flat&bgImgOpacityOverlay=0&opacityOverlay=30&bgColorShadow=aaaaaa&bgTextureShadow=flat&bgImgOpacityShadow=0&opacityShadow=30&thicknessShadow=8px&offsetTopShadow=-8px&offsetLeftShadow=-8px&cornerRadiusShadow=8px
* Copyright 2015 jQuery Foundation and other contributors; Licensed MIT */

/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
	display: none;
}
.ui-helper-hidden-accessible {
	border: 0;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}
.ui-helper-reset {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	line-height: 1.3;
	text-decoration: none;
	font-size: 100%;
	list-style: none;
}
.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
	content: "";
	display: table;
	border-collapse: collapse;
}
.ui-helper-clearfix:after {
	clear: both;
}
.ui-helper-clearfix {
	min-height: 0; /* support: IE7 */
}
.ui-helper-zfix {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: absolute;
	opacity: 0;
	filter:Alpha(Opacity=0); /* support: IE8 */
}

.ui-front {
	z-index: 100;
}


/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
	cursor: default !important;
}


/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	display: block;
	text-indent: -99999px;
	overflow: hidden;
	background-repeat: no-repeat;
}


/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.ui-draggable-handle {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-resizable {
	position: relative;
}
.ui-resizable-handle {
	position: absolute;
	font-size: 0.1px;
	display: block;
	-ms-touch-action: none;
	touch-action: none;
}
.ui-resizable-disabled .ui-resizable-handle,
.ui-resizable-autohide .ui-resizable-handle {
	display: none;
}
.ui-resizable-n {
	cursor: n-resize;
	height: 7px;
	width: 100%;
	top: -5px;
	left: 0;
}
.ui-resizable-s {
	cursor: s-resize;
	height: 7px;
	width: 100%;
	bottom: -5px;
	left: 0;
}
.ui-resizable-e {
	cursor: e-resize;
	width: 7px;
	right: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-w {
	cursor: w-resize;
	width: 7px;
	left: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-se {
	cursor: se-resize;
	width: 12px;
	height: 12px;
	right: 1px;
	bottom: 1px;
}
.ui-resizable-sw {
	cursor: sw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	bottom: -5px;
}
.ui-resizable-nw {
	cursor: nw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	top: -5px;
}
.ui-resizable-ne {
	cursor: ne-resize;
	width: 9px;
	height: 9px;
	right: -5px;
	top: -5px;
}
.ui-selectable {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-selectable-helper {
	position: absolute;
	z-index: 100;
	border: 1px dotted black;
}
.ui-sortable-handle {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-accordion .ui-accordion-header {
	display: block;
	cursor: pointer;
	position: relative;
	margin: 2px 0 0 0;
	padding: .5em .5em .5em .7em;
	min-height: 0; /* support: IE7 */
	font-size: 100%;
}
.ui-accordion .ui-accordion-icons {
	padding-left: 2.2em;
}
.ui-accordion .ui-accordion-icons .ui-accordion-icons {
	padding-left: 2.2em;
}
.ui-accordion .ui-accordion-header .ui-accordion-header-icon {
	position: absolute;
	left: .5em;
	top: 50%;
	margin-top: -8px;
}
.ui-accordion .ui-accordion-content {
	padding: 1em 2.2em;
	border-top: 0;
	overflow: auto;
}
.ui-autocomplete {
	position: absolute;
	top: 0;
	left: 0;
	cursor: default;
}
.ui-button {
	display: inline-block;
	position: relative;
	padding: 0;
	line-height: normal;
	margin-right: .1em;
	cursor: pointer;
	vertical-align: middle;
	text-align: center;
	overflow: visible; /* removes extra width in IE */
}
.ui-button,
.ui-button:link,
.ui-button:visited,
.ui-button:hover,
.ui-button:active {
	text-decoration: none;
}
/* to make room for the icon, a width needs to be set here */
.ui-button-icon-only {
	width: 2.2em;
}
/* button elements seem to need a little more width */
button.ui-button-icon-only {
	width: 2.4em;
}
.ui-button-icons-only {
	width: 3.4em;
}
button.ui-button-icons-only {
	width: 3.7em;
}

/* button text element */
.ui-button .ui-button-text {
	display: block;
	line-height: normal;
}
.ui-button-text-only .ui-button-text {
	padding: .4em 1em;
}
.ui-button-icon-only .ui-button-text,
.ui-button-icons-only .ui-button-text {
	padding: .4em;
	text-indent: -9999999px;
}
.ui-button-text-icon-primary .ui-button-text,
.ui-button-text-icons .ui-button-text {
	padding: .4em 1em .4em 2.1em;
}
.ui-button-text-icon-secondary .ui-button-text,
.ui-button-text-icons .ui-button-text {
	padding: .4em 2.1em .4em 1em;
}
.ui-button-text-icons .ui-button-text {
	padding-left: 2.1em;
	padding-right: 2.1em;
}
/* no icon support for input elements, provide padding by default */
input.ui-button {
	padding: .4em 1em;
}

/* button icon element(s) */
.ui-button-icon-only .ui-icon,
.ui-button-text-icon-primary .ui-icon,
.ui-button-text-icon-secondary .ui-icon,
.ui-button-text-icons .ui-icon,
.ui-button-icons-only .ui-icon {
	position: absolute;
	top: 50%;
	margin-top: -8px;
}
.ui-button-icon-only .ui-icon {
	left: 50%;
	margin-left: -8px;
}
.ui-button-text-icon-primary .ui-button-icon-primary,
.ui-button-text-icons .ui-button-icon-primary,
.ui-button-icons-only .ui-button-icon-primary {
	left: .5em;
}
.ui-button-text-icon-secondary .ui-button-icon-secondary,
.ui-button-text-icons .ui-button-icon-secondary,
.ui-button-icons-only .ui-button-icon-secondary {
	right: .5em;
}

/* button sets */
.ui-buttonset {
	margin-right: 7px;
}
.ui-buttonset .ui-button {
	margin-left: 0;
	margin-right: -.3em;
}

/* workarounds */
/* reset extra padding in Firefox, see h5bp.com/l */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
	border: 0;
	padding: 0;
}
.ui-datepicker {
	width: 17em;
	padding: .2em .2em 0;
	display: none;
}
.ui-datepicker .ui-datepicker-header {
	position: relative;
	padding: .2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
	position: absolute;
	top: 2px;
	width: 1.8em;
	height: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
	top: 1px;
}
.ui-datepicker .ui-datepicker-prev {
	left: 2px;
}
.ui-datepicker .ui-datepicker-next {
	right: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
	left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
	right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
	display: block;
	position: absolute;
	left: 50%;
	margin-left: -8px;
	top: 50%;
	margin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
	margin: 0 2.3em;
	line-height: 1.8em;
	text-align: center;
}
.ui-datepicker .ui-datepicker-title select {
	font-size: 1em;
	margin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
	width: 45%;
}
.ui-datepicker table {
	width: 100%;
	font-size: .9em;
	border-collapse: collapse;
	margin: 0 0 .4em;
}
.ui-datepicker th {
	padding: .7em .3em;
	text-align: center;
	font-weight: bold;
	border: 0;
}
.ui-datepicker td {
	border: 0;
	padding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
	display: block;
	padding: .2em;
	text-align: right;
	text-decoration: none;
}
.ui-datepicker .ui-datepicker-buttonpane {
	background-image: none;
	margin: .7em 0 0 0;
	padding: 0 .2em;
	border-left: 0;
	border-right: 0;
	border-bottom: 0;
}
.ui-datepicker .ui-datepicker-buttonpane button {
	float: right;
	margin: .5em .2em .4em;
	cursor: pointer;
	padding: .2em .6em .3em .6em;
	width: auto;
	overflow: visible;
}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
	float: left;
}

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi {
	width: auto;
}
.ui-datepicker-multi .ui-datepicker-group {
	float: left;
}
.ui-datepicker-multi .ui-datepicker-group table {
	width: 95%;
	margin: 0 auto .4em;
}
.ui-datepicker-multi-2 .ui-datepicker-group {
	width: 50%;
}
.ui-datepicker-multi-3 .ui-datepicker-group {
	width: 33.3%;
}
.ui-datepicker-multi-4 .ui-datepicker-group {
	width: 25%;
}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
	border-left-width: 0;
}
.ui-datepicker-multi .ui-datepicker-buttonpane {
	clear: left;
}
.ui-datepicker-row-break {
	clear: both;
	width: 100%;
	font-size: 0;
}

/* RTL support */
.ui-datepicker-rtl {
	direction: rtl;
}
.ui-datepicker-rtl .ui-datepicker-prev {
	right: 2px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next {
	left: 2px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-prev:hover {
	right: 1px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next:hover {
	left: 1px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane {
	clear: right;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button {
	float: left;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
	float: right;
}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
	border-right-width: 0;
	border-left-width: 1px;
}
.ui-dialog {
	overflow: hidden;
	position: absolute;
	top: 0;
	left: 0;
	padding: .2em;
	outline: 0;
}
.ui-dialog .ui-dialog-titlebar {
	padding: .4em 1em;
	position: relative;
}
.ui-dialog .ui-dialog-title {
	float: left;
	margin: .1em 0;
	white-space: nowrap;
	width: 90%;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
	position: absolute;
	right: .3em;
	top: 50%;
	width: 20px;
	margin: -10px 0 0 0;
	padding: 1px;
	height: 20px;
}
.ui-dialog .ui-dialog-content {
	position: relative;
	border: 0;
	padding: .5em 1em;
	background: none;
	overflow: auto;
}
.ui-dialog .ui-dialog-buttonpane {
	text-align: left;
	border-width: 1px 0 0 0;
	background-image: none;
	margin-top: .5em;
	padding: .3em 1em .5em .4em;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
	float: right;
}
.ui-dialog .ui-dialog-buttonpane button {
	margin: .5em .4em .5em 0;
	cursor: pointer;
}
.ui-dialog .ui-resizable-se {
	width: 12px;
	height: 12px;
	right: -5px;
	bottom: -5px;
	background-position: 16px 16px;
}
.ui-draggable .ui-dialog-titlebar {
	cursor: move;
}
.ui-menu {
	list-style: none;
	padding: 0;
	margin: 0;
	display: block;
	outline: none;
}
.ui-menu .ui-menu {
	position: absolute;
}
.ui-menu .ui-menu-item {
	position: relative;
	margin: 0;
	padding: 3px 1em 3px .4em;
	cursor: pointer;
	min-height: 0; /* support: IE7 */
	/* support: IE10, see #8844 */
	list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
}
.ui-menu .ui-menu-divider {
	margin: 5px 0;
	height: 0;
	font-size: 0;
	line-height: 0;
	border-width: 1px 0 0 0;
}
.ui-menu .ui-state-focus,
.ui-menu .ui-state-active {
	margin: -1px;
}

/* icon support */
.ui-menu-icons {
	position: relative;
}
.ui-menu-icons .ui-menu-item {
	padding-left: 2em;
}

/* left-aligned */
.ui-menu .ui-icon {
	position: absolute;
	top: 0;
	bottom: 0;
	left: .2em;
	margin: auto 0;
}

/* right-aligned */
.ui-menu .ui-menu-icon {
	left: auto;
	right: 0;
}
.ui-progressbar {
	height: 2em;
	text-align: left;
	overflow: hidden;
}
.ui-progressbar .ui-progressbar-value {
	margin: -1px;
	height: 100%;
}
.ui-progressbar .ui-progressbar-overlay {
	background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
	height: 100%;
	filter: alpha(opacity=25); /* support: IE8 */
	opacity: 0.25;
}
.ui-progressbar-indeterminate .ui-progressbar-value {
	background-image: none;
}
.ui-selectmenu-menu {
	padding: 0;
	margin: 0;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
}
.ui-selectmenu-menu .ui-menu {
	overflow: auto;
	/* Support: IE7 */
	overflow-x: hidden;
	padding-bottom: 1px;
}
.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
	font-size: 1em;
	font-weight: bold;
	line-height: 1.5;
	padding: 2px 0.4em;
	margin: 0.5em 0 0 0;
	height: auto;
	border: 0;
}
.ui-selectmenu-open {
	display: block;
}
.ui-selectmenu-button {
	display: inline-block;
	overflow: hidden;
	position: relative;
	text-decoration: none;
	cursor: pointer;
}
.ui-selectmenu-button span.ui-icon {
	right: 0.5em;
	left: auto;
	margin-top: -8px;
	position: absolute;
	top: 50%;
}
.ui-selectmenu-button span.ui-selectmenu-text {
	text-align: left;
	padding: 0.4em 2.1em 0.4em 1em;
	display: block;
	line-height: 1.4;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.ui-slider {
	position: relative;
	text-align: left;
}
.ui-slider .ui-slider-handle {
	position: absolute;
	z-index: 2;
	width: 1.2em;
	height: 1.2em;
	cursor: default;
	-ms-touch-action: none;
	touch-action: none;
}
.ui-slider .ui-slider-range {
	position: absolute;
	z-index: 1;
	font-size: .7em;
	display: block;
	border: 0;
	background-position: 0 0;
}

/* support: IE8 - See #6727 */
.ui-slider.ui-state-disabled .ui-slider-handle,
.ui-slider.ui-state-disabled .ui-slider-range {
	filter: inherit;
}

.ui-slider-horizontal {
	height: .8em;
}
.ui-slider-horizontal .ui-slider-handle {
	top: -.3em;
	margin-left: -.6em;
}
.ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}
.ui-slider-horizontal .ui-slider-range-min {
	left: 0;
}
.ui-slider-horizontal .ui-slider-range-max {
	right: 0;
}

.ui-slider-vertical {
	width: .8em;
	height: 100px;
}
.ui-slider-vertical .ui-slider-handle {
	left: -.3em;
	margin-left: 0;
	margin-bottom: -.6em;
}
.ui-slider-vertical .ui-slider-range {
	left: 0;
	width: 100%;
}
.ui-slider-vertical .ui-slider-range-min {
	bottom: 0;
}
.ui-slider-vertical .ui-slider-range-max {
	top: 0;
}
.ui-spinner {
	position: relative;
	display: inline-block;
	overflow: hidden;
	padding: 0;
	vertical-align: middle;
}
.ui-spinner-input {
	border: none;
	background: none;
	color: inherit;
	padding: 0;
	margin: .2em 0;
	vertical-align: middle;
	margin-left: .4em;
	margin-right: 22px;
}
.ui-spinner-button {
	width: 16px;
	height: 50%;
	font-size: .5em;
	padding: 0;
	margin: 0;
	text-align: center;
	position: absolute;
	cursor: default;
	display: block;
	overflow: hidden;
	right: 0;
}
/* more specificity required here to override default borders */
.ui-spinner a.ui-spinner-button {
	border-top: none;
	border-bottom: none;
	border-right: none;
}
/* vertically center icon */
.ui-spinner .ui-icon {
	position: absolute;
	margin-top: -8px;
	top: 50%;
	left: 0;
}
.ui-spinner-up {
	top: 0;
}
.ui-spinner-down {
	bottom: 0;
}

/* TR overrides */
.ui-spinner .ui-icon-triangle-1-s {
	/* need to fix icons sprite */
	background-position: -65px -16px;
}
.ui-tabs {
	position: relative;/* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
	padding: 0;
}
.ui-tabs .ui-tabs-nav {
	border-top: #C1C1C1 1px solid;
	border-bottom: #C1C1C1 1px solid;
	margin: 0;
	padding: .2em .2em 0;
}
.ui-tabs .ui-tabs-nav li {
	list-style: none;
	float: left;
	position: relative;
	top: 0;
	margin-right: .2em;
	border-bottom-width: 0;
	padding: 0;
	white-space: nowrap;
}
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
	float: left;
	font-size: .875em;
	padding: 6px 12px;
	text-decoration: none;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
	margin-bottom: -1px;
	padding-bottom: 1px;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
	cursor: text;
}
.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
	cursor: pointer;
}
.ui-tabs .ui-tabs-panel {
	display: block;
	border-width: 0;
	padding: 1em 1.4em;
	background: none;
}
.ui-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
	-webkit-box-shadow: 0 0 5px #aaa;
	box-shadow: 0 0 5px #aaa;
}
body .ui-tooltip {
	border-width: 2px;
}

/* Component containers
----------------------------------*/
.ui-widget {
	font-family: 'ClearSans', sans-serif;
	font-size: 1.1em;
}
.ui-widget .ui-widget {
	font-size: 1em;
}
.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
	font-family: 'ClearSans', sans-serif;
	font-size: 1em;
}
.ui-widget-content {
	background: #ffffff url("images/ui-bg_flat_75_ffffff_40x100.png") 50% 50% repeat-x;
	color: #222222;
}
.ui-widget-content a {
	color: #222222;
}
.ui-widget-header {
	border: 1px solid #aaaaaa;
	background: #DADADA;
	color: #222222;
	font-weight: bold;
}
.ui-widget-header a {
	color: #222222;
}

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
	border: 1px solid #d3d3d3;
	background: #e6e6e6;
	font-weight: normal;
	color: #555555;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited {
	color: #555555;
	text-decoration: none;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
	border: 1px solid #999999;
	background: #dadada;
	font-weight: normal;
	color: #212121;
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited {
	color: #212121;
	text-decoration: none;
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	border: 1px solid #aaaaaa;
	background: #ffffff;
	font-weight: normal;
	color: #212121;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #212121;
	text-decoration: none;
}

/* Interaction Cues
----------------------------------*/
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
	border: 1px solid #fcefa1;
	background: #fbf9ee;
	color: #363636;
}
.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
	color: #363636;
}
.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
	border: 1px solid #cd0a0a;
	background: #fef1ec;
	color: #cd0a0a;
}
.ui-state-error a,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error a {
	color: #cd0a0a;
}
.ui-state-error-text,
.ui-widget-content .ui-state-error-text,
.ui-widget-header .ui-state-error-text {
	color: #cd0a0a;
}
.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
	font-weight: bold;
}
.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
	opacity: .7;
	filter:Alpha(Opacity=70); /* support: IE8 */
	font-weight: normal;
}
.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
	opacity: .35;
	filter:Alpha(Opacity=35); /* support: IE8 */
	background-image: none;
}
.ui-state-disabled .ui-icon {
	filter:Alpha(Opacity=35); /* support: IE8 - See #6059 */
}

/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	width: 16px;
	height: 16px;
}
.ui-icon,
.ui-widget-content .ui-icon {
	background-image: url("images/ui-icons_222222_256x240.png");
}
.ui-widget-header .ui-icon {
	background-image: url("images/ui-icons_222222_256x240.png");
}
.ui-state-default .ui-icon {
	background-image: url("images/ui-icons_888888_256x240.png");
}
.ui-state-hover .ui-icon,
.ui-state-focus .ui-icon {
	background-image: url("images/ui-icons_454545_256x240.png");
}
.ui-state-active .ui-icon {
	background-image: url("images/ui-icons_454545_256x240.png");
}
.ui-state-highlight .ui-icon {
	background-image: url("images/ui-icons_2e83ff_256x240.png");
}
.ui-state-error .ui-icon,
.ui-state-error-text .ui-icon {
	background-image: url("images/ui-icons_cd0a0a_256x240.png");
}

/* positioning */
.ui-icon-blank { background-position: 16px 16px; }
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position: -16px -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -64px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position: -32px -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position: -48px -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position: -80px -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position: -96px -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position: -112px -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position: -128px -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-on { background-position: -96px -144px; }
.ui-icon-radio-off { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position: -144px -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-start { background-position: -80px -160px; }
/* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position: -192px -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-all,
.ui-corner-top,
.ui-corner-left,
.ui-corner-tl {
	border-top-left-radius: 0;
}
.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr {
	border-top-right-radius: 0;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-left,
.ui-corner-bl {
	border-bottom-left-radius: 0;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
	border-bottom-right-radius: 0;
}

/* Overlays */
.ui-widget-overlay {
	background: #aaaaaa url("images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
	opacity: .3;
	filter: Alpha(Opacity=30); /* support: IE8 */
}
.ui-widget-shadow {
	margin: -8px 0 0 -8px;
	padding: 8px;
	background: #aaaaaa url("images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
	opacity: .3;
	filter: Alpha(Opacity=30); /* support: IE8 */
	border-radius: 8px;
}

/*!
 * jQuery UI CSS Framework 1.11.4
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 *
 * To view and modify this theme, visit http://jqueryui.com/themeroller/?ffDefault=Verdana%2CArial%2Csans-serif&fwDefault=normal&fsDefault=1.1em&cornerRadius=4px&bgColorHeader=cccccc&bgTextureHeader=highlight_soft&bgImgOpacityHeader=75&borderColorHeader=aaaaaa&fcHeader=222222&iconColorHeader=222222&bgColorContent=ffffff&bgTextureContent=flat&bgImgOpacityContent=75&borderColorContent=aaaaaa&fcContent=222222&iconColorContent=222222&bgColorDefault=e6e6e6&bgTextureDefault=glass&bgImgOpacityDefault=75&borderColorDefault=d3d3d3&fcDefault=555555&iconColorDefault=888888&bgColorHover=dadada&bgTextureHover=glass&bgImgOpacityHover=75&borderColorHover=999999&fcHover=212121&iconColorHover=454545&bgColorActive=ffffff&bgTextureActive=glass&bgImgOpacityActive=65&borderColorActive=aaaaaa&fcActive=212121&iconColorActive=454545&bgColorHighlight=fbf9ee&bgTextureHighlight=glass&bgImgOpacityHighlight=55&borderColorHighlight=fcefa1&fcHighlight=363636&iconColorHighlight=2e83ff&bgColorError=fef1ec&bgTextureError=glass&bgImgOpacityError=95&borderColorError=cd0a0a&fcError=cd0a0a&iconColorError=cd0a0a&bgColorOverlay=aaaaaa&bgTextureOverlay=flat&bgImgOpacityOverlay=0&opacityOverlay=30&bgColorShadow=aaaaaa&bgTextureShadow=flat&bgImgOpacityShadow=0&opacityShadow=30&thicknessShadow=8px&offsetTopShadow=-8px&offsetLeftShadow=-8px&cornerRadiusShadow=8px
 */


/* Component containers
----------------------------------*/
.ui-widget {
	font-family: 'ClearSans', sans-serif;
	font-size: 1.1em;
}
.ui-widget .ui-widget {
	font-size: 1em;
}
.ui-widget input,
.ui-widget select,
.ui-widget textarea,
.ui-widget button {
	font-family: 'ClearSans', sans-serif;
	font-size: 1em;
}
.ui-widget-content {
	background: #F1F1F1;
	color: #222222;
}
.ui-widget-content a {
	color: #222222;
}
.ui-widget-header {
	border: 1px solid #C1C1C1;
	background: #DADADA;
	color: #222222;
	font-weight: bold;
}
.ui-widget-header a {
	color: #222222;
}

/* Interaction states
----------------------------------*/
.ui-state-default,
.ui-widget-content .ui-state-default,
.ui-widget-header .ui-state-default {
	border: 1px solid #C1C1C1;
	background: #CCCCCC;
	font-weight: normal;
	color: #555555;
}
.ui-state-default a,
.ui-state-default a:link,
.ui-state-default a:visited {
	color: #555555;
	text-decoration: none;
}
.ui-state-hover,
.ui-widget-content .ui-state-hover,
.ui-widget-header .ui-state-hover,
.ui-state-focus,
.ui-widget-content .ui-state-focus,
.ui-widget-header .ui-state-focus {
	border: 1px solid #C1C1C1;
	background: #F1F1F1;
	font-weight: normal;
	color: #212121;
}
.ui-state-hover a,
.ui-state-hover a:hover,
.ui-state-hover a:link,
.ui-state-hover a:visited,
.ui-state-focus a,
.ui-state-focus a:hover,
.ui-state-focus a:link,
.ui-state-focus a:visited {
	color: #212121;
	text-decoration: none;
}
.ui-state-active,
.ui-widget-content .ui-state-active,
.ui-widget-header .ui-state-active {
	border: 1px solid #C1C1C1;
	background: #F1F1F1;
	font-weight: normal;
	color: #212121;
}
.ui-state-active a,
.ui-state-active a:link,
.ui-state-active a:visited {
	color: #212121;
	text-decoration: none;
}

/* Interaction Cues
----------------------------------*/
.ui-state-highlight,
.ui-widget-content .ui-state-highlight,
.ui-widget-header .ui-state-highlight {
	border: 1px solid #fcefa1;
	background: #fbf9ee;
	color: #363636;
}
.ui-state-highlight a,
.ui-widget-content .ui-state-highlight a,
.ui-widget-header .ui-state-highlight a {
	color: #363636;
}
.ui-state-error,
.ui-widget-content .ui-state-error,
.ui-widget-header .ui-state-error {
	border: 1px solid #cd0a0a;
	background: #fef1ec;
	color: #cd0a0a;
}
.ui-state-error a,
.ui-widget-content .ui-state-error a,
.ui-widget-header .ui-state-error a {
	color: #cd0a0a;
}
.ui-state-error-text,
.ui-widget-content .ui-state-error-text,
.ui-widget-header .ui-state-error-text {
	color: #cd0a0a;
}
.ui-priority-primary,
.ui-widget-content .ui-priority-primary,
.ui-widget-header .ui-priority-primary {
	font-weight: bold;
}
.ui-priority-secondary,
.ui-widget-content .ui-priority-secondary,
.ui-widget-header .ui-priority-secondary {
	opacity: .7;
	filter:Alpha(Opacity=70); /* support: IE8 */
	font-weight: normal;
}
.ui-state-disabled,
.ui-widget-content .ui-state-disabled,
.ui-widget-header .ui-state-disabled {
	opacity: .35;
	filter:Alpha(Opacity=35); /* support: IE8 */
	background-image: none;
}
.ui-state-disabled .ui-icon {
	filter:Alpha(Opacity=35); /* support: IE8 - See #6059 */
}

/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	width: 16px;
	height: 16px;
}
.ui-icon,
.ui-widget-content .ui-icon {
	background-image: url("images/ui-icons_222222_256x240.png");
}
.ui-widget-header .ui-icon {
	background-image: url("images/ui-icons_222222_256x240.png");
}
.ui-state-default .ui-icon {
	background-image: url("images/ui-icons_888888_256x240.png");
}
.ui-state-hover .ui-icon,
.ui-state-focus .ui-icon {
	background-image: url("images/ui-icons_454545_256x240.png");
}
.ui-state-active .ui-icon {
	background-image: url("images/ui-icons_454545_256x240.png");
}
.ui-state-highlight .ui-icon {
	background-image: url("images/ui-icons_2e83ff_256x240.png");
}
.ui-state-error .ui-icon,
.ui-state-error-text .ui-icon {
	background-image: url("images/ui-icons_cd0a0a_256x240.png");
}

/* positioning */
.ui-icon-blank { background-position: 16px 16px; }
.ui-icon-carat-1-n { background-position: 0 0; }
.ui-icon-carat-1-ne { background-position: -16px 0; }
.ui-icon-carat-1-e { background-position: -32px 0; }
.ui-icon-carat-1-se { background-position: -48px 0; }
.ui-icon-carat-1-s { background-position: -64px 0; }
.ui-icon-carat-1-sw { background-position: -80px 0; }
.ui-icon-carat-1-w { background-position: -96px 0; }
.ui-icon-carat-1-nw { background-position: -112px 0; }
.ui-icon-carat-2-n-s { background-position: -128px 0; }
.ui-icon-carat-2-e-w { background-position: -144px 0; }
.ui-icon-triangle-1-n { background-position: 0 -16px; }
.ui-icon-triangle-1-ne { background-position: -16px -16px; }
.ui-icon-triangle-1-e { background-position: -32px -16px; }
.ui-icon-triangle-1-se { background-position: -48px -16px; }
.ui-icon-triangle-1-s { background-position: -64px -16px; }
.ui-icon-triangle-1-sw { background-position: -80px -16px; }
.ui-icon-triangle-1-w { background-position: -96px -16px; }
.ui-icon-triangle-1-nw { background-position: -112px -16px; }
.ui-icon-triangle-2-n-s { background-position: -128px -16px; }
.ui-icon-triangle-2-e-w { background-position: -144px -16px; }
.ui-icon-arrow-1-n { background-position: 0 -32px; }
.ui-icon-arrow-1-ne { background-position: -16px -32px; }
.ui-icon-arrow-1-e { background-position: -32px -32px; }
.ui-icon-arrow-1-se { background-position: -48px -32px; }
.ui-icon-arrow-1-s { background-position: -64px -32px; }
.ui-icon-arrow-1-sw { background-position: -80px -32px; }
.ui-icon-arrow-1-w { background-position: -96px -32px; }
.ui-icon-arrow-1-nw { background-position: -112px -32px; }
.ui-icon-arrow-2-n-s { background-position: -128px -32px; }
.ui-icon-arrow-2-ne-sw { background-position: -144px -32px; }
.ui-icon-arrow-2-e-w { background-position: -160px -32px; }
.ui-icon-arrow-2-se-nw { background-position: -176px -32px; }
.ui-icon-arrowstop-1-n { background-position: -192px -32px; }
.ui-icon-arrowstop-1-e { background-position: -208px -32px; }
.ui-icon-arrowstop-1-s { background-position: -224px -32px; }
.ui-icon-arrowstop-1-w { background-position: -240px -32px; }
.ui-icon-arrowthick-1-n { background-position: 0 -48px; }
.ui-icon-arrowthick-1-ne { background-position: -16px -48px; }
.ui-icon-arrowthick-1-e { background-position: -32px -48px; }
.ui-icon-arrowthick-1-se { background-position: -48px -48px; }
.ui-icon-arrowthick-1-s { background-position: -64px -48px; }
.ui-icon-arrowthick-1-sw { background-position: -80px -48px; }
.ui-icon-arrowthick-1-w { background-position: -96px -48px; }
.ui-icon-arrowthick-1-nw { background-position: -112px -48px; }
.ui-icon-arrowthick-2-n-s { background-position: -128px -48px; }
.ui-icon-arrowthick-2-ne-sw { background-position: -144px -48px; }
.ui-icon-arrowthick-2-e-w { background-position: -160px -48px; }
.ui-icon-arrowthick-2-se-nw { background-position: -176px -48px; }
.ui-icon-arrowthickstop-1-n { background-position: -192px -48px; }
.ui-icon-arrowthickstop-1-e { background-position: -208px -48px; }
.ui-icon-arrowthickstop-1-s { background-position: -224px -48px; }
.ui-icon-arrowthickstop-1-w { background-position: -240px -48px; }
.ui-icon-arrowreturnthick-1-w { background-position: 0 -64px; }
.ui-icon-arrowreturnthick-1-n { background-position: -16px -64px; }
.ui-icon-arrowreturnthick-1-e { background-position: -32px -64px; }
.ui-icon-arrowreturnthick-1-s { background-position: -48px -64px; }
.ui-icon-arrowreturn-1-w { background-position: -64px -64px; }
.ui-icon-arrowreturn-1-n { background-position: -80px -64px; }
.ui-icon-arrowreturn-1-e { background-position: -96px -64px; }
.ui-icon-arrowreturn-1-s { background-position: -112px -64px; }
.ui-icon-arrowrefresh-1-w { background-position: -128px -64px; }
.ui-icon-arrowrefresh-1-n { background-position: -144px -64px; }
.ui-icon-arrowrefresh-1-e { background-position: -160px -64px; }
.ui-icon-arrowrefresh-1-s { background-position: -176px -64px; }
.ui-icon-arrow-4 { background-position: 0 -80px; }
.ui-icon-arrow-4-diag { background-position: -16px -80px; }
.ui-icon-extlink { background-position: -32px -80px; }
.ui-icon-newwin { background-position: -48px -80px; }
.ui-icon-refresh { background-position: -64px -80px; }
.ui-icon-shuffle { background-position: -80px -80px; }
.ui-icon-transfer-e-w { background-position: -96px -80px; }
.ui-icon-transferthick-e-w { background-position: -112px -80px; }
.ui-icon-folder-collapsed { background-position: 0 -96px; }
.ui-icon-folder-open { background-position: -16px -96px; }
.ui-icon-document { background-position: -32px -96px; }
.ui-icon-document-b { background-position: -48px -96px; }
.ui-icon-note { background-position: -64px -96px; }
.ui-icon-mail-closed { background-position: -80px -96px; }
.ui-icon-mail-open { background-position: -96px -96px; }
.ui-icon-suitcase { background-position: -112px -96px; }
.ui-icon-comment { background-position: -128px -96px; }
.ui-icon-person { background-position: -144px -96px; }
.ui-icon-print { background-position: -160px -96px; }
.ui-icon-trash { background-position: -176px -96px; }
.ui-icon-locked { background-position: -192px -96px; }
.ui-icon-unlocked { background-position: -208px -96px; }
.ui-icon-bookmark { background-position: -224px -96px; }
.ui-icon-tag { background-position: -240px -96px; }
.ui-icon-home { background-position: 0 -112px; }
.ui-icon-flag { background-position: -16px -112px; }
.ui-icon-calendar { background-position: -32px -112px; }
.ui-icon-cart { background-position: -48px -112px; }
.ui-icon-pencil { background-position: -64px -112px; }
.ui-icon-clock { background-position: -80px -112px; }
.ui-icon-disk { background-position: -96px -112px; }
.ui-icon-calculator { background-position: -112px -112px; }
.ui-icon-zoomin { background-position: -128px -112px; }
.ui-icon-zoomout { background-position: -144px -112px; }
.ui-icon-search { background-position: -160px -112px; }
.ui-icon-wrench { background-position: -176px -112px; }
.ui-icon-gear { background-position: -192px -112px; }
.ui-icon-heart { background-position: -208px -112px; }
.ui-icon-star { background-position: -224px -112px; }
.ui-icon-link { background-position: -240px -112px; }
.ui-icon-cancel { background-position: 0 -128px; }
.ui-icon-plus { background-position: -16px -128px; }
.ui-icon-plusthick { background-position: -32px -128px; }
.ui-icon-minus { background-position: -48px -128px; }
.ui-icon-minusthick { background-position: -64px -128px; }
.ui-icon-close { background-position: -80px -128px; }
.ui-icon-closethick { background-position: -96px -128px; }
.ui-icon-key { background-position: -112px -128px; }
.ui-icon-lightbulb { background-position: -128px -128px; }
.ui-icon-scissors { background-position: -144px -128px; }
.ui-icon-clipboard { background-position: -160px -128px; }
.ui-icon-copy { background-position: -176px -128px; }
.ui-icon-contact { background-position: -192px -128px; }
.ui-icon-image { background-position: -208px -128px; }
.ui-icon-video { background-position: -224px -128px; }
.ui-icon-script { background-position: -240px -128px; }
.ui-icon-alert { background-position: 0 -144px; }
.ui-icon-info { background-position: -16px -144px; }
.ui-icon-notice { background-position: -32px -144px; }
.ui-icon-help { background-position: -48px -144px; }
.ui-icon-check { background-position: -64px -144px; }
.ui-icon-bullet { background-position: -80px -144px; }
.ui-icon-radio-on { background-position: -96px -144px; }
.ui-icon-radio-off { background-position: -112px -144px; }
.ui-icon-pin-w { background-position: -128px -144px; }
.ui-icon-pin-s { background-position: -144px -144px; }
.ui-icon-play { background-position: 0 -160px; }
.ui-icon-pause { background-position: -16px -160px; }
.ui-icon-seek-next { background-position: -32px -160px; }
.ui-icon-seek-prev { background-position: -48px -160px; }
.ui-icon-seek-end { background-position: -64px -160px; }
.ui-icon-seek-start { background-position: -80px -160px; }
/* ui-icon-seek-first is deprecated, use ui-icon-seek-start instead */
.ui-icon-seek-first { background-position: -80px -160px; }
.ui-icon-stop { background-position: -96px -160px; }
.ui-icon-eject { background-position: -112px -160px; }
.ui-icon-volume-off { background-position: -128px -160px; }
.ui-icon-volume-on { background-position: -144px -160px; }
.ui-icon-power { background-position: 0 -176px; }
.ui-icon-signal-diag { background-position: -16px -176px; }
.ui-icon-signal { background-position: -32px -176px; }
.ui-icon-battery-0 { background-position: -48px -176px; }
.ui-icon-battery-1 { background-position: -64px -176px; }
.ui-icon-battery-2 { background-position: -80px -176px; }
.ui-icon-battery-3 { background-position: -96px -176px; }
.ui-icon-circle-plus { background-position: 0 -192px; }
.ui-icon-circle-minus { background-position: -16px -192px; }
.ui-icon-circle-close { background-position: -32px -192px; }
.ui-icon-circle-triangle-e { background-position: -48px -192px; }
.ui-icon-circle-triangle-s { background-position: -64px -192px; }
.ui-icon-circle-triangle-w { background-position: -80px -192px; }
.ui-icon-circle-triangle-n { background-position: -96px -192px; }
.ui-icon-circle-arrow-e { background-position: -112px -192px; }
.ui-icon-circle-arrow-s { background-position: -128px -192px; }
.ui-icon-circle-arrow-w { background-position: -144px -192px; }
.ui-icon-circle-arrow-n { background-position: -160px -192px; }
.ui-icon-circle-zoomin { background-position: -176px -192px; }
.ui-icon-circle-zoomout { background-position: -192px -192px; }
.ui-icon-circle-check { background-position: -208px -192px; }
.ui-icon-circlesmall-plus { background-position: 0 -208px; }
.ui-icon-circlesmall-minus { background-position: -16px -208px; }
.ui-icon-circlesmall-close { background-position: -32px -208px; }
.ui-icon-squaresmall-plus { background-position: -48px -208px; }
.ui-icon-squaresmall-minus { background-position: -64px -208px; }
.ui-icon-squaresmall-close { background-position: -80px -208px; }
.ui-icon-grip-dotted-vertical { background-position: 0 -224px; }
.ui-icon-grip-dotted-horizontal { background-position: -16px -224px; }
.ui-icon-grip-solid-vertical { background-position: -32px -224px; }
.ui-icon-grip-solid-horizontal { background-position: -48px -224px; }
.ui-icon-gripsmall-diagonal-se { background-position: -64px -224px; }
.ui-icon-grip-diagonal-se { background-position: -80px -224px; }


/* Misc visuals
----------------------------------*/

/* Corner radius */
.ui-corner-all,
.ui-corner-top,
.ui-corner-left,
.ui-corner-tl {
	border-top-left-radius: 0;
}
.ui-corner-all,
.ui-corner-top,
.ui-corner-right,
.ui-corner-tr {
	border-top-right-radius: 0;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-left,
.ui-corner-bl {
	border-bottom-left-radius: 0;
}
.ui-corner-all,
.ui-corner-bottom,
.ui-corner-right,
.ui-corner-br {
	border-bottom-right-radius: 0;
}

/* Overlays */
.ui-widget-overlay {
	background: #aaaaaa url("images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
	opacity: .3;
	filter: Alpha(Opacity=30); /* support: IE8 */
}
.ui-widget-shadow {
	margin: -8px 0 0 -8px;
	padding: 8px;
	background: #aaaaaa url("images/ui-bg_flat_0_aaaaaa_40x100.png") 50% 50% repeat-x;
	opacity: .3;
	filter: Alpha(Opacity=30); /* support: IE8 */
	border-radius: 8px;
}

/*!
 * jQuery UI CSS Framework 1.11.4
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 * http://api.jqueryui.com/category/theming/
 */

/* Layout helpers
----------------------------------*/
.ui-helper-hidden {
	display: none;
}
.ui-helper-hidden-accessible {
	border: 0;
	clip: rect(0 0 0 0);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute;
	width: 1px;
}
.ui-helper-reset {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	line-height: 1.3;
	text-decoration: none;
	font-size: 100%;
	list-style: none;
}
.ui-helper-clearfix:before,
.ui-helper-clearfix:after {
	content: "";
	display: table;
	border-collapse: collapse;
}
.ui-helper-clearfix:after {
	clear: both;
}
.ui-helper-clearfix {
	min-height: 0; /* support: IE7 */
}
.ui-helper-zfix {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	position: absolute;
	opacity: 0;
	filter:Alpha(Opacity=0); /* support: IE8 */
}

.ui-front {
	z-index: 100;
}


/* Interaction Cues
----------------------------------*/
.ui-state-disabled {
	cursor: default !important;
}


/* Icons
----------------------------------*/

/* states and images */
.ui-icon {
	display: block;
	text-indent: -99999px;
	overflow: hidden;
	background-repeat: no-repeat;
}


/* Misc visuals
----------------------------------*/

/* Overlays */
.ui-widget-overlay {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.ui-draggable-handle {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-resizable {
	position: relative;
}
.ui-resizable-handle {
	position: absolute;
	font-size: 0.1px;
	display: block;
	-ms-touch-action: none;
	touch-action: none;
}
.ui-resizable-disabled .ui-resizable-handle,
.ui-resizable-autohide .ui-resizable-handle {
	display: none;
}
.ui-resizable-n {
	cursor: n-resize;
	height: 7px;
	width: 100%;
	top: -5px;
	left: 0;
}
.ui-resizable-s {
	cursor: s-resize;
	height: 7px;
	width: 100%;
	bottom: -5px;
	left: 0;
}
.ui-resizable-e {
	cursor: e-resize;
	width: 7px;
	right: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-w {
	cursor: w-resize;
	width: 7px;
	left: -5px;
	top: 0;
	height: 100%;
}
.ui-resizable-se {
	cursor: se-resize;
	width: 12px;
	height: 12px;
	right: 1px;
	bottom: 1px;
}
.ui-resizable-sw {
	cursor: sw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	bottom: -5px;
}
.ui-resizable-nw {
	cursor: nw-resize;
	width: 9px;
	height: 9px;
	left: -5px;
	top: -5px;
}
.ui-resizable-ne {
	cursor: ne-resize;
	width: 9px;
	height: 9px;
	right: -5px;
	top: -5px;
}
.ui-selectable {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-selectable-helper {
	position: absolute;
	z-index: 100;
	border: 1px dotted black;
}
.ui-sortable-handle {
	-ms-touch-action: none;
	touch-action: none;
}
.ui-accordion .ui-accordion-header {
	display: block;
	cursor: pointer;
	position: relative;
	margin: 2px 0 0 0;
	padding: .5em .5em .5em .7em;
	min-height: 0; /* support: IE7 */
	font-size: 100%;
}
.ui-accordion .ui-accordion-icons {
	padding-left: 2.2em;
}
.ui-accordion .ui-accordion-icons .ui-accordion-icons {
	padding-left: 2.2em;
}
.ui-accordion .ui-accordion-header .ui-accordion-header-icon {
	position: absolute;
	left: .5em;
	top: 50%;
	margin-top: -8px;
}
.ui-accordion .ui-accordion-content {
	padding: 1em 2.2em;
	border-top: 0;
	overflow: auto;
}
.ui-autocomplete {
	position: absolute;
	top: 0;
	left: 0;
	cursor: default;
}
.ui-button {
	display: inline-block;
	position: relative;
	padding: 0;
	line-height: normal;
	margin-right: .1em;
	cursor: pointer;
	vertical-align: middle;
	text-align: center;
	overflow: visible; /* removes extra width in IE */
}
.ui-button,
.ui-button:link,
.ui-button:visited,
.ui-button:hover,
.ui-button:active {
	text-decoration: none;
}
/* to make room for the icon, a width needs to be set here */
.ui-button-icon-only {
	width: 2.2em;
}
/* button elements seem to need a little more width */
button.ui-button-icon-only {
	width: 2.4em;
}
.ui-button-icons-only {
	width: 3.4em;
}
button.ui-button-icons-only {
	width: 3.7em;
}

/* button text element */
.ui-button .ui-button-text {
	display: block;
	line-height: normal;
}
.ui-button-text-only .ui-button-text {
	padding: .4em 1em;
}
.ui-button-icon-only .ui-button-text,
.ui-button-icons-only .ui-button-text {
	padding: .4em;
	text-indent: -9999999px;
}
.ui-button-text-icon-primary .ui-button-text,
.ui-button-text-icons .ui-button-text {
	padding: .4em 1em .4em 2.1em;
}
.ui-button-text-icon-secondary .ui-button-text,
.ui-button-text-icons .ui-button-text {
	padding: .4em 2.1em .4em 1em;
}
.ui-button-text-icons .ui-button-text {
	padding-left: 2.1em;
	padding-right: 2.1em;
}
/* no icon support for input elements, provide padding by default */
input.ui-button {
	padding: .4em 1em;
}

/* button icon element(s) */
.ui-button-icon-only .ui-icon,
.ui-button-text-icon-primary .ui-icon,
.ui-button-text-icon-secondary .ui-icon,
.ui-button-text-icons .ui-icon,
.ui-button-icons-only .ui-icon {
	position: absolute;
	top: 50%;
	margin-top: -8px;
}
.ui-button-icon-only .ui-icon {
	left: 50%;
	margin-left: -8px;
}
.ui-button-text-icon-primary .ui-button-icon-primary,
.ui-button-text-icons .ui-button-icon-primary,
.ui-button-icons-only .ui-button-icon-primary {
	left: .5em;
}
.ui-button-text-icon-secondary .ui-button-icon-secondary,
.ui-button-text-icons .ui-button-icon-secondary,
.ui-button-icons-only .ui-button-icon-secondary {
	right: .5em;
}

/* button sets */
.ui-buttonset {
	margin-right: 7px;
}
.ui-buttonset .ui-button {
	margin-left: 0;
	margin-right: -.3em;
}

/* workarounds */
/* reset extra padding in Firefox, see h5bp.com/l */
input.ui-button::-moz-focus-inner,
button.ui-button::-moz-focus-inner {
	border: 0;
	padding: 0;
}
.ui-datepicker {
	width: 17em;
	padding: .2em .2em 0;
	display: none;
}
.ui-datepicker .ui-datepicker-header {
	position: relative;
	padding: .2em 0;
}
.ui-datepicker .ui-datepicker-prev,
.ui-datepicker .ui-datepicker-next {
	position: absolute;
	top: 2px;
	width: 1.8em;
	height: 1.8em;
}
.ui-datepicker .ui-datepicker-prev-hover,
.ui-datepicker .ui-datepicker-next-hover {
	top: 1px;
}
.ui-datepicker .ui-datepicker-prev {
	left: 2px;
}
.ui-datepicker .ui-datepicker-next {
	right: 2px;
}
.ui-datepicker .ui-datepicker-prev-hover {
	left: 1px;
}
.ui-datepicker .ui-datepicker-next-hover {
	right: 1px;
}
.ui-datepicker .ui-datepicker-prev span,
.ui-datepicker .ui-datepicker-next span {
	display: block;
	position: absolute;
	left: 50%;
	margin-left: -8px;
	top: 50%;
	margin-top: -8px;
}
.ui-datepicker .ui-datepicker-title {
	margin: 0 2.3em;
	line-height: 1.8em;
	text-align: center;
}
.ui-datepicker .ui-datepicker-title select {
	font-size: 1em;
	margin: 1px 0;
}
.ui-datepicker select.ui-datepicker-month,
.ui-datepicker select.ui-datepicker-year {
	width: 45%;
}
.ui-datepicker table {
	width: 100%;
	font-size: .9em;
	border-collapse: collapse;
	margin: 0 0 .4em;
}
.ui-datepicker th {
	padding: .7em .3em;
	text-align: center;
	font-weight: bold;
	border: 0;
}
.ui-datepicker td {
	border: 0;
	padding: 1px;
}
.ui-datepicker td span,
.ui-datepicker td a {
	display: block;
	padding: .2em;
	text-align: right;
	text-decoration: none;
}
.ui-datepicker .ui-datepicker-buttonpane {
	background-image: none;
	margin: .7em 0 0 0;
	padding: 0 .2em;
	border-left: 0;
	border-right: 0;
	border-bottom: 0;
}
.ui-datepicker .ui-datepicker-buttonpane button {
	float: right;
	margin: .5em .2em .4em;
	cursor: pointer;
	padding: .2em .6em .3em .6em;
	width: auto;
	overflow: visible;
}
.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current {
	float: left;
}

/* with multiple calendars */
.ui-datepicker.ui-datepicker-multi {
	width: auto;
}
.ui-datepicker-multi .ui-datepicker-group {
	float: left;
}
.ui-datepicker-multi .ui-datepicker-group table {
	width: 95%;
	margin: 0 auto .4em;
}
.ui-datepicker-multi-2 .ui-datepicker-group {
	width: 50%;
}
.ui-datepicker-multi-3 .ui-datepicker-group {
	width: 33.3%;
}
.ui-datepicker-multi-4 .ui-datepicker-group {
	width: 25%;
}
.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header {
	border-left-width: 0;
}
.ui-datepicker-multi .ui-datepicker-buttonpane {
	clear: left;
}
.ui-datepicker-row-break {
	clear: both;
	width: 100%;
	font-size: 0;
}

/* RTL support */
.ui-datepicker-rtl {
	direction: rtl;
}
.ui-datepicker-rtl .ui-datepicker-prev {
	right: 2px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next {
	left: 2px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-prev:hover {
	right: 1px;
	left: auto;
}
.ui-datepicker-rtl .ui-datepicker-next:hover {
	left: 1px;
	right: auto;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane {
	clear: right;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button {
	float: left;
}
.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,
.ui-datepicker-rtl .ui-datepicker-group {
	float: right;
}
.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,
.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header {
	border-right-width: 0;
	border-left-width: 1px;
}
.ui-dialog {
	overflow: hidden;
	position: absolute;
	top: 0;
	left: 0;
	padding: .2em;
	outline: 0;
}
.ui-dialog .ui-dialog-titlebar {
	padding: .4em 1em;
	position: relative;
}
.ui-dialog .ui-dialog-title {
	float: left;
	margin: .1em 0;
	white-space: nowrap;
	width: 90%;
	overflow: hidden;
	text-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
	position: absolute;
	right: .3em;
	top: 50%;
	width: 20px;
	margin: -10px 0 0 0;
	padding: 1px;
	height: 20px;
}
.ui-dialog .ui-dialog-content {
	position: relative;
	border: 0;
	padding: .5em 1em;
	background: none;
	overflow: auto;
}
.ui-dialog .ui-dialog-buttonpane {
	text-align: left;
	border-width: 1px 0 0 0;
	background-image: none;
	margin-top: .5em;
	padding: .3em 1em .5em .4em;
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
	float: right;
}
.ui-dialog .ui-dialog-buttonpane button {
	margin: .5em .4em .5em 0;
	cursor: pointer;
}
.ui-dialog .ui-resizable-se {
	width: 12px;
	height: 12px;
	right: -5px;
	bottom: -5px;
	background-position: 16px 16px;
}
.ui-draggable .ui-dialog-titlebar {
	cursor: move;
}
.ui-menu {
	list-style: none;
	padding: 0;
	margin: 0;
	display: block;
	outline: none;
}
.ui-menu .ui-menu {
	position: absolute;
}
.ui-menu .ui-menu-item {
	position: relative;
	margin: 0;
	padding: 3px 1em 3px .4em;
	cursor: pointer;
	min-height: 0; /* support: IE7 */
	/* support: IE10, see #8844 */
	list-style-image: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
}
.ui-menu .ui-menu-divider {
	margin: 5px 0;
	height: 0;
	font-size: 0;
	line-height: 0;
	border-width: 1px 0 0 0;
}
.ui-menu .ui-state-focus,
.ui-menu .ui-state-active {
	margin: -1px;
}

/* icon support */
.ui-menu-icons {
	position: relative;
}
.ui-menu-icons .ui-menu-item {
	padding-left: 2em;
}

/* left-aligned */
.ui-menu .ui-icon {
	position: absolute;
	top: 0;
	bottom: 0;
	left: .2em;
	margin: auto 0;
}

/* right-aligned */
.ui-menu .ui-menu-icon {
	left: auto;
	right: 0;
}
.ui-progressbar {
	height: 2em;
	text-align: left;
	overflow: hidden;
}
.ui-progressbar .ui-progressbar-value {
	margin: -1px;
	height: 100%;
}
.ui-progressbar .ui-progressbar-overlay {
	background: url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");
	height: 100%;
	filter: alpha(opacity=25); /* support: IE8 */
	opacity: 0.25;
}
.ui-progressbar-indeterminate .ui-progressbar-value {
	background-image: none;
}
.ui-selectmenu-menu {
	padding: 0;
	margin: 0;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
}
.ui-selectmenu-menu .ui-menu {
	overflow: auto;
	/* Support: IE7 */
	overflow-x: hidden;
	padding-bottom: 1px;
}
.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup {
	font-size: 1em;
	font-weight: bold;
	line-height: 1.5;
	padding: 2px 0.4em;
	margin: 0.5em 0 0 0;
	height: auto;
	border: 0;
}
.ui-selectmenu-open {
	display: block;
}
.ui-selectmenu-button {
	display: inline-block;
	overflow: hidden;
	position: relative;
	text-decoration: none;
	cursor: pointer;
}
.ui-selectmenu-button span.ui-icon {
	right: 0.5em;
	left: auto;
	margin-top: -8px;
	position: absolute;
	top: 50%;
}
.ui-selectmenu-button span.ui-selectmenu-text {
	text-align: left;
	padding: 0.4em 2.1em 0.4em 1em;
	display: block;
	line-height: 1.4;
	overflow: hidden;
	text-overflow: ellipsis;
	white-space: nowrap;
}
.ui-slider {
	position: relative;
	text-align: left;
}
.ui-slider .ui-slider-handle {
	position: absolute;
	z-index: 2;
	width: 1.2em;
	height: 1.2em;
	cursor: default;
	-ms-touch-action: none;
	touch-action: none;
}
.ui-slider .ui-slider-range {
	position: absolute;
	z-index: 1;
	font-size: .7em;
	display: block;
	border: 0;
	background-position: 0 0;
}

/* support: IE8 - See #6727 */
.ui-slider.ui-state-disabled .ui-slider-handle,
.ui-slider.ui-state-disabled .ui-slider-range {
	filter: inherit;
}

.ui-slider-horizontal {
	height: .8em;
}
.ui-slider-horizontal .ui-slider-handle {
	top: -.3em;
	margin-left: -.6em;
}
.ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}
.ui-slider-horizontal .ui-slider-range-min {
	left: 0;
}
.ui-slider-horizontal .ui-slider-range-max {
	right: 0;
}

.ui-slider-vertical {
	width: .8em;
	height: 100px;
}
.ui-slider-vertical .ui-slider-handle {
	left: -.3em;
	margin-left: 0;
	margin-bottom: -.6em;
}
.ui-slider-vertical .ui-slider-range {
	left: 0;
	width: 100%;
}
.ui-slider-vertical .ui-slider-range-min {
	bottom: 0;
}
.ui-slider-vertical .ui-slider-range-max {
	top: 0;
}
.ui-spinner {
	position: relative;
	display: inline-block;
	overflow: hidden;
	padding: 0;
	vertical-align: middle;
}
.ui-spinner-input {
	border: none;
	background: none;
	color: inherit;
	padding: 0;
	margin: .2em 0;
	vertical-align: middle;
	margin-left: .4em;
	margin-right: 22px;
}
.ui-spinner-button {
	width: 16px;
	height: 50%;
	font-size: .5em;
	padding: 0;
	margin: 0;
	text-align: center;
	position: absolute;
	cursor: default;
	display: block;
	overflow: hidden;
	right: 0;
}
/* more specificity required here to override default borders */
.ui-spinner a.ui-spinner-button {
	border-top: none;
	border-bottom: none;
	border-right: none;
}
/* vertically center icon */
.ui-spinner .ui-icon {
	position: absolute;
	margin-top: -8px;
	top: 50%;
	left: 0;
}
.ui-spinner-up {
	top: 0;
}
.ui-spinner-down {
	bottom: 0;
}

/* TR overrides */
.ui-spinner .ui-icon-triangle-1-s {
	/* need to fix icons sprite */
	background-position: -65px -16px;
}
.ui-tabs {
	position: relative;/* position: relative prevents IE scroll bug (element with position: relative inside container with overflow: auto appear as "fixed") */
	padding: 0;
}
.ui-tabs .ui-tabs-nav {
	margin: 0;
	padding: 4px 13px 0;
}
.ui-tabs .ui-tabs-nav li {
	list-style: none;
	float: left;
	position: relative;
	top: 0;
	margin: 1px .2em 0 0;
	border-bottom-width: 0;
	padding: 0;
	white-space: nowrap;
}
.ui-tabs .ui-tabs-nav .ui-tabs-anchor {
	float: left;
	padding: .5em 1em;
	text-decoration: none;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active {
	margin-bottom: -1px;
	padding-bottom: 1px;
}
.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,
.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor {
	cursor: default;
}
.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor {
	cursor: pointer;
}
.ui-tabs .ui-tabs-panel {
	display: block;
	border-width: 0;
	padding: 1em 1.4em;
	background: none;
}
.ui-tooltip {
	padding: 8px;
	position: absolute;
	z-index: 9999;
	max-width: 300px;
	-webkit-box-shadow: 0 0 5px #aaa;
	box-shadow: 0 0 5px #aaa;
}
body .ui-tooltip {
	border-width: 2px;
}


.suggest {
    display: none;
    position: absolute;
    z-index: 1000;
    background-color: #fff;
    border: 1px solid #ccc;
}

.suggest div {
    display: block;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
    padding: 0 2px;
}

.suggest div.hovered {
    color: #fff;
    background-color: #ccc;
}




.window {
    display: none;
    position: absolute;
    z-index: 2;
    background-color: #ffffff;
    border-radius: 3px;
/*    border-bottom: 1px solid #202020;
    border-left:   1px solid #202020;
    border-right:  1px solid #202020; */
    /*font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;*/
}


/* ---------------------------- Tool-Tip Styles (used with webwinTT) --------------------------*/
/*                                Copied from the domTT library                                */

/* bz: Simple Classic Style with padding - no caption or contents div needed */
div.wwTT_Simple {
    border: 1px solid #202020;
    background-color: InfoBackground;
    color: InfoText;
    font-size: 13px;
    font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;
    padding: 2px 4px;
}


/* Default Tooltip Style */
div.wwTT {
    border: 1px solid #333333;
    background-color: #333333;
    font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;
}
div.wwTT .caption {
    font-size: 12px;
    font-weight: bold;
    padding: 1px 2px;
    color: #FFFFFF;
}
div.wwTT .contents {
    font-size: 12px;
    font-family: sans-serif;
    padding: 3px 2px;
    background-color: #F1F1FF;
}

/* Classic Style */
div.wwTT_Classic {
    border: 1px solid #202020;
    background-color: InfoBackground;
    font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;
}
div.wwTT_Classic .caption {
    font-size: 13px;
    font-weight: bold;
    font-style: italic;
    padding: 1px 2px;
}
div.wwTT_Classic .contents {
    color: InfoText;
    font-size: 13px;
    padding: 1px 2px;
}


/* Win9x Style */
div.wwTT_Win {
  border: 2px outset #BFBFBF;
  background-color: #808080;
  font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;
}
div.wwTT_Win .caption {
  border: 0px solid #BFBFBF;
  border-width: 1px 1px 0px 1px;
  background-color: #00007F;
  padding: 2px;
  font-size: 12px;
  font-weight: bold;
  color: #FFFFFF;
}
div.wwTT_Win .contents {
  border: 1px solid #BFBFBF;
}

/* Overlib Style */
div.wwTT_Overlib {
    border: 1px solid #333366;
    background-color: #333366;
    font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;
}
div.wwTT_Overlib .caption {
    font-size: 10px;
    font-weight: bold;
    color: #FFFFFF;
}
div.wwTT_Overlib .contents {
    font-size: 10px;
    padding: 2px;
    background-color: #F1F1FF;
}

/* Nicetitle Style */
div.wwTT_niceTitle {
    font-family: "helvetica neue", "helvetica", verdana, geneva, arial, sans-serif;
    background-color: #333333;
    color: #FFFFFF;
    font-size: 12px;
    left: 0;
    top: 0;
    padding: 5px 10px 8px 10px;
    position: absolute;
    text-align: left;
    z-index: 20;
    border-radius: 3px;
}
div.wwTT_niceTitle .contents {
    margin: 0;
    padding: 0 3px;
}
div.wwTT_niceTitle p {
    color: #D17E62;
    font-size: 9px;
    padding: 3px 0 0 0;
    margin: 0;
    text-align: left;
    opacity: 1;
}

/* Context Menu Style */
div.wwTT_Menu {
  width: 150px;
  border: 1px solid #202020;
  background-color: #E6E6E6;
}
div.wwTT_Menu .caption {
  font-size: 12px;
  font-family: sans-serif;
  background-color: #E6E6E6;
}
div.wwTT_Menu .contents {
  padding: 1px 0;
  background-color: #E6E6E6;
}

.ui-tabs * {
    outline:none;
}
.ui-tabs .ui-tabs-hide {
    display:none !important;
}
/* bb: temp solution for timesheets_tabs image padding - replace with css in the winc file after Nov 30th */
#timesheets_tabs img.timesheets-tab-right-img {
    padding: 8px 8px 0 0;
}

.ui-widget-content a {
    color: #3178C6;
}    .tabs { 
        list-style: none;
    }
        .tabs li { 
          /* Makes a horizontal row */
            float: left; 
            
            /* So the psueudo elements can be
               abs. positioned inside */
            position: relative; 
        }
        .tabs a { 
          /* Make them block level
             and only as wide as they need */
          float: left; 
          padding: 10px 20px; 
          text-decoration: none;
          outline: none;
          
          /* Default colors */ 
          color: black;
          background: #eee; 
          
          /* Only round the top corners */
          -webkit-border-top-left-radius: 15px;
          -webkit-border-top-right-radius: 15px;
          -moz-border-radius-topleft: 15px;
          -moz-border-radius-topright: 15px;
          border-top-left-radius: 15px;
          border-top-right-radius: 15px; 
        }
        .tabs .active {
          /* Highest, active tab is on top */
          z-index: 3;
        }
        .tabs .active a { 
          /* Colors when tab is active */
          background: #ccc; 
          color: black; 
        }
        .tabs li:before, .tabs li:after, 
        .tabs li a:before, .tabs li a:after {
          /* All pseudo elements are 
             abs. positioned and on bottom */
          position: absolute;
          bottom: 0;
        }
        /* Only the first, last, and active
           tabs need pseudo elements at all */
        .tabs li:last-child:after,   .tabs li:last-child a:after,
        .tabs li:first-child:before, .tabs li:first-child a:before,
        .tabs .active:after,   .tabs .active:before, 
        .tabs .active a:after, .tabs .active a:before {
          content: "";
        }
        .tabs .active:before, .tabs .active:after {
          background: #ccc; 
          
          /* Squares below circles */
          z-index: 1;
        }
        /* Squares */
        .tabs li:before, .tabs li:after {
          background: #eee;
          width: 10px;
          height: 10px;
        }
        .tabs li:before {
          left: -10px;      
        }
        .tabs li:after { 
          right: -10px;
        }
        /* Circles */
        .tabs li a:after, .tabs li a:before {
          width: 20px; 
          height: 20px;
          /* Circles are circular */
          -webkit-border-radius: 10px;
          -moz-border-radius:    10px;
          border-radius:         10px;
          background: #fff;
          
          /* Circles over squares */
          z-index: 2;
        }
        .tabs .active a:after, .tabs .active a:before {
          background: #eee;
        }
        /* First and last tabs have different
           outside color needs */
        .tabs li:first-child.active a:before,
        .tabs li:last-child.active a:after {
          background: #fff;
        }
        .tabs li a:before {
          left: -20px;
        }
        .tabs li a:after {
          right: -20px;
        }    
        .group:before,
.group:after {
    content: "";
    display: table;
}
.group:after {
    clear: both;
}
.group {
    zoom: 1;
}