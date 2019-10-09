<?php foreach ($experiences as $experience) {
    echo $experience->title . " - " . $experience->user->email . '<br>';
}
