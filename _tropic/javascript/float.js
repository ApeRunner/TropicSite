function myFunction()
{

var cusid_ele = document.getElementsByClassName('input_float');
for (var i = 0; i < cusid_ele.length; ++i) {
    var x = cusid_ele[i];
     
    x.value=parseFloat(x.value.replace("$","").replace(",",""));
}
}