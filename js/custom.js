/**active class**/
let url=window.location.href;
// console.log(url);
let className= url.split('/')[url.split('/').length-1].split('.')[0];
// console.log(className);
// console.log($('.nav-item').addClass('active'));
$(`.${className}`).addClass('active');
// if(url.includes("index"))

//**Form validation**//
$("#voterRegister").submit