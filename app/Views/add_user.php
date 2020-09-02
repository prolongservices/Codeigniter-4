<html>
<head><title>Add User</title>

</head>
<body>
    <form action='<?= base_url('user/add') ?>' method='POST'>
        <h2>Add User Form </h2>
        <input type='text' name='fname' placeholder='First name'/>
        <input type='text' name='lname' placeholder='Last name'/>
        <input type='email' name='email' placeholder='Email'/>
        <select name="gender" id="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
        <input type='text' name='address' placeholder='Address'/>
        <button type='submit' >Add</button>
    </form>
</body>

</html>