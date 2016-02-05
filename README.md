# MonsieurPress
Hello, I'm MonsieurPress, a super cool, lightweight & simple WordPress starter theme for developpers

## How am I ?
I've been made by a developper not 100% satisfied with existing starter theme, I'm a little less barebones and I have a minimal design, like them, I'm not meant for being used as a parent theme, just adopt me and hack me ! I'm very minimal & easy to understand, I use modern workflow like gulp, sass, and love. [Check my website](http://www.monsieurpress.com/ "MonsieurPress") to see how I look without modification.

## Requirements
- A working WordPress installation
- Npm (packaged in node)

## How to use me ?
Go to your wordpress theme folder with your terminal, and type the following commands : 

	$ git clone https://github.com/dadipaq/monsieurpress.git [yourthemename]
    $ cd [yourthemename]
	$ npm install
	$ gulp
 
You are now ready for happy coding !
 
## Gulp tasks
I have some embeded gulp tasks that can be use for you workflow :

- `gulp` : Watch the `scss` directory and compile files to the style.css file
- `gulp styles` : Just compile the scss (no watching)
- `gulp minify` : Minify the style.css file, do this before production
- `gulp images` : Compress images located in the images folder
- `gulp compress` : Minify the javascript

## Note
I'm very new and under development... Much better soon !