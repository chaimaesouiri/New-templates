/*!/wp-content/themes/octopus/js/link-counter.js*/
jQuery(document).ready(function($){if(!localStorage.getItem('like')){$("#clap").removeClass('clicked').removeClass('scale')}
$("#clap").on('click',function(){localStorage.setItem('like',!0);$(this).addClass('clicked').addClass('scale');$('#totalCounter').addClass('fader');$('#clicker').addClass('first-active').addClass('active');$('#particles').toggleClass('animating');$('#particles .triangle:first-child').toggleClass('pop-top');$('#particles .triangle:nth-child(2)').toggleClass('pop-top-left');$('#particles .triangle:nth-child(3)').toggleClass('pop-top-right');$('#particles .triangle:nth-child(4)').toggleClass('pop-bottom-left');$('#particles .triangle:nth-child(5)').toggleClass('pop-bottom-right')});$("#clap").on('animationend',function(){$(this).toggleClass('animating');$('#particles .triangle:first-child').toggleClass('pop-top')});$(document).on('click','.click-counter-link',function(e){e.preventDefault();var post_id=$(this).data('id');var post_URL=$(this).attr('href');$.ajax({url:counterlink.ajax_url,type:'post',data:{action:'click_counter_process',nonce:counterlink.ajax_nonce,post_id:post_id},success:function(response){$('#totalCounter').html(response)}})})})
;