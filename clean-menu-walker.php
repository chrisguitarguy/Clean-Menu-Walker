<?php
/**
 * Plugin Name: Clean Menu Walker
 * Plugin URI: https://github.com/chrisguitarguy/Clean-Menu-Walker
 * Description: A walker implementation that doesn't attempt to indent and cleans up class names.
 * Version: 1.0
 * Author: Christopher Davis
 * Author URI: http://christopherdavis.me
 * License: MIT
 *
 * Copyright (c) 2015 Christopher Davis <http://christopherdavis.me>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a
 * copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 * @category    WordPress
 * @package     CleanMenuWalker
 * @author      Christopher Davis <http://christopherdavis.me>
 * @license     http://opensource.org/licenses/MIT MIT
 */

!defined('ABSPATH') && exit;

require_once __DIR__.'/inc/CleanMenuWalker.php';
require_once __DIR__.'/inc/functions.php';

add_filter('wp_nav_menu_args', 'cmw_set_walker');
