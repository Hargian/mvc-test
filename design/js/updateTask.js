function activateForm(block) {
    var values = document.getElementsByClassName('table-values');
    var inputs = document.getElementsByClassName('table-inputs');
    for(var i =0;i<values.length;i++){
        values[i].style.display='';
        inputs[i].style.display='none';
    }
    if(block.getElementsByTagName("p")[0].style.display != 'none'){
        block.getElementsByTagName("p")[0].style.display = 'none';
        block.getElementsByTagName("div")[0].style.display = ''
    }
}
function sendForm(input) {
    input.parentNode.parentNode.style.display = 'none';
    input.parentNode.parentNode.style.display = 'none';
    var p = input.parentNode.parentNode.parentNode.getElementsByTagName("p")[0];
    if(input.name=='status'){
        if(input.value==1){
            p.innerHTML ='В работе';
        }else{
            p.innerHTML ='Выполнено';
        }
    }else{
        p.innerHTML =input.value;
    }
    p.style.display = '';
    var a = input.parentNode.childNodes[1].name;
    $.ajax({

        type: "GET",
        url: "api/update",
        data:{
            'value':input.parentNode.childNodes[1].value,
            'id':input.parentNode.childNodes[3].value,
            'name':a
        },
        success:function (data) {
            console.log(data);
        }
    });
}

function nextPage(but) {
    var form = but.parentNode;
    var params = window.location.search.replace('?','').split('&').reduce(
            function(p,e){
                var a = e.split('=');
                p[ decodeURIComponent(a[0])] = decodeURIComponent(a[1]);
                return p;
            },
            {}
        );
    var input;
        if(params['order_username']){
            input = document.createElement('input');
            input.type = "hidden";
            input.name = "order_username";
            input.value = params['order_username'];
            form.insertBefore(input, form.children[1]);
        }
        if(params['order_email']){
            input = document.createElement('input');
            input.type = "hidden";
            input.name = "order_email";
            input.value = params['order_email'];
            form.insertBefore(input, form.children[1]);
        }
        if(params['order_status']){
            input = document.createElement('input');
            input.type = "hidden";
            input.name = "order_status";
            input.value = params['order_status'];
            form.insertBefore(input, form.children[1]);
        }
    return true;
}

function checkSorts(but) {
    var form = but.parentNode;
    if(form.order_username.value==""){
        form.removeChild(form.order_username)
    }
    if(form.order_email.value==""){
        form.removeChild(form.order_email)
    }
    if(form.order_status.value==""){
        form.removeChild(form.order_status)
    }
    return true;
}