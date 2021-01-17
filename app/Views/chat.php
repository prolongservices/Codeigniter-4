<?= $this->include('admin/header') ?>

<body>
  <form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">

    <input type="submit">
  </form>
  <ul id="messages"></ul>

  <?= $this->include('admin/footer') ?>
  <script>
    const myName = prompt("Enter your name");
    function sendMessage() {
      // get message
      var message = $('#message').val();

      // save in database
      firebase.database().ref("messages").push().set({
        "sender": myName,
        "message": message
      });

      $('#message').val('')

      // prevent form from submitting
      return false;
    }

    // listen for incoming messages
    firebase.database().ref("messages").on("child_added", function(snapshot) {
      let html = "";
      // give each message a unique ID
      html += "<li id='message-" + snapshot.key + "'>";
      // show delete button if message is sent by me
      if (snapshot.val().sender == myName) {
        html += "<button data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
        html += "Delete";
        html += "</button>";
      }
      html += snapshot.val().sender + ": " + snapshot.val().message;
      html += "</li>";
      $('#messages').append(html);
    });

    function deleteMessage(self) {
      // get message ID
      var messageId = self.getAttribute("data-id");

      // delete message
      firebase.database().ref("messages").child(messageId).remove();
    }

    // attach listener for delete message
    firebase.database().ref("messages").on("child_removed", function(snapshot) {
      // remove message node
      $('#message-' + snapshot.key).html('This message has been removed')
    });
  </script>
  