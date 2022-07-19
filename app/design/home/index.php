<h1>Contact form</h1>
<form action="<?php echo $this->url('contact/submit'); ?>" method="post">
    <input type="text" name="name" placeholder="name"><br>
    <input type="text" name="surname" placeholder="surname"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="text" name="phone" placeholder="phone"><br>
    <input type="number" min="1" name="age" placeholder="age"><br>
    <select name="gender_id">
            <option value="male">male</option>
            <option value="female">female</option>
    </select><br>
    <select name="club_id">
        <?php foreach ($this->data['club'] as $club): ?>
            <option value="<?= $club->getId() ?>"><?= $club->getName() ?></option>
        <?php endforeach; ?>
    </select><br>
    <button type="submit">Register</button>
</form>