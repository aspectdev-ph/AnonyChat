<html>
    <head>
        <style>
            input, button { padding: 10px; }
        </style>
    </head>
    <body id="hello">
        <input type="text" id="message" />
        <button onclick="transmitMessage()">Send</button>
        <script>
            // Create a new WebSocket.
            var socket  = new WebSocket('wss://97b0cc29ccfe.ngrok.io:80');

            // Define the 
            var message = document.getElementById('message');

            function transmitMessage() {
                socket.send( message.value );
            }

            socket.onmessage = function(e) {
                if( e.data=="hello" ){
                    document.getElementById("hello").style.backgroundColor="red";
                }else{
                    alert(e.data);
                }
            }
        </script>
    </body>
</html>