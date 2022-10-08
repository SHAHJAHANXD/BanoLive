$(function(){"use strict";var a=$(".invoice-list-table"),t="../../../app-assets/",e="app-invoice-preview.html",n="app-invoice-add.html",s="app-invoice-edit.html";if("laravel"===$("body").attr("data-framework")&&(t=$("body").attr("data-asset-path"),e=t+"app/invoice/preview",n=t+"app/invoice/add",s=t+"app/invoice/edit"),a.length)a.DataTable({ajax:t+"data/invoice-list.json",autoWidth:!1,columns:[{data:"responsive_id"},{data:"invoice_id"},{data:"invoice_status"},{data:"issued_date"},{data:"client_name"},{data:"total"},{data:"balance"},{data:"invoice_status"},{data:""}],columnDefs:[{className:"control",responsivePriority:2,targets:0},{targets:1,width:"46px",render:function(a,t,n,s){var i=n.invoice_id;return'<a class="font-weight-bold" href="'+e+'"> #'+i+"</a>"}},{targets:2,width:"42px",render:function(a,t,e,n){var s=e.invoice_status,i=e.due_date,o={Sent:{class:"bg-light-secondary",icon:"send"},Paid:{class:"bg-light-success",icon:"check-circle"},Draft:{class:"bg-light-primary",icon:"save"},Downloaded:{class:"bg-light-info",icon:"arrow-down-circle"},"Past Due":{class:"bg-light-danger",icon:"info"},"Partial Payment":{class:"bg-light-warning",icon:"pie-chart"}};return"<span data-toggle='tooltip' data-html='true' title='<span>"+s+'<br> <span class="font-weight-bold">Balance:</span> '+e.balance+'<br> <span class="font-weight-bold">Due Date:</span> '+i+"</span>'><div class=\"avatar avatar-status "+o[s].class+'"><span class="avatar-content">'+feather.icons[o[s].icon].toSvg({class:"avatar-icon"})+"</span></div></span>"}},{targets:3,responsivePriority:4,width:"270px",render:function(a,e,n,s){var i=n.client_name,o=n.email,l=n.avatar,r=["success","danger","warning","info","primary","secondary"][Math.floor(6*Math.random())],c=(i=n.client_name).match(/\b\w/g)||[];if(c=((c.shift()||"")+(c.pop()||"")).toUpperCase(),l)var d='<img  src="'+t+"images/avatars/"+l+'" alt="Avatar" width="32" height="32">';else d='<div class="avatar-content">'+c+"</div>";return'<div class="d-flex justify-content-left align-items-center"><div class="avatar-wrapper"><div class="avatar'+(""===l?" bg-light-"+r+" ":" ")+'mr-50">'+d+'</div></div><div class="d-flex flex-column"><h6 class="user-name text-truncate mb-0">'+i+'</h6><small class="text-truncate text-muted">'+o+"</small></div></div>"}},{targets:4,width:"73px",render:function(a,t,e,n){var s=e.total;return'<span class="d-none">'+s+"</span>$"+s}},{targets:5,width:"130px",render:function(a,t,e,n){var s=new Date(e.due_date);return'<span class="d-none">'+moment(s).format("YYYYMMDD")+"</span>"+moment(s).format("DD MMM YYYY")}},{targets:6,width:"98px",render:function(a,t,e,n){var s=e.balance;if(0===s){return'<span class="badge badge-pill badge-light-success" text-capitalized> Paid </span>'}return'<span class="d-none">'+s+"</span>"+s}},{targets:7,visible:!1},{targets:-1,title:"Actions",width:"80px",orderable:!1,render:function(a,t,n,i){return'<div class="d-flex align-items-center col-actions"><a class="mr-1" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Send Mail">'+feather.icons.send.toSvg({class:"font-medium-2"})+'</a><a class="mr-1" href="'+e+'" data-toggle="tooltip" data-placement="top" title="Preview Invoice">'+feather.icons.eye.toSvg({class:"font-medium-2"})+'</a><div class="dropdown"><a class="btn btn-sm btn-icon px-0" data-toggle="dropdown">'+feather.icons["more-vertical"].toSvg({class:"font-medium-2"})+'</a><div class="dropdown-menu dropdown-menu-right"><a href="javascript:void(0);" class="dropdown-item">'+feather.icons.download.toSvg({class:"font-small-4 mr-50"})+'Download</a><a href="'+s+'" class="dropdown-item">'+feather.icons.edit.toSvg({class:"font-small-4 mr-50"})+'Edit</a><a href="javascript:void(0);" class="dropdown-item">'+feather.icons.trash.toSvg({class:"font-small-4 mr-50"})+'Delete</a><a href="javascript:void(0);" class="dropdown-item">'+feather.icons.copy.toSvg({class:"font-small-4 mr-50"})+"Duplicate</a></div></div></div>"}}],order:[[1,"desc"]],dom:'<"row d-flex justify-content-between align-items-center m-1"<"col-lg-6 d-flex align-items-center"l<"dt-action-buttons text-xl-right text-lg-left text-lg-right text-left "B>><"col-lg-6 d-flex align-items-center justify-content-lg-end flex-lg-nowrap flex-wrap pr-lg-1 p-0"f<"invoice_status ml-sm-2">>>t<"d-flex justify-content-between mx-2 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',language:{sLengthMenu:"Show _MENU_",search:"Search",searchPlaceholder:"Search Invoice",paginate:{previous:"&nbsp;",next:"&nbsp;"}},buttons:[{text:"Add Record",className:"btn btn-primary btn-add-record ml-2",action:function(a,t,e,s){window.location=n}}],responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(a){return"Details of "+a.data().client_name}}),type:"column",renderer:$.fn.dataTable.Responsive.renderer.tableAll({tableClass:"table",columnDefs:[{targets:2,visible:!1},{targets:3,visible:!1}]})}},initComplete:function(){$(document).find('[data-toggle="tooltip"]').tooltip(),this.api().columns(7).every(function(){var a=this,t=$('<select id="UserRole" class="form-control ml-50 text-capitalize"><option value=""> Select Status </option></select>').appendTo(".invoice_status").on("change",function(){var t=$.fn.dataTable.util.escapeRegex($(this).val());a.search(t?"^"+t+"$":"",!0,!1).draw()});a.data().unique().sort().each(function(a,e){t.append('<option value="'+a+'" class="text-capitalize">'+a+"</option>")})})},drawCallback:function(){$(document).find('[data-toggle="tooltip"]').tooltip()}})});
