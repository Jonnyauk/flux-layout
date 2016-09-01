====================================
# Flux Layout
#### Version v2.0 beta
#### Copyright (c)2014-2016 Jonny Allbut
#### [Demo: http://fluxlayout.com](http://fluxlayout.com)
#### [Author: https://jonnya.net](http://jonnya.net)
#### [GitHub: Jonnyauk](https://github.com/Jonnyauk/)
#### [Twitter: @Jonnyauk](https://twitter.com/jonnyauk/)
====================================

Generates a dynamic responsive CSS grid - any columns, any width - in less than 5k!
----------------------------------------------------------------------

Creatives don't like being dictated to or told how many columns their layout has
to have or having a whole bunch of other junk CSS that you have to load and
overload. Flux layout solves this - it's a fully dynamic responsive layout
system with extensive built-in media queries and logically named CSS classes.

Dynamic generation or ultra compact static - the choice is yours!
----------------------------------------------------------------------

Use either the static CSS version, or the PHP version if you wish to generate
your own grid system and media queries. Change on the fly on a per view basis,
create and minify your own static CSS file... it's the responsive layout system
built to be as flexible as possible!

Say NO to CSS cruft in under 5k
----------------------------------------------------------------------

It includes normalise.css along with a small amount of other general rules
(including all WordPress core required CSS) - no other button styling (who wants
the same looking buttons as everyone else?!), cruft or junk to clutter up your
files. Lean and mean - if you minify the file & enable server compression you
can get it down to less than 5k - **light enough for you?!**

Getting started
----------------------------------------------------------------------

Download, unzip if required and take a close look at:
`examples/01-basic-responsive.htm`
this file contains lots of comments and demonstrations of use Flux Layout.

You have 3 options on how to use Flux Layout:

- **Flux Layout CSS - uncompressed development version (readable)**
Change Flux Layout stylesheet path to:
`"../lib/flux-layout-static.css"`

**Flux Layout CSS - compressed production version**
Change Flux Layout stylesheet path to:
`"../lib/flux-layout-static-min.css"`

**Flux Layout Dynamic - Dynamic PHP generated responsive grid system**
Change Flux Layout stylesheet path to: `"../lib/flux-layout-dynamic.php?wu=percent&amp;w=80&amp;p=middle&amp;sbp=left&amp;c=16&amp;r=2-4-10&amp;g=2&amp;mqmin=y"`

**Use the following URL parameters to generate your custom responsive grid system:**
- **wu**	= Unit (percent, pixels - default: percent)
- **w**		= Width of main container (number - default: 80, max: 100% or max: 4000px)
- **p** 	= Position of main container (left, middle, right - default: middle)
- **sbp**	= Sidebar position (left, right - default: left)
- **c**		= Number of columns (number - default: 16, max = 100)
- **r**		= Range of additional column setups - defined as a hyphen (-) separated list of numbers (2-4-5-12, default: none)
- **g**		= % gutter between columns (number - default: 2, max: 25)
- **mqmin**	= Remove rarely used rules in media queries - recommended - reduces output by over 50%! (y, n, default: y)

Other notes
----------------------------------------------------------------------

This project is in a flux of development (apologies for the corny joke!) -
so **ALL suggestions/bug swattings welcome** - just leave an issue ticket on
Github! In it's current form it's fully functional without bugs and there are a
couple of ideas for additional functionality that I'm trying out and a-little
work to do on columns.

Flux Layout has been developed as part of the free, Open Source Wonderflux
Theme Framework for WordPress - http://wonderflux.com
