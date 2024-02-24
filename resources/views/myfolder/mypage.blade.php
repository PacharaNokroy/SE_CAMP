<h1>My Folder and My Page</h1>
<h1>
    <?php echo $val_a . ' ' . $val_b; ?>
</h1>
<h1>{{ $val_a . ' ' . $val_b }}</h1>
<form method="post" action="/my-controller4">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">Submit</button>
</form>
