<?php
namespace block_nisan_rozet\task;
class deloldlog extends \core\task\scheduled_task {
    public function get_name() {
        // Shown in admin screens
        return get_string('deloldlog', 'block_nisan_rozet');
    }

    public function execute() {
        global $CFG;

        require_once($CFG->dirroot . '/blocks/nisan_rozet/locallib.php');
        block_nisan_rozet_deloldlog();

    }
}



?>