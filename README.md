# Simple Wordpress shortcode template

This is a simple Wordpress shortcode template that can be used to display info using custom PHP code.

Source: [Robert Ableson](https://robertableson.com/)

## Integration
Please follow these instructions to use your own simple Wordpress shortcode.

Add the following code to your functions.php file (Child Theme recommended) or using a plugin like [Code Snippets](https://en-ca.wordpress.org/plugins/code-snippets/). 
```PHP
<?php

//This is a simple shortcode template for Wordpress.
//To show the shortcode result, use [ra_display_shortcode_result] in a page or compatible field.  

function ra_display_shortcode_template() {
    $message = 'Hello world!'; 
  
    return $message;
}
add_shortcode('ra_display_shortcode_result', 'ra_display_shortcode_template');
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)