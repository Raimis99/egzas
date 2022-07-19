<h1>List</h1>
<table>
    <tr>
        <td>name</td>
        <td>surname</td>
        <td>email</td>
        <td>phone</td>
        <td>age</td>
        <td>gender</td>
        <td>club</td>
    </tr>
    <?php foreach ($this->data['registration'] as $registration): ?>
    <tr>
        <td><?= $registration->getName() ?></td>
        <td><?= $registration->getSurname() ?></td>
        <td><?= $registration->getEmail() ?></td>
        <td><?= $registration->getPhone() ?></td>
        <td><?= $registration->getAge() ?></td>
        <td><?= $registration->getGender() ?></td>
        <td><?= $registration->getClub() ?></td>


        <?php endforeach; ?>
</table>
