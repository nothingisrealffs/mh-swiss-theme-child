# mh-swiss-theme-child
Assignment 3

### Child Themes
A child theme is what I lovingly will say is what a child is anywhere either in programming or life; something dependant on something else to exist, else it fails. In here, we have the templates, styles and functions but allows us to override and extend it without touching the parents. The connection between the child and parent in WP happens within the child theme's style.css, you mark the template as whatever you named the parent; for me its `Template: mh-swiss-theme`. The reason you want to do child themes for changes is simple; if you are using someone else's stuff then if they update it for their needs, it does not overwrite your changes that you want.

### Template Hierarchy
As we've learned in class; there is a template hierarchy that exists within WP much like most coding languages where it goes from Most Specific possible template to Least Specific/Most General. With a child theme active, it apparently just checks the child theme folder at every step before looking at it's parent. This means that `single.php`, since its in the child, will never be read on the parent's.

### Reflection
I had a rough break and did not do enough on this assignment; frankly all i added was an estimated reading time above the content and surfacing post tags in the footer. This was to align it more with News Sites today, which many of them have reading times available so you know how long the article is before you start. The tags being available means that the users see what it is about before it comes up
