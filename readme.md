# Random Redirector

## Description
Random Redirector is a simple PHP script that functions to redirect users to one of the predetermined links randomly. This script can be used in various cases, such as randomly selecting promotional links or creating dynamic website behavior.

## How It Works
This script operates by defining an array `$links` that contains the list of URLs to redirect to. Then, one link from this array is chosen randomly using the `array_rand` function. Finally, the user is redirected to the chosen URL using the `header` function.

## Example Links
In this example, two links are defined in the `$links` array:

- 'https://facebook.com/'
- 'https://google.com/'

You can add or modify these links as needed.

## How to Use
1. Place this code on a server that supports PHP.
2. Adjust the links in the `$links` array with the links you want to use.
3. Access this file through a browser, and you will be redirected to one of the defined links randomly.

## License
Feel free to use, modify, and distribute this code as you see fit.

## Support
If you have any questions or need further assistance, please don't hesitate to contact me through [GitHub](https://github.com/rackiet).
