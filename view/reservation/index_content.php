<?php
$user_mdl = $this->getModel('users');
$module_name = $this->getCurrentModule();
$privileges = array(
    'clementine_reservation_gerer_reservation' => true
);
// Rajoute la possibilité d'afficher sous formes de calendrier si ce n'est pas une requête ajax
if (!$request->AJAX && !(isset($data['return_json']) && $data['return_json'])) {
    if ($id_ressource = $request->get('int', 'clementine_reservation_ressource-id')) {
        echo '<div><a href="' . __WWW__ . '/reservation/calendar?clementine_reservation_ressource-id=' . $id_ressource  .  '">Sous forme de calendrier</a></div>';
    } else {
        echo '<div><a href="' . __WWW__ . '/reservation/calendar">Sous forme de calendrier</a></div>';
    }
}
$this->getParentBlock($data, $request);
