(function ($){
    $.fn.WebForm = function( options ) {
        var form = this;
        var self = {};
        var defaults = {
            action: null,
            eventCategory: null,
            eventAction: null,
            eventLabel: null,
            form_error: function (form) {
                alert('Form has errors!');
            },
            form_success: function (form) {
                alert('Message sent success!');
            },
            validate: function (form){
                //remove error class
                $('input, textarea, select', form).removeClass('has-error');

                var status = true;
                $('input, textarea, select', form).each(function() {
                    //check required fields have value
                    if($(this).hasClass('required') && !$(this).val()){
                        $(this).addClass('has-error');
                        status = false;
                    }
                });
                return status;
            },
            changeSendData: function (data){
                return data;
            }
        };
        var settings = $.extend( {}, defaults, options );
        var FormData = {
            files: []
        };

        $(this).on('submit', function ($form) {
            $form.preventDefault();
            var validate = settings.validate(form);
            if(validate !== true){
                settings.form_error(form);
                return;
            }
            $('input, textarea, select', $form.target).each(function() {
                if($(this).attr('name')){
                    FormData[$(this).attr('name')] = $(this).val();
                }
            });
            FormData['action'] = settings.action;
            $.ajax({
                url: document.URL, 
                type: 'POST',
                data: settings.changeSendData(FormData),
                success: function(data, status, xhr) {
                    if(data.status){
                        ga('send', {
                            hitType: 'event',
                            eventCategory: settings.eventCategory,
                            eventAction: settings.eventAction,
                            eventLabel: settings.eventLabel
                        });
                        //goog_report_conversion(); 

                        fbq('track', 'CompleteRegistration');
                        $('body').append('<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=1128545&conversionId=977169&fmt=gif" />');

                        settings.form_success(form, data);
                        $('input, textarea, select', form).each(function() {
                            if($(this).is(":visible")){
                                $(this).val('');
                            }
                        });
                    }else{
                        settings.form_error(form, data);
                    }
                }
            });
        });

        return self;
    };


    $('#header-registration-form').WebForm({
        action: 'registration',
        eventCategory: 'registration',
        eventAction: 'registration',
        eventLabel: 'registration',
        form_success: function (form, data) {
            if(data.redirect){
                window.location = data.redirect;
            }
            $('.response-container', form).html('<div role="alert" class="alert alert-success">'+data.msg+'</div>');
            $('.response-container', form).show();
        },
        form_error: function (form, data) {
            $('.response-container', form).html('<div role="alert" class="alert alert-danger">'+data.msg+'</div>');
            $('.response-container', form).show();
        },
        validate: function (form){
            //remove error class
            $('input, textarea, select', form).removeClass('is-invalid');

            var status = true;
            $('input, textarea, select', form).each(function() {
                //check required fields have value
                if($(this).hasClass('required') && !$(this).val()){
                    $(this).addClass('is-invalid');
                    status = false;
                }
            });
            return status;
        },
    });

    $('#registration-form').WebForm({
        action: 'registration',
        eventCategory: 'registration',
        eventAction: 'registration',
        eventLabel: 'registration',
        form_success: function (form, data) {
            if(data.redirect){
                window.location = data.redirect;
            }
            $('.response-container', form).html('<div role="alert" class="alert alert-success">'+data.msg+'</div>');
            $('.response-container', form).show();
        },
        form_error: function (form, data) {
            $('.response-container', form).html('<div role="alert" class="alert alert-danger">'+data.msg+'</div>');
            $('.response-container', form).show();
        },
        validate: function (form){
            //remove error class
            $('input, textarea, select', form).removeClass('is-invalid');

            var status = true;
            $('input, textarea, select', form).each(function() {
                //check required fields have value
                if($(this).hasClass('required') && !$(this).val()){
                    $(this).addClass('is-invalid');
                    status = false;
                }
            });
            return status;
        },
    });

    $('#contact-form').SpinCRMForm({
        auth_token: 'sd4fg5dfg56dsfg46sdf52g65ert5e56g1',
        form_error: function (form) {
            if(window.language === 'lt'){
                var subtitle = 'Prašome patikrinti ar visi laukeliai užpildyti teisingai.';
            }else{
                var subtitle = 'Please check that all fields are correct.';
            }
            $('.response-container', form).html('<div role="alert" class="alert alert-danger">'+subtitle+'</div>');
            $('.response-container', form).show();
        },
        form_success: function (form) {
            if(window.language === 'lt'){
                var subtitle = 'Susisieksime su Jumis greitu laiku!';
            }else{
                var subtitle = 'We will get in touch with you soon!';
            }
            $('.response-container', form).html('<div role="alert" class="alert alert-success">'+subtitle+'</div>');
            $('.response-container', form).show();
        },
        validate: function (form){
            //remove error class
            $('input, textarea, select', form).removeClass('is-invalid');

            var status = true;
            $('input, textarea, select', form).each(function() {
                //check required fields have value
                if($(this).hasClass('required') && !$(this).val()){
                    $(this).addClass('is-invalid');
                    status = false;
                }
            });
            return status;
        },
        changeSendData: function (data){
            data['source'] = 'WEB kontaktai';
            return data;
        }
    });

    $('.newsletter-form').SpinCRMForm({
        auth_token: 'sd4fg5dfg56dsfg46sdf52g65ert5e56g1',
        form_error: function (form) {
            if(window.language === 'lt'){
                var subtitle = 'Klaidingai nurodytas el. paštas';
            }else{
                var subtitle = 'Please check that all fields are correct.';
            }
            $('.response-container', form).html('<div role="alert" class="alert alert-danger">'+subtitle+'</div>');
            $('.response-container', form).show();
        },
        form_success: function (form) {
            if(window.language === 'lt'){
                var subtitle = 'Sėkmingai prenumeravote mūsų naujienlaiškį!';
            }else{
                var subtitle = 'You have successfully subscribed our newsletter!';
            }
            $('.response-container', form).html('<div role="alert" class="alert alert-success">'+subtitle+'</div>');
            $('.response-container', form).show();
        },
        validate: function (form){
            //remove error class
            $('input, textarea, select', form).removeClass('is-invalid');

            var status = true;
            $('input, textarea, select', form).each(function() {
                //check required fields have value
                if($(this).hasClass('required') && !$(this).val()){
                    $(this).addClass('is-invalid');
                    status = false;
                }
            });
            return status;
        },
        changeSendData: function (data){
            data['first_name'] = data['email'];
            data['source'] = 'WEB newsletter';
            data['marketing'] = 1;
            return data;
        }
    });

})(jQuery);
/**
 * Track code
 */
window.fbAsyncInit = function() {
    FB.init({
        appId      : '301432730229191',
        xfbml      : true,
        version    : 'v2.7'
    });
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
