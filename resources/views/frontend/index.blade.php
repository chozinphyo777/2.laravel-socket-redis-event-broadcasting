<div class="container">
    <h1>Hello World</h1>
    <div id="team1_score"></div>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.4.1/socket.io.js"> </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    var sock = io("http://localhost:3000");   
    sock.on('action-channel-one:App\\Events\\ActionEvent', function (data){
      var action = data.actionId;
      var actionData = data.actionData;
      if(action == "score_update" && actionData.team1_score) {
                $("#team1_score").html(actionData.team1_score);
          }
        });
  </script>