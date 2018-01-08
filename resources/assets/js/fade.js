/**
 * Every html element with the class 'fade' should fade in when scrolling down
 *
 * Copyright (C) 2017 Jordan Kniest
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category Core
 * @package  JKniest.de
 * @author   Jordan Kniest <contact@jkniest.de>
 * @license  GNU AFFERO GENERAL PUBLIC LICENSE <http://www.gnu.org/licenses/agpl.txt>
 * @link     https://jkniest.de
 */

$(window).on('load', function() {
    $(window)
        .scroll(function() {
            let windowBottom = $(this).scrollTop() + $(this).innerHeight();

            $('.fade').each(function() {
                let objectBottom = $(this).offset().top + $(this).outerHeight();

                if (objectBottom < windowBottom + 400) {
                    if ($(this).css('opacity') == 0) {
                        $(this).fadeTo(500, 1);
                    }
                }
            });
        })
        .scroll();
});
