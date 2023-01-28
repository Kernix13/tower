# Tower Custom WordPress Theme

This is the theme I built for my website [Kernix Web Design](https://kernixwebdesign.com/ 'Kernix Web Design Home'). I will update this readme file later. I would not recommend downloaded and then uploading this theme for your website unless you know CSS. I have the theme header and footr colors hardcoded in the main CSS file.

## Important Notes

I removed files that were part of the Underscores download but are not required for my theme to run. They are throwing errors in my GitHub repo because of the dependencies. Here is what I removed

- `.eslintrc`: extends `plugin:@wordpress/eslint-plugin/esnext`
- `.stylelintrc.json`: not worth covering the few things in this file
- `composer.json`: I may need this back becuse I used a command to create the `style-rtl.css` file.
- `composer.phar`: empty file. I think this was created when I ran `git init` and I had `package.json`.
- `package.json` and `package.lock.json`: not using node modules

Check out the notes on `composer` at the bottom of `README_S.md` on composer. I may need to install composer as I make changes to my styles so that they are reflected in `style-rtl.css`.

You can also check the [Underscores repo](https://github.com/Automattic/underscores.me) to see their files, or download a version from [their website](https://underscores.me/) to get a copy of those files.

I added back the following files:

- `LICENSE`: I assume this is important to have but it's legal babble to me.
- `phpcs.xml.dist`: I have no idea how to use this file. Added it to `.gitignore` but it wasn't ignored so I had to remove it.

## Template Files

Notes on the various files:

1. **`date.php`**: I included it but I have no intention of added links to the dates for my blog posts. It's not a blog based site and I will not be writing a ton of articles.
1. **`comments.php`**: Same as for date.php - I will not have comments enabled for any of my posts so no need to actually call it.

### Template files for child themes

These are the templates that would be ideal for customization:

1. `author.php`:
1. `category.php`:
1. `template-full-width.php`:

## Template-Parts Files

Pertinent notes here

## CSS Folder Files

Pertinent notes here

## INC Folder Files

Pertinent notes here

## JS Folder Files

Pertinent notes here

> Testing `git clone` on my new laptop 12/10/2022

```html
<div class="pre-container">
  <pre class="code-block dark_block">
        <code data-line="1">&lt;<span class="green">?php</span></code>
        <code data-line="2"></code>
        <code
          data-line="3"> $query <span class="blue"></span>= <span class="red">new</span> <span class="purple">WP_Query</span>( [</code>
          <code
            data-line="4"> <span class="light-blue">&apos;post__not_in&apos;</span> <span class="blue"></span>=&gt; <span class="purple">get_option</span>( <span class="light-blue">&apos;sticky_posts&apos;</span>),</code>
          <code
            data-line="5"> <span class="light-blue">&apos;post_type&apos;</span> <span class="blue"></span>=&gt; <span class="light-blue">&apos;post&apos;</span>,</code>
          <code
            data-line="6"> <span class="light-blue">&apos;post_status&apos;</span> <span class="blue"></span>=&gt; <span class="light-blue">&apos;publish&apos;</span>,</code>
          <code
            data-line="7"> <span class="light-blue">&apos;category_name&apos;</span> <span class="blue"></span>=&gt; <span class="light-blue">&apos;code&apos;</span>,</code>
          <code
            data-line="8"> <span class="light-blue">&apos;posts_per_page&apos;</span> <span class="blue"></span>=&gt; 3,</code>
        <code data-line="9"> ] );</code>
        <code data-line="10"></code>
        <code data-line="11"> <span class="red">if</span> ($query-&gt;<span class="purple">have_posts</span>())<span class="orange"></span> {</code>
          <code
            data-line="12"> <span class="red">while</span> ($query-&gt;<span class="purple">have_posts</span>())<span class="orange"></span> {</code>
            <code data-line="13"> $query-&gt;<span class="purple">the_post</span>(); <span class="green">?</span>&gt;</code>
      </pre>
</div>
```
