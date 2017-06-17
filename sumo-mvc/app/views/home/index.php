<h1>Hello World</h1>
<form action="home/save" method="post">
    <input type="text" name="name" id="name" placeholder="Your name" value="<?php echo $this->user->name; ?>">
    <input type="email" name="email" id="email" placeholder="Your email">
    <input type="text" name="username" id="username" placeholder="Your username">
    <button type="submit">Save</button>
</form>