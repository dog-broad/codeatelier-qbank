<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace qbank_codeatelierreport;

use core_question\local\bank\question_action_base;

defined('MOODLE_INTERNAL') || die();

/**
 * A question-bank row action linking to a CodeAtelier question's submissions
 * report. Shown only on CodeAtelier questions, and only to a user who may view
 * the question; the report page enforces the capability again.
 *
 * @package    qbank_codeatelierreport
 * @copyright  2026 CodeAtelier
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class report_action extends question_action_base {

    /** @var string the action label (cached). */
    protected $label;

    public function init(): void {
        parent::init();
        $this->label = get_string('reportaction', 'qbank_codeatelierreport');
    }

    public function get_menu_position(): int {
        return 600;
    }

    protected function get_url_icon_and_label(\stdClass $question): array {
        if (($question->qtype ?? '') !== 'codeatelier') {
            return [null, null, null];
        }
        if (!question_has_capability_on($question, 'view')) {
            return [null, null, null];
        }
        $url = new \moodle_url('/question/type/codeatelier/report.php', ['id' => $question->id]);
        return [$url, 'i/report', $this->label];
    }

}
