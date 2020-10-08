require('./bootstrap');

window.$ = require('jquery');

function getData(){
  $.ajax({
    url:'/api/posts/all',
    method:'GET',
    success: function (data){
      console.log('data', data);
    },
    error: function (err){
      console.log('error', err);
    }
  });
}

function init(){
  getData();
}
$(document).ready(init);
