# Scaffold Theme for the ExpressionEngine 2.0 Forum Module

### Overview

Not ready for prime time yet, it's work in progress.

I've worked very quickly, rewriting view files with the intent of giving devs as much control via css as possible. Tables have been removed where possible, many remain.

Take it for a spin here: http://scaffold.iain.co.nz/forums/

I'm still working through a few remaining view files, with some key tasks outstanding.

 - CSS needs a big tidy up
 - Many js functions need rewritten.
 
If you find my work useful for your project, there's a nice green Pledgie donation button at the top of the page which could do with some love... You'd make this person in New Zealand quite happy, you would.

### Installation

Rename the download to `scaffold`, drop it into `/themes/forum_themes/` and activate via the cp.

First thing you'll want to do is update the header files and sort out your paths, and customise the menu etc.

You can find them in `/forum_global/`, 

Inside `html_header.html` you'll need to update the paths if your theme folder is not in the root

	<link rel="stylesheet" href="/themes/forum_themes/scaffold/forum_assets/css/screen.css" type="text/css" media="screen, projection" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script src="/themes/forum_themes/scaffold/forum_assets/js/forum.js" type="text/javascript"></script>


And within `top_bar.html` you'll need to edit the main header file of the site to suit your needs.

###  License / Disclaimer

Copyright (c) 2010 Iain Urquhart - shout@iain.co.nz

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