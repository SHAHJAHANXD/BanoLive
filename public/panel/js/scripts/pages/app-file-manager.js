$(function(){"use strict";var e=$(".sidebar-file-manager"),o=$(".sidebar-toggle"),s=$(".body-content-overlay"),n=$(".my-drive"),t=$(".right-sidebar"),i=$(".file-manager-main-content"),l=$(".view-container"),a=$(".file-manager-item"),d=$(".no-result"),r=$(".file-actions"),c=$(".view-toggle"),f=$(".files-filter"),h=$(".toggle-dropdown"),g=$(".sidebar-list"),v=$(".file-dropdown"),w=$(".file-manager-content-body");if(a.length&&a.find(".custom-control-input").on("change",function(){var e=$(this);e.is(":checked")?e.closest(".file, .folder").addClass("selected"):e.closest(".file, .folder").removeClass("selected"),a.find(".custom-control-input:checked").length?r.addClass("show"):r.removeClass("show")}),c.length&&c.find("input").on("change",function(){var e=$(this);l.each(function(){$(this).hasClass("view-container-static")||(e.is(":checked")&&"list"===e.data("view")?$(this).addClass("list-view"):$(this).removeClass("list-view"))})}),f.length&&f.on("keyup",function(){var e=$(this).val().toLowerCase();a.filter(function(){var o=$(this);e.length?(o.closest(".file, .folder").toggle(-1<o.text().toLowerCase().indexOf(e)),$.each(l,function(){var e=$(this);0===e.find(".file:visible, .folder:visible").length?e.find(".no-result").removeClass("d-none").addClass("d-flex"):e.find(".no-result").addClass("d-none").removeClass("d-flex")})):(o.closest(".file, .folder").show(),d.addClass("d-none").removeClass("d-flex"))})}),$(g).length>0)new PerfectScrollbar(g[0],{suppressScrollX:!0});if($(w).length>0)new PerfectScrollbar(w[0],{cancelable:!0,wheelPropagation:!1});n.length&&n.jstree({core:{themes:{dots:!1},data:[{text:"My Drive",children:[{text:"photos",children:[{text:"image-1.jpg",type:"jpg"},{text:"image-2.jpg",type:"jpg"}]}]}]},plugins:["types"],types:{default:{icon:"far fa-folder font-medium-1"},jpg:{icon:"far fa-file-image text-info font-medium-1"}}}),o.on("click",function(){e.toggleClass("show"),s.toggleClass("show")}),$(".body-content-overlay, .sidebar-close-icon").on("click",function(){e.removeClass("show"),s.removeClass("show"),t.removeClass("show")}),$(window).on("resize",function(){$(window).width()>768&&s.hasClass("show")&&(e.removeClass("show"),s.removeClass("show"),t.removeClass("show"))}),g.find(".list-group a").on("click",function(){g.find(".list-group a").hasClass("active")&&g.find(".list-group a").removeClass("active"),$(this).addClass("active")}),h.length&&($(".file-logo-wrapper .dropdown").on("click",function(e){var o=$(this);e.preventDefault(),v.length&&($(".view-container").find(".file-dropdown").remove(),0===o.closest(".dropdown").find(".dropdown-menu").length&&v.clone().appendTo(o.closest(".dropdown")).addClass("show").find(".dropdown-item").on("click",function(){$(this).closest(".dropdown-menu").remove()}))}),$(document).on("click",function(e){$(e.target).hasClass("toggle-dropdown")||i.find(".file-dropdown").remove()}),l.length&&$(".file, .folder").on("mouseleave",function(){$(this).find(".file-dropdown").remove()}))});
