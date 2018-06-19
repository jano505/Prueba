$(document).ready(load);

function load(){
    $("#calc").click(calc);
}

function calc(){
    var num1=$("#num1").val();
    var num2=$("#num2").val();
    var values=[num1,num2];
    var operation=$("#operation").val();
    $.ajax({
        data:{ "values":values, "operation":operation},
        type: "GET",
        dataType: "json",
        url: "http://localhost/Prueba/SumWebService.php",
        success: function(data) {                
            if (data.Status==="OK"){
                $("#result").text(data.Result+"");
            } else{
                alert(data.Msg);
            }
        }
    });
}
