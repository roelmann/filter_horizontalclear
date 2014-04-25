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

/**
 *
 * @package    filter
 * @subpackage buttonawesome
 * @copyright  fontawesome filter 2013 Julian Ridden <julian@moodleman.net>
 * 			   adapted to include bootstrap button code by Richard Oelmann
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * This filter extends the fontawesome filter to convert the icons into buttons using bootstrap btn classes
 */

defined('MOODLE_INTERNAL') || die();

$string['filtername'] = 'Clear Horizontal Line Filter.';
$string['settingformats'] = 'Apply to formats';
$string['settingformats_desc'] = 'The filter will be applied only if the original text was inserted in one of the selected formats.';
