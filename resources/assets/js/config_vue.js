import Vue from 'Vue';

//This transitions require Animatecss loaded

/*
This is configuration for transitions on implementaion
 */

Vue.transition('bounce', {
    enterClass: 'bounceInLeft',
    leaveClass: 'bounceOutRight'
});

Vue.transition('flip', {
    enterClass: 'flipInX',
    leaveClass: 'flipOutX'
});

Vue.transition('lightSpeed', {
    enterClass: 'lightSpeedIn',
    leaveClass: 'lightSpeedOut'
});

Vue.transition('fade', {
    enterClass: 'fadeIn',
    leaveClass: 'fadeOut'
});

Vue.transition('slide', {
    enterClass: 'slideInUp',
    leaveClass: 'slideOutUp'
});

Vue.transition('zoom', {
    enterClass: 'zoomIn',
    leaveClass: 'zoomOut'
});

export default Vue;