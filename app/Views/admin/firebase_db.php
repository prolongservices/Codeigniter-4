<?= $this->include('admin/header') ?>

<body>
  <form onsubmit="return addUser();">
    <input id="name" placeholder="Enter name" autocomplete="off">
    <input id="email" placeholder="Enter email" autocomplete="off">
    <input id="address" placeholder="Enter address" autocomplete="off">

    <input type="submit">
  </form>

  <ul id="users"></ul>

  <?= $this->include('admin/footer') ?>
  <script>

    function addUser() {
      const name = $('#name').val();
      const email = $('#email').val();
      const address = $('#address').val();

      firebase.database().ref("users").push().set({
        name,
        email,
        address
      });
      return false;
    }

    firebase.database().ref("users").on("child_added", function(snapshot){
      let html = "";
      html += "<li id='user-" + snapshot.key + "'>";
      html += snapshot.val().name + " : " + snapshot.val().email + " : " + snapshot.val().address;
      html += "<button data-id='" + snapshot.key + "' onclick='deleteUser(this);'>Delete</button>";
      html += "</li>";
      $('#users').append(html);
    })

    firebase.database().ref("users").on("child_removed", function(snapshot) {
      // remove message node
      $('#user-' + snapshot.key).html('This user has been removed')
    });

    function deleteUser(self) {
      // get message ID
      var userId = self.getAttribute("data-id");

      // delete message
      firebase.database().ref("users").child(userId).remove();
    }
    
  </script>
  