$(document).ready(function(){
    $("#send-btn").on("click", function(){
        let userText = $("#user-input").val();
        if(userText.trim() === "") return;
        
        let userMsg = '<div class="user-message"><p>' + userText + '</p></div>';
        $("#chat-box").append(userMsg);
        $("#user-input").val("");

        $.ajax({
            url: "message.php",
            type: "POST",
            data: { text: userText },
            success: function(response){
                let botMsg = '<div class="bot-message"><div class="bot-icon">🤖</div><p>' + response + '</p></div>';
                $("#chat-box").append(botMsg);
                $("#chat-box").scrollTop($("#chat-box")[0].scrollHeight);
            }
        });
    });

    $("#user-input").keypress(function(e){
        if(e.which == 13) $("#send-btn").click();
    });
});
