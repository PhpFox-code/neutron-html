Html element library for phpfox framework.
======================================================



HTML Structure

```php
{html.directive}
    {html.header}
        {html.header.title}
        {html.header.keyword}
        {html.header.description}
        {html.header.meta}
        {html.header.link}
        {html.header.open_graph}
        {html.header.style}
        {html.header.inline_style}
        {html.header.script}
        {html.header.inline_script}
        {html.header.static_html}
    {html.body}
        {}
        {}
        {}
        Your Html Content Here  
    {html.footer}
        {html.footer.script}
        {html.footer.inline_scripts}
        {html.footer.static_html}
    
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