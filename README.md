# Tower - Custom WordPress Theme

This is a WordPress theme built using Underscores. I use it on my website [Kernix Web Design](https://kernixwebdesign.com/) and it's custom built for my site - you would not want to use it for yourself.

## To Do Items

1. 📌 ✅ HOME: New Logo - ehh, it's okay - new one again, better but bad font
2. 📌 ✅ Custom header.php for page

- Now I have too many, need to create a template-part for D.R.Y. principle
- or use a conditional like in index.php, e.g.: `if ( is_home() && ! is_front_page() ) :`

3. 📌 ✅ Enqueue Font Awesome - not working, had to use a plugin (slowing my site)
4. 📌 ✅ Site looks way better but still needs tweaks to the styling and content
5. 📌 Console Error:

- 📌 1 for `Uncaught ReferenceError: wp is not defined` - I assume in reference to the prefix `$wp_` - do I need to replace with my textdomain?

7. 📌 ONGOING Update repo theme with the theme here and push to live site
