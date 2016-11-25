Html element library for phpfox framework.
======================================================



HTML Structure
```php
{html}
    {directive}
    {header}
        {title}
        {keyword}
        {description}
        {meta}
        {link}
        {open_graph}
        {style}
        {inline_style}
        {script}
        {inline_script}
        {static_html}
    {body}
    {search_main}
    {search_nav}
    {search_form}
    {breadcrumb}
    {mainMenu}
    {subMenu}
    {category}
        Your Html Content Here  
    {footer
        {script}
        {inline_scripts}
        {static_html}
        
        
```
Best Practice

>
> In order to optimize front-end, let control javascript/stylesheet by your own.
>
> 1. Put stylesheet resource to HEAD tag 
> 2. Put javascript resource to the end of BODY tag.
> 3. Reduce number of requests
> 4. Control javascript use `requirejs`
> 5. Control stylesheet use `requirecss`
>