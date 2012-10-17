# Break Blade #
## It's like Fruit Ninja but, with breaks! ##

> Break Blade will slice & dice text by a certain amount of characters and will add a \<br\> tag to the end of each line; except for the last line.

## The following params are available for Break Blade: ##
	
* chars (required)

*Example usage:*

`{exp:break_blade:cut chars="14"}This is some chars long.{/exp:break_blade:cut}`

*Will produce:*

This is some<br>
chars long.

*Note: Break Blade counts characters yet, will not split words.*

## Installation ##

**For EE2**

Copy `system/expressionengine/third_party/blade_break` to your `system/expressionengine/third_party` directory

### Change Log ###

**Oct 17, 2012: 1.0.0**

	Initial Release
	
## Support ##

[Github Issues](https://github.com/Natetronn/break-blade/issues)

[http://natetronn.com](http://natetronn.com)

[@natetronn](http://twitter.com/natetronn)