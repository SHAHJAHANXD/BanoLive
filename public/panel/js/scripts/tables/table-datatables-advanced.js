"use strict";function filterColumn(a,e){if(5==a){var t=$(".start_date").val(),l=$(".end_date").val();filterByDate(a,t,l),$(".dt-advanced-search").dataTable().fnDraw()}else $(".dt-advanced-search").DataTable().column(a).search(e,!1,!0).draw()}var separator=" - ",rangePickr=$(".flatpickr-range"),dateFormat="MM/DD/YYYY",options={autoUpdateInput:!1,autoApply:!0,locale:{format:dateFormat,separator:separator},opens:"rtl"===$("html").attr("data-textdirection")?"left":"right"};rangePickr.length&&rangePickr.flatpickr({mode:"range",dateFormat:"m/d/Y",onClose:function(a,e,t){var l="",n=new Date;null!=a[0]&&(l=a[0].getMonth()+1+"/"+a[0].getDate()+"/"+a[0].getFullYear(),$(".start_date").val(l)),null!=a[1]&&(n=a[1].getMonth()+1+"/"+a[1].getDate()+"/"+a[1].getFullYear(),$(".end_date").val(n)),$(rangePickr).trigger("change").trigger("keyup")}});var filterByDate=function(a,e,t){$.fn.dataTableExt.afnFiltering.push(function(l,n,s){var o=normalizeDate(n[a]),r=normalizeDate(e),d=normalizeDate(t);return r<=o&&o<=d||(o>=r&&""===d&&""!==r||o<=d&&""===r&&""!==d)})},normalizeDate=function(a){var e=new Date(a);return e.getFullYear()+""+("0"+(e.getMonth()+1)).slice(-2)+("0"+e.getDate()).slice(-2)};$(function(){$("html").attr("data-textdirection");var a=$(".datatables-ajax"),e=$(".dt-column-search"),t=$(".dt-advanced-search"),l=$(".dt-responsive"),n="../../../app-assets/";if("laravel"===$("body").attr("data-framework")&&(n=$("body").attr("data-asset-path")),a.length)a.dataTable({processing:!0,dom:'<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',ajax:n+"data/ajax.php",language:{paginate:{previous:"&nbsp;",next:"&nbsp;"}}});if(e.length){$(".dt-column-search thead tr").clone(!0).appendTo(".dt-column-search thead"),$(".dt-column-search thead tr:eq(1) th").each(function(a){var e=$(this).text();$(this).html('<input type="text" class="form-control form-control-sm" placeholder="Search '+e+'" />'),$("input",this).on("keyup change",function(){s.column(a).search()!==this.value&&s.column(a).search(this.value).draw()})});var s=e.DataTable({ajax:n+"data/table-datatable.json",columns:[{data:"full_name"},{data:"email"},{data:"post"},{data:"city"},{data:"start_date"},{data:"salary"}],dom:'<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',orderCellsTop:!0,language:{paginate:{previous:"&nbsp;",next:"&nbsp;"}}})}if(t.length)t.DataTable({ajax:n+"data/table-datatable.json",columns:[{data:"responsive_id"},{data:"full_name"},{data:"email"},{data:"post"},{data:"city"},{data:"start_date"},{data:"salary"}],columnDefs:[{className:"control",orderable:!1,targets:0}],dom:'<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',orderCellsTop:!0,responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(a){return"Details of "+a.data().full_name}}),type:"column",renderer:$.fn.dataTable.Responsive.renderer.tableAll({tableClass:"table"})}},language:{paginate:{previous:"&nbsp;",next:"&nbsp;"}}});if($("input.dt-input").on("keyup",function(){filterColumn($(this).attr("data-column"),$(this).val())}),l.length)l.DataTable({ajax:n+"data/table-datatable.json",columns:[{data:"responsive_id"},{data:"full_name"},{data:"email"},{data:"post"},{data:"city"},{data:"start_date"},{data:"salary"},{data:"age"},{data:"experience"},{data:"status"}],columnDefs:[{className:"control",orderable:!1,targets:0},{targets:-1,render:function(a,e,t,l){var n=t.status,s={1:{title:"Current",class:"badge-light-primary"},2:{title:"Professional",class:" badge-light-success"},3:{title:"Rejected",class:" badge-light-danger"},4:{title:"Resigned",class:" badge-light-warning"},5:{title:"Applied",class:" badge-light-info"}};return void 0===s[n]?a:'<span class="badge badge-pill '+s[n].class+'">'+s[n].title+"</span>"}}],dom:'<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',responsive:{details:{display:$.fn.dataTable.Responsive.display.modal({header:function(a){return"Details of "+a.data().full_name}}),type:"column",renderer:$.fn.dataTable.Responsive.renderer.tableAll({tableClass:"table"})}},language:{paginate:{previous:"&nbsp;",next:"&nbsp;"}}});$(".dataTables_filter .form-control").removeClass("form-control-sm"),$(".dataTables_length .custom-select").removeClass("custom-select-sm").removeClass("form-control-sm")});
