/*!/wp-content/themes/octopus/js/banners-logic-new.js*/
jQuery(document).ready(function($){const OnThankYouPage=window.location.href.includes('/thank-you-makeover');const isMakeover=window.location.href.includes('/linkedin-profile-makeover-improve-your-profile');const FreeChecklistPage=window.location.href.includes('/linkedin-growthhacking-checklist');const FreeChecklistThanks=window.location.href.includes('/guide-on-its-way');localStorage.setItem('wasOnSite','1');if(!isMakeover&&!OnThankYouPage&&!FreeChecklistPage&&!FreeChecklistThanks){if(($(window).width())<992){setTimeout(function(){if(!$('#bottomModal').hasClass('show')&&!localStorage.getItem('checklistModal')){$('#checklistModal').modal({backdrop:!0,show:!0});localStorage.setItem('checklistModal','1');sessionStorage.setItem('checklistModal','1')}},6000)}else{$(document).mouseleave(function(e){if(e.clientY<0&&!$('#bottomModal').hasClass('show')&&!localStorage.getItem('checklistModal')){$('#checklistModal').modal({backdrop:!0,show:!0});localStorage.setItem('checklistModal','1');sessionStorage.setItem('checklistModal','1')}})}}
if(!FreeChecklistThanks&&!FreeChecklistPage&&localStorage.getItem('checklistModal')&&!sessionStorage.getItem('checklistModal')){window.addEventListener('scroll',function(){let bottomModal=localStorage.getItem('bottomModalNext');if(bottomModal>new Date()){return}
var bottomModalExpires=new Date();bottomModalExpires=bottomModalExpires.setHours(bottomModalExpires.getHours()+12);localStorage.setItem('bottomModalNext',bottomModalExpires);let j=localStorage.getItem('bottomModal');if(j===null)j=0;setTimeout(function(){if(!$('#checklistModal').hasClass('show')){$('#bottomModal').modal({backdrop:!1,show:!0})}},4000);j++;localStorage.setItem('bottomModal',j)})}})
;