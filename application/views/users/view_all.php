<?php
$this->table->set_heading('Név', 'Felhasználónév', 'E-mail cím', 'Szerkesztés', 'Törlés');
foreach ($users as $user){
    $this->table->add_row(
        $user['name'],
        $user['username'],
        $user['email'],
        anchor(base_url().'users/edit/'.$user['username'], 'Szerkesztés'),
        anchor(base_url().'users/delete/'.$user['username'], 'Törlés',
            'onclick="return confirm(\'Biztosan törölni szeretnéd '.$user['username'].' felhasználót?\');"')
    );
}
echo $this->table->generate();
echo $this->pagination->create_links();
