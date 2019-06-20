# WordPress Bootstrap Starter

Bootstrap, the world’s most popular framework for building responsive, mobile-first sites.

BootstrapCDN on StackShare
https://www.bootstrapcdn.com

BootstrapCDN
https://getbootstrap.com/docs/4.3/getting-started/download/#bootstrapcdn

Bootstrap Getting Started
https://getbootstrap.com/docs/4.3/getting-started/introduction/


# jQuery
https://jquery.com/download/

#### Google CDN
https://developers.google.com/speed/libraries/#jquery

Libraries
To load a hosted library, copy and paste the HTML snippet for that library (shown below) in your web page. For instance, to load jQuery, embed the <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> snippet in your web page.

We recommend that you load libraries from the CDN via HTTPS, even if your own website only uses HTTP. Nowadays, performance is fast, and caching works just the same. The CDN's files are served with CORS and Timing-Allow headers and allowed to be cached for 1 year.


# Font Awesome
https://fontawesome.com
https://www.bootstrapcdn.com/fontawesome/

https://fontawesome.com/how-to-use/on-the-web/setup/hosting-font-awesome-yourself


Example

```html
<div class="my-button">
    <span class="text"> Settings Menu </span>
</div>
```
```css
/* font-awesome */
.my-button{
	display: inline-block;
	padding: 8px 12px;
	background: #eee;
	border: solid 1px #D5D5D5;
}

.my-button span {
	display: inline-block;
}

.my-button span:before {
	font-family: 'FontAwesome';
	content: '\f085';
	position: relative;
	margin-right: 5px;
	font-size: 110%;
}
```


# Google Fonts

In this example, we will use Google Fonts
https://fonts.google.com/


# Colors
https://coolors.co/


# Photos
https://www.pexels.com


# Load styles specific for a post

## functions.php

```php
// Styles for Responsive Breakpoints post
  if ( is_single() && get_the_ID() === 88 ) {
    wp_enqueue_style( 'responsive-breakpoints-styles', get_template_directory_uri() . '/css/responsive_breakpoints.css' );
  }  
```

### body_class Template Tag

body_class( string|string[] $class = '' )<br>
https://developer.wordpress.org/reference/functions/body_class/#more-information

The following example shows how to implement the body_class template tag into a theme.
```html
<body <?php body_class(); ?>>
```

The actual HTML output might resemble something like this (the About the Tests page from the Theme Unit Test):
```html
<body class="page page-id-2 page-parent page-template-default logged-in">
```

In the WordPress Theme stylesheet, add the appropriate styles, such as:
```css
.page {
    /* styles for all posts within the page class */
}
.page-id-2 {
    /* styles for only page ID number 2 */
}
.logged-in {
    /* styles for all pageviews when the user is logged in */
}
```
To add more classes, the template tag’s parameter can be added. For example, to add a unique class to the same template used above:
```html
<body <?php body_class( 'class-name' ); ?>>
```

The results would be:
```html
<body class="page page-id-2 page-parent page-template-default logged-in class-name">
```

### is_single Template Tag

is_single( int|string|array $post = '' )</br>
https://developer.wordpress.org/reference/functions/is_single/

```php
is_single();
// When any single Post page is being displayed.
 
is_single('17');
// When Post 17 (ID) is being displayed.
 
is_single(17);
// When Post 17 (ID) is being displayed. Integer parameter also works

is_single('Irish Stew');
// When the Post with post_title of "Irish Stew" is being displayed.
```

### get_the_ID()

https://developer.wordpress.org/reference/functions/get_the_id/

The ID can be stored as a variable using

```php
<?php $postid = get_the_ID(); ?>
```
