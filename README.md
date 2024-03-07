# PHP Forms: Contact Form

To run this project, open a terminal at the root of this directory and start a PHP server with the following command:
```bash
php -S localhost:8000
```

Then, open your browser and navigate to [localhost:8000](http://localhost:8000/).  

## Mockup
If necessary, the PNG files of the mockup are available in the `/docs` directory.

## Assets
Images and stylesheets are located in their respective directories within the `/assets` folder.  
For a better and easier-to-maintain structure, CSS files have been rearranged into separate files, all of which are imported into the main `style.css`. 
If you need to add more, please maintain the naming convention of **imported files** by starting the name with an underscore. For example: `_form.css` could be created in the `styles` folder and then imported into the main `style.css` file as follows:
```css
@import '_form.css';
```
With that structure, the PHP files (or any HTML files as well) only need to link to the main `style.css` which imports all the others CSS. This is currently the case.

## Add the form
The `index.php` has a comment indicating where the form can be added.

## Create other pages.
If additional pages need to be added, the common navbar and footer are ready to be included in those pages. 
