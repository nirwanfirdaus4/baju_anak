<?php $this->load->view('admin/header_table') ?>
<?php $this->load->view('admin/navigasi') ?>
<!-- isi -->

<div class="page-content">

<div id="portlet-config" class="modal hide">
<div class="modal-header">
<button data-dismiss="modal" class="close" type="button"></button>
<h3>Widget Settings</h3>
</div>
<div class="modal-body"> Widget settings form goes here </div>
</div>
<div class="clearfix"></div>
<div class="content">
<ul class="breadcrumb">
<li>
<p>Produk</p>
</li>
<li><a href="#" class="active">Ukuran</a> </li>
</ul>
<div class="page-title"> 
<!-- 	<i class="icon-custom-left"></i>
<h3>Data - <span class="semi-bold">Ukuran</span></h3> -->
</div>

<div class="row-fluid">
<div class="span12">
<div class="grid simple ">
<div class="grid-title">
<h4>Data <span class="semi-bold">Ukuran</span></h4>
<!-- <div class="tools">
<a href="javascript:;" class="collapse"></a>
<a href="#grid-config" data-toggle="modal" class="config"></a>
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div> -->
</div>
<div class="grid-body ">
<table class="table table-striped" id="example2">
<thead>
<tr>
<th>Rendering engine</th>
<th>Browser</th>
<th>Platform(s)</th>
<th>Engine version</th>
<th>CSS grade</th>
</tr>
</thead>
<tbody>
<tr class="odd gradeX">
<td>Trident</td>
<td>Internet Explorer 4.0</td>
<td>Win 95+</td>
<td class="center"> 4</td>
<td class="center">X</td>
</tr>
<tr class="even gradeC">
<td>Trident</td>
<td>Internet Explorer 5.0</td>
<td>Win 95+</td>
<td class="center">5</td>
<td class="center">C</td>
</tr>
<tr class="odd gradeA">
<td>Trident</td>
<td>Internet Explorer 5.5</td>
<td>Win 95+</td>
<td class="center">5.5</td>
<td class="center">A</td>
</tr>
<tr class="even gradeA">
<td>Trident</td>
<td>Internet Explorer 6</td>
<td>Win 98+</td>
<td class="center">6</td>
<td class="center">A</td>
</tr>
<tr class="odd gradeA">
<td>Trident</td>
<td>Internet Explorer 7</td>
<td>Win XP SP2+</td>
<td class="center">7</td>
<td class="center">A</td>
</tr>
<tr class="even gradeA">
<td>Trident</td>
<td>AOL browser (AOL desktop)</td>
<td>Win XP</td>
<td class="center">6</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Firefox 1.0</td>
<td>Win 98+ / OSX.2+</td>
<td class="center">1.7</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Firefox 1.5</td>
<td>Win 98+ / OSX.2+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Firefox 2.0</td>
<td>Win 98+ / OSX.2+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Firefox 3.0</td>
<td>Win 2k+ / OSX.3+</td>
<td class="center">1.9</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Camino 1.0</td>
<td>OSX.2+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Camino 1.5</td>
<td>OSX.3+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Netscape 7.2</td>
<td>Win 95+ / Mac OS 8.6-9.2</td>
<td class="center">1.7</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Netscape Browser 8</td>
<td>Win 98SE+</td>
<td class="center">1.7</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Netscape Navigator 9</td>
<td>Win 98+ / OSX.2+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.0</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.1</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1.1</td>
 <td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.2</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1.2</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.3</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1.3</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.4</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1.4</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.5</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1.5</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.6</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">1.6</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.7</td>
<td>Win 98+ / OSX.1+</td>
<td class="center">1.7</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Mozilla 1.8</td>
<td>Win 98+ / OSX.1+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Seamonkey 1.1</td>
<td>Win 98+ / OSX.2+</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Gecko</td>
<td>Epiphany 2.20</td>
<td>Gnome</td>
<td class="center">1.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>Safari 1.2</td>
<td>OSX.3</td>
<td class="center">125.5</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>Safari 1.3</td>
<td>OSX.3</td>
<td class="center">312.8</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>Safari 2.0</td>
<td>OSX.4+</td>
<td class="center">419.3</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>Safari 3.0</td>
<td>OSX.4+</td>
<td class="center">522.1</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>OmniWeb 5.5</td>
<td>OSX.4+</td>
<td class="center">420</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>iPod Touch / iPhone</td>
<td>iPod</td>
<td class="center">420.1</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Webkit</td>
<td>S60</td>
<td>S60</td>
<td class="center">413</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 7.0</td>
<td>Win 95+ / OSX.1+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 7.5</td>
<td>Win 95+ / OSX.2+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 8.0</td>
<td>Win 95+ / OSX.2+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 8.5</td>
<td>Win 95+ / OSX.2+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 9.0</td>
<td>Win 95+ / OSX.3+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 9.2</td>
<td>Win 88+ / OSX.3+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera 9.5</td>
<td>Win 88+ / OSX.3+</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Opera for Wii</td>
<td>Wii</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Nokia N800</td>
<td>N800</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>Presto</td>
<td>Nintendo DS browser</td>
<td>Nintendo DS</td>
<td class="center">8.5</td>
<td class="center">C/A<sup>1</sup></td>
</tr>
<tr class="gradeC">
<td>KHTML</td>
<td>Konqureror 3.1</td>
<td>KDE 3.1</td>
<td class="center">3.1</td>
<td class="center">C</td>
</tr>
<tr class="gradeA">
<td>KHTML</td>
<td>Konqureror 3.3</td>
<td>KDE 3.3</td>
<td class="center">3.3</td>
<td class="center">A</td>
</tr>
<tr class="gradeA">
<td>KHTML</td>
<td>Konqureror 3.5</td>
<td>KDE 3.5</td>
<td class="center">3.5</td>
<td class="center">A</td>
</tr>
<tr class="gradeX">
<td>Tasman</td>
<td>Internet Explorer 4.5</td>
<td>Mac OS 8-9</td>
<td class="center">-</td>
<td class="center">X</td>
</tr>
<tr class="gradeC">
<td>Tasman</td>
<td>Internet Explorer 5.1</td>
<td>Mac OS 7.6-9</td>
<td class="center">1</td>
<td class="center">C</td>
</tr>
<tr class="gradeC">
<td>Tasman</td>
<td>Internet Explorer 5.2</td>
<td>Mac OS 8-X</td>
<td class="center">1</td>
<td class="center">C</td>
</tr>
<tr class="gradeA">
<td>Misc</td>
<td>NetFront 3.1</td>
<td>Embedded devices</td>
<td class="center">-</td>
<td class="center">C</td>
</tr>
<tr class="gradeA">
<td>Misc</td>
<td>NetFront 3.4</td>
<td>Embedded devices</td>
<td class="center">-</td>
<td class="center">A</td>
</tr>
<tr class="gradeX">
<td>Misc</td>
<td>Dillo 0.8</td>
<td>Embedded devices</td>
<td class="center">-</td>
<td class="center">X</td>
</tr>
<tr class="gradeX">
<td>Misc</td>
<td>Links</td>
<td>Text only</td>
<td class="center">-</td>
<td class="center">X</td>
</tr>
<tr class="gradeX">
<td>Misc</td>
<td>Lynx</td>
<td>Text only</td>
<td class="center">-</td>
<td class="center">X</td>
</tr>
<tr class="gradeC">
<td>Misc</td>
<td>IE Mobile</td>
<td>Windows Mobile 6</td>
<td class="center">-</td>
<td class="center">C</td>
</tr>
<tr class="gradeC">
<td>Misc</td>
<td>PSP browser</td>
<td>PSP</td>
<td class="center">-</td>
<td class="center">C</td>
</tr>
<tr class="gradeU">
<td>Other browsers</td>
<td>All others</td>
<td>-</td>
<td class="center">-</td>
<td class="center">U</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>


</div>
<div class="admin-bar" id="quick-access" style="display:">
<div class="admin-bar-inner">
<div class="form-horizontal">
<select id="val1" class="select2-wrapper m-r-10">
<option value="Gecko">Gecko</option>
<option value="Webkit">Webkit</option>
<option value="KHTML">KHTML</option>
<option value="Tasman">Tasman</option>
</select>
<select id="val2" class="select2-wrapper">
<option value="Internet Explorer 10">Internet Explorer 10</option>
<option value="Firefox 4.0">Firefox 4.0</option>
<option value="Chrome">Chrome</option>
</select>
</div>
<button class="btn btn-primary btn-cons btn-add" type="button">Add Browser</button>
<button class="btn btn-white btn-cons btn-cancel" type="button">Cancel</button>
</div>
</div>
<div class="addNewRow"></div>
</div>

<div class="chat-window-wrapper">
<div id="main-chat-wrapper" class="inner-content">
<div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
<div class="chat-header">
<div class="pull-left">
<input type="text" placeholder="search">
</div>
<div class="pull-right">
<a href="#" class="">
<div class="iconset top-settings-dark "></div>
</a>
</div>
</div>
<div class="side-widget">
<div class="side-widget-title">group chats</div>
<div class="side-widget-content">
<div id="groups-list">
<ul class="groups">
<li>
<a href="#">
<div class="status-icon green"></div>Office work</a>
</li>
<li>
 <a href="#">
<div class="status-icon green"></div>Personal vibes</a>
</li>
</ul>
</div>
</div>
</div>
<div class="side-widget fadeIn">
<div class="side-widget-title">favourites</div>
<div id="favourites-list">
<div class="side-widget-content">
<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
<span class="badge badge-important">3</span>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="side-widget">
<div class="side-widget-title">more friends</div>
<div class="side-widget-content" id="friends-list">
<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
<div class="chat-header">
<div class="pull-left">
<input type="text" placeholder="search">
</div>
<div class="pull-right">
<a href="#" class="">
<div class="iconset top-settings-dark "></div>
</a>
</div>
</div>
<div class="clearfix"></div>
<div class="chat-messages-header">
<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
</div>
<div class="chat-messages scrollbar-dynamic clearfix">
<div class="inner-scroll-content clearfix">
<div class="sent_time">Yesterday 11:25pm</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
Hello, You there?
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
How was the meeting?
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
Let me know when you free
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="sent_time ">Today 11:25pm</div>
<div class="user-details-wrapper pull-right">
<div class="user-details">
<div class="bubble sender">
Let me know when you free
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Sent On Tue, 2:45pm</div>
</div>
</div>
</div>
<div class="chat-input-wrapper" style="display:none">
<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>

</div>

<?php $this->load->view('admin/footer_table') ?>