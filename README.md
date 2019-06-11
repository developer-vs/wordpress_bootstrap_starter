# WordPress Bootstrap Starter

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


# body_class Template Tag

#### body_class( string|string[] $class = '' )
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
