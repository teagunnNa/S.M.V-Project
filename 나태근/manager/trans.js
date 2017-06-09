//<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script> 

$(document).ready(function(){

    $("#post_submit").click(function(){
        
        var post_data = "post_msg="+$("#post_msg").val();

        $.ajax ({
            type:"POST",
            url:"./recv.php",
            data:post_data,
            success:function(data) {
                alert ("질문이 입력되었습니다.");
            }
        });
    });    

}); // ready
