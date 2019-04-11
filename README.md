# planet4-gpch-gutenberg-blocks
Provides Planet4 blocks editing in the Gutenberg editor.

**Implemented blocks:**
* Gallery: Slider (without title and subtitle)
* Gallery: 3 Column (without title and subtitle)
* Gallery Grid (without title and subtitle)

**Planet4 blocks to be implemented (Priority):**
* Articles (1)
* Carousel Header: Zoom and slide to grey (1)
* Carousel Header: Full width classic (1)
* Cookies (3)
* Counter: Text Only (3)
* Counter: Progress Bar (3)
* Counter: Progress Dial (3)
* Covers: Take Action Covers (1)
* Covers: Campaign Covers (1)
* Covers: Content Covers (1)
* Engaging Networks Form (3)
* Happy Point (2)
* Social Media: oEmbed (2)
* Social Media: Facebook Page (2)
* Split Two Columns (2)
* Submenu: Long full-width (3)
* Submenu: Short full-width (3)
* Submenu: Short sidebar (3)
* Take Action Boxout (2)
* Timeline (2)


**Planet4 Blocks that won't be implemented** (due to existing functionality in Gutenberg):
* Columns
* Media Block
* Subheader



## Technical implementation

The plugin requires Advanced Custom Fields 5.8 to be installed and uses it's Gutenberg functionality described here: https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/

For every block, there's an ACF field group that's added to the Gutenberg editor. A callback for the block prints the same shortcode that Planet4 blocks use. The output in the frontend and editor previews is therefore handled by the Planet4 blocks plugin.

