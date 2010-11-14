# Scaffold Theme for the ExpressionEngine 2.0 Forum Module

### Overview

Scaffold is intended as a base start point for developers working with the EE2 Discussion Forum Module. 

The view files have been written with the intent of giving devs as much control via css as possible. Lots of tables have been removed, many still remain but at least they have hooks to style for your needs.

Take it for a spin here: [http://scaffold.iain.co.nz/forums/](http://scaffold.iain.co.nz/forums/)

Some tasks are outstanding.

 - CSS needs a big tidy up - I worked very quickly writing css as I went through each template.
 - Some icons are still from the default theme and need replacing
 - Many js functions could be 'jQueryfied', there's a lot of old school js still in there from the default EL theme.
 
Its still not an 'ideal' theme, but definitely a much better starting point than the EL themes.

### Installation

Rename the download to `scaffold`, drop it into `/themes/forum_themes/` and activate via the cp.

First thing you'll want to do is update the header files and sort out your paths, and customise the menu etc.

You can find them in `/forum_global/`, 

Inside `html_header.html` you'll need to update the paths if your theme folder is not in the root

	<link rel="stylesheet" href="/themes/forum_themes/scaffold/forum_assets/css/screen.css" type="text/css" media="screen, projection" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="/themes/forum_themes/scaffold/forum_assets/js/forum.js" type="text/javascript"></script>


And within `top_bar.html` you'll need to edit the main header file of the site to suit your needs.

There are some psd files within `/forum_assets/` which you'll find useful if you want to add some spice to the icons I've put in there. And there is the background image for creating faux columns on the threads view.

### Donations

You can use all my code without paying anything! Having said that, a lot of work has gone into creating this module. If my code saves you some time and trouble, and you feel like making a small donation to support my future development efforts, it would be very much appreciated.

[Make a donation via PayPal](http://iain.co.nz/donate/)

###  License / Disclaimer

Copyright (c) 2010 Iain Urquhart - shout@iain.co.nz

If you find my work useful for your commercial project, please consider a $25 donation using the pledgie button above. Your generosity would support continued development of the theme.

This theme is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This theme is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.