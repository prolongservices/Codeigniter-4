
<body>
    <form action='<?= base_url('Student/acceptData') ?>' method='POST'>
        <h2><?= $title ?> </h2>
        <input type='email' name='email' placeholder='Enter Your email'/>
        <input type='text' name='name' placeholder='Enter Your name'/>

        <button type='submit' >Save</button>
    </form>
</body>

</html>