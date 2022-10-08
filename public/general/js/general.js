//Global
var project = project|| {};
//Define Module
project.Config = (function(){

    var getApiUrl = function(){
        return  getAppUrl()+'/api';
    };

    var getAppUrl = function(){
        return $('base').attr('href');
    };

    var getToken = function () {
        var token = '';
        try {
            token = JSON.parse(localStorage.getItem('dealboard'));
        } catch (e) {
            return token;
        }
        return token;
    }
    var setToken = function(t){

        localStorage.setItem('dealboard', JSON.stringify(t));

    }
    var authenticate = function () {
        if (getToken() == null || getToken() === "") {
            window.location.href = getAppUrl()+'/sign-in';
        }
    };

    return {
        getApiUrl:getApiUrl,
        getAppUrl:getAppUrl,
        getToken:getToken,
        setToken:setToken,
        authenticate:authenticate
    }

}());

project.App = (function () {
    var config = project.Config;

    var init = function () {
        if (!window.console) window.console = {log: function(obj) {}};
        console.log('Application has been initialized...');
    };
    var isValidUrl = function (url){
        var expression = /^(http(s)?:\/\/[a-zA-Z0-9\-_]+\.[a-zA-Z0-9]+(.)+)+$/;

        var regex = new RegExp(expression);
        if (!url.match(regex)) {
            return false;
        }
        return true;
    };
    var youtubeNvimeoUrl = function (url){
        var expression = /^(http(s)\:\/\/www\.youtube\.com\/[a-zA-Z0-9]+(.)+|http(s)\:\/\/vimeo\.com\/[a-zA-Z0-9]+(.)+)$/;

        var regex = new RegExp(expression);
        if (!url.match(regex)) {
            return false;
        }
        return true;
    };

    var authenticate = function () {
        if (jsonLocalStorageData == null || jsonLocalStorageData === "") {
            window.location.href = config.getAppUrl()+'/admin';
        }
    };

    var randomPassword = function(length) {
        var chars = "abcdefghijklmnopqrstuvwxyz1234567890";
        var pass = "";
        for (var x = 0; x < length; x++) {
            var i = Math.floor(Math.random() * chars.length);
            pass += chars.charAt(i);
        }
        return pass;
    };
    var isEmail = function(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    };
    var isNumberOnly = function (value) {
        var er = /^([0-9]{11,14})$/;
        return er.test(value);
    };

    var isYear = function(value) {
        var year = /^[0-9]{4}$/;
        return year.test(value);
    }

    var isPhoneNumber = function (value) {
        var er = /^(\+[0-9]{11,14})$/;
        return er.test(value);
    };

    var minLimit = function(min,value){
        if(value.length < min) {
            return false;
        } else {
            return true;
        }
    };

    //Show Alerts
    // var showAlerts = function (alert_id,alert_type="",alert_message="",alert_status,time="5000"){
    //     var alert_class = "";
    //     if(alert_type=="error"){
    //         alert_class="alert-danger";
    //         remove_class="alert-success";
    //     }else{
    //         alert_class="alert-success";
    //         remove_class="alert-danger";
    //     }
    //     $(alert_id).addClass(alert_class).removeClass(remove_class).html(alert_message);
    //     if(alert_status=="show"){
    //         $(alert_id).show();
    //         setTimeout(function(){
    //             $(alert_id).hide();
    //         },time);
    //     }else{
    //         $(alert_id).hide();
    //     }
    // };

    //Show Spinner
    var displaySpinner = function(btn_id,spinner_status){
        if(spinner_status=="show"){
            $(btn_id).addClass('show-spinner').addClass('disabled');
        }else{
            $(btn_id).removeClass('show-spinner').removeClass('disabled');
        }
    };

    return {
        init:init,
        isValidUrl:isValidUrl,
        authenticate:authenticate,
        randomPassword:randomPassword,
        isEmail:isEmail,
        isNumberOnly:isNumberOnly,
        isYear:isYear,
        isPhoneNumber:isPhoneNumber,
        minLimit:minLimit,
        youtubeNvimeoUrl:youtubeNvimeoUrl,
        displaySpinner:displaySpinner,

    };

}());

project.Validate=(function(){

    //--------------------------------General Function--------------------------------------------------


    function validateEmail(youremail) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(youremail);
    }

    function validatePhoneNo(yourphone) {
        var reno = /^\d{11}$/;
        return reno.test(yourphone);
    }


    function validatenum(num) {
        var reno = /^\d+$/;
        return reno.test(num);
    }


    function validatealpha(alpha) {
        var reno = /^[a-zA-Z\s]+$/;
        return reno.test(alpha);
    }


    function validatecnic(cnic) {
        var reno = /^\d{5}-\d{7}-\d{1}$/;
        return reno.test(cnic);
    }

    <!-- -----------------------------------------------END----------------------- -->
});
